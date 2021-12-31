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
 * 实例预付费模式
 *
 * @method integer getPeriod() 获取购买实例的时长，单位：月
 * @method void setPeriod(integer $Period) 设置购买实例的时长，单位：月
 * @method integer getRenewFlag() 获取自动续费标识，0：手动续费，1：自动续费，2：不续费并且不通知
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标识，0：手动续费，1：自动续费，2：不续费并且不通知
 */
class RegistryChargePrepaid extends AbstractModel
{
    /**
     * @var integer 购买实例的时长，单位：月
     */
    public $Period;

    /**
     * @var integer 自动续费标识，0：手动续费，1：自动续费，2：不续费并且不通知
     */
    public $RenewFlag;

    /**
     * @param integer $Period 购买实例的时长，单位：月
     * @param integer $RenewFlag 自动续费标识，0：手动续费，1：自动续费，2：不续费并且不通知
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
