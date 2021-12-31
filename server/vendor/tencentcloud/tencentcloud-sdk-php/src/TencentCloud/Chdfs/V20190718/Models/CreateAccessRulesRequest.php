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
 * CreateAccessRules请求参数结构体
 *
 * @method array getAccessRules() 获取多个权限规则，上限为10
 * @method void setAccessRules(array $AccessRules) 设置多个权限规则，上限为10
 * @method string getAccessGroupId() 获取权限组ID
 * @method void setAccessGroupId(string $AccessGroupId) 设置权限组ID
 */
class CreateAccessRulesRequest extends AbstractModel
{
    /**
     * @var array 多个权限规则，上限为10
     */
    public $AccessRules;

    /**
     * @var string 权限组ID
     */
    public $AccessGroupId;

    /**
     * @param array $AccessRules 多个权限规则，上限为10
     * @param string $AccessGroupId 权限组ID
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
        if (array_key_exists("AccessRules",$param) and $param["AccessRules"] !== null) {
            $this->AccessRules = [];
            foreach ($param["AccessRules"] as $key => $value){
                $obj = new AccessRule();
                $obj->deserialize($value);
                array_push($this->AccessRules, $obj);
            }
        }

        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }
    }
}
