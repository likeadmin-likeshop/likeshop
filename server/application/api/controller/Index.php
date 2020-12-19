<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\api\controller;
use app\api\logic\IndexLogic;
use app\common\model\Client_;
use app\common\server\ConfigServer;

class Index extends ApiBase
{
   public $like_not_need_login = ['lists', 'appInit', 'downLine'];
    /**
     * note 首页接口
     * create_time 2020/10/21 19:05
     */
   public function lists(){
        $lists = IndexLogic::lists($this->user_id);
        return $this->success('',$lists);
   }

    /**
     * app下载链接  todo lr未完成
     */
    public function downLine()
    {
        $get = $this->request->get();
        $check = $this->validate($get, 'app\api\validate\App');
        if (true !== $check) {
            $this->error($check);
        }
        if(isset($get['client']) && $get['client'] == Client_::ios){
            $this->success('', ['line' => ConfigServer::get('app', 'line_ios', '')]);
        }else{
            $this->success('', ['line' => ConfigServer::get('app', 'line_android', '')]);
        }
    }
    /**
     * app初始化接口
     * 苹果不允许单独只有微信第三方登录
     */
    public function appInit()
    {
        $data = [
            'wechat_login' =>  ConfigServer::get('app', 'wechat_login', '',0),//微信登录
            //弹出协议
            'agreement' => ConfigServer::get('app', 'agreement', '',1)
        ];
        $this->success('', $data);
    }
}