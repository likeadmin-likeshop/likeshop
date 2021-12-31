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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话存档数据详情
 *
 * @method string getMsgId() 获取消息id
 * @method void setMsgId(string $MsgId) 设置消息id
 * @method string getAction() 获取动作名称，switch表示切换企微账号，send表示企微普通消息
 * @method void setAction(string $Action) 设置动作名称，switch表示切换企微账号，send表示企微普通消息
 * @method string getMsgType() 获取消息类型，当Action != "switch"时存在，比如video, text, voice 等，和企微开放文档一一对应
https://open.work.weixin.qq.com/api/doc/90000/90135/91774
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgType(string $MsgType) 设置消息类型，当Action != "switch"时存在，比如video, text, voice 等，和企微开放文档一一对应
https://open.work.weixin.qq.com/api/doc/90000/90135/91774
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrom() 获取消息发送人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrom(string $From) 设置消息发送人
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getToList() 获取消息接收人列表，注意接收人可能只有一个
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToList(array $ToList) 设置消息接收人列表，注意接收人可能只有一个
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoomId() 获取如果是群消息，则不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoomId(string $RoomId) 设置如果是群消息，则不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMsgTime() 获取消息发送的时间戳，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgTime(integer $MsgTime) 设置消息发送的时间戳，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChatArchivingMsgTypeVideo getVideo() 获取MsgType=video时的消息体，忽略此字段，见BodyJson字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideo(ChatArchivingMsgTypeVideo $Video) 设置MsgType=video时的消息体，忽略此字段，见BodyJson字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBodyJson() 获取根据MsgType的不同取值，解析内容不同，参考：https://open.work.weixin.qq.com/api/doc/90000/90135/91774
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyJson(string $BodyJson) 设置根据MsgType的不同取值，解析内容不同，参考：https://open.work.weixin.qq.com/api/doc/90000/90135/91774
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChatArchivingDetail extends AbstractModel
{
    /**
     * @var string 消息id
     */
    public $MsgId;

    /**
     * @var string 动作名称，switch表示切换企微账号，send表示企微普通消息
     */
    public $Action;

    /**
     * @var string 消息类型，当Action != "switch"时存在，比如video, text, voice 等，和企微开放文档一一对应
https://open.work.weixin.qq.com/api/doc/90000/90135/91774
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgType;

    /**
     * @var string 消息发送人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $From;

    /**
     * @var array 消息接收人列表，注意接收人可能只有一个
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToList;

    /**
     * @var string 如果是群消息，则不为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoomId;

    /**
     * @var integer 消息发送的时间戳，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgTime;

    /**
     * @var ChatArchivingMsgTypeVideo MsgType=video时的消息体，忽略此字段，见BodyJson字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Video;

    /**
     * @var string 根据MsgType的不同取值，解析内容不同，参考：https://open.work.weixin.qq.com/api/doc/90000/90135/91774
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyJson;

    /**
     * @param string $MsgId 消息id
     * @param string $Action 动作名称，switch表示切换企微账号，send表示企微普通消息
     * @param string $MsgType 消息类型，当Action != "switch"时存在，比如video, text, voice 等，和企微开放文档一一对应
https://open.work.weixin.qq.com/api/doc/90000/90135/91774
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $From 消息发送人
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ToList 消息接收人列表，注意接收人可能只有一个
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoomId 如果是群消息，则不为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MsgTime 消息发送的时间戳，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChatArchivingMsgTypeVideo $Video MsgType=video时的消息体，忽略此字段，见BodyJson字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BodyJson 根据MsgType的不同取值，解析内容不同，参考：https://open.work.weixin.qq.com/api/doc/90000/90135/91774
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("ToList",$param) and $param["ToList"] !== null) {
            $this->ToList = $param["ToList"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("MsgTime",$param) and $param["MsgTime"] !== null) {
            $this->MsgTime = $param["MsgTime"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = new ChatArchivingMsgTypeVideo();
            $this->Video->deserialize($param["Video"]);
        }

        if (array_key_exists("BodyJson",$param) and $param["BodyJson"] !== null) {
            $this->BodyJson = $param["BodyJson"];
        }
    }
}
