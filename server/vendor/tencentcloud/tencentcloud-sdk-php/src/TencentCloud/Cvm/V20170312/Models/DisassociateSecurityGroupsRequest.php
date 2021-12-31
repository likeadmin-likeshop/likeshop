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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateSecurityGroups请求参数结构体
 *
 * @method array getSecurityGroupIds() 获取要解绑的`安全组ID`，类似sg-efil73jd，只支持解绑单个安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置要解绑的`安全组ID`，类似sg-efil73jd，只支持解绑单个安全组。
 * @method array getInstanceIds() 获取被解绑的`实例ID`，类似ins-lesecurk，支持指定多个实例 。
 * @method void setInstanceIds(array $InstanceIds) 设置被解绑的`实例ID`，类似ins-lesecurk，支持指定多个实例 。
 */
class DisassociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array 要解绑的`安全组ID`，类似sg-efil73jd，只支持解绑单个安全组。
     */
    public $SecurityGroupIds;

    /**
     * @var array 被解绑的`实例ID`，类似ins-lesecurk，支持指定多个实例 。
     */
    public $InstanceIds;

    /**
     * @param array $SecurityGroupIds 要解绑的`安全组ID`，类似sg-efil73jd，只支持解绑单个安全组。
     * @param array $InstanceIds 被解绑的`实例ID`，类似ins-lesecurk，支持指定多个实例 。
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
        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
