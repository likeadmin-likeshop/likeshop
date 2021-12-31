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
 * 会话存档的视频消息类型
 *
 * @method integer getPlayLength() 获取视频时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayLength(integer $PlayLength) 设置视频时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSize() 获取文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosKey() 获取视频资源对象Cos下载地址
 * @method void setCosKey(string $CosKey) 设置视频资源对象Cos下载地址
 */
class ChatArchivingMsgTypeVideo extends AbstractModel
{
    /**
     * @var integer 视频时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayLength;

    /**
     * @var integer 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 视频资源对象Cos下载地址
     */
    public $CosKey;

    /**
     * @param integer $PlayLength 视频时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSize 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosKey 视频资源对象Cos下载地址
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
        if (array_key_exists("PlayLength",$param) and $param["PlayLength"] !== null) {
            $this->PlayLength = $param["PlayLength"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("CosKey",$param) and $param["CosKey"] !== null) {
            $this->CosKey = $param["CosKey"];
        }
    }
}
