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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDefaultParams请求参数结构体
 *
 * @method string getEngineVersion() 获取mysql版本，目前支持 ["5.1", "5.5", "5.6", "5.7"]。
 * @method void setEngineVersion(string $EngineVersion) 设置mysql版本，目前支持 ["5.1", "5.5", "5.6", "5.7"]。
 */
class DescribeDefaultParamsRequest extends AbstractModel
{
    /**
     * @var string mysql版本，目前支持 ["5.1", "5.5", "5.6", "5.7"]。
     */
    public $EngineVersion;

    /**
     * @param string $EngineVersion mysql版本，目前支持 ["5.1", "5.5", "5.6", "5.7"]。
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
        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }
    }
}
