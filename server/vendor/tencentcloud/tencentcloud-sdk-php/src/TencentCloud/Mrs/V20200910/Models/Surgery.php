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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 手术记录
 *
 * @method SurgeryHistory getSurgeryHistory() 获取手术史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurgeryHistory(SurgeryHistory $SurgeryHistory) 设置手术史
注意：此字段可能返回 null，表示取不到有效值。
 */
class Surgery extends AbstractModel
{
    /**
     * @var SurgeryHistory 手术史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SurgeryHistory;

    /**
     * @param SurgeryHistory $SurgeryHistory 手术史
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
        if (array_key_exists("SurgeryHistory",$param) and $param["SurgeryHistory"] !== null) {
            $this->SurgeryHistory = new SurgeryHistory();
            $this->SurgeryHistory->deserialize($param["SurgeryHistory"]);
        }
    }
}
