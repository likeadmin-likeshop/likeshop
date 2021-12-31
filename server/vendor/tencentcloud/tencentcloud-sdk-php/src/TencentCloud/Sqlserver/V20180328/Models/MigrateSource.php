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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移任务的源类型
 *
 * @method string getInstanceId() 获取迁移源实例的ID，MigrateType=1(TencentDB for SQLServers)时使用，格式如：mssql-si2823jyl
 * @method void setInstanceId(string $InstanceId) 设置迁移源实例的ID，MigrateType=1(TencentDB for SQLServers)时使用，格式如：mssql-si2823jyl
 * @method string getCvmId() 获取迁移源Cvm的ID，MigrateType=2(云服务器自建SQLServer数据库)时使用
 * @method void setCvmId(string $CvmId) 设置迁移源Cvm的ID，MigrateType=2(云服务器自建SQLServer数据库)时使用
 * @method string getVpcId() 获取迁移源Cvm的Vpc网络标识，MigrateType=2(云服务器自建SQLServer数据库)时使用，格式如：vpc-6ys9ont9
 * @method void setVpcId(string $VpcId) 设置迁移源Cvm的Vpc网络标识，MigrateType=2(云服务器自建SQLServer数据库)时使用，格式如：vpc-6ys9ont9
 * @method string getSubnetId() 获取迁移源Cvm的Vpc下的子网标识，MigrateType=2(云服务器自建SQLServer数据库)时使用，格式如：subnet-h9extioi
 * @method void setSubnetId(string $SubnetId) 设置迁移源Cvm的Vpc下的子网标识，MigrateType=2(云服务器自建SQLServer数据库)时使用，格式如：subnet-h9extioi
 * @method string getUserName() 获取用户名，MigrateType=1或MigrateType=2使用
 * @method void setUserName(string $UserName) 设置用户名，MigrateType=1或MigrateType=2使用
 * @method string getPassword() 获取密码，MigrateType=1或MigrateType=2使用
 * @method void setPassword(string $Password) 设置密码，MigrateType=1或MigrateType=2使用
 * @method string getIp() 获取迁移源Cvm自建库的内网IP，MigrateType=2(云服务器自建SQLServer数据库)时使用
 * @method void setIp(string $Ip) 设置迁移源Cvm自建库的内网IP，MigrateType=2(云服务器自建SQLServer数据库)时使用
 * @method integer getPort() 获取迁移源Cvm自建库的端口号，MigrateType=2(云服务器自建SQLServer数据库)时使用
 * @method void setPort(integer $Port) 设置迁移源Cvm自建库的端口号，MigrateType=2(云服务器自建SQLServer数据库)时使用
 * @method array getUrl() 获取离线迁移的源备份地址，MigrateType=4或MigrateType=5使用
 * @method void setUrl(array $Url) 设置离线迁移的源备份地址，MigrateType=4或MigrateType=5使用
 * @method string getUrlPassword() 获取离线迁移的源备份密码，MigrateType=4或MigrateType=5使用
 * @method void setUrlPassword(string $UrlPassword) 设置离线迁移的源备份密码，MigrateType=4或MigrateType=5使用
 */
class MigrateSource extends AbstractModel
{
    /**
     * @var string 迁移源实例的ID，MigrateType=1(TencentDB for SQLServers)时使用，格式如：mssql-si2823jyl
     */
    public $InstanceId;

    /**
     * @var string 迁移源Cvm的ID，MigrateType=2(云服务器自建SQLServer数据库)时使用
     */
    public $CvmId;

    /**
     * @var string 迁移源Cvm的Vpc网络标识，MigrateType=2(云服务器自建SQLServer数据库)时使用，格式如：vpc-6ys9ont9
     */
    public $VpcId;

    /**
     * @var string 迁移源Cvm的Vpc下的子网标识，MigrateType=2(云服务器自建SQLServer数据库)时使用，格式如：subnet-h9extioi
     */
    public $SubnetId;

    /**
     * @var string 用户名，MigrateType=1或MigrateType=2使用
     */
    public $UserName;

    /**
     * @var string 密码，MigrateType=1或MigrateType=2使用
     */
    public $Password;

    /**
     * @var string 迁移源Cvm自建库的内网IP，MigrateType=2(云服务器自建SQLServer数据库)时使用
     */
    public $Ip;

    /**
     * @var integer 迁移源Cvm自建库的端口号，MigrateType=2(云服务器自建SQLServer数据库)时使用
     */
    public $Port;

    /**
     * @var array 离线迁移的源备份地址，MigrateType=4或MigrateType=5使用
     */
    public $Url;

    /**
     * @var string 离线迁移的源备份密码，MigrateType=4或MigrateType=5使用
     */
    public $UrlPassword;

    /**
     * @param string $InstanceId 迁移源实例的ID，MigrateType=1(TencentDB for SQLServers)时使用，格式如：mssql-si2823jyl
     * @param string $CvmId 迁移源Cvm的ID，MigrateType=2(云服务器自建SQLServer数据库)时使用
     * @param string $VpcId 迁移源Cvm的Vpc网络标识，MigrateType=2(云服务器自建SQLServer数据库)时使用，格式如：vpc-6ys9ont9
     * @param string $SubnetId 迁移源Cvm的Vpc下的子网标识，MigrateType=2(云服务器自建SQLServer数据库)时使用，格式如：subnet-h9extioi
     * @param string $UserName 用户名，MigrateType=1或MigrateType=2使用
     * @param string $Password 密码，MigrateType=1或MigrateType=2使用
     * @param string $Ip 迁移源Cvm自建库的内网IP，MigrateType=2(云服务器自建SQLServer数据库)时使用
     * @param integer $Port 迁移源Cvm自建库的端口号，MigrateType=2(云服务器自建SQLServer数据库)时使用
     * @param array $Url 离线迁移的源备份地址，MigrateType=4或MigrateType=5使用
     * @param string $UrlPassword 离线迁移的源备份密码，MigrateType=4或MigrateType=5使用
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

        if (array_key_exists("CvmId",$param) and $param["CvmId"] !== null) {
            $this->CvmId = $param["CvmId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UrlPassword",$param) and $param["UrlPassword"] !== null) {
            $this->UrlPassword = $param["UrlPassword"];
        }
    }
}
