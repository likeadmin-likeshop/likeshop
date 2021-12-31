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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 暴力破解列表
 *
 * @method integer getId() 获取事件ID。
 * @method void setId(integer $Id) 设置事件ID。
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method string getStatus() 获取破解事件状态
<li>BRUTEATTACK_FAIL_ACCOUNT： 暴力破解事件-失败(存在帐号)  </li>
<li>BRUTEATTACK_FAIL_NOACCOUNT：暴力破解事件-失败(帐号不存在)</li>
<li>BRUTEATTACK_SUCCESS：暴力破解事件-成功</li>
 * @method void setStatus(string $Status) 设置破解事件状态
<li>BRUTEATTACK_FAIL_ACCOUNT： 暴力破解事件-失败(存在帐号)  </li>
<li>BRUTEATTACK_FAIL_NOACCOUNT：暴力破解事件-失败(帐号不存在)</li>
<li>BRUTEATTACK_SUCCESS：暴力破解事件-成功</li>
 * @method string getUserName() 获取用户名称。
 * @method void setUserName(string $UserName) 设置用户名称。
 * @method integer getCity() 获取城市ID。
 * @method void setCity(integer $City) 设置城市ID。
 * @method integer getCountry() 获取国家ID。
 * @method void setCountry(integer $Country) 设置国家ID。
 * @method integer getProvince() 获取省份ID。
 * @method void setProvince(integer $Province) 设置省份ID。
 * @method string getSrcIp() 获取来源IP。
 * @method void setSrcIp(string $SrcIp) 设置来源IP。
 * @method integer getCount() 获取尝试破解次数。
 * @method void setCount(integer $Count) 设置尝试破解次数。
 * @method string getCreateTime() 获取发生时间。
 * @method void setCreateTime(string $CreateTime) 设置发生时间。
 * @method string getMachineName() 获取主机名称。
 * @method void setMachineName(string $MachineName) 设置主机名称。
 * @method string getUuid() 获取云镜客户端唯一标识UUID。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一标识UUID。
 * @method boolean getIsProVersion() 获取是否专业版。
 * @method void setIsProVersion(boolean $IsProVersion) 设置是否专业版。
 * @method string getBanStatus() 获取阻断状态。
 * @method void setBanStatus(string $BanStatus) 设置阻断状态。
 * @method string getQuuid() 获取机器UUID
 * @method void setQuuid(string $Quuid) 设置机器UUID
 */
class BruteAttack extends AbstractModel
{
    /**
     * @var integer 事件ID。
     */
    public $Id;

    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var string 破解事件状态
<li>BRUTEATTACK_FAIL_ACCOUNT： 暴力破解事件-失败(存在帐号)  </li>
<li>BRUTEATTACK_FAIL_NOACCOUNT：暴力破解事件-失败(帐号不存在)</li>
<li>BRUTEATTACK_SUCCESS：暴力破解事件-成功</li>
     */
    public $Status;

    /**
     * @var string 用户名称。
     */
    public $UserName;

    /**
     * @var integer 城市ID。
     */
    public $City;

    /**
     * @var integer 国家ID。
     */
    public $Country;

    /**
     * @var integer 省份ID。
     */
    public $Province;

    /**
     * @var string 来源IP。
     */
    public $SrcIp;

    /**
     * @var integer 尝试破解次数。
     */
    public $Count;

    /**
     * @var string 发生时间。
     */
    public $CreateTime;

    /**
     * @var string 主机名称。
     */
    public $MachineName;

    /**
     * @var string 云镜客户端唯一标识UUID。
     */
    public $Uuid;

    /**
     * @var boolean 是否专业版。
     */
    public $IsProVersion;

    /**
     * @var string 阻断状态。
     */
    public $BanStatus;

    /**
     * @var string 机器UUID
     */
    public $Quuid;

    /**
     * @param integer $Id 事件ID。
     * @param string $MachineIp 主机IP。
     * @param string $Status 破解事件状态
<li>BRUTEATTACK_FAIL_ACCOUNT： 暴力破解事件-失败(存在帐号)  </li>
<li>BRUTEATTACK_FAIL_NOACCOUNT：暴力破解事件-失败(帐号不存在)</li>
<li>BRUTEATTACK_SUCCESS：暴力破解事件-成功</li>
     * @param string $UserName 用户名称。
     * @param integer $City 城市ID。
     * @param integer $Country 国家ID。
     * @param integer $Province 省份ID。
     * @param string $SrcIp 来源IP。
     * @param integer $Count 尝试破解次数。
     * @param string $CreateTime 发生时间。
     * @param string $MachineName 主机名称。
     * @param string $Uuid 云镜客户端唯一标识UUID。
     * @param boolean $IsProVersion 是否专业版。
     * @param string $BanStatus 阻断状态。
     * @param string $Quuid 机器UUID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
