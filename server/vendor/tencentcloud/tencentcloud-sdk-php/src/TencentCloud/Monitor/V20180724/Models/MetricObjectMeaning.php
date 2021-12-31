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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标数据的解释
 *
 * @method string getEn() 获取指标英文解释
 * @method void setEn(string $En) 设置指标英文解释
 * @method string getZh() 获取指标中文解释
 * @method void setZh(string $Zh) 设置指标中文解释
 */
class MetricObjectMeaning extends AbstractModel
{
    /**
     * @var string 指标英文解释
     */
    public $En;

    /**
     * @var string 指标中文解释
     */
    public $Zh;

    /**
     * @param string $En 指标英文解释
     * @param string $Zh 指标中文解释
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
        if (array_key_exists("En",$param) and $param["En"] !== null) {
            $this->En = $param["En"];
        }

        if (array_key_exists("Zh",$param) and $param["Zh"] !== null) {
            $this->Zh = $param["Zh"];
        }
    }
}
