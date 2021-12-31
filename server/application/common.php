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
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Db;

/**
 * User: 意象信息科技 lr
 * Desc:debug专用
 */
function dd()
{
    $parameters = func_get_args();
    if (count($parameters) == 1) {
        $parameters = $parameters[0];
    }
    var_dump($parameters);
    exit;
}

/**
 * User: 意象信息科技 lr
 * Desc：生成密码密文
 * @param $plaintext string 明文
 * @param $salt string 密码盐
 * @return string
 */
function create_password($plaintext, $salt)
{
    $salt = md5('y' . $salt . 'x');
    $salt .= '2020';
    return md5($plaintext . $salt);
}

/**
 * User: 意象信息科技 lr
 * Desc: 数组成功拼装
 * @param string $msg
 * @param array $data
 * @param int $code
 * @param int $show
 * @return array
 */
function data_success($msg = '', $data = [], $code = 1, $show = 1)
{
    $result = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data,
        'show' => $show,
    ];
    return $result;
}

/**
 * User: 意象信息科技 lr
 * Desc: 组装失败数据
 * @param string $msg
 * @param array $data
 * @param int $code
 * @param int $show
 * @return array
 */
function data_error($msg = '', $data = [], $code = 0, $show = 1)
{
    $result = [
        'code' => $code,
        'msg' => $msg,
        'data' => $data,
        'show' => $show,
    ];
    return $result;
}

/**
 * User: 意象信息科技 lr
 * Desc: 下载文件
 * @param $url 文件url
 * @param $save_dir 保存目录
 * @param $file_name 文件名
 * @return string
 */
function download_file($url, $save_dir, $file_name)
{
    if (!file_exists($save_dir)) {
        mkdir($save_dir, 0775, true);
    }
    $file_src = $save_dir . $file_name;
    file_exists($file_src) && unlink($file_src);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    $file = curl_exec($ch);
    curl_close($ch);
    $resource = fopen($file_src, 'a');
    fwrite($resource, $file);
    fclose($resource);
    if (filesize($file_src) == 0) {
        unlink($file_src);
        return '';
    }
    return $file_src;
}


/**
 * 腾讯地图转百度地图
 * @param $lat
 * @param $lng
 * @return float[]
 */
function convert_gcj02_to_bd09($lat, $lng)
{
    $x_pi = 3.14159265358979324 * 3000.0 / 180.0;
    $x = $lng;
    $y = $lat;
    $z = sqrt($x * $x + $y * $y) + 0.00002 * sin($y * $x_pi);
    $theta = atan2($y, $x) + 0.000003 * cos($x * $x_pi);
    $lng = $z * cos($theta) + 0.0065;
    $lat = $z * sin($theta) + 0.006;
    return array('lng' => $lng, 'lat' => $lat);
}

/**
 *百度地图坐标距离
 * @param $lat1
 * @param $lng1
 * @param $lat2
 * @param $lng2
 * @param int $len_type
 * @param int $decimal
 * @return false|float
 */
function distance($lat1, $lng1, $lat2, $lng2, $len_type = 1, $decimal = 2)
{
    if (empty($lat1) || empty($lng1) || empty($lat2) || empty($lat2)) {
        return null;
    }
    $EARTH_RADIUS = 6378.137;
    $PI = 3.1415926;
    $radLat1 = $lat1 * $PI / 180.0;
    $radLat2 = $lat2 * $PI / 180.0;
    $a = $radLat1 - $radLat2;
    $b = ($lng1 * $PI / 180.0) - ($lng2 * $PI / 180.0);
    $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2)));
    $s = $s * $EARTH_RADIUS;
    $s = round($s * 1000);
    if ($len_type > 1) {
        $s /= 1000;
    }
    return round($s, $decimal);
}


/**
 * User: 意象信息科技 lr
 * Desc: 表单多维数据转换
 * 例：
 * 转换前：{"x":0,"a":[1,2,3],"b":[11,22,33],"c":[111,222,3333,444],"d":[1111,2222,3333]}
 * 转换为：[{"a":1,"b":11,"c":111,"d":1111},{"a":2,"b":22,"c":222,"d":2222},{"a":3,"b":33,"c":3333,"d":3333}]
 * @param $arr array 表单二维数组
 * @param $fill boolean fill为false，返回数据长度取最短，反之取最长，空值自动补充
 * @return array
 */
