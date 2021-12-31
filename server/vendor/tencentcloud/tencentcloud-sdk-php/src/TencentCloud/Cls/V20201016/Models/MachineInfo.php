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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器状态信息
 *
 * @method string getIp() 获取机器的IP
 * @method void setIp(string $Ip) 设置机器的IP
 * @method integer getStatus() 获取机器状态，0:异常，1:正常
 * @method void setStatus(integer $Status) 设置机器状态，0:异常，1:正常
 * @method string getOfflineTime() 获取机器离线时间，空为正常，异常返回具体时间
 * @method void setOfflineTime(string $OfflineTime) 设置机器离线时间，空为正常，异常返回具体时间
 * @method integer getAutoUpdate() 获取机器是否开启自动升级。0:关闭，1:开启
 * @method void setAutoUpdate(integer $AutoUpdate) 设置机器是否开启自动升级。0:关闭，1:开启
 * @method string getVersion() 获取机器当前版本号。
 * @method void setVersion(string $Version) 设置机器当前版本号。
 * @method integer getUpdateStatus() 获取机器升级功能状态。
 * @method void setUpdateStatus(integer $UpdateStatus) 设置机器升级功能状态。
 * @method integer getErrCode() 获取机器升级结果标识。
 * @method void setErrCode(integer $ErrCode) 设置机器升级结果标识。
 * @method string getErrMsg() 获取机器升级结果信息。
 * @method void setErrMsg(string $ErrMsg) 设置机器升级结果信息。
 */
class MachineInfo extends AbstractModel
{
    /**
     * @var string 机器的IP
     */
    public $Ip;

    /**
     * @var integer 机器状态，0:异常，1:正常
     */
    public $Status;

    /**
     * @var string 机器离线时间，空为正常，异常返回具体时间
     */
    public $OfflineTime;

    /**
     * @var integer 机器是否开启自动升级。0:关闭，1:开启
     */
    public $AutoUpdate;

    /**
     * @var string 机器当前版本号。
     */
    public $Version;

    /**
     * @var integer 机器升级功能状态。
     */
    public $UpdateStatus;

    /**
     * @var integer 机器升级结果标识。
     */
    public $ErrCode;

    /**
     * @var string 机器升级结果信息。
     */
    public $ErrMsg;

    /**
     * @param string $Ip 机器的IP
     * @param integer $Status 机器状态，0:异常，1:正常
     * @param string $OfflineTime 机器离线时间，空为正常，异常返回具体时间
     * @param integer $AutoUpdate 机器是否开启自动升级。0:关闭，1:开启
     * @param string $Version 机器当前版本号。
     * @param integer $UpdateStatus 机器升级功能状态。
     * @param integer $ErrCode 机器升级结果标识。
     * @param string $ErrMsg 机器升级结果信息。
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("AutoUpdate",$param) and $param["AutoUpdate"] !== null) {
            $this->AutoUpdate = $param["AutoUpdate"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("UpdateStatus",$param) and $param["UpdateStatus"] !== null) {
            $this->UpdateStatus = $param["UpdateStatus"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
