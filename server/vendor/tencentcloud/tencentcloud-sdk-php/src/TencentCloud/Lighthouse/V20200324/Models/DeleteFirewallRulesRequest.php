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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteFirewallRules请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method array getFirewallRules() 获取防火墙规则列表。
 * @method void setFirewallRules(array $FirewallRules) 设置防火墙规则列表。
 * @method integer getFirewallVersion() 获取防火墙当前版本。用户每次更新防火墙规则时版本会自动加1，防止规则已过期，不填不考虑冲突。
 * @method void setFirewallVersion(integer $FirewallVersion) 设置防火墙当前版本。用户每次更新防火墙规则时版本会自动加1，防止规则已过期，不填不考虑冲突。
 */
class DeleteFirewallRulesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var array 防火墙规则列表。
     */
    public $FirewallRules;

    /**
     * @var integer 防火墙当前版本。用户每次更新防火墙规则时版本会自动加1，防止规则已过期，不填不考虑冲突。
     */
    public $FirewallVersion;

    /**
     * @param string $InstanceId 实例 ID。
     * @param array $FirewallRules 防火墙规则列表。
     * @param integer $FirewallVersion 防火墙当前版本。用户每次更新防火墙规则时版本会自动加1，防止规则已过期，不填不考虑冲突。
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

        if (array_key_exists("FirewallRules",$param) and $param["FirewallRules"] !== null) {
            $this->FirewallRules = [];
            foreach ($param["FirewallRules"] as $key => $value){
                $obj = new FirewallRule();
                $obj->deserialize($value);
                array_push($this->FirewallRules, $obj);
            }
        }

        if (array_key_exists("FirewallVersion",$param) and $param["FirewallVersion"] !== null) {
            $this->FirewallVersion = $param["FirewallVersion"];
        }
    }
}
