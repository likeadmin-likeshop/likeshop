<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，保留版权即可
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
use EasyWeChat\Factory;
use EasyWeChat\Kernel\Exceptions\Exception;
use EasyWeChat\Kernel\Http\StreamResponse;

/**
 * 二维码逻辑层
 * Class QrCodeServer
 * @package app\common\server
 */
class QrCodeServer
{

    /**
     * @notes 生成小程序码，使用wxacode.getUnlimited接口
     * @param array $param $param 参数配置 page:页面路径；scene：页面参数；saveDir：保存路径；fileName：文件名
     * @param string $type 返回类型：resource时返回资源类型,file保存并返回文件,base64返回base64
     * @param array $extra 返回参数：返回额外参数
     * @return mixed|string
     * @author cjhao
     * @date 2021/11/25 101:43
  1   */
    public static function makeMpWechatQrcode(array $param, string $type = 'resource', array $extra = [])
    {

        try {

            $page = $param['page'] ?? '';
            $scene = $param['scene'] ?? 'null';
            $save_dir = $param['save_dir'] ?? 'uploads/qr_code/user_share/';
            $file_name = $param['file_name'] ?? time() . '.png';
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);

            $response = $app->app_code->getUnlimit($scene, [
                'page'  => $page,
            ]);

            if(is_array($response) && 41030 === $response['errcode']){

                //开启错误提示，小程序未发布和页面不存在，返回提示
                if (41030 === $response['errcode']) {
                    throw new Exception('所传page页面不存在，或者小程序没有发布');
                }
                throw new Exception($response['errmsg']);
            }

            $contents = $response->getBody()->getContents();
            switch ($type){
                case 'file':
                    if ($response instanceof StreamResponse) {
                        $file_name = $response->saveAs($save_dir, $file_name);
                        $contents = $save_dir . $file_name;
                    }
                    break;
                case 'base64':
                    $mp_base64 = chunk_split(base64_encode($contents));
                    $contents = 'data:image/png;base64,' . $mp_base64;
            }
            return data_success('',['qr_code'=>$contents, 'extra' => $extra]);


        } catch (\EasyWeChat\Kernel\Exceptions\Exception $e){
            return data_error($e->getMessage());
        }
    }

}