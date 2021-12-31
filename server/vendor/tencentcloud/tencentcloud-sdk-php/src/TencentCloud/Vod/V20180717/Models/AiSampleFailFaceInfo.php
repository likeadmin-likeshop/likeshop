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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 样本管理，处理失败的人脸信息
 *
 * @method integer getIndex() 获取对应入参 FaceContents 中错误图片下标，从 0 开始。
 * @method void setIndex(integer $Index) 设置对应入参 FaceContents 中错误图片下标，从 0 开始。
 * @method integer getErrCode() 获取错误码，取值：
<li>0：成功；</li>
<li>其他：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码，取值：
<li>0：成功；</li>
<li>其他：失败。</li>
 * @method string getMessage() 获取错误描述。
 * @method void setMessage(string $Message) 设置错误描述。
 */
class AiSampleFailFaceInfo extends AbstractModel
{
    /**
     * @var integer 对应入参 FaceContents 中错误图片下标，从 0 开始。
     */
    public $Index;

    /**
     * @var integer 错误码，取值：
<li>0：成功；</li>
<li>其他：失败。</li>
     */
    public $ErrCode;

    /**
     * @var string 错误描述。
     */
    public $Message;

    /**
     * @param integer $Index 对应入参 FaceContents 中错误图片下标，从 0 开始。
     * @param integer $ErrCode 错误码，取值：
<li>0：成功；</li>
<li>其他：失败。</li>
     * @param string $Message 错误描述。
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
