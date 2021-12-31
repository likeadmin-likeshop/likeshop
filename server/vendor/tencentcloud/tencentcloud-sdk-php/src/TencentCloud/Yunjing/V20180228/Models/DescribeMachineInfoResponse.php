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
 * DescribeMachineInfo返回参数结构体
 *
 * @method string getMachineIp() 获取机器ip。
 * @method void setMachineIp(string $MachineIp) 设置机器ip。
 * @method integer getProtectDays() 获取受云镜保护天数。
 * @method void setProtectDays(integer $ProtectDays) 设置受云镜保护天数。
 * @method string getMachineOs() 获取操作系统。
 * @method void setMachineOs(string $MachineOs) 设置操作系统。
 * @method string getMachineName() 获取主机名称。
 * @method void setMachineName(string $MachineName) 设置主机名称。
 * @method string getMachineStatus() 获取在线状态。
<li>ONLINE： 在线</li>
<li>OFFLINE：离线</li>
 * @method void setMachineStatus(string $MachineStatus) 设置在线状态。
<li>ONLINE： 在线</li>
<li>OFFLINE：离线</li>
 * @method string getInstanceId() 获取CVM或BM主机唯一标识。
 * @method void setInstanceId(string $InstanceId) 设置CVM或BM主机唯一标识。
 * @method string getMachineWanIp() 获取主机外网IP。
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网IP。
 * @method string getQuuid() 获取CVM或BM主机唯一Uuid。
 * @method void setQuuid(string $Quuid) 设置CVM或BM主机唯一Uuid。
 * @method string getUuid() 获取云镜客户端唯一Uuid。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一Uuid。
 * @method boolean getIsProVersion() 获取是否开通专业版。
<li>true：是</li>
<li>false：否</li>
 * @method void setIsProVersion(boolean $IsProVersion) 设置是否开通专业版。
<li>true：是</li>
<li>false：否</li>
 * @method string getProVersionOpenDate() 获取专业版开通时间。
 * @method void setProVersionOpenDate(string $ProVersionOpenDate) 设置专业版开通时间。
 * @method string getMachineType() 获取云主机类型。
<li>CVM: 虚拟主机</li>
<li>BM: 黑石物理机</li>
 * @method void setMachineType(string $MachineType) 设置云主机类型。
<li>CVM: 虚拟主机</li>
<li>BM: 黑石物理机</li>
 * @method string getMachineRegion() 获取机器所属地域。如：ap-guangzhou，ap-shanghai
 * @method void setMachineRegion(string $MachineRegion) 设置机器所属地域。如：ap-guangzhou，ap-shanghai
 * @method string getPayMode() 获取主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
 * @method void setPayMode(string $PayMode) 设置主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
 * @method integer getFreeMalwaresLeft() 获取免费木马剩余检测数量。
 * @method void setFreeMalwaresLeft(integer $FreeMalwaresLeft) 设置免费木马剩余检测数量。
 * @method integer getFreeVulsLeft() 获取免费漏洞剩余检测数量。
 * @method void setFreeVulsLeft(integer $FreeVulsLeft) 设置免费漏洞剩余检测数量。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMachineInfoResponse extends AbstractModel
{
    /**
     * @var string 机器ip。
     */
    public $MachineIp;

    /**
     * @var integer 受云镜保护天数。
     */
    public $ProtectDays;

    /**
     * @var string 操作系统。
     */
    public $MachineOs;

    /**
     * @var string 主机名称。
     */
    public $MachineName;

    /**
     * @var string 在线状态。
<li>ONLINE： 在线</li>
<li>OFFLINE：离线</li>
     */
    public $MachineStatus;

    /**
     * @var string CVM或BM主机唯一标识。
     */
    public $InstanceId;

    /**
     * @var string 主机外网IP。
     */
    public $MachineWanIp;

    /**
     * @var string CVM或BM主机唯一Uuid。
     */
    public $Quuid;

    /**
     * @var string 云镜客户端唯一Uuid。
     */
    public $Uuid;

    /**
     * @var boolean 是否开通专业版。
<li>true：是</li>
<li>false：否</li>
     */
    public $IsProVersion;

    /**
     * @var string 专业版开通时间。
     */
    public $ProVersionOpenDate;

    /**
     * @var string 云主机类型。
<li>CVM: 虚拟主机</li>
<li>BM: 黑石物理机</li>
     */
    public $MachineType;

    /**
     * @var string 机器所属地域。如：ap-guangzhou，ap-shanghai
     */
    public $MachineRegion;

    /**
     * @var string 主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
     */
    public $PayMode;

    /**
     * @var integer 免费木马剩余检测数量。
     */
    public $FreeMalwaresLeft;

    /**
     * @var integer 免费漏洞剩余检测数量。
     */
    public $FreeVulsLeft;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MachineIp 机器ip。
     * @param integer $ProtectDays 受云镜保护天数。
     * @param string $MachineOs 操作系统。
     * @param string $MachineName 主机名称。
     * @param string $MachineStatus 在线状态。
<li>ONLINE： 在线</li>
<li>OFFLINE：离线</li>
     * @param string $InstanceId CVM或BM主机唯一标识。
     * @param string $MachineWanIp 主机外网IP。
     * @param string $Quuid CVM或BM主机唯一Uuid。
     * @param string $Uuid 云镜客户端唯一Uuid。
     * @param boolean $IsProVersion 是否开通专业版。
<li>true：是</li>
<li>false：否</li>
     * @param string $ProVersionOpenDate 专业版开通时间。
     * @param string $MachineType 云主机类型。
<li>CVM: 虚拟主机</li>
<li>BM: 黑石物理机</li>
     * @param string $MachineRegion 机器所属地域。如：ap-guangzhou，ap-shanghai
     * @param string $PayMode 主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
     * @param integer $FreeMalwaresLeft 免费木马剩余检测数量。
     * @param integer $FreeVulsLeft 免费漏洞剩余检测数量。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("ProtectDays",$param) and $param["ProtectDays"] !== null) {
            $this->ProtectDays = $param["ProtectDays"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("ProVersionOpenDate",$param) and $param["ProVersionOpenDate"] !== null) {
            $this->ProVersionOpenDate = $param["ProVersionOpenDate"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("FreeMalwaresLeft",$param) and $param["FreeMalwaresLeft"] !== null) {
            $this->FreeMalwaresLeft = $param["FreeMalwaresLeft"];
        }

        if (array_key_exists("FreeVulsLeft",$param) and $param["FreeVulsLeft"] !== null) {
            $this->FreeVulsLeft = $param["FreeVulsLeft"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
