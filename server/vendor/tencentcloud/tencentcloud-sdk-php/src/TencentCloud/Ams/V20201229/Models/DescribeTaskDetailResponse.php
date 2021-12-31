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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail返回参数结构体
 *
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataId() 获取审核时传入的数据Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataId(string $DataId) 设置审核时传入的数据Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizType() 获取业务类型，用户可以在控制台查看自己配置的BizType
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizType(string $BizType) 设置业务类型，用户可以在控制台查看自己配置的BizType
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取查询内容审核任务的状态，可选值：
FINISH 已完成
PENDING 等待中
RUNNING 进行中
ERROR 出错
CANCELLED 已取消
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置查询内容审核任务的状态，可选值：
FINISH 已完成
PENDING 等待中
RUNNING 进行中
ERROR 出错
CANCELLED 已取消
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取任务类型：可选AUDIO（点播音频），LIVE_AUDIO（直播音频）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置任务类型：可选AUDIO（点播音频），LIVE_AUDIO（直播音频）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取智能审核服务对于内容违规类型的等级，可选值：
Pass 建议通过；
Reveiw 建议复审；
Block 建议屏蔽；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置智能审核服务对于内容违规类型的等级，可选值：
Pass 建议通过；
Reveiw 建议复审；
Block 建议屏蔽；
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取智能审核服务对于内容违规类型的判断，详见返回值列表
如：Label：Porn（色情）；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置智能审核服务对于内容违规类型的判断，详见返回值列表
如：Label：Porn（色情）；
注意：此字段可能返回 null，表示取不到有效值。
 * @method InputInfo getInputInfo() 获取输入的媒体信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputInfo(InputInfo $InputInfo) 设置输入的媒体信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAudioText() 获取音频文本，备注：这里的文本最大只返回前1000个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioText(string $AudioText) 设置音频文本，备注：这里的文本最大只返回前1000个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudioSegments() 获取音频片段审核信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioSegments(array $AudioSegments) 设置音频片段审核信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorType() 获取错误类型，如果任务状态为Error，则该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorType(string $ErrorType) 设置错误类型，如果任务状态为Error，则该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorDescription() 获取错误描述，如果任务状态为Error，则该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDescription(string $ErrorDescription) 设置错误描述，如果任务状态为Error，则该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取任务创建时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置任务创建时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取任务最后更新时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置任务最后更新时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 审核时传入的数据Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataId;

    /**
     * @var string 业务类型，用户可以在控制台查看自己配置的BizType
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizType;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 查询内容审核任务的状态，可选值：
FINISH 已完成
PENDING 等待中
RUNNING 进行中
ERROR 出错
CANCELLED 已取消
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 任务类型：可选AUDIO（点播音频），LIVE_AUDIO（直播音频）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 智能审核服务对于内容违规类型的等级，可选值：
Pass 建议通过；
Reveiw 建议复审；
Block 建议屏蔽；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var array 智能审核服务对于内容违规类型的判断，详见返回值列表
如：Label：Porn（色情）；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var InputInfo 输入的媒体信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputInfo;

    /**
     * @var string 音频文本，备注：这里的文本最大只返回前1000个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioText;

    /**
     * @var array 音频片段审核信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioSegments;

    /**
     * @var string 错误类型，如果任务状态为Error，则该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorType;

    /**
     * @var string 错误描述，如果任务状态为Error，则该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDescription;

    /**
     * @var string 任务创建时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 任务最后更新时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataId 审核时传入的数据Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizType 业务类型，用户可以在控制台查看自己配置的BizType
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 查询内容审核任务的状态，可选值：
FINISH 已完成
PENDING 等待中
RUNNING 进行中
ERROR 出错
CANCELLED 已取消
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 任务类型：可选AUDIO（点播音频），LIVE_AUDIO（直播音频）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 智能审核服务对于内容违规类型的等级，可选值：
Pass 建议通过；
Reveiw 建议复审；
Block 建议屏蔽；
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 智能审核服务对于内容违规类型的判断，详见返回值列表
如：Label：Porn（色情）；
注意：此字段可能返回 null，表示取不到有效值。
     * @param InputInfo $InputInfo 输入的媒体信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AudioText 音频文本，备注：这里的文本最大只返回前1000个字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AudioSegments 音频片段审核信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorType 错误类型，如果任务状态为Error，则该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorDescription 错误描述，如果任务状态为Error，则该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 任务创建时间，格式为 ISO 8601
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 任务最后更新时间，格式为 ISO 8601
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

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new InputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("AudioText",$param) and $param["AudioText"] !== null) {
            $this->AudioText = $param["AudioText"];
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

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
