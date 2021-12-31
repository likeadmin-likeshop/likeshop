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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云监控支持的产品简要信息
 *
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getProductName() 获取产品中文名称
 * @method void setProductName(string $ProductName) 设置产品中文名称
 * @method string getProductEnName() 获取产品英文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductEnName(string $ProductEnName) 设置产品英文名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProductSimple extends AbstractModel
{
    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 产品中文名称
     */
    public $ProductName;

    /**
     * @var string 产品英文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductEnName;

    /**
     * @param string $Namespace 命名空间
     * @param string $ProductName 产品中文名称
     * @param string $ProductEnName 产品英文名称
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductEnName",$param) and $param["ProductEnName"] !== null) {
            $this->ProductEnName = $param["ProductEnName"];
        }
    }
}
