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
 * DescribePathRewrites请求参数结构体
 *
 * @method string getGatewayGroupId() 获取网关部署组ID
 * @method void setGatewayGroupId(string $GatewayGroupId) 设置网关部署组ID
 * @method string getSearchWord() 获取根据正则表达式或替换的内容模糊查询
 * @method void setSearchWord(string $SearchWord) 设置根据正则表达式或替换的内容模糊查询
 * @method integer getLimit() 获取每页数量
 * @method void setLimit(integer $Limit) 设置每页数量
 * @method integer getOffset() 获取起始偏移量
 * @method void setOffset(integer $Offset) 设置起始偏移量
 */
class DescribePathRewritesRequest extends AbstractModel
{
    /**
     * @var string 网关部署组ID
     */
    public $GatewayGroupId;

    /**
     * @var string 根据正则表达式或替换的内容模糊查询
     */
    public $SearchWord;

    /**
     * @var integer 每页数量
     */
    public $Limit;

    /**
     * @var integer 起始偏移量
     */
    public $Offset;

    /**
     * @param string $GatewayGroupId 网关部署组ID
     * @param string $SearchWord 根据正则表达式或替换的内容模糊查询
     * @param integer $Limit 每页数量
     * @param integer $Offset 起始偏移量
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
        if (array_key_exists("GatewayGroupId",$param) and $param["GatewayGroupId"] !== null) {
            $this->GatewayGroupId = $param["GatewayGroupId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
