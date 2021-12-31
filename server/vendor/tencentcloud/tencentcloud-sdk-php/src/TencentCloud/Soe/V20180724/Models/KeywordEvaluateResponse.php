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
namespace TencentCloud\Soe\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KeywordEvaluate返回参数结构体
 *
 * @method array getKeywordScores() 获取关键词得分
 * @method void setKeywordScores(array $KeywordScores) 设置关键词得分
 * @method string getSessionId() 获取语音段唯一标识，一段语音一个SessionId
 * @method void setSessionId(string $SessionId) 设置语音段唯一标识，一段语音一个SessionId
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class KeywordEvaluateResponse extends AbstractModel
{
    /**
     * @var array 关键词得分
     */
    public $KeywordScores;

    /**
     * @var string 语音段唯一标识，一段语音一个SessionId
     */
    public $SessionId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $KeywordScores 关键词得分
     * @param string $SessionId 语音段唯一标识，一段语音一个SessionId
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
        if (array_key_exists("KeywordScores",$param) and $param["KeywordScores"] !== null) {
            $this->KeywordScores = [];
            foreach ($param["KeywordScores"] as $key => $value){
                $obj = new KeywordScore();
                $obj->deserialize($value);
                array_push($this->KeywordScores, $obj);
            }
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
