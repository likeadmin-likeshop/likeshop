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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterCommonNames请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getSubaccountUins() 获取子账户列表，不可超出最大值50
 * @method void setSubaccountUins(array $SubaccountUins) 设置子账户列表，不可超出最大值50
 * @method array getRoleIds() 获取角色ID列表，不可超出最大值50
 * @method void setRoleIds(array $RoleIds) 设置角色ID列表，不可超出最大值50
 */
class DescribeClusterCommonNamesRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 子账户列表，不可超出最大值50
     */
    public $SubaccountUins;

    /**
     * @var array 角色ID列表，不可超出最大值50
     */
    public $RoleIds;

    /**
     * @param string $ClusterId 集群ID
     * @param array $SubaccountUins 子账户列表，不可超出最大值50
     * @param array $RoleIds 角色ID列表，不可超出最大值50
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SubaccountUins",$param) and $param["SubaccountUins"] !== null) {
            $this->SubaccountUins = $param["SubaccountUins"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}
