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
namespace TencentCloud\Tbm\V20180129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文章信息
 *
 * @method string getTitle() 获取文章标题
 * @method void setTitle(string $Title) 设置文章标题
 * @method string getUrl() 获取文章url地址
 * @method void setUrl(string $Url) 设置文章url地址
 * @method string getFromSite() 获取文章来源
 * @method void setFromSite(string $FromSite) 设置文章来源
 * @method string getPubTime() 获取文章发表日期
 * @method void setPubTime(string $PubTime) 设置文章发表日期
 * @method integer getFlag() 获取文章标识
 * @method void setFlag(integer $Flag) 设置文章标识
 * @method integer getHot() 获取文章热度值
 * @method void setHot(integer $Hot) 设置文章热度值
 * @method integer getLevel() 获取文章来源等级
 * @method void setLevel(integer $Level) 设置文章来源等级
 * @method string getAbstract() 获取文章摘要
 * @method void setAbstract(string $Abstract) 设置文章摘要
 * @method string getArticleId() 获取文章ID
 * @method void setArticleId(string $ArticleId) 设置文章ID
 */
class BrandReportArticle extends AbstractModel
{
    /**
     * @var string 文章标题
     */
    public $Title;

    /**
     * @var string 文章url地址
     */
    public $Url;

    /**
     * @var string 文章来源
     */
    public $FromSite;

    /**
     * @var string 文章发表日期
     */
    public $PubTime;

    /**
     * @var integer 文章标识
     */
    public $Flag;

    /**
     * @var integer 文章热度值
     */
    public $Hot;

    /**
     * @var integer 文章来源等级
     */
    public $Level;

    /**
     * @var string 文章摘要
     */
    public $Abstract;

    /**
     * @var string 文章ID
     */
    public $ArticleId;

    /**
     * @param string $Title 文章标题
     * @param string $Url 文章url地址
     * @param string $FromSite 文章来源
     * @param string $PubTime 文章发表日期
     * @param integer $Flag 文章标识
     * @param integer $Hot 文章热度值
     * @param integer $Level 文章来源等级
     * @param string $Abstract 文章摘要
     * @param string $ArticleId 文章ID
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FromSite",$param) and $param["FromSite"] !== null) {
            $this->FromSite = $param["FromSite"];
        }

        if (array_key_exists("PubTime",$param) and $param["PubTime"] !== null) {
            $this->PubTime = $param["PubTime"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Hot",$param) and $param["Hot"] !== null) {
            $this->Hot = $param["Hot"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Abstract",$param) and $param["Abstract"] !== null) {
            $this->Abstract = $param["Abstract"];
        }

        if (array_key_exists("ArticleId",$param) and $param["ArticleId"] !== null) {
            $this->ArticleId = $param["ArticleId"];
        }
    }
}
