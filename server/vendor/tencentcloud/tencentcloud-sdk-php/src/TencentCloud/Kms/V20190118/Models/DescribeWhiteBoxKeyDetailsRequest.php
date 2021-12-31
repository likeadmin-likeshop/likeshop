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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWhiteBoxKeyDetails请求参数结构体
 *
 * @method integer getKeyStatus() 获取过滤条件：密钥的状态，0：disabled，1：enabled
 * @method void setKeyStatus(integer $KeyStatus) 设置过滤条件：密钥的状态，0：disabled，1：enabled
 * @method integer getOffset() 获取含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
 * @method void setOffset(integer $Offset) 设置含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
 * @method integer getLimit() 获取含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为0, 表示不分页
 * @method void setLimit(integer $Limit) 设置含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为0, 表示不分页
 * @method array getTagFilters() 获取标签过滤条件
 * @method void setTagFilters(array $TagFilters) 设置标签过滤条件
 */
class DescribeWhiteBoxKeyDetailsRequest extends AbstractModel
{
    /**
     * @var integer 过滤条件：密钥的状态，0：disabled，1：enabled
     */
    public $KeyStatus;

    /**
     * @var integer 含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
     */
    public $Offset;

    /**
     * @var integer 含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为0, 表示不分页
     */
    public $Limit;

    /**
     * @var array 标签过滤条件
     */
    public $TagFilters;

    /**
     * @param integer $KeyStatus 过滤条件：密钥的状态，0：disabled，1：enabled
     * @param integer $Offset 含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
     * @param integer $Limit 含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为0, 表示不分页
     * @param array $TagFilters 标签过滤条件
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
        if (array_key_exists("KeyStatus",$param) and $param["KeyStatus"] !== null) {
            $this->KeyStatus = $param["KeyStatus"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
