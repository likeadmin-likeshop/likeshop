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
 * ingress rule 配置
 *
 * @method IngressRuleValue getHttp() 获取ingress rule value
 * @method void setHttp(IngressRuleValue $Http) 设置ingress rule value
 * @method string getHost() 获取host 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置host 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议，选项为 http， https，默认为 http
 * @method void setProtocol(string $Protocol) 设置协议，选项为 http， https，默认为 http
 */
class IngressRule extends AbstractModel
{
    /**
     * @var IngressRuleValue ingress rule value
     */
    public $Http;

    /**
     * @var string host 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string 协议，选项为 http， https，默认为 http
     */
    public $Protocol;

    /**
     * @param IngressRuleValue $Http ingress rule value
     * @param string $Host host 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议，选项为 http， https，默认为 http
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
        if (array_key_exists("Http",$param) and $param["Http"] !== null) {
            $this->Http = new IngressRuleValue();
            $this->Http->deserialize($param["Http"]);
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
