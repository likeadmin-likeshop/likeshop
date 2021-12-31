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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterMigrationTask请求参数结构体
 *
 * @method string getTaskType() 获取任务类型，取值database（数据库迁移）、file（文件迁移）、host（主机迁移）
 * @method void setTaskType(string $TaskType) 设置任务类型，取值database（数据库迁移）、file（文件迁移）、host（主机迁移）
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getServiceSupplier() 获取服务提供商名称
 * @method void setServiceSupplier(string $ServiceSupplier) 设置服务提供商名称
 * @method string getCreateTime() 获取迁移任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置迁移任务创建时间
 * @method string getUpdateTime() 获取迁移任务更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置迁移任务更新时间
 * @method string getMigrateClass() 获取迁移类别，如数据库迁移中mysql:mysql代表从mysql迁移到mysql，文件迁移中oss:cos代表从阿里云oss迁移到腾讯云cos
 * @method void setMigrateClass(string $MigrateClass) 设置迁移类别，如数据库迁移中mysql:mysql代表从mysql迁移到mysql，文件迁移中oss:cos代表从阿里云oss迁移到腾讯云cos
 * @method SrcInfo getSrcInfo() 获取迁移任务源信息
 * @method void setSrcInfo(SrcInfo $SrcInfo) 设置迁移任务源信息
 * @method DstInfo getDstInfo() 获取迁移任务目的信息
 * @method void setDstInfo(DstInfo $DstInfo) 设置迁移任务目的信息
 * @method string getSrcAccessType() 获取源实例接入类型，数据库迁移时填写值为：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
 * @method void setSrcAccessType(string $SrcAccessType) 设置源实例接入类型，数据库迁移时填写值为：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
 * @method string getSrcDatabaseType() 获取源实例数据库类型，数据库迁移时填写，取值为mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb 之一
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置源实例数据库类型，数据库迁移时填写，取值为mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb 之一
 * @method string getDstAccessType() 获取目标实例接入类型，数据库迁移时填写值为：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
 * @method void setDstAccessType(string $DstAccessType) 设置目标实例接入类型，数据库迁移时填写值为：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
 * @method string getDstDatabaseType() 获取目标实例数据库类型,数据库迁移时填写，取值为mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb 之一
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置目标实例数据库类型,数据库迁移时填写，取值为mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb 之一
 */
class RegisterMigrationTaskRequest extends AbstractModel
{
    /**
     * @var string 任务类型，取值database（数据库迁移）、file（文件迁移）、host（主机迁移）
     */
    public $TaskType;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 服务提供商名称
     */
    public $ServiceSupplier;

    /**
     * @var string 迁移任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 迁移任务更新时间
     */
    public $UpdateTime;

    /**
     * @var string 迁移类别，如数据库迁移中mysql:mysql代表从mysql迁移到mysql，文件迁移中oss:cos代表从阿里云oss迁移到腾讯云cos
     */
    public $MigrateClass;

    /**
     * @var SrcInfo 迁移任务源信息
     */
    public $SrcInfo;

    /**
     * @var DstInfo 迁移任务目的信息
     */
    public $DstInfo;

    /**
     * @var string 源实例接入类型，数据库迁移时填写值为：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
     */
    public $SrcAccessType;

    /**
     * @var string 源实例数据库类型，数据库迁移时填写，取值为mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb 之一
     */
    public $SrcDatabaseType;

    /**
     * @var string 目标实例接入类型，数据库迁移时填写值为：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
     */
    public $DstAccessType;

    /**
     * @var string 目标实例数据库类型,数据库迁移时填写，取值为mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb 之一
     */
    public $DstDatabaseType;

    /**
     * @param string $TaskType 任务类型，取值database（数据库迁移）、file（文件迁移）、host（主机迁移）
     * @param string $TaskName 任务名称
     * @param string $ServiceSupplier 服务提供商名称
     * @param string $CreateTime 迁移任务创建时间
     * @param string $UpdateTime 迁移任务更新时间
     * @param string $MigrateClass 迁移类别，如数据库迁移中mysql:mysql代表从mysql迁移到mysql，文件迁移中oss:cos代表从阿里云oss迁移到腾讯云cos
     * @param SrcInfo $SrcInfo 迁移任务源信息
     * @param DstInfo $DstInfo 迁移任务目的信息
     * @param string $SrcAccessType 源实例接入类型，数据库迁移时填写值为：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
     * @param string $SrcDatabaseType 源实例数据库类型，数据库迁移时填写，取值为mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb 之一
     * @param string $DstAccessType 目标实例接入类型，数据库迁移时填写值为：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),vpnselfbuild(自建vpn接入的实例)，cdb(云上cdb实例)
     * @param string $DstDatabaseType 目标实例数据库类型,数据库迁移时填写，取值为mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb 之一
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ServiceSupplier",$param) and $param["ServiceSupplier"] !== null) {
            $this->ServiceSupplier = $param["ServiceSupplier"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MigrateClass",$param) and $param["MigrateClass"] !== null) {
            $this->MigrateClass = $param["MigrateClass"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SrcInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DstInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }
    }
}
