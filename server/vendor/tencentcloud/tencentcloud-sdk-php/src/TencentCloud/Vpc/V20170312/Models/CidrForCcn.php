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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于发布云联网的cidr信息
 *
 * @method string getCidr() 获取local cidr值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCidr(string $Cidr) 设置local cidr值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPublishedToVbc() 获取是否发布到了云联网。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishedToVbc(boolean $PublishedToVbc) 设置是否发布到了云联网。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CidrForCcn extends AbstractModel
{
    /**
     * @var string local cidr值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cidr;

    /**
     * @var boolean 是否发布到了云联网。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishedToVbc;

    /**
     * @param string $Cidr local cidr值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PublishedToVbc 是否发布到了云联网。
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
        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }

        if (array_key_exists("PublishedToVbc",$param) and $param["PublishedToVbc"] !== null) {
            $this->PublishedToVbc = $param["PublishedToVbc"];
        }
    }
}
