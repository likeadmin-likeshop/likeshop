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
namespace TencentCloud\Tic\V20201117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStack请求参数结构体
 *
 * @method string getStackName() 获取资源栈名称，不得超过60个字符
 * @method void setStackName(string $StackName) 设置资源栈名称，不得超过60个字符
 * @method string getStackRegion() 获取资源栈所在地域
 * @method void setStackRegion(string $StackRegion) 设置资源栈所在地域
 * @method string getTemplateUrl() 获取HCL模板URL，⽬前仅限 COS URL, ⽂件为zip压缩格式
 * @method void setTemplateUrl(string $TemplateUrl) 设置HCL模板URL，⽬前仅限 COS URL, ⽂件为zip压缩格式
 * @method string getDescription() 获取资源栈描述，不得超过200个字符
 * @method void setDescription(string $Description) 设置资源栈描述，不得超过200个字符
 */
class CreateStackRequest extends AbstractModel
{
    /**
     * @var string 资源栈名称，不得超过60个字符
     */
    public $StackName;

    /**
     * @var string 资源栈所在地域
     */
    public $StackRegion;

    /**
     * @var string HCL模板URL，⽬前仅限 COS URL, ⽂件为zip压缩格式
     */
    public $TemplateUrl;

    /**
     * @var string 资源栈描述，不得超过200个字符
     */
    public $Description;

    /**
     * @param string $StackName 资源栈名称，不得超过60个字符
     * @param string $StackRegion 资源栈所在地域
     * @param string $TemplateUrl HCL模板URL，⽬前仅限 COS URL, ⽂件为zip压缩格式
     * @param string $Description 资源栈描述，不得超过200个字符
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
        if (array_key_exists("StackName",$param) and $param["StackName"] !== null) {
            $this->StackName = $param["StackName"];
        }

        if (array_key_exists("StackRegion",$param) and $param["StackRegion"] !== null) {
            $this->StackRegion = $param["StackRegion"];
        }

        if (array_key_exists("TemplateUrl",$param) and $param["TemplateUrl"] !== null) {
            $this->TemplateUrl = $param["TemplateUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
