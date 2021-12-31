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
 * 服务环境策略
 *
 * @method string getEnvironmentName() 获取环境名。
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名。
 * @method string getUrl() 获取访问服务对应环境的url。
 * @method void setUrl(string $Url) 设置访问服务对应环境的url。
 * @method integer getStatus() 获取发布状态。
 * @method void setStatus(integer $Status) 设置发布状态。
 * @method string getVersionName() 获取发布的版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置发布的版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategy() 获取限流值。
 * @method void setStrategy(integer $Strategy) 设置限流值。
 * @method integer getMaxStrategy() 获取最大限流值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxStrategy(integer $MaxStrategy) 设置最大限流值
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceEnvironmentStrategy extends AbstractModel
{
    /**
     * @var string 环境名。
     */
    public $EnvironmentName;

    /**
     * @var string 访问服务对应环境的url。
     */
    public $Url;

    /**
     * @var integer 发布状态。
     */
    public $Status;

    /**
     * @var string 发布的版本号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var integer 限流值。
     */
    public $Strategy;

    /**
     * @var integer 最大限流值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxStrategy;

    /**
     * @param string $EnvironmentName 环境名。
     * @param string $Url 访问服务对应环境的url。
     * @param integer $Status 发布状态。
     * @param string $VersionName 发布的版本号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Strategy 限流值。
     * @param integer $MaxStrategy 最大限流值
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

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("MaxStrategy",$param) and $param["MaxStrategy"] !== null) {
            $this->MaxStrategy = $param["MaxStrategy"];
        }
    }
}
