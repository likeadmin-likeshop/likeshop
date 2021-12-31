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
namespace TencentCloud\Chdfs\V20190718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权限规则
 *
 * @method integer getAccessRuleId() 获取权限规则ID
 * @method void setAccessRuleId(integer $AccessRuleId) 设置权限规则ID
 * @method string getAddress() 获取权限规则地址（网段或IP）
 * @method void setAddress(string $Address) 设置权限规则地址（网段或IP）
 * @method integer getAccessMode() 获取权限规则访问模式（1：只读；2：读写）
 * @method void setAccessMode(integer $AccessMode) 设置权限规则访问模式（1：只读；2：读写）
 * @method integer getPriority() 获取优先级（取值范围1~100，值越小优先级越高）
 * @method void setPriority(integer $Priority) 设置优先级（取值范围1~100，值越小优先级越高）
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class AccessRule extends AbstractModel
{
    /**
     * @var integer 权限规则ID
     */
    public $AccessRuleId;

    /**
     * @var string 权限规则地址（网段或IP）
     */
    public $Address;

    /**
     * @var integer 权限规则访问模式（1：只读；2：读写）
     */
    public $AccessMode;

    /**
     * @var integer 优先级（取值范围1~100，值越小优先级越高）
     */
    public $Priority;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param integer $AccessRuleId 权限规则ID
     * @param string $Address 权限规则地址（网段或IP）
     * @param integer $AccessMode 权限规则访问模式（1：只读；2：读写）
     * @param integer $Priority 优先级（取值范围1~100，值越小优先级越高）
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("AccessRuleId",$param) and $param["AccessRuleId"] !== null) {
            $this->AccessRuleId = $param["AccessRuleId"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
