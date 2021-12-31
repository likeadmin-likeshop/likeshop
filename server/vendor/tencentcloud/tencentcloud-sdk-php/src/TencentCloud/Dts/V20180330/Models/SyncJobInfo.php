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
 * 灾备同步任务信息
 *
 * @method string getJobId() 获取灾备任务id
 * @method void setJobId(string $JobId) 设置灾备任务id
 * @method string getJobName() 获取灾备任务名
 * @method void setJobName(string $JobName) 设置灾备任务名
 * @method SyncOption getSyncOption() 获取任务同步
 * @method void setSyncOption(SyncOption $SyncOption) 设置任务同步
 * @method string getSrcAccessType() 获取源接入类型
 * @method void setSrcAccessType(string $SrcAccessType) 设置源接入类型
 * @method string getSrcDatabaseType() 获取源数据类型
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置源数据类型
 * @method SyncInstanceInfo getSrcInfo() 获取源实例信息
 * @method void setSrcInfo(SyncInstanceInfo $SrcInfo) 设置源实例信息
 * @method string getDstAccessType() 获取灾备接入类型
 * @method void setDstAccessType(string $DstAccessType) 设置灾备接入类型
 * @method string getDstDatabaseType() 获取灾备数据类型
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置灾备数据类型
 * @method SyncInstanceInfo getDstInfo() 获取灾备实例信息
 * @method void setDstInfo(SyncInstanceInfo $DstInfo) 设置灾备实例信息
 * @method SyncDetailInfo getDetail() 获取任务信息
 * @method void setDetail(SyncDetailInfo $Detail) 设置任务信息
 * @method integer getStatus() 获取任务状态
 * @method void setStatus(integer $Status) 设置任务状态
 * @method string getDatabaseInfo() 获取迁移库表
 * @method void setDatabaseInfo(string $DatabaseInfo) 设置迁移库表
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 */
class SyncJobInfo extends AbstractModel
{
    /**
     * @var string 灾备任务id
     */
    public $JobId;

    /**
     * @var string 灾备任务名
     */
    public $JobName;

    /**
     * @var SyncOption 任务同步
     */
    public $SyncOption;

    /**
     * @var string 源接入类型
     */
    public $SrcAccessType;

    /**
     * @var string 源数据类型
     */
    public $SrcDatabaseType;

    /**
     * @var SyncInstanceInfo 源实例信息
     */
    public $SrcInfo;

    /**
     * @var string 灾备接入类型
     */
    public $DstAccessType;

    /**
     * @var string 灾备数据类型
     */
    public $DstDatabaseType;

    /**
     * @var SyncInstanceInfo 灾备实例信息
     */
    public $DstInfo;

    /**
     * @var SyncDetailInfo 任务信息
     */
    public $Detail;

    /**
     * @var integer 任务状态
     */
    public $Status;

    /**
     * @var string 迁移库表
     */
    public $DatabaseInfo;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @param string $JobId 灾备任务id
     * @param string $JobName 灾备任务名
     * @param SyncOption $SyncOption 任务同步
     * @param string $SrcAccessType 源接入类型
     * @param string $SrcDatabaseType 源数据类型
     * @param SyncInstanceInfo $SrcInfo 源实例信息
     * @param string $DstAccessType 灾备接入类型
     * @param string $DstDatabaseType 灾备数据类型
     * @param SyncInstanceInfo $DstInfo 灾备实例信息
     * @param SyncDetailInfo $Detail 任务信息
     * @param integer $Status 任务状态
     * @param string $DatabaseInfo 迁移库表
     * @param string $CreateTime 创建时间
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
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

        if (array_key_exists("SyncOption",$param) and $param["SyncOption"] !== null) {
            $this->SyncOption = new SyncOption();
            $this->SyncOption->deserialize($param["SyncOption"]);
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SyncInstanceInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new SyncInstanceInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new SyncDetailInfo();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
    }
}
