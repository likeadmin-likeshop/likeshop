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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 只读vip信息
 *
 * @method integer getRoVipStatus() 获取只读vip状态
 * @method void setRoVipStatus(integer $RoVipStatus) 设置只读vip状态
 * @method integer getRoSubnetId() 获取只读vip的子网
 * @method void setRoSubnetId(integer $RoSubnetId) 设置只读vip的子网
 * @method integer getRoVpcId() 获取只读vip的私有网络
 * @method void setRoVpcId(integer $RoVpcId) 设置只读vip的私有网络
 * @method integer getRoVport() 获取只读vip的端口号
 * @method void setRoVport(integer $RoVport) 设置只读vip的端口号
 * @method string getRoVip() 获取只读vip
 * @method void setRoVip(string $RoVip) 设置只读vip
 */
class RoVipInfo extends AbstractModel
{
    /**
     * @var integer 只读vip状态
     */
    public $RoVipStatus;

    /**
     * @var integer 只读vip的子网
     */
    public $RoSubnetId;

    /**
     * @var integer 只读vip的私有网络
     */
    public $RoVpcId;

    /**
     * @var integer 只读vip的端口号
     */
    public $RoVport;

    /**
     * @var string 只读vip
     */
    public $RoVip;

    /**
     * @param integer $RoVipStatus 只读vip状态
     * @param integer $RoSubnetId 只读vip的子网
     * @param integer $RoVpcId 只读vip的私有网络
     * @param integer $RoVport 只读vip的端口号
     * @param string $RoVip 只读vip
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
        if (array_key_exists("RoVipStatus",$param) and $param["RoVipStatus"] !== null) {
            $this->RoVipStatus = $param["RoVipStatus"];
        }

        if (array_key_exists("RoSubnetId",$param) and $param["RoSubnetId"] !== null) {
            $this->RoSubnetId = $param["RoSubnetId"];
        }

        if (array_key_exists("RoVpcId",$param) and $param["RoVpcId"] !== null) {
            $this->RoVpcId = $param["RoVpcId"];
        }

        if (array_key_exists("RoVport",$param) and $param["RoVport"] !== null) {
            $this->RoVport = $param["RoVport"];
        }

        if (array_key_exists("RoVip",$param) and $param["RoVip"] !== null) {
            $this->RoVip = $param["RoVip"];
        }
    }
}
