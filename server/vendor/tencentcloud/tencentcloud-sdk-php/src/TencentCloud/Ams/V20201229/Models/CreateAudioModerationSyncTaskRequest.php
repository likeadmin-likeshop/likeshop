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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAudioModerationSyncTask请求参数结构体
 *
 * @method string getBizType() 获取Biztype为策略的具体的编号，用于接口调度，在内容安全控制台中可配置。不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；调用时不传入Biztype代表采用默认的识别策略。
 * @method void setBizType(string $BizType) 设置Biztype为策略的具体的编号，用于接口调度，在内容安全控制台中可配置。不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；调用时不传入Biztype代表采用默认的识别策略。
 * @method string getDataId() 获取数据标识，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
 * @method void setDataId(string $DataId) 设置数据标识，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
 * @method string getFileFormat() 获取音频文件资源格式，当前为mp3，wav，请按照实际文件格式填入
 * @method void setFileFormat(string $FileFormat) 设置音频文件资源格式，当前为mp3，wav，请按照实际文件格式填入
 * @method string getName() 获取文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
 * @method void setName(string $Name) 设置文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
 * @method string getFileContent() 获取数据Base64编码，短音频同步接口仅传入可音频内容；
支持范围：文件大小不能超过5M，时长不可超过60s，码率范围为8-16Kbps；
支持格式：wav、mp3
 * @method void setFileContent(string $FileContent) 设置数据Base64编码，短音频同步接口仅传入可音频内容；
支持范围：文件大小不能超过5M，时长不可超过60s，码率范围为8-16Kbps；
支持格式：wav、mp3
 * @method string getFileUrl() 获取音频资源访问链接，与FileContent参数必须二选一输入；
支持范围：同FileContent；
 * @method void setFileUrl(string $FileUrl) 设置音频资源访问链接，与FileContent参数必须二选一输入；
支持范围：同FileContent；
 */
class CreateAudioModerationSyncTaskRequest extends AbstractModel
{
    /**
     * @var string Biztype为策略的具体的编号，用于接口调度，在内容安全控制台中可配置。不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；调用时不传入Biztype代表采用默认的识别策略。
     */
    public $BizType;

    /**
     * @var string 数据标识，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
     */
    public $DataId;

    /**
     * @var string 音频文件资源格式，当前为mp3，wav，请按照实际文件格式填入
     */
    public $FileFormat;

    /**
     * @var string 文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
     */
    public $Name;

    /**
     * @var string 数据Base64编码，短音频同步接口仅传入可音频内容；
支持范围：文件大小不能超过5M，时长不可超过60s，码率范围为8-16Kbps；
支持格式：wav、mp3
     */
    public $FileContent;

    /**
     * @var string 音频资源访问链接，与FileContent参数必须二选一输入；
支持范围：同FileContent；
     */
    public $FileUrl;

    /**
     * @param string $BizType Biztype为策略的具体的编号，用于接口调度，在内容安全控制台中可配置。不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；调用时不传入Biztype代表采用默认的识别策略。
     * @param string $DataId 数据标识，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
     * @param string $FileFormat 音频文件资源格式，当前为mp3，wav，请按照实际文件格式填入
     * @param string $Name 文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
     * @param string $FileContent 数据Base64编码，短音频同步接口仅传入可音频内容；
支持范围：文件大小不能超过5M，时长不可超过60s，码率范围为8-16Kbps；
支持格式：wav、mp3
     * @param string $FileUrl 音频资源访问链接，与FileContent参数必须二选一输入；
支持范围：同FileContent；
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("FileFormat",$param) and $param["FileFormat"] !== null) {
            $this->FileFormat = $param["FileFormat"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
