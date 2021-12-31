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
 * 常用登录地
 *
 * @method integer getId() 获取ID。
 * @method void setId(integer $Id) 设置ID。
 * @method string getUuid() 获取云镜客户端唯一标识UUID。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一标识UUID。
 * @method integer getCountryId() 获取国家 ID。
 * @method void setCountryId(integer $CountryId) 设置国家 ID。
 * @method integer getProvinceId() 获取省份 ID。
 * @method void setProvinceId(integer $ProvinceId) 设置省份 ID。
 * @method integer getCityId() 获取城市 ID。
 * @method void setCityId(integer $CityId) 设置城市 ID。
 */
class UsualPlace extends AbstractModel
{
    /**
     * @var integer ID。
     */
    public $Id;

    /**
     * @var string 云镜客户端唯一标识UUID。
     */
    public $Uuid;

    /**
     * @var integer 国家 ID。
     */
    public $CountryId;

    /**
     * @var integer 省份 ID。
     */
    public $ProvinceId;

    /**
     * @var integer 城市 ID。
     */
    public $CityId;

    /**
     * @param integer $Id ID。
     * @param string $Uuid 云镜客户端唯一标识UUID。
     * @param integer $CountryId 国家 ID。
     * @param integer $ProvinceId 省份 ID。
     * @param integer $CityId 城市 ID。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("CountryId",$param) and $param["CountryId"] !== null) {
            $this->CountryId = $param["CountryId"];
        }

        if (array_key_exists("ProvinceId",$param) and $param["ProvinceId"] !== null) {
            $this->ProvinceId = $param["ProvinceId"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }
    }
}
