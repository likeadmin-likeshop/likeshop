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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人体轨迹信息。
 *
 * @method string getTraceId() 获取人体轨迹ID。
 * @method void setTraceId(string $TraceId) 设置人体轨迹ID。
 * @method array getBodyIds() 获取包含的人体轨迹图片Id列表。
 * @method void setBodyIds(array $BodyIds) 设置包含的人体轨迹图片Id列表。
 */
class TraceInfo extends AbstractModel
{
    /**
     * @var string 人体轨迹ID。
     */
    public $TraceId;

    /**
     * @var array 包含的人体轨迹图片Id列表。
     */
    public $BodyIds;

    /**
     * @param string $TraceId 人体轨迹ID。
     * @param array $BodyIds 包含的人体轨迹图片Id列表。
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
        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("BodyIds",$param) and $param["BodyIds"] !== null) {
            $this->BodyIds = $param["BodyIds"];
        }
    }
}
