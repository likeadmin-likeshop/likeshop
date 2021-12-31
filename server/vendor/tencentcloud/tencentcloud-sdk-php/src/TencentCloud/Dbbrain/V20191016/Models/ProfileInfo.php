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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户配置的信息
 *
 * @method string getLanguage() 获取语言, 如"zh"。
 * @method void setLanguage(string $Language) 设置语言, 如"zh"。
 * @method MailConfiguration getMailConfiguration() 获取邮件模板的内容。
 * @method void setMailConfiguration(MailConfiguration $MailConfiguration) 设置邮件模板的内容。
 */
class ProfileInfo extends AbstractModel
{
    /**
     * @var string 语言, 如"zh"。
     */
    public $Language;

    /**
     * @var MailConfiguration 邮件模板的内容。
     */
    public $MailConfiguration;

    /**
     * @param string $Language 语言, 如"zh"。
     * @param MailConfiguration $MailConfiguration 邮件模板的内容。
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("MailConfiguration",$param) and $param["MailConfiguration"] !== null) {
            $this->MailConfiguration = new MailConfiguration();
            $this->MailConfiguration->deserialize($param["MailConfiguration"]);
        }
    }
}
