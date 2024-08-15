<?php
namespace app\admin\controller;

use app\admin\logic\DistributionSettingLogic;

class DistributionSetting extends AdminBase
{
    public function index()
    {
        $config = DistributionSettingLogic::getConfig();
        return view('', ['config' => $config]);
    }

    public function set()
    {
        $params = $this->request->post();
        $result = DistributionSettingLogic::set($params);
        if ($result) {
            return $this->_success('设置成功');
        }
        return $this->_error(DistributionSettingLogic::getError());
    }

    public function settlement()
    {
        $config = DistributionSettingLogic::getConfig();
        return view('', ['config' => $config]);
    }
}