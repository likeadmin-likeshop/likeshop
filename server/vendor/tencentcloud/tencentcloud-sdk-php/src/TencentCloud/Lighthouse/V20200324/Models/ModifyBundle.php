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
 * 描述了实例可变更的套餐。
 *
 * @method Price getModifyPrice() 获取更改实例套餐后需要补的差价。
 * @method void setModifyPrice(Price $ModifyPrice) 设置更改实例套餐后需要补的差价。
 * @method string getModifyBundleState() 获取变更套餐状态。取值：
<li>SOLD_OUT：套餐售罄</li>
<li>AVAILABLE：支持套餐变更</li>
<li>UNAVAILABLE：暂不支持套餐变更</li>
 * @method void setModifyBundleState(string $ModifyBundleState) 设置变更套餐状态。取值：
<li>SOLD_OUT：套餐售罄</li>
<li>AVAILABLE：支持套餐变更</li>
<li>UNAVAILABLE：暂不支持套餐变更</li>
 * @method Bundle getBundle() 获取套餐信息。
 * @method void setBundle(Bundle $Bundle) 设置套餐信息。
 */
class ModifyBundle extends AbstractModel
{
    /**
     * @var Price 更改实例套餐后需要补的差价。
     */
    public $ModifyPrice;

    /**
     * @var string 变更套餐状态。取值：
<li>SOLD_OUT：套餐售罄</li>
<li>AVAILABLE：支持套餐变更</li>
<li>UNAVAILABLE：暂不支持套餐变更</li>
     */
    public $ModifyBundleState;

    /**
     * @var Bundle 套餐信息。
     */
    public $Bundle;

    /**
     * @param Price $ModifyPrice 更改实例套餐后需要补的差价。
     * @param string $ModifyBundleState 变更套餐状态。取值：
<li>SOLD_OUT：套餐售罄</li>
<li>AVAILABLE：支持套餐变更</li>
<li>UNAVAILABLE：暂不支持套餐变更</li>
     * @param Bundle $Bundle 套餐信息。
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
        if (array_key_exists("ModifyPrice",$param) and $param["ModifyPrice"] !== null) {
            $this->ModifyPrice = new Price();
            $this->ModifyPrice->deserialize($param["ModifyPrice"]);
        }

        if (array_key_exists("ModifyBundleState",$param) and $param["ModifyBundleState"] !== null) {
            $this->ModifyBundleState = $param["ModifyBundleState"];
        }

        if (array_key_exists("Bundle",$param) and $param["Bundle"] !== null) {
            $this->Bundle = new Bundle();
            $this->Bundle->deserialize($param["Bundle"]);
        }
    }
}
