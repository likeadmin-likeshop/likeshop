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
 * 发布服务返回
 *
 * @method string getReleaseDesc() 获取发布时的备注信息填写。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseDesc(string $ReleaseDesc) 设置发布时的备注信息填写。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseVersion() 获取发布的版本id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseVersion(string $ReleaseVersion) 设置发布的版本id。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReleaseService extends AbstractModel
{
    /**
     * @var string 发布时的备注信息填写。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseDesc;

    /**
     * @var string 发布的版本id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseVersion;

    /**
     * @param string $ReleaseDesc 发布时的备注信息填写。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseVersion 发布的版本id。
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
        if (array_key_exists("ReleaseDesc",$param) and $param["ReleaseDesc"] !== null) {
            $this->ReleaseDesc = $param["ReleaseDesc"];
        }

        if (array_key_exists("ReleaseVersion",$param) and $param["ReleaseVersion"] !== null) {
            $this->ReleaseVersion = $param["ReleaseVersion"];
        }
    }
}
