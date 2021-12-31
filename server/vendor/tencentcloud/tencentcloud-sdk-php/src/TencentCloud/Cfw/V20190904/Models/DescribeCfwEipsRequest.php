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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwEips请求参数结构体
 *
 * @method integer getMode() 获取0：cfw新增模式，1：cfw接入模式
 * @method void setMode(integer $Mode) 设置0：cfw新增模式，1：cfw接入模式
 * @method string getNatGatewayId() 获取ALL：查询所有弹性公网ip; nat-xxxxx：接入模式场景指定网关的弹性公网ip
 * @method void setNatGatewayId(string $NatGatewayId) 设置ALL：查询所有弹性公网ip; nat-xxxxx：接入模式场景指定网关的弹性公网ip
 * @method string getCfwInstance() 获取防火墙实例id
 * @method void setCfwInstance(string $CfwInstance) 设置防火墙实例id
 */
class DescribeCfwEipsRequest extends AbstractModel
{
    /**
     * @var integer 0：cfw新增模式，1：cfw接入模式
     */
    public $Mode;

    /**
     * @var string ALL：查询所有弹性公网ip; nat-xxxxx：接入模式场景指定网关的弹性公网ip
     */
    public $NatGatewayId;

    /**
     * @var string 防火墙实例id
     */
    public $CfwInstance;

    /**
     * @param integer $Mode 0：cfw新增模式，1：cfw接入模式
     * @param string $NatGatewayId ALL：查询所有弹性公网ip; nat-xxxxx：接入模式场景指定网关的弹性公网ip
     * @param string $CfwInstance 防火墙实例id
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }
    }
}
