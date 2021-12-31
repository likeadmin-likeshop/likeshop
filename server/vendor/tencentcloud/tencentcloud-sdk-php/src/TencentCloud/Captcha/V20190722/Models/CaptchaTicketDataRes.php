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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaTicketData 接口 返回数据类型集合
 *
 * @method array getTicketAmountArray() 获取票据验证总量返回
 * @method void setTicketAmountArray(array $TicketAmountArray) 设置票据验证总量返回
 * @method array getTicketThroughArray() 获取票据验证通过量返回
 * @method void setTicketThroughArray(array $TicketThroughArray) 设置票据验证通过量返回
 * @method array getTicketInterceptArray() 获取票据验证拦截量返回
 * @method void setTicketInterceptArray(array $TicketInterceptArray) 设置票据验证拦截量返回
 */
class CaptchaTicketDataRes extends AbstractModel
{
    /**
     * @var array 票据验证总量返回
     */
    public $TicketAmountArray;

    /**
     * @var array 票据验证通过量返回
     */
    public $TicketThroughArray;

    /**
     * @var array 票据验证拦截量返回
     */
    public $TicketInterceptArray;

    /**
     * @param array $TicketAmountArray 票据验证总量返回
     * @param array $TicketThroughArray 票据验证通过量返回
     * @param array $TicketInterceptArray 票据验证拦截量返回
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
        if (array_key_exists("TicketAmountArray",$param) and $param["TicketAmountArray"] !== null) {
            $this->TicketAmountArray = [];
            foreach ($param["TicketAmountArray"] as $key => $value){
                $obj = new TicketAmountUnit();
                $obj->deserialize($value);
                array_push($this->TicketAmountArray, $obj);
            }
        }

        if (array_key_exists("TicketThroughArray",$param) and $param["TicketThroughArray"] !== null) {
            $this->TicketThroughArray = [];
            foreach ($param["TicketThroughArray"] as $key => $value){
                $obj = new TicketThroughUnit();
                $obj->deserialize($value);
                array_push($this->TicketThroughArray, $obj);
            }
        }

        if (array_key_exists("TicketInterceptArray",$param) and $param["TicketInterceptArray"] !== null) {
            $this->TicketInterceptArray = [];
            foreach ($param["TicketInterceptArray"] as $key => $value){
                $obj = new TicketInterceptUnit();
                $obj->deserialize($value);
                array_push($this->TicketInterceptArray, $obj);
            }
        }
    }
}
