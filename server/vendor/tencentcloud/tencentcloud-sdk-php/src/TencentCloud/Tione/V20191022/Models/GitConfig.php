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
 * 存储库Git相关配置
 *
 * @method string getRepositoryUrl() 获取git地址
 * @method void setRepositoryUrl(string $RepositoryUrl) 设置git地址
 * @method string getBranch() 获取代码分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranch(string $Branch) 设置代码分支
注意：此字段可能返回 null，表示取不到有效值。
 */
class GitConfig extends AbstractModel
{
    /**
     * @var string git地址
     */
    public $RepositoryUrl;

    /**
     * @var string 代码分支
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branch;

    /**
     * @param string $RepositoryUrl git地址
     * @param string $Branch 代码分支
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
        if (array_key_exists("RepositoryUrl",$param) and $param["RepositoryUrl"] !== null) {
            $this->RepositoryUrl = $param["RepositoryUrl"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }
    }
}
