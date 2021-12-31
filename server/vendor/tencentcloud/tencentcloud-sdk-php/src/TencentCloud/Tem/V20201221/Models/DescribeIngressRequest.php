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
 * DescribeIngress请求参数结构体
 *
 * @method string getNamespaceId() 获取tem namespaceId
 * @method void setNamespaceId(string $NamespaceId) 设置tem namespaceId
 * @method string getEksNamespace() 获取eks namespace 名
 * @method void setEksNamespace(string $EksNamespace) 设置eks namespace 名
 * @method string getName() 获取ingress 规则名
 * @method void setName(string $Name) 设置ingress 规则名
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 */
class DescribeIngressRequest extends AbstractModel
{
    /**
     * @var string tem namespaceId
     */
    public $NamespaceId;

    /**
     * @var string eks namespace 名
     */
    public $EksNamespace;

    /**
     * @var string ingress 规则名
     */
    public $Name;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @param string $NamespaceId tem namespaceId
     * @param string $EksNamespace eks namespace 名
     * @param string $Name ingress 规则名
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("EksNamespace",$param) and $param["EksNamespace"] !== null) {
            $this->EksNamespace = $param["EksNamespace"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
