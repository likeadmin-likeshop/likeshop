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
 * 子用户和用户组关联信息
 *
 * @method integer getUid() 获取子用户 UID
 * @method void setUid(integer $Uid) 设置子用户 UID
 * @method integer getGroupId() 获取用户组 ID
 * @method void setGroupId(integer $GroupId) 设置用户组 ID
 */
class GroupIdOfUidInfo extends AbstractModel
{
    /**
     * @var integer 子用户 UID
     */
    public $Uid;

    /**
     * @var integer 用户组 ID
     */
    public $GroupId;

    /**
     * @param integer $Uid 子用户 UID
     * @param integer $GroupId 用户组 ID
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
