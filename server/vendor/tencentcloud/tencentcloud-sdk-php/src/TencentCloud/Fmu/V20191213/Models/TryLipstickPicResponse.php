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
namespace TencentCloud\Fmu\V20191213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TryLipstickPic返回参数结构体
 *
 * @method string getResultImage() 获取RspImgType 为 base64 时，返回处理后的图片 base64 数据。默认返回base64
 * @method void setResultImage(string $ResultImage) 设置RspImgType 为 base64 时，返回处理后的图片 base64 数据。默认返回base64
 * @method string getResultUrl() 获取RspImgType 为 url 时，返回处理后的图片 url 数据。
 * @method void setResultUrl(string $ResultUrl) 设置RspImgType 为 url 时，返回处理后的图片 url 数据。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class TryLipstickPicResponse extends AbstractModel
{
    /**
     * @var string RspImgType 为 base64 时，返回处理后的图片 base64 数据。默认返回base64
     */
    public $ResultImage;

    /**
     * @var string RspImgType 为 url 时，返回处理后的图片 url 数据。
     */
    public $ResultUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResultImage RspImgType 为 base64 时，返回处理后的图片 base64 数据。默认返回base64
     * @param string $ResultUrl RspImgType 为 url 时，返回处理后的图片 url 数据。
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
        if (array_key_exists("ResultImage",$param) and $param["ResultImage"] !== null) {
            $this->ResultImage = $param["ResultImage"];
        }

        if (array_key_exists("ResultUrl",$param) and $param["ResultUrl"] !== null) {
            $this->ResultUrl = $param["ResultUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
