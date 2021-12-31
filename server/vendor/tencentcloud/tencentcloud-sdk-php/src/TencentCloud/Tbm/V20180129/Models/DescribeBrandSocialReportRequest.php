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
namespace TencentCloud\Tbm\V20180129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBrandSocialReport请求参数结构体
 *
 * @method string getBrandId() 获取品牌ID
 * @method void setBrandId(string $BrandId) 设置品牌ID
 * @method string getStartDate() 获取查询开始时间
 * @method void setStartDate(string $StartDate) 设置查询开始时间
 * @method string getEndDate() 获取查询结束时间
 * @method void setEndDate(string $EndDate) 设置查询结束时间
 */
class DescribeBrandSocialReportRequest extends AbstractModel
{
    /**
     * @var string 品牌ID
     */
    public $BrandId;

    /**
     * @var string 查询开始时间
     */
    public $StartDate;

    /**
     * @var string 查询结束时间
     */
    public $EndDate;

    /**
     * @param string $BrandId 品牌ID
     * @param string $StartDate 查询开始时间
     * @param string $EndDate 查询结束时间
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
        if (array_key_exists("BrandId",$param) and $param["BrandId"] !== null) {
            $this->BrandId = $param["BrandId"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
