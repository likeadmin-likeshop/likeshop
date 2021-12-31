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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OCR文本结果详情
 *
 * @method string getText() 获取OCR文本内容
 * @method void setText(string $Text) 设置OCR文本内容
 * @method string getLabel() 获取恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及其他令人反感、不安全或不适宜的内容类型。
 * @method void setLabel(string $Label) 设置恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及其他令人反感、不安全或不适宜的内容类型。
 * @method string getLibId() 获取仅当Label为Custom自定义关键词时有效，表示自定义库id
 * @method void setLibId(string $LibId) 设置仅当Label为Custom自定义关键词时有效，表示自定义库id
 * @method string getLibName() 获取仅当Label为Custom自定义关键词时有效，表示自定义库名称
 * @method void setLibName(string $LibName) 设置仅当Label为Custom自定义关键词时有效，表示自定义库名称
 * @method array getKeywords() 获取该标签下命中的关键词
 * @method void setKeywords(array $Keywords) 设置该标签下命中的关键词
 * @method integer getScore() 获取该标签模型命中的分值
 * @method void setScore(integer $Score) 设置该标签模型命中的分值
 * @method Location getLocation() 获取OCR位置
 * @method void setLocation(Location $Location) 设置OCR位置
 * @method integer getRate() 获取OCR文本识别置信度
 * @method void setRate(integer $Rate) 设置OCR文本识别置信度
 */
class OcrTextDetail extends AbstractModel
{
    /**
     * @var string OCR文本内容
     */
    public $Text;

    /**
     * @var string 恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及其他令人反感、不安全或不适宜的内容类型。
     */
    public $Label;

    /**
     * @var string 仅当Label为Custom自定义关键词时有效，表示自定义库id
     */
    public $LibId;

    /**
     * @var string 仅当Label为Custom自定义关键词时有效，表示自定义库名称
     */
    public $LibName;

    /**
     * @var array 该标签下命中的关键词
     */
    public $Keywords;

    /**
     * @var integer 该标签模型命中的分值
     */
    public $Score;

    /**
     * @var Location OCR位置
     */
    public $Location;

    /**
     * @var integer OCR文本识别置信度
     */
    public $Rate;

    /**
     * @param string $Text OCR文本内容
     * @param string $Label 恶意标签，Normal：正常，Porn：色情，Abuse：谩骂，Ad：广告，Custom：自定义词库。
以及其他令人反感、不安全或不适宜的内容类型。
     * @param string $LibId 仅当Label为Custom自定义关键词时有效，表示自定义库id
     * @param string $LibName 仅当Label为Custom自定义关键词时有效，表示自定义库名称
     * @param array $Keywords 该标签下命中的关键词
     * @param integer $Score 该标签模型命中的分值
     * @param Location $Location OCR位置
     * @param integer $Rate OCR文本识别置信度
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }
    }
}
