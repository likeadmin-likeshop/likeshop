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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProducts请求参数结构体
 *
 * @method integer getLimit() 获取分页大小，当前页面中显示的最大数量，值范围 1-100
 * @method void setLimit(integer $Limit) 设置分页大小，当前页面中显示的最大数量，值范围 1-100
 * @method integer getOffset() 获取分页偏移，Offset从0开始
 * @method void setOffset(integer $Offset) 设置分页偏移，Offset从0开始
 * @method string getProductModel() 获取产器型号(APP产品,为APP包名)
 * @method void setProductModel(string $ProductModel) 设置产器型号(APP产品,为APP包名)
 * @method integer getStartTime() 获取开始时间 ，UNIX 时间戳，单位秒
 * @method void setStartTime(integer $StartTime) 设置开始时间 ，UNIX 时间戳，单位秒
 * @method integer getEndTime() 获取结束时间 ，UNIX 时间戳，单位秒
 * @method void setEndTime(integer $EndTime) 设置结束时间 ，UNIX 时间戳，单位秒
 */
class DescribeProductsRequest extends AbstractModel
{
    /**
     * @var integer 分页大小，当前页面中显示的最大数量，值范围 1-100
     */
    public $Limit;

    /**
     * @var integer 分页偏移，Offset从0开始
     */
    public $Offset;

    /**
     * @var string 产器型号(APP产品,为APP包名)
     */
    public $ProductModel;

    /**
     * @var integer 开始时间 ，UNIX 时间戳，单位秒
     */
    public $StartTime;

    /**
     * @var integer 结束时间 ，UNIX 时间戳，单位秒
     */
    public $EndTime;

    /**
     * @param integer $Limit 分页大小，当前页面中显示的最大数量，值范围 1-100
     * @param integer $Offset 分页偏移，Offset从0开始
     * @param string $ProductModel 产器型号(APP产品,为APP包名)
     * @param integer $StartTime 开始时间 ，UNIX 时间戳，单位秒
     * @param integer $EndTime 结束时间 ，UNIX 时间戳，单位秒
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProductModel",$param) and $param["ProductModel"] !== null) {
            $this->ProductModel = $param["ProductModel"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
