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
// | Author: LikeShop-令狐冲
// +----------------------------------------------------------------------


namespace app\admin\controller;


use app\admin\server\AuthServer;
use app\BaseController;
use think\Controller;
use think\exception\HttpResponseException;
use think\facade\Config;
use think\facade\Debug;
use think\facade\Url;
use think\Response;

class AdminBase extends Controller
{

    public $like_not_need_login = [];

    protected $js_data = [];

    public $admin_info = [];
    public $admin_id;
    public $view_theme_color = '';

    public $page_no = 1;
    public $page_size = 15;

    public function __construct()
    {
        parent::__construct();
        $this->setValue();
        self::setViewValue();
    }

    public function setValue()
    {
        $this->admin_info = session('admin_info');
        $this->admin_id = session('admin_info.id');

        //分页参数
        $page_no = (int)$this->request->get('page_no');
        $this->page_no = $page_no && is_numeric($page_no) ? $page_no : $this->page_no;
        $page_size = (int)$this->request->get('page_size');
        $this->page_size = $page_size && is_numeric($page_size) ? $page_size : $this->page_size;
        $this->page_size = min($this->page_size, 100);
    }

    /**
     * 设置视图全局变量
     */
    private function setViewValue()
    {
        $app = Config::get('project.');
        $this->assign('view_env_name', $app['env_name']);
        $this->assign('view_admin_name', $app['admin_name']);
        $this->assign('view_theme_color', $app['theme_color']);
        $this->assign('view_theme_button', $app['theme_button']);
        $this->assign('version', $app['version']);

        $this->assignJs('image_upload_url', Url::build('file/image'));

        //用户权限uri，用于隐藏无权限的按钮
        $note_auth_uris = AuthServer::getRoleNoneAuthUris($this->admin_info['role_id']);
        $note_auth_uris = array_map('strtolower', $note_auth_uris);
        $this->assignJs('note_auth_uris', $note_auth_uris);
    }

    /**
     * User: 意象信息科技 lr
     * Desc: 请求成功
     * @param string $msg
     * @param array $data
     * @param int $code
     * @param int $show
     * @param array $header
     */
    protected function success($msg = '', $data = [], $code = 1, $show = 0, $wait = 3, $url = '', array $header = [])
    {
        $type = $this->getResponseType();
        $time = Debug::getUseTime();
        $result = [
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
            'show' => $show,
            'time' => $time,
            'wait' => $wait,
            'url' => $url,
        ];
        $type = $this->getResponseType();
        // 把跳转模板的渲染下沉，这样在 response_send 行为里通过getData()获得的数据是一致性的格式
        if ('html' == strtolower($type)) {
            $type = 'jump';
        }

        $response = Response::create($result, $type)->header($header)->options(['jump_template' => $this->app['config']->get('dispatch_success_tmpl')]);

        throw new HttpResponseException($response);
    }

    /**
     * User: 意象信息科技 lr
     * Desc: 请求失败
     * @param string $msg
     * @param array $data
     * @param int $code
     * @param int $show
     * @param array $header
     */
    protected function error($msg = '', $data = [], $code = 0, $show = 1, $wait = 3, $url = '', array $header = [])
    {
        $type = $this->getResponseType();
        $time = Debug::getUseTime();
        $result = [
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
            'show' => $show,
            'time' => $time,
            'wait' => $wait,
            'url' => $url,

        ];
        if ('html' == strtolower($type)) {
            $type = 'jump';
        }

        $response = Response::create($result, $type)->header($header)->options(['jump_template' => $this->app['config']->get('dispatch_error_tmpl')]);

        throw new HttpResponseException($response);
    }

    /**
     * User: 意象信息科技 lr
     * Desc: 通过返回
     * @param $data
     */
    protected function successOrError($data)
    {
        if ($data['code'] == 1) {
            $this->success($data['msg'], $data['data'], $data['code'], $data['show']);
        }
        $this->error($data['msg'], $data['data'], $data['code'], $data['show']);
    }


    protected function assignJs($name, $value)
    {
        $this->js_data[$name] = $value;
        $js_code = "<script>";
        foreach ($this->js_data as $name => $value) {
            if (is_array($value)) {
                $value = json_encode($value);
            } elseif (!is_integer($value)) {
                $value = '"' . $value . '"';
            }
            $js_code .= $name . '=' . $value . ';';
        }
        $js_code .= "</script>";
        $this->assign('js_code', $js_code);
    }


}