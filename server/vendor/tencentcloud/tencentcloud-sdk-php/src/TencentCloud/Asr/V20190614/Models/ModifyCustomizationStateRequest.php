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
 * ModifyCustomizationState请求参数结构体
 *
 * @method string getModelId() 获取自学习模型ID
 * @method void setModelId(string $ModelId) 设置自学习模型ID
 * @method integer getToState() 获取想要变换的模型状态，-1代表下线，1代表上线
 * @method void setToState(integer $ToState) 设置想要变换的模型状态，-1代表下线，1代表上线
 */
class ModifyCustomizationStateRequest extends AbstractModel
{
    /**
     * @var string 自学习模型ID
     */
    public $ModelId;

    /**
     * @var integer 想要变换的模型状态，-1代表下线，1代表上线
     */
    public $ToState;

    /**
     * @param string $ModelId 自学习模型ID
     * @param integer $ToState 想要变换的模型状态，-1代表下线，1代表上线
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ToState",$param) and $param["ToState"] !== null) {
            $this->ToState = $param["ToState"];
        }
    }
}
