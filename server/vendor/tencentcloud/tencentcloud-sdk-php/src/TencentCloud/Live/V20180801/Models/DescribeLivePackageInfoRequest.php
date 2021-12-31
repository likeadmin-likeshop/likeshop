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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLivePackageInfo请求参数结构体
 *
 * @method integer getPackageType() 获取包类型，可选值：
0：流量包；
1：转码包。
2: 连麦包。
 * @method void setPackageType(integer $PackageType) 设置包类型，可选值：
0：流量包；
1：转码包。
2: 连麦包。
 * @method string getOrderBy() 获取排序规则:
1. BuyTimeDesc： 最新购买的排在最前面
2. BuyTimeAsc： 最老购买的排在最前面
3. ExpireTimeDesc： 最后过期的排在最前面
4. ExpireTimeAsc：最先过期的排在最前面

注意：
1. PackageType 为 2（连麦包） 的时候，不支持 3、4 排序
 * @method void setOrderBy(string $OrderBy) 设置排序规则:
1. BuyTimeDesc： 最新购买的排在最前面
2. BuyTimeAsc： 最老购买的排在最前面
3. ExpireTimeDesc： 最后过期的排在最前面
4. ExpireTimeAsc：最先过期的排在最前面

注意：
1. PackageType 为 2（连麦包） 的时候，不支持 3、4 排序
 * @method integer getPageNum() 获取取得第几页的数据，和 PageSize 同时传递才会生效。
 * @method void setPageNum(integer $PageNum) 设置取得第几页的数据，和 PageSize 同时传递才会生效。
 * @method integer getPageSize() 获取分页大小，和 PageNum 同时传递才会生效。
取值：10 ～ 100 之间的任意整数
 * @method void setPageSize(integer $PageSize) 设置分页大小，和 PageNum 同时传递才会生效。
取值：10 ～ 100 之间的任意整数
 */
class DescribeLivePackageInfoRequest extends AbstractModel
{
    /**
     * @var integer 包类型，可选值：
0：流量包；
1：转码包。
2: 连麦包。
     */
    public $PackageType;

    /**
     * @var string 排序规则:
1. BuyTimeDesc： 最新购买的排在最前面
2. BuyTimeAsc： 最老购买的排在最前面
3. ExpireTimeDesc： 最后过期的排在最前面
4. ExpireTimeAsc：最先过期的排在最前面

注意：
1. PackageType 为 2（连麦包） 的时候，不支持 3、4 排序
     */
    public $OrderBy;

    /**
     * @var integer 取得第几页的数据，和 PageSize 同时传递才会生效。
     */
    public $PageNum;

    /**
     * @var integer 分页大小，和 PageNum 同时传递才会生效。
取值：10 ～ 100 之间的任意整数
     */
    public $PageSize;

    /**
     * @param integer $PackageType 包类型，可选值：
0：流量包；
1：转码包。
2: 连麦包。
     * @param string $OrderBy 排序规则:
1. BuyTimeDesc： 最新购买的排在最前面
2. BuyTimeAsc： 最老购买的排在最前面
3. ExpireTimeDesc： 最后过期的排在最前面
4. ExpireTimeAsc：最先过期的排在最前面

注意：
1. PackageType 为 2（连麦包） 的时候，不支持 3、4 排序
     * @param integer $PageNum 取得第几页的数据，和 PageSize 同时传递才会生效。
     * @param integer $PageSize 分页大小，和 PageNum 同时传递才会生效。
取值：10 ～ 100 之间的任意整数
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
        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
