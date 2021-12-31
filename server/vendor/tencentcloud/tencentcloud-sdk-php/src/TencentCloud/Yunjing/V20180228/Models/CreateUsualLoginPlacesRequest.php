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
 * CreateUsualLoginPlaces请求参数结构体
 *
 * @method array getUuids() 获取云镜客户端UUID数组。
 * @method void setUuids(array $Uuids) 设置云镜客户端UUID数组。
 * @method array getPlaces() 获取登录地域信息数组。
 * @method void setPlaces(array $Places) 设置登录地域信息数组。
 */
class CreateUsualLoginPlacesRequest extends AbstractModel
{
    /**
     * @var array 云镜客户端UUID数组。
     */
    public $Uuids;

    /**
     * @var array 登录地域信息数组。
     */
    public $Places;

    /**
     * @param array $Uuids 云镜客户端UUID数组。
     * @param array $Places 登录地域信息数组。
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
        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new Place();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }
    }
}
