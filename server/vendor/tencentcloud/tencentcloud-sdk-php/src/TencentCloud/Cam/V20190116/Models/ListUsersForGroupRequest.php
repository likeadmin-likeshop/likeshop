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
 * ListUsersForGroup请求参数结构体
 *
 * @method integer getGroupId() 获取用户组 ID。
 * @method void setGroupId(integer $GroupId) 设置用户组 ID。
 * @method integer getPage() 获取页码。默认为1。
 * @method void setPage(integer $Page) 设置页码。默认为1。
 * @method integer getRp() 获取每页数量。默认为20。
 * @method void setRp(integer $Rp) 设置每页数量。默认为20。
 */
class ListUsersForGroupRequest extends AbstractModel
{
    /**
     * @var integer 用户组 ID。
     */
    public $GroupId;

    /**
     * @var integer 页码。默认为1。
     */
    public $Page;

    /**
     * @var integer 每页数量。默认为20。
     */
    public $Rp;

    /**
     * @param integer $GroupId 用户组 ID。
     * @param integer $Page 页码。默认为1。
     * @param integer $Rp 每页数量。默认为20。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }
    }
}
