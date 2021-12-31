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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络ACL规则集合
 *
 * @method array getIngress() 获取入站规则。
 * @method void setIngress(array $Ingress) 设置入站规则。
 * @method array getEgress() 获取出站规则。
 * @method void setEgress(array $Egress) 设置出站规则。
 */
class NetworkAclEntrySet extends AbstractModel
{
    /**
     * @var array 入站规则。
     */
    public $Ingress;

    /**
     * @var array 出站规则。
     */
    public $Egress;

    /**
     * @param array $Ingress 入站规则。
     * @param array $Egress 出站规则。
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
            $this->Ingress = [];
            foreach ($param["Ingress"] as $key => $value){
                $obj = new NetworkAclEntry();
                $obj->deserialize($value);
                array_push($this->Ingress, $obj);
            }
        }

        if (array_key_exists("Egress",$param) and $param["Egress"] !== null) {
            $this->Egress = [];
            foreach ($param["Egress"] as $key => $value){
                $obj = new NetworkAclEntry();
                $obj->deserialize($value);
                array_push($this->Egress, $obj);
            }
        }
    }
}
