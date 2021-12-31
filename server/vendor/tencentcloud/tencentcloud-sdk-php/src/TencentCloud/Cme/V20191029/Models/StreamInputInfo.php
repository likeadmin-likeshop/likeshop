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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输入流信息。
 *
 * @method string getInputType() 获取流输入类型，取值：
<li>VodPull ： 点播拉流；</li>
<li>LivePull ：直播拉流；</li>
<li>RtmpPush ： 直播推流。</li>
 * @method void setInputType(string $InputType) 设置流输入类型，取值：
<li>VodPull ： 点播拉流；</li>
<li>LivePull ：直播拉流；</li>
<li>RtmpPush ： 直播推流。</li>
 * @method VodPullInputInfo getVodPullInputInfo() 获取点播拉流信息，当 InputType = VodPull 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVodPullInputInfo(VodPullInputInfo $VodPullInputInfo) 设置点播拉流信息，当 InputType = VodPull 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LivePullInputInfo getLivePullInputInfo() 获取直播拉流信息，当 InputType = LivePull  时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivePullInputInfo(LivePullInputInfo $LivePullInputInfo) 设置直播拉流信息，当 InputType = LivePull  时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RtmpPushInputInfo getRtmpPushInputInfo() 获取直播推流信息，当 InputType = RtmpPush 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRtmpPushInputInfo(RtmpPushInputInfo $RtmpPushInputInfo) 设置直播推流信息，当 InputType = RtmpPush 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 */
class StreamInputInfo extends AbstractModel
{
    /**
     * @var string 流输入类型，取值：
<li>VodPull ： 点播拉流；</li>
<li>LivePull ：直播拉流；</li>
<li>RtmpPush ： 直播推流。</li>
     */
    public $InputType;

    /**
     * @var VodPullInputInfo 点播拉流信息，当 InputType = VodPull 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VodPullInputInfo;

    /**
     * @var LivePullInputInfo 直播拉流信息，当 InputType = LivePull  时必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivePullInputInfo;

    /**
     * @var RtmpPushInputInfo 直播推流信息，当 InputType = RtmpPush 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RtmpPushInputInfo;

    /**
     * @param string $InputType 流输入类型，取值：
<li>VodPull ： 点播拉流；</li>
<li>LivePull ：直播拉流；</li>
<li>RtmpPush ： 直播推流。</li>
     * @param VodPullInputInfo $VodPullInputInfo 点播拉流信息，当 InputType = VodPull 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LivePullInputInfo $LivePullInputInfo 直播拉流信息，当 InputType = LivePull  时必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RtmpPushInputInfo $RtmpPushInputInfo 直播推流信息，当 InputType = RtmpPush 时必填。
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("VodPullInputInfo",$param) and $param["VodPullInputInfo"] !== null) {
            $this->VodPullInputInfo = new VodPullInputInfo();
            $this->VodPullInputInfo->deserialize($param["VodPullInputInfo"]);
        }

        if (array_key_exists("LivePullInputInfo",$param) and $param["LivePullInputInfo"] !== null) {
            $this->LivePullInputInfo = new LivePullInputInfo();
            $this->LivePullInputInfo->deserialize($param["LivePullInputInfo"]);
        }

        if (array_key_exists("RtmpPushInputInfo",$param) and $param["RtmpPushInputInfo"] !== null) {
            $this->RtmpPushInputInfo = new RtmpPushInputInfo();
            $this->RtmpPushInputInfo->deserialize($param["RtmpPushInputInfo"]);
        }
    }
}
