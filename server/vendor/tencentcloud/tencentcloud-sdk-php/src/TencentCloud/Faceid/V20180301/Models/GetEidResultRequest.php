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
 * GetEidResult请求参数结构体
 *
 * @method string getEidToken() 获取人脸核身流程的标识，调用GetEidToken接口时生成的。
 * @method void setEidToken(string $EidToken) 设置人脸核身流程的标识，调用GetEidToken接口时生成的。
 * @method string getInfoType() 获取指定拉取的结果信息，取值（0：全部；1：文本类；2：身份证信息；3：最佳截图信息）。
如 13表示拉取文本类、最佳截图信息。
默认值：0
 * @method void setInfoType(string $InfoType) 设置指定拉取的结果信息，取值（0：全部；1：文本类；2：身份证信息；3：最佳截图信息）。
如 13表示拉取文本类、最佳截图信息。
默认值：0
 * @method integer getBestFramesCount() 获取从活体视频中截取一定张数的最佳帧。默认为0，最大为3，超出3的最多只给3张。（InfoType需要包含3）
 * @method void setBestFramesCount(integer $BestFramesCount) 设置从活体视频中截取一定张数的最佳帧。默认为0，最大为3，超出3的最多只给3张。（InfoType需要包含3）
 */
class GetEidResultRequest extends AbstractModel
{
    /**
     * @var string 人脸核身流程的标识，调用GetEidToken接口时生成的。
     */
    public $EidToken;

    /**
     * @var string 指定拉取的结果信息，取值（0：全部；1：文本类；2：身份证信息；3：最佳截图信息）。
如 13表示拉取文本类、最佳截图信息。
默认值：0
     */
    public $InfoType;

    /**
     * @var integer 从活体视频中截取一定张数的最佳帧。默认为0，最大为3，超出3的最多只给3张。（InfoType需要包含3）
     */
    public $BestFramesCount;

    /**
     * @param string $EidToken 人脸核身流程的标识，调用GetEidToken接口时生成的。
     * @param string $InfoType 指定拉取的结果信息，取值（0：全部；1：文本类；2：身份证信息；3：最佳截图信息）。
如 13表示拉取文本类、最佳截图信息。
默认值：0
     * @param integer $BestFramesCount 从活体视频中截取一定张数的最佳帧。默认为0，最大为3，超出3的最多只给3张。（InfoType需要包含3）
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
        if (array_key_exists("EidToken",$param) and $param["EidToken"] !== null) {
            $this->EidToken = $param["EidToken"];
        }

        if (array_key_exists("InfoType",$param) and $param["InfoType"] !== null) {
            $this->InfoType = $param["InfoType"];
        }

        if (array_key_exists("BestFramesCount",$param) and $param["BestFramesCount"] !== null) {
            $this->BestFramesCount = $param["BestFramesCount"];
        }
    }
}
