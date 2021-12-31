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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEipAcl返回参数结构体
 *
 * @method string getAclId() 获取ACL 实例 ID
 * @method void setAclId(string $AclId) 设置ACL 实例 ID
 * @method integer getStatus() 获取ACL 实例状态
 * @method void setStatus(integer $Status) 设置ACL 实例状态
 * @method string getAclName() 获取ACL 实例名称
 * @method void setAclName(string $AclName) 设置ACL 实例名称
 * @method string getCreatedAt() 获取ACL 实例创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置ACL 实例创建时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateEipAclResponse extends AbstractModel
{
    /**
     * @var string ACL 实例 ID
     */
    public $AclId;

    /**
     * @var integer ACL 实例状态
     */
    public $Status;

    /**
     * @var string ACL 实例名称
     */
    public $AclName;

    /**
     * @var string ACL 实例创建时间
     */
    public $CreatedAt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AclId ACL 实例 ID
     * @param integer $Status ACL 实例状态
     * @param string $AclName ACL 实例名称
     * @param string $CreatedAt ACL 实例创建时间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AclId",$param) and $param["AclId"] !== null) {
            $this->AclId = $param["AclId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AclName",$param) and $param["AclName"] !== null) {
            $this->AclName = $param["AclName"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
