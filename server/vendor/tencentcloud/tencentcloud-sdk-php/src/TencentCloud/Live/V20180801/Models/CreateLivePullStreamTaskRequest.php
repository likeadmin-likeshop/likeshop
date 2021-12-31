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
 * CreateLivePullStreamTask请求参数结构体
 *
 * @method string getSourceType() 获取拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
 * @method void setSourceType(string $SourceType) 设置拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
 * @method array getSourceUrls() 获取拉流源 url 列表。
SourceType 为直播（PullLivePushLive）只可以填1个，
SourceType 为点播（PullVodPushLive）可以填多个，上限30个。
当前支持的文件格式：flv，mp4，hls。
当前支持的拉流协议：http，https，rtmp。
 * @method void setSourceUrls(array $SourceUrls) 设置拉流源 url 列表。
SourceType 为直播（PullLivePushLive）只可以填1个，
SourceType 为点播（PullVodPushLive）可以填多个，上限30个。
当前支持的文件格式：flv，mp4，hls。
当前支持的拉流协议：http，https，rtmp。
 * @method string getDomainName() 获取推流域名。
将拉取过来的流推到该域名。
注意：请使用已在云直播配置的推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
将拉取过来的流推到该域名。
注意：请使用已在云直播配置的推流域名。
 * @method string getAppName() 获取推流路径。
将拉取过来的流推到该路径。
 * @method void setAppName(string $AppName) 设置推流路径。
将拉取过来的流推到该路径。
 * @method string getStreamName() 获取推流名称。
将拉取过来的流推到该流名称。
 * @method void setStreamName(string $StreamName) 设置推流名称。
将拉取过来的流推到该流名称。
 * @method string getStartTime() 获取开始时间。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setStartTime(string $StartTime) 设置开始时间。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getEndTime() 获取结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setEndTime(string $EndTime) 设置结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getOperator() 获取任务操作人备注。
 * @method void setOperator(string $Operator) 设置任务操作人备注。
 * @method string getPushArgs() 获取推流参数。
推流时携带自定义参数。
示例：
bak=1&test=2 。
 * @method void setPushArgs(string $PushArgs) 设置推流参数。
推流时携带自定义参数。
示例：
bak=1&test=2 。
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
 * @method string getVodLoopTimes() 获取点播拉流转推循环次数。默认：-1。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：该配置仅对拉流源为点播时生效。
 * @method void setVodLoopTimes(string $VodLoopTimes) 设置点播拉流转推循环次数。默认：-1。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：该配置仅对拉流源为点播时生效。
 * @method string getVodRefreshType() 获取点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即播放新的拉流源内容；
ContinueBreakPoint：播放完当前正在播放的点播 url 后再使用新的拉流源播放。（旧拉流源未播放的点播 url 不会再播放）

注意：该配置生效仅对变更前拉流源为点播时生效。
 * @method void setVodRefreshType(string $VodRefreshType) 设置点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即播放新的拉流源内容；
ContinueBreakPoint：播放完当前正在播放的点播 url 后再使用新的拉流源播放。（旧拉流源未播放的点播 url 不会再播放）

注意：该配置生效仅对变更前拉流源为点播时生效。
 * @method string getCallbackUrl() 获取自定义回调地址。
拉流转推任务相关事件会回调到该地址。
 * @method void setCallbackUrl(string $CallbackUrl) 设置自定义回调地址。
拉流转推任务相关事件会回调到该地址。
 * @method string getExtraCmd() 获取其他参数。
示例: ignore_region  用于忽略传入地域, 内部按负载分配。
 * @method void setExtraCmd(string $ExtraCmd) 设置其他参数。
示例: ignore_region  用于忽略传入地域, 内部按负载分配。
 * @method string getComment() 获取任务描述，限制 512 字节。
 * @method void setComment(string $Comment) 设置任务描述，限制 512 字节。
 */
class CreateLivePullStreamTaskRequest extends AbstractModel
{
    /**
     * @var string 拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
     */
    public $SourceType;

    /**
     * @var array 拉流源 url 列表。
SourceType 为直播（PullLivePushLive）只可以填1个，
SourceType 为点播（PullVodPushLive）可以填多个，上限30个。
当前支持的文件格式：flv，mp4，hls。
当前支持的拉流协议：http，https，rtmp。
     */
    public $SourceUrls;

