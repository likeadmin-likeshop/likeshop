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
namespace TencentCloud\Rp\V20200224\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryRegisterProtection返回参数结构体
 *
 * @method string getCodeDesc() 获取业务侧错误码，成功时返回 Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeDesc(string $CodeDesc) 设置业务侧错误码，成功时返回 Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssociateAccount() 获取accountType 是 QQ 或微信开放账号时，用于标识 QQ 或微信用户登录后关联业务自身的账号 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociateAccount(string $AssociateAccount) 设置accountType 是 QQ 或微信开放账号时，用于标识 QQ 或微信用户登录后关联业务自身的账号 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegisterTime() 获取注册时间戳，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisterTime(string $RegisterTime) 设置注册时间戳，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUid() 获取用户 ID 不同的 accountType 对应不同的用户 ID。如果是 QQ，则填入对应的 openid，微信用户则填入对应的 openid/unionid，手机号则填入对应真实用户手机号（如13123456789）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUid(string $Uid) 设置用户 ID 不同的 accountType 对应不同的用户 ID。如果是 QQ，则填入对应的 openid，微信用户则填入对应的 openid/unionid，手机号则填入对应真实用户手机号（如13123456789）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegisterIp() 获取注册来源的外网 IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisterIp(string $RegisterIp) 设置注册来源的外网 IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取0：表示无恶意。
1 - 4：恶意等级由低到高。
 * @method void setLevel(integer $Level) 设置0：表示无恶意。
1 - 4：恶意等级由低到高。
 * @method array getRiskType() 获取风险类型。
 * @method void setRiskType(array $RiskType) 设置风险类型。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryRegisterProtectionResponse extends AbstractModel
{
    /**
     * @var string 业务侧错误码，成功时返回 Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeDesc;

    /**
     * @var string accountType 是 QQ 或微信开放账号时，用于标识 QQ 或微信用户登录后关联业务自身的账号 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociateAccount;

    /**
     * @var string 注册时间戳，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisterTime;

    /**
     * @var string 用户 ID 不同的 accountType 对应不同的用户 ID。如果是 QQ，则填入对应的 openid，微信用户则填入对应的 openid/unionid，手机号则填入对应真实用户手机号（如13123456789）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uid;

    /**
     * @var string 注册来源的外网 IP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisterIp;

    /**
     * @var integer 0：表示无恶意。
1 - 4：恶意等级由低到高。
     */
    public $Level;

    /**
     * @var array 风险类型。
     */
    public $RiskType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CodeDesc 业务侧错误码，成功时返回 Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssociateAccount accountType 是 QQ 或微信开放账号时，用于标识 QQ 或微信用户登录后关联业务自身的账号 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegisterTime 注册时间戳，单位：秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uid 用户 ID 不同的 accountType 对应不同的用户 ID。如果是 QQ，则填入对应的 openid，微信用户则填入对应的 openid/unionid，手机号则填入对应真实用户手机号（如13123456789）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegisterIp 注册来源的外网 IP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 0：表示无恶意。
1 - 4：恶意等级由低到高。
     * @param array $RiskType 风险类型。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CodeDesc",$param) and $param["CodeDesc"] !== null) {
            $this->CodeDesc = $param["CodeDesc"];
        }

        if (array_key_exists("AssociateAccount",$param) and $param["AssociateAccount"] !== null) {
            $this->AssociateAccount = $param["AssociateAccount"];
        }

        if (array_key_exists("RegisterTime",$param) and $param["RegisterTime"] !== null) {
            $this->RegisterTime = $param["RegisterTime"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("RegisterIp",$param) and $param["RegisterIp"] !== null) {
            $this->RegisterIp = $param["RegisterIp"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
