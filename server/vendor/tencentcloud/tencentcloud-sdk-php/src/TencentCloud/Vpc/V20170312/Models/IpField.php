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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP在线查询的字段信息
 *
 * @method boolean getCountry() 获取国家字段信息
 * @method void setCountry(boolean $Country) 设置国家字段信息
 * @method boolean getProvince() 获取省、州、郡一级行政区域字段信息
 * @method void setProvince(boolean $Province) 设置省、州、郡一级行政区域字段信息
 * @method boolean getCity() 获取市一级行政区域字段信息
 * @method void setCity(boolean $City) 设置市一级行政区域字段信息
 * @method boolean getRegion() 获取市内区域字段信息
 * @method void setRegion(boolean $Region) 设置市内区域字段信息
 * @method boolean getIsp() 获取接入运营商字段信息
 * @method void setIsp(boolean $Isp) 设置接入运营商字段信息
 * @method boolean getAsName() 获取骨干运营商字段信息
 * @method void setAsName(boolean $AsName) 设置骨干运营商字段信息
 * @method boolean getAsId() 获取骨干As号
 * @method void setAsId(boolean $AsId) 设置骨干As号
 * @method boolean getComment() 获取注释字段
 * @method void setComment(boolean $Comment) 设置注释字段
 */
class IpField extends AbstractModel
{
    /**
     * @var boolean 国家字段信息
     */
    public $Country;

    /**
     * @var boolean 省、州、郡一级行政区域字段信息
     */
    public $Province;

    /**
     * @var boolean 市一级行政区域字段信息
     */
    public $City;

    /**
     * @var boolean 市内区域字段信息
     */
    public $Region;

    /**
     * @var boolean 接入运营商字段信息
     */
    public $Isp;

    /**
     * @var boolean 骨干运营商字段信息
     */
    public $AsName;

    /**
     * @var boolean 骨干As号
     */
    public $AsId;

    /**
     * @var boolean 注释字段
     */
    public $Comment;

    /**
     * @param boolean $Country 国家字段信息
     * @param boolean $Province 省、州、郡一级行政区域字段信息
     * @param boolean $City 市一级行政区域字段信息
     * @param boolean $Region 市内区域字段信息
     * @param boolean $Isp 接入运营商字段信息
     * @param boolean $AsName 骨干运营商字段信息
     * @param boolean $AsId 骨干As号
     * @param boolean $Comment 注释字段
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
        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("AsName",$param) and $param["AsName"] !== null) {
            $this->AsName = $param["AsName"];
        }

        if (array_key_exists("AsId",$param) and $param["AsId"] !== null) {
            $this->AsId = $param["AsId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
