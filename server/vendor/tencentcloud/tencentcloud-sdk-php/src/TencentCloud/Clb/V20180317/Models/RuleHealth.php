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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一条转发规则的健康检查状态
 *
 * @method string getLocationId() 获取转发规则ID
 * @method void setLocationId(string $LocationId) 设置转发规则ID
 * @method string getDomain() 获取转发规则的域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置转发规则的域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取转发规则的Url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置转发规则的Url
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargets() 获取本规则上绑定的后端服务的健康检查状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargets(array $Targets) 设置本规则上绑定的后端服务的健康检查状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleHealth extends AbstractModel
{
    /**
     * @var string 转发规则ID
     */
    public $LocationId;

    /**
     * @var string 转发规则的域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 转发规则的Url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var array 本规则上绑定的后端服务的健康检查状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Targets;

    /**
     * @param string $LocationId 转发规则ID
     * @param string $Domain 转发规则的域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 转发规则的Url
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Targets 本规则上绑定的后端服务的健康检查状态
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
        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new TargetHealth();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
