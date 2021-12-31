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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUserToGroup请求参数结构体
 *
 * @method array getInfo() 获取添加的子用户 UID 和用户组 ID 关联关系
 * @method void setInfo(array $Info) 设置添加的子用户 UID 和用户组 ID 关联关系
 */
class AddUserToGroupRequest extends AbstractModel
{
    /**
     * @var array 添加的子用户 UID 和用户组 ID 关联关系
     */
    public $Info;

    /**
     * @param array $Info 添加的子用户 UID 和用户组 ID 关联关系
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
        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = [];
            foreach ($param["Info"] as $key => $value){
                $obj = new GroupIdOfUidInfo();
                $obj->deserialize($value);
                array_push($this->Info, $obj);
            }
        }
    }
}
