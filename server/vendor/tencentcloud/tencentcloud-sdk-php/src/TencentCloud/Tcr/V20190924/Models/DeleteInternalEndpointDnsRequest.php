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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteInternalEndpointDns请求参数结构体
 *
 * @method string getInstanceId() 获取tcr实例id
 * @method void setInstanceId(string $InstanceId) 设置tcr实例id
 * @method string getVpcId() 获取私有网络id
 * @method void setVpcId(string $VpcId) 设置私有网络id
 * @method string getEniLBIp() 获取tcr内网访问链路ip
 * @method void setEniLBIp(string $EniLBIp) 设置tcr内网访问链路ip
 * @method boolean getUsePublicDomain() 获取true：use instance name as subdomain
false: use instancename+"-vpc" as subdomain
 * @method void setUsePublicDomain(boolean $UsePublicDomain) 设置true：use instance name as subdomain
false: use instancename+"-vpc" as subdomain
 */
class DeleteInternalEndpointDnsRequest extends AbstractModel
{
    /**
     * @var string tcr实例id
     */
    public $InstanceId;

    /**
     * @var string 私有网络id
     */
    public $VpcId;

    /**
     * @var string tcr内网访问链路ip
     */
    public $EniLBIp;

    /**
     * @var boolean true：use instance name as subdomain
false: use instancename+"-vpc" as subdomain
     */
    public $UsePublicDomain;

    /**
     * @param string $InstanceId tcr实例id
     * @param string $VpcId 私有网络id
     * @param string $EniLBIp tcr内网访问链路ip
     * @param boolean $UsePublicDomain true：use instance name as subdomain
false: use instancename+"-vpc" as subdomain
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("EniLBIp",$param) and $param["EniLBIp"] !== null) {
            $this->EniLBIp = $param["EniLBIp"];
        }

        if (array_key_exists("UsePublicDomain",$param) and $param["UsePublicDomain"] !== null) {
            $this->UsePublicDomain = $param["UsePublicDomain"];
        }
    }
}
