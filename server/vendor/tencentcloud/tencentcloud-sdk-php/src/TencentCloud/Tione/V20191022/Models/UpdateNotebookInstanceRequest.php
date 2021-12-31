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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateNotebookInstance请求参数结构体
 *
 * @method string getNotebookInstanceName() 获取Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
 * @method void setNotebookInstanceName(string $NotebookInstanceName) 设置Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
 * @method string getRoleArn() 获取角色的资源描述
 * @method void setRoleArn(string $RoleArn) 设置角色的资源描述
 * @method string getRootAccess() 获取Root访问权限
 * @method void setRootAccess(string $RootAccess) 设置Root访问权限
 * @method integer getVolumeSizeInGB() 获取数据卷大小(GB)
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置数据卷大小(GB)
 * @method string getInstanceType() 获取算力资源类型
 * @method void setInstanceType(string $InstanceType) 设置算力资源类型
 * @method string getLifecycleScriptsName() 获取notebook生命周期脚本名称
 * @method void setLifecycleScriptsName(string $LifecycleScriptsName) 设置notebook生命周期脚本名称
 * @method boolean getDisassociateLifecycleScript() 获取是否解绑生命周期脚本，默认 false。
该值为true时，LifecycleScriptsName将被忽略
 * @method void setDisassociateLifecycleScript(boolean $DisassociateLifecycleScript) 设置是否解绑生命周期脚本，默认 false。
该值为true时，LifecycleScriptsName将被忽略
 * @method string getDefaultCodeRepository() 获取默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
 * @method void setDefaultCodeRepository(string $DefaultCodeRepository) 设置默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
 * @method array getAdditionalCodeRepositories() 获取其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
 * @method void setAdditionalCodeRepositories(array $AdditionalCodeRepositories) 设置其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
 * @method boolean getDisassociateDefaultCodeRepository() 获取是否取消关联默认存储库，默认false
该值为true时，DefaultCodeRepository将被忽略
 * @method void setDisassociateDefaultCodeRepository(boolean $DisassociateDefaultCodeRepository) 设置是否取消关联默认存储库，默认false
该值为true时，DefaultCodeRepository将被忽略
 * @method boolean getDisassociateAdditionalCodeRepositories() 获取是否取消关联其他存储库，默认false
该值为true时，AdditionalCodeRepositories将被忽略
 * @method void setDisassociateAdditionalCodeRepositories(boolean $DisassociateAdditionalCodeRepositories) 设置是否取消关联其他存储库，默认false
该值为true时，AdditionalCodeRepositories将被忽略
 * @method string getClsAccess() 获取已弃用，请使用ClsConfig配置。是否开启CLS日志服务，可取值Enabled/Disabled
 * @method void setClsAccess(string $ClsAccess) 设置已弃用，请使用ClsConfig配置。是否开启CLS日志服务，可取值Enabled/Disabled
 * @method string getAutoStopping() 获取自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
 * @method void setAutoStopping(string $AutoStopping) 设置自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
 * @method StoppingCondition getStoppingCondition() 获取自动停止配置，只在AutoStopping为Enabled的时候生效
 * @method void setStoppingCondition(StoppingCondition $StoppingCondition) 设置自动停止配置，只在AutoStopping为Enabled的时候生效
 * @method ClsConfig getClsConfig() 获取接入日志的配置，默认使用免费日志服务。
 * @method void setClsConfig(ClsConfig $ClsConfig) 设置接入日志的配置，默认使用免费日志服务。
 */
class UpdateNotebookInstanceRequest extends AbstractModel
{
    /**
     * @var string Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
     */
    public $NotebookInstanceName;

    /**
     * @var string 角色的资源描述
     */
    public $RoleArn;

    /**
     * @var string Root访问权限
     */
    public $RootAccess;

    /**
     * @var integer 数据卷大小(GB)
     */
    public $VolumeSizeInGB;

    /**
     * @var string 算力资源类型
     */
    public $InstanceType;

    /**
     * @var string notebook生命周期脚本名称
     */
    public $LifecycleScriptsName;

    /**
     * @var boolean 是否解绑生命周期脚本，默认 false。
该值为true时，LifecycleScriptsName将被忽略
     */
    public $DisassociateLifecycleScript;

    /**
     * @var string 默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
     */
    public $DefaultCodeRepository;

    /**
     * @var array 其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
     */
    public $AdditionalCodeRepositories;

    /**
     * @var boolean 是否取消关联默认存储库，默认false
该值为true时，DefaultCodeRepository将被忽略
     */
    public $DisassociateDefaultCodeRepository;

