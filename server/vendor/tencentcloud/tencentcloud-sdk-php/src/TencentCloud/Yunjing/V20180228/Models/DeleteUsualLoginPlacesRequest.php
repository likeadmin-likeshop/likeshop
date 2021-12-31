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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUsualLoginPlaces请求参数结构体
 *
 * @method string getUuid() 获取云镜客户端Uuid
 * @method void setUuid(string $Uuid) 设置云镜客户端Uuid
 * @method array getCityIds() 获取已添加常用登录地城市ID数组
 * @method void setCityIds(array $CityIds) 设置已添加常用登录地城市ID数组
 */
class DeleteUsualLoginPlacesRequest extends AbstractModel
{
    /**
     * @var string 云镜客户端Uuid
     */
    public $Uuid;

    /**
     * @var array 已添加常用登录地城市ID数组
     */
    public $CityIds;

    /**
     * @param string $Uuid 云镜客户端Uuid
     * @param array $CityIds 已添加常用登录地城市ID数组
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("CityIds",$param) and $param["CityIds"] !== null) {
            $this->CityIds = $param["CityIds"];
        }
    }
}
