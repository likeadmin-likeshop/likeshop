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
namespace TencentCloud\Ft\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人像渐变返回结果
 *
 * @method string getMorphUrl() 获取人像渐变输出的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMorphUrl(string $MorphUrl) 设置人像渐变输出的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMorphMd5() 获取人像渐变输出的结果MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMorphMd5(string $MorphMd5) 设置人像渐变输出的结果MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCoverImage() 获取人像渐变输出的结果封面图base64字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverImage(string $CoverImage) 设置人像渐变输出的结果封面图base64字符串
注意：此字段可能返回 null，表示取不到有效值。
 */
class FaceMorphOutput extends AbstractModel
{
    /**
     * @var string 人像渐变输出的url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MorphUrl;

    /**
     * @var string 人像渐变输出的结果MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MorphMd5;

    /**
     * @var string 人像渐变输出的结果封面图base64字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverImage;

    /**
     * @param string $MorphUrl 人像渐变输出的url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MorphMd5 人像渐变输出的结果MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CoverImage 人像渐变输出的结果封面图base64字符串
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
        if (array_key_exists("MorphUrl",$param) and $param["MorphUrl"] !== null) {
            $this->MorphUrl = $param["MorphUrl"];
        }

        if (array_key_exists("MorphMd5",$param) and $param["MorphMd5"] !== null) {
            $this->MorphMd5 = $param["MorphMd5"];
        }

        if (array_key_exists("CoverImage",$param) and $param["CoverImage"] !== null) {
            $this->CoverImage = $param["CoverImage"];
        }
    }
}
