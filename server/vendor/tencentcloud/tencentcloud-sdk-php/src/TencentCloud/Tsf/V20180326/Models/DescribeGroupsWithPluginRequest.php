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
 * DescribeGroupsWithPlugin请求参数结构体
 *
 * @method string getPluginId() 获取插件ID
 * @method void setPluginId(string $PluginId) 设置插件ID
 * @method boolean getBound() 获取绑定/未绑定: true / false
 * @method void setBound(boolean $Bound) 设置绑定/未绑定: true / false
 * @method integer getOffset() 获取翻页偏移量
 * @method void setOffset(integer $Offset) 设置翻页偏移量
 * @method integer getLimit() 获取每页记录数量
 * @method void setLimit(integer $Limit) 设置每页记录数量
 * @method string getSearchWord() 获取搜索关键字
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字
 * @method string getGatewayInstanceId() 获取网关实体ID
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实体ID
 */
class DescribeGroupsWithPluginRequest extends AbstractModel
{
    /**
     * @var string 插件ID
     */
    public $PluginId;

    /**
     * @var boolean 绑定/未绑定: true / false
     */
    public $Bound;

    /**
     * @var integer 翻页偏移量
     */
    public $Offset;

    /**
     * @var integer 每页记录数量
     */
    public $Limit;

    /**
     * @var string 搜索关键字
     */
    public $SearchWord;

    /**
     * @var string 网关实体ID
     */
    public $GatewayInstanceId;

    /**
     * @param string $PluginId 插件ID
     * @param boolean $Bound 绑定/未绑定: true / false
     * @param integer $Offset 翻页偏移量
     * @param integer $Limit 每页记录数量
     * @param string $SearchWord 搜索关键字
     * @param string $GatewayInstanceId 网关实体ID
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
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

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }
    }
}
