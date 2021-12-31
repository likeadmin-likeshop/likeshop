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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddSmsTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取模板名称。
 * @method void setTemplateName(string $TemplateName) 设置模板名称。
 * @method string getTemplateContent() 获取模板内容。
 * @method void setTemplateContent(string $TemplateContent) 设置模板内容。
 * @method integer getSmsType() 获取短信类型，0表示普通短信, 1表示营销短信。
 * @method void setSmsType(integer $SmsType) 设置短信类型，0表示普通短信, 1表示营销短信。
 * @method integer getInternational() 获取是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 * @method void setInternational(integer $International) 设置是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 * @method string getRemark() 获取模板备注，例如申请原因，使用场景等。
 * @method void setRemark(string $Remark) 设置模板备注，例如申请原因，使用场景等。
 */
class AddSmsTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称。
     */
    public $TemplateName;

    /**
     * @var string 模板内容。
     */
    public $TemplateContent;

    /**
     * @var integer 短信类型，0表示普通短信, 1表示营销短信。
     */
    public $SmsType;

    /**
     * @var integer 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     */
    public $International;

    /**
     * @var string 模板备注，例如申请原因，使用场景等。
     */
    public $Remark;

    /**
     * @param string $TemplateName 模板名称。
     * @param string $TemplateContent 模板内容。
     * @param integer $SmsType 短信类型，0表示普通短信, 1表示营销短信。
     * @param integer $International 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     * @param string $Remark 模板备注，例如申请原因，使用场景等。
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateContent",$param) and $param["TemplateContent"] !== null) {
            $this->TemplateContent = $param["TemplateContent"];
        }

        if (array_key_exists("SmsType",$param) and $param["SmsType"] !== null) {
            $this->SmsType = $param["SmsType"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
