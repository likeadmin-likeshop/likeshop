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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityPolicy请求参数结构体
 *
 * @method string getRegistryId() 获取实例的Id
 * @method void setRegistryId(string $RegistryId) 设置实例的Id
 * @method integer getPolicyIndex() 获取PolicyId
 * @method void setPolicyIndex(integer $PolicyIndex) 设置PolicyId
 * @method string getCidrBlock() 获取192.168.0.0/24 白名单Ip
 * @method void setCidrBlock(string $CidrBlock) 设置192.168.0.0/24 白名单Ip
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 */
class ModifySecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string 实例的Id
     */
    public $RegistryId;

    /**
     * @var integer PolicyId
     */
    public $PolicyIndex;

    /**
     * @var string 192.168.0.0/24 白名单Ip
     */
    public $CidrBlock;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @param string $RegistryId 实例的Id
     * @param integer $PolicyIndex PolicyId
     * @param string $CidrBlock 192.168.0.0/24 白名单Ip
     * @param string $Description 备注
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("PolicyIndex",$param) and $param["PolicyIndex"] !== null) {
            $this->PolicyIndex = $param["PolicyIndex"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