    /**
     * @var boolean 是否取消关联其他存储库，默认false
该值为true时，AdditionalCodeRepositories将被忽略
     */
    public $DisassociateAdditionalCodeRepositories;

    /**
     * @var string 已弃用，请使用ClsConfig配置。是否开启CLS日志服务，可取值Enabled/Disabled
     */
    public $ClsAccess;

    /**
     * @var string 自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
     */
    public $AutoStopping;

    /**
     * @var StoppingCondition 自动停止配置，只在AutoStopping为Enabled的时候生效
     */
    public $StoppingCondition;

    /**
     * @var ClsConfig 接入日志的配置，默认使用免费日志服务。
     */
    public $ClsConfig;

    /**
     * @param string $NotebookInstanceName Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
     * @param string $RoleArn 角色的资源描述
     * @param string $RootAccess Root访问权限
     * @param integer $VolumeSizeInGB 数据卷大小(GB)
     * @param string $InstanceType 算力资源类型
     * @param string $LifecycleScriptsName notebook生命周期脚本名称
     * @param boolean $DisassociateLifecycleScript 是否解绑生命周期脚本，默认 false。
该值为true时，LifecycleScriptsName将被忽略
     * @param string $DefaultCodeRepository 默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
     * @param array $AdditionalCodeRepositories 其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
     * @param boolean $DisassociateDefaultCodeRepository 是否取消关联默认存储库，默认false
该值为true时，DefaultCodeRepository将被忽略
     * @param boolean $DisassociateAdditionalCodeRepositories 是否取消关联其他存储库，默认false
该值为true时，AdditionalCodeRepositories将被忽略
     * @param string $ClsAccess 已弃用，请使用ClsConfig配置。是否开启CLS日志服务，可取值Enabled/Disabled
     * @param string $AutoStopping 自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
     * @param StoppingCondition $StoppingCondition 自动停止配置，只在AutoStopping为Enabled的时候生效
     * @param ClsConfig $ClsConfig 接入日志的配置，默认使用免费日志服务。
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
        if (array_key_exists("NotebookInstanceName",$param) and $param["NotebookInstanceName"] !== null) {
            $this->NotebookInstanceName = $param["NotebookInstanceName"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("RootAccess",$param) and $param["RootAccess"] !== null) {
            $this->RootAccess = $param["RootAccess"];
        }

        if (array_key_exists("VolumeSizeInGB",$param) and $param["VolumeSizeInGB"] !== null) {
            $this->VolumeSizeInGB = $param["VolumeSizeInGB"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("LifecycleScriptsName",$param) and $param["LifecycleScriptsName"] !== null) {
            $this->LifecycleScriptsName = $param["LifecycleScriptsName"];
        }

        if (array_key_exists("DisassociateLifecycleScript",$param) and $param["DisassociateLifecycleScript"] !== null) {
            $this->DisassociateLifecycleScript = $param["DisassociateLifecycleScript"];
        }

        if (array_key_exists("DefaultCodeRepository",$param) and $param["DefaultCodeRepository"] !== null) {
            $this->DefaultCodeRepository = $param["DefaultCodeRepository"];
        }

        if (array_key_exists("AdditionalCodeRepositories",$param) and $param["AdditionalCodeRepositories"] !== null) {
            $this->AdditionalCodeRepositories = $param["AdditionalCodeRepositories"];
        }

        if (array_key_exists("DisassociateDefaultCodeRepository",$param) and $param["DisassociateDefaultCodeRepository"] !== null) {
            $this->DisassociateDefaultCodeRepository = $param["DisassociateDefaultCodeRepository"];
        }

        if (array_key_exists("DisassociateAdditionalCodeRepositories",$param) and $param["DisassociateAdditionalCodeRepositories"] !== null) {
            $this->DisassociateAdditionalCodeRepositories = $param["DisassociateAdditionalCodeRepositories"];
        }

        if (array_key_exists("ClsAccess",$param) and $param["ClsAccess"] !== null) {
            $this->ClsAccess = $param["ClsAccess"];
        }

        if (array_key_exists("AutoStopping",$param) and $param["AutoStopping"] !== null) {
            $this->AutoStopping = $param["AutoStopping"];
        }

        if (array_key_exists("StoppingCondition",$param) and $param["StoppingCondition"] !== null) {
            $this->StoppingCondition = new StoppingCondition();
            $this->StoppingCondition->deserialize($param["StoppingCondition"]);
        }

        if (array_key_exists("ClsConfig",$param) and $param["ClsConfig"] !== null) {
            $this->ClsConfig = new ClsConfig();
            $this->ClsConfig->deserialize($param["ClsConfig"]);
        }
    }
}
