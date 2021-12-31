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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdResult返回参数结构体
 *
 * @method string getIdCard() 获取身份证
 * @method void setIdCard(string $IdCard) 设置身份证
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getResult() 获取业务核验结果，参考https://cloud.tencent.com/document/product/1007/47912
 * @method void setResult(string $Result) 设置业务核验结果，参考https://cloud.tencent.com/document/product/1007/47912
 * @method string getDescription() 获取业务核验描述
 * @method void setDescription(string $Description) 设置业务核验描述
 * @method float getSimilarity() 获取相似度，0-100，数值越大相似度越高
 * @method void setSimilarity(float $Similarity) 设置相似度，0-100，数值越大相似度越高
 * @method string getVideoBase64() 获取用户核验的视频
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoBase64(string $VideoBase64) 设置用户核验的视频
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBestFrameBase64() 获取用户核验视频的截帧
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrameBase64(string $BestFrameBase64) 设置用户核验视频的截帧
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取获取token时透传的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置获取token时透传的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetFaceIdResultResponse extends AbstractModel
{
    /**
     * @var string 身份证
     */
    public $IdCard;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 业务核验结果，参考https://cloud.tencent.com/document/product/1007/47912
     */
    public $Result;

    /**
     * @var string 业务核验描述
     */
    public $Description;

    /**
     * @var float 相似度，0-100，数值越大相似度越高
     */
    public $Similarity;

    /**
     * @var string 用户核验的视频
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoBase64;

    /**
     * @var string 用户核验视频的截帧
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrameBase64;

    /**
     * @var string 获取token时透传的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IdCard 身份证
     * @param string $Name 姓名
     * @param string $Result 业务核验结果，参考https://cloud.tencent.com/document/product/1007/47912
     * @param string $Description 业务核验描述
     * @param float $Similarity 相似度，0-100，数值越大相似度越高
     * @param string $VideoBase64 用户核验的视频
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BestFrameBase64 用户核验视频的截帧
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra 获取token时透传的信息
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("VideoBase64",$param) and $param["VideoBase64"] !== null) {
            $this->VideoBase64 = $param["VideoBase64"];
        }

        if (array_key_exists("BestFrameBase64",$param) and $param["BestFrameBase64"] !== null) {
            $this->BestFrameBase64 = $param["BestFrameBase64"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