    /**
     * @var string 推流域名。
将拉取过来的流推到该域名。
注意：请使用已在云直播配置的推流域名。
     */
    public $DomainName;

    /**
     * @var string 推流路径。
将拉取过来的流推到该路径。
     */
    public $AppName;

    /**
     * @var string 推流名称。
将拉取过来的流推到该流名称。
     */
    public $StreamName;

    /**
     * @var string 开始时间。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $StartTime;

    /**
     * @var string 结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $EndTime;

    /**
     * @var string 任务操作人备注。
     */
    public $Operator;

    /**
     * @var string 推流参数。
推流时携带自定义参数。
示例：
bak=1&test=2 。
     */
    public $PushArgs;

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
     * @var string 点播拉流转推循环次数。默认：-1。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：该配置仅对拉流源为点播时生效。
     */
    public $VodLoopTimes;

    /**
     * @var string 点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即播放新的拉流源内容；
ContinueBreakPoint：播放完当前正在播放的点播 url 后再使用新的拉流源播放。（旧拉流源未播放的点播 url 不会再播放）

注意：该配置生效仅对变更前拉流源为点播时生效。
     */
    public $VodRefreshType;

    /**
     * @var string 自定义回调地址。
拉流转推任务相关事件会回调到该地址。
     */
    public $CallbackUrl;

    /**
     * @var string 其他参数。
示例: ignore_region  用于忽略传入地域, 内部按负载分配。
     */
    public $ExtraCmd;

    /**
     * @var string 任务描述，限制 512 字节。
     */
    public $Comment;

    /**
     * @param string $SourceType 拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
     * @param array $SourceUrls 拉流源 url 列表。
SourceType 为直播（PullLivePushLive）只可以填1个，
SourceType 为点播（PullVodPushLive）可以填多个，上限30个。
当前支持的文件格式：flv，mp4，hls。
当前支持的拉流协议：http，https，rtmp。
     * @param string $DomainName 推流域名。
将拉取过来的流推到该域名。
注意：请使用已在云直播配置的推流域名。
     * @param string $AppName 推流路径。
将拉取过来的流推到该路径。
     * @param string $StreamName 推流名称。
将拉取过来的流推到该流名称。
     * @param string $StartTime 开始时间。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $EndTime 结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $Operator 任务操作人备注。
     * @param string $PushArgs 推流参数。
推流时携带自定义参数。
示例：
bak=1&test=2 。
     * @param array $CallbackEvents 选择需要回调的事件（不填则回调全部）：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。
     * @param string $VodLoopTimes 点播拉流转推循环次数。默认：-1。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：该配置仅对拉流源为点播时生效。
     * @param string $VodRefreshType 点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即播放新的拉流源内容；
ContinueBreakPoint：播放完当前正在播放的点播 url 后再使用新的拉流源播放。（旧拉流源未播放的点播 url 不会再播放）

注意：该配置生效仅对变更前拉流源为点播时生效。
     * @param string $CallbackUrl 自定义回调地址。
拉流转推任务相关事件会回调到该地址。
     * @param string $ExtraCmd 其他参数。
示例: ignore_region  用于忽略传入地域, 内部按负载分配。
     * @param string $Comment 任务描述，限制 512 字节。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("PushArgs",$param) and $param["PushArgs"] !== null) {
            $this->PushArgs = $param["PushArgs"];
        }

        if (array_key_exists("CallbackEvents",$param) and $param["CallbackEvents"] !== null) {
            $this->CallbackEvents = $param["CallbackEvents"];
        }

        if (array_key_exists("VodLoopTimes",$param) and $param["VodLoopTimes"] !== null) {
            $this->VodLoopTimes = $param["VodLoopTimes"];
        }

        if (array_key_exists("VodRefreshType",$param) and $param["VodRefreshType"] !== null) {
            $this->VodRefreshType = $param["VodRefreshType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ExtraCmd",$param) and $param["ExtraCmd"] !== null) {
            $this->ExtraCmd = $param["ExtraCmd"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