function form_to_linear($arr, $fill = false)
{
    $keys = [];
    $count = $fill ? 0 : PHP_INT_MAX;
    foreach ($arr as $k => $v) {
        if (is_array($v)) {
            $keys[] = $k;
            $count = $fill ? max($count, count($v)) : min($count, count($v));
        }
    }
    if (empty($keys)) {
        return [];
    }
    $data = [];
    for ($i = 0; $i < $count; $i++) {
        foreach ($keys as $v) {
            $data[$i][$v] = isset($arr[$v][$i]) ? $arr[$v][$i] : null;
        }
    }
    return $data;
}

/**
 * 树形结构转线性结构
 * 例：
 * 转换前：
 *[{"n":"a","nn":"aa","sub":[{"n":"b","nn":"bb","sub":[{"n":"c","nn":"cc"}]},{"n":"d","nn":"dd","sub":[{"n":"e","nn":"ee"},{"n":"f","nn":"ff"}]}]}]
 * 转换后：
 * [{"n":"a","nn":"aa","id":1,"pid":0},{"n":"b","nn":"bb","id":2,"pid":1},{"n":"c","nn":"cc","id":3,"pid":1},
 * {"n":"d","nn":"dd","id":4,"pid":1},{"n":"e","nn":"ee","id":5,"pid":3},{"n":"f","nn":"ff","id":6,"pid":3}]
 * @param array $data 数组
 * @param string $sub_key_name 树形结构子数组名称
 * @param string $id_name 自动生成id名称
 * @param string $parent_id_name 自动生成父类id
 * @param int $parent_id 此值请勿给参数
 * @return array
 */
function tree_to_linear($data, $sub_key_name = 'sub', $id_name = 'id', $parent_id_name = 'pid', $parent_id = 0)
{
    $result = [];
    $i = 1;
    foreach ($data as $key => $row) {
        $row[$id_name] = $i++;
        $row[$parent_id_name] = $parent_id;
        $sub = $row[$sub_key_name] ?? null;
        unset($row[$sub_key_name]);
        $result[] = $row;
        if (!empty($sub)) {
            $child_data = tree_to_linear($sub, $sub_key_name, $id_name, $parent_id_name, $row[$id_name]);
            foreach ($child_data as $child_row) {
                $v[$id_name] = $i++;
                $result[] = $child_row;
            }
        }
    }
    return $result;
}

/**
 * 线性结构转换成树形结构
 * 转换前：
 * [{"n":"a","nn":"aa","id":1,"pid":0},{"n":"b","nn":"bb","id":2,"pid":1},{"n":"c","nn":"cc","id":3,"pid":1},
 * {"n":"d","nn":"dd","id":4,"pid":1},{"n":"e","nn":"ee","id":5,"pid":3},{"n":"f","nn":"ff","id":6,"pid":3}]
 * 转换后：
 *[{"n":"a","nn":"aa","sub":[{"n":"b","nn":"bb","sub":[{"n":"c","nn":"cc"}]},{"n":"d","nn":"dd","sub":[{"n":"e","nn":"ee"},{"n":"f","nn":"ff"}]}]}]
 * @param array $data 线行结构数组
 * @param string $sub_key_name 自动生成子数组名
 * @param string $id_name 数组id名
 * @param string $parent_id_name 数组祖先id名
 * @param int $parent_id 此值请勿给参数
 * @return array
 */
function linear_to_tree($data, $sub_key_name = 'sub', $id_name = 'id', $parent_id_name = 'pid', $parent_id = 0)
{
    $tree = [];
    foreach ($data as $row) {
        if ($row[$parent_id_name] == $parent_id) {
            $temp = $row;
            $temp[$sub_key_name] = linear_to_tree($data, $sub_key_name, $id_name, $parent_id_name, $row[$id_name]);
            $tree[] = $temp;
        }
    }
    return $tree;
}

/**
 * 多级线性结构排序
 * 转换前：
 * [{"id":1,"pid":0,"name":"a"},{"id":2,"pid":0,"name":"b"},{"id":3,"pid":1,"name":"c"},
 * {"id":4,"pid":2,"name":"d"},{"id":5,"pid":4,"name":"e"},{"id":6,"pid":5,"name":"f"},
 * {"id":7,"pid":3,"name":"g"}]
 * 转换后：
 * [{"id":1,"pid":0,"name":"a","level":1},{"id":3,"pid":1,"name":"c","level":2},{"id":7,"pid":3,"name":"g","level":3},
 * {"id":2,"pid":0,"name":"b","level":1},{"id":4,"pid":2,"name":"d","level":2},{"id":5,"pid":4,"name":"e","level":3},
 * {"id":6,"pid":5,"name":"f","level":4}]
 * @param array $data 线性结构数组
 * @param string $symbol 名称前面加符号
 * @param string $name 名称
 * @param string $id_name 数组id名
 * @param string $parent_id_name 数组祖先id名
 * @param int $level 此值请勿给参数
 * @param int $parent_id 此值请勿给参数
 * @return array
 */
