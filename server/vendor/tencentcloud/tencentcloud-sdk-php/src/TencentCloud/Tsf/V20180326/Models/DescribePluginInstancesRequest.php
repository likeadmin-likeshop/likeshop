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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePluginInstances请求参数结构体
 *
 * @method string getScopeValue() 获取分组或者API的ID
 * @method void setScopeValue(string $ScopeValue) 设置分组或者API的ID
 * @method boolean getBound() 获取绑定: true; 未绑定: false
 * @method void setBound(boolean $Bound) 设置绑定: true; 未绑定: false
 * @method integer getOffset() 获取翻页偏移量
 * @method void setOffset(integer $Offset) 设置翻页偏移量
 * @method integer getLimit() 获取每页展示的条数
 * @method void setLimit(integer $Limit) 设置每页展示的条数
 * @method string getType() 获取插件类型
 * @method void setType(string $Type) 设置插件类型
 * @method string getSearchWord() 获取搜索关键字
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字
 */
class DescribePluginInstancesRequest extends AbstractModel
{
    /**
     * @var string 分组或者API的ID
     */
    public $ScopeValue;

    /**
     * @var boolean 绑定: true; 未绑定: false
     */
    public $Bound;

    /**
     * @var integer 翻页偏移量
     */
    public $Offset;

    /**
     * @var integer 每页展示的条数
     */
    public $Limit;

    /**
     * @var string 插件类型
     */
    public $Type;

    /**
     * @var string 搜索关键字
     */
    public $SearchWord;

    /**
     * @param string $ScopeValue 分组或者API的ID
     * @param boolean $Bound 绑定: true; 未绑定: false
     * @param integer $Offset 翻页偏移量
     * @param integer $Limit 每页展示的条数
     * @param string $Type 插件类型
     * @param string $SearchWord 搜索关键字
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
        if (array_key_exists("ScopeValue",$param) and $param["ScopeValue"] !== null) {
            $this->ScopeValue = $param["ScopeValue"];
        }

        if (array_key_exists("Bound",$param) and $param["Bound"] !== null) {
            $this->Bound = $param["Bound"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
