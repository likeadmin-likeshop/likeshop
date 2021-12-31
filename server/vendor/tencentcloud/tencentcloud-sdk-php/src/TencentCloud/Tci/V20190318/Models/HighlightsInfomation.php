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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 精彩集锦信息
 *
 * @method array getConcentration() 获取专注的起始与终止时间信息。
 * @method void setConcentration(array $Concentration) 设置专注的起始与终止时间信息。
 * @method array getSmile() 获取微笑的起始与终止时间信息。
 * @method void setSmile(array $Smile) 设置微笑的起始与终止时间信息。
 * @method string getHighlightsUrl() 获取高光集锦视频地址，保存剪辑好的视频地址。
 * @method void setHighlightsUrl(string $HighlightsUrl) 设置高光集锦视频地址，保存剪辑好的视频地址。
 * @method string getPersonId() 获取片段中识别出来的人脸ID。
 * @method void setPersonId(string $PersonId) 设置片段中识别出来的人脸ID。
 */
class HighlightsInfomation extends AbstractModel
{
    /**
     * @var array 专注的起始与终止时间信息。
     */
    public $Concentration;

    /**
     * @var array 微笑的起始与终止时间信息。
     */
    public $Smile;

    /**
     * @var string 高光集锦视频地址，保存剪辑好的视频地址。
     */
    public $HighlightsUrl;

    /**
     * @var string 片段中识别出来的人脸ID。
     */
    public $PersonId;

    /**
     * @param array $Concentration 专注的起始与终止时间信息。
     * @param array $Smile 微笑的起始与终止时间信息。
     * @param string $HighlightsUrl 高光集锦视频地址，保存剪辑好的视频地址。
     * @param string $PersonId 片段中识别出来的人脸ID。
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
        if (array_key_exists("Concentration",$param) and $param["Concentration"] !== null) {
            $this->Concentration = [];
            foreach ($param["Concentration"] as $key => $value){
                $obj = new TimeType();
                $obj->deserialize($value);
                array_push($this->Concentration, $obj);
            }
        }

        if (array_key_exists("Smile",$param) and $param["Smile"] !== null) {
            $this->Smile = [];
            foreach ($param["Smile"] as $key => $value){
                $obj = new TimeType();
                $obj->deserialize($value);
                array_push($this->Smile, $obj);
            }
        }

        if (array_key_exists("HighlightsUrl",$param) and $param["HighlightsUrl"] !== null) {
            $this->HighlightsUrl = $param["HighlightsUrl"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }
    }
}
