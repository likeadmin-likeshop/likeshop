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
 * api环境绑定策略
 *
 * @method string getApiId() 获取API唯一ID。
 * @method void setApiId(string $ApiId) 设置API唯一ID。
 * @method string getApiName() 获取用户自定义API名称。
 * @method void setApiName(string $ApiName) 设置用户自定义API名称。
 * @method string getPath() 获取API的路径。如/path。
 * @method void setPath(string $Path) 设置API的路径。如/path。
 * @method string getMethod() 获取API的方法。如GET。
 * @method void setMethod(string $Method) 设置API的方法。如GET。
 * @method array getEnvironmentStrategySet() 获取环境的限流信息。
 * @method void setEnvironmentStrategySet(array $EnvironmentStrategySet) 设置环境的限流信息。
 */
class ApiEnvironmentStrategy extends AbstractModel
{
    /**
     * @var string API唯一ID。
     */
    public $ApiId;

    /**
     * @var string 用户自定义API名称。
     */
    public $ApiName;

    /**
     * @var string API的路径。如/path。
     */
    public $Path;

    /**
     * @var string API的方法。如GET。
     */
    public $Method;

    /**
     * @var array 环境的限流信息。
     */
    public $EnvironmentStrategySet;

    /**
     * @param string $ApiId API唯一ID。
     * @param string $ApiName 用户自定义API名称。
     * @param string $Path API的路径。如/path。
     * @param string $Method API的方法。如GET。
     * @param array $EnvironmentStrategySet 环境的限流信息。
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

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("EnvironmentStrategySet",$param) and $param["EnvironmentStrategySet"] !== null) {
            $this->EnvironmentStrategySet = [];
            foreach ($param["EnvironmentStrategySet"] as $key => $value){
                $obj = new EnvironmentStrategy();
                $obj->deserialize($value);
                array_push($this->EnvironmentStrategySet, $obj);
            }
        }
    }
}
