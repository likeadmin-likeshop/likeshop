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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器审核详情列表数据项
 *
 * @method array getLabel() 获取标签
 * @method void setLabel(array $Label) 设置标签
 * @method integer getDuration() 获取时长(秒/s)
 * @method void setDuration(integer $Duration) 设置时长(秒/s)
 * @method string getName() 获取任务名
 * @method void setName(string $Name) 设置任务名
 * @method string getTaskID() 获取任务ID，创建任务后返回的TaskId字段
 * @method void setTaskID(string $TaskID) 设置任务ID，创建任务后返回的TaskId字段
 * @method string getInsertTime() 获取插入时间
 * @method void setInsertTime(string $InsertTime) 设置插入时间
 * @method integer getDataForm() 获取数据来源 0机审，其他为自主审核
 * @method void setDataForm(integer $DataForm) 设置数据来源 0机审，其他为自主审核
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 * @method array getOriginalLabel() 获取原始命中标签
 * @method void setOriginalLabel(array $OriginalLabel) 设置原始命中标签
 * @method string getOperateTime() 获取操作时间
 * @method void setOperateTime(string $OperateTime) 设置操作时间
 * @method string getUrl() 获取视频原始地址
 * @method void setUrl(string $Url) 设置视频原始地址
 * @method string getThumbnail() 获取封面图地址
 * @method void setThumbnail(string $Thumbnail) 设置封面图地址
 * @method string getContent() 获取短音频内容
 * @method void setContent(string $Content) 设置短音频内容
 * @method integer getDetailCount() 获取短音频个数
 * @method void setDetailCount(integer $DetailCount) 设置短音频个数
 * @method string getRequestId() 获取音频审核的请求 id
 * @method void setRequestId(string $RequestId) 设置音频审核的请求 id
 * @method string getStatus() 获取音频机审状态
 * @method void setStatus(string $Status) 设置音频机审状态
 */
class AmsDetailInfo extends AbstractModel
{
    /**
     * @var array 标签
     */
    public $Label;

    /**
     * @var integer 时长(秒/s)
     */
    public $Duration;

    /**
     * @var string 任务名
     */
    public $Name;

    /**
     * @var string 任务ID，创建任务后返回的TaskId字段
     */
    public $TaskID;

    /**
     * @var string 插入时间
     */
    public $InsertTime;

    /**
     * @var integer 数据来源 0机审，其他为自主审核
     */
    public $DataForm;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @var array 原始命中标签
     */
    public $OriginalLabel;

    /**
     * @var string 操作时间
     */
    public $OperateTime;

    /**
     * @var string 视频原始地址
     */
    public $Url;

    /**
     * @var string 封面图地址
     */
    public $Thumbnail;

    /**
     * @var string 短音频内容
     */
    public $Content;

    /**
     * @var integer 短音频个数
     */
    public $DetailCount;

    /**
     * @var string 音频审核的请求 id
     */
    public $RequestId;

    /**
     * @var string 音频机审状态
     */
    public $Status;

    /**
     * @param array $Label 标签
     * @param integer $Duration 时长(秒/s)
     * @param string $Name 任务名
     * @param string $TaskID 任务ID，创建任务后返回的TaskId字段
     * @param string $InsertTime 插入时间
     * @param integer $DataForm 数据来源 0机审，其他为自主审核
     * @param string $Operator 操作人
     * @param array $OriginalLabel 原始命中标签
     * @param string $OperateTime 操作时间
     * @param string $Url 视频原始地址
     * @param string $Thumbnail 封面图地址
     * @param string $Content 短音频内容
     * @param integer $DetailCount 短音频个数
     * @param string $RequestId 音频审核的请求 id
     * @param string $Status 音频机审状态
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("DataForm",$param) and $param["DataForm"] !== null) {
            $this->DataForm = $param["DataForm"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("OriginalLabel",$param) and $param["OriginalLabel"] !== null) {
            $this->OriginalLabel = $param["OriginalLabel"];
        }

        if (array_key_exists("OperateTime",$param) and $param["OperateTime"] !== null) {
            $this->OperateTime = $param["OperateTime"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Thumbnail",$param) and $param["Thumbnail"] !== null) {
            $this->Thumbnail = $param["Thumbnail"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("DetailCount",$param) and $param["DetailCount"] !== null) {
            $this->DetailCount = $param["DetailCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
