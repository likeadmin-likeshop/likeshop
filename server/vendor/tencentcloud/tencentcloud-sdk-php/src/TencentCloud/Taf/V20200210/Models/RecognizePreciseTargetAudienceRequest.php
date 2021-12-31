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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizePreciseTargetAudience请求参数结构体
 *
 * @method InputRecognizeTargetAudience getBspData() 获取业务数据
 * @method void setBspData(InputRecognizeTargetAudience $BspData) 设置业务数据
 */
class RecognizePreciseTargetAudienceRequest extends AbstractModel
{
    /**
     * @var InputRecognizeTargetAudience 业务数据
     */
    public $BspData;

    /**
     * @param InputRecognizeTargetAudience $BspData 业务数据
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
        if (array_key_exists("BspData",$param) and $param["BspData"] !== null) {
            $this->BspData = new InputRecognizeTargetAudience();
            $this->BspData->deserialize($param["BspData"]);
        }
    }
}
