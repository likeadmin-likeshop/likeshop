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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务发布的环境信息。
 *
 * @method string getEnvironmentName() 获取环境名称。
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名称。
 * @method string getUrl() 获取访问路径。
 * @method void setUrl(string $Url) 设置访问路径。
 * @method integer getStatus() 获取发布状态，1 表示已发布，0 表示未发布。
 * @method void setStatus(integer $Status) 设置发布状态，1 表示已发布，0 表示未发布。
 * @method string getVersionName() 获取运行版本。
 * @method void setVersionName(string $VersionName) 设置运行版本。
 */
class Environment extends AbstractModel
{
    /**
     * @var string 环境名称。
     */
    public $EnvironmentName;

    /**
     * @var string 访问路径。
     */
    public $Url;

    /**
     * @var integer 发布状态，1 表示已发布，0 表示未发布。
     */
    public $Status;

    /**
     * @var string 运行版本。
     */
    public $VersionName;

    /**
     * @param string $EnvironmentName 环境名称。
     * @param string $Url 访问路径。
     * @param integer $Status 发布状态，1 表示已发布，0 表示未发布。
     * @param string $VersionName 运行版本。
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
        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }
    }
}
