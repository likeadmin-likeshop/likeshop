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
 * DescribePlugins请求参数结构体
 *
 * @method array getPluginIds() 获取要查询的插件列表。
 * @method void setPluginIds(array $PluginIds) 设置要查询的插件列表。
 * @method string getPluginName() 获取要查询的插件名称。
 * @method void setPluginName(string $PluginName) 设置要查询的插件名称。
 * @method string getPluginType() 获取要查询的插件类型。
 * @method void setPluginType(string $PluginType) 设置要查询的插件类型。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 * @method array getFilters() 获取过滤条件。预留字段，目前不支持过滤。
 * @method void setFilters(array $Filters) 设置过滤条件。预留字段，目前不支持过滤。
 */
class DescribePluginsRequest extends AbstractModel
{
    /**
     * @var array 要查询的插件列表。
     */
    public $PluginIds;

    /**
     * @var string 要查询的插件名称。
     */
    public $PluginName;

    /**
     * @var string 要查询的插件类型。
     */
    public $PluginType;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。预留字段，目前不支持过滤。
     */
    public $Filters;

    /**
     * @param array $PluginIds 要查询的插件列表。
     * @param string $PluginName 要查询的插件名称。
     * @param string $PluginType 要查询的插件类型。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
     * @param integer $Offset 偏移量，默认为 0。
     * @param array $Filters 过滤条件。预留字段，目前不支持过滤。
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
        if (array_key_exists("PluginIds",$param) and $param["PluginIds"] !== null) {
            $this->PluginIds = $param["PluginIds"];
        }

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