function multilevel_linear_sort($data, $symbol = '', $name = 'name', $id_name = 'id', $parent_id_name = 'pid', $level = 1, $parent_id = 0)
{
    $result = [];
    $this_symbol = '';
    for ($i = 0; $i < $level; $i++) {
        $this_symbol .= $symbol;
    }
    foreach ($data as $key => $row) {
        if ($row['pid'] == $parent_id) {
            $row['level'] = $level;
            $row[$name] = $this_symbol . $row['name'];
            $result[] = $row;
            $pid = $row['id'];
            unset($data[$key]);
            $child_data = multilevel_linear_sort($data, $symbol, $name, $id_name, $parent_id_name, ($level + 1), $pid);
            foreach ($child_data as $child_row) {
                $result[] = $child_row;
            }
        }
    }
    return $result;
}


/**
 * User: 意象信息科技 cjh
 * Desc: 返回是否有下一页
 * @param $count 总记录数
 * @param $page  当前页码
 * @param $size  每页记录数
 * @return int
 */
function is_more($count, $page, $size)
{

    $more = 0;

    $last_page = ceil($count / $size);      //总页数、也是最后一页

    if ($last_page && $last_page > $page) {
        $more = 1;
    }
    return $more;
}

/**
 * User: 意象信息科技 mjf
 * Desc: 用时间生成订单编号
 * @param $table
 * @param $field
 * @param string $prefix
 * @param int $rand_suffix_length
 * @param array $pool
 * @return string
 * @throws \think\db\exception\DataNotFoundException
 * @throws \think\db\exception\ModelNotFoundException
 * @throws \think\exception\DbException
 */
function createSn($table, $field, $prefix = '', $rand_suffix_length = 4, $pool = [])
{
    $suffix = '';
    for ($i = 0; $i < $rand_suffix_length; $i++) {
        if (empty($pool)) {
            $suffix .= rand(0, 9);
        } else {
            $suffix .= $pool[array_rand($pool)];
        }
    }
    $sn = $prefix . date('YmdHis') . $suffix;
    if (Db::name($table)->where($field, $sn)->find()) {
        return createSn($table, $field, $prefix, $rand_suffix_length, $pool);
    }
    return $sn;
}

/*
 * 生成优惠券码 todo 排除1、0、I、O相似的数字和字母
 */
function create_coupon_code()
{

    $letter_all = range('A', 'Z');
    shuffle($letter_all);
    //排除I、O字母
    $letter_array = array_diff($letter_all, ['I', 'O']);
    //随机获取四位字母
    $letter = array_rand(array_flip($letter_array), 4);
    //排除1、0
    $num_array = range('2', '9');
    shuffle($num_array);
    //获取随机六位数字
    $num = array_rand(array_flip($num_array), 6);
    $code = implode('', array_merge($letter, $num));
    do {
        $exist_code = Db::name('coupon_list')->where(['del' => 0, 'coupon_code' => $code])->find();

    } while ($exist_code);
    return $code;

}

/**
 * 生成会员码
 * @return 会员码
 */
function create_user_sn($prefix = '', $length = 8)
{
    $rand_str = '';
    for ($i = 0; $i < $length; $i++) {
        $rand_str .= mt_rand(0, 9);
    }
    $sn = $prefix . $rand_str;
    if (Db::name('user')->where(['sn' => $sn])->find()) {
        return create_user_sn($prefix, $length);
    }
    return $sn;
}

/*
 * 生成海报自动适应标题
 */
function auto_adapt($size, $angle = 0, $fontfile, $string, $width, $height, $bg_height)
{
    $content = "";
    // 将字符串拆分成一个个单字 保存到数组 letter 中
    for ($i = 0; $i < mb_strlen($string); $i++) {
        $letters[] = mb_substr($string, $i, 1);
    }

    foreach ($letters as $letter) {
        $str = $content . " " . $letter;
        $box = imagettfbbox($size, $angle, $fontfile, $str);

        $total_height = $box[1] + $height;
        if ($bg_height[1] - $total_height < $size) {
            break;
        }
        //右下角X位置,判断拼接后的字符串是否超过预设的宽度
        if (($box[2] > $width) && ($content !== "")) {
            if ($bg_height[1] - $total_height < $size * 2) {
                break;
            }
            $content .= "\n";
        }
        $content .= $letter;
    }
    return $content;
}

