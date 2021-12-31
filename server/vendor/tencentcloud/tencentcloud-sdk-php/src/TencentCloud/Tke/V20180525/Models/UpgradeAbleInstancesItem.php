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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可升级节点信息
 *
 * @method string getInstanceId() 获取节点Id
 * @method void setInstanceId(string $InstanceId) 设置节点Id
 * @method string getVersion() 获取节点的当前版本
 * @method void setVersion(string $Version) 设置节点的当前版本
 * @method string getLatestVersion() 获取当前版本的最新小版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersion(string $LatestVersion) 设置当前版本的最新小版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpgradeAbleInstancesItem extends AbstractModel
{
    /**
     * @var string 节点Id
     */
    public $InstanceId;

    /**
     * @var string 节点的当前版本
     */
    public $Version;

    /**
     * @var string 当前版本的最新小版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersion;

    /**
     * @param string $InstanceId 节点Id
     * @param string $Version 节点的当前版本
     * @param string $LatestVersion 当前版本的最新小版本
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }
    }
}
