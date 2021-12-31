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
namespace app\admin\logic;
use app\common\model\Menu_;
use app\common\server\UrlServer;
use think\Db;

class MenuDecorateLogic{
    /*
     * 获取列表
     */
    public static function lists($get)
    {
        $type = $get['type'] ?? 1;
        $where[] = ['del','=',0];
        $where[] = ['decorate_type', '=', $type];

        $count = Db::name('menu_decorate')->where($where)->count();
        $lists = Db::name('menu_decorate')
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->order('id desc')
            ->select();

        foreach ($lists as &$item){
            $item['image'] = UrlServer::getFileUrl($item['image']);
            if($item['link_type'] == 1){
                $content = Menu_::getMenuContent($type,$item['link_address']);
                $item['link_address'] = $content['link'] ?? '';

            }
        }
        return ['count' => $count, 'lists' => $lists];
    }

    // 首页
    public static function indexList($get)
    {
        $where[] = ['del','=',0];
        $where[] = ['decorate_type', '=', 1];

        $count = Db::name('menu_decorate')->where($where)->count();
        $lists = Db::name('menu_decorate')
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->order('id desc')
            ->select();

        foreach ($lists as &$item){
            $item['image'] = UrlServer::getFileUrl($item['image']);
            if($item['link_type'] == 1){
                $content = Menu_::getMenuContent(1,$item['link_address']);
                $item['link_address'] = $content['link'] ?? '';
            }
        }
        return ['count' => $count, 'lists' => $lists];
    }

    // 首页
    public static function centerList($get)
    {
        $where[] = ['del','=',0];
        $where[] = ['decorate_type', '=', 2];

        $count = Db::name('menu_decorate')->where($where)->count();
        $lists = Db::name('menu_decorate')
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->order('id desc')
            ->select();

        foreach ($lists as &$item){
            $item['image'] = UrlServer::getFileUrl($item['image']);
            if($item['link_type'] == 1){
                $content = Menu_::getMenuContent(1,$item['link_address']);
                $item['link_address'] = $content['link'] ?? '';
            }
        }
        return ['count' => $count, 'lists' => $lists];
    }

    /*
     * 新增
     */
    public static function add($post){
      $link_address = $post['menu'];
      if($post['link_type'] == 2){
          $link_address = $post['url'];
      }
      $time = time(); //当前时间截
      $data = [
        'name'          => $post['name'],
        'image'         => $post['image'],
        'decorate_type' => $post['decorate_type'],
        'link_type'     => $post['link_type'],
        'link_address'  => $link_address,
        'sort'          => $post['sort']?:0,
        'update_time'   => $time,
        'create_time'   => $time,
        'is_show'       => $post['is_show'],
      ];
      return Db::name('menu_decorate')->insert($data);
    }

    /*
     * 编辑菜单
     */
    public static function edit($post){
        $link_address = $post['menu'];
        if($post['link_type'] == 2){
            $link_address = $post['url'];
        }
        $time = time(); //当前时间截
        $data = [
            'name'          => $post['name'],
            'image'         => $post['image'],
            'decorate_type' => $post['decorate_type'],
            'link_type'     => $post['link_type'],
            'link_address'  => $link_address,
            'sort'          => $post['sort']?:0,
            'update_time'   => $time,
            'is_show'       => $post['is_show'],
        ];
        return Db::name('menu_decorate')->where(['id'=>$post['id']])->update($data);
    }
    /*
     * 删除菜单
     */
    public static function del($id){
      $data= [
        'del'           =>1,
        'update_time'   =>time()
      ];
      return Db::name('menu_decorate')->where(['id'=>$id])->update($data);
    }
    /*
     * 批量删除菜单
     */
    public static function batchDelMenuDecorate($ids){
        $data = [
            'del'           => 1,
            'update_time'   => time()
        ];

        return Db::name('menu_decorate')->where(['id'=>$ids])->update($data);
    }
    /*
     * 获取菜单
     */
    public static function getMenuDecorate($id){
        $detail = Db::name('menu_decorate')->where(['id'=>$id])->find();
        $detail['abs_image'] = UrlServer::getFileUrl($detail['image']);
        return $detail;
    }

  /**
   * 添加 - 底部导航
   */
  public static function addNavigation($post)
  {
    if(empty($post['name'])) {
      return [
        'flag' => false,
        'msg' => '导航名称不能为空'
      ];
    }
    $count = Db::name('dev_navigation')->where([
      ['del', '=', 0],
      ['name', '=', trim($post['name']) ]
    ])->count();
    if($count) {
      return [
        'flag' => false,
        'msg' => '导航名称已存在'
      ];
    }
    $data = [
      'name' => trim($post['name']),
      'selected_icon' => trim($post['selected_icon']),
      'un_selected_icon' => trim($post['un_selected_icon']),
      'create_time' => time(),
      'del' => 0
    ];
    $result = Db::name('dev_navigation')->insert($data);
    if($result) {
      return [
        'flag' => true,
        'msg' => '添加成功'
      ];
    }else{
      return [
        'flag' => false,
        'msg' => '添加失败'
      ];
    }
  }

  /**
   * 底部导航 - 列表
   */
  public static function bottomNavigation($get)
  {
    $lists = Db::name('dev_navigation')
      ->where('del', 0)
      ->page($get['page'], $get['limit'])
      ->order('id', 'desc')
      ->select();
    $count = Db::name('dev_navigation')->count();
    foreach($lists as &$item) {
      $item['selected_icon'] = UrlServer::getFileUrl($item['selected_icon']);
      $item['un_selected_icon'] = UrlServer::getFileUrl($item['un_selected_icon']);
    }
    $data = [
      'count' => $count,
      'lists' => $lists
    ];
    return $data;
  }

  /**
   * 底部导航 - 详情
   */
  public static function getNavigation($id)
  {
    $navigation = Db::name('dev_navigation')->where('id', $id)->find();
    $navigation['selected_icon'] = $navigation['selected_icon'] ? UrlServer::getFileUrl($navigation['selected_icon']) : '';
    $navigation['un_selected_icon'] = $navigation['un_selected_icon'] ? UrlServer::getFileUrl($navigation['un_selected_icon']) : '';
    return $navigation;
  }

  /**
   * 底部导航 - 编辑
   */
  public static function editNavigation($post)
  {
    if(empty($post['name'])) {
      return [
        'flag' => false,
        'msg' => '导航名称不能为空'
      ];
    }
    $count = Db::name('dev_navigation')->where([
      ['del', '=', 0],
      ['name', '=', trim($post['name']) ],
      ['id', '<>', $post['id']]
    ])->count();
    if($count) {
      return [
        'flag' => false,
        'msg' => '导航名称已存在'
      ];
    }
    $updateData = [
      'name' => trim($post['name']),
      'selected_icon' => trim($post['selected_icon']),
      'un_selected_icon' => trim($post['un_selected_icon']),
      'update_time' => time()
    ];
    $result = Db::name('dev_navigation')->where('id', $post['id'])->update($updateData);
    if($result) {
      return [
        'flag' => true,
        'msg' => '编辑成功'
      ];
    }else{
      return [
        'flag' => false,
        'msg' => '编辑失败'
      ];
    }
  }

  /**
   * 删除 - 底部导航
   */
  public static function delNavigation($id)
  {
    return Db::name('dev_navigation')->where('id', $id)->update([
      'del' => 1,
      'update_time' => time()
    ]);
  }
}