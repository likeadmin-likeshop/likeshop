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
namespace TencentCloud\Market\V20191010\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FlowProductRemind请求参数结构体
 *
 * @method string getProviderUin() 获取服务商uin
 * @method void setProviderUin(string $ProviderUin) 设置服务商uin
 * @method string getSignId() 获取服务商实例ID
 * @method void setSignId(string $SignId) 设置服务商实例ID
 * @method string getResourceId() 获取云市场实例ID
 * @method void setResourceId(string $ResourceId) 设置云市场实例ID
 * @method string getTotalFlow() 获取实例总流量
 * @method void setTotalFlow(string $TotalFlow) 设置实例总流量
 * @method string getLeftFlow() 获取剩余流量
 * @method void setLeftFlow(string $LeftFlow) 设置剩余流量
 * @method string getFlowUnit() 获取流量单位
 * @method void setFlowUnit(string $FlowUnit) 设置流量单位
 */
class FlowProductRemindRequest extends AbstractModel
{
    /**
     * @var string 服务商uin
     */
    public $ProviderUin;

    /**
     * @var string 服务商实例ID
     */
    public $SignId;

    /**
     * @var string 云市场实例ID
     */
    public $ResourceId;

    /**
     * @var string 实例总流量
     */
    public $TotalFlow;

    /**
     * @var string 剩余流量
     */
    public $LeftFlow;

    /**
     * @var string 流量单位
     */
    public $FlowUnit;

    /**
     * @param string $ProviderUin 服务商uin
     * @param string $SignId 服务商实例ID
     * @param string $ResourceId 云市场实例ID
     * @param string $TotalFlow 实例总流量
     * @param string $LeftFlow 剩余流量
     * @param string $FlowUnit 流量单位
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
        if (array_key_exists("ProviderUin",$param) and $param["ProviderUin"] !== null) {
            $this->ProviderUin = $param["ProviderUin"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TotalFlow",$param) and $param["TotalFlow"] !== null) {
            $this->TotalFlow = $param["TotalFlow"];
        }

        if (array_key_exists("LeftFlow",$param) and $param["LeftFlow"] !== null) {
            $this->LeftFlow = $param["LeftFlow"];
        }

        if (array_key_exists("FlowUnit",$param) and $param["FlowUnit"] !== null) {
            $this->FlowUnit = $param["FlowUnit"];
        }
    }
}