/**
 * 将图片切成圆角
 */
function rounded_corner($src_img)
{
    $w = imagesx($src_img);//微信头像宽度 正方形的
    $h = imagesy($src_img);//微信头像宽度 正方形的
    $w = min($w, $h);
    $h = $w;
    $img = imagecreatetruecolor($w, $h);
    //这一句一定要有
    imagesavealpha($img, true);
    //拾取一个完全透明的颜色,最后一个参数127为全透明
    $bg = imagecolorallocatealpha($img, 255, 255, 255, 127);
    imagefill($img, 0, 0, $bg);
    $r = $w / 2; //圆半径
//    $y_x = $r; //圆心X坐标
//    $y_y = $r; //圆心Y坐标
    for ($x = 0; $x < $w; $x++) {
        for ($y = 0; $y < $h; $y++) {
            $rgbColor = imagecolorat($src_img, $x, $y);
            if (((($x - $r) * ($x - $r) + ($y - $r) * ($y - $r)) < ($r * $r))) {
                imagesetpixel($img, $x, $y, $rgbColor);
            }
        }
    }
    unset($src_img);
    return $img;
}

/**
 * note 生成验证码
 * author  cjh 2020/11/17 17:24
 * @param int $length 验证码长度
 * @return string
 */
function create_sms_code($length = 4)
{
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= rand(0, 9);
    }
    return $code;
}


function real_path()
{
    if (substr(strtolower(PHP_OS), 0, 3) == 'win') {
        $ini = ini_get_all();
        $path = $ini['extension_dir']['local_value'];
        $php_path = str_replace('\\', '/', $path);
        $php_path = str_replace(array('/ext/', '/ext'), array('/', '/'), $php_path);
        $real_path = $php_path . 'php.exe';
    } else {
        $real_path = PHP_BINDIR . '/php';
    }
    if (strpos($real_path, 'ephp.exe') !== FALSE) {
        $real_path = str_replace('ephp.exe', 'php.exe', $real_path);
    }
    return $real_path;
}


//生成用户邀请码
function generate_invite_code()
{

    $letter_all = range('A', 'Z');
    shuffle($letter_all);
    //排除I、O字母
    $letter_array = array_diff($letter_all, ['I', 'O', 'D']);
    //排除1、0
    $num_array = range('2', '9');
    shuffle($num_array);

    $pattern = array_merge($num_array, $letter_array, $num_array);
    shuffle($pattern);
    $pattern = array_values($pattern);

    $code = '';
    for ($i = 0; $i < 6; $i++) {
        $code .= $pattern[mt_rand(0, count($pattern) - 1)];
    }

    $code = strtoupper($code);
    $check = Db::name('user')->where('distribution_code', $code)->find();
    if ($check) {
        return generate_invite_code();
    }
    return $code;
}


/**
 * 是否在cli模式
 */
if (!function_exists('is_cli')) {
    function is_cli()
    {
        return preg_match("/cli/i", php_sapi_name()) ? true : false;
    }
}
/**
 * Notes:判断文件是否存在（远程和本地文件）
 * @param $file string 完整的文件链接
 * @return bool
 */
function check_file_exists($file)
{
    //远程文件
    if ('http' == strtolower(substr($file, 0, 4))) {

        $header = get_headers($file, true);

        return isset($header[0]) && (strpos($header[0], '200') || strpos($header[0], '304'));

    } else {

        return file_exists($file);
    }

}

/**
 * Notes:生成一个范围内的随机浮点数
 * @param int $min 最小值
 * @param int $max 最大值
 * @return float|int 返回随机数
 */
function random_float($min = 0, $max = 1)
{
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

function is_mobile()
{
    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        return true;
    }
    if (isset($_SERVER['HTTP_VIA'])) {
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    }
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array('nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile');
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }
    if (isset($_SERVER['HTTP_ACCEPT'])) {
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'textml') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'textml')))) {
            return true;
        }
    }
    return false;
}

/**
 * Notes:去掉名称中的表情
 * @param $str
 * @return string|string[]|null
 * @author: cjhao 2021/3/29 15:56
 */
function filterEmoji($str)
{
    $str = preg_replace_callback(
        '/./u',
        function (array $match) {
            return strlen($match[0]) >= 4 ? '' : $match[0];
        },
        $str);
    return $str;
}


/**
 * Notes: 是否为https
 * @author 段誉(2021/5/8 14:45)
 * @return bool
 */
function is_https()
{
    if (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') {
        return true;
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        return true;
    } elseif (!empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off') {
        return true;
    }
    return false;
}


