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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryProducts接口对应数据结构。产品对应的相关信息。
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getProductCode() 获取产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCode(string $ProductCode) 设置产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProductStatus() 获取产品状态 0 禁用 1 启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductStatus(integer $ProductStatus) 设置产品状态 0 禁用 1 启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSceneType() 获取场景类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneType(string $SceneType) 设置场景类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProductQueryInfo extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 产品编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCode;

    /**
     * @var integer 产品状态 0 禁用 1 启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductStatus;

    /**
     * @var string 场景类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneType;

    /**
     * @param string $ProductId 产品Id
     * @param string $ProductName 产品名称
     * @param string $ProductCode 产品编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProductStatus 产品状态 0 禁用 1 启用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SceneType 场景类型
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductStatus",$param) and $param["ProductStatus"] !== null) {
            $this->ProductStatus = $param["ProductStatus"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }
    }
}
