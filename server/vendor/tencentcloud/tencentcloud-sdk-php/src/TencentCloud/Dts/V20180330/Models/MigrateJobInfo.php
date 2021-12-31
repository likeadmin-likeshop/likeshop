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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移任务详情
 *
 * @method string getJobId() 获取数据迁移任务ID
 * @method void setJobId(string $JobId) 设置数据迁移任务ID
 * @method string getJobName() 获取数据迁移任务名称
 * @method void setJobName(string $JobName) 设置数据迁移任务名称
 * @method MigrateOption getMigrateOption() 获取迁移任务配置选项
 * @method void setMigrateOption(MigrateOption $MigrateOption) 设置迁移任务配置选项
 * @method string getSrcDatabaseType() 获取源实例数据库类型:mysql，redis，mongodb，postgresql，mariadb，percona
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置源实例数据库类型:mysql，redis，mongodb，postgresql，mariadb，percona
 * @method string getSrcAccessType() 获取源实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),cdb(腾讯云数据库实例),ccn(云联网实例)
 * @method void setSrcAccessType(string $SrcAccessType) 设置源实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),cdb(腾讯云数据库实例),ccn(云联网实例)
 * @method SrcInfo getSrcInfo() 获取源实例信息，具体内容跟迁移任务类型相关
 * @method void setSrcInfo(SrcInfo $SrcInfo) 设置源实例信息，具体内容跟迁移任务类型相关
 * @method string getDstDatabaseType() 获取目标实例数据库类型:mysql，redis，mongodb，postgresql，mariadb，percona
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置目标实例数据库类型:mysql，redis，mongodb，postgresql，mariadb，percona
 * @method string getDstAccessType() 获取目标实例接入类型，目前支持：cdb(腾讯云数据库实例)
 * @method void setDstAccessType(string $DstAccessType) 设置目标实例接入类型，目前支持：cdb(腾讯云数据库实例)
 * @method DstInfo getDstInfo() 获取目标实例信息
 * @method void setDstInfo(DstInfo $DstInfo) 设置目标实例信息
 * @method string getDatabaseInfo() 获取需要迁移的源数据库表信息，如果需要迁移的是整个实例，该字段为[]
 * @method void setDatabaseInfo(string $DatabaseInfo) 设置需要迁移的源数据库表信息，如果需要迁移的是整个实例，该字段为[]
 * @method string getCreateTime() 获取任务创建(提交)时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建(提交)时间
 * @method string getStartTime() 获取任务开始执行时间
 * @method void setStartTime(string $StartTime) 设置任务开始执行时间
 * @method string getEndTime() 获取任务执行结束时间
 * @method void setEndTime(string $EndTime) 设置任务执行结束时间
 * @method integer getStatus() 获取任务状态,取值为：1-创建中(Creating),3-校验中(Checking)4-校验通过(CheckPass),5-校验不通过（CheckNotPass）,7-任务运行(Running),8-准备完成（ReadyComplete）,9-任务成功（Success）,10-任务失败（Failed）,11-撤销中（Stopping）,12-完成中（Completing）
 * @method void setStatus(integer $Status) 设置任务状态,取值为：1-创建中(Creating),3-校验中(Checking)4-校验通过(CheckPass),5-校验不通过（CheckNotPass）,7-任务运行(Running),8-准备完成（ReadyComplete）,9-任务成功（Success）,10-任务失败（Failed）,11-撤销中（Stopping）,12-完成中（Completing）
 * @method MigrateDetailInfo getDetail() 获取任务详情
 * @method void setDetail(MigrateDetailInfo $Detail) 设置任务详情
 * @method array getErrorInfo() 获取任务错误信息提示，当任务发生错误时，不为null或者空值
 * @method void setErrorInfo(array $ErrorInfo) 设置任务错误信息提示，当任务发生错误时，不为null或者空值
 */
class MigrateJobInfo extends AbstractModel
{
    /**
     * @var string 数据迁移任务ID
     */
    public $JobId;

    /**
     * @var string 数据迁移任务名称
     */
    public $JobName;

    /**
     * @var MigrateOption 迁移任务配置选项
     */
    public $MigrateOption;

