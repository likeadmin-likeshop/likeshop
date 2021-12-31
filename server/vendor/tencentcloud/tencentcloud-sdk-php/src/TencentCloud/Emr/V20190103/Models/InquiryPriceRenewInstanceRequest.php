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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewInstance请求参数结构体
 *
 * @method integer getTimeSpan() 获取实例续费的时长。需要结合TimeUnit一起使用。1表示续费1一个月
 * @method void setTimeSpan(integer $TimeSpan) 设置实例续费的时长。需要结合TimeUnit一起使用。1表示续费1一个月
 * @method array getResourceIds() 获取待续费节点的资源ID列表。资源ID形如：emr-vm-xxxxxxxx。有效的资源ID可通过登录[控制台](https://console.cloud.tencent.com/emr/static/hardware)查询。
 * @method void setResourceIds(array $ResourceIds) 设置待续费节点的资源ID列表。资源ID形如：emr-vm-xxxxxxxx。有效的资源ID可通过登录[控制台](https://console.cloud.tencent.com/emr/static/hardware)查询。
 * @method Placement getPlacement() 获取实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method void setPlacement(Placement $Placement) 设置实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method integer getPayMode() 获取实例计费模式。此处只支持取值为1，表示包年包月。
 * @method void setPayMode(integer $PayMode) 设置实例计费模式。此处只支持取值为1，表示包年包月。
 * @method string getTimeUnit() 获取实例续费的时间单位。取值范围：
<li>m：表示月份。</li>
 * @method void setTimeUnit(string $TimeUnit) 设置实例续费的时间单位。取值范围：
<li>m：表示月份。</li>
 * @method string getCurrency() 获取货币种类。取值范围：
<li>CNY：表示人民币。</li>
 * @method void setCurrency(string $Currency) 设置货币种类。取值范围：
<li>CNY：表示人民币。</li>
 */
class InquiryPriceRenewInstanceRequest extends AbstractModel
{
    /**
     * @var integer 实例续费的时长。需要结合TimeUnit一起使用。1表示续费1一个月
     */
    public $TimeSpan;

    /**
     * @var array 待续费节点的资源ID列表。资源ID形如：emr-vm-xxxxxxxx。有效的资源ID可通过登录[控制台](https://console.cloud.tencent.com/emr/static/hardware)查询。
     */
    public $ResourceIds;

    /**
     * @var Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     */
    public $Placement;

    /**
     * @var integer 实例计费模式。此处只支持取值为1，表示包年包月。
     */
    public $PayMode;

    /**
     * @var string 实例续费的时间单位。取值范围：
<li>m：表示月份。</li>
     */
    public $TimeUnit;

    /**
     * @var string 货币种类。取值范围：
<li>CNY：表示人民币。</li>
     */
    public $Currency;

    /**
     * @param integer $TimeSpan 实例续费的时长。需要结合TimeUnit一起使用。1表示续费1一个月
     * @param array $ResourceIds 待续费节点的资源ID列表。资源ID形如：emr-vm-xxxxxxxx。有效的资源ID可通过登录[控制台](https://console.cloud.tencent.com/emr/static/hardware)查询。
     * @param Placement $Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     * @param integer $PayMode 实例计费模式。此处只支持取值为1，表示包年包月。
     * @param string $TimeUnit 实例续费的时间单位。取值范围：
<li>m：表示月份。</li>
     * @param string $Currency 货币种类。取值范围：
<li>CNY：表示人民币。</li>
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}
