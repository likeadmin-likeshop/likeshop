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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信活动统计模板展示结构
 *
 * @method string getTemplateId() 获取模板或样例id
 * @method void setTemplateId(string $TemplateId) 设置模板或样例id
 * @method string getTemplateContent() 获取模板内容
 * @method void setTemplateContent(string $TemplateContent) 设置模板内容
 * @method integer getSendCount() 获取触达成功数
 * @method void setSendCount(integer $SendCount) 设置触达成功数
 * @method integer getClickCount() 获取短链点击数
 * @method void setClickCount(integer $ClickCount) 设置短链点击数
 */
class SmsCampaignStatisticsTemplateData extends AbstractModel
{
    /**
     * @var string 模板或样例id
     */
    public $TemplateId;

    /**
     * @var string 模板内容
     */
    public $TemplateContent;

    /**
     * @var integer 触达成功数
     */
    public $SendCount;

    /**
     * @var integer 短链点击数
     */
    public $ClickCount;

    /**
     * @param string $TemplateId 模板或样例id
     * @param string $TemplateContent 模板内容
     * @param integer $SendCount 触达成功数
     * @param integer $ClickCount 短链点击数
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

        if (array_key_exists("TemplateContent",$param) and $param["TemplateContent"] !== null) {
            $this->TemplateContent = $param["TemplateContent"];
        }

        if (array_key_exists("SendCount",$param) and $param["SendCount"] !== null) {
            $this->SendCount = $param["SendCount"];
        }

        if (array_key_exists("ClickCount",$param) and $param["ClickCount"] !== null) {
            $this->ClickCount = $param["ClickCount"];
        }
    }
}
