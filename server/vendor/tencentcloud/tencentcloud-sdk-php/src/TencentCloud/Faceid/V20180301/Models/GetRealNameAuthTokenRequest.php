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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRealNameAuthToken请求参数结构体
 *
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getIDCard() 获取身份证号
 * @method void setIDCard(string $IDCard) 设置身份证号
 * @method string getCallbackURL() 获取回调地址。实名认证完成后，将会重定向到这个地址通知认证发起方。仅支持http或https协议。
 * @method void setCallbackURL(string $CallbackURL) 设置回调地址。实名认证完成后，将会重定向到这个地址通知认证发起方。仅支持http或https协议。
 */
class GetRealNameAuthTokenRequest extends AbstractModel
{
    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 身份证号
     */
    public $IDCard;

    /**
     * @var string 回调地址。实名认证完成后，将会重定向到这个地址通知认证发起方。仅支持http或https协议。
     */
    public $CallbackURL;

    /**
     * @param string $Name 姓名
     * @param string $IDCard 身份证号
     * @param string $CallbackURL 回调地址。实名认证完成后，将会重定向到这个地址通知认证发起方。仅支持http或https协议。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IDCard",$param) and $param["IDCard"] !== null) {
            $this->IDCard = $param["IDCard"];
        }

        if (array_key_exists("CallbackURL",$param) and $param["CallbackURL"] !== null) {
            $this->CallbackURL = $param["CallbackURL"];
        }
    }
}
