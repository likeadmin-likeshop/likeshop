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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubscribeVipVport请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅实例的ID
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅实例的ID
 * @method string getDstUniqSubnetId() 获取指定目的子网，如果传此参数，DstIp必须在目的子网内
 * @method void setDstUniqSubnetId(string $DstUniqSubnetId) 设置指定目的子网，如果传此参数，DstIp必须在目的子网内
 * @method string getDstIp() 获取目标IP，与DstPort至少传一个
 * @method void setDstIp(string $DstIp) 设置目标IP，与DstPort至少传一个
 * @method integer getDstPort() 获取目标PORT，支持范围为：[1025-65535]
 * @method void setDstPort(integer $DstPort) 设置目标PORT，支持范围为：[1025-65535]
 */
class ModifySubscribeVipVportRequest extends AbstractModel
{
    /**
     * @var string 数据订阅实例的ID
     */
    public $SubscribeId;

    /**
     * @var string 指定目的子网，如果传此参数，DstIp必须在目的子网内
     */
    public $DstUniqSubnetId;

    /**
     * @var string 目标IP，与DstPort至少传一个
     */
    public $DstIp;

    /**
     * @var integer 目标PORT，支持范围为：[1025-65535]
     */
    public $DstPort;

    /**
     * @param string $SubscribeId 数据订阅实例的ID
     * @param string $DstUniqSubnetId 指定目的子网，如果传此参数，DstIp必须在目的子网内
     * @param string $DstIp 目标IP，与DstPort至少传一个
     * @param integer $DstPort 目标PORT，支持范围为：[1025-65535]
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("DstUniqSubnetId",$param) and $param["DstUniqSubnetId"] !== null) {
            $this->DstUniqSubnetId = $param["DstUniqSubnetId"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }
    }
}
