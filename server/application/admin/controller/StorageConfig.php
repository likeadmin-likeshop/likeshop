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

class StorageConfig extends AdminBase
{
    /**
     * Notes: 存储引擎列表
     * @author 张无忌(2021/2/22 11:43)
     * @return mixed
     */
    public function lists()
    {
        if ($this->request->isAjax()) {
            $default = ConfigServer::get('storage', 'default', '');
            $data = [
                [
                    'name'   => '本地存储',
                    'path'   => '存储在本地服务器',
                    'engine' => 'local',
                    'status' => $default == 'local' ? 1 : 0
                ],
                [
                    'name'   => '七牛云存储',
                    'path'   => '存储在七牛云，请前往七牛云开通存储服务',
                    'engine' => 'qiniu',
                    'status' => $default == 'qiniu' ? 1 : 0
                ],
                [
                    'name'   => '阿里云OSS',
                    'path'   => '存储在阿里云，请前往阿里云开通存储服务',
                    'engine' => 'aliyun',
                    'status' => $default == 'aliyun' ? 1 : 0
                ],
                [
                    'name'   => '腾讯云OSS',
                    'path'   => '存储在腾讯云，请前往腾讯云开通存储服务',
                    'engine' => 'qcloud',
                    'status' => $default == 'qcloud' ? 1 : 0
                ]
            ];
            $this->_success('获取成功', $data);
        }

        return $this->fetch();
    }

    /**
     * Notes: 编辑存储引擎
     * @author 张无忌(2021/2/22 11:43)
     * @return mixed
     */
    public function edit()
    {
        if ($this->request->isAjax()) {
            $engine= $this->request->post('engine');
            $post = $this->request->post();

            if ($engine === 'qiniu') {

                try {
                    ConfigServer::set('storage_engine', 'qiniu', [
                        'bucket'     => $post['qiniu_bucket'],
                        'access_key' => $post['qiniu_ak'],
                        'secret_key' => $post['qiniu_sk'],
                        'domain'     => $post['qiniu_domain']
                    ]);
                } catch (\Exception $e) {
                    $this->_error('设置失败:'.$e->getMessage());
                }
                $this->_success('设置成功');

            } elseif ($engine === 'aliyun') {

                try {
                    ConfigServer::set('storage_engine', 'aliyun', [
                        'bucket'            => $post['aliyun_bucket'],
                        'access_key_id'     => $post['aliyun_ak'],
                        'access_key_secret' => $post['aliyun_sk'],
                        'domain'            => $post['aliyun_domain']
                    ]);
                } catch (\Exception $e) {
                    $this->_error('设置失败:'.$e->getMessage());
                }
                $this->_success('设置成功');

            } elseif ($engine === 'qcloud') {

                try {
                    ConfigServer::set('storage_engine', 'qcloud', [
                        'bucket'     => $post['qcloud_bucket'],
                        'region'     => $post['qcloud_region'],
                        'secret_id'  => $post['qcloud_ak'],
                        'secret_key' => $post['qcloud_sk'],
                        'domain'     => $post['qcloud_domain']
                    ]);
                } catch (\Exception $e) {
                    $this->_error('设置失败:'.$e->getMessage());
                }
                $this->_success('设置成功');
            }

            $this->_error('您设置的存储引擎不存在!');
        }

        $engine = $this->request->get('engine');
        $storage = [
            'qiniu' => ConfigServer::get('storage_engine', 'qiniu', [
                'bucket'     => '',
                'access_key' => '',
                'secret_key' => '',
                'domain'     => 'http://'
            ]),
            'aliyun' => ConfigServer::get('storage_engine', 'aliyun', [
                'bucket'     => '',
                'access_key_id' => '',
                'access_key_secret' => '',
                'domain'     => 'http://'
            ]),
            'qcloud' => ConfigServer::get('storage_engine', 'qcloud', [
                'bucket'     => '',
                'region'     => '',
                'secret_id'  => '',
                'secret_key' => '',
                'domain'     => 'http://'
            ])
        ];

        $this->assign('engine', $engine);
        $this->assign('storage', $storage);
        return $this->fetch();
    }

    /**
     * Notes: 切换存储引擎
     * @author 张无忌(2021/2/22 11:43)
     */
    public function changeEngine()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            try {
                ConfigServer::set('storage', 'default', $post['engine']);
            } catch (\Exception $e) {
                $this->_error('切换失败: ' . $e->getMessage());
            }
            $this->_success('切换成功');
        }
    }
}