    /**
     * @var string 源实例数据库类型:mysql，redis，mongodb，postgresql，mariadb，percona
     */
    public $SrcDatabaseType;

    /**
     * @var string 源实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),cdb(腾讯云数据库实例),ccn(云联网实例)
     */
    public $SrcAccessType;

    /**
     * @var SrcInfo 源实例信息，具体内容跟迁移任务类型相关
     */
    public $SrcInfo;

    /**
     * @var string 目标实例数据库类型:mysql，redis，mongodb，postgresql，mariadb，percona
     */
    public $DstDatabaseType;

    /**
     * @var string 目标实例接入类型，目前支持：cdb(腾讯云数据库实例)
     */
    public $DstAccessType;

    /**
     * @var DstInfo 目标实例信息
     */
    public $DstInfo;

    /**
     * @var string 需要迁移的源数据库表信息，如果需要迁移的是整个实例，该字段为[]
     */
    public $DatabaseInfo;

    /**
     * @var string 任务创建(提交)时间
     */
    public $CreateTime;

    /**
     * @var string 任务开始执行时间
     */
    public $StartTime;

    /**
     * @var string 任务执行结束时间
     */
    public $EndTime;

    /**
     * @var integer 任务状态,取值为：1-创建中(Creating),3-校验中(Checking)4-校验通过(CheckPass),5-校验不通过（CheckNotPass）,7-任务运行(Running),8-准备完成（ReadyComplete）,9-任务成功（Success）,10-任务失败（Failed）,11-撤销中（Stopping）,12-完成中（Completing）
     */
    public $Status;

    /**
     * @var MigrateDetailInfo 任务详情
     */
    public $Detail;

    /**
     * @var array 任务错误信息提示，当任务发生错误时，不为null或者空值
     */
    public $ErrorInfo;

    /**
     * @param string $JobId 数据迁移任务ID
     * @param string $JobName 数据迁移任务名称
     * @param MigrateOption $MigrateOption 迁移任务配置选项
     * @param string $SrcDatabaseType 源实例数据库类型:mysql，redis，mongodb，postgresql，mariadb，percona
     * @param string $SrcAccessType 源实例接入类型，值包括：extranet(外网),cvm(cvm自建实例),dcg(专线接入的实例),vpncloud(云vpn接入的实例),cdb(腾讯云数据库实例),ccn(云联网实例)
     * @param SrcInfo $SrcInfo 源实例信息，具体内容跟迁移任务类型相关
     * @param string $DstDatabaseType 目标实例数据库类型:mysql，redis，mongodb，postgresql，mariadb，percona
     * @param string $DstAccessType 目标实例接入类型，目前支持：cdb(腾讯云数据库实例)
     * @param DstInfo $DstInfo 目标实例信息
     * @param string $DatabaseInfo 需要迁移的源数据库表信息，如果需要迁移的是整个实例，该字段为[]
     * @param string $CreateTime 任务创建(提交)时间
     * @param string $StartTime 任务开始执行时间
     * @param string $EndTime 任务执行结束时间
     * @param integer $Status 任务状态,取值为：1-创建中(Creating),3-校验中(Checking)4-校验通过(CheckPass),5-校验不通过（CheckNotPass）,7-任务运行(Running),8-准备完成（ReadyComplete）,9-任务成功（Success）,10-任务失败（Failed）,11-撤销中（Stopping）,12-完成中（Completing）
     * @param MigrateDetailInfo $Detail 任务详情
     * @param array $ErrorInfo 任务错误信息提示，当任务发生错误时，不为null或者空值
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("MigrateOption",$param) and $param["MigrateOption"] !== null) {
            $this->MigrateOption = new MigrateOption();
            $this->MigrateOption->deserialize($param["MigrateOption"]);
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SrcInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DstInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            $this->DatabaseInfo = $param["DatabaseInfo"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new MigrateDetailInfo();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = [];
            foreach ($param["ErrorInfo"] as $key => $value){
                $obj = new ErrorInfo();
                $obj->deserialize($value);
                array_push($this->ErrorInfo, $obj);
            }
        }
    }
}
