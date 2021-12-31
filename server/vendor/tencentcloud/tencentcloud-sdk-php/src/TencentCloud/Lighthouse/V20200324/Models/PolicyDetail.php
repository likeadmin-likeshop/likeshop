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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 折扣详情信息。
 *
 * @method integer getUserDiscount() 获取用户折扣。
 * @method void setUserDiscount(integer $UserDiscount) 设置用户折扣。
 * @method integer getCommonDiscount() 获取公共折扣。
 * @method void setCommonDiscount(integer $CommonDiscount) 设置公共折扣。
 * @method integer getFinalDiscount() 获取最终折扣。
 * @method void setFinalDiscount(integer $FinalDiscount) 设置最终折扣。
 */
class PolicyDetail extends AbstractModel
{
    /**
     * @var integer 用户折扣。
     */
    public $UserDiscount;

    /**
     * @var integer 公共折扣。
     */
    public $CommonDiscount;

    /**
     * @var integer 最终折扣。
     */
    public $FinalDiscount;

    /**
     * @param integer $UserDiscount 用户折扣。
     * @param integer $CommonDiscount 公共折扣。
     * @param integer $FinalDiscount 最终折扣。
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
        if (array_key_exists("UserDiscount",$param) and $param["UserDiscount"] !== null) {
            $this->UserDiscount = $param["UserDiscount"];
        }

        if (array_key_exists("CommonDiscount",$param) and $param["CommonDiscount"] !== null) {
            $this->CommonDiscount = $param["CommonDiscount"];
        }

        if (array_key_exists("FinalDiscount",$param) and $param["FinalDiscount"] !== null) {
            $this->FinalDiscount = $param["FinalDiscount"];
        }
    }
}
