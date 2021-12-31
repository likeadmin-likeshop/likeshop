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
 * ListLayerVersions请求参数结构体
 *
 * @method string getLayerName() 获取层名称
 * @method void setLayerName(string $LayerName) 设置层名称
 * @method array getCompatibleRuntime() 获取适配的运行时
 * @method void setCompatibleRuntime(array $CompatibleRuntime) 设置适配的运行时
 */
class ListLayerVersionsRequest extends AbstractModel
{
    /**
     * @var string 层名称
     */
    public $LayerName;

    /**
     * @var array 适配的运行时
     */
    public $CompatibleRuntime;

    /**
     * @param string $LayerName 层名称
     * @param array $CompatibleRuntime 适配的运行时
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
        if (array_key_exists("LayerName",$param) and $param["LayerName"] !== null) {
            $this->LayerName = $param["LayerName"];
        }

        if (array_key_exists("CompatibleRuntime",$param) and $param["CompatibleRuntime"] !== null) {
            $this->CompatibleRuntime = $param["CompatibleRuntime"];
        }
    }
}
