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
 * CreateApiRateLimitRule请求参数结构体
 *
 * @method string getApiId() 获取Api Id
 * @method void setApiId(string $ApiId) 设置Api Id
 * @method integer getMaxQps() 获取qps值
 * @method void setMaxQps(integer $MaxQps) 设置qps值
 * @method string getUsableStatus() 获取开启/禁用，enabled/disabled, 不传默认开启
 * @method void setUsableStatus(string $UsableStatus) 设置开启/禁用，enabled/disabled, 不传默认开启
 */
class CreateApiRateLimitRuleRequest extends AbstractModel
{
    /**
     * @var string Api Id
     */
    public $ApiId;

    /**
     * @var integer qps值
     */
    public $MaxQps;

    /**
     * @var string 开启/禁用，enabled/disabled, 不传默认开启
     */
    public $UsableStatus;

    /**
     * @param string $ApiId Api Id
     * @param integer $MaxQps qps值
     * @param string $UsableStatus 开启/禁用，enabled/disabled, 不传默认开启
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("MaxQps",$param) and $param["MaxQps"] !== null) {
            $this->MaxQps = $param["MaxQps"];
        }

        if (array_key_exists("UsableStatus",$param) and $param["UsableStatus"] !== null) {
            $this->UsableStatus = $param["UsableStatus"];
        }
    }
}
