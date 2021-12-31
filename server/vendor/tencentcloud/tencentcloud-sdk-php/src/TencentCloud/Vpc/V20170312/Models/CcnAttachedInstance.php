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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网（CCN）关联实例（Instance）对象
 *
 * @method string getCcnId() 获取云联网实例ID。
 * @method void setCcnId(string $CcnId) 设置云联网实例ID。
 * @method string getInstanceType() 获取关联实例类型：
<li>`VPC`：私有网络</li>
<li>`DIRECTCONNECT`：专线网关</li>
<li>`BMVPC`：黑石私有网络</li>
 * @method void setInstanceType(string $InstanceType) 设置关联实例类型：
<li>`VPC`：私有网络</li>
<li>`DIRECTCONNECT`：专线网关</li>
<li>`BMVPC`：黑石私有网络</li>
 * @method string getInstanceId() 获取关联实例ID。
 * @method void setInstanceId(string $InstanceId) 设置关联实例ID。
 * @method string getInstanceName() 获取关联实例名称。
 * @method void setInstanceName(string $InstanceName) 设置关联实例名称。
 * @method string getInstanceRegion() 获取关联实例所属大区，例如：ap-guangzhou。
 * @method void setInstanceRegion(string $InstanceRegion) 设置关联实例所属大区，例如：ap-guangzhou。
 * @method string getInstanceUin() 获取关联实例所属UIN（根账号）。
 * @method void setInstanceUin(string $InstanceUin) 设置关联实例所属UIN（根账号）。
 * @method array getCidrBlock() 获取关联实例CIDR。
 * @method void setCidrBlock(array $CidrBlock) 设置关联实例CIDR。
 * @method string getState() 获取关联实例状态：
<li>`PENDING`：申请中</li>
<li>`ACTIVE`：已连接</li>
<li>`EXPIRED`：已过期</li>
<li>`REJECTED`：已拒绝</li>
<li>`DELETED`：已删除</li>
<li>`FAILED`：失败的（2小时后将异步强制解关联）</li>
<li>`ATTACHING`：关联中</li>
<li>`DETACHING`：解关联中</li>
<li>`DETACHFAILED`：解关联失败（2小时后将异步强制解关联）</li>
 * @method void setState(string $State) 设置关联实例状态：
<li>`PENDING`：申请中</li>
<li>`ACTIVE`：已连接</li>
<li>`EXPIRED`：已过期</li>
<li>`REJECTED`：已拒绝</li>
<li>`DELETED`：已删除</li>
<li>`FAILED`：失败的（2小时后将异步强制解关联）</li>
<li>`ATTACHING`：关联中</li>
<li>`DETACHING`：解关联中</li>
<li>`DETACHFAILED`：解关联失败（2小时后将异步强制解关联）</li>
 * @method string getAttachedTime() 获取关联时间。
 * @method void setAttachedTime(string $AttachedTime) 设置关联时间。
 * @method string getCcnUin() 获取云联网所属UIN（根账号）。
 * @method void setCcnUin(string $CcnUin) 设置云联网所属UIN（根账号）。
 * @method string getInstanceArea() 获取关联实例所属的大地域，如: CHINA_MAINLAND
 * @method void setInstanceArea(string $InstanceArea) 设置关联实例所属的大地域，如: CHINA_MAINLAND
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 */
class CcnAttachedInstance extends AbstractModel
{
    /**
     * @var string 云联网实例ID。
     */
    public $CcnId;

    /**
     * @var string 关联实例类型：
<li>`VPC`：私有网络</li>
<li>`DIRECTCONNECT`：专线网关</li>
<li>`BMVPC`：黑石私有网络</li>
     */
    public $InstanceType;

    /**
     * @var string 关联实例ID。
     */
    public $InstanceId;

    /**
     * @var string 关联实例名称。
     */
    public $InstanceName;

    /**
     * @var string 关联实例所属大区，例如：ap-guangzhou。
     */
    public $InstanceRegion;

    /**
     * @var string 关联实例所属UIN（根账号）。
     */
    public $InstanceUin;

    /**
     * @var array 关联实例CIDR。
     */
    public $CidrBlock;

    /**
     * @var string 关联实例状态：
<li>`PENDING`：申请中</li>
<li>`ACTIVE`：已连接</li>
<li>`EXPIRED`：已过期</li>
<li>`REJECTED`：已拒绝</li>
<li>`DELETED`：已删除</li>
<li>`FAILED`：失败的（2小时后将异步强制解关联）</li>
<li>`ATTACHING`：关联中</li>
<li>`DETACHING`：解关联中</li>
<li>`DETACHFAILED`：解关联失败（2小时后将异步强制解关联）</li>
     */
    public $State;

    /**
     * @var string 关联时间。
     */
    public $AttachedTime;

    /**
     * @var string 云联网所属UIN（根账号）。
     */
    public $CcnUin;

    /**
     * @var string 关联实例所属的大地域，如: CHINA_MAINLAND
     */
    public $InstanceArea;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @param string $CcnId 云联网实例ID。
     * @param string $InstanceType 关联实例类型：
<li>`VPC`：私有网络</li>
<li>`DIRECTCONNECT`：专线网关</li>
<li>`BMVPC`：黑石私有网络</li>
     * @param string $InstanceId 关联实例ID。
     * @param string $InstanceName 关联实例名称。
     * @param string $InstanceRegion 关联实例所属大区，例如：ap-guangzhou。
     * @param string $InstanceUin 关联实例所属UIN（根账号）。
     * @param array $CidrBlock 关联实例CIDR。
     * @param string $State 关联实例状态：
<li>`PENDING`：申请中</li>
<li>`ACTIVE`：已连接</li>
<li>`EXPIRED`：已过期</li>
<li>`REJECTED`：已拒绝</li>
<li>`DELETED`：已删除</li>
<li>`FAILED`：失败的（2小时后将异步强制解关联）</li>
<li>`ATTACHING`：关联中</li>
<li>`DETACHING`：解关联中</li>
<li>`DETACHFAILED`：解关联失败（2小时后将异步强制解关联）</li>
     * @param string $AttachedTime 关联时间。
     * @param string $CcnUin 云联网所属UIN（根账号）。
     * @param string $InstanceArea 关联实例所属的大地域，如: CHINA_MAINLAND
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("InstanceUin",$param) and $param["InstanceUin"] !== null) {
            $this->InstanceUin = $param["InstanceUin"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AttachedTime",$param) and $param["AttachedTime"] !== null) {
            $this->AttachedTime = $param["AttachedTime"];
        }

        if (array_key_exists("CcnUin",$param) and $param["CcnUin"] !== null) {
            $this->CcnUin = $param["CcnUin"];
        }

        if (array_key_exists("InstanceArea",$param) and $param["InstanceArea"] !== null) {
            $this->InstanceArea = $param["InstanceArea"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
