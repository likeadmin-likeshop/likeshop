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
 * 用户组信息
 *
 * @method integer getGroupId() 获取用户组 ID。
 * @method void setGroupId(integer $GroupId) 设置用户组 ID。
 * @method string getGroupName() 获取用户组名称。
 * @method void setGroupName(string $GroupName) 设置用户组名称。
 * @method string getCreateTime() 获取用户组创建时间。
 * @method void setCreateTime(string $CreateTime) 设置用户组创建时间。
 * @method string getRemark() 获取用户组描述。
 * @method void setRemark(string $Remark) 设置用户组描述。
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var integer 用户组 ID。
     */
    public $GroupId;

    /**
     * @var string 用户组名称。
     */
    public $GroupName;

    /**
     * @var string 用户组创建时间。
     */
    public $CreateTime;

    /**
     * @var string 用户组描述。
     */
    public $Remark;

    /**
     * @param integer $GroupId 用户组 ID。
     * @param string $GroupName 用户组名称。
     * @param string $CreateTime 用户组创建时间。
     * @param string $Remark 用户组描述。
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
