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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail返回参数结构体
 *
 * @method string getTaskId() 获取任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataId() 获取审核时传入的数据Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataId(string $DataId) 设置审核时传入的数据Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizType() 获取业务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizType(string $BizType) 设置业务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态，可选值：
FINISH 已完成
PENDING 等待中
RUNNING 进行中
ERROR 出错
CANCELLED 已取消
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态，可选值：
FINISH 已完成
PENDING 等待中
RUNNING 进行中
ERROR 出错
CANCELLED 已取消
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取审核建议
可选：
Pass 通过
Reveiw 建议复审
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置审核建议
可选：
Pass 通过
Reveiw 建议复审
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取审核结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置审核结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaInfo getMediaInfo() 获取媒体解码信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaInfo(MediaInfo $MediaInfo) 设置媒体解码信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method InputInfo getInputInfo() 获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputInfo(InputInfo $InputInfo) 设置任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImageSegments() 获取视频中截帧审核的结果。
数据有效期为24小时，如需要储存更长时间请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSegments(array $ImageSegments) 设置视频中截帧审核的结果。
数据有效期为24小时，如需要储存更长时间请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudioSegments() 获取视频中音频审核的结果。
数据有效期为24小时，如需要储存更长时间请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioSegments(array $AudioSegments) 设置视频中音频审核的结果。
数据有效期为24小时，如需要储存更长时间请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorType() 获取如果返回的状态为ERROR，该字段会标记错误类型。
可选值：：
DECODE_ERROR: 解码失败。（输入资源中可能包含无法解码的视频）
URL_ERROR：下载地址验证失败。
TIMEOUT_ERROR：处理超时。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorType(string $ErrorType) 设置如果返回的状态为ERROR，该字段会标记错误类型。
可选值：：
DECODE_ERROR: 解码失败。（输入资源中可能包含无法解码的视频）
URL_ERROR：下载地址验证失败。
TIMEOUT_ERROR：处理超时。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorDescription() 获取审核任务错误日志。当Error不为空时，会展示该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDescription(string $ErrorDescription) 设置审核任务错误日志。当Error不为空时，会展示该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string 任务Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 审核时传入的数据Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataId;

    /**
     * @var string 业务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizType;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 状态，可选值：
FINISH 已完成
PENDING 等待中
RUNNING 进行中
ERROR 出错
CANCELLED 已取消
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 审核建议
可选：
Pass 通过
Reveiw 建议复审
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var array 审核结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var MediaInfo 媒体解码信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaInfo;

    /**
     * @var InputInfo 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputInfo;

    /**
     * @var string 创建时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 更新时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var array 视频中截帧审核的结果。
数据有效期为24小时，如需要储存更长时间请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSegments;

    /**
     * @var array 视频中音频审核的结果。
数据有效期为24小时，如需要储存更长时间请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioSegments;

    /**
     * @var string 如果返回的状态为ERROR，该字段会标记错误类型。
可选值：：
DECODE_ERROR: 解码失败。（输入资源中可能包含无法解码的视频）
URL_ERROR：下载地址验证失败。
TIMEOUT_ERROR：处理超时。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorType;

    /**
     * @var string 审核任务错误日志。当Error不为空时，会展示该字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDescription;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 任务Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataId 审核时传入的数据Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizType 业务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态，可选值：
FINISH 已完成
PENDING 等待中
RUNNING 进行中
ERROR 出错
CANCELLED 已取消
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 审核建议
可选：
Pass 通过
Reveiw 建议复审
Block 确认违规
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 审核结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaInfo $MediaInfo 媒体解码信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param InputInfo $InputInfo 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImageSegments 视频中截帧审核的结果。
数据有效期为24小时，如需要储存更长时间请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AudioSegments 视频中音频审核的结果。
数据有效期为24小时，如需要储存更长时间请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorType 如果返回的状态为ERROR，该字段会标记错误类型。
可选值：：
DECODE_ERROR: 解码失败。（输入资源中可能包含无法解码的视频）
URL_ERROR：下载地址验证失败。
TIMEOUT_ERROR：处理超时。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorDescription 审核任务错误日志。当Error不为空时，会展示该字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TaskLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("MediaInfo",$param) and $param["MediaInfo"] !== null) {
            $this->MediaInfo = new MediaInfo();
            $this->MediaInfo->deserialize($param["MediaInfo"]);
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new InputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ImageSegments",$param) and $param["ImageSegments"] !== null) {
            $this->ImageSegments = [];
            foreach ($param["ImageSegments"] as $key => $value){
                $obj = new ImageSegments();
                $obj->deserialize($value);
                array_push($this->ImageSegments, $obj);
            }
        }

        if (array_key_exists("AudioSegments",$param) and $param["AudioSegments"] !== null) {
            $this->AudioSegments = [];
            foreach ($param["AudioSegments"] as $key => $value){
                $obj = new AudioSegments();
                $obj->deserialize($value);
                array_push($this->AudioSegments, $obj);
            }
        }

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("ErrorDescription",$param) and $param["ErrorDescription"] !== null) {
            $this->ErrorDescription = $param["ErrorDescription"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
