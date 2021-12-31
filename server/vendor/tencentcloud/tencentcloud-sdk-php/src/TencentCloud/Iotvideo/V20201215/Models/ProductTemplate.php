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
 * 产品分类实体
 *
 * @method integer getId() 获取实体ID
 * @method void setId(integer $Id) 设置实体ID
 * @method string getCategoryKey() 获取分类字段
 * @method void setCategoryKey(string $CategoryKey) 设置分类字段
 * @method string getCategoryName() 获取分类名称
 * @method void setCategoryName(string $CategoryName) 设置分类名称
 * @method integer getParentId() 获取上层实体ID
 * @method void setParentId(integer $ParentId) 设置上层实体ID
 * @method string getModelTemplate() 获取物模型
 * @method void setModelTemplate(string $ModelTemplate) 设置物模型
 * @method integer getListOrder() 获取排列顺序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListOrder(integer $ListOrder) 设置排列顺序
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIconUrl() 获取分类图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIconUrl(string $IconUrl) 设置分类图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIconUrlGrid() 获取九宫格图片地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIconUrlGrid(string $IconUrlGrid) 设置九宫格图片地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProductTemplate extends AbstractModel
{
    /**
     * @var integer 实体ID
     */
    public $Id;

    /**
     * @var string 分类字段
     */
    public $CategoryKey;

    /**
     * @var string 分类名称
     */
    public $CategoryName;

    /**
     * @var integer 上层实体ID
     */
    public $ParentId;

    /**
     * @var string 物模型
     */
    public $ModelTemplate;

    /**
     * @var integer 排列顺序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListOrder;

    /**
     * @var string 分类图标地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IconUrl;

    /**
     * @var string 九宫格图片地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IconUrlGrid;

    /**
     * @param integer $Id 实体ID
     * @param string $CategoryKey 分类字段
     * @param string $CategoryName 分类名称
     * @param integer $ParentId 上层实体ID
     * @param string $ModelTemplate 物模型
     * @param integer $ListOrder 排列顺序
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IconUrl 分类图标地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IconUrlGrid 九宫格图片地址
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CategoryKey",$param) and $param["CategoryKey"] !== null) {
            $this->CategoryKey = $param["CategoryKey"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("ModelTemplate",$param) and $param["ModelTemplate"] !== null) {
            $this->ModelTemplate = $param["ModelTemplate"];
        }

        if (array_key_exists("ListOrder",$param) and $param["ListOrder"] !== null) {
            $this->ListOrder = $param["ListOrder"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("IconUrlGrid",$param) and $param["IconUrlGrid"] !== null) {
            $this->IconUrlGrid = $param["IconUrlGrid"];
        }
    }
}
