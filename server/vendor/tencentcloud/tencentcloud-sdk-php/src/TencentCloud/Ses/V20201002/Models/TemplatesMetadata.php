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
 * 模板列表结构
 *
 * @method integer getCreatedTimestamp() 获取创建时间
 * @method void setCreatedTimestamp(integer $CreatedTimestamp) 设置创建时间
 * @method string getTemplateName() 获取模板名称
 * @method void setTemplateName(string $TemplateName) 设置模板名称
 * @method integer getTemplateStatus() 获取模板状态。1-审核中|0-已通过|2-拒绝|其它-不可用
 * @method void setTemplateStatus(integer $TemplateStatus) 设置模板状态。1-审核中|0-已通过|2-拒绝|其它-不可用
 * @method integer getTemplateID() 获取模板ID
 * @method void setTemplateID(integer $TemplateID) 设置模板ID
 * @method string getReviewReason() 获取审核原因
 * @method void setReviewReason(string $ReviewReason) 设置审核原因
 */
class TemplatesMetadata extends AbstractModel
{
    /**
     * @var integer 创建时间
     */
    public $CreatedTimestamp;

    /**
     * @var string 模板名称
     */
    public $TemplateName;

    /**
     * @var integer 模板状态。1-审核中|0-已通过|2-拒绝|其它-不可用
     */
    public $TemplateStatus;

    /**
     * @var integer 模板ID
     */
    public $TemplateID;

    /**
     * @var string 审核原因
     */
    public $ReviewReason;

    /**
     * @param integer $CreatedTimestamp 创建时间
     * @param string $TemplateName 模板名称
     * @param integer $TemplateStatus 模板状态。1-审核中|0-已通过|2-拒绝|其它-不可用
     * @param integer $TemplateID 模板ID
     * @param string $ReviewReason 审核原因
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
        if (array_key_exists("CreatedTimestamp",$param) and $param["CreatedTimestamp"] !== null) {
            $this->CreatedTimestamp = $param["CreatedTimestamp"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateStatus",$param) and $param["TemplateStatus"] !== null) {
            $this->TemplateStatus = $param["TemplateStatus"];
        }

        if (array_key_exists("TemplateID",$param) and $param["TemplateID"] !== null) {
            $this->TemplateID = $param["TemplateID"];
        }

        if (array_key_exists("ReviewReason",$param) and $param["ReviewReason"] !== null) {
            $this->ReviewReason = $param["ReviewReason"];
        }
    }
}
