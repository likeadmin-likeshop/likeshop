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
 * 重定向目标的信息
 *
 * @method string getTargetListenerId() 获取重定向目标的监听器ID
注意：此字段可能返回 null，表示无重定向。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetListenerId(string $TargetListenerId) 设置重定向目标的监听器ID
注意：此字段可能返回 null，表示无重定向。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetLocationId() 获取重定向目标的转发规则ID
注意：此字段可能返回 null，表示无重定向。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetLocationId(string $TargetLocationId) 设置重定向目标的转发规则ID
注意：此字段可能返回 null，表示无重定向。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRewriteCode() 获取重定向状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRewriteCode(integer $RewriteCode) 设置重定向状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTakeUrl() 获取重定向是否携带匹配的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTakeUrl(boolean $TakeUrl) 设置重定向是否携带匹配的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRewriteType() 获取重定向类型，Manual: 手动重定向，Auto:  自动重定向
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRewriteType(string $RewriteType) 设置重定向类型，Manual: 手动重定向，Auto:  自动重定向
注意：此字段可能返回 null，表示取不到有效值。
 */
class RewriteTarget extends AbstractModel
{
    /**
     * @var string 重定向目标的监听器ID
注意：此字段可能返回 null，表示无重定向。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetListenerId;

    /**
     * @var string 重定向目标的转发规则ID
注意：此字段可能返回 null，表示无重定向。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetLocationId;

    /**
     * @var integer 重定向状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RewriteCode;

    /**
     * @var boolean 重定向是否携带匹配的url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TakeUrl;

    /**
     * @var string 重定向类型，Manual: 手动重定向，Auto:  自动重定向
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RewriteType;

    /**
     * @param string $TargetListenerId 重定向目标的监听器ID
注意：此字段可能返回 null，表示无重定向。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetLocationId 重定向目标的转发规则ID
注意：此字段可能返回 null，表示无重定向。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RewriteCode 重定向状态码
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TakeUrl 重定向是否携带匹配的url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RewriteType 重定向类型，Manual: 手动重定向，Auto:  自动重定向
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
        if (array_key_exists("TargetListenerId",$param) and $param["TargetListenerId"] !== null) {
            $this->TargetListenerId = $param["TargetListenerId"];
        }

        if (array_key_exists("TargetLocationId",$param) and $param["TargetLocationId"] !== null) {
            $this->TargetLocationId = $param["TargetLocationId"];
        }

        if (array_key_exists("RewriteCode",$param) and $param["RewriteCode"] !== null) {
            $this->RewriteCode = $param["RewriteCode"];
        }

        if (array_key_exists("TakeUrl",$param) and $param["TakeUrl"] !== null) {
            $this->TakeUrl = $param["TakeUrl"];
        }

        if (array_key_exists("RewriteType",$param) and $param["RewriteType"] !== null) {
            $this->RewriteType = $param["RewriteType"];
        }
    }
}
