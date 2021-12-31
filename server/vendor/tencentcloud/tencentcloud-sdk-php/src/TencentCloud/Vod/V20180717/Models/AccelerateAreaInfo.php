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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名的地区加速信息
 *
 * @method string getArea() 获取加速地区，可选值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
 * @method void setArea(string $Area) 设置加速地区，可选值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
 * @method string getTencentDisableReason() 获取腾讯禁用原因，可选值：
<li>ForLegalReasons：因法律原因导致关闭加速；</li>
<li>ForOverdueBills：因欠费停服导致关闭加速。</li>
 * @method void setTencentDisableReason(string $TencentDisableReason) 设置腾讯禁用原因，可选值：
<li>ForLegalReasons：因法律原因导致关闭加速；</li>
<li>ForOverdueBills：因欠费停服导致关闭加速。</li>
 * @method string getTencentEdgeDomain() 获取加速域名对应的 CNAME 域名。
 * @method void setTencentEdgeDomain(string $TencentEdgeDomain) 设置加速域名对应的 CNAME 域名。
 */
class AccelerateAreaInfo extends AbstractModel
{
    /**
     * @var string 加速地区，可选值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
     */
    public $Area;

    /**
     * @var string 腾讯禁用原因，可选值：
<li>ForLegalReasons：因法律原因导致关闭加速；</li>
<li>ForOverdueBills：因欠费停服导致关闭加速。</li>
     */
    public $TencentDisableReason;

    /**
     * @var string 加速域名对应的 CNAME 域名。
     */
    public $TencentEdgeDomain;

    /**
     * @param string $Area 加速地区，可选值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
     * @param string $TencentDisableReason 腾讯禁用原因，可选值：
<li>ForLegalReasons：因法律原因导致关闭加速；</li>
<li>ForOverdueBills：因欠费停服导致关闭加速。</li>
     * @param string $TencentEdgeDomain 加速域名对应的 CNAME 域名。
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("TencentDisableReason",$param) and $param["TencentDisableReason"] !== null) {
            $this->TencentDisableReason = $param["TencentDisableReason"];
        }

        if (array_key_exists("TencentEdgeDomain",$param) and $param["TencentEdgeDomain"] !== null) {
            $this->TencentEdgeDomain = $param["TencentEdgeDomain"];
        }
    }
}
