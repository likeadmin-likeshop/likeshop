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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBatch请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method integer getDevNum() 获取批次创建的设备数量
 * @method void setDevNum(integer $DevNum) 设置批次创建的设备数量
 * @method string getDevPre() 获取批次创建的设备前缀。不超过24个字符
 * @method void setDevPre(string $DevPre) 设置批次创建的设备前缀。不超过24个字符
 */
class CreateBatchRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var integer 批次创建的设备数量
     */
    public $DevNum;

    /**
     * @var string 批次创建的设备前缀。不超过24个字符
     */
    public $DevPre;

    /**
     * @param string $ProductId 产品ID
     * @param integer $DevNum 批次创建的设备数量
     * @param string $DevPre 批次创建的设备前缀。不超过24个字符
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

        if (array_key_exists("DevNum",$param) and $param["DevNum"] !== null) {
            $this->DevNum = $param["DevNum"];
        }

        if (array_key_exists("DevPre",$param) and $param["DevPre"] !== null) {
            $this->DevPre = $param["DevPre"];
        }
    }
}