/**
 * Notes: 获取文件扩展名
 * @param $file
 * @author 段誉(2021/7/7 18:03)
 * @return mixed
 */
if (!function_exists('get_extension')) {
    function get_extension($file)
    {
        return pathinfo($file, PATHINFO_EXTENSION);
    }
}


/**
 * Notes: 遍历指定目录下的文件(目标目录,排除文件)
 * @param $dir 目标文件
 * @param string $exclude_file 要排除的文件
 * @param string $target_suffix 指定后缀
 * @author 段誉(2021/7/7 18:04)
 * @return array|bool
 */

if (!function_exists('get_scandir')) {
    function get_scandir($dir, $exclude_file = '', $target_suffix = '')
    {
        if(!file_exists($dir)) {
            return [];
        }

        if (empty(trim($dir))) {
            return false;
        }

        $files = scandir($dir);
        $res = [];
        foreach ($files as $item) {
            if ($item == "." || $item == ".." || $item == $exclude_file) {
                continue;
            }
            if (!empty($target_suffix)) {
                if (get_extension($item) == $target_suffix) {
                    $res[] = $item;
                }
            } else {
                $res[] = $item;
            }
        }

        if (empty($item)) {
            return false;
        }
        return $res;
    }
}



/**
 * Notes: 解压压缩包
 * @param $file 压缩包路径
 * @param $save_dir 保存路径
 * @author 段誉(2021/7/7 18:11)
 * @return bool
 */
if (!function_exists('unzip')) {
    function unzip($file, $save_dir)
    {
        if (!file_exists($file)) {
            return false;
        }
        $zip = new \ZipArchive();
        if ($zip->open($file) !== TRUE) {//中文文件名要使用ANSI编码的文件格式
            return false;
        }
        $zip->extractTo($save_dir);
        $zip->close();
        return true;
    }
}



/**
 * Notes: 删除目标目录
 * @param $path
 * @param $delDir
 * @author 段誉(2021/7/7 18:19)
 * @return bool
 */
if (!function_exists('del_target_dir')) {
    function del_target_dir($path, $delDir)
    {
        $handle = opendir($path);
        if ($handle) {
            while (false !== ($item = readdir($handle))) {
                if ($item != "." && $item != "..") {
                    if (is_dir("$path/$item")) {
                        del_target_dir("$path/$item", $delDir);
                    } else {
                        unlink("$path/$item");
                    }
                }
            }
            closedir($handle);
            if ($delDir) {
                return rmdir($path);
            }
        } else {
            if (file_exists($path)) {
                return unlink($path);
            }
            return false;
        }
    }
}

/**
 * Notes: 获取本地版本数据
 * @return mixed
 * @author 段誉(2021/7/7 18:18)
 */

if (!function_exists('local_version')) {
    function local_version()
    {
        if(!file_exists('./upgrade/')) {
            // 若文件夹不存在，先创建文件夹
            mkdir('./upgrade/');
        }
        if(!file_exists('./upgrade/version.json')) {
            // 获取本地版本号
            $version = config('project.version');
            $data = ['version' => $version];
            $src = './upgrade/version.json';
            // 新建文件
            file_put_contents($src, json_encode($data, JSON_UNESCAPED_UNICODE));
        }

        $json_string = file_get_contents('./upgrade/version.json');
        // 用参数true把JSON字符串强制转成PHP数组
        $data = json_decode($json_string, true);
        return $data;
    }
}


/**
 * Notes: 获取ip
 * @author 段誉(2021/7/9 10:19)
 * @return array|false|mixed|string
 */
if (!function_exists('get_client_ip')) {
    function get_client_ip()
    {
        if ($_SERVER['REMOTE_ADDR']) {
            $cip = $_SERVER['REMOTE_ADDR'];
        } elseif (getenv("REMOTE_ADDR")) {
            $cip = getenv("REMOTE_ADDR");
        } elseif (getenv("HTTP_CLIENT_IP")) {
            $cip = getenv("HTTP_CLIENT_IP");
        } else {
            $cip = "unknown";
        }
        return $cip;
    }
}


/**
 * @notes 字符串超出指定数量后用..省略后面的字符
 * @param $str
 * @param $len
 * @return mixed|string
 * @author 段誉
 * @date 2021/8/10 18:03
 */
if (!function_exists('omit_str')) {
    function omit_str($str, $len) {
        if (mb_strlen($str) > $len ) {
            $str = mb_substr($str, 0, $len) . '..';
        }
        return $str;
    }
}







