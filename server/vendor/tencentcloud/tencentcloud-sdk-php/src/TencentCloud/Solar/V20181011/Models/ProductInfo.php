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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内容页结构
 *
 * @method string getTemplateId() 获取模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductTitle() 获取模板主题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductTitle(string $ProductTitle) 设置模板主题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductDesc() 获取模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductDesc(string $ProductDesc) 设置模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductCover() 获取模板封面地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCover(string $ProductCover) 设置模板封面地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductId() 获取内容作品id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置内容作品id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductUrl() 获取作品预览链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductUrl(string $ProductUrl) 设置作品预览链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取作品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置作品名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProductInfo extends AbstractModel
{
    /**
     * @var string 模板id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string 模板主题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductTitle;

    /**
     * @var string 模板描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductDesc;

    /**
     * @var string 模板封面地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCover;

    /**
     * @var string 内容作品id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var string 作品预览链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductUrl;

    /**
     * @var string 作品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @param string $TemplateId 模板id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductTitle 模板主题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductDesc 模板描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductCover 模板封面地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductId 内容作品id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductUrl 作品预览链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 作品名称
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ProductTitle",$param) and $param["ProductTitle"] !== null) {
            $this->ProductTitle = $param["ProductTitle"];
        }

        if (array_key_exists("ProductDesc",$param) and $param["ProductDesc"] !== null) {
            $this->ProductDesc = $param["ProductDesc"];
        }

        if (array_key_exists("ProductCover",$param) and $param["ProductCover"] !== null) {
            $this->ProductCover = $param["ProductCover"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductUrl",$param) and $param["ProductUrl"] !== null) {
            $this->ProductUrl = $param["ProductUrl"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }
    }
}
