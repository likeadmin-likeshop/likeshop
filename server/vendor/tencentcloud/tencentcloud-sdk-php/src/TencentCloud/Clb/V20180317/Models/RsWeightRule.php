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
 * 修改节点权重的数据类型
 *
 * @method string getListenerId() 获取负载均衡监听器 ID。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID。
 * @method array getTargets() 获取要修改权重的后端机器列表。
 * @method void setTargets(array $Targets) 设置要修改权重的后端机器列表。
 * @method string getLocationId() 获取转发规则的ID，七层规则时需要此参数，4层规则不需要。
 * @method void setLocationId(string $LocationId) 设置转发规则的ID，七层规则时需要此参数，4层规则不需要。
 * @method string getDomain() 获取目标规则的域名，提供LocationId参数时本参数不生效。
 * @method void setDomain(string $Domain) 设置目标规则的域名，提供LocationId参数时本参数不生效。
 * @method string getUrl() 获取目标规则的URL，提供LocationId参数时本参数不生效。
 * @method void setUrl(string $Url) 设置目标规则的URL，提供LocationId参数时本参数不生效。
 * @method integer getWeight() 获取后端服务修改后的转发权重，取值范围：[0，100]。此参数的优先级低于前述[Target](https://cloud.tencent.com/document/api/214/30694#Target)中的Weight参数，即最终的权重值以Target中的Weight参数值为准，仅当Target中的Weight参数为空时，才以RsWeightRule中的Weight参数为准。
 * @method void setWeight(integer $Weight) 设置后端服务修改后的转发权重，取值范围：[0，100]。此参数的优先级低于前述[Target](https://cloud.tencent.com/document/api/214/30694#Target)中的Weight参数，即最终的权重值以Target中的Weight参数值为准，仅当Target中的Weight参数为空时，才以RsWeightRule中的Weight参数为准。
 */
class RsWeightRule extends AbstractModel
{
    /**
     * @var string 负载均衡监听器 ID。
     */
    public $ListenerId;

    /**
     * @var array 要修改权重的后端机器列表。
     */
    public $Targets;

    /**
     * @var string 转发规则的ID，七层规则时需要此参数，4层规则不需要。
     */
    public $LocationId;

    /**
     * @var string 目标规则的域名，提供LocationId参数时本参数不生效。
     */
    public $Domain;

    /**
     * @var string 目标规则的URL，提供LocationId参数时本参数不生效。
     */
    public $Url;

    /**
     * @var integer 后端服务修改后的转发权重，取值范围：[0，100]。此参数的优先级低于前述[Target](https://cloud.tencent.com/document/api/214/30694#Target)中的Weight参数，即最终的权重值以Target中的Weight参数值为准，仅当Target中的Weight参数为空时，才以RsWeightRule中的Weight参数为准。
     */
    public $Weight;

    /**
     * @param string $ListenerId 负载均衡监听器 ID。
     * @param array $Targets 要修改权重的后端机器列表。
     * @param string $LocationId 转发规则的ID，七层规则时需要此参数，4层规则不需要。
     * @param string $Domain 目标规则的域名，提供LocationId参数时本参数不生效。
     * @param string $Url 目标规则的URL，提供LocationId参数时本参数不生效。
     * @param integer $Weight 后端服务修改后的转发权重，取值范围：[0，100]。此参数的优先级低于前述[Target](https://cloud.tencent.com/document/api/214/30694#Target)中的Weight参数，即最终的权重值以Target中的Weight参数值为准，仅当Target中的Weight参数为空时，才以RsWeightRule中的Weight参数为准。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
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

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
