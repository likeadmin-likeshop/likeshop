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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 插件列表详情。
 *
 * @method integer getTotalCount() 获取插件个数。
 * @method void setTotalCount(integer $TotalCount) 设置插件个数。
 * @method array getPluginSet() 获取插件详情。
 * @method void setPluginSet(array $PluginSet) 设置插件详情。
 */
class PluginSummary extends AbstractModel
{
    /**
     * @var integer 插件个数。
     */
    public $TotalCount;

    /**
     * @var array 插件详情。
     */
    public $PluginSet;

    /**
     * @param integer $TotalCount 插件个数。
     * @param array $PluginSet 插件详情。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PluginSet",$param) and $param["PluginSet"] !== null) {
            $this->PluginSet = [];
            foreach ($param["PluginSet"] as $key => $value){
                $obj = new Plugin();
                $obj->deserialize($value);
                array_push($this->PluginSet, $obj);
            }
        }
    }
}
