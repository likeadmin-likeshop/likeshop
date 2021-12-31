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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LightResult
 *
 * @method string getLightLevel() 获取光照程度，参考提交任务时的LightStandard指定的Name参数
 * @method void setLightLevel(string $LightLevel) 设置光照程度，参考提交任务时的LightStandard指定的Name参数
 * @method float getLightValue() 获取光照亮度
 * @method void setLightValue(float $LightValue) 设置光照亮度
 */
class LightResult extends AbstractModel
{
    /**
     * @var string 光照程度，参考提交任务时的LightStandard指定的Name参数
     */
    public $LightLevel;

    /**
     * @var float 光照亮度
     */
    public $LightValue;

    /**
     * @param string $LightLevel 光照程度，参考提交任务时的LightStandard指定的Name参数
     * @param float $LightValue 光照亮度
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
        if (array_key_exists("LightLevel",$param) and $param["LightLevel"] !== null) {
            $this->LightLevel = $param["LightLevel"];
        }

        if (array_key_exists("LightValue",$param) and $param["LightValue"] !== null) {
            $this->LightValue = $param["LightValue"];
        }
    }
}
