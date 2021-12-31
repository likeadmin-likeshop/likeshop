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
 * 云开发项目版本
 *
 * @method string getName() 获取项目名
 * @method void setName(string $Name) 设置项目名
 * @method string getSam() 获取SAM json
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSam(string $Sam) 设置SAM json
注意：此字段可能返回 null，表示取不到有效值。
 * @method CodeSource getSource() 获取来源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(CodeSource $Source) 设置来源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间, unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间, unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间 ,unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间 ,unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取项目状态, 枚举值: 
        "creatingEnv"-创建环境中
	"createEnvFail"-创建环境失败
	"building"-构建中
	"buildFail"-构建失败
	"deploying"-部署中
	 "deployFail"-部署失败
	 "success"-部署成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置项目状态, 枚举值: 
        "creatingEnv"-创建环境中
	"createEnvFail"-创建环境失败
	"building"-构建中
	"buildFail"-构建失败
	"deploying"-部署中
	 "deployFail"-部署失败
	 "success"-部署成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParameters() 获取环境变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameters(array $Parameters) 设置环境变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取项目类型, 枚举值:
"framework-oneclick" 控制台一键部署
"framework-local-oneclick" cli本地一键部署
"qci-extension-cicd" 内网coding ci cd
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置项目类型, 枚举值:
"framework-oneclick" 控制台一键部署
"framework-local-oneclick" cli本地一键部署
"qci-extension-cicd" 内网coding ci cd
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCIId() 获取ci的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCIId(string $CIId) 设置ci的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCDId() 获取cd的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCDId(string $CDId) 设置cd的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvId() 获取环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvId(string $EnvId) 设置环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersionNum() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionNum(integer $VersionNum) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailReason() 获取错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置错误原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRcJson() 获取rc.json内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRcJson(string $RcJson) 设置rc.json内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddonConfig() 获取插件配置内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddonConfig(string $AddonConfig) 设置插件配置内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkConfig() 获取网络配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkConfig(string $NetworkConfig) 设置网络配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtensionId() 获取扩展id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtensionId(string $ExtensionId) 设置扩展id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailType() 获取错误类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailType(string $FailType) 设置错误类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoUrl() 获取私有仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoUrl(string $RepoUrl) 设置私有仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoDeployOnCodeChange() 获取是否私有仓库代码变更触发自动部署
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoDeployOnCodeChange(boolean $AutoDeployOnCodeChange) 设置是否私有仓库代码变更触发自动部署
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudBaseProjectVersion extends AbstractModel
{
    /**
     * @var string 项目名
     */
    public $Name;

    /**
     * @var string SAM json
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sam;

    /**
     * @var CodeSource 来源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var integer 创建时间, unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间 ,unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 项目状态, 枚举值: 
        "creatingEnv"-创建环境中
	"createEnvFail"-创建环境失败
	"building"-构建中
	"buildFail"-构建失败
	"deploying"-部署中
	 "deployFail"-部署失败
	 "success"-部署成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 环境变量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Parameters;

    /**
     * @var string 项目类型, 枚举值:
"framework-oneclick" 控制台一键部署
"framework-local-oneclick" cli本地一键部署
"qci-extension-cicd" 内网coding ci cd
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string ci的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CIId;

    /**
     * @var string cd的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CDId;

    /**
     * @var string 环境id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvId;

    /**
     * @var integer 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionNum;

    /**
     * @var string 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var string rc.json内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RcJson;

    /**
     * @var string 插件配置内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddonConfig;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 网络配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkConfig;

    /**
     * @var string 扩展id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtensionId;

    /**
     * @var string 错误类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailType;

    /**
     * @var string 私有仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoUrl;

    /**
     * @var boolean 是否私有仓库代码变更触发自动部署
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoDeployOnCodeChange;

    /**
     * @param string $Name 项目名
     * @param string $Sam SAM json
注意：此字段可能返回 null，表示取不到有效值。
     * @param CodeSource $Source 来源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间, unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间 ,unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 项目状态, 枚举值: 
        "creatingEnv"-创建环境中
	"createEnvFail"-创建环境失败
	"building"-构建中
	"buildFail"-构建失败
	"deploying"-部署中
	 "deployFail"-部署失败
	 "success"-部署成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Parameters 环境变量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 项目类型, 枚举值:
"framework-oneclick" 控制台一键部署
"framework-local-oneclick" cli本地一键部署
"qci-extension-cicd" 内网coding ci cd
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CIId ci的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CDId cd的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvId 环境id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VersionNum 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailReason 错误原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RcJson rc.json内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddonConfig 插件配置内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkConfig 网络配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtensionId 扩展id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailType 错误类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoUrl 私有仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoDeployOnCodeChange 是否私有仓库代码变更触发自动部署
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Sam",$param) and $param["Sam"] !== null) {
            $this->Sam = $param["Sam"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new CodeSource();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CIId",$param) and $param["CIId"] !== null) {
            $this->CIId = $param["CIId"];
        }

        if (array_key_exists("CDId",$param) and $param["CDId"] !== null) {
            $this->CDId = $param["CDId"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("VersionNum",$param) and $param["VersionNum"] !== null) {
            $this->VersionNum = $param["VersionNum"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
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

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("FailType",$param) and $param["FailType"] !== null) {
            $this->FailType = $param["FailType"];
        }

        if (array_key_exists("RepoUrl",$param) and $param["RepoUrl"] !== null) {
            $this->RepoUrl = $param["RepoUrl"];
        }

        if (array_key_exists("AutoDeployOnCodeChange",$param) and $param["AutoDeployOnCodeChange"] !== null) {
            $this->AutoDeployOnCodeChange = $param["AutoDeployOnCodeChange"];
        }
    }
}
