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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数模板信息
 *
 * @method integer getTemplateId() 获取参数模板ID
 * @method void setTemplateId(integer $TemplateId) 设置参数模板ID
 * @method string getName() 获取参数模板名称
 * @method void setName(string $Name) 设置参数模板名称
 * @method string getDescription() 获取参数模板描述
 * @method void setDescription(string $Description) 设置参数模板描述
 * @method string getEngineVersion() 获取实例引擎版本
 * @method void setEngineVersion(string $EngineVersion) 设置实例引擎版本
 */
class ParamTemplateInfo extends AbstractModel
{
    /**
     * @var integer 参数模板ID
     */
    public $TemplateId;

    /**
     * @var string 参数模板名称
     */
    public $Name;

    /**
     * @var string 参数模板描述
     */
    public $Description;

    /**
     * @var string 实例引擎版本
     */
    public $EngineVersion;

    /**
     * @param integer $TemplateId 参数模板ID
     * @param string $Name 参数模板名称
     * @param string $Description 参数模板描述
     * @param string $EngineVersion 实例引擎版本
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }
    }
}
