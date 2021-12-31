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
 * UpdateGatewayApi请求参数结构体
 *
 * @method string getApiId() 获取API ID
 * @method void setApiId(string $ApiId) 设置API ID
 * @method string getPath() 获取API 路径
 * @method void setPath(string $Path) 设置API 路径
 * @method string getMethod() 获取Api 请求方法
 * @method void setMethod(string $Method) 设置Api 请求方法
 * @method string getPathMapping() 获取请求映射
 * @method void setPathMapping(string $PathMapping) 设置请求映射
 * @method string getHost() 获取api所在服务host
 * @method void setHost(string $Host) 设置api所在服务host
 * @method string getDescription() 获取api描述信息
 * @method void setDescription(string $Description) 设置api描述信息
 */
class UpdateGatewayApiRequest extends AbstractModel
{
    /**
     * @var string API ID
     */
    public $ApiId;

    /**
     * @var string API 路径
     */
    public $Path;

    /**
     * @var string Api 请求方法
     */
    public $Method;

    /**
     * @var string 请求映射
     */
    public $PathMapping;

    /**
     * @var string api所在服务host
     */
    public $Host;

    /**
     * @var string api描述信息
     */
    public $Description;

    /**
     * @param string $ApiId API ID
     * @param string $Path API 路径
     * @param string $Method Api 请求方法
     * @param string $PathMapping 请求映射
     * @param string $Host api所在服务host
     * @param string $Description api描述信息
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("PathMapping",$param) and $param["PathMapping"] !== null) {
            $this->PathMapping = $param["PathMapping"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
