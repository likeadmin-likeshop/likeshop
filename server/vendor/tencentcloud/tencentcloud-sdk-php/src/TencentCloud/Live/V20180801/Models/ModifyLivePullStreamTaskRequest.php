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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLivePullStreamTask请求参数结构体
 *
 * @method string getTaskId() 获取任务Id。
 * @method void setTaskId(string $TaskId) 设置任务Id。
 * @method string getOperator() 获取操作人姓名。
 * @method void setOperator(string $Operator) 设置操作人姓名。
 * @method array getSourceUrls() 获取拉流源url列表。
SourceType为直播（PullLivePushLive）只可以填1个，
SourceType为点播（PullVodPushLive）可以填多个，上限30个。
 * @method void setSourceUrls(array $SourceUrls) 设置拉流源url列表。
SourceType为直播（PullLivePushLive）只可以填1个，
SourceType为点播（PullVodPushLive）可以填多个，上限30个。
 * @method string getStartTime() 获取开始时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setStartTime(string $StartTime) 设置开始时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getEndTime() 获取结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setEndTime(string $EndTime) 设置结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method integer getVodLoopTimes() 获取点播拉流转推循环次数。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：拉流源为点播，该配置生效。
 * @method void setVodLoopTimes(integer $VodLoopTimes) 设置点播拉流转推循环次数。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：拉流源为点播，该配置生效。
 * @method string getVodRefreshType() 获取点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即从更新的拉流源开始播放；
ContinueBreakPoint：从上次断流url源的断点处继续，结束后再使用新的拉流源。
注意：拉流源为点播，该配置生效。
 * @method void setVodRefreshType(string $VodRefreshType) 设置点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即从更新的拉流源开始播放；
ContinueBreakPoint：从上次断流url源的断点处继续，结束后再使用新的拉流源。
注意：拉流源为点播，该配置生效。
 * @method string getStatus() 获取任务状态：
enable - 启用，
pause - 暂停。
 * @method void setStatus(string $Status) 设置任务状态：
enable - 启用，
pause - 暂停。
 * @method array getCallbackEvents() 获取选择需要回调的事件（不填则回调全部）：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。
 * @method void setCallbackEvents(array $CallbackEvents) 设置选择需要回调的事件（不填则回调全部）：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。
 * @method string getCallbackUrl() 获取自定义回调地址。
相关事件会回调到该地址。
 * @method void setCallbackUrl(string $CallbackUrl) 设置自定义回调地址。
相关事件会回调到该地址。
 * @method integer getFileIndex() 获取指定播放文件索引。
注意：
1. 从1开始，不大于SourceUrls中文件个数。
2. 只有VodRefreshType为ContinueBeginPoint时指定才有效。
3. 只有当前任务处于暂停时，指定后启动任务才会生效。
 * @method void setFileIndex(integer $FileIndex) 设置指定播放文件索引。
注意：
1. 从1开始，不大于SourceUrls中文件个数。
2. 只有VodRefreshType为ContinueBeginPoint时指定才有效。
3. 只有当前任务处于暂停时，指定后启动任务才会生效。
 * @method integer getOffsetTime() 获取指定播放文件偏移。
注意：
1. 单位：秒，配合FileIndex使用。
2. 只有VodRefreshType为ContinueBeginPoint时指定才有效。
3. 只有当前任务处于暂停时，指定后启动任务才会生效。
 * @method void setOffsetTime(integer $OffsetTime) 设置指定播放文件偏移。
注意：
1. 单位：秒，配合FileIndex使用。
2. 只有VodRefreshType为ContinueBeginPoint时指定才有效。
3. 只有当前任务处于暂停时，指定后启动任务才会生效。
 * @method string getComment() 获取任务备注。
 * @method void setComment(string $Comment) 设置任务备注。
 */
class ModifyLivePullStreamTaskRequest extends AbstractModel
{
    /**
     * @var string 任务Id。
     */
    public $TaskId;

    /**
     * @var string 操作人姓名。
     */
    public $Operator;

