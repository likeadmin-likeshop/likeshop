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
 * 资源包中包含的资源。
 *
 * @method string getResourceType() 获取资源类型。
<li>Storage：存储资源包。</li>
<li>Traffic：流量资源包。</li>
<li>Transcode：普通转码资源包。</li>
<li>TESHD：极速高清转码资源包。</li>
<li>Review：视频审核转码资源包。</li>
 * @method void setResourceType(string $ResourceType) 设置资源类型。
<li>Storage：存储资源包。</li>
<li>Traffic：流量资源包。</li>
<li>Transcode：普通转码资源包。</li>
<li>TESHD：极速高清转码资源包。</li>
<li>Review：视频审核转码资源包。</li>
 * @method integer getAmount() 获取资源包额度。
<li>视频存储资源包，单位为字节。</li>
<li>视频转码资源包，单位为秒。</li>
<li>视频审核资源包，单位为秒。</li>
<li>视频极速高清资源包，单位为秒。</li>
<li>视频加速资源包，单位为字节。</li>
 * @method void setAmount(integer $Amount) 设置资源包额度。
<li>视频存储资源包，单位为字节。</li>
<li>视频转码资源包，单位为秒。</li>
<li>视频审核资源包，单位为秒。</li>
<li>视频极速高清资源包，单位为秒。</li>
<li>视频加速资源包，单位为字节。</li>
 * @method integer getLeft() 获取资源包余量。
<li>视频存储资源包，单位为字节。</li>
<li>视频转码资源包，单位为秒。</li>
<li>视频审核资源包，单位为秒。</li>
<li>视频极速高清资源包，单位为秒。</li>
<li>视频加速资源包，单位为字节。</li>
 * @method void setLeft(integer $Left) 设置资源包余量。
<li>视频存储资源包，单位为字节。</li>
<li>视频转码资源包，单位为秒。</li>
<li>视频审核资源包，单位为秒。</li>
<li>视频极速高清资源包，单位为秒。</li>
<li>视频加速资源包，单位为字节。</li>
 */
class ProductInstanceRecource extends AbstractModel
{
    /**
     * @var string 资源类型。
<li>Storage：存储资源包。</li>
<li>Traffic：流量资源包。</li>
<li>Transcode：普通转码资源包。</li>
<li>TESHD：极速高清转码资源包。</li>
<li>Review：视频审核转码资源包。</li>
     */
    public $ResourceType;

    /**
     * @var integer 资源包额度。
<li>视频存储资源包，单位为字节。</li>
<li>视频转码资源包，单位为秒。</li>
<li>视频审核资源包，单位为秒。</li>
<li>视频极速高清资源包，单位为秒。</li>
<li>视频加速资源包，单位为字节。</li>
     */
    public $Amount;

    /**
     * @var integer 资源包余量。
<li>视频存储资源包，单位为字节。</li>
<li>视频转码资源包，单位为秒。</li>
<li>视频审核资源包，单位为秒。</li>
<li>视频极速高清资源包，单位为秒。</li>
<li>视频加速资源包，单位为字节。</li>
     */
    public $Left;

    /**
     * @param string $ResourceType 资源类型。
<li>Storage：存储资源包。</li>
<li>Traffic：流量资源包。</li>
<li>Transcode：普通转码资源包。</li>
<li>TESHD：极速高清转码资源包。</li>
<li>Review：视频审核转码资源包。</li>
     * @param integer $Amount 资源包额度。
<li>视频存储资源包，单位为字节。</li>
<li>视频转码资源包，单位为秒。</li>
<li>视频审核资源包，单位为秒。</li>
<li>视频极速高清资源包，单位为秒。</li>
<li>视频加速资源包，单位为字节。</li>
     * @param integer $Left 资源包余量。
<li>视频存储资源包，单位为字节。</li>
<li>视频转码资源包，单位为秒。</li>
<li>视频审核资源包，单位为秒。</li>
<li>视频极速高清资源包，单位为秒。</li>
<li>视频加速资源包，单位为字节。</li>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }
    }
}
