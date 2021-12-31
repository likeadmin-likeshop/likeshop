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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可见范围过滤参数
 *
 * @method integer getType() 获取过滤类型, 0: 默认(可见部门+自创) 1: 自创 2: 指定部门(部门在可见范围内)
 * @method void setType(integer $Type) 设置过滤类型, 0: 默认(可见部门+自创) 1: 自创 2: 指定部门(部门在可见范围内)
 * @method array getDeptIds() 获取指定部门Id, 类型2使用
 * @method void setDeptIds(array $DeptIds) 设置指定部门Id, 类型2使用
 * @method array getUserIds() 获取用户Id列表
 * @method void setUserIds(array $UserIds) 设置用户Id列表
 */
class Filters extends AbstractModel
{
    /**
     * @var integer 过滤类型, 0: 默认(可见部门+自创) 1: 自创 2: 指定部门(部门在可见范围内)
     */
    public $Type;

    /**
     * @var array 指定部门Id, 类型2使用
     */
    public $DeptIds;

    /**
     * @var array 用户Id列表
     */
    public $UserIds;

    /**
     * @param integer $Type 过滤类型, 0: 默认(可见部门+自创) 1: 自创 2: 指定部门(部门在可见范围内)
     * @param array $DeptIds 指定部门Id, 类型2使用
     * @param array $UserIds 用户Id列表
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DeptIds",$param) and $param["DeptIds"] !== null) {
            $this->DeptIds = $param["DeptIds"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
