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


use app\common\logic\NoticeLogic;
use app\common\model\Client_;
use app\common\model\NoticeSetting;
use EasyWeChat\Factory;
use think\Db;

class WxMessageServer
{
    protected $config = null;  // 配置信息
    protected $app = null;     // easyechat实例
    protected $openid = null;  // openid
    protected $template_id = null; // 消息模板ID
    protected $platform = null;    //平台[公众号, 小程序]
    protected $notice_id = null; //通知记录id

    // 初始化
    public function __construct($user_id, $platform)
    {
        // 获取用户信息
        $this->platform = $platform;
        $where = ['user_id' => (int)$user_id, 'client' => $platform];
        $user_model = Db::name('user_auth')->where($where)->find();
        $this->openid = $user_model['openid'];

        if ($this->platform === Client_::oa) {
            $this->config = WeChatServer::getOaConfig();
            $this->app = Factory::officialAccount($this->config);
        } else if ($this->platform === Client_::mnp) {
            $this->config = WeChatServer::getMnpConfig();
            $this->app = Factory::miniProgram($this->config);
        }
    }

    // 发送消息
    public function send($params)
    {
        if (empty($this->openid)) {
            return false;
        }

        // 获取template_id
        $scene = NoticeSetting::where(['scene' => $params['scene']])->find()->toArray();
        if ($this->platform == Client_::oa) {
            $scene_model = $scene['oa_notice'];
            $send_type = NoticeSetting::OA_NOTICE;
        } else {
            $scene_model = $scene['mnp_notice'];
            $send_type = NoticeSetting::MNP_NOTICE;
        }

        if (!$scene_model || $scene_model['status'] == 0 || $scene_model['template_id'] == '') {
            return false;
        } else {
            $this->template_id = $scene_model['template_id'];
        }

        if ($this->platform == Client_::oa) {
            $template = $this->oaTemplate($params, $scene_model);
        } else {
            $template = $this->mnpTemplate($params, $scene_model);
        }

        $this->notice_id = NoticeLogic::addNoticeLog($params, $scene_model, $send_type, json_encode($template, true));

        // 发送消息
        try {

            if ($this->platform  === Client_::oa) {
                $res = $this->app->template_message->send($template);
            } else if ($this->platform === Client_::mnp) {
                $res = $this->app->subscribe_message->send($template);
            }
            NoticeLogic::updateNotice($this->notice_id, json_encode($res, true));
            return true;

        } catch (\Exception $e) {
            NoticeLogic::updateNotice($this->notice_id, $e->getMessage());
            return false;
        }
    }


    // 公众号消息模板
    public function oaTemplate($params, $scene_model)
    {
        $domain = request()->domain();
        $tpl = [
            'touser'      => $this->openid,
            'template_id' => $this->template_id,
            'url'         => $domain.$params['url'],
            'data'        => [
                'first'  => $scene_model['first'],
                'remark' => $scene_model['remark']
            ]
        ];
        return $this->tplformat($scene_model, $params, $tpl);
    }

    // 小程序消息模板
    public function mnpTemplate($params, $scene_model)
    {
        $tpl = [
            'touser'      => $this->openid,
            'template_id' => $this->template_id,
            'page'        => $params['page']
        ];
        return $this->tplformat($scene_model, $params, $tpl);
    }


    // 调换变量
    public function tplformat($scene_model, $params, $tpl)
    {
        foreach ($scene_model['tpl'] as $item) {
            foreach ($params as $k => $v) {
                $search_replace = '{'.$k.'}';
                $item['tpl_content'] = str_replace($search_replace, $v, $item['tpl_content']);
            }
            $tpl['data'][$item['tpl_keyword']] = $item['tpl_content'];
        }
        return $tpl;
    }

}