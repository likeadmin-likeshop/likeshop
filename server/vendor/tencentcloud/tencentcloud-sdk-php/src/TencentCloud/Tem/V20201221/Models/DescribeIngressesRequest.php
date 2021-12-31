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
 * DescribeIngresses请求参数结构体
 *
 * @method string getNamespaceId() 获取namespace id
 * @method void setNamespaceId(string $NamespaceId) 设置namespace id
 * @method string getEksNamespace() 获取namespace
 * @method void setEksNamespace(string $EksNamespace) 设置namespace
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method array getNames() 获取ingress 规则名列表
 * @method void setNames(array $Names) 设置ingress 规则名列表
 */
class DescribeIngressesRequest extends AbstractModel
{
    /**
     * @var string namespace id
     */
    public $NamespaceId;

    /**
     * @var string namespace
     */
    public $EksNamespace;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var array ingress 规则名列表
     */
    public $Names;

    /**
     * @param string $NamespaceId namespace id
     * @param string $EksNamespace namespace
     * @param integer $SourceChannel 来源渠道
     * @param array $Names ingress 规则名列表
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

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }
    }
}
