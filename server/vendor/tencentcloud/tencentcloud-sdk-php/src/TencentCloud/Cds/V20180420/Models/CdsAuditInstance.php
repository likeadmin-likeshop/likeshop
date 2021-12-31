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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据安全产品实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAppId() 获取用户AppId
 * @method void setAppId(string $AppId) 设置用户AppId
 * @method string getUin() 获取用户Uin
 * @method void setUin(string $Uin) 设置用户Uin
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getRenewFlag() 获取续费标识
 * @method void setRenewFlag(integer $RenewFlag) 设置续费标识
 * @method string getRegion() 获取所属地域
 * @method void setRegion(string $Region) 设置所属地域
 * @method integer getPayMode() 获取付费模式（数据安全审计只支持预付费：1）
 * @method void setPayMode(integer $PayMode) 设置付费模式（数据安全审计只支持预付费：1）
 * @method integer getStatus() 获取实例状态： 0，未生效；1：正常运行； 2：被隔离； 3，已过期
 * @method void setStatus(integer $Status) 设置实例状态： 0，未生效；1：正常运行； 2：被隔离； 3，已过期
 * @method string getIsolatedTimestamp() 获取实例被隔离时间，格式：yyyy-mm-dd HH:ii:ss
 * @method void setIsolatedTimestamp(string $IsolatedTimestamp) 设置实例被隔离时间，格式：yyyy-mm-dd HH:ii:ss
 * @method string getCreateTime() 获取实例创建时间，格式： yyyy-mm-dd HH:ii:ss
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间，格式： yyyy-mm-dd HH:ii:ss
 * @method string getExpireTime() 获取实例过期时间，格式：yyyy-mm-dd HH:ii:ss
 * @method void setExpireTime(string $ExpireTime) 设置实例过期时间，格式：yyyy-mm-dd HH:ii:ss
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIp() 获取实例公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置实例公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取实例私网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIp(string $PrivateIp) 设置实例私网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取实例类型（版本）
 * @method void setInstanceType(string $InstanceType) 设置实例类型（版本）
 * @method string getPdomain() 获取实例域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPdomain(string $Pdomain) 设置实例域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class CdsAuditInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 用户AppId
     */
    public $AppId;

    /**
     * @var string 用户Uin
     */
    public $Uin;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 续费标识
     */
    public $RenewFlag;

    /**
     * @var string 所属地域
     */
    public $Region;

    /**
     * @var integer 付费模式（数据安全审计只支持预付费：1）
     */
    public $PayMode;

    /**
     * @var integer 实例状态： 0，未生效；1：正常运行； 2：被隔离； 3，已过期
     */
    public $Status;

    /**
     * @var string 实例被隔离时间，格式：yyyy-mm-dd HH:ii:ss
     */
    public $IsolatedTimestamp;

    /**
     * @var string 实例创建时间，格式： yyyy-mm-dd HH:ii:ss
     */
    public $CreateTime;

    /**
     * @var string 实例过期时间，格式：yyyy-mm-dd HH:ii:ss
     */
    public $ExpireTime;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 实例公网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var string 实例私网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIp;

    /**
     * @var string 实例类型（版本）
     */
    public $InstanceType;

    /**
     * @var string 实例域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pdomain;

    /**
     * @param string $InstanceId 实例ID
     * @param string $AppId 用户AppId
     * @param string $Uin 用户Uin
     * @param integer $ProjectId 项目ID
     * @param integer $RenewFlag 续费标识
     * @param string $Region 所属地域
     * @param integer $PayMode 付费模式（数据安全审计只支持预付费：1）
     * @param integer $Status 实例状态： 0，未生效；1：正常运行； 2：被隔离； 3，已过期
     * @param string $IsolatedTimestamp 实例被隔离时间，格式：yyyy-mm-dd HH:ii:ss
     * @param string $CreateTime 实例创建时间，格式： yyyy-mm-dd HH:ii:ss
     * @param string $ExpireTime 实例过期时间，格式：yyyy-mm-dd HH:ii:ss
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIp 实例公网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp 实例私网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 实例类型（版本）
     * @param string $Pdomain 实例域名
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsolatedTimestamp",$param) and $param["IsolatedTimestamp"] !== null) {
            $this->IsolatedTimestamp = $param["IsolatedTimestamp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Pdomain",$param) and $param["Pdomain"] !== null) {
            $this->Pdomain = $param["Pdomain"];
        }
    }
}
