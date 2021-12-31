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
 * 环境限流
 *
 * @method string getEnvironmentName() 获取环境名
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名
 * @method integer getQuota() 获取限流值
 * @method void setQuota(integer $Quota) 设置限流值
 * @method integer getMaxQuota() 获取限流最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxQuota(integer $MaxQuota) 设置限流最大值
注意：此字段可能返回 null，表示取不到有效值。
 */
class EnvironmentStrategy extends AbstractModel
{
    /**
     * @var string 环境名
     */
    public $EnvironmentName;

    /**
     * @var integer 限流值
     */
    public $Quota;

    /**
     * @var integer 限流最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxQuota;

    /**
     * @param string $EnvironmentName 环境名
     * @param integer $Quota 限流值
     * @param integer $MaxQuota 限流最大值
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

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }

        if (array_key_exists("MaxQuota",$param) and $param["MaxQuota"] !== null) {
            $this->MaxQuota = $param["MaxQuota"];
        }
    }
}
