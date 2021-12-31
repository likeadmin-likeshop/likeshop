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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SentenceRecognition返回参数结构体
 *
 * @method string getResult() 获取识别结果。
 * @method void setResult(string $Result) 设置识别结果。
 * @method integer getAudioDuration() 获取请求的音频时长，单位为ms
 * @method void setAudioDuration(integer $AudioDuration) 设置请求的音频时长，单位为ms
 * @method integer getWordSize() 获取词时间戳列表的长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWordSize(integer $WordSize) 设置词时间戳列表的长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWordList() 获取词时间戳列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWordList(array $WordList) 设置词时间戳列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SentenceRecognitionResponse extends AbstractModel
{
    /**
     * @var string 识别结果。
     */
    public $Result;

    /**
     * @var integer 请求的音频时长，单位为ms
     */
    public $AudioDuration;

    /**
     * @var integer 词时间戳列表的长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WordSize;

    /**
     * @var array 词时间戳列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WordList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result 识别结果。
     * @param integer $AudioDuration 请求的音频时长，单位为ms
     * @param integer $WordSize 词时间戳列表的长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WordList 词时间戳列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("AudioDuration",$param) and $param["AudioDuration"] !== null) {
            $this->AudioDuration = $param["AudioDuration"];
        }

        if (array_key_exists("WordSize",$param) and $param["WordSize"] !== null) {
            $this->WordSize = $param["WordSize"];
        }

        if (array_key_exists("WordList",$param) and $param["WordList"] !== null) {
            $this->WordList = [];
            foreach ($param["WordList"] as $key => $value){
                $obj = new SentenceWord();
                $obj->deserialize($value);
                array_push($this->WordList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
