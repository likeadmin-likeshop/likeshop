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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateEmailTemplate请求参数结构体
 *
 * @method TemplateContent getTemplateContent() 获取模板内容
 * @method void setTemplateContent(TemplateContent $TemplateContent) 设置模板内容
 * @method integer getTemplateID() 获取模板ID
 * @method void setTemplateID(integer $TemplateID) 设置模板ID
 * @method string getTemplateName() 获取模版名字
 * @method void setTemplateName(string $TemplateName) 设置模版名字
 */
class UpdateEmailTemplateRequest extends AbstractModel
{
    /**
     * @var TemplateContent 模板内容
     */
    public $TemplateContent;

    /**
     * @var integer 模板ID
     */
    public $TemplateID;

    /**
     * @var string 模版名字
     */
    public $TemplateName;

    /**
     * @param TemplateContent $TemplateContent 模板内容
     * @param integer $TemplateID 模板ID
     * @param string $TemplateName 模版名字
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
        if (array_key_exists("TemplateContent",$param) and $param["TemplateContent"] !== null) {
            $this->TemplateContent = new TemplateContent();
            $this->TemplateContent->deserialize($param["TemplateContent"]);
        }

        if (array_key_exists("TemplateID",$param) and $param["TemplateID"] !== null) {
            $this->TemplateID = $param["TemplateID"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }
    }
}
