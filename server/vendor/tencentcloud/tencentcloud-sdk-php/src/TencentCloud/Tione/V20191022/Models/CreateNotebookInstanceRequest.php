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
 * CreateNotebookInstance请求参数结构体
 *
 * @method string getNotebookInstanceName() 获取Notebook实例名称，不能超过63个字符
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
 * @method void setNotebookInstanceName(string $NotebookInstanceName) 设置Notebook实例名称，不能超过63个字符
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
 * @method string getInstanceType() 获取Notebook算力类型
参考https://cloud.tencent.com/document/product/851/41239
 * @method void setInstanceType(string $InstanceType) 设置Notebook算力类型
参考https://cloud.tencent.com/document/product/851/41239
 * @method integer getVolumeSizeInGB() 获取数据卷大小(GB)
用户持久化Notebook实例的数据
 * @method void setVolumeSizeInGB(integer $VolumeSizeInGB) 设置数据卷大小(GB)
用户持久化Notebook实例的数据
 * @method string getDirectInternetAccess() 获取外网访问权限，可取值Enabled/Disabled
开启后，Notebook实例可以具有访问外网80，443端口的权限
 * @method void setDirectInternetAccess(string $DirectInternetAccess) 设置外网访问权限，可取值Enabled/Disabled
开启后，Notebook实例可以具有访问外网80，443端口的权限
 * @method string getRootAccess() 获取Root用户权限，可取值Enabled/Disabled
开启后，Notebook实例可以切换至root用户执行命令
 * @method void setRootAccess(string $RootAccess) 设置Root用户权限，可取值Enabled/Disabled
开启后，Notebook实例可以切换至root用户执行命令
 * @method string getSubnetId() 获取子网ID
如果需要Notebook实例访问VPC内的资源，则需要选择对应的子网
 * @method void setSubnetId(string $SubnetId) 设置子网ID
如果需要Notebook实例访问VPC内的资源，则需要选择对应的子网
 * @method string getLifecycleScriptsName() 获取生命周期脚本名称
必须是已存在的生命周期脚本，具体参考https://cloud.tencent.com/document/product/851/43140
 * @method void setLifecycleScriptsName(string $LifecycleScriptsName) 设置生命周期脚本名称
必须是已存在的生命周期脚本，具体参考https://cloud.tencent.com/document/product/851/43140
 * @method string getDefaultCodeRepository() 获取默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
参考https://cloud.tencent.com/document/product/851/43139
 * @method void setDefaultCodeRepository(string $DefaultCodeRepository) 设置默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
参考https://cloud.tencent.com/document/product/851/43139
 * @method array getAdditionalCodeRepositories() 获取其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
参考https://cloud.tencent.com/document/product/851/43139
 * @method void setAdditionalCodeRepositories(array $AdditionalCodeRepositories) 设置其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
参考https://cloud.tencent.com/document/product/851/43139
 * @method string getClsAccess() 获取已弃用，请使用ClsConfig配置。
是否开启CLS日志服务，可取值Enabled/Disabled，默认为Disabled
开启后，Notebook运行的日志会收集到CLS中，CLS会产生费用，请根据需要选择
 * @method void setClsAccess(string $ClsAccess) 设置已弃用，请使用ClsConfig配置。
是否开启CLS日志服务，可取值Enabled/Disabled，默认为Disabled
开启后，Notebook运行的日志会收集到CLS中，CLS会产生费用，请根据需要选择
 * @method StoppingCondition getStoppingCondition() 获取自动停止配置
选择定时停止Notebook实例
 * @method void setStoppingCondition(StoppingCondition $StoppingCondition) 设置自动停止配置
选择定时停止Notebook实例
 * @method string getAutoStopping() 获取自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
 * @method void setAutoStopping(string $AutoStopping) 设置自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
 * @method ClsConfig getClsConfig() 获取接入日志的配置，默认接入免费日志
 * @method void setClsConfig(ClsConfig $ClsConfig) 设置接入日志的配置，默认接入免费日志
 */
class CreateNotebookInstanceRequest extends AbstractModel
{
    /**
     * @var string Notebook实例名称，不能超过63个字符
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
     */
    public $NotebookInstanceName;

    /**
     * @var string Notebook算力类型
参考https://cloud.tencent.com/document/product/851/41239
     */
    public $InstanceType;

    /**
     * @var integer 数据卷大小(GB)
用户持久化Notebook实例的数据
     */
    public $VolumeSizeInGB;

    /**
     * @var string 外网访问权限，可取值Enabled/Disabled
开启后，Notebook实例可以具有访问外网80，443端口的权限
     */
    public $DirectInternetAccess;

    /**
     * @var string Root用户权限，可取值Enabled/Disabled
开启后，Notebook实例可以切换至root用户执行命令
     */
    public $RootAccess;

    /**
     * @var string 子网ID
如果需要Notebook实例访问VPC内的资源，则需要选择对应的子网
     */
    public $SubnetId;

