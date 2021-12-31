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
 * AuthTestTid请求参数结构体
 *
 * @method string getData() 获取设备端SDK填入测试TID参数后生成的加密数据串
 * @method void setData(string $Data) 设置设备端SDK填入测试TID参数后生成的加密数据串
 */
class AuthTestTidRequest extends AbstractModel
{
    /**
     * @var string 设备端SDK填入测试TID参数后生成的加密数据串
     */
    public $Data;

    /**
     * @param string $Data 设备端SDK填入测试TID参数后生成的加密数据串
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
