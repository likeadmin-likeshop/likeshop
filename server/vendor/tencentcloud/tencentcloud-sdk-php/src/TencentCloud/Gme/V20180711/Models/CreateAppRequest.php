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
 * CreateApp请求参数结构体
 *
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method integer getProjectId() 获取腾讯云项目ID，默认为0，表示默认项目
 * @method void setProjectId(integer $ProjectId) 设置腾讯云项目ID，默认为0，表示默认项目
 * @method array getEngineList() 获取需要支持的引擎列表，默认全选。
 * @method void setEngineList(array $EngineList) 设置需要支持的引擎列表，默认全选。
 * @method array getRegionList() 获取服务区域列表，默认全选。
 * @method void setRegionList(array $RegionList) 设置服务区域列表，默认全选。
 * @method RealtimeSpeechConf getRealtimeSpeechConf() 获取实时语音服务配置数据
 * @method void setRealtimeSpeechConf(RealtimeSpeechConf $RealtimeSpeechConf) 设置实时语音服务配置数据
 * @method VoiceMessageConf getVoiceMessageConf() 获取语音消息及转文本服务配置数据
 * @method void setVoiceMessageConf(VoiceMessageConf $VoiceMessageConf) 设置语音消息及转文本服务配置数据
 * @method VoiceFilterConf getVoiceFilterConf() 获取语音分析服务配置数据
 * @method void setVoiceFilterConf(VoiceFilterConf $VoiceFilterConf) 设置语音分析服务配置数据
 * @method array getTags() 获取需要添加的标签列表
 * @method void setTags(array $Tags) 设置需要添加的标签列表
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var integer 腾讯云项目ID，默认为0，表示默认项目
     */
    public $ProjectId;

    /**
     * @var array 需要支持的引擎列表，默认全选。
     */
    public $EngineList;

    /**
     * @var array 服务区域列表，默认全选。
     */
    public $RegionList;

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
     * @var array 需要添加的标签列表
     */
    public $Tags;

    /**
     * @param string $AppName 应用名称
     * @param integer $ProjectId 腾讯云项目ID，默认为0，表示默认项目
     * @param array $EngineList 需要支持的引擎列表，默认全选。
     * @param array $RegionList 服务区域列表，默认全选。
     * @param RealtimeSpeechConf $RealtimeSpeechConf 实时语音服务配置数据
     * @param VoiceMessageConf $VoiceMessageConf 语音消息及转文本服务配置数据
     * @param VoiceFilterConf $VoiceFilterConf 语音分析服务配置数据
     * @param array $Tags 需要添加的标签列表
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("EngineList",$param) and $param["EngineList"] !== null) {
            $this->EngineList = $param["EngineList"];
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = $param["RegionList"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
