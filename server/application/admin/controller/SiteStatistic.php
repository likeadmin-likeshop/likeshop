<?php

namespace app\admin\controller;

use app\common\server\ConfigServer;

class SiteStatistic extends AdminBase
{
    function set()
    {
        if (request()->isPost()) {
            ConfigServer::set('site_statistic', 'clarity_app_id', input('clarity_app_id'));
            $this->_success('保存成功');
        }
        
        return view('', [
            'site_statistic' => [
                'clarity_app_id' => ConfigServer::get('site_statistic', 'clarity_app_id', ''),
            ]
        ]);
    }
}