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
namespace TencentCloud\Facefusion\V20181201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FaceFusion返回参数结构体
 *
 * @method string getImage() 获取RspImgType 为 url 时，返回结果的 url， RspImgType 为 base64 时返回 base64 数据。
 * @method void setImage(string $Image) 设置RspImgType 为 url 时，返回结果的 url， RspImgType 为 base64 时返回 base64 数据。
 * @method array getReviewResultSet() 获取不适宜内容识别结果
 * @method void setReviewResultSet(array $ReviewResultSet) 设置不适宜内容识别结果
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class FaceFusionResponse extends AbstractModel
{
    /**
     * @var string RspImgType 为 url 时，返回结果的 url， RspImgType 为 base64 时返回 base64 数据。
     */
    public $Image;

    /**
     * @var array 不适宜内容识别结果
     */
    public $ReviewResultSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Image RspImgType 为 url 时，返回结果的 url， RspImgType 为 base64 时返回 base64 数据。
     * @param array $ReviewResultSet 不适宜内容识别结果
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ReviewResultSet",$param) and $param["ReviewResultSet"] !== null) {
            $this->ReviewResultSet = [];
            foreach ($param["ReviewResultSet"] as $key => $value){
                $obj = new FuseFaceReviewResult();
                $obj->deserialize($value);
                array_push($this->ReviewResultSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
