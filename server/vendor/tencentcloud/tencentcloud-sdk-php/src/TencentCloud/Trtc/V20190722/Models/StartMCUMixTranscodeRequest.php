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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartMCUMixTranscode请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的SDKAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SDKAppId。
 * @method integer getRoomId() 获取房间号。
 * @method void setRoomId(integer $RoomId) 设置房间号。
 * @method OutputParams getOutputParams() 获取混流输出控制参数。
 * @method void setOutputParams(OutputParams $OutputParams) 设置混流输出控制参数。
 * @method EncodeParams getEncodeParams() 获取混流输出编码参数。
 * @method void setEncodeParams(EncodeParams $EncodeParams) 设置混流输出编码参数。
 * @method LayoutParams getLayoutParams() 获取混流输出布局参数。
 * @method void setLayoutParams(LayoutParams $LayoutParams) 设置混流输出布局参数。
 * @method PublishCdnParams getPublishCdnParams() 获取第三方CDN转推参数。
 * @method void setPublishCdnParams(PublishCdnParams $PublishCdnParams) 设置第三方CDN转推参数。
 */
class StartMCUMixTranscodeRequest extends AbstractModel
{
    /**
     * @var integer TRTC的SDKAppId。
     */
    public $SdkAppId;

    /**
     * @var integer 房间号。
     */
    public $RoomId;

    /**
     * @var OutputParams 混流输出控制参数。
     */
    public $OutputParams;

    /**
     * @var EncodeParams 混流输出编码参数。
     */
    public $EncodeParams;

    /**
     * @var LayoutParams 混流输出布局参数。
     */
    public $LayoutParams;

    /**
     * @var PublishCdnParams 第三方CDN转推参数。
     */
    public $PublishCdnParams;

    /**
     * @param integer $SdkAppId TRTC的SDKAppId。
     * @param integer $RoomId 房间号。
     * @param OutputParams $OutputParams 混流输出控制参数。
     * @param EncodeParams $EncodeParams 混流输出编码参数。
     * @param LayoutParams $LayoutParams 混流输出布局参数。
     * @param PublishCdnParams $PublishCdnParams 第三方CDN转推参数。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("OutputParams",$param) and $param["OutputParams"] !== null) {
            $this->OutputParams = new OutputParams();
            $this->OutputParams->deserialize($param["OutputParams"]);
        }

        if (array_key_exists("EncodeParams",$param) and $param["EncodeParams"] !== null) {
            $this->EncodeParams = new EncodeParams();
            $this->EncodeParams->deserialize($param["EncodeParams"]);
        }

        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = new LayoutParams();
            $this->LayoutParams->deserialize($param["LayoutParams"]);
        }

        if (array_key_exists("PublishCdnParams",$param) and $param["PublishCdnParams"] !== null) {
            $this->PublishCdnParams = new PublishCdnParams();
            $this->PublishCdnParams->deserialize($param["PublishCdnParams"]);
        }
    }
}