    /**
     * @var array 拉流源url列表。
SourceType为直播（PullLivePushLive）只可以填1个，
SourceType为点播（PullVodPushLive）可以填多个，上限30个。
     */
    public $SourceUrls;

    /**
     * @var string 开始时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $StartTime;

    /**
     * @var string 结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $EndTime;

    /**
     * @var integer 点播拉流转推循环次数。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：拉流源为点播，该配置生效。
     */
    public $VodLoopTimes;

    /**
     * @var string 点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即从更新的拉流源开始播放；
ContinueBreakPoint：从上次断流url源的断点处继续，结束后再使用新的拉流源。
注意：拉流源为点播，该配置生效。
     */
    public $VodRefreshType;

    /**
     * @var string 任务状态：
enable - 启用，
pause - 暂停。
     */
    public $Status;

    /**
     * @var array 选择需要回调的事件（不填则回调全部）：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。
     */
    public $CallbackEvents;

    /**
     * @var string 自定义回调地址。
相关事件会回调到该地址。
     */
    public $CallbackUrl;

    /**
     * @var integer 指定播放文件索引。
注意：
1. 从1开始，不大于SourceUrls中文件个数。
2. 只有VodRefreshType为ContinueBeginPoint时指定才有效。
3. 只有当前任务处于暂停时，指定后启动任务才会生效。
     */
    public $FileIndex;

    /**
     * @var integer 指定播放文件偏移。
注意：
1. 单位：秒，配合FileIndex使用。
2. 只有VodRefreshType为ContinueBeginPoint时指定才有效。
3. 只有当前任务处于暂停时，指定后启动任务才会生效。
     */
    public $OffsetTime;

    /**
     * @var string 任务备注。
     */
    public $Comment;

    /**
     * @param string $TaskId 任务Id。
     * @param string $Operator 操作人姓名。
     * @param array $SourceUrls 拉流源url列表。
SourceType为直播（PullLivePushLive）只可以填1个，
SourceType为点播（PullVodPushLive）可以填多个，上限30个。
     * @param string $StartTime 开始时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $EndTime 结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param integer $VodLoopTimes 点播拉流转推循环次数。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：拉流源为点播，该配置生效。
     * @param string $VodRefreshType 点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即从更新的拉流源开始播放；
ContinueBreakPoint：从上次断流url源的断点处继续，结束后再使用新的拉流源。
注意：拉流源为点播，该配置生效。
     * @param string $Status 任务状态：
enable - 启用，
pause - 暂停。
     * @param array $CallbackEvents 选择需要回调的事件（不填则回调全部）：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。
     * @param string $CallbackUrl 自定义回调地址。
相关事件会回调到该地址。
     * @param integer $FileIndex 指定播放文件索引。
注意：
1. 从1开始，不大于SourceUrls中文件个数。
2. 只有VodRefreshType为ContinueBeginPoint时指定才有效。
3. 只有当前任务处于暂停时，指定后启动任务才会生效。
     * @param integer $OffsetTime 指定播放文件偏移。
注意：
1. 单位：秒，配合FileIndex使用。
2. 只有VodRefreshType为ContinueBeginPoint时指定才有效。
3. 只有当前任务处于暂停时，指定后启动任务才会生效。
     * @param string $Comment 任务备注。
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("SourceUrls",$param) and $param["SourceUrls"] !== null) {
            $this->SourceUrls = $param["SourceUrls"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("VodLoopTimes",$param) and $param["VodLoopTimes"] !== null) {
            $this->VodLoopTimes = $param["VodLoopTimes"];
        }

        if (array_key_exists("VodRefreshType",$param) and $param["VodRefreshType"] !== null) {
            $this->VodRefreshType = $param["VodRefreshType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CallbackEvents",$param) and $param["CallbackEvents"] !== null) {
            $this->CallbackEvents = $param["CallbackEvents"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("FileIndex",$param) and $param["FileIndex"] !== null) {
            $this->FileIndex = $param["FileIndex"];
        }

        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
