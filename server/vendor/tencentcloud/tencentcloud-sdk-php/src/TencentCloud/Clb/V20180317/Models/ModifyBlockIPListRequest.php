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
 * ModifyBlockIPList请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取负载均衡实例ID
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置负载均衡实例ID
 * @method string getType() 获取操作类型，可取：
<li> add_customized_field（首次设置header，开启黑名单功能）</li>
<li> set_customized_field（修改header）</li>
<li> del_customized_field（删除header）</li>
<li> add_blocked（添加黑名单）</li>
<li> del_blocked（删除黑名单）</li>
<li> flush_blocked（清空黑名单）</li>
 * @method void setType(string $Type) 设置操作类型，可取：
<li> add_customized_field（首次设置header，开启黑名单功能）</li>
<li> set_customized_field（修改header）</li>
<li> del_customized_field（删除header）</li>
<li> add_blocked（添加黑名单）</li>
<li> del_blocked（删除黑名单）</li>
<li> flush_blocked（清空黑名单）</li>
 * @method string getClientIPField() 获取客户端真实IP存放的header字段名
 * @method void setClientIPField(string $ClientIPField) 设置客户端真实IP存放的header字段名
 * @method array getBlockIPList() 获取封禁IP列表，单次操作数组最大长度支持200000
 * @method void setBlockIPList(array $BlockIPList) 设置封禁IP列表，单次操作数组最大长度支持200000
 * @method integer getExpireTime() 获取过期时间，单位秒，默认值3600
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间，单位秒，默认值3600
 * @method string getAddStrategy() 获取添加IP的策略，可取：fifo（如果黑名单容量已满，新加入黑名单的IP采用先进先出策略）
 * @method void setAddStrategy(string $AddStrategy) 设置添加IP的策略，可取：fifo（如果黑名单容量已满，新加入黑名单的IP采用先进先出策略）
 */
class ModifyBlockIPListRequest extends AbstractModel
{
    /**
     * @var array 负载均衡实例ID
     */
    public $LoadBalancerIds;

    /**
     * @var string 操作类型，可取：
<li> add_customized_field（首次设置header，开启黑名单功能）</li>
<li> set_customized_field（修改header）</li>
<li> del_customized_field（删除header）</li>
<li> add_blocked（添加黑名单）</li>
<li> del_blocked（删除黑名单）</li>
<li> flush_blocked（清空黑名单）</li>
     */
    public $Type;

    /**
     * @var string 客户端真实IP存放的header字段名
     */
    public $ClientIPField;

    /**
     * @var array 封禁IP列表，单次操作数组最大长度支持200000
     */
    public $BlockIPList;

    /**
     * @var integer 过期时间，单位秒，默认值3600
     */
    public $ExpireTime;

    /**
     * @var string 添加IP的策略，可取：fifo（如果黑名单容量已满，新加入黑名单的IP采用先进先出策略）
     */
    public $AddStrategy;

    /**
     * @param array $LoadBalancerIds 负载均衡实例ID
     * @param string $Type 操作类型，可取：
<li> add_customized_field（首次设置header，开启黑名单功能）</li>
<li> set_customized_field（修改header）</li>
<li> del_customized_field（删除header）</li>
<li> add_blocked（添加黑名单）</li>
<li> del_blocked（删除黑名单）</li>
<li> flush_blocked（清空黑名单）</li>
     * @param string $ClientIPField 客户端真实IP存放的header字段名
     * @param array $BlockIPList 封禁IP列表，单次操作数组最大长度支持200000
     * @param integer $ExpireTime 过期时间，单位秒，默认值3600
     * @param string $AddStrategy 添加IP的策略，可取：fifo（如果黑名单容量已满，新加入黑名单的IP采用先进先出策略）
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClientIPField",$param) and $param["ClientIPField"] !== null) {
            $this->ClientIPField = $param["ClientIPField"];
        }

        if (array_key_exists("BlockIPList",$param) and $param["BlockIPList"] !== null) {
            $this->BlockIPList = $param["BlockIPList"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AddStrategy",$param) and $param["AddStrategy"] !== null) {
            $this->AddStrategy = $param["AddStrategy"];
        }
    }
}
