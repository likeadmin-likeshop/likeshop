<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------


namespace app\admin\logic;


use think\Db;
use Requests;
use think\facade\Cache;
use think\facade\Log;

class UpgradeLogic
{

    /**
     * 远程资源地址
     * @var string
     */
    protected static $base_url = 'https://server.likeshop.cn';

    /**
     * 错误
     * @var
     */
    protected static $error;

    /**
     * @notes 获取错误信息
     * @return mixed
     * @author 段誉
     * @date 2021/11/8 17:19
     */
    public static function getError()
    {
        return self::$error;
    }



    /**
     * Notes: 版本列表
     * @param $page_no
     * @param $page_size
     * @author 段誉(2021/7/9 0:55)
     * @return array
     */
    public static function index($page_no, $page_size)
    {
        $result = self::getRemoteVersion($page_no, $page_size) ?? [];
        if (empty($result)) {
            return ['count' => 0, 'lists' => []];
        }

        $local_data = local_version();
        $local_version = self::formatVersion($local_data['version']);

        $count = $result['count'] ?? 0;
        $lists = $result['lists'] ?? [];

        foreach ($lists as $k => $item) {

            $item['version_no'] = self::formatVersion($item['version_no']);

            $lists[$k]['version_str'] = '';
            $lists[$k]['able_update'] = 0;
            if ($local_version == $item['version_no']) {
                $lists[$k]['version_str'] = '您的系统当前处于此版本';
            }

            if ($local_version < $item['version_no'] && !empty($item['package_link'])) {
                $lists[$k]['version_str'] = '系统可更新至此版本';
                $lists[$k]['able_update'] = 1;
            }

            //最新的版本号标志
            $lists[$k]['new_version'] = 0;
            $lists[0]['new_version'] = ($page_no == 1) ? 1 : 0;

            //注意,是否需要重新发布描述
            $lists[$k]['notice'] = [];
            if ($item['is_republish']) {
                $lists[$k]['notice'][] = '更新至当前版本后需重新发布前端商城';
            }
            if ($item['pc_shop_publish']) {
                $lists[$k]['notice'][] = '更新至当前版本后需重新发布PC商城端';
            }
            if ($item['pc_admin_publish']) {
                $lists[$k]['notice'][] = '更新至当前版本后需重新发布PC管理端';
            }
            if ($item['uniapp_publish']) {
                $lists[$k]['notice'][] = '更新至当前版本后需重新发布移动端商城';
            }

            //处理更新内容信息
            $contents = $item['update_content'];
            $add = [];
            $optimize = [];
            $repair = [];
            if (!empty($contents)) {
                foreach ($contents as $content) {
                    if ($content['type'] == 1) {
                        $add[] = '新增:'.$content['update_function'];
                    }
                    if ($content['type'] == 2) {
                        $optimize[] = '优化:'.$content['update_function'];
                    }
                    if ($content['type'] == 3) {
                        $repair[] = '修复:'.$content['update_function'];
                    }
                }
            }
            $lists[$k]['add'] = $add;
            $lists[$k]['optimize'] = $optimize;
            $lists[$k]['repair'] = $repair;
            unset($lists[$k]['update_content']);
        }

        return ['count' => $count, 'lists' => $lists];
    }



    /**
     * Notes: 获取远程数据
     * @param string $page_no
     * @param string $page_size
     * @author 段誉(2021/7/9 0:54)
     * @return mixed
     */
    public static function getRemoteVersion($page_no = '', $page_size = '')
    {
        $cache_version = Cache::get('version_lists' . $page_no);
        if (!empty($cache_version)) {
            return $cache_version;
        }

        if (empty($page_no) || empty($page_size)) {
            $remote_url =  self::$base_url."/api/version/lists?product_id=1&type=2&page=1";
        } else {
            $remote_url = self::$base_url."/api/version/lists?product_id=1&type=2&page_no=$page_no&page_size=$page_size&page=1";
        }

        $result = Requests::get($remote_url);
        $result = json_decode($result->body, true);
        $result = $result['data'] ?? [];
        Cache::set('version_lists' . $page_no, $result, 1800);
        return $result;
    }




