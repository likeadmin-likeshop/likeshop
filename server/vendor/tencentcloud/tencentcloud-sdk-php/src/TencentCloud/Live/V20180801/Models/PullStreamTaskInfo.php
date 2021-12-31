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
 * 直播拉流任务信息。
 *
 * @method string getTaskId() 获取拉流任务Id。
 * @method void setTaskId(string $TaskId) 设置拉流任务Id。
 * @method string getSourceType() 获取拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
 * @method void setSourceType(string $SourceType) 设置拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
 * @method array getSourceUrls() 获取拉流源url列表。
SourceType为直播（PullLiveToLive）只可以填1个，
SourceType为点播（PullVodToLive）可以填多个，上限10个。
 * @method void setSourceUrls(array $SourceUrls) 设置拉流源url列表。
SourceType为直播（PullLiveToLive）只可以填1个，
SourceType为点播（PullVodToLive）可以填多个，上限10个。
 * @method string getDomainName() 获取推流域名。
将拉到的源推到该域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
将拉到的源推到该域名。
 * @method string getAppName() 获取推流路径。
将拉到的源推到该路径。
 * @method void setAppName(string $AppName) 设置推流路径。
将拉到的源推到该路径。
 * @method string getStreamName() 获取流名称。
将拉到的源推到该流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
将拉到的源推到该流名称。
 * @method string getPushArgs() 获取推流参数。
推流携带的自定义参数。
 * @method void setPushArgs(string $PushArgs) 设置推流参数。
推流携带的自定义参数。
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
 * @method string getRegion() 获取拉流源所在地域（请就近选取）：
ap-beijing - 华北地区(北京)，
ap-shanghai -华东地区(上海)，
ap-guangzhou -华南地区(广州)，
ap-mumbai - 印度。
 * @method void setRegion(string $Region) 设置拉流源所在地域（请就近选取）：
ap-beijing - 华北地区(北京)，
ap-shanghai -华东地区(上海)，
ap-guangzhou -华南地区(广州)，
ap-mumbai - 印度。
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
 * @method string getCreateTime() 获取任务创建时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取任务更新时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getCreateBy() 获取创建任务的操作者。
 * @method void setCreateBy(string $CreateBy) 设置创建任务的操作者。
 * @method string getUpdateBy() 获取最后更新任务的操作者。
 * @method void setUpdateBy(string $UpdateBy) 设置最后更新任务的操作者。
 * @method string getCallbackUrl() 获取回调地址。
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调地址。
 * @method array getCallbackEvents() 获取选择需要回调的事件：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。
 * @method void setCallbackEvents(array $CallbackEvents) 设置选择需要回调的事件：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。
 * @method string getCallbackInfo() 获取注意：该信息暂不返回。
最后一次回调信息。
 * @method void setCallbackInfo(string $CallbackInfo) 设置注意：该信息暂不返回。
最后一次回调信息。
 * @method string getErrorInfo() 获取注意：该信息暂不返回。
错误信息。
 * @method void setErrorInfo(string $ErrorInfo) 设置注意：该信息暂不返回。
错误信息。
 * @method string getStatus() 获取状态。
enable：生效中。
pause：暂停中。
 * @method void setStatus(string $Status) 设置状态。
enable：生效中。
pause：暂停中。
 * @method RecentPullInfo getRecentPullInfo() 获取注意：该信息仅在查询单个任务时返回。
任务最新拉流信息。
包含：源 url，偏移时间，上报时间。
 * @method void setRecentPullInfo(RecentPullInfo $RecentPullInfo) 设置注意：该信息仅在查询单个任务时返回。
任务最新拉流信息。
包含：源 url，偏移时间，上报时间。
 * @method string getComment() 获取任务备注信息。
 * @method void setComment(string $Comment) 设置任务备注信息。
 */
class PullStreamTaskInfo extends AbstractModel
{
    /**
     * @var string 拉流任务Id。
     */
    public $TaskId;

    /**
     * @var string 拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
     */
    public $SourceType;

    /**
     * @var array 拉流源url列表。
SourceType为直播（PullLiveToLive）只可以填1个，
SourceType为点播（PullVodToLive）可以填多个，上限10个。
     */
    public $SourceUrls;

    /**
     * @var string 推流域名。
将拉到的源推到该域名。
     */
    public $DomainName;

    /**
     * @var string 推流路径。
将拉到的源推到该路径。
     */
    public $AppName;

    /**
     * @var string 流名称。
将拉到的源推到该流名称。
     */
    public $StreamName;

