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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 带有权重的函数版本
 *
 * @method string getVersion() 获取函数版本名称
 * @method void setVersion(string $Version) 设置函数版本名称
 * @method float getWeight() 获取该版本的权重
 * @method void setWeight(float $Weight) 设置该版本的权重
 */
class VersionWeight extends AbstractModel
{
    /**
     * @var string 函数版本名称
     */
    public $Version;

    /**
     * @var float 该版本的权重
     */
    public $Weight;

    /**
     * @param string $Version 函数版本名称
     * @param float $Weight 该版本的权重
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
