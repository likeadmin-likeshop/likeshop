<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------


namespace app\common\server;


class UrlServer
{
    /**
     * User: 意象信息科技 lr
     * Desc: 获取文件全路径
     * @param string $uri
     * @param string $type
     * @return string
     */
    public static function getFileUrl($uri = '', $type = '')
    {
        if (empty($uri)) {
            return '';
        }
        if (strstr($uri, 'http://') || strstr($uri, 'https://')) {
            return $uri;
        }

        if ($uri && $uri !== '/' && substr($uri, 0, 1) !== '/') {
            $uri = '/' . $uri;
        }

        // 获取存储引擎信息
        $engine = ConfigServer::get('storage', 'default', 'local');

        if ($engine === 'local') {

            //图片分享处理
            if ($type && $type == 'share') {
                return ROOT_PATH . $uri;
            }

            if (isset($uri[0])) {
                $uri[0] != '/' && $uri = '/' . $uri;
            }
            
            $protocol = is_https() ? 'https://' : 'http://';
            $file_url = config('project.file_domain');
            return $protocol . $file_url . $uri;

        } else {

            $config = ConfigServer::get('storage_engine', $engine);
            $domain = isset($config['domain']) ? $config['domain'] : 'http://';
            return $domain . $uri;
        }
    }

    /**
     * NOTE: 设置文件路径转相对路径
     * @author: 张无忌
     * @param string $uri
     * @return mixed
     */
    public static function setFileUrl($uri='')
    {
        $engine = ConfigServer::get('storage', 'default', 'local');
        if ($engine === 'local') {
            $domain = request()->domain();
            return str_replace($domain.'/', '', $uri);
        } else {
            $config = ConfigServer::get('storage_engine', $engine);
            return str_replace($config['domain'], '', $uri);
        }
    }

}