    /**
     * Notes: 更新主程序
     * @param $version
     * @return bool|string
     * @author 段誉(2021/7/7 18:34)
     */
    public static function upgrade($post)
    {
        //更新状态
        $upgrade_status = true;
        // 本地更新路径
        $upgrade_path = ROOT_PATH . '/upgrade/';
        // 本地更新临时文件
        $temp_dir = ROOT_PATH . '/upgrade/temp/';

        Db::startTrans();
        try {
            $result = self::verify($post);
            if (!$result['has_permission']) {
                $tips = !empty($result['msg']) ? $result['msg'] : '请先联系客服获取授权';
                throw new \Exception($tips);
            }

            //远程下载链接
            $remote_url = $result['link'];

            if (!is_dir($upgrade_path)) {
                mkdir(iconv("UTF-8", "GBK", $upgrade_path), 0777, true);
            }

            //下载更新压缩包保存到本地
            $remote_data = self::downFile($remote_url, $upgrade_path);
            if (false === $remote_data) {
                throw new \Exception('获取文件错误');
            }

            //解压缩
            if (false === unzip($remote_data['save_path'], $temp_dir)) {
                throw new \Exception('解压文件错误');
            }

            //更新sql
            if (false === self::upgradeSql($temp_dir . 'sql/data/')) {
                throw new \Exception('更新数据库失败');
            }

            //更新文件
            if (false === self::upgradeDir($temp_dir . 'server/', self::getProjectPath())) {
                throw new \Exception('更新文件失败');
            }
            Db::commit();

        } catch (\Exception $e) {
            Db::rollback();
            //错误日志
            self::$error = $e->getMessage();
            $upgrade_status = false;
        }


        if($upgrade_status) {
            try {
                //更新sql->更新数据结构
                if (false === self::upgradeSql($temp_dir . 'sql/structure/')) {
                    throw new \Exception('更新数据库结构失败');
                }
            } catch (\Exception $e) {
                self::$error = $e->getMessage();
                $upgrade_status = false;
            }
        }

        //记录日志
        self::addlog($post, $upgrade_status);

        //删除临时文件(压缩包不删除,删除解压的文件)
        if (false === del_target_dir($temp_dir, true)) {
            Log::write('删除系统更新临时文件失败');
        }

        self::delUpgradeLock($post['version_no']);

        return $upgrade_status;
    }


    /**
     * Notes: 添加日志
     * @param $data
     * @param bool $status
     * @author 段誉(2021/7/13 17:53)
     * @return bool|\Requests_Response
     */
    public static function addlog($data, $status = true)
    {
        try{
            $data = [
                'version_id' => $data['id'],
                'version_no' => $data['version_no'],
                'domain' => $_SERVER["SERVER_NAME"],
                'type' => 2,
                'product_id' => 1,//单商户
                'update_type' => $data['update_type'],
                'status' => $status ? 1 : 0,
                'error' => empty(self::$error) ? '' : self::$error
            ];
            $request_url = self::$base_url.'/api/version/log';
            return Requests::post($request_url, [], $data);
        } catch(\Exception $e) {
            Log::write('更新日志添加失败:'.$e->getMessage());
            return false;
        }
    }


