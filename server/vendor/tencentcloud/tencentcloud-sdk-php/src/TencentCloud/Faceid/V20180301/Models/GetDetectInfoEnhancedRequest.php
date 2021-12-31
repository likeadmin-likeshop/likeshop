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
 * GetDetectInfoEnhanced请求参数结构体
 *
 * @method string getBizToken() 获取人脸核身流程的标识，调用DetectAuth接口时生成。
 * @method void setBizToken(string $BizToken) 设置人脸核身流程的标识，调用DetectAuth接口时生成。
 * @method string getRuleId() 获取用于细分客户使用场景，由腾讯侧在线下对接时分配。
 * @method void setRuleId(string $RuleId) 设置用于细分客户使用场景，由腾讯侧在线下对接时分配。
 * @method string getInfoType() 获取指定拉取的结果信息，取值（0：全部；1：文本类；2：身份证信息；3：视频最佳截图信息）。
如 13表示拉取文本类、视频最佳截图信息。
默认值：0
 * @method void setInfoType(string $InfoType) 设置指定拉取的结果信息，取值（0：全部；1：文本类；2：身份证信息；3：视频最佳截图信息）。
如 13表示拉取文本类、视频最佳截图信息。
默认值：0
 * @method integer getBestFramesCount() 获取从活体视频中截取一定张数的最佳帧（仅部分服务支持，若需使用请与慧眼小助手沟通）。默认为0，最大为10，超出10的最多只给10张。（InfoType需要包含3）
 * @method void setBestFramesCount(integer $BestFramesCount) 设置从活体视频中截取一定张数的最佳帧（仅部分服务支持，若需使用请与慧眼小助手沟通）。默认为0，最大为10，超出10的最多只给10张。（InfoType需要包含3）
 * @method boolean getIsCutIdCardImage() 获取是否对身份证照片进行裁边。默认为false。（InfoType需要包含2）
 * @method void setIsCutIdCardImage(boolean $IsCutIdCardImage) 设置是否对身份证照片进行裁边。默认为false。（InfoType需要包含2）
 * @method boolean getIsNeedIdCardAvatar() 获取是否需要从身份证中抠出头像。默认为false。（InfoType需要包含2）
 * @method void setIsNeedIdCardAvatar(boolean $IsNeedIdCardAvatar) 设置是否需要从身份证中抠出头像。默认为false。（InfoType需要包含2）
 * @method boolean getIsEncrypt() 获取是否需要对返回中的敏感信息进行加密。其中敏感信息包括：Response.Text.IdCard、Response.Text.Name、Response.Text.OcrIdCard、Response.Text.OcrName
 * @method void setIsEncrypt(boolean $IsEncrypt) 设置是否需要对返回中的敏感信息进行加密。其中敏感信息包括：Response.Text.IdCard、Response.Text.Name、Response.Text.OcrIdCard、Response.Text.OcrName
 */
class GetDetectInfoEnhancedRequest extends AbstractModel
{
    /**
     * @var string 人脸核身流程的标识，调用DetectAuth接口时生成。
     */
    public $BizToken;

    /**
     * @var string 用于细分客户使用场景，由腾讯侧在线下对接时分配。
     */
    public $RuleId;

    /**
     * @var string 指定拉取的结果信息，取值（0：全部；1：文本类；2：身份证信息；3：视频最佳截图信息）。
如 13表示拉取文本类、视频最佳截图信息。
默认值：0
     */
    public $InfoType;

    /**
     * @var integer 从活体视频中截取一定张数的最佳帧（仅部分服务支持，若需使用请与慧眼小助手沟通）。默认为0，最大为10，超出10的最多只给10张。（InfoType需要包含3）
     */
    public $BestFramesCount;

    /**
     * @var boolean 是否对身份证照片进行裁边。默认为false。（InfoType需要包含2）
     */
    public $IsCutIdCardImage;

    /**
     * @var boolean 是否需要从身份证中抠出头像。默认为false。（InfoType需要包含2）
     */
    public $IsNeedIdCardAvatar;

    /**
     * @var boolean 是否需要对返回中的敏感信息进行加密。其中敏感信息包括：Response.Text.IdCard、Response.Text.Name、Response.Text.OcrIdCard、Response.Text.OcrName
     */
    public $IsEncrypt;

    /**
     * @param string $BizToken 人脸核身流程的标识，调用DetectAuth接口时生成。
     * @param string $RuleId 用于细分客户使用场景，由腾讯侧在线下对接时分配。
     * @param string $InfoType 指定拉取的结果信息，取值（0：全部；1：文本类；2：身份证信息；3：视频最佳截图信息）。
如 13表示拉取文本类、视频最佳截图信息。
默认值：0
     * @param integer $BestFramesCount 从活体视频中截取一定张数的最佳帧（仅部分服务支持，若需使用请与慧眼小助手沟通）。默认为0，最大为10，超出10的最多只给10张。（InfoType需要包含3）
     * @param boolean $IsCutIdCardImage 是否对身份证照片进行裁边。默认为false。（InfoType需要包含2）
     * @param boolean $IsNeedIdCardAvatar 是否需要从身份证中抠出头像。默认为false。（InfoType需要包含2）
     * @param boolean $IsEncrypt 是否需要对返回中的敏感信息进行加密。其中敏感信息包括：Response.Text.IdCard、Response.Text.Name、Response.Text.OcrIdCard、Response.Text.OcrName
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
        if (array_key_exists("BizToken",$param) and $param["BizToken"] !== null) {
            $this->BizToken = $param["BizToken"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("InfoType",$param) and $param["InfoType"] !== null) {
            $this->InfoType = $param["InfoType"];
        }

        if (array_key_exists("BestFramesCount",$param) and $param["BestFramesCount"] !== null) {
            $this->BestFramesCount = $param["BestFramesCount"];
        }

        if (array_key_exists("IsCutIdCardImage",$param) and $param["IsCutIdCardImage"] !== null) {
            $this->IsCutIdCardImage = $param["IsCutIdCardImage"];
        }

        if (array_key_exists("IsNeedIdCardAvatar",$param) and $param["IsNeedIdCardAvatar"] !== null) {
            $this->IsNeedIdCardAvatar = $param["IsNeedIdCardAvatar"];
        }

        if (array_key_exists("IsEncrypt",$param) and $param["IsEncrypt"] !== null) {
            $this->IsEncrypt = $param["IsEncrypt"];
        }
    }
}
