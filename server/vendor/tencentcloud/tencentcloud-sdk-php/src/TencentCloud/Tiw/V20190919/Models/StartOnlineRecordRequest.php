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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartOnlineRecord请求参数结构体
 *
 * @method integer getSdkAppId() 获取客户的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置客户的SdkAppId
 * @method integer getRoomId() 获取需要录制的房间号，取值范围: (1, 4294967295)
 * @method void setRoomId(integer $RoomId) 设置需要录制的房间号，取值范围: (1, 4294967295)
 * @method string getRecordUserId() 获取用于录制服务进房的用户ID，最大长度不能大于60个字节，格式为`tic_record_user_${RoomId}_${Random}`，其中 `${RoomId} `与录制房间号对应，`${Random}`为一个随机字符串。
该ID必须是一个单独的未在SDK中使用的ID，录制服务使用这个用户ID进入房间进行音视频与白板录制，若该ID和SDK中使用的ID重复，会导致SDK和录制服务互踢，影响正常录制。
 * @method void setRecordUserId(string $RecordUserId) 设置用于录制服务进房的用户ID，最大长度不能大于60个字节，格式为`tic_record_user_${RoomId}_${Random}`，其中 `${RoomId} `与录制房间号对应，`${Random}`为一个随机字符串。
该ID必须是一个单独的未在SDK中使用的ID，录制服务使用这个用户ID进入房间进行音视频与白板录制，若该ID和SDK中使用的ID重复，会导致SDK和录制服务互踢，影响正常录制。
 * @method string getRecordUserSig() 获取与RecordUserId对应的签名
 * @method void setRecordUserSig(string $RecordUserSig) 设置与RecordUserId对应的签名
 * @method string getGroupId() 获取（已废弃，设置无效）白板的 IM 群组 Id，默认同房间号
 * @method void setGroupId(string $GroupId) 设置（已废弃，设置无效）白板的 IM 群组 Id，默认同房间号
 * @method Concat getConcat() 获取录制视频拼接参数
 * @method void setConcat(Concat $Concat) 设置录制视频拼接参数
 * @method Whiteboard getWhiteboard() 获取录制白板参数，例如白板宽高等
 * @method void setWhiteboard(Whiteboard $Whiteboard) 设置录制白板参数，例如白板宽高等
 * @method MixStream getMixStream() 获取录制混流参数
特别说明：
1. 混流功能需要根据额外开通， 请联系腾讯云互动白板客服人员
2. 使用混流功能，必须提供 Extras 参数，且 Extras 参数中必须包含 "MIX_STREAM"
 * @method void setMixStream(MixStream $MixStream) 设置录制混流参数
特别说明：
1. 混流功能需要根据额外开通， 请联系腾讯云互动白板客服人员
2. 使用混流功能，必须提供 Extras 参数，且 Extras 参数中必须包含 "MIX_STREAM"
 * @method array getExtras() 获取使用到的高级功能列表
可以选值列表：
MIX_STREAM - 混流功能
 * @method void setExtras(array $Extras) 设置使用到的高级功能列表
可以选值列表：
MIX_STREAM - 混流功能
 * @method boolean getAudioFileNeeded() 获取是否需要在结果回调中返回各路流的纯音频录制文件，文件格式为mp3
 * @method void setAudioFileNeeded(boolean $AudioFileNeeded) 设置是否需要在结果回调中返回各路流的纯音频录制文件，文件格式为mp3
 * @method RecordControl getRecordControl() 获取录制控制参数，用于更精细地指定需要录制哪些流，某一路流是否禁用音频，是否只录制小画面等
 * @method void setRecordControl(RecordControl $RecordControl) 设置录制控制参数，用于更精细地指定需要录制哪些流，某一路流是否禁用音频，是否只录制小画面等
 * @method string getRecordMode() 获取录制模式

REALTIME_MODE - 实时录制模式（默认）
VIDEO_GENERATION_MODE - 视频生成模式（内测中，需邮件申请开通）
 * @method void setRecordMode(string $RecordMode) 设置录制模式

REALTIME_MODE - 实时录制模式（默认）
VIDEO_GENERATION_MODE - 视频生成模式（内测中，需邮件申请开通）
 * @method string getChatGroupId() 获取聊天群组ID，此字段仅适用于`视频生成模式`

