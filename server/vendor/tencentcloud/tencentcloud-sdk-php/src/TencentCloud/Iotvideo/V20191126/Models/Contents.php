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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本发布的描述信息，需要国际化，可以为空
 *
 * @method string getEn() 获取英文，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEn(string $En) 设置英文，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCn() 获取中文简体，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCn(string $Cn) 设置中文简体，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTc() 获取中文繁体(Traditional Chinese)，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTc(string $Tc) 设置中文繁体(Traditional Chinese)，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefault() 获取默认语言，最多不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefault(string $Default) 设置默认语言，最多不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
 */
class Contents extends AbstractModel
{
    /**
     * @var string 英文，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $En;

    /**
     * @var string 中文简体，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cn;

    /**
     * @var string 中文繁体(Traditional Chinese)，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tc;

    /**
     * @var string 默认语言，最多不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Default;

    /**
     * @param string $En 英文，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cn 中文简体，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tc 中文繁体(Traditional Chinese)，长度不超过300个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Default 默认语言，最多不超过300个字符
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
        if (array_key_exists("En",$param) and $param["En"] !== null) {
            $this->En = $param["En"];
        }

        if (array_key_exists("Cn",$param) and $param["Cn"] !== null) {
            $this->Cn = $param["Cn"];
        }

        if (array_key_exists("Tc",$param) and $param["Tc"] !== null) {
            $this->Tc = $param["Tc"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }
    }
}
