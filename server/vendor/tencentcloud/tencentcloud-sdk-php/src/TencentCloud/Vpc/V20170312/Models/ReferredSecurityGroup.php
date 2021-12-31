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
 * 安全组被引用信息
 *
 * @method string getSecurityGroupId() 获取安全组实例ID。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组实例ID。
 * @method array getReferredSecurityGroupIds() 获取引用安全组实例ID（SecurityGroupId）的所有安全组实例ID。
 * @method void setReferredSecurityGroupIds(array $ReferredSecurityGroupIds) 设置引用安全组实例ID（SecurityGroupId）的所有安全组实例ID。
 */
class ReferredSecurityGroup extends AbstractModel
{
    /**
     * @var string 安全组实例ID。
     */
    public $SecurityGroupId;

    /**
     * @var array 引用安全组实例ID（SecurityGroupId）的所有安全组实例ID。
     */
    public $ReferredSecurityGroupIds;

    /**
     * @param string $SecurityGroupId 安全组实例ID。
     * @param array $ReferredSecurityGroupIds 引用安全组实例ID（SecurityGroupId）的所有安全组实例ID。
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("ReferredSecurityGroupIds",$param) and $param["ReferredSecurityGroupIds"] !== null) {
            $this->ReferredSecurityGroupIds = $param["ReferredSecurityGroupIds"];
        }
    }
}
