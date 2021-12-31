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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextCorrection返回参数结构体
 *
 * @method array getCCITokens() 获取纠错详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCCITokens(array $CCITokens) 设置纠错详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultText() 获取纠错后的文本
 * @method void setResultText(string $ResultText) 设置纠错后的文本
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class TextCorrectionResponse extends AbstractModel
{
    /**
     * @var array 纠错详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CCITokens;

    /**
     * @var string 纠错后的文本
     */
    public $ResultText;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CCITokens 纠错详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultText 纠错后的文本
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
        if (array_key_exists("CCITokens",$param) and $param["CCITokens"] !== null) {
            $this->CCITokens = [];
            foreach ($param["CCITokens"] as $key => $value){
                $obj = new CCIToken();
                $obj->deserialize($value);
                array_push($this->CCITokens, $obj);
            }
        }

        if (array_key_exists("ResultText",$param) and $param["ResultText"] !== null) {
            $this->ResultText = $param["ResultText"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
