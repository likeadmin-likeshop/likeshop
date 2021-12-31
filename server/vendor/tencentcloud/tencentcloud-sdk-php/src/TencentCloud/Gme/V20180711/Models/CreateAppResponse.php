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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApp的输出参数
 *
 * @method integer getBizId() 获取应用ID，由后台自动生成。
 * @method void setBizId(integer $BizId) 设置应用ID，由后台自动生成。
 * @method string getAppName() 获取应用名称，透传输入参数的AppName
 * @method void setAppName(string $AppName) 设置应用名称，透传输入参数的AppName
 * @method integer getProjectId() 获取项目ID，透传输入的ProjectId
 * @method void setProjectId(integer $ProjectId) 设置项目ID，透传输入的ProjectId
 * @method string getSecretKey() 获取应用密钥，GME SDK初始化时使用
 * @method void setSecretKey(string $SecretKey) 设置应用密钥，GME SDK初始化时使用
 * @method integer getCreateTime() 获取服务创建时间戳
 * @method void setCreateTime(integer $CreateTime) 设置服务创建时间戳
 * @method RealtimeSpeechConf getRealtimeSpeechConf() 获取实时语音服务配置数据
 * @method void setRealtimeSpeechConf(RealtimeSpeechConf $RealtimeSpeechConf) 设置实时语音服务配置数据
 * @method VoiceMessageConf getVoiceMessageConf() 获取语音消息及转文本服务配置数据
 * @method void setVoiceMessageConf(VoiceMessageConf $VoiceMessageConf) 设置语音消息及转文本服务配置数据
 * @method VoiceFilterConf getVoiceFilterConf() 获取语音分析服务配置数据
 * @method void setVoiceFilterConf(VoiceFilterConf $VoiceFilterConf) 设置语音分析服务配置数据
 */
class CreateAppResponse extends AbstractModel
{
    /**
     * @var integer 应用ID，由后台自动生成。
     */
    public $BizId;

    /**
     * @var string 应用名称，透传输入参数的AppName
     */
    public $AppName;

    /**
     * @var integer 项目ID，透传输入的ProjectId
     */
    public $ProjectId;

    /**
     * @var string 应用密钥，GME SDK初始化时使用
     */
    public $SecretKey;

    /**
     * @var integer 服务创建时间戳
     */
    public $CreateTime;

    /**
     * @var RealtimeSpeechConf 实时语音服务配置数据
     */
    public $RealtimeSpeechConf;

    /**
     * @var VoiceMessageConf 语音消息及转文本服务配置数据
     */
    public $VoiceMessageConf;

    /**
     * @var VoiceFilterConf 语音分析服务配置数据
     */
    public $VoiceFilterConf;

    /**
     * @param integer $BizId 应用ID，由后台自动生成。
     * @param string $AppName 应用名称，透传输入参数的AppName
     * @param integer $ProjectId 项目ID，透传输入的ProjectId
     * @param string $SecretKey 应用密钥，GME SDK初始化时使用
     * @param integer $CreateTime 服务创建时间戳
     * @param RealtimeSpeechConf $RealtimeSpeechConf 实时语音服务配置数据
     * @param VoiceMessageConf $VoiceMessageConf 语音消息及转文本服务配置数据
     * @param VoiceFilterConf $VoiceFilterConf 语音分析服务配置数据
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RealtimeSpeechConf",$param) and $param["RealtimeSpeechConf"] !== null) {
            $this->RealtimeSpeechConf = new RealtimeSpeechConf();
            $this->RealtimeSpeechConf->deserialize($param["RealtimeSpeechConf"]);
        }

        if (array_key_exists("VoiceMessageConf",$param) and $param["VoiceMessageConf"] !== null) {
            $this->VoiceMessageConf = new VoiceMessageConf();
            $this->VoiceMessageConf->deserialize($param["VoiceMessageConf"]);
        }

        if (array_key_exists("VoiceFilterConf",$param) and $param["VoiceFilterConf"] !== null) {
            $this->VoiceFilterConf = new VoiceFilterConf();
            $this->VoiceFilterConf->deserialize($param["VoiceFilterConf"]);
        }
    }
}
