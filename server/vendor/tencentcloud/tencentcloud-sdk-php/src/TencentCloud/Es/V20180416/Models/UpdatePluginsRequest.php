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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePlugins请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getInstallPluginList() 获取需要安装的插件名列表
 * @method void setInstallPluginList(array $InstallPluginList) 设置需要安装的插件名列表
 * @method array getRemovePluginList() 获取需要卸载的插件名列表
 * @method void setRemovePluginList(array $RemovePluginList) 设置需要卸载的插件名列表
 * @method boolean getForceRestart() 获取是否强制重启
 * @method void setForceRestart(boolean $ForceRestart) 设置是否强制重启
 * @method boolean getForceUpdate() 获取是否重新安装
 * @method void setForceUpdate(boolean $ForceUpdate) 设置是否重新安装
 */
class UpdatePluginsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 需要安装的插件名列表
     */
    public $InstallPluginList;

    /**
     * @var array 需要卸载的插件名列表
     */
    public $RemovePluginList;

    /**
     * @var boolean 是否强制重启
     */
    public $ForceRestart;

    /**
     * @var boolean 是否重新安装
     */
    public $ForceUpdate;

    /**
     * @param string $InstanceId 实例ID
     * @param array $InstallPluginList 需要安装的插件名列表
     * @param array $RemovePluginList 需要卸载的插件名列表
     * @param boolean $ForceRestart 是否强制重启
     * @param boolean $ForceUpdate 是否重新安装
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstallPluginList",$param) and $param["InstallPluginList"] !== null) {
            $this->InstallPluginList = $param["InstallPluginList"];
        }

        if (array_key_exists("RemovePluginList",$param) and $param["RemovePluginList"] !== null) {
            $this->RemovePluginList = $param["RemovePluginList"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("ForceUpdate",$param) and $param["ForceUpdate"] !== null) {
            $this->ForceUpdate = $param["ForceUpdate"];
        }
    }
}
