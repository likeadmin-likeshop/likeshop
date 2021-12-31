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

namespace app\admin\controller;

use app\common\server\ConfigServer;
use app\common\server\UrlServer;

class Basic extends AdminBase
{

    /**
     * 网站配置
     * @return mixed
     */
    public function website()
    {
        $config = [
            'file_url' => UrlServer::getFileUrl('/'),
            'name' => ConfigServer::get('website', 'name'),
            'login_logo' => ConfigServer::get('website', 'login_logo'),
            'keyword' => ConfigServer::get('website', 'keyword'),
            'slogan_status' => ConfigServer::get('website', 'slogan_status'),
            'slogan' => ConfigServer::get('website', 'slogan'),
            'backstage_logo' => ConfigServer::get('website', 'backstage_logo'),
            'admin_image' => ConfigServer::get('website', 'admin_image'),
            'admin_title' => ConfigServer::get('website', 'admin_title'),
            'partner_image' => ConfigServer::get('website', 'partner_image'),
            'partner_title' => ConfigServer::get('website', 'partner_title'),
            'shop_logo' => ConfigServer::get('website', 'shop_logo'),
            'shop_login_logo'   =>ConfigServer::get('website', 'shop_login_logo'),
            'pc_logo' => ConfigServer::get('website', 'pc_logo'),
            'user_image' => ConfigServer::get('website', 'user_image'),
            'goods_image'   =>ConfigServer::get('website', 'goods_image'),
            'web_favicon'   =>ConfigServer::get('website', 'web_favicon'),
        ];

        $this->assign('config', $config);

        return $this->fetch('');
    }


    /**
     * 设置网站
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function setWebsite()
    {
        $post = $this->request->post();
        $result = $this->validate($post, 'app\admin\validate\Basic');
        if ($result === true) {

            ConfigServer::set('website', 'name', $post['name']);
            ConfigServer::set('website', 'login_logo', $post['login_logo']);
            ConfigServer::set('website', 'web_favicon', $post['web_favicon']);

            ConfigServer::set('website', 'backstage_logo', $post['backstage_logo']);
            ConfigServer::set('website', 'admin_image', $post['admin_image']);
            ConfigServer::set('website', 'admin_title', $post['admin_title']);
            ConfigServer::set('website', 'shop_logo', $post['shop_logo']);
            ConfigServer::set('website', 'shop_login_logo', $post['shop_login_logo']);
            ConfigServer::set('website', 'pc_logo', $post['pc_logo']);
            ConfigServer::set('website', 'user_image', $post['user_image']);
            ConfigServer::set('website', 'goods_image', $post['goods_image']);

            $this->_success('修改成功');
        }

        $this->_error($result);
    }

    /**
     * 版权备案
     * @return mixed
     */
    public function copyright()
    {
        $config = [
            'company_name' => ConfigServer::get('copyright', 'company_name'),
            'number' => ConfigServer::get('copyright', 'number'),
            'link' => ConfigServer::get('copyright', 'link'),
        ];

        $this->assign('config', $config);

        return $this->fetch();
    }


    /**
     * 设置版权备案
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function setCopyright()
    {
        $post = $this->request->post();

        ConfigServer::set('copyright', 'company_name', $post['company_name']);
        //  ConfigServer::set('copyright', 'logo',$post['logo']);
        ConfigServer::set('copyright', 'number', $post['number']);
        ConfigServer::set('copyright', 'link', $post['link']);
        return $this->_success('修改成功');
    }


    /**
     * 上传设置
     */
    public function upload()
    {
        $config = [
            'way' => ConfigServer::get('upload', 'way'),
            'size' => ConfigServer::get('upload', 'size'),
            'type' => ConfigServer::get('upload', 'type'),
            'mime_type' => ConfigServer::get('upload', 'mime_type'),
            'status' => ConfigServer::get('watermark', 'status'),
            'mark_type' => ConfigServer::get('watermark', 'mark_type'),
            'mark' => ConfigServer::get('watermark', 'mark'),
            'location' => ConfigServer::get('watermark', 'location'),
            'transparency' => ConfigServer::get('watermark', 'transparency'),
            'slope' => ConfigServer::get('watermark', 'slope'),
            'offset_x' => ConfigServer::get('watermark', 'offset_x'),
            'offset_y' => ConfigServer::get('watermark', 'offset_y'),
        ];

        $this->assign('config', $config);

        return $this->fetch();
    }

    public function setUpload()
    {
        $post = $this->request->post();
        if ($post) {
            ConfigServer::set('upload', 'way', $post['way']);
            ConfigServer::set('upload', 'size', $post['size']);
            ConfigServer::set('upload', 'type', $post['type']);
            ConfigServer::set('upload', 'mime_type', $post['mime_type']);

            ConfigServer::set('watermark', 'status', $post['status']);
            ConfigServer::set('watermark', 'mark_type', $post['mark_type']);
            ConfigServer::set('watermark', 'mark', $post['mark']);
            ConfigServer::set('watermark', 'location', $post['location']);
            ConfigServer::set('watermark', 'transparency', $post['transparency']);
            ConfigServer::set('watermark', 'slope', $post['slope']);
            ConfigServer::set('watermark', 'offset_x', $post['offset_x']);
            ConfigServer::set('watermark', 'offset_y', $post['offset_y']);
            return $this->_success('修改成功');
        }
    }

    /**
     * APP设置
     * @return mixed
     */
    public function app()
    {
        $config = [
            'line_ios' => ConfigServer::get('app', 'line_ios', ''),
            'line_android' => ConfigServer::get('app', 'line_android', ''),
            'download_doc' => ConfigServer::get('app', 'download_doc', ''),
            'agreement' => ConfigServer::get('app', 'agreement', 0),
            'wechat_login'  => ConfigServer::get('app', 'wechat_login',  0),
        ];
        $this->assign('config',$config);
        return $this->fetch();
    }

    public function setApp()
    {
        $post = $this->request->post();
        $post['agreement'] = isset($post['agreement']) && $post['agreement'] == 'on' ? 1 : 0;
        $post['wechat_login'] = isset($post['wechat_login']) && $post['wechat_login'] == 'on' ? 1 : 0;
        ConfigServer::set('app', 'line_ios',$post['line_ios']);
        ConfigServer::set('app', 'line_android',$post['line_android']);
        ConfigServer::set('app', 'download_doc',$post['download_doc']);
        ConfigServer::set('app', 'agreement',$post['agreement']);
        ConfigServer::set('app', 'wechat_login',$post['wechat_login']);
        $this->_success('修改成功');
    }

    /**
     * 分享设置
     */
    public function share()
    {
        $config = [
            'file_url' => UrlServer::getFileUrl('/'),
            'h5'  => ConfigServer::get('share', 'h5', [
                'h5_share_title' => '',
                'h5_share_intro' => '',
                'h5_share_image' => ''
            ]),
            'mnp' => ConfigServer::get('share', 'mnp', [
                'mnp_share_title' => ''
            ])
        ];
        $this->assign('config', $config);
        return $this->fetch();
    }

    public function setShare()
    {
        $post = $this->request->post();
        $h5 = json_encode([
            'h5_share_title' => $post['h5_share_title'],
            'h5_share_intro' => $post['h5_share_intro'],
            'h5_share_image' => $post['h5_share_image'],
        ], JSON_UNESCAPED_UNICODE);
        $mnp = json_encode([
            'mnp_share_title' => $post['mnp_share_title'],
        ], JSON_UNESCAPED_UNICODE);
        ConfigServer::set('share', 'h5', $h5);
        ConfigServer::set('share', 'mnp', $mnp);
        $this->_success('修改成功');
    }
}