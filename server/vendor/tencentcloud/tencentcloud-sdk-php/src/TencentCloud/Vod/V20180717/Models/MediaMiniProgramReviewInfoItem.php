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
 * 小程序审核信息单元
 *
 * @method integer getDefinition() 获取模板id。小程序视频发布的视频所对应的转码模板ID，为0代表原始视频。
 * @method void setDefinition(integer $Definition) 设置模板id。小程序视频发布的视频所对应的转码模板ID，为0代表原始视频。
 * @method MediaMetaData getMetaData() 获取视频元信息。
 * @method void setMetaData(MediaMetaData $MetaData) 设置视频元信息。
 * @method string getUrl() 获取小程序审核视频播放地址。
 * @method void setUrl(string $Url) 设置小程序审核视频播放地址。
 * @method string getReviewResult() 获取小程序视频发布状态：
<li>Pass：成功。</li>
<li>Rejected：未通过。</li>
 * @method void setReviewResult(string $ReviewResult) 设置小程序视频发布状态：
<li>Pass：成功。</li>
<li>Rejected：未通过。</li>
 * @method array getReviewSummary() 获取小程序审核元素。
 * @method void setReviewSummary(array $ReviewSummary) 设置小程序审核元素。
 */
class MediaMiniProgramReviewInfoItem extends AbstractModel
{
    /**
     * @var integer 模板id。小程序视频发布的视频所对应的转码模板ID，为0代表原始视频。
     */
    public $Definition;

    /**
     * @var MediaMetaData 视频元信息。
     */
    public $MetaData;

    /**
     * @var string 小程序审核视频播放地址。
     */
    public $Url;

    /**
     * @var string 小程序视频发布状态：
<li>Pass：成功。</li>
<li>Rejected：未通过。</li>
     */
    public $ReviewResult;

    /**
     * @var array 小程序审核元素。
     */
    public $ReviewSummary;

    /**
     * @param integer $Definition 模板id。小程序视频发布的视频所对应的转码模板ID，为0代表原始视频。
     * @param MediaMetaData $MetaData 视频元信息。
     * @param string $Url 小程序审核视频播放地址。
     * @param string $ReviewResult 小程序视频发布状态：
<li>Pass：成功。</li>
<li>Rejected：未通过。</li>
     * @param array $ReviewSummary 小程序审核元素。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ReviewResult",$param) and $param["ReviewResult"] !== null) {
            $this->ReviewResult = $param["ReviewResult"];
        }

        if (array_key_exists("ReviewSummary",$param) and $param["ReviewSummary"] !== null) {
            $this->ReviewSummary = [];
            foreach ($param["ReviewSummary"] as $key => $value){
                $obj = new MediaMiniProgramReviewElem();
                $obj->deserialize($value);
                array_push($this->ReviewSummary, $obj);
            }
        }
    }
}
