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
namespace TencentCloud\Iottid\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadDeviceUniqueCode请求参数结构体
 *
 * @method array getCodeSet() 获取硬件唯一标识码
 * @method void setCodeSet(array $CodeSet) 设置硬件唯一标识码
 * @method string getOrderId() 获取硬件标识码绑定的申请编号
 * @method void setOrderId(string $OrderId) 设置硬件标识码绑定的申请编号
 */
class UploadDeviceUniqueCodeRequest extends AbstractModel
{
    /**
     * @var array 硬件唯一标识码
     */
    public $CodeSet;

    /**
     * @var string 硬件标识码绑定的申请编号
     */
    public $OrderId;

    /**
     * @param array $CodeSet 硬件唯一标识码
     * @param string $OrderId 硬件标识码绑定的申请编号
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
        if (array_key_exists("CodeSet",$param) and $param["CodeSet"] !== null) {
            $this->CodeSet = $param["CodeSet"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }
    }
}
