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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIngress请求参数结构体
 *
 * @method IngressInfo getIngress() 获取Ingress 规则配置
 * @method void setIngress(IngressInfo $Ingress) 设置Ingress 规则配置
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 */
class ModifyIngressRequest extends AbstractModel
{
    /**
     * @var IngressInfo Ingress 规则配置
     */
    public $Ingress;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @param IngressInfo $Ingress Ingress 规则配置
     * @param integer $SourceChannel 来源渠道
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
        if (array_key_exists("Ingress",$param) and $param["Ingress"] !== null) {
            $this->Ingress = new IngressInfo();
            $this->Ingress->deserialize($param["Ingress"]);
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
