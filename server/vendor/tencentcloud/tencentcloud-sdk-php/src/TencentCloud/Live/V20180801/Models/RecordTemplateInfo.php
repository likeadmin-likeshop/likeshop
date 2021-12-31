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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录制模板信息
 *
 * @method integer getTemplateId() 获取模板 ID。
 * @method void setTemplateId(integer $TemplateId) 设置模板 ID。
 * @method string getTemplateName() 获取模板名称。
 * @method void setTemplateName(string $TemplateName) 设置模板名称。
 * @method string getDescription() 获取描述信息。
 * @method void setDescription(string $Description) 设置描述信息。
 * @method RecordParam getFlvParam() 获取FLV 录制参数。
 * @method void setFlvParam(RecordParam $FlvParam) 设置FLV 录制参数。
 * @method RecordParam getHlsParam() 获取HLS 录制参数。
 * @method void setHlsParam(RecordParam $HlsParam) 设置HLS 录制参数。
 * @method RecordParam getMp4Param() 获取MP4 录制参数。
 * @method void setMp4Param(RecordParam $Mp4Param) 设置MP4 录制参数。
 * @method RecordParam getAacParam() 获取AAC 录制参数。
 * @method void setAacParam(RecordParam $AacParam) 设置AAC 录制参数。
 * @method integer getIsDelayLive() 获取0：普通直播，
1：慢直播。
 * @method void setIsDelayLive(integer $IsDelayLive) 设置0：普通直播，
1：慢直播。
 * @method HlsSpecialParam getHlsSpecialParam() 获取HLS 录制定制参数
 * @method void setHlsSpecialParam(HlsSpecialParam $HlsSpecialParam) 设置HLS 录制定制参数
 * @method RecordParam getMp3Param() 获取MP3 录制参数。
 * @method void setMp3Param(RecordParam $Mp3Param) 设置MP3 录制参数。
 */
class RecordTemplateInfo extends AbstractModel
{
    /**
     * @var integer 模板 ID。
     */
    public $TemplateId;

    /**
     * @var string 模板名称。
     */
    public $TemplateName;

    /**
     * @var string 描述信息。
     */
    public $Description;

    /**
     * @var RecordParam FLV 录制参数。
     */
    public $FlvParam;

    /**
     * @var RecordParam HLS 录制参数。
     */
    public $HlsParam;

    /**
     * @var RecordParam MP4 录制参数。
     */
    public $Mp4Param;

    /**
     * @var RecordParam AAC 录制参数。
     */
    public $AacParam;

    /**
     * @var integer 0：普通直播，
1：慢直播。
     */
    public $IsDelayLive;

    /**
     * @var HlsSpecialParam HLS 录制定制参数
     */
    public $HlsSpecialParam;

    /**
     * @var RecordParam MP3 录制参数。
     */
    public $Mp3Param;

    /**
     * @param integer $TemplateId 模板 ID。
     * @param string $TemplateName 模板名称。
     * @param string $Description 描述信息。
     * @param RecordParam $FlvParam FLV 录制参数。
     * @param RecordParam $HlsParam HLS 录制参数。
     * @param RecordParam $Mp4Param MP4 录制参数。
     * @param RecordParam $AacParam AAC 录制参数。
     * @param integer $IsDelayLive 0：普通直播，
1：慢直播。
     * @param HlsSpecialParam $HlsSpecialParam HLS 录制定制参数
     * @param RecordParam $Mp3Param MP3 录制参数。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FlvParam",$param) and $param["FlvParam"] !== null) {
            $this->FlvParam = new RecordParam();
            $this->FlvParam->deserialize($param["FlvParam"]);
        }

        if (array_key_exists("HlsParam",$param) and $param["HlsParam"] !== null) {
            $this->HlsParam = new RecordParam();
            $this->HlsParam->deserialize($param["HlsParam"]);
        }

        if (array_key_exists("Mp4Param",$param) and $param["Mp4Param"] !== null) {
            $this->Mp4Param = new RecordParam();
            $this->Mp4Param->deserialize($param["Mp4Param"]);
        }

        if (array_key_exists("AacParam",$param) and $param["AacParam"] !== null) {
            $this->AacParam = new RecordParam();
            $this->AacParam->deserialize($param["AacParam"]);
        }

        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }

        if (array_key_exists("HlsSpecialParam",$param) and $param["HlsSpecialParam"] !== null) {
            $this->HlsSpecialParam = new HlsSpecialParam();
            $this->HlsSpecialParam->deserialize($param["HlsSpecialParam"]);
        }

        if (array_key_exists("Mp3Param",$param) and $param["Mp3Param"] !== null) {
            $this->Mp3Param = new RecordParam();
            $this->Mp3Param->deserialize($param["Mp3Param"]);
        }
    }
}
