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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewCards请求参数结构体
 *
 * @method integer getSdkappid() 获取应用ID
 * @method void setSdkappid(integer $Sdkappid) 设置应用ID
 * @method array getIccids() 获取续费的iccid
 * @method void setIccids(array $Iccids) 设置续费的iccid
 * @method integer getRenewNum() 获取续费的周期（单位：月）
 * @method void setRenewNum(integer $RenewNum) 设置续费的周期（单位：月）
 */
class RenewCardsRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $Sdkappid;

    /**
     * @var array 续费的iccid
     */
    public $Iccids;

    /**
     * @var integer 续费的周期（单位：月）
     */
    public $RenewNum;

    /**
     * @param integer $Sdkappid 应用ID
     * @param array $Iccids 续费的iccid
     * @param integer $RenewNum 续费的周期（单位：月）
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
        if (array_key_exists("Sdkappid",$param) and $param["Sdkappid"] !== null) {
            $this->Sdkappid = $param["Sdkappid"];
        }

        if (array_key_exists("Iccids",$param) and $param["Iccids"] !== null) {
            $this->Iccids = $param["Iccids"];
        }

        if (array_key_exists("RenewNum",$param) and $param["RenewNum"] !== null) {
            $this->RenewNum = $param["RenewNum"];
        }
    }
}
