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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EHOCR请求参数结构体
 *
 * @method string getImage() 获取图片所在的url或base64编码后的图像数据，依据InputType而定
 * @method void setImage(string $Image) 设置图片所在的url或base64编码后的图像数据，依据InputType而定
 * @method integer getInputType() 获取输出图片类型，0 表示 Image 字段是图片所在的 url，1 表示 Image 字段是 base64 编码后的图像数据
 * @method void setInputType(integer $InputType) 设置输出图片类型，0 表示 Image 字段是图片所在的 url，1 表示 Image 字段是 base64 编码后的图像数据
 * @method string getEccAppid() 获取业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
 * @method void setEccAppid(string $EccAppid) 设置业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
 * @method string getSessionId() 获取图像识别唯一标识，一次识别一个 SessionId，使用识别功能时 SessionId 可用于使用文本批改接口，此时按图像批改价格收费；如使用文本批改接口时没有传入 SessionId，则需要收取文本批改的费用
 * @method void setSessionId(string $SessionId) 设置图像识别唯一标识，一次识别一个 SessionId，使用识别功能时 SessionId 可用于使用文本批改接口，此时按图像批改价格收费；如使用文本批改接口时没有传入 SessionId，则需要收取文本批改的费用
 * @method integer getServerType() 获取服务类型，0：“图像识别”，只返回识别结果，1：“图像批改”，同时返回识别结果与批改结果。默认为 0
 * @method void setServerType(integer $ServerType) 设置服务类型，0：“图像识别”，只返回识别结果，1：“图像批改”，同时返回识别结果与批改结果。默认为 0
 * @method string getTitle() 获取作文题目，可选参数
 * @method void setTitle(string $Title) 设置作文题目，可选参数
 * @method string getGrade() 获取年级标准， 默认以 cet4 为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及 cet4 和 cet6 分别表示 英语4级和6级。
 * @method void setGrade(string $Grade) 设置年级标准， 默认以 cet4 为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及 cet4 和 cet6 分别表示 英语4级和6级。
 * @method string getRequirement() 获取作文提纲，可选参数，作文的写作要求。
 * @method void setRequirement(string $Requirement) 设置作文提纲，可选参数，作文的写作要求。
 * @method string getModelTitle() 获取范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
 * @method void setModelTitle(string $ModelTitle) 设置范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
 * @method string getModelContent() 获取范文内容，可选参数，同上，范文的正文部分。
 * @method void setModelContent(string $ModelContent) 设置范文内容，可选参数，同上，范文的正文部分。
 * @method integer getIsAsync() 获取异步模式标识，0：同步模式，1：异步模式。默认为同步模式
 * @method void setIsAsync(integer $IsAsync) 设置异步模式标识，0：同步模式，1：异步模式。默认为同步模式
 */
class EHOCRRequest extends AbstractModel
{
    /**
     * @var string 图片所在的url或base64编码后的图像数据，依据InputType而定
     */
    public $Image;

    /**
     * @var integer 输出图片类型，0 表示 Image 字段是图片所在的 url，1 表示 Image 字段是 base64 编码后的图像数据
     */
    public $InputType;

    /**
     * @var string 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
     */
    public $EccAppid;

    /**
     * @var string 图像识别唯一标识，一次识别一个 SessionId，使用识别功能时 SessionId 可用于使用文本批改接口，此时按图像批改价格收费；如使用文本批改接口时没有传入 SessionId，则需要收取文本批改的费用
     */
    public $SessionId;

    /**
     * @var integer 服务类型，0：“图像识别”，只返回识别结果，1：“图像批改”，同时返回识别结果与批改结果。默认为 0
     */
    public $ServerType;

    /**
     * @var string 作文题目，可选参数
     */
    public $Title;

    /**
     * @var string 年级标准， 默认以 cet4 为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及 cet4 和 cet6 分别表示 英语4级和6级。
     */
    public $Grade;

    /**
     * @var string 作文提纲，可选参数，作文的写作要求。
     */
    public $Requirement;

    /**
     * @var string 范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
     */
    public $ModelTitle;

    /**
     * @var string 范文内容，可选参数，同上，范文的正文部分。
     */
    public $ModelContent;

    /**
     * @var integer 异步模式标识，0：同步模式，1：异步模式。默认为同步模式
     */
    public $IsAsync;

    /**
     * @param string $Image 图片所在的url或base64编码后的图像数据，依据InputType而定
     * @param integer $InputType 输出图片类型，0 表示 Image 字段是图片所在的 url，1 表示 Image 字段是 base64 编码后的图像数据
     * @param string $EccAppid 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
     * @param string $SessionId 图像识别唯一标识，一次识别一个 SessionId，使用识别功能时 SessionId 可用于使用文本批改接口，此时按图像批改价格收费；如使用文本批改接口时没有传入 SessionId，则需要收取文本批改的费用
     * @param integer $ServerType 服务类型，0：“图像识别”，只返回识别结果，1：“图像批改”，同时返回识别结果与批改结果。默认为 0
     * @param string $Title 作文题目，可选参数
     * @param string $Grade 年级标准， 默认以 cet4 为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及 cet4 和 cet6 分别表示 英语4级和6级。
     * @param string $Requirement 作文提纲，可选参数，作文的写作要求。
     * @param string $ModelTitle 范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
     * @param string $ModelContent 范文内容，可选参数，同上，范文的正文部分。
     * @param integer $IsAsync 异步模式标识，0：同步模式，1：异步模式。默认为同步模式
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

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("EccAppid",$param) and $param["EccAppid"] !== null) {
            $this->EccAppid = $param["EccAppid"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("Requirement",$param) and $param["Requirement"] !== null) {
            $this->Requirement = $param["Requirement"];
        }

        if (array_key_exists("ModelTitle",$param) and $param["ModelTitle"] !== null) {
            $this->ModelTitle = $param["ModelTitle"];
        }

        if (array_key_exists("ModelContent",$param) and $param["ModelContent"] !== null) {
            $this->ModelContent = $param["ModelContent"];
        }

        if (array_key_exists("IsAsync",$param) and $param["IsAsync"] !== null) {
            $this->IsAsync = $param["IsAsync"];
        }
    }
}
