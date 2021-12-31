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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAndDeployCloudBaseProject请求参数结构体
 *
 * @method string getName() 获取项目名
 * @method void setName(string $Name) 设置项目名
 * @method CodeSource getSource() 获取来源
 * @method void setSource(CodeSource $Source) 设置来源
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getType() 获取项目类型, 枚举值为: framework-oneclick,qci-extension-cicd
 * @method void setType(string $Type) 设置项目类型, 枚举值为: framework-oneclick,qci-extension-cicd
 * @method array getParameters() 获取环境变量
 * @method void setParameters(array $Parameters) 设置环境变量
 * @method string getEnvAlias() 获取环境别名。要以a-z开头，不能包含a-zA-z0-9-以外的字符
 * @method void setEnvAlias(string $EnvAlias) 设置环境别名。要以a-z开头，不能包含a-zA-z0-9-以外的字符
 * @method string getRcJson() 获取rc.json的内容
 * @method void setRcJson(string $RcJson) 设置rc.json的内容
 * @method string getAddonConfig() 获取插件配置内容
 * @method void setAddonConfig(string $AddonConfig) 设置插件配置内容
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getNetworkConfig() 获取网络配置
 * @method void setNetworkConfig(string $NetworkConfig) 设置网络配置
 * @method string getFreeQuota() 获取用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
 * @method void setFreeQuota(string $FreeQuota) 设置用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
 * @method boolean getAutoDeployOnCodeChange() 获取是否代码变更触发自动部署
 * @method void setAutoDeployOnCodeChange(boolean $AutoDeployOnCodeChange) 设置是否代码变更触发自动部署
 * @method string getRepoUrl() 获取私有仓库地址
 * @method void setRepoUrl(string $RepoUrl) 设置私有仓库地址
 */
class CreateAndDeployCloudBaseProjectRequest extends AbstractModel
{
    /**
     * @var string 项目名
     */
    public $Name;

    /**
     * @var CodeSource 来源
     */
    public $Source;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 项目类型, 枚举值为: framework-oneclick,qci-extension-cicd
     */
    public $Type;

    /**
     * @var array 环境变量
     */
    public $Parameters;

    /**
     * @var string 环境别名。要以a-z开头，不能包含a-zA-z0-9-以外的字符
     */
    public $EnvAlias;

    /**
     * @var string rc.json的内容
     */
    public $RcJson;

    /**
     * @var string 插件配置内容
     */
    public $AddonConfig;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 网络配置
     */
    public $NetworkConfig;

    /**
     * @var string 用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
     */
    public $FreeQuota;

    /**
     * @var boolean 是否代码变更触发自动部署
     */
    public $AutoDeployOnCodeChange;

    /**
     * @var string 私有仓库地址
     */
    public $RepoUrl;

    /**
     * @param string $Name 项目名
     * @param CodeSource $Source 来源
     * @param string $EnvId 环境id
     * @param string $Type 项目类型, 枚举值为: framework-oneclick,qci-extension-cicd
     * @param array $Parameters 环境变量
     * @param string $EnvAlias 环境别名。要以a-z开头，不能包含a-zA-z0-9-以外的字符
     * @param string $RcJson rc.json的内容
     * @param string $AddonConfig 插件配置内容
     * @param array $Tags 标签
     * @param string $NetworkConfig 网络配置
     * @param string $FreeQuota 用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
     * @param boolean $AutoDeployOnCodeChange 是否代码变更触发自动部署
     * @param string $RepoUrl 私有仓库地址
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new CodeSource();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("EnvAlias",$param) and $param["EnvAlias"] !== null) {
            $this->EnvAlias = $param["EnvAlias"];
        }

        if (array_key_exists("RcJson",$param) and $param["RcJson"] !== null) {
            $this->RcJson = $param["RcJson"];
        }

        if (array_key_exists("AddonConfig",$param) and $param["AddonConfig"] !== null) {
            $this->AddonConfig = $param["AddonConfig"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("NetworkConfig",$param) and $param["NetworkConfig"] !== null) {
            $this->NetworkConfig = $param["NetworkConfig"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("AutoDeployOnCodeChange",$param) and $param["AutoDeployOnCodeChange"] !== null) {
            $this->AutoDeployOnCodeChange = $param["AutoDeployOnCodeChange"];
        }

        if (array_key_exists("RepoUrl",$param) and $param["RepoUrl"] !== null) {
            $this->RepoUrl = $param["RepoUrl"];
        }
    }
}