在`视频生成模式`下，默认会记录白板群组内的非白板信令消息，如果指定了`ChatGroupId`，则会记录指定群ID的聊天消息。
 * @method void setChatGroupId(string $ChatGroupId) 设置聊天群组ID，此字段仅适用于`视频生成模式`

在`视频生成模式`下，默认会记录白板群组内的非白板信令消息，如果指定了`ChatGroupId`，则会记录指定群ID的聊天消息。
 * @method integer getAutoStopTimeout() 获取自动停止录制超时时间，单位秒，取值范围[300, 86400], 默认值为300秒。

当超过设定时间房间内没有音视频上行且没有白板操作的时候，录制服务会自动停止当前录制任务。
 * @method void setAutoStopTimeout(integer $AutoStopTimeout) 设置自动停止录制超时时间，单位秒，取值范围[300, 86400], 默认值为300秒。

当超过设定时间房间内没有音视频上行且没有白板操作的时候，录制服务会自动停止当前录制任务。
 * @method string getExtraData() 获取内部参数，可忽略
 * @method void setExtraData(string $ExtraData) 设置内部参数，可忽略
 */
class StartOnlineRecordRequest extends AbstractModel
{
    /**
     * @var integer 客户的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var integer 需要录制的房间号，取值范围: (1, 4294967295)
     */
    public $RoomId;

    /**
     * @var string 用于录制服务进房的用户ID，最大长度不能大于60个字节，格式为`tic_record_user_${RoomId}_${Random}`，其中 `${RoomId} `与录制房间号对应，`${Random}`为一个随机字符串。
该ID必须是一个单独的未在SDK中使用的ID，录制服务使用这个用户ID进入房间进行音视频与白板录制，若该ID和SDK中使用的ID重复，会导致SDK和录制服务互踢，影响正常录制。
     */
    public $RecordUserId;

    /**
     * @var string 与RecordUserId对应的签名
     */
    public $RecordUserSig;

    /**
     * @var string （已废弃，设置无效）白板的 IM 群组 Id，默认同房间号
     */
    public $GroupId;

    /**
     * @var Concat 录制视频拼接参数
     */
    public $Concat;

    /**
     * @var Whiteboard 录制白板参数，例如白板宽高等
     */
    public $Whiteboard;

    /**
     * @var MixStream 录制混流参数
特别说明：
1. 混流功能需要根据额外开通， 请联系腾讯云互动白板客服人员
2. 使用混流功能，必须提供 Extras 参数，且 Extras 参数中必须包含 "MIX_STREAM"
     */
    public $MixStream;

    /**
     * @var array 使用到的高级功能列表
可以选值列表：
MIX_STREAM - 混流功能
     */
    public $Extras;

    /**
     * @var boolean 是否需要在结果回调中返回各路流的纯音频录制文件，文件格式为mp3
     */
    public $AudioFileNeeded;

    /**
     * @var RecordControl 录制控制参数，用于更精细地指定需要录制哪些流，某一路流是否禁用音频，是否只录制小画面等
     */
    public $RecordControl;

    /**
     * @var string 录制模式

REALTIME_MODE - 实时录制模式（默认）
VIDEO_GENERATION_MODE - 视频生成模式（内测中，需邮件申请开通）
     */
    public $RecordMode;

    /**
     * @var string 聊天群组ID，此字段仅适用于`视频生成模式`

在`视频生成模式`下，默认会记录白板群组内的非白板信令消息，如果指定了`ChatGroupId`，则会记录指定群ID的聊天消息。
     */
    public $ChatGroupId;

    /**
     * @var integer 自动停止录制超时时间，单位秒，取值范围[300, 86400], 默认值为300秒。

当超过设定时间房间内没有音视频上行且没有白板操作的时候，录制服务会自动停止当前录制任务。
     */
    public $AutoStopTimeout;

    /**
     * @var string 内部参数，可忽略
     */
    public $ExtraData;

