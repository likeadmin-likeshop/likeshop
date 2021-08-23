<?php

namespace App\Api;

class PrinterService extends RpcService{

    /**
     * 自有型应用授权终端
     *
     * @param $machineCode string 机器码
     * @param $mSign string 机器密钥
     * @param string $printName 打印机昵称
     * @param string $phone gprs卡号
     * @return mixed
     */
    public function addPrinter($machineCode, $mSign,  $printName = '', $phone = '')
    {
        $params = array(
            'machine_code' => $machineCode,
            'msign' => $mSign,
        );
        if (!empty($phone)) {
            $params['phone'] = $phone;
        }
        if (!empty($printName)) {
            $params['print_name'] = $printName;
        }
        return $this->client->call('printer/addprinter', $params);
    }


    /**
     * 设置内置语音接口
     * 注意: 仅支持K4-WA、K4-GAD、K4-WGEAD型号
     *
     * @param $machineCode string 机器码
     * @param $content string 在线语音地址链接 or 自定义语音内容
     * @param bool $isFile true or false
     * @param string $aid int 0~9 , 定义需设置的语音编号,若不提交,默认升序
     * @return mixed
     */
    public function setVoice($machineCode, $content, $isFile = false, $aid = '')
    {
        $params = array(
            'machine_code' => $machineCode,
            'content' => $content,
            'is_file' => $isFile,
        );
        if (!empty($aid)){
            $params ['aid'] = $aid;
        }
        return $this->client->call('printer/setvoice', $params);
    }


    /**
     * 删除内置语音接口
     * 注意: 仅支持K4-WA、K4-GAD、K4-WGEAD型号
     *
     * @param $machineCode string 机器码
     * @param $aid int 0 ~ 9 编号
     * @return mixed
     */
    public function deleteVoice($machineCode, $aid)
    {
        return $this->client->call('printer/deletevoice', array('machine_code' => $machineCode, 'aid' => $aid));
    }


    /**
     * 删除终端授权接口
     *
     * @param $machineCode string 机器码
     * @return mixed
     */
    public function deletePrinter($machineCode)
    {
        return $this->client->call('printer/deleteprinter', array('machine_code' => $machineCode));
    }


    /**
     * 关机重启接口
     *
     * @param $machineCode string 机器码
     * @param $responseType string restart or shutdown
     * @return mixed
     */
    public function shutdownRestart($machineCode, $responseType)
    {
        return $this->client->call('printer/shutdownrestart', array('machine_code' => $machineCode, 'response_type' => $responseType));
    }


    /**
     * 声音调节接口
     *
     * @param $machineCode string 机器码
     * @param $voice string 音量 0 or 1 or 2 or 3
     * @param $responseType string buzzer (蜂鸣器) or horn (喇叭)
     * @return mixed
     */
    public function setsound($machineCode, $voice, $responseType)
    {
        return $this->client->call('printer/setsound', array('machine_code' => $machineCode, 'voice' => $voice, 'response_type' => $responseType));
    }


    /**
     * 获取机型打印宽度接口
     *
     * @param $machineCode string 机器码
     * @return mixed
     */
    public function printInfo($machineCode)
    {
        return $this->client->call('printer/printinfo', array('machine_code' => $machineCode));
    }


    /**
     * 获取机型软硬件版本接口
     *
     * @param $machineCode string 机器码
     * @return mixed
     */
    public function getVersion($machineCode)
    {
        return $this->client->call('printer/getversion', array('machine_code' => $machineCode));
    }


    /**
     * 取消所有未打印订单接口
     *
     * @param $machineCode string 机器码
     * @return mixed
     */
    public function cancelAll($machineCode)
    {
        return $this->client->call('printer/cancelall', array('machine_code' => $machineCode));
    }


    /**
     * 取消单条未打印订单接口
     *
     * @param $machineCode string 机器码
     * @param $orderId string 未打印的易联云ID
     * @return mixed
     */
    public function cancelOne($machineCode, $orderId)
    {
        return $this->client->call('printer/cancelone', array('machine_code' => $machineCode, 'order_id' => $orderId));
    }


    /**
     * 设置logo接口
     *
     * @param $machineCode string 机器码
     * @param $imgUrl string logo链接地址
     * @return mixed
     */
    public function setIcon($machineCode, $imgUrl)
    {
        return $this->client->call('printer/seticon', array('machine_code' => $machineCode, 'img_url' => $imgUrl));
    }


    /**
     * 取消logo接口
     *
     * @param $machineCode string 机器码
     * @return mixed
     */
    public function deleteIcon($machineCode)
    {
        return $this->client->call('printer/deleteicon', array('machine_code' => $machineCode));
    }


    /**
     * 打印方式接口
     *
     * @param $machineCode string 机器码
     * @param $responseType string btnopen or btnclose
     * @return mixed
     */
    public function btnPrint($machineCode, $responseType)
    {
        return $this->client->call('printer/btnprint', array('machine_code' => $machineCode, 'response_type' => $responseType));
    }


    /**
     * 接单拒单设置接口
     *
     * @param $machineCode string 机器码
     * @param $responseType string open or close
     * @return mixed
     */
    public function getOrder($machineCode, $responseType)
    {
        return $this->client->call('printer/getorder', array('machine_code' => $machineCode, 'response_type' => $responseType));
    }


    /**
     * 获取订单状态接口
     *
     * @param $machineCode string 机器码
     * @param $orderId  string 易联云订单id
     * @return mixed
     */
    public function getOrderStatus($machineCode, $orderId)
    {
        return $this->client->call('printer/getorderstatus', array('machine_code' => $machineCode, 'order_id' => $orderId));
    }


    /**
     * 获取订单列表接口
     *
     * @param $machineCode string 机器码
     * @param $pageIndex int 第几页
     * @param $pageSize int 查询条数
     * @return mixed
     */
    public function getOrderPagingList($machineCode, $pageIndex = 1 , $pageSize = 10)
    {
        return $this->client->call('printer/getorderpaginglist', array('machine_code' => $machineCode, 'page_index' => $pageIndex, 'page_size' => $pageSize));
    }

    /**
     * 获取终端状态接口
     *
     * @param $machineCode string 机器码
     * @return mixed
     */
    public function getPrintStatus($machineCode)
    {
        return $this->client->call('printer/getprintstatus', array('machine_code' => $machineCode));
    }


}