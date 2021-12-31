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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义库/黑白库明细
 *
 * @method integer getId() 获取序号
 * @method void setId(integer $Id) 设置序号
 * @method string getLibId() 获取仅当Label为Custom自定义关键词时有效，表示自定义库id
 * @method void setLibId(string $LibId) 设置仅当Label为Custom自定义关键词时有效，表示自定义库id
 * @method string getLibName() 获取仅当Label为Custom自定义关键词时有效，表示自定义库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibName(string $LibName) 设置仅当Label为Custom自定义关键词时有效，表示自定义库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageId() 获取图片ID
 * @method void setImageId(string $ImageId) 设置图片ID
 * @method string getLabel() 获取恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及其他其他令人反感、不安全或不适宜的内容类型。
 * @method void setLabel(string $Label) 设置恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及其他其他令人反感、不安全或不适宜的内容类型。
 * @method string getTag() 获取自定义标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(string $Tag) 设置自定义标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取命中的模型分值
 * @method void setScore(integer $Score) 设置命中的模型分值
 */
class LibDetail extends AbstractModel
{
    /**
     * @var integer 序号
     */
    public $Id;

    /**
     * @var string 仅当Label为Custom自定义关键词时有效，表示自定义库id
     */
    public $LibId;

    /**
     * @var string 仅当Label为Custom自定义关键词时有效，表示自定义库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibName;

    /**
     * @var string 图片ID
     */
    public $ImageId;

    /**
     * @var string 恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及其他其他令人反感、不安全或不适宜的内容类型。
     */
    public $Label;

    /**
     * @var string 自定义标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var integer 命中的模型分值
     */
    public $Score;

    /**
     * @param integer $Id 序号
     * @param string $LibId 仅当Label为Custom自定义关键词时有效，表示自定义库id
     * @param string $LibName 仅当Label为Custom自定义关键词时有效，表示自定义库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageId 图片ID
     * @param string $Label 恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及其他其他令人反感、不安全或不适宜的内容类型。
     * @param string $Tag 自定义标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 命中的模型分值
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

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
