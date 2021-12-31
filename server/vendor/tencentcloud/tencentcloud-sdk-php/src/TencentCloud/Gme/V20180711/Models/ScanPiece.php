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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音检测结果，Code 为 0 时返回
 *
 * @method string getDumpUrl() 获取流检测时返回，音频转存地址，保留30min
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDumpUrl(string $DumpUrl) 设置流检测时返回，音频转存地址，保留30min
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHitFlag() 获取是否违规
 * @method void setHitFlag(boolean $HitFlag) 设置是否违规
 * @method string getMainType() 获取违规主要类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainType(string $MainType) 设置违规主要类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScanDetail() 获取语音检测详情
 * @method void setScanDetail(array $ScanDetail) 设置语音检测详情
 * @method string getRoomId() 获取gme实时语音房间ID，透传任务传入时的RoomId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoomId(string $RoomId) 设置gme实时语音房间ID，透传任务传入时的RoomId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenId() 获取gme实时语音用户ID，透传任务传入时的OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置gme实时语音用户ID，透传任务传入时的OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInfo() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfo(string $Info) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffset() 获取流检测时分片在流中的偏移时间，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(integer $Offset) 设置流检测时分片在流中的偏移时间，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取流检测时分片时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置流检测时分片时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPieceStartTime() 获取分片开始检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPieceStartTime(integer $PieceStartTime) 设置分片开始检测时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScanPiece extends AbstractModel
{
    /**
     * @var string 流检测时返回，音频转存地址，保留30min
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DumpUrl;

    /**
     * @var boolean 是否违规
     */
    public $HitFlag;

    /**
     * @var string 违规主要类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainType;

    /**
     * @var array 语音检测详情
     */
    public $ScanDetail;

    /**
     * @var string gme实时语音房间ID，透传任务传入时的RoomId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoomId;

    /**
     * @var string gme实时语音用户ID，透传任务传入时的OpenId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Info;

    /**
     * @var integer 流检测时分片在流中的偏移时间，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var integer 流检测时分片时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 分片开始检测时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PieceStartTime;

    /**
     * @param string $DumpUrl 流检测时返回，音频转存地址，保留30min
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HitFlag 是否违规
     * @param string $MainType 违规主要类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ScanDetail 语音检测详情
     * @param string $RoomId gme实时语音房间ID，透传任务传入时的RoomId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenId gme实时语音用户ID，透传任务传入时的OpenId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Info 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Offset 流检测时分片在流中的偏移时间，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 流检测时分片时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PieceStartTime 分片开始检测时间
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
        if (array_key_exists("DumpUrl",$param) and $param["DumpUrl"] !== null) {
            $this->DumpUrl = $param["DumpUrl"];
        }

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("MainType",$param) and $param["MainType"] !== null) {
            $this->MainType = $param["MainType"];
        }

        if (array_key_exists("ScanDetail",$param) and $param["ScanDetail"] !== null) {
            $this->ScanDetail = [];
            foreach ($param["ScanDetail"] as $key => $value){
                $obj = new ScanDetail();
                $obj->deserialize($value);
                array_push($this->ScanDetail, $obj);
            }
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("PieceStartTime",$param) and $param["PieceStartTime"] !== null) {
            $this->PieceStartTime = $param["PieceStartTime"];
        }
    }
}
