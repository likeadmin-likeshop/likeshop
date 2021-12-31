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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteProduct请求参数结构体
 *
 * @method string getProductId() 获取需要删除的产品 ID
 * @method void setProductId(string $ProductId) 设置需要删除的产品 ID
 * @method string getSkey() 获取删除LoRa产品需要skey
 * @method void setSkey(string $Skey) 设置删除LoRa产品需要skey
 */
class DeleteProductRequest extends AbstractModel
{
    /**
     * @var string 需要删除的产品 ID
     */
    public $ProductId;

    /**
     * @var string 删除LoRa产品需要skey
     */
    public $Skey;

    /**
     * @param string $ProductId 需要删除的产品 ID
     * @param string $Skey 删除LoRa产品需要skey
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }
    }
}
