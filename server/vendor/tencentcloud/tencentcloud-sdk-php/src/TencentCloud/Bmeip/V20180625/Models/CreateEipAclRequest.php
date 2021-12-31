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
 * CreateEipAcl请求参数结构体
 *
 * @method string getAclName() 获取ACL 名称
 * @method void setAclName(string $AclName) 设置ACL 名称
 * @method integer getStatus() 获取ACL 状态 0：无状态，1：有状态
 * @method void setStatus(integer $Status) 设置ACL 状态 0：无状态，1：有状态
 */
class CreateEipAclRequest extends AbstractModel
{
    /**
     * @var string ACL 名称
     */
    public $AclName;

    /**
     * @var integer ACL 状态 0：无状态，1：有状态
     */
    public $Status;

    /**
     * @param string $AclName ACL 名称
     * @param integer $Status ACL 状态 0：无状态，1：有状态
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
        if (array_key_exists("AclName",$param) and $param["AclName"] !== null) {
            $this->AclName = $param["AclName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
