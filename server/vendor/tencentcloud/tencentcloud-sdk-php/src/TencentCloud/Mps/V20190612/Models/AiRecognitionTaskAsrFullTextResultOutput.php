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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音全文识别结果。
 *
 * @method array getSegmentSet() 获取语音全文识别片段列表。
 * @method void setSegmentSet(array $SegmentSet) 设置语音全文识别片段列表。
 * @method string getSubtitlePath() 获取字幕文件地址。
 * @method void setSubtitlePath(string $SubtitlePath) 设置字幕文件地址。
 * @method TaskOutputStorage getOutputStorage() 获取字幕文件存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置字幕文件存储位置。
 */
class AiRecognitionTaskAsrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array 语音全文识别片段列表。
     */
    public $SegmentSet;

    /**
     * @var string 字幕文件地址。
     */
    public $SubtitlePath;

    /**
     * @var TaskOutputStorage 字幕文件存储位置。
     */
    public $OutputStorage;

    /**
     * @param array $SegmentSet 语音全文识别片段列表。
     * @param string $SubtitlePath 字幕文件地址。
     * @param TaskOutputStorage $OutputStorage 字幕文件存储位置。
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
        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskAsrFullTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SubtitlePath",$param) and $param["SubtitlePath"] !== null) {
            $this->SubtitlePath = $param["SubtitlePath"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
