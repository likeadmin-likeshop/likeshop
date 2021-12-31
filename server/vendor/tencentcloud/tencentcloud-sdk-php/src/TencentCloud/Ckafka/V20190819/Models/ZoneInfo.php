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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * zone信息实体
 *
 * @method string getZoneId() 获取zone的id
 * @method void setZoneId(string $ZoneId) 设置zone的id
 * @method integer getIsInternalApp() 获取是否内部APP
 * @method void setIsInternalApp(integer $IsInternalApp) 设置是否内部APP
 * @method integer getAppId() 获取app id
 * @method void setAppId(integer $AppId) 设置app id
 * @method boolean getFlag() 获取标识
 * @method void setFlag(boolean $Flag) 设置标识
 * @method string getZoneName() 获取zone名称
 * @method void setZoneName(string $ZoneName) 设置zone名称
 * @method integer getZoneStatus() 获取zone状态
 * @method void setZoneStatus(integer $ZoneStatus) 设置zone状态
 * @method string getExflag() 获取额外标识
 * @method void setExflag(string $Exflag) 设置额外标识
 * @method string getSoldOut() 获取json对象，key为机型，value true为售罄，false为未售罄
 * @method void setSoldOut(string $SoldOut) 设置json对象，key为机型，value true为售罄，false为未售罄
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string zone的id
     */
    public $ZoneId;

    /**
     * @var integer 是否内部APP
     */
    public $IsInternalApp;

    /**
     * @var integer app id
     */
    public $AppId;

    /**
     * @var boolean 标识
     */
    public $Flag;

    /**
     * @var string zone名称
     */
    public $ZoneName;

    /**
     * @var integer zone状态
     */
    public $ZoneStatus;

    /**
     * @var string 额外标识
     */
    public $Exflag;

    /**
     * @var string json对象，key为机型，value true为售罄，false为未售罄
     */
    public $SoldOut;

    /**
     * @param string $ZoneId zone的id
     * @param integer $IsInternalApp 是否内部APP
     * @param integer $AppId app id
     * @param boolean $Flag 标识
     * @param string $ZoneName zone名称
     * @param integer $ZoneStatus zone状态
     * @param string $Exflag 额外标识
     * @param string $SoldOut json对象，key为机型，value true为售罄，false为未售罄
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("IsInternalApp",$param) and $param["IsInternalApp"] !== null) {
            $this->IsInternalApp = $param["IsInternalApp"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneStatus",$param) and $param["ZoneStatus"] !== null) {
            $this->ZoneStatus = $param["ZoneStatus"];
        }

        if (array_key_exists("Exflag",$param) and $param["Exflag"] !== null) {
            $this->Exflag = $param["Exflag"];
        }

        if (array_key_exists("SoldOut",$param) and $param["SoldOut"] !== null) {
            $this->SoldOut = $param["SoldOut"];
        }
    }
}
