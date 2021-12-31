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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DCN详情条目
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getRegion() 获取实例地域
 * @method void setRegion(string $Region) 设置实例地域
 * @method string getZone() 获取实例可用区
 * @method void setZone(string $Zone) 设置实例可用区
 * @method string getVip() 获取实例IP地址
 * @method void setVip(string $Vip) 设置实例IP地址
 * @method string getVipv6() 获取实例IPv6地址
 * @method void setVipv6(string $Vipv6) 设置实例IPv6地址
 * @method integer getVport() 获取实例端口
 * @method void setVport(integer $Vport) 设置实例端口
 * @method integer getStatus() 获取实例状态
 * @method void setStatus(integer $Status) 设置实例状态
 * @method string getStatusDesc() 获取实例状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置实例状态描述
 * @method integer getDcnFlag() 获取实例DCN标志，1-主，2-备
 * @method void setDcnFlag(integer $DcnFlag) 设置实例DCN标志，1-主，2-备
 * @method integer getDcnStatus() 获取实例DCN状态，0-无，1-创建中，2-同步中，3-已断开
 * @method void setDcnStatus(integer $DcnStatus) 设置实例DCN状态，0-无，1-创建中，2-同步中，3-已断开
 */
class DcnDetailItem extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例地域
     */
    public $Region;

    /**
     * @var string 实例可用区
     */
    public $Zone;

    /**
     * @var string 实例IP地址
     */
    public $Vip;

    /**
     * @var string 实例IPv6地址
     */
    public $Vipv6;

    /**
     * @var integer 实例端口
     */
    public $Vport;

    /**
     * @var integer 实例状态
     */
    public $Status;

    /**
     * @var string 实例状态描述
     */
    public $StatusDesc;

    /**
     * @var integer 实例DCN标志，1-主，2-备
     */
    public $DcnFlag;

    /**
     * @var integer 实例DCN状态，0-无，1-创建中，2-同步中，3-已断开
     */
    public $DcnStatus;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $Region 实例地域
     * @param string $Zone 实例可用区
     * @param string $Vip 实例IP地址
     * @param string $Vipv6 实例IPv6地址
     * @param integer $Vport 实例端口
     * @param integer $Status 实例状态
     * @param string $StatusDesc 实例状态描述
     * @param integer $DcnFlag 实例DCN标志，1-主，2-备
     * @param integer $DcnStatus 实例DCN状态，0-无，1-创建中，2-同步中，3-已断开
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vipv6",$param) and $param["Vipv6"] !== null) {
            $this->Vipv6 = $param["Vipv6"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("DcnFlag",$param) and $param["DcnFlag"] !== null) {
            $this->DcnFlag = $param["DcnFlag"];
        }

        if (array_key_exists("DcnStatus",$param) and $param["DcnStatus"] !== null) {
            $this->DcnStatus = $param["DcnStatus"];
        }
    }
}
