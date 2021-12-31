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
 * 安全策略
 *
 * @method integer getPolicyIndex() 获取策略索引
 * @method void setPolicyIndex(integer $PolicyIndex) 设置策略索引
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method string getCidrBlock() 获取运行访问的公网IP地址端
 * @method void setCidrBlock(string $CidrBlock) 设置运行访问的公网IP地址端
 * @method string getPolicyVersion() 获取安全策略的版本
 * @method void setPolicyVersion(string $PolicyVersion) 设置安全策略的版本
 */
class SecurityPolicy extends AbstractModel
{
    /**
     * @var integer 策略索引
     */
    public $PolicyIndex;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var string 运行访问的公网IP地址端
     */
    public $CidrBlock;

    /**
     * @var string 安全策略的版本
     */
    public $PolicyVersion;

    /**
     * @param integer $PolicyIndex 策略索引
     * @param string $Description 备注
     * @param string $CidrBlock 运行访问的公网IP地址端
     * @param string $PolicyVersion 安全策略的版本
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
        if (array_key_exists("PolicyIndex",$param) and $param["PolicyIndex"] !== null) {
            $this->PolicyIndex = $param["PolicyIndex"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("PolicyVersion",$param) and $param["PolicyVersion"] !== null) {
            $this->PolicyVersion = $param["PolicyVersion"];
        }
    }
}
