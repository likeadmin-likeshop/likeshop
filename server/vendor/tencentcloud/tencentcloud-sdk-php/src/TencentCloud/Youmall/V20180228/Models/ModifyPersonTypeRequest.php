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
 * ModifyPersonType请求参数结构体
 *
 * @method string getCompanyId() 获取集团ID
 * @method void setCompanyId(string $CompanyId) 设置集团ID
 * @method integer getShopId() 获取门店ID
 * @method void setShopId(integer $ShopId) 设置门店ID
 * @method integer getPersonId() 获取顾客ID
 * @method void setPersonId(integer $PersonId) 设置顾客ID
 * @method integer getPersonType() 获取身份类型(0表示普通顾客，1 白名单，2 表示黑名单）
 * @method void setPersonType(integer $PersonType) 设置身份类型(0表示普通顾客，1 白名单，2 表示黑名单）
 * @method integer getPersonSubType() 获取身份子类型:
PersonType=0时(普通顾客)，0普通顾客
PersonType=1时(白名单)，0店员，1商场人员，2其他类型人员，3区域经理，4注册会员，5VIP用户
PersonType=2时(黑名单)，0普通黑名单，1小偷)
 * @method void setPersonSubType(integer $PersonSubType) 设置身份子类型:
PersonType=0时(普通顾客)，0普通顾客
PersonType=1时(白名单)，0店员，1商场人员，2其他类型人员，3区域经理，4注册会员，5VIP用户
PersonType=2时(黑名单)，0普通黑名单，1小偷)
 */
class ModifyPersonTypeRequest extends AbstractModel
{
    /**
     * @var string 集团ID
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
     * @var integer 身份类型(0表示普通顾客，1 白名单，2 表示黑名单）
     */
    public $PersonType;

    /**
     * @var integer 身份子类型:
PersonType=0时(普通顾客)，0普通顾客
PersonType=1时(白名单)，0店员，1商场人员，2其他类型人员，3区域经理，4注册会员，5VIP用户
PersonType=2时(黑名单)，0普通黑名单，1小偷)
     */
    public $PersonSubType;

    /**
     * @param string $CompanyId 集团ID
     * @param integer $ShopId 门店ID
     * @param integer $PersonId 顾客ID
     * @param integer $PersonType 身份类型(0表示普通顾客，1 白名单，2 表示黑名单）
     * @param integer $PersonSubType 身份子类型:
PersonType=0时(普通顾客)，0普通顾客
PersonType=1时(白名单)，0店员，1商场人员，2其他类型人员，3区域经理，4注册会员，5VIP用户
PersonType=2时(黑名单)，0普通黑名单，1小偷)
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

        if (array_key_exists("PersonType",$param) and $param["PersonType"] !== null) {
            $this->PersonType = $param["PersonType"];
        }

        if (array_key_exists("PersonSubType",$param) and $param["PersonSubType"] !== null) {
            $this->PersonSubType = $param["PersonSubType"];
        }
    }
}
