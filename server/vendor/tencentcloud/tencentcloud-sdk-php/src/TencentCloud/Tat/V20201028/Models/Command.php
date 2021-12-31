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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命令详情。
 *
 * @method string getCommandId() 获取命令ID。
 * @method void setCommandId(string $CommandId) 设置命令ID。
 * @method string getCommandName() 获取命令名称。
 * @method void setCommandName(string $CommandName) 设置命令名称。
 * @method string getDescription() 获取命令描述。
 * @method void setDescription(string $Description) 设置命令描述。
 * @method string getContent() 获取Base64编码后的命令内容。
 * @method void setContent(string $Content) 设置Base64编码后的命令内容。
 * @method string getCommandType() 获取命令类型。
 * @method void setCommandType(string $CommandType) 设置命令类型。
 * @method string getWorkingDirectory() 获取命令执行路径。
 * @method void setWorkingDirectory(string $WorkingDirectory) 设置命令执行路径。
 * @method integer getTimeout() 获取命令超时时间。
 * @method void setTimeout(integer $Timeout) 设置命令超时时间。
 * @method string getCreatedTime() 获取命令创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置命令创建时间。
 * @method string getUpdatedTime() 获取命令更新时间。
 * @method void setUpdatedTime(string $UpdatedTime) 设置命令更新时间。
 * @method boolean getEnableParameter() 获取是否启用自定义参数功能。
 * @method void setEnableParameter(boolean $EnableParameter) 设置是否启用自定义参数功能。
 * @method string getDefaultParameters() 获取自定义参数的默认取值。
 * @method void setDefaultParameters(string $DefaultParameters) 设置自定义参数的默认取值。
 * @method string getFormattedDescription() 获取命令的结构化描述。公共命令有值，用户命令为空字符串。
 * @method void setFormattedDescription(string $FormattedDescription) 设置命令的结构化描述。公共命令有值，用户命令为空字符串。
 * @method string getCreatedBy() 获取命令创建者。TAT 代表公共命令，USER 代表个人命令。
 * @method void setCreatedBy(string $CreatedBy) 设置命令创建者。TAT 代表公共命令，USER 代表个人命令。
 * @method array getTags() 获取命令关联的标签列表。
 * @method void setTags(array $Tags) 设置命令关联的标签列表。
 */
class Command extends AbstractModel
{
    /**
     * @var string 命令ID。
     */
    public $CommandId;

    /**
     * @var string 命令名称。
     */
    public $CommandName;

    /**
     * @var string 命令描述。
     */
    public $Description;

    /**
     * @var string Base64编码后的命令内容。
     */
    public $Content;

    /**
     * @var string 命令类型。
     */
    public $CommandType;

    /**
     * @var string 命令执行路径。
     */
    public $WorkingDirectory;

    /**
     * @var integer 命令超时时间。
     */
    public $Timeout;

    /**
     * @var string 命令创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 命令更新时间。
     */
    public $UpdatedTime;

    /**
     * @var boolean 是否启用自定义参数功能。
     */
    public $EnableParameter;

    /**
     * @var string 自定义参数的默认取值。
     */
    public $DefaultParameters;

    /**
     * @var string 命令的结构化描述。公共命令有值，用户命令为空字符串。
     */
    public $FormattedDescription;

    /**
     * @var string 命令创建者。TAT 代表公共命令，USER 代表个人命令。
     */
    public $CreatedBy;

    /**
     * @var array 命令关联的标签列表。
     */
    public $Tags;

    /**
     * @param string $CommandId 命令ID。
     * @param string $CommandName 命令名称。
     * @param string $Description 命令描述。
     * @param string $Content Base64编码后的命令内容。
     * @param string $CommandType 命令类型。
     * @param string $WorkingDirectory 命令执行路径。
     * @param integer $Timeout 命令超时时间。
     * @param string $CreatedTime 命令创建时间。
     * @param string $UpdatedTime 命令更新时间。
     * @param boolean $EnableParameter 是否启用自定义参数功能。
     * @param string $DefaultParameters 自定义参数的默认取值。
     * @param string $FormattedDescription 命令的结构化描述。公共命令有值，用户命令为空字符串。
     * @param string $CreatedBy 命令创建者。TAT 代表公共命令，USER 代表个人命令。
     * @param array $Tags 命令关联的标签列表。
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
        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("CommandName",$param) and $param["CommandName"] !== null) {
            $this->CommandName = $param["CommandName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CommandType",$param) and $param["CommandType"] !== null) {
            $this->CommandType = $param["CommandType"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("EnableParameter",$param) and $param["EnableParameter"] !== null) {
            $this->EnableParameter = $param["EnableParameter"];
        }

        if (array_key_exists("DefaultParameters",$param) and $param["DefaultParameters"] !== null) {
            $this->DefaultParameters = $param["DefaultParameters"];
        }

        if (array_key_exists("FormattedDescription",$param) and $param["FormattedDescription"] !== null) {
            $this->FormattedDescription = $param["FormattedDescription"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
