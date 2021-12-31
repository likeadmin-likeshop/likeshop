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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义域名的路径映射。
 *
 * @method string getPath() 获取路径。
 * @method void setPath(string $Path) 设置路径。
 * @method string getEnvironment() 获取发布环境，可选值为“test”、 ”prepub“、”release“。
 * @method void setEnvironment(string $Environment) 设置发布环境，可选值为“test”、 ”prepub“、”release“。
 */
class PathMapping extends AbstractModel
{
    /**
     * @var string 路径。
     */
    public $Path;

    /**
     * @var string 发布环境，可选值为“test”、 ”prepub“、”release“。
     */
    public $Environment;

    /**
     * @param string $Path 路径。
     * @param string $Environment 发布环境，可选值为“test”、 ”prepub“、”release“。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
