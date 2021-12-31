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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播流 AI 审核结果
 *
 * @method string getType() 获取审核结果的类型，可以取的值有：
<li>ImagePorn：图片鉴黄</li>
<li>ImageTerrorism：图片鉴恐</li>
<li>ImagePolitical：图片鉴政</li>
<li>PornVoice：声音鉴黄</li>
 * @method void setType(string $Type) 设置审核结果的类型，可以取的值有：
<li>ImagePorn：图片鉴黄</li>
<li>ImageTerrorism：图片鉴恐</li>
<li>ImagePolitical：图片鉴政</li>
<li>PornVoice：声音鉴黄</li>
 * @method array getImagePornResultSet() 获取图片鉴黄的结果，当 Type 为 ImagePorn 时有效。
 * @method void setImagePornResultSet(array $ImagePornResultSet) 设置图片鉴黄的结果，当 Type 为 ImagePorn 时有效。
 * @method array getImageTerrorismResultSet() 获取图片鉴恐的结果，当 Type 为 ImageTerrorism 时有效。
 * @method void setImageTerrorismResultSet(array $ImageTerrorismResultSet) 设置图片鉴恐的结果，当 Type 为 ImageTerrorism 时有效。
 * @method array getImagePoliticalResultSet() 获取图片鉴政的结果，当 Type 为 ImagePolitical 时有效。
 * @method void setImagePoliticalResultSet(array $ImagePoliticalResultSet) 设置图片鉴政的结果，当 Type 为 ImagePolitical 时有效。
 * @method array getVoicePornResultSet() 获取声音鉴黄的结果，当 Type 为 PornVoice 时有效。
 * @method void setVoicePornResultSet(array $VoicePornResultSet) 设置声音鉴黄的结果，当 Type 为 PornVoice 时有效。
 */
class LiveStreamAiReviewResultItem extends AbstractModel
{
    /**
     * @var string 审核结果的类型，可以取的值有：
<li>ImagePorn：图片鉴黄</li>
<li>ImageTerrorism：图片鉴恐</li>
<li>ImagePolitical：图片鉴政</li>
<li>PornVoice：声音鉴黄</li>
     */
    public $Type;

    /**
     * @var array 图片鉴黄的结果，当 Type 为 ImagePorn 时有效。
     */
    public $ImagePornResultSet;

    /**
     * @var array 图片鉴恐的结果，当 Type 为 ImageTerrorism 时有效。
     */
    public $ImageTerrorismResultSet;

    /**
     * @var array 图片鉴政的结果，当 Type 为 ImagePolitical 时有效。
     */
    public $ImagePoliticalResultSet;

    /**
     * @var array 声音鉴黄的结果，当 Type 为 PornVoice 时有效。
     */
    public $VoicePornResultSet;

    /**
     * @param string $Type 审核结果的类型，可以取的值有：
<li>ImagePorn：图片鉴黄</li>
<li>ImageTerrorism：图片鉴恐</li>
<li>ImagePolitical：图片鉴政</li>
<li>PornVoice：声音鉴黄</li>
     * @param array $ImagePornResultSet 图片鉴黄的结果，当 Type 为 ImagePorn 时有效。
     * @param array $ImageTerrorismResultSet 图片鉴恐的结果，当 Type 为 ImageTerrorism 时有效。
     * @param array $ImagePoliticalResultSet 图片鉴政的结果，当 Type 为 ImagePolitical 时有效。
     * @param array $VoicePornResultSet 声音鉴黄的结果，当 Type 为 PornVoice 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ImagePornResultSet",$param) and $param["ImagePornResultSet"] !== null) {
            $this->ImagePornResultSet = [];
            foreach ($param["ImagePornResultSet"] as $key => $value){
                $obj = new LiveStreamAiReviewImagePornResult();
                $obj->deserialize($value);
                array_push($this->ImagePornResultSet, $obj);
            }
        }

        if (array_key_exists("ImageTerrorismResultSet",$param) and $param["ImageTerrorismResultSet"] !== null) {
            $this->ImageTerrorismResultSet = [];
            foreach ($param["ImageTerrorismResultSet"] as $key => $value){
                $obj = new LiveStreamAiReviewImageTerrorismResult();
                $obj->deserialize($value);
                array_push($this->ImageTerrorismResultSet, $obj);
            }
        }

        if (array_key_exists("ImagePoliticalResultSet",$param) and $param["ImagePoliticalResultSet"] !== null) {
            $this->ImagePoliticalResultSet = [];
            foreach ($param["ImagePoliticalResultSet"] as $key => $value){
                $obj = new LiveStreamAiReviewImagePoliticalResult();
                $obj->deserialize($value);
                array_push($this->ImagePoliticalResultSet, $obj);
            }
        }

        if (array_key_exists("VoicePornResultSet",$param) and $param["VoicePornResultSet"] !== null) {
            $this->VoicePornResultSet = [];
            foreach ($param["VoicePornResultSet"] as $key => $value){
                $obj = new LiveStreamAiReviewVoicePornResult();
                $obj->deserialize($value);
                array_push($this->VoicePornResultSet, $obj);
            }
        }
    }
}
