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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindCloudResource请求参数结构体
 *
 * @method string getKeyId() 获取cmk的ID
 * @method void setKeyId(string $KeyId) 设置cmk的ID
 * @method string getProductId() 获取云产品的唯一性标识符
 * @method void setProductId(string $ProductId) 设置云产品的唯一性标识符
 * @method string getResourceId() 获取资源/实例ID，由调用方根据自己的云产品特征来定义，以字符串形式做存储。
 * @method void setResourceId(string $ResourceId) 设置资源/实例ID，由调用方根据自己的云产品特征来定义，以字符串形式做存储。
 */
class UnbindCloudResourceRequest extends AbstractModel
{
    /**
     * @var string cmk的ID
     */
    public $KeyId;

    /**
     * @var string 云产品的唯一性标识符
     */
    public $ProductId;

    /**
     * @var string 资源/实例ID，由调用方根据自己的云产品特征来定义，以字符串形式做存储。
     */
    public $ResourceId;

    /**
     * @param string $KeyId cmk的ID
     * @param string $ProductId 云产品的唯一性标识符
     * @param string $ResourceId 资源/实例ID，由调用方根据自己的云产品特征来定义，以字符串形式做存储。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
