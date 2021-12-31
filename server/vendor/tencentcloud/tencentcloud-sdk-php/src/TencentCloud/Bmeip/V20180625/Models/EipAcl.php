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
 * EipAcl信息
 *
 * @method string getAclId() 获取ACL 实例 ID。
 * @method void setAclId(string $AclId) 设置ACL 实例 ID。
 * @method string getAclName() 获取ACL 实例名称
 * @method void setAclName(string $AclName) 设置ACL 实例名称
 * @method string getStatus() 获取ACL 状态。0：无状态，1：有状态
 * @method void setStatus(string $Status) 设置ACL 状态。0：无状态，1：有状态
 * @method string getCreatedAt() 获取EIPACL 创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置EIPACL 创建时间
 * @method integer getEipNum() 获取EIPACL 已关联的 eip 数目
 * @method void setEipNum(integer $EipNum) 设置EIPACL 已关联的 eip 数目
 * @method array getOutRules() 获取出站规则
 * @method void setOutRules(array $OutRules) 设置出站规则
 * @method array getInRules() 获取入站规则
 * @method void setInRules(array $InRules) 设置入站规则
 */
class EipAcl extends AbstractModel
{
    /**
     * @var string ACL 实例 ID。
     */
    public $AclId;

    /**
     * @var string ACL 实例名称
     */
    public $AclName;

    /**
     * @var string ACL 状态。0：无状态，1：有状态
     */
    public $Status;

    /**
     * @var string EIPACL 创建时间
     */
    public $CreatedAt;

    /**
     * @var integer EIPACL 已关联的 eip 数目
     */
    public $EipNum;

    /**
     * @var array 出站规则
     */
    public $OutRules;

    /**
     * @var array 入站规则
     */
    public $InRules;

    /**
     * @param string $AclId ACL 实例 ID。
     * @param string $AclName ACL 实例名称
     * @param string $Status ACL 状态。0：无状态，1：有状态
     * @param string $CreatedAt EIPACL 创建时间
     * @param integer $EipNum EIPACL 已关联的 eip 数目
     * @param array $OutRules 出站规则
     * @param array $InRules 入站规则
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

        if (array_key_exists("AclName",$param) and $param["AclName"] !== null) {
            $this->AclName = $param["AclName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("EipNum",$param) and $param["EipNum"] !== null) {
            $this->EipNum = $param["EipNum"];
        }

        if (array_key_exists("OutRules",$param) and $param["OutRules"] !== null) {
            $this->OutRules = [];
            foreach ($param["OutRules"] as $key => $value){
                $obj = new EipAclRule();
                $obj->deserialize($value);
                array_push($this->OutRules, $obj);
            }
        }

        if (array_key_exists("InRules",$param) and $param["InRules"] !== null) {
            $this->InRules = [];
            foreach ($param["InRules"] as $key => $value){
                $obj = new EipAclRule();
                $obj->deserialize($value);
                array_push($this->InRules, $obj);
            }
        }
    }
}
