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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityPolicyDetail返回参数结构体
 *
 * @method string getProxyId() 获取通道ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyId(string $ProxyId) 设置通道ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取安全策略状态：
BOUND，已开启安全策略
UNBIND，已关闭安全策略
BINDING，安全策略开启中
UNBINDING，安全策略关闭中。
 * @method void setStatus(string $Status) 设置安全策略状态：
BOUND，已开启安全策略
UNBIND，已关闭安全策略
BINDING，安全策略开启中
UNBINDING，安全策略关闭中。
 * @method string getDefaultAction() 获取默认策略：ACCEPT或DROP。
 * @method void setDefaultAction(string $DefaultAction) 设置默认策略：ACCEPT或DROP。
 * @method string getPolicyId() 获取策略ID
 * @method void setPolicyId(string $PolicyId) 设置策略ID
 * @method array getRuleList() 获取规则列表
 * @method void setRuleList(array $RuleList) 设置规则列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityPolicyDetailResponse extends AbstractModel
{
    /**
     * @var string 通道ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyId;

    /**
     * @var string 安全策略状态：
BOUND，已开启安全策略
UNBIND，已关闭安全策略
BINDING，安全策略开启中
UNBINDING，安全策略关闭中。
     */
    public $Status;

    /**
     * @var string 默认策略：ACCEPT或DROP。
     */
    public $DefaultAction;

    /**
     * @var string 策略ID
     */
    public $PolicyId;

    /**
     * @var array 规则列表
     */
    public $RuleList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ProxyId 通道ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 安全策略状态：
BOUND，已开启安全策略
UNBIND，已关闭安全策略
BINDING，安全策略开启中
UNBINDING，安全策略关闭中。
     * @param string $DefaultAction 默认策略：ACCEPT或DROP。
     * @param string $PolicyId 策略ID
     * @param array $RuleList 规则列表
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DefaultAction",$param) and $param["DefaultAction"] !== null) {
            $this->DefaultAction = $param["DefaultAction"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new SecurityPolicyRuleOut();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
