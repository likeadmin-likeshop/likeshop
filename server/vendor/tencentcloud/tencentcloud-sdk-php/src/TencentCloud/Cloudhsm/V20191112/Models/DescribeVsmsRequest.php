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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVsms请求参数结构体
 *
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method integer getLimit() 获取最大数量
 * @method void setLimit(integer $Limit) 设置最大数量
 * @method string getSearchWord() 获取查询关键字
 * @method void setSearchWord(string $SearchWord) 设置查询关键字
 * @method array getTagFilters() 获取标签过滤条件
 * @method void setTagFilters(array $TagFilters) 设置标签过滤条件
 * @method string getManufacturer() 获取设备所属的厂商名称，根据厂商来进行筛选
 * @method void setManufacturer(string $Manufacturer) 设置设备所属的厂商名称，根据厂商来进行筛选
 */
class DescribeVsmsRequest extends AbstractModel
{
    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var integer 最大数量
     */
    public $Limit;

    /**
     * @var string 查询关键字
     */
    public $SearchWord;

    /**
     * @var array 标签过滤条件
     */
    public $TagFilters;

    /**
     * @var string 设备所属的厂商名称，根据厂商来进行筛选
     */
    public $Manufacturer;

    /**
     * @param integer $Offset 偏移
     * @param integer $Limit 最大数量
     * @param string $SearchWord 查询关键字
     * @param array $TagFilters 标签过滤条件
     * @param string $Manufacturer 设备所属的厂商名称，根据厂商来进行筛选
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }
    }
}
