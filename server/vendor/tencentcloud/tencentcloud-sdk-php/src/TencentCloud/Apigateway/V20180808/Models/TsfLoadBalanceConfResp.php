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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TsfLoadBalanceConf 出参使用
 *
 * @method boolean getIsLoadBalance() 获取是否开启负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLoadBalance(boolean $IsLoadBalance) 设置是否开启负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethod() 获取负载均衡方式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置负载均衡方式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSessionStickRequired() 获取是否开启会话保持。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionStickRequired(boolean $SessionStickRequired) 设置是否开启会话保持。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionStickTimeout() 获取会话保持超时时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionStickTimeout(integer $SessionStickTimeout) 设置会话保持超时时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TsfLoadBalanceConfResp extends AbstractModel
{
    /**
     * @var boolean 是否开启负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLoadBalance;

    /**
     * @var string 负载均衡方式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var boolean 是否开启会话保持。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionStickRequired;

    /**
     * @var integer 会话保持超时时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionStickTimeout;

    /**
     * @param boolean $IsLoadBalance 是否开启负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Method 负载均衡方式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SessionStickRequired 是否开启会话保持。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionStickTimeout 会话保持超时时间。
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
        if (array_key_exists("IsLoadBalance",$param) and $param["IsLoadBalance"] !== null) {
            $this->IsLoadBalance = $param["IsLoadBalance"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("SessionStickRequired",$param) and $param["SessionStickRequired"] !== null) {
            $this->SessionStickRequired = $param["SessionStickRequired"];
        }

        if (array_key_exists("SessionStickTimeout",$param) and $param["SessionStickTimeout"] !== null) {
            $this->SessionStickTimeout = $param["SessionStickTimeout"];
        }
    }
}
