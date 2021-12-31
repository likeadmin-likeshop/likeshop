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
 * 描述配额信息，所有配额均指当前地域下的配额。
 *
 * @method string getQuotaId() 获取配额名称，取值范围：
<li> TOTAL_OPEN_CLB_QUOTA: 用户当前地域下的公网LB配额 </li>
<li> TOTAL_INTERNAL_CLB_QUOTA: 用户当前地域下的内网LB配额 </li>
<li> TOTAL_LISTENER_QUOTA: 一个CLB下的监听器配额 </li>
<li> TOTAL_LISTENER_RULE_QUOTA: 一个监听器下的转发规则配额 </li>
<li> TOTAL_TARGET_BIND_QUOTA: 一条转发规则下绑定设备配额 </li>
 * @method void setQuotaId(string $QuotaId) 设置配额名称，取值范围：
<li> TOTAL_OPEN_CLB_QUOTA: 用户当前地域下的公网LB配额 </li>
<li> TOTAL_INTERNAL_CLB_QUOTA: 用户当前地域下的内网LB配额 </li>
<li> TOTAL_LISTENER_QUOTA: 一个CLB下的监听器配额 </li>
<li> TOTAL_LISTENER_RULE_QUOTA: 一个监听器下的转发规则配额 </li>
<li> TOTAL_TARGET_BIND_QUOTA: 一条转发规则下绑定设备配额 </li>
 * @method integer getQuotaCurrent() 获取当前使用数量，为 null 时表示无意义。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaCurrent(integer $QuotaCurrent) 设置当前使用数量，为 null 时表示无意义。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQuotaLimit() 获取配额数量。
 * @method void setQuotaLimit(integer $QuotaLimit) 设置配额数量。
 */
class Quota extends AbstractModel
{
    /**
     * @var string 配额名称，取值范围：
<li> TOTAL_OPEN_CLB_QUOTA: 用户当前地域下的公网LB配额 </li>
<li> TOTAL_INTERNAL_CLB_QUOTA: 用户当前地域下的内网LB配额 </li>
<li> TOTAL_LISTENER_QUOTA: 一个CLB下的监听器配额 </li>
<li> TOTAL_LISTENER_RULE_QUOTA: 一个监听器下的转发规则配额 </li>
<li> TOTAL_TARGET_BIND_QUOTA: 一条转发规则下绑定设备配额 </li>
     */
    public $QuotaId;

    /**
     * @var integer 当前使用数量，为 null 时表示无意义。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaCurrent;

    /**
     * @var integer 配额数量。
     */
    public $QuotaLimit;

    /**
     * @param string $QuotaId 配额名称，取值范围：
<li> TOTAL_OPEN_CLB_QUOTA: 用户当前地域下的公网LB配额 </li>
<li> TOTAL_INTERNAL_CLB_QUOTA: 用户当前地域下的内网LB配额 </li>
<li> TOTAL_LISTENER_QUOTA: 一个CLB下的监听器配额 </li>
<li> TOTAL_LISTENER_RULE_QUOTA: 一个监听器下的转发规则配额 </li>
<li> TOTAL_TARGET_BIND_QUOTA: 一条转发规则下绑定设备配额 </li>
     * @param integer $QuotaCurrent 当前使用数量，为 null 时表示无意义。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QuotaLimit 配额数量。
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
        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("QuotaCurrent",$param) and $param["QuotaCurrent"] !== null) {
            $this->QuotaCurrent = $param["QuotaCurrent"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }
    }
}
