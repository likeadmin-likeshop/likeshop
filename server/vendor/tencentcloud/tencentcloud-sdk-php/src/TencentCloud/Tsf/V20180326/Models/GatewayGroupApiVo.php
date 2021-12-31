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
 * 网关API简单信息
 *
 * @method string getApiId() 获取API ID
 * @method void setApiId(string $ApiId) 设置API ID
 * @method string getPath() 获取API 请求路径
 * @method void setPath(string $Path) 设置API 请求路径
 * @method string getMicroserviceName() 获取API 微服务名称
 * @method void setMicroserviceName(string $MicroserviceName) 设置API 微服务名称
 * @method string getMethod() 获取API 请求方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置API 请求方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class GatewayGroupApiVo extends AbstractModel
{
    /**
     * @var string API ID
     */
    public $ApiId;

    /**
     * @var string API 请求路径
     */
    public $Path;

    /**
     * @var string API 微服务名称
     */
    public $MicroserviceName;

    /**
     * @var string API 请求方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var string 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @param string $ApiId API ID
     * @param string $Path API 请求路径
     * @param string $MicroserviceName API 微服务名称
     * @param string $Method API 请求方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("MicroserviceName",$param) and $param["MicroserviceName"] !== null) {
            $this->MicroserviceName = $param["MicroserviceName"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }
    }
}
