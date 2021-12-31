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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 解绑客户信息
 *
 * @method string getUin() 获取解绑账号ID
 * @method void setUin(string $Uin) 设置解绑账号ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getStatus() 获取状态：0:审核中；1：已解绑；2：已撤销 3：关联撤销 4: 已驳回
 * @method void setStatus(integer $Status) 设置状态：0:审核中；1：已解绑；2：已撤销 3：关联撤销 4: 已驳回
 * @method string getApplyTime() 获取申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyTime(string $ApplyTime) 设置申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionTime() 获取解绑/撤销时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionTime(string $ActionTime) 设置解绑/撤销时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class UnbindClientElem extends AbstractModel
{
    /**
     * @var string 解绑账号ID
     */
    public $Uin;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 状态：0:审核中；1：已解绑；2：已撤销 3：关联撤销 4: 已驳回
     */
    public $Status;

    /**
     * @var string 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyTime;

    /**
     * @var string 解绑/撤销时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionTime;

    /**
     * @param string $Uin 解绑账号ID
     * @param string $Name 名称
     * @param integer $Status 状态：0:审核中；1：已解绑；2：已撤销 3：关联撤销 4: 已驳回
     * @param string $ApplyTime 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionTime 解绑/撤销时间
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("ActionTime",$param) and $param["ActionTime"] !== null) {
            $this->ActionTime = $param["ActionTime"];
        }
    }
}
