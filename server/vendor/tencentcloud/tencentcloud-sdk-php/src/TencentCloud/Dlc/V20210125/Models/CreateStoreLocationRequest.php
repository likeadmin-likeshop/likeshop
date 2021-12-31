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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStoreLocation请求参数结构体
 *
 * @method string getStoreLocation() 获取计算结果存储cos路径，如：cosn://bucketname/
 * @method void setStoreLocation(string $StoreLocation) 设置计算结果存储cos路径，如：cosn://bucketname/
 */
class CreateStoreLocationRequest extends AbstractModel
{
    /**
     * @var string 计算结果存储cos路径，如：cosn://bucketname/
     */
    public $StoreLocation;

    /**
     * @param string $StoreLocation 计算结果存储cos路径，如：cosn://bucketname/
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
        if (array_key_exists("StoreLocation",$param) and $param["StoreLocation"] !== null) {
            $this->StoreLocation = $param["StoreLocation"];
        }
    }
}
