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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApiTimeouts请求参数结构体
 *
 * @method array getApiIds() 获取API ID 列表
 * @method void setApiIds(array $ApiIds) 设置API ID 列表
 * @method string getUsableStatus() 获取开启/禁用，enabled/disabled
 * @method void setUsableStatus(string $UsableStatus) 设置开启/禁用，enabled/disabled
 * @method integer getTimeout() 获取超时时间，单位毫秒，开启API超时时，必填
 * @method void setTimeout(integer $Timeout) 设置超时时间，单位毫秒，开启API超时时，必填
 */
class UpdateApiTimeoutsRequest extends AbstractModel
{
    /**
     * @var array API ID 列表
     */
    public $ApiIds;

    /**
     * @var string 开启/禁用，enabled/disabled
     */
    public $UsableStatus;

    /**
     * @var integer 超时时间，单位毫秒，开启API超时时，必填
     */
    public $Timeout;

    /**
     * @param array $ApiIds API ID 列表
     * @param string $UsableStatus 开启/禁用，enabled/disabled
     * @param integer $Timeout 超时时间，单位毫秒，开启API超时时，必填
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
        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }

        if (array_key_exists("UsableStatus",$param) and $param["UsableStatus"] !== null) {
            $this->UsableStatus = $param["UsableStatus"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
