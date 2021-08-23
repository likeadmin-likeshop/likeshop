<?php

namespace App\Api;

class PrintMenuService extends RpcService{

    /**
     * 添加应用菜单接口
     *
     * @param $machineCode string 机器码
     * @param $content  string 菜单详情(json)
     * @return mixed
     */
    public function addPrintMenu($machineCode, $content)
    {
        return $this->client->call('printmenu/addprintmenu', array('machine_code' => $machineCode, 'content' => $content));
    }

}