    /**
     * @var string 生命周期脚本名称
必须是已存在的生命周期脚本，具体参考https://cloud.tencent.com/document/product/851/43140
     */
    public $LifecycleScriptsName;

    /**
     * @var string 默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
参考https://cloud.tencent.com/document/product/851/43139
     */
    public $DefaultCodeRepository;

    /**
     * @var array 其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
参考https://cloud.tencent.com/document/product/851/43139
     */
    public $AdditionalCodeRepositories;

    /**
     * @var string 已弃用，请使用ClsConfig配置。
是否开启CLS日志服务，可取值Enabled/Disabled，默认为Disabled
开启后，Notebook运行的日志会收集到CLS中，CLS会产生费用，请根据需要选择
     */
    public $ClsAccess;

    /**
     * @var StoppingCondition 自动停止配置
选择定时停止Notebook实例
     */
    public $StoppingCondition;

    /**
     * @var string 自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
     */
    public $AutoStopping;

    /**
     * @var ClsConfig 接入日志的配置，默认接入免费日志
     */
    public $ClsConfig;

    /**
     * @param string $NotebookInstanceName Notebook实例名称，不能超过63个字符
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
     * @param string $InstanceType Notebook算力类型
参考https://cloud.tencent.com/document/product/851/41239
     * @param integer $VolumeSizeInGB 数据卷大小(GB)
用户持久化Notebook实例的数据
     * @param string $DirectInternetAccess 外网访问权限，可取值Enabled/Disabled
开启后，Notebook实例可以具有访问外网80，443端口的权限
     * @param string $RootAccess Root用户权限，可取值Enabled/Disabled
开启后，Notebook实例可以切换至root用户执行命令
     * @param string $SubnetId 子网ID
如果需要Notebook实例访问VPC内的资源，则需要选择对应的子网
     * @param string $LifecycleScriptsName 生命周期脚本名称
必须是已存在的生命周期脚本，具体参考https://cloud.tencent.com/document/product/851/43140
     * @param string $DefaultCodeRepository 默认存储库名称
可以是已创建的存储库名称或者已https://开头的公共git库
参考https://cloud.tencent.com/document/product/851/43139
     * @param array $AdditionalCodeRepositories 其他存储库列表
每个元素可以是已创建的存储库名称或者已https://开头的公共git库
参考https://cloud.tencent.com/document/product/851/43139
     * @param string $ClsAccess 已弃用，请使用ClsConfig配置。
是否开启CLS日志服务，可取值Enabled/Disabled，默认为Disabled
开启后，Notebook运行的日志会收集到CLS中，CLS会产生费用，请根据需要选择
     * @param StoppingCondition $StoppingCondition 自动停止配置
选择定时停止Notebook实例
     * @param string $AutoStopping 自动停止，可取值Enabled/Disabled
取值为Disabled的时候StoppingCondition将被忽略
取值为Enabled的时候读取StoppingCondition作为自动停止的配置
     * @param ClsConfig $ClsConfig 接入日志的配置，默认接入免费日志
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("VolumeSizeInGB",$param) and $param["VolumeSizeInGB"] !== null) {
            $this->VolumeSizeInGB = $param["VolumeSizeInGB"];
        }

        if (array_key_exists("DirectInternetAccess",$param) and $param["DirectInternetAccess"] !== null) {
            $this->DirectInternetAccess = $param["DirectInternetAccess"];
        }

        if (array_key_exists("RootAccess",$param) and $param["RootAccess"] !== null) {
            $this->RootAccess = $param["RootAccess"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LifecycleScriptsName",$param) and $param["LifecycleScriptsName"] !== null) {
            $this->LifecycleScriptsName = $param["LifecycleScriptsName"];
        }

        if (array_key_exists("DefaultCodeRepository",$param) and $param["DefaultCodeRepository"] !== null) {
            $this->DefaultCodeRepository = $param["DefaultCodeRepository"];
        }

        if (array_key_exists("AdditionalCodeRepositories",$param) and $param["AdditionalCodeRepositories"] !== null) {
            $this->AdditionalCodeRepositories = $param["AdditionalCodeRepositories"];
        }

        if (array_key_exists("ClsAccess",$param) and $param["ClsAccess"] !== null) {
            $this->ClsAccess = $param["ClsAccess"];
        }

        if (array_key_exists("StoppingCondition",$param) and $param["StoppingCondition"] !== null) {
            $this->StoppingCondition = new StoppingCondition();
            $this->StoppingCondition->deserialize($param["StoppingCondition"]);
        }

        if (array_key_exists("AutoStopping",$param) and $param["AutoStopping"] !== null) {
            $this->AutoStopping = $param["AutoStopping"];
        }

        if (array_key_exists("ClsConfig",$param) and $param["ClsConfig"] !== null) {
            $this->ClsConfig = new ClsConfig();
            $this->ClsConfig->deserialize($param["ClsConfig"]);
        }
    }
}
