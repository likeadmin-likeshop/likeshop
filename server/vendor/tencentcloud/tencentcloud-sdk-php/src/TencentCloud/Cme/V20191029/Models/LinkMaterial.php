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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 链接类型的素材信息
 *
 * @method string getLinkType() 获取链接类型取值:
<li>CLASS: 分类链接;</li>
<li> MATERIAL：素材链接。</li>
 * @method void setLinkType(string $LinkType) 设置链接类型取值:
<li>CLASS: 分类链接;</li>
<li> MATERIAL：素材链接。</li>
 * @method string getLinkStatus() 获取链接状态取值：
<li> Normal：正常 ；</li>
<li>NotFound：链接目标不存在；</li> <li>Forbidden：无权限。</li>
 * @method void setLinkStatus(string $LinkStatus) 设置链接状态取值：
<li> Normal：正常 ；</li>
<li>NotFound：链接目标不存在；</li> <li>Forbidden：无权限。</li>
 * @method LinkMaterialInfo getLinkMaterialInfo() 获取素材链接详细信息，当LinkType="MATERIAL"时有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkMaterialInfo(LinkMaterialInfo $LinkMaterialInfo) 设置素材链接详细信息，当LinkType="MATERIAL"时有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClassInfo getLinkClassInfo() 获取分类链接目标信息，当LinkType=“CLASS”时有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkClassInfo(ClassInfo $LinkClassInfo) 设置分类链接目标信息，当LinkType=“CLASS”时有值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LinkMaterial extends AbstractModel
{
    /**
     * @var string 链接类型取值:
<li>CLASS: 分类链接;</li>
<li> MATERIAL：素材链接。</li>
     */
    public $LinkType;

    /**
     * @var string 链接状态取值：
<li> Normal：正常 ；</li>
<li>NotFound：链接目标不存在；</li> <li>Forbidden：无权限。</li>
     */
    public $LinkStatus;

    /**
     * @var LinkMaterialInfo 素材链接详细信息，当LinkType="MATERIAL"时有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkMaterialInfo;

    /**
     * @var ClassInfo 分类链接目标信息，当LinkType=“CLASS”时有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkClassInfo;

    /**
     * @param string $LinkType 链接类型取值:
<li>CLASS: 分类链接;</li>
<li> MATERIAL：素材链接。</li>
     * @param string $LinkStatus 链接状态取值：
<li> Normal：正常 ；</li>
<li>NotFound：链接目标不存在；</li> <li>Forbidden：无权限。</li>
     * @param LinkMaterialInfo $LinkMaterialInfo 素材链接详细信息，当LinkType="MATERIAL"时有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClassInfo $LinkClassInfo 分类链接目标信息，当LinkType=“CLASS”时有值。
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
        if (array_key_exists("LinkType",$param) and $param["LinkType"] !== null) {
            $this->LinkType = $param["LinkType"];
        }

        if (array_key_exists("LinkStatus",$param) and $param["LinkStatus"] !== null) {
            $this->LinkStatus = $param["LinkStatus"];
        }

        if (array_key_exists("LinkMaterialInfo",$param) and $param["LinkMaterialInfo"] !== null) {
            $this->LinkMaterialInfo = new LinkMaterialInfo();
            $this->LinkMaterialInfo->deserialize($param["LinkMaterialInfo"]);
        }

        if (array_key_exists("LinkClassInfo",$param) and $param["LinkClassInfo"] !== null) {
            $this->LinkClassInfo = new ClassInfo();
            $this->LinkClassInfo->deserialize($param["LinkClassInfo"]);
        }
    }
}
