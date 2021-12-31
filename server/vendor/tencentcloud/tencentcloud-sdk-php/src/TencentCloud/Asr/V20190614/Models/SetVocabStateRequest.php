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
 * SetVocabState请求参数结构体
 *
 * @method string getVocabId() 获取热词表ID。
 * @method void setVocabId(string $VocabId) 设置热词表ID。
 * @method integer getState() 获取热词表状态，1：设为默认状态；0：设为非默认状态。
 * @method void setState(integer $State) 设置热词表状态，1：设为默认状态；0：设为非默认状态。
 */
class SetVocabStateRequest extends AbstractModel
{
    /**
     * @var string 热词表ID。
     */
    public $VocabId;

    /**
     * @var integer 热词表状态，1：设为默认状态；0：设为非默认状态。
     */
    public $State;

    /**
     * @param string $VocabId 热词表ID。
     * @param integer $State 热词表状态，1：设为默认状态；0：设为非默认状态。
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
        if (array_key_exists("VocabId",$param) and $param["VocabId"] !== null) {
            $this->VocabId = $param["VocabId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
