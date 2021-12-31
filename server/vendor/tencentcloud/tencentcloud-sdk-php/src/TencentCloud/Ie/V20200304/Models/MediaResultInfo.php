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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结果文件媒体信息
 *
 * @method integer getDuration() 获取媒体时长，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置媒体时长，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResultVideoInfoSet() 获取视频流信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultVideoInfoSet(array $ResultVideoInfoSet) 设置视频流信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResultAudioInfoSet() 获取音频流信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultAudioInfoSet(array $ResultAudioInfoSet) 设置音频流信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaResultInfo extends AbstractModel
{
    /**
     * @var integer 媒体时长，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var array 视频流信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultVideoInfoSet;

    /**
     * @var array 音频流信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultAudioInfoSet;

    /**
     * @param integer $Duration 媒体时长，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResultVideoInfoSet 视频流信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResultAudioInfoSet 音频流信息
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ResultVideoInfoSet",$param) and $param["ResultVideoInfoSet"] !== null) {
            $this->ResultVideoInfoSet = [];
            foreach ($param["ResultVideoInfoSet"] as $key => $value){
                $obj = new ResultVideoInfo();
                $obj->deserialize($value);
                array_push($this->ResultVideoInfoSet, $obj);
            }
        }

        if (array_key_exists("ResultAudioInfoSet",$param) and $param["ResultAudioInfoSet"] !== null) {
            $this->ResultAudioInfoSet = [];
            foreach ($param["ResultAudioInfoSet"] as $key => $value){
                $obj = new ResultAudioInfo();
                $obj->deserialize($value);
                array_push($this->ResultAudioInfoSet, $obj);
            }
        }
    }
}