    /**
     * Notes: 下载压缩包
     * @param $url
     * @param string $savePath
     * @return array|bool
     * @author 段誉(2021/7/7 18:19)
     */
    public static function downFile($url, $savePath = './upgrade/')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);  //需要response header
        curl_setopt($ch, CURLOPT_NOBODY, FALSE);  //需要response body
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        $header = '';
        $body = '';
        if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == '200') {
            $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE); //头信息size
            $header = substr($response, 0, $headerSize);
            $body = substr($response, $headerSize);
        }
        curl_close($ch);
        //文件名
        $fullName = basename($url);
        //文件保存完整路径
        $savePath = $savePath . $fullName;
        //创建目录并设置权限
        $basePath = dirname($savePath);
        if (!file_exists($basePath)) {
            @mkdir($basePath, 0777, true);
            @chmod($basePath, 0777);
        }
        if (file_put_contents($savePath, $body)) {
            return [
                'save_path' => $savePath,
                'file_name' => $fullName,
            ];
        }
        return false;
    }

    /**
     * Notes: 获取项目路径
     * @return string
     * @author 段誉(2021/7/7 18:18)
     */
    public static function getProjectPath()
    {
        $path = dirname(ROOT_PATH);
        if(substr($path, -1) != '/') {
            $path = $path . '/';
        }
//        $path = trim(str_replace('server', '', $path));
        return $path;
    }



    /**
     * Notes: 执行指定文件夹内的sql文件
     * @param $dir
     * @return bool
     * @author 段誉(2021/7/7 18:13)
     */
    public static function upgradeSql($dir)
    {
        //遍历指定目录下的指定后缀文件
        $sql_files = get_scandir($dir, '', 'sql');

        if (false === $sql_files) {
            return false;
        }

        //当前数据库前缀
        $sql_prefix = config('database.prefix');

        //遍历更新sql
        foreach ($sql_files as $k => $sql_file) {
            if (get_extension($sql_file) != 'sql') {
                continue;
            }
            $sql_content = file_get_contents($dir . $sql_file);
            if (empty($sql_content)) {
                continue;
            }
            $sqls = explode(';', $sql_content);
            //执行sql
            foreach ($sqls as $sql) {
                if (!empty(trim($sql))) {
                    $sql = str_replace('`ls_', '`' . $sql_prefix, $sql);
                    Db::execute($sql . ';');
                }
            }
        }
        return true;
    }


    /**
     * Notes: 更新文件
     * @param $temp_file //临时更新文件路径 (新的更新文件)
     * @param $old_file //需要更新的文件路囧 (旧的文件)
     * @author 段誉(2021/7/12 18:13)
     * @return array|bool
     */
    public static function upgradeDir($temp_file, $old_file)
    {
        if (!file_exists($temp_file)) {
            return [];
        }

        if (empty(trim($temp_file)) || empty(trim($old_file))) {
            return false;
        }

        // 目录不存在就新建
        if (!is_dir($old_file)) {
            mkdir($old_file, 0777, true);
        }

        foreach (glob($temp_file . '*') as $file_name) {
            // 要处理的是目录时,递归处理文件目录。
            if (is_dir($file_name)) {
                self::upgradeDir($file_name . '/', $old_file . basename($file_name) . '/');
            }
            // 要处理的是文件时,判断是否存在 或者 与原来文件不一致 则覆盖
            if (is_file($file_name)) {
                if (!file_exists($old_file . basename($file_name))
                    || md5(file_get_contents($file_name)) != md5(file_get_contents($old_file . basename($file_name)))
                ) {
                    copy($file_name, $old_file . basename($file_name));
                }
            }
        }
        return true;
    }


    /**
     * @notes 格式化版本号
     * @param $version
     * @return array|string|string[]
     * @author 段誉
     * @date 2021/8/30 19:16
     */
    public static function formatVersion($version)
    {
        $version = trim($version);
        return str_replace('.', '', $version);
    }



    /**
     * @notes 授权验证
     * @param $params
     * @author Tab
     * @date 2021/10/26 17:12
     */
    public static function verify($params)
    {
        $domain = $_SERVER['SERVER_NAME'];
        $remoteUrl = self::$base_url . "/api/version/verify?domain=".$domain."&product_id=1&type=2&version_id=".$params['id']."&link=".$params['link'];
        $result = Requests::get($remoteUrl);
        $result = json_decode($result->body, true);
        $result = $result['data'] ?? ['has_permission' => false, 'link' => '', 'msg' => ''];
        return $result;
    }


    /**
     * @notes 更新类型映射
     * @param $type
     * @return string
     * @author 段誉
     * @date 2021/11/1 16:08
     */
    public static function pkgLineMap($type)
    {
        $data = [
            1 => 'package_link', //一键更新类型 : 服務端更新包
            2 => 'package_link', //服務端更新包
            3 => 'pc_package_link',  //pc端更新包
            4 => 'uniapp_package_link',  //uniapp更新包
            5 => 'web_package_link', //后台前端更新包
            6 => 'integral_package_link',  //完整包
        ];
        return $data[$type] ?? '未知类型';
    }



    /**
     * @notes 获取更新包下载链接
     * @param $params
     * @return array|false
     * @author 段誉
     * @date 2021/11/8 18:06
     */
    public static function getPkgLine($params)
    {
        //处理状态
        $status = true;

        // 授权验证
        $params['link'] = self::pkgLineMap($params['update_type']);
        $result = self::verify($params);
        if (!$result['has_permission']) {
            self::$error = !empty($result['msg']) ?  $result['msg'] : '请先联系客服获取授权';
            $status = false;
        }

        //增加日志记录
        self::addlog($params, $status);

        if ($status) {
            return ['link' => $result['link']];
        }
        return false;
    }


    /**
     * @notes 设置更新锁定
     * @param $version_no
     * @author 段誉
     * @date 2022/3/23 10:14
     */
    public static function setUpgradeLock($version_no)
    {
        Cache::set('upgrade_'.$version_no,  $version_no, '60');
    }

    /**
     * @notes 获取更新锁
     * @param $version_no
     * @return mixed
     * @author 段誉
     * @date 2022/3/23 10:14
     */
    public static function getUpgradeLock($version_no)
    {
        return Cache::get('upgrade_'.$version_no);
    }


    /**
     * @notes 删除更新锁
     * @param $version_no
     * @author 段誉
     * @date 2022/3/23 10:15
     */
    public static function delUpgradeLock($version_no)
    {
        Cache::set('upgrade_'.self::formatVersion($version_no), null);
    }


}