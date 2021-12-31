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
 * 网络状态
 *
 * @method string getCompanyId() 获取集团id
 * @method void setCompanyId(string $CompanyId) 设置集团id
 * @method integer getShopId() 获取店铺id
 * @method void setShopId(integer $ShopId) 设置店铺id
 * @method string getProvince() 获取店铺省份
 * @method void setProvince(string $Province) 设置店铺省份
 * @method string getCity() 获取店铺城市
 * @method void setCity(string $City) 设置店铺城市
 * @method string getShopName() 获取店铺名
 * @method void setShopName(string $ShopName) 设置店铺名
 * @method float getUpload() 获取上传带宽，单位Mb/s，-1：未知
 * @method void setUpload(float $Upload) 设置上传带宽，单位Mb/s，-1：未知
 * @method float getDownload() 获取下载带宽，单位Mb/s，-1：未知
 * @method void setDownload(float $Download) 设置下载带宽，单位Mb/s，-1：未知
 * @method float getMinRtt() 获取最小延迟，单位ms，-1：未知
 * @method void setMinRtt(float $MinRtt) 设置最小延迟，单位ms，-1：未知
 * @method float getAvgRtt() 获取平均延迟，单位ms，-1：未知
 * @method void setAvgRtt(float $AvgRtt) 设置平均延迟，单位ms，-1：未知
 * @method float getMaxRtt() 获取最大延迟，单位ms，-1：未知
 * @method void setMaxRtt(float $MaxRtt) 设置最大延迟，单位ms，-1：未知
 * @method float getMdevRtt() 获取平均偏差延迟，单位ms，-1：未知
 * @method void setMdevRtt(float $MdevRtt) 设置平均偏差延迟，单位ms，-1：未知
 * @method float getLoss() 获取丢包率百分比，-1：未知
 * @method void setLoss(float $Loss) 设置丢包率百分比，-1：未知
 * @method integer getUpdateTime() 获取更新时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间戳
 * @method string getMac() 获取上报网络状态设备
 * @method void setMac(string $Mac) 设置上报网络状态设备
 */
class NetworkAndShopInfo extends AbstractModel
{
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
     * @var string 店铺名
     */
    public $ShopName;

    /**
     * @var float 上传带宽，单位Mb/s，-1：未知
     */
    public $Upload;

    /**
     * @var float 下载带宽，单位Mb/s，-1：未知
     */
    public $Download;

    /**
     * @var float 最小延迟，单位ms，-1：未知
     */
    public $MinRtt;

    /**
     * @var float 平均延迟，单位ms，-1：未知
     */
    public $AvgRtt;

    /**
     * @var float 最大延迟，单位ms，-1：未知
     */
    public $MaxRtt;

    /**
     * @var float 平均偏差延迟，单位ms，-1：未知
     */
    public $MdevRtt;

    /**
     * @var float 丢包率百分比，-1：未知
     */
    public $Loss;

    /**
     * @var integer 更新时间戳
     */
    public $UpdateTime;

    /**
     * @var string 上报网络状态设备
     */
    public $Mac;

    /**
     * @param string $CompanyId 集团id
     * @param integer $ShopId 店铺id
     * @param string $Province 店铺省份
     * @param string $City 店铺城市
     * @param string $ShopName 店铺名
     * @param float $Upload 上传带宽，单位Mb/s，-1：未知
     * @param float $Download 下载带宽，单位Mb/s，-1：未知
     * @param float $MinRtt 最小延迟，单位ms，-1：未知
     * @param float $AvgRtt 平均延迟，单位ms，-1：未知
     * @param float $MaxRtt 最大延迟，单位ms，-1：未知
     * @param float $MdevRtt 平均偏差延迟，单位ms，-1：未知
     * @param float $Loss 丢包率百分比，-1：未知
     * @param integer $UpdateTime 更新时间戳
     * @param string $Mac 上报网络状态设备
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

        if (array_key_exists("Upload",$param) and $param["Upload"] !== null) {
            $this->Upload = $param["Upload"];
        }

        if (array_key_exists("Download",$param) and $param["Download"] !== null) {
            $this->Download = $param["Download"];
        }

        if (array_key_exists("MinRtt",$param) and $param["MinRtt"] !== null) {
            $this->MinRtt = $param["MinRtt"];
        }

        if (array_key_exists("AvgRtt",$param) and $param["AvgRtt"] !== null) {
            $this->AvgRtt = $param["AvgRtt"];
        }

        if (array_key_exists("MaxRtt",$param) and $param["MaxRtt"] !== null) {
            $this->MaxRtt = $param["MaxRtt"];
        }

        if (array_key_exists("MdevRtt",$param) and $param["MdevRtt"] !== null) {
            $this->MdevRtt = $param["MdevRtt"];
        }

        if (array_key_exists("Loss",$param) and $param["Loss"] !== null) {
            $this->Loss = $param["Loss"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }
    }
}
