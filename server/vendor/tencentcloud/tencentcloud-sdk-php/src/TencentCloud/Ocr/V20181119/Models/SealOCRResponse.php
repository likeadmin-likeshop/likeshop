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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SealOCR返回参数结构体
 *
 * @method string getSealBody() 获取印章内容
 * @method void setSealBody(string $SealBody) 设置印章内容
 * @method Rect getLocation() 获取印章坐标
 * @method void setLocation(Rect $Location) 设置印章坐标
 * @method array getOtherTexts() 获取其它文本内容
 * @method void setOtherTexts(array $OtherTexts) 设置其它文本内容
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SealOCRResponse extends AbstractModel
{
    /**
     * @var string 印章内容
     */
    public $SealBody;

    /**
     * @var Rect 印章坐标
     */
    public $Location;

    /**
     * @var array 其它文本内容
     */
    public $OtherTexts;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SealBody 印章内容
     * @param Rect $Location 印章坐标
     * @param array $OtherTexts 其它文本内容
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
        if (array_key_exists("SealBody",$param) and $param["SealBody"] !== null) {
            $this->SealBody = $param["SealBody"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Rect();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("OtherTexts",$param) and $param["OtherTexts"] !== null) {
            $this->OtherTexts = $param["OtherTexts"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
