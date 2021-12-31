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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePersonFeature请求参数结构体
 *
 * @method string getCompanyId() 获取公司ID
 * @method void setCompanyId(string $CompanyId) 设置公司ID
 * @method integer getShopId() 获取门店ID
 * @method void setShopId(integer $ShopId) 设置门店ID
 * @method integer getPersonId() 获取顾客ID
 * @method void setPersonId(integer $PersonId) 设置顾客ID
 */
class DeletePersonFeatureRequest extends AbstractModel
{
    /**
     * @var string 公司ID
     */
    public $CompanyId;

    /**
     * @var integer 门店ID
     */
    public $ShopId;

    /**
     * @var integer 顾客ID
     */
    public $PersonId;

    /**
     * @param string $CompanyId 公司ID
     * @param integer $ShopId 门店ID
     * @param integer $PersonId 顾客ID
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }
    }
}
