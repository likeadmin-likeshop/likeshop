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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询网络状态历史数据输出
 *
 * @method integer getCount() 获取总数
 * @method void setCount(integer $Count) 设置总数
 * @method string getCompanyId() 获取集团id
 * @method void setCompanyId(string $CompanyId) 设置集团id
 * @method integer getShopId() 获取店铺id
 * @method void setShopId(integer $ShopId) 设置店铺id
 * @method string getProvince() 获取店铺省份
 * @method void setProvince(string $Province) 设置店铺省份
 * @method string getCity() 获取店铺城市
 * @method void setCity(string $City) 设置店铺城市
 * @method string getShopName() 获取店铺名称
 * @method void setShopName(string $ShopName) 设置店铺名称
 * @method array getInfos() 获取网络信息
 * @method void setInfos(array $Infos) 设置网络信息
 */
class NetworkHistoryInfo extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $Count;

    /**
     * @var string 集团id
     */
    public $CompanyId;

    /**
     * @var integer 店铺id
     */
    public $ShopId;

    /**
     * @var string 店铺省份
     */
    public $Province;

    /**
     * @var string 店铺城市
     */
    public $City;

    /**
     * @var string 店铺名称
     */
    public $ShopName;

    /**
     * @var array 网络信息
     */
    public $Infos;

    /**
     * @param integer $Count 总数
     * @param string $CompanyId 集团id
     * @param integer $ShopId 店铺id
     * @param string $Province 店铺省份
     * @param string $City 店铺城市
     * @param string $ShopName 店铺名称
     * @param array $Infos 网络信息
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("ShopName",$param) and $param["ShopName"] !== null) {
            $this->ShopName = $param["ShopName"];
        }

        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new NetworkInfo();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }
    }
}
