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
 * ECC请求参数结构体
 *
 * @method string getContent() 获取作文文本，必填
 * @method void setContent(string $Content) 设置作文文本，必填
 * @method string getTitle() 获取作文题目，可选参数
 * @method void setTitle(string $Title) 设置作文题目，可选参数
 * @method string getGrade() 获取年级标准， 默认以cet4为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及cet4和cet6 分别表示 英语4级和6级。
 * @method void setGrade(string $Grade) 设置年级标准， 默认以cet4为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及cet4和cet6 分别表示 英语4级和6级。
 * @method string getRequirement() 获取作文提纲，可选参数，作文的写作要求。
 * @method void setRequirement(string $Requirement) 设置作文提纲，可选参数，作文的写作要求。
 * @method string getModelTitle() 获取范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
 * @method void setModelTitle(string $ModelTitle) 设置范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
 * @method string getModelContent() 获取范文内容，可选参数，同上，范文的正文部分。
 * @method void setModelContent(string $ModelContent) 设置范文内容，可选参数，同上，范文的正文部分。
 * @method string getEccAppid() 获取业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
 * @method void setEccAppid(string $EccAppid) 设置业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
 * @method integer getIsAsync() 获取异步模式标识，0：同步模式，1：异步模式，默认为同步模式
 * @method void setIsAsync(integer $IsAsync) 设置异步模式标识，0：同步模式，1：异步模式，默认为同步模式
 * @method string getSessionId() 获取图像识别唯一标识，一次识别一个 SessionId。当传入此前识别接口使用过的 SessionId，则本次批改按图像批改价格收费；如使用了识别接口且本次没有传入 SessionId，则需要加取文本批改的费用；如果直接使用文本批改接口，则只收取文本批改的费用
 * @method void setSessionId(string $SessionId) 设置图像识别唯一标识，一次识别一个 SessionId。当传入此前识别接口使用过的 SessionId，则本次批改按图像批改价格收费；如使用了识别接口且本次没有传入 SessionId，则需要加取文本批改的费用；如果直接使用文本批改接口，则只收取文本批改的费用
 */
class ECCRequest extends AbstractModel
{
    /**
     * @var string 作文文本，必填
     */
    public $Content;

    /**
     * @var string 作文题目，可选参数
     */
    public $Title;

    /**
     * @var string 年级标准， 默认以cet4为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及cet4和cet6 分别表示 英语4级和6级。
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
     * @var string 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
     */
    public $EccAppid;

    /**
     * @var integer 异步模式标识，0：同步模式，1：异步模式，默认为同步模式
     */
    public $IsAsync;

    /**
     * @var string 图像识别唯一标识，一次识别一个 SessionId。当传入此前识别接口使用过的 SessionId，则本次批改按图像批改价格收费；如使用了识别接口且本次没有传入 SessionId，则需要加取文本批改的费用；如果直接使用文本批改接口，则只收取文本批改的费用
     */
    public $SessionId;

    /**
     * @param string $Content 作文文本，必填
     * @param string $Title 作文题目，可选参数
     * @param string $Grade 年级标准， 默认以cet4为标准，取值与意义如下：elementary 小学，grade7 grade8 grade9分别对应初一，初二，初三。 grade10 grade11 grade12 分别对应高一，高二，高三，以及cet4和cet6 分别表示 英语4级和6级。
     * @param string $Requirement 作文提纲，可选参数，作文的写作要求。
     * @param string $ModelTitle 范文标题，可选参数，本接口可以依据提供的范文对作文进行评分。
     * @param string $ModelContent 范文内容，可选参数，同上，范文的正文部分。
     * @param string $EccAppid 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
     * @param integer $IsAsync 异步模式标识，0：同步模式，1：异步模式，默认为同步模式
     * @param string $SessionId 图像识别唯一标识，一次识别一个 SessionId。当传入此前识别接口使用过的 SessionId，则本次批改按图像批改价格收费；如使用了识别接口且本次没有传入 SessionId，则需要加取文本批改的费用；如果直接使用文本批改接口，则只收取文本批改的费用
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
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

        if (array_key_exists("EccAppid",$param) and $param["EccAppid"] !== null) {
            $this->EccAppid = $param["EccAppid"];
        }

        if (array_key_exists("IsAsync",$param) and $param["IsAsync"] !== null) {
            $this->IsAsync = $param["IsAsync"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