    /**
     * @param integer $SdkAppId 客户的SdkAppId
     * @param integer $RoomId 需要录制的房间号，取值范围: (1, 4294967295)
     * @param string $RecordUserId 用于录制服务进房的用户ID，最大长度不能大于60个字节，格式为`tic_record_user_${RoomId}_${Random}`，其中 `${RoomId} `与录制房间号对应，`${Random}`为一个随机字符串。
该ID必须是一个单独的未在SDK中使用的ID，录制服务使用这个用户ID进入房间进行音视频与白板录制，若该ID和SDK中使用的ID重复，会导致SDK和录制服务互踢，影响正常录制。
     * @param string $RecordUserSig 与RecordUserId对应的签名
     * @param string $GroupId （已废弃，设置无效）白板的 IM 群组 Id，默认同房间号
     * @param Concat $Concat 录制视频拼接参数
     * @param Whiteboard $Whiteboard 录制白板参数，例如白板宽高等
     * @param MixStream $MixStream 录制混流参数
特别说明：
1. 混流功能需要根据额外开通， 请联系腾讯云互动白板客服人员
2. 使用混流功能，必须提供 Extras 参数，且 Extras 参数中必须包含 "MIX_STREAM"
     * @param array $Extras 使用到的高级功能列表
可以选值列表：
MIX_STREAM - 混流功能
     * @param boolean $AudioFileNeeded 是否需要在结果回调中返回各路流的纯音频录制文件，文件格式为mp3
     * @param RecordControl $RecordControl 录制控制参数，用于更精细地指定需要录制哪些流，某一路流是否禁用音频，是否只录制小画面等
     * @param string $RecordMode 录制模式

REALTIME_MODE - 实时录制模式（默认）
VIDEO_GENERATION_MODE - 视频生成模式（内测中，需邮件申请开通）
     * @param string $ChatGroupId 聊天群组ID，此字段仅适用于`视频生成模式`

在`视频生成模式`下，默认会记录白板群组内的非白板信令消息，如果指定了`ChatGroupId`，则会记录指定群ID的聊天消息。
     * @param integer $AutoStopTimeout 自动停止录制超时时间，单位秒，取值范围[300, 86400], 默认值为300秒。

当超过设定时间房间内没有音视频上行且没有白板操作的时候，录制服务会自动停止当前录制任务。
     * @param string $ExtraData 内部参数，可忽略
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("RecordUserId",$param) and $param["RecordUserId"] !== null) {
            $this->RecordUserId = $param["RecordUserId"];
        }

        if (array_key_exists("RecordUserSig",$param) and $param["RecordUserSig"] !== null) {
            $this->RecordUserSig = $param["RecordUserSig"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Concat",$param) and $param["Concat"] !== null) {
            $this->Concat = new Concat();
            $this->Concat->deserialize($param["Concat"]);
        }

        if (array_key_exists("Whiteboard",$param) and $param["Whiteboard"] !== null) {
            $this->Whiteboard = new Whiteboard();
            $this->Whiteboard->deserialize($param["Whiteboard"]);
        }

        if (array_key_exists("MixStream",$param) and $param["MixStream"] !== null) {
            $this->MixStream = new MixStream();
            $this->MixStream->deserialize($param["MixStream"]);
        }

        if (array_key_exists("Extras",$param) and $param["Extras"] !== null) {
            $this->Extras = $param["Extras"];
        }

        if (array_key_exists("AudioFileNeeded",$param) and $param["AudioFileNeeded"] !== null) {
            $this->AudioFileNeeded = $param["AudioFileNeeded"];
        }

        if (array_key_exists("RecordControl",$param) and $param["RecordControl"] !== null) {
            $this->RecordControl = new RecordControl();
            $this->RecordControl->deserialize($param["RecordControl"]);
        }

        if (array_key_exists("RecordMode",$param) and $param["RecordMode"] !== null) {
            $this->RecordMode = $param["RecordMode"];
        }

        if (array_key_exists("ChatGroupId",$param) and $param["ChatGroupId"] !== null) {
            $this->ChatGroupId = $param["ChatGroupId"];
        }

        if (array_key_exists("AutoStopTimeout",$param) and $param["AutoStopTimeout"] !== null) {
            $this->AutoStopTimeout = $param["AutoStopTimeout"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }
    }
}
