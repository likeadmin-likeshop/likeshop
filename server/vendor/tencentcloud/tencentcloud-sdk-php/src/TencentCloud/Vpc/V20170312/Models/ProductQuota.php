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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述网络中心每个产品的配额信息
 *
 * @method string getQuotaId() 获取产品配额ID
 * @method void setQuotaId(string $QuotaId) 设置产品配额ID
 * @method string getQuotaName() 获取产品配额名称
 * @method void setQuotaName(string $QuotaName) 设置产品配额名称
 * @method integer getQuotaCurrent() 获取产品当前配额
 * @method void setQuotaCurrent(integer $QuotaCurrent) 设置产品当前配额
 * @method integer getQuotaLimit() 获取产品配额上限
 * @method void setQuotaLimit(integer $QuotaLimit) 设置产品配额上限
 * @method boolean getQuotaRegion() 获取产品配额是否有地域属性
 * @method void setQuotaRegion(boolean $QuotaRegion) 设置产品配额是否有地域属性
 */
class ProductQuota extends AbstractModel
{
    /**
     * @var string 产品配额ID
     */
    public $QuotaId;

    /**
     * @var string 产品配额名称
     */
    public $QuotaName;

    /**
     * @var integer 产品当前配额
     */
    public $QuotaCurrent;

    /**
     * @var integer 产品配额上限
     */
    public $QuotaLimit;

    /**
     * @var boolean 产品配额是否有地域属性
     */
    public $QuotaRegion;

    /**
     * @param string $QuotaId 产品配额ID
     * @param string $QuotaName 产品配额名称
     * @param integer $QuotaCurrent 产品当前配额
     * @param integer $QuotaLimit 产品配额上限
     * @param boolean $QuotaRegion 产品配额是否有地域属性
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
        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("QuotaName",$param) and $param["QuotaName"] !== null) {
            $this->QuotaName = $param["QuotaName"];
        }

        if (array_key_exists("QuotaCurrent",$param) and $param["QuotaCurrent"] !== null) {
            $this->QuotaCurrent = $param["QuotaCurrent"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("QuotaRegion",$param) and $param["QuotaRegion"] !== null) {
            $this->QuotaRegion = $param["QuotaRegion"];
        }
    }
}
