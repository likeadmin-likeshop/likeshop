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
 * 行业报道新闻
 *
 * @method string getIndustryId() 获取行业报道ID
 * @method void setIndustryId(string $IndustryId) 设置行业报道ID
 * @method string getPubTime() 获取报道发表时间
 * @method void setPubTime(string $PubTime) 设置报道发表时间
 * @method string getFromSite() 获取报道来源
 * @method void setFromSite(string $FromSite) 设置报道来源
 * @method string getTitle() 获取报道标题
 * @method void setTitle(string $Title) 设置报道标题
 * @method string getUrl() 获取报道来源url
 * @method void setUrl(string $Url) 设置报道来源url
 * @method integer getLevel() 获取报道来源等级
 * @method void setLevel(integer $Level) 设置报道来源等级
 * @method integer getHot() 获取热度值
 * @method void setHot(integer $Hot) 设置热度值
 * @method integer getFlag() 获取报道标识
 * @method void setFlag(integer $Flag) 设置报道标识
 * @method string getAbstract() 获取报道摘要
 * @method void setAbstract(string $Abstract) 设置报道摘要
 */
class IndustryNews extends AbstractModel
{
    /**
     * @var string 行业报道ID
     */
    public $IndustryId;

    /**
     * @var string 报道发表时间
     */
    public $PubTime;

    /**
     * @var string 报道来源
     */
    public $FromSite;

    /**
     * @var string 报道标题
     */
    public $Title;

    /**
     * @var string 报道来源url
     */
    public $Url;

    /**
     * @var integer 报道来源等级
     */
    public $Level;

    /**
     * @var integer 热度值
     */
    public $Hot;

    /**
     * @var integer 报道标识
     */
    public $Flag;

    /**
     * @var string 报道摘要
     */
    public $Abstract;

    /**
     * @param string $IndustryId 行业报道ID
     * @param string $PubTime 报道发表时间
     * @param string $FromSite 报道来源
     * @param string $Title 报道标题
     * @param string $Url 报道来源url
     * @param integer $Level 报道来源等级
     * @param integer $Hot 热度值
     * @param integer $Flag 报道标识
     * @param string $Abstract 报道摘要
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
        if (array_key_exists("IndustryId",$param) and $param["IndustryId"] !== null) {
            $this->IndustryId = $param["IndustryId"];
        }

        if (array_key_exists("PubTime",$param) and $param["PubTime"] !== null) {
            $this->PubTime = $param["PubTime"];
        }

        if (array_key_exists("FromSite",$param) and $param["FromSite"] !== null) {
            $this->FromSite = $param["FromSite"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Hot",$param) and $param["Hot"] !== null) {
            $this->Hot = $param["Hot"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Abstract",$param) and $param["Abstract"] !== null) {
            $this->Abstract = $param["Abstract"];
        }
    }
}
