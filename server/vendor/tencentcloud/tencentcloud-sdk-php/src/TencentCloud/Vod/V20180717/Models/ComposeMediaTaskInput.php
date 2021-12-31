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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 制作媒体文件任务的输入。
 *
 * @method array getTracks() 获取输入的媒体轨道列表，包括视频、音频、图片等素材组成的多个轨道信息。
 * @method void setTracks(array $Tracks) 设置输入的媒体轨道列表，包括视频、音频、图片等素材组成的多个轨道信息。
 * @method Canvas getCanvas() 获取制作视频文件时使用的画布。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanvas(Canvas $Canvas) 设置制作视频文件时使用的画布。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComposeMediaOutput getOutput() 获取输出的媒体文件信息。
 * @method void setOutput(ComposeMediaOutput $Output) 设置输出的媒体文件信息。
 */
class ComposeMediaTaskInput extends AbstractModel
{
    /**
     * @var array 输入的媒体轨道列表，包括视频、音频、图片等素材组成的多个轨道信息。
     */
    public $Tracks;

    /**
     * @var Canvas 制作视频文件时使用的画布。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Canvas;

    /**
     * @var ComposeMediaOutput 输出的媒体文件信息。
     */
    public $Output;

    /**
     * @param array $Tracks 输入的媒体轨道列表，包括视频、音频、图片等素材组成的多个轨道信息。
     * @param Canvas $Canvas 制作视频文件时使用的画布。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComposeMediaOutput $Output 输出的媒体文件信息。
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
        if (array_key_exists("Tracks",$param) and $param["Tracks"] !== null) {
            $this->Tracks = [];
            foreach ($param["Tracks"] as $key => $value){
                $obj = new MediaTrack();
                $obj->deserialize($value);
                array_push($this->Tracks, $obj);
            }
        }

        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new Canvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ComposeMediaOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
