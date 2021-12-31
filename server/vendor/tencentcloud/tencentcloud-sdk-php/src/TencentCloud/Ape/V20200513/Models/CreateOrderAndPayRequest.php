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
namespace TencentCloud\Ape\V20200513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrderAndPay请求参数结构体
 *
 * @method integer getImageId() 获取图片ID
 * @method void setImageId(integer $ImageId) 设置图片ID
 * @method string getAuthUserId() 获取授权人ID
 * @method void setAuthUserId(string $AuthUserId) 设置授权人ID
 * @method integer getMarshalId() 获取售卖组合id
 * @method void setMarshalId(integer $MarshalId) 设置售卖组合id
 */
class CreateOrderAndPayRequest extends AbstractModel
{
    /**
     * @var integer 图片ID
     */
    public $ImageId;

    /**
     * @var string 授权人ID
     */
    public $AuthUserId;

    /**
     * @var integer 售卖组合id
     */
    public $MarshalId;

    /**
     * @param integer $ImageId 图片ID
     * @param string $AuthUserId 授权人ID
     * @param integer $MarshalId 售卖组合id
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("AuthUserId",$param) and $param["AuthUserId"] !== null) {
            $this->AuthUserId = $param["AuthUserId"];
        }

        if (array_key_exists("MarshalId",$param) and $param["MarshalId"] !== null) {
            $this->MarshalId = $param["MarshalId"];
        }
    }
}