    /**
     * @var string 推流参数。
推流携带的自定义参数。
     */
    public $PushArgs;

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
     * @var string 拉流源所在地域（请就近选取）：
ap-beijing - 华北地区(北京)，
ap-shanghai -华东地区(上海)，
ap-guangzhou -华南地区(广州)，
ap-mumbai - 印度。
     */
    public $Region;

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
     * @var string 任务创建时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 任务更新时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @var string 创建任务的操作者。
     */
    public $CreateBy;

    /**
     * @var string 最后更新任务的操作者。
     */
    public $UpdateBy;

    /**
     * @var string 回调地址。
     */
    public $CallbackUrl;

    /**
     * @var array 选择需要回调的事件：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。
     */
    public $CallbackEvents;

    /**
     * @var string 注意：该信息暂不返回。
最后一次回调信息。
     */
    public $CallbackInfo;

    /**
     * @var string 注意：该信息暂不返回。
错误信息。
     */
    public $ErrorInfo;

    /**
     * @var string 状态。
enable：生效中。
pause：暂停中。
     */
    public $Status;

    /**
     * @var RecentPullInfo 注意：该信息仅在查询单个任务时返回。
任务最新拉流信息。
包含：源 url，偏移时间，上报时间。
     */
    public $RecentPullInfo;

    /**
     * @var string 任务备注信息。
     */
    public $Comment;

    /**
     * @param string $TaskId 拉流任务Id。
     * @param string $SourceType 拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
     * @param array $SourceUrls 拉流源url列表。
SourceType为直播（PullLiveToLive）只可以填1个，
SourceType为点播（PullVodToLive）可以填多个，上限10个。
     * @param string $DomainName 推流域名。
将拉到的源推到该域名。
     * @param string $AppName 推流路径。
将拉到的源推到该路径。
     * @param string $StreamName 流名称。
将拉到的源推到该流名称。
     * @param string $PushArgs 推流参数。
推流携带的自定义参数。
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
     * @param string $Region 拉流源所在地域（请就近选取）：
ap-beijing - 华北地区(北京)，
ap-shanghai -华东地区(上海)，
ap-guangzhou -华南地区(广州)，
ap-mumbai - 印度。
     * @param integer $VodLoopTimes 点播拉流转推循环次数。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：拉流源为点播，该配置生效。
     * @param string $VodRefreshType 点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即从更新的拉流源开始播放；
ContinueBreakPoint：从上次断流url源的断点处继续，结束后再使用新的拉流源。

注意：拉流源为点播，该配置生效。
     * @param string $CreateTime 任务创建时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $UpdateTime 任务更新时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $CreateBy 创建任务的操作者。
     * @param string $UpdateBy 最后更新任务的操作者。
     * @param string $CallbackUrl 回调地址。
     * @param array $CallbackEvents 选择需要回调的事件：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。
     * @param string $CallbackInfo 注意：该信息暂不返回。
最后一次回调信息。
     * @param string $ErrorInfo 注意：该信息暂不返回。
错误信息。
     * @param string $Status 状态。
enable：生效中。
pause：暂停中。
     * @param RecentPullInfo $RecentPullInfo 注意：该信息仅在查询单个任务时返回。
任务最新拉流信息。
包含：源 url，偏移时间，上报时间。
     * @param string $Comment 任务备注信息。
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

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceUrls",$param) and $param["SourceUrls"] !== null) {
            $this->SourceUrls = $param["SourceUrls"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("PushArgs",$param) and $param["PushArgs"] !== null) {
            $this->PushArgs = $param["PushArgs"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VodLoopTimes",$param) and $param["VodLoopTimes"] !== null) {
            $this->VodLoopTimes = $param["VodLoopTimes"];
        }

        if (array_key_exists("VodRefreshType",$param) and $param["VodRefreshType"] !== null) {
            $this->VodRefreshType = $param["VodRefreshType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateBy",$param) and $param["CreateBy"] !== null) {
            $this->CreateBy = $param["CreateBy"];
        }

        if (array_key_exists("UpdateBy",$param) and $param["UpdateBy"] !== null) {
            $this->UpdateBy = $param["UpdateBy"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CallbackEvents",$param) and $param["CallbackEvents"] !== null) {
            $this->CallbackEvents = $param["CallbackEvents"];
        }

        if (array_key_exists("CallbackInfo",$param) and $param["CallbackInfo"] !== null) {
            $this->CallbackInfo = $param["CallbackInfo"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RecentPullInfo",$param) and $param["RecentPullInfo"] !== null) {
            $this->RecentPullInfo = new RecentPullInfo();
            $this->RecentPullInfo->deserialize($param["RecentPullInfo"]);
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
