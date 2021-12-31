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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境信息
 *
 * @method string getEnvId() 获取账户下该环境唯一标识
 * @method void setEnvId(string $EnvId) 设置账户下该环境唯一标识
 * @method string getSource() 获取环境来源。包含以下取值：
<li>miniapp：微信小程序</li>
<li>qcloud ：腾讯云</li>
 * @method void setSource(string $Source) 设置环境来源。包含以下取值：
<li>miniapp：微信小程序</li>
<li>qcloud ：腾讯云</li>
 * @method string getAlias() 获取环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
 * @method void setAlias(string $Alias) 设置环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取最后修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置最后修改时间
 * @method string getStatus() 获取环境状态。包含以下取值：
<li>NORMAL：正常可用</li>
<li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
 * @method void setStatus(string $Status) 设置环境状态。包含以下取值：
<li>NORMAL：正常可用</li>
<li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
 * @method array getDatabases() 获取数据库列表
 * @method void setDatabases(array $Databases) 设置数据库列表
 * @method array getStorages() 获取存储列表
 * @method void setStorages(array $Storages) 设置存储列表
 * @method array getFunctions() 获取函数列表
 * @method void setFunctions(array $Functions) 设置函数列表
 * @method string getPackageId() 获取tcb产品套餐ID，参考DescribePackages接口的返回值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(string $PackageId) 设置tcb产品套餐ID，参考DescribePackages接口的返回值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取套餐中文名称，参考DescribePackages接口的返回值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置套餐中文名称，参考DescribePackages接口的返回值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogServices() 获取云日志服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogServices(array $LogServices) 设置云日志服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStaticStorages() 获取静态资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStaticStorages(array $StaticStorages) 设置静态资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAutoDegrade() 获取是否到期自动降为免费版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAutoDegrade(boolean $IsAutoDegrade) 设置是否到期自动降为免费版
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvChannel() 获取环境渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvChannel(string $EnvChannel) 设置环境渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayMode() 获取支付方式。包含以下取值：
<li> prepayment：预付费</li>
<li> postpaid：后付费</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(string $PayMode) 设置支付方式。包含以下取值：
<li> prepayment：预付费</li>
<li> postpaid：后付费</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDefault() 获取是否为默认环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(boolean $IsDefault) 设置是否为默认环境
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取环境所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置环境所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取环境标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置环境标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class EnvInfo extends AbstractModel
{
    /**
     * @var string 账户下该环境唯一标识
     */
    public $EnvId;

    /**
     * @var string 环境来源。包含以下取值：
<li>miniapp：微信小程序</li>
<li>qcloud ：腾讯云</li>
     */
    public $Source;

    /**
     * @var string 环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
     */
    public $Alias;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后修改时间
     */
    public $UpdateTime;

    /**
     * @var string 环境状态。包含以下取值：
<li>NORMAL：正常可用</li>
<li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
     */
    public $Status;

    /**
     * @var array 数据库列表
     */
    public $Databases;

    /**
     * @var array 存储列表
     */
    public $Storages;

    /**
     * @var array 函数列表
     */
    public $Functions;

    /**
     * @var string tcb产品套餐ID，参考DescribePackages接口的返回值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var string 套餐中文名称，参考DescribePackages接口的返回值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var array 云日志服务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogServices;

    /**
     * @var array 静态资源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StaticStorages;

    /**
     * @var boolean 是否到期自动降为免费版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAutoDegrade;

    /**
     * @var string 环境渠道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvChannel;

    /**
     * @var string 支付方式。包含以下取值：
<li> prepayment：预付费</li>
<li> postpaid：后付费</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var boolean 是否为默认环境
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @var string 环境所属地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array 环境标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $EnvId 账户下该环境唯一标识
     * @param string $Source 环境来源。包含以下取值：
<li>miniapp：微信小程序</li>
<li>qcloud ：腾讯云</li>
     * @param string $Alias 环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 最后修改时间
     * @param string $Status 环境状态。包含以下取值：
<li>NORMAL：正常可用</li>
<li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
     * @param array $Databases 数据库列表
     * @param array $Storages 存储列表
     * @param array $Functions 函数列表
     * @param string $PackageId tcb产品套餐ID，参考DescribePackages接口的返回值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName 套餐中文名称，参考DescribePackages接口的返回值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LogServices 云日志服务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StaticStorages 静态资源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAutoDegrade 是否到期自动降为免费版
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvChannel 环境渠道
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayMode 支付方式。包含以下取值：
<li> prepayment：预付费</li>
<li> postpaid：后付费</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDefault 是否为默认环境
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 环境所属地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 环境标签列表
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new DatabasesInfo();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }

        if (array_key_exists("Storages",$param) and $param["Storages"] !== null) {
            $this->Storages = [];
            foreach ($param["Storages"] as $key => $value){
                $obj = new StorageInfo();
                $obj->deserialize($value);
                array_push($this->Storages, $obj);
            }
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = [];
            foreach ($param["Functions"] as $key => $value){
                $obj = new FunctionInfo();
                $obj->deserialize($value);
                array_push($this->Functions, $obj);
            }
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("LogServices",$param) and $param["LogServices"] !== null) {
            $this->LogServices = [];
            foreach ($param["LogServices"] as $key => $value){
                $obj = new LogServiceInfo();
                $obj->deserialize($value);
                array_push($this->LogServices, $obj);
            }
        }

        if (array_key_exists("StaticStorages",$param) and $param["StaticStorages"] !== null) {
            $this->StaticStorages = [];
            foreach ($param["StaticStorages"] as $key => $value){
                $obj = new StaticStorageInfo();
                $obj->deserialize($value);
                array_push($this->StaticStorages, $obj);
            }
        }

        if (array_key_exists("IsAutoDegrade",$param) and $param["IsAutoDegrade"] !== null) {
            $this->IsAutoDegrade = $param["IsAutoDegrade"];
        }

        if (array_key_exists("EnvChannel",$param) and $param["EnvChannel"] !== null) {
            $this->EnvChannel = $param["EnvChannel"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
