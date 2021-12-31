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
 * 编辑视频任务的输入。
 *
 * @method string getInputType() 获取输入视频的来源类型，可以取的值为 File，Stream 两种。
 * @method void setInputType(string $InputType) 设置输入视频的来源类型，可以取的值为 File，Stream 两种。
 * @method array getFileInfoSet() 获取输入的视频文件信息，当 InputType 为 File 时，该字段有值。
 * @method void setFileInfoSet(array $FileInfoSet) 设置输入的视频文件信息，当 InputType 为 File 时，该字段有值。
 * @method array getStreamInfoSet() 获取输入的流信息，当 InputType 为 Stream 时，该字段有值。
 * @method void setStreamInfoSet(array $StreamInfoSet) 设置输入的流信息，当 InputType 为 Stream 时，该字段有值。
 */
class EditMediaTaskInput extends AbstractModel
{
    /**
     * @var string 输入视频的来源类型，可以取的值为 File，Stream 两种。
     */
    public $InputType;

    /**
     * @var array 输入的视频文件信息，当 InputType 为 File 时，该字段有值。
     */
    public $FileInfoSet;

    /**
     * @var array 输入的流信息，当 InputType 为 Stream 时，该字段有值。
     */
    public $StreamInfoSet;

    /**
     * @param string $InputType 输入视频的来源类型，可以取的值为 File，Stream 两种。
     * @param array $FileInfoSet 输入的视频文件信息，当 InputType 为 File 时，该字段有值。
     * @param array $StreamInfoSet 输入的流信息，当 InputType 为 Stream 时，该字段有值。
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("FileInfoSet",$param) and $param["FileInfoSet"] !== null) {
            $this->FileInfoSet = [];
            foreach ($param["FileInfoSet"] as $key => $value){
                $obj = new EditMediaFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfoSet, $obj);
            }
        }

        if (array_key_exists("StreamInfoSet",$param) and $param["StreamInfoSet"] !== null) {
            $this->StreamInfoSet = [];
            foreach ($param["StreamInfoSet"] as $key => $value){
                $obj = new EditMediaStreamInfo();
                $obj->deserialize($value);
                array_push($this->StreamInfoSet, $obj);
            }
        }
    }
}
