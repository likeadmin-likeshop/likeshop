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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品模型定义
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getModelDefine() 获取模型定义
 * @method void setModelDefine(string $ModelDefine) 设置模型定义
 * @method integer getUpdateTime() 获取更新时间，秒级时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，秒级时间戳
 * @method integer getCreateTime() 获取创建时间，秒级时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，秒级时间戳
 * @method string getCategoryModel() 获取产品所属分类的模型快照（产品创建时刻的）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryModel(string $CategoryModel) 设置产品所属分类的模型快照（产品创建时刻的）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetTypeModel() 获取产品的连接类型的模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetTypeModel(string $NetTypeModel) 设置产品的连接类型的模型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProductModelDefinition extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 模型定义
     */
    public $ModelDefine;

    /**
     * @var integer 更新时间，秒级时间戳
     */
    public $UpdateTime;

    /**
     * @var integer 创建时间，秒级时间戳
     */
    public $CreateTime;

    /**
     * @var string 产品所属分类的模型快照（产品创建时刻的）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryModel;

    /**
     * @var string 产品的连接类型的模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetTypeModel;

    /**
     * @param string $ProductId 产品ID
     * @param string $ModelDefine 模型定义
     * @param integer $UpdateTime 更新时间，秒级时间戳
     * @param integer $CreateTime 创建时间，秒级时间戳
     * @param string $CategoryModel 产品所属分类的模型快照（产品创建时刻的）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetTypeModel 产品的连接类型的模型
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

        if (array_key_exists("ModelDefine",$param) and $param["ModelDefine"] !== null) {
            $this->ModelDefine = $param["ModelDefine"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CategoryModel",$param) and $param["CategoryModel"] !== null) {
            $this->CategoryModel = $param["CategoryModel"];
        }

        if (array_key_exists("NetTypeModel",$param) and $param["NetTypeModel"] !== null) {
            $this->NetTypeModel = $param["NetTypeModel"];
        }
    }
}
