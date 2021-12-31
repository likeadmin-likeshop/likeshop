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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * L4规则回源列表
 *
 * @method string getSource() 获取回源IP或域名
 * @method void setSource(string $Source) 设置回源IP或域名
 * @method integer getWeight() 获取权重值，取值[0,100]
 * @method void setWeight(integer $Weight) 设置权重值，取值[0,100]
 */
class L4RuleSource extends AbstractModel
{
    /**
     * @var string 回源IP或域名
     */
    public $Source;

    /**
     * @var integer 权重值，取值[0,100]
     */
    public $Weight;

    /**
     * @param string $Source 回源IP或域名
     * @param integer $Weight 权重值，取值[0,100]
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
