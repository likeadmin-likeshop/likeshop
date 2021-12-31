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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全扫描系统权限信息
 *
 * @method array getPermissionList() 获取系统权限信息
 * @method void setPermissionList(array $PermissionList) 设置系统权限信息
 */
class ScanPermissionList extends AbstractModel
{
    /**
     * @var array 系统权限信息
     */
    public $PermissionList;

    /**
     * @param array $PermissionList 系统权限信息
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
        if (array_key_exists("PermissionList",$param) and $param["PermissionList"] !== null) {
            $this->PermissionList = [];
            foreach ($param["PermissionList"] as $key => $value){
                $obj = new ScanPermissionInfo();
                $obj->deserialize($value);
                array_push($this->PermissionList, $obj);
            }
        }
    }
}
