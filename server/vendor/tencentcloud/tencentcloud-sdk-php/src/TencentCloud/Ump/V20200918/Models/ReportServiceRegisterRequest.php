<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReportServiceRegister请求参数结构体
 *
 * @method string getGroupCode() 获取集团编码
 * @method void setGroupCode(string $GroupCode) 设置集团编码
 * @method integer getMallId() 获取广场ID
 * @method void setMallId(integer $MallId) 设置广场ID
 * @method array getServiceRegisterInfos() 获取服务上报当前的服务能力信息
 * @method void setServiceRegisterInfos(array $ServiceRegisterInfos) 设置服务上报当前的服务能力信息
 * @method string getServerIp() 获取服务内网Ip
 * @method void setServerIp(string $ServerIp) 设置服务内网Ip
 * @method string getServerNodeId() 获取上报服务所在服务器的唯一ID
 * @method void setServerNodeId(string $ServerNodeId) 设置上报服务所在服务器的唯一ID
 * @method integer getReportTime() 获取上报时间戳, 单位毫秒
 * @method void setReportTime(integer $ReportTime) 设置上报时间戳, 单位毫秒
 */
class ReportServiceRegisterRequest extends AbstractModel
{
    /**
     * @var string 集团编码
     */
    public $GroupCode;

    /**
     * @var integer 广场ID
     */
    public $MallId;

    /**
     * @var array 服务上报当前的服务能力信息
     */
    public $ServiceRegisterInfos;

    /**
     * @var string 服务内网Ip
     */
    public $ServerIp;

    /**
     * @var string 上报服务所在服务器的唯一ID
     */
    public $ServerNodeId;

    /**
     * @var integer 上报时间戳, 单位毫秒
     */
    public $ReportTime;

    /**
     * @param string $GroupCode 集团编码
     * @param integer $MallId 广场ID
     * @param array $ServiceRegisterInfos 服务上报当前的服务能力信息
     * @param string $ServerIp 服务内网Ip
     * @param string $ServerNodeId 上报服务所在服务器的唯一ID
     * @param integer $ReportTime 上报时间戳, 单位毫秒
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupCode",$param) and $param["GroupCode"] !== null) {
            $this->GroupCode = $param["GroupCode"];
        }

        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }

        if (array_key_exists("ServiceRegisterInfos",$param) and $param["ServiceRegisterInfos"] !== null) {
            $this->ServiceRegisterInfos = [];
            foreach ($param["ServiceRegisterInfos"] as $key => $value){
                $obj = new ServiceRegisterInfo();
                $obj->deserialize($value);
                array_push($this->ServiceRegisterInfos, $obj);
            }
        }

        if (array_key_exists("ServerIp",$param) and $param["ServerIp"] !== null) {
            $this->ServerIp = $param["ServerIp"];
        }

        if (array_key_exists("ServerNodeId",$param) and $param["ServerNodeId"] !== null) {
            $this->ServerNodeId = $param["ServerNodeId"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }
    }
}
