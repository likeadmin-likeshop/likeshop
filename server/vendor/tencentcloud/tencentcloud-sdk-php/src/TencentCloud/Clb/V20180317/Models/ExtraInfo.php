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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 暂做保留，一般用户无需关注。
 *
 * @method boolean getZhiTong() 获取是否开通VIP直通
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZhiTong(boolean $ZhiTong) 设置是否开通VIP直通
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTgwGroupName() 获取TgwGroup名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTgwGroupName(string $TgwGroupName) 设置TgwGroup名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtraInfo extends AbstractModel
{
    /**
     * @var boolean 是否开通VIP直通
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZhiTong;

    /**
     * @var string TgwGroup名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TgwGroupName;

    /**
     * @param boolean $ZhiTong 是否开通VIP直通
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TgwGroupName TgwGroup名称
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
        if (array_key_exists("ZhiTong",$param) and $param["ZhiTong"] !== null) {
            $this->ZhiTong = $param["ZhiTong"];
        }

        if (array_key_exists("TgwGroupName",$param) and $param["TgwGroupName"] !== null) {
            $this->TgwGroupName = $param["TgwGroupName"];
        }
    }
}
