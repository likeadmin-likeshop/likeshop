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
namespace TencentCloud\Ticm\V20181127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageModeration返回参数结构体
 *
 * @method string getSuggestion() 获取识别场景的审核结论：
PASS：正常
REVIEW：疑似
BLOCK：违规
 * @method void setSuggestion(string $Suggestion) 设置识别场景的审核结论：
PASS：正常
REVIEW：疑似
BLOCK：违规
 * @method PornResult getPornResult() 获取色情识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPornResult(PornResult $PornResult) 设置色情识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TerrorismResult getTerrorismResult() 获取暴恐识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTerrorismResult(TerrorismResult $TerrorismResult) 设置暴恐识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PoliticsResult getPoliticsResult() 获取政治敏感识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoliticsResult(PoliticsResult $PoliticsResult) 设置政治敏感识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取透传字段，透传简单信息。
 * @method void setExtra(string $Extra) 设置透传字段，透传简单信息。
 * @method DisgustResult getDisgustResult() 获取恶心内容识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisgustResult(DisgustResult $DisgustResult) 设置恶心内容识别结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ImageModerationResponse extends AbstractModel
{
    /**
     * @var string 识别场景的审核结论：
PASS：正常
REVIEW：疑似
BLOCK：违规
     */
    public $Suggestion;

    /**
     * @var PornResult 色情识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PornResult;

    /**
     * @var TerrorismResult 暴恐识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TerrorismResult;

    /**
     * @var PoliticsResult 政治敏感识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoliticsResult;

    /**
     * @var string 透传字段，透传简单信息。
     */
    public $Extra;

    /**
     * @var DisgustResult 恶心内容识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisgustResult;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Suggestion 识别场景的审核结论：
PASS：正常
REVIEW：疑似
BLOCK：违规
     * @param PornResult $PornResult 色情识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TerrorismResult $TerrorismResult 暴恐识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PoliticsResult $PoliticsResult 政治敏感识别结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra 透传字段，透传简单信息。
     * @param DisgustResult $DisgustResult 恶心内容识别结果。
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
        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("PornResult",$param) and $param["PornResult"] !== null) {
            $this->PornResult = new PornResult();
            $this->PornResult->deserialize($param["PornResult"]);
        }

        if (array_key_exists("TerrorismResult",$param) and $param["TerrorismResult"] !== null) {
            $this->TerrorismResult = new TerrorismResult();
            $this->TerrorismResult->deserialize($param["TerrorismResult"]);
        }

        if (array_key_exists("PoliticsResult",$param) and $param["PoliticsResult"] !== null) {
            $this->PoliticsResult = new PoliticsResult();
            $this->PoliticsResult->deserialize($param["PoliticsResult"]);
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("DisgustResult",$param) and $param["DisgustResult"] !== null) {
            $this->DisgustResult = new DisgustResult();
            $this->DisgustResult->deserialize($param["DisgustResult"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
