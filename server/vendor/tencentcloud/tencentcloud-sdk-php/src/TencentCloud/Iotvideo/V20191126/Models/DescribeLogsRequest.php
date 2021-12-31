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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogs请求参数结构体
 *
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method integer getLimit() 获取当前分页的最大条数,0<取值范围<=100
 * @method void setLimit(integer $Limit) 设置当前分页的最大条数,0<取值范围<=100
 * @method integer getOffset() 获取分页偏移量,取值范围>0
 * @method void setOffset(integer $Offset) 设置分页偏移量,取值范围>0
 * @method integer getLogType() 获取日志类型 1.在线状态变更 2.ProConst变更 3.ProWritable变更 4.Action控制 5.ProReadonly变更 6.Event事件
 * @method void setLogType(integer $LogType) 设置日志类型 1.在线状态变更 2.ProConst变更 3.ProWritable变更 4.Action控制 5.ProReadonly变更 6.Event事件
 * @method integer getStartTime() 获取查询的起始时间 UNIX时间戳，单位秒
 * @method void setStartTime(integer $StartTime) 设置查询的起始时间 UNIX时间戳，单位秒
 * @method string getDataObject() 获取物模型对象索引，用于模糊查询，字符长度<=255，每层节点的字符长度<=16
 * @method void setDataObject(string $DataObject) 设置物模型对象索引，用于模糊查询，字符长度<=255，每层节点的字符长度<=16
 * @method integer getEndTime() 获取查询的结束时间 UNIX时间戳，单位秒
 * @method void setEndTime(integer $EndTime) 设置查询的结束时间 UNIX时间戳，单位秒
 */
class DescribeLogsRequest extends AbstractModel
{
    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var integer 当前分页的最大条数,0<取值范围<=100
     */
    public $Limit;

    /**
     * @var integer 分页偏移量,取值范围>0
     */
    public $Offset;

    /**
     * @var integer 日志类型 1.在线状态变更 2.ProConst变更 3.ProWritable变更 4.Action控制 5.ProReadonly变更 6.Event事件
     */
    public $LogType;

    /**
     * @var integer 查询的起始时间 UNIX时间戳，单位秒
     */
    public $StartTime;

    /**
     * @var string 物模型对象索引，用于模糊查询，字符长度<=255，每层节点的字符长度<=16
     */
    public $DataObject;

    /**
     * @var integer 查询的结束时间 UNIX时间戳，单位秒
     */
    public $EndTime;

    /**
     * @param string $Tid 设备TID
     * @param integer $Limit 当前分页的最大条数,0<取值范围<=100
     * @param integer $Offset 分页偏移量,取值范围>0
     * @param integer $LogType 日志类型 1.在线状态变更 2.ProConst变更 3.ProWritable变更 4.Action控制 5.ProReadonly变更 6.Event事件
     * @param integer $StartTime 查询的起始时间 UNIX时间戳，单位秒
     * @param string $DataObject 物模型对象索引，用于模糊查询，字符长度<=255，每层节点的字符长度<=16
     * @param integer $EndTime 查询的结束时间 UNIX时间戳，单位秒
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
        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DataObject",$param) and $param["DataObject"] !== null) {
            $this->DataObject = $param["DataObject"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
