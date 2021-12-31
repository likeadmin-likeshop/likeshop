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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 省份可用率
 *
 * @method float getAvgAvailRatio() 获取可用率
 * @method void setAvgAvailRatio(float $AvgAvailRatio) 设置可用率
 * @method string getProvinceName() 获取省份名称
 * @method void setProvinceName(string $ProvinceName) 设置省份名称
 * @method string getMapkey() 获取省份英文名称
 * @method void setMapkey(string $Mapkey) 设置省份英文名称
 * @method string getTimeStamp() 获取统计时间点
 * @method void setTimeStamp(string $TimeStamp) 设置统计时间点
 * @method array getIspDetail() 获取分运营商可用率
 * @method void setIspDetail(array $IspDetail) 设置分运营商可用率
 * @method float getAvgTime() 获取平均耗时，单位毫秒
 * @method void setAvgTime(float $AvgTime) 设置平均耗时，单位毫秒
 * @method string getProvince() 获取省份
 * @method void setProvince(string $Province) 设置省份
 */
class ProvinceDetail extends AbstractModel
{
    /**
     * @var float 可用率
     */
    public $AvgAvailRatio;

    /**
     * @var string 省份名称
     */
    public $ProvinceName;

    /**
     * @var string 省份英文名称
     */
    public $Mapkey;

    /**
     * @var string 统计时间点
     */
    public $TimeStamp;

    /**
     * @var array 分运营商可用率
     */
    public $IspDetail;

    /**
     * @var float 平均耗时，单位毫秒
     */
    public $AvgTime;

    /**
     * @var string 省份
     */
    public $Province;

    /**
     * @param float $AvgAvailRatio 可用率
     * @param string $ProvinceName 省份名称
     * @param string $Mapkey 省份英文名称
     * @param string $TimeStamp 统计时间点
     * @param array $IspDetail 分运营商可用率
     * @param float $AvgTime 平均耗时，单位毫秒
     * @param string $Province 省份
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
        if (array_key_exists("AvgAvailRatio",$param) and $param["AvgAvailRatio"] !== null) {
            $this->AvgAvailRatio = $param["AvgAvailRatio"];
        }

        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }

        if (array_key_exists("Mapkey",$param) and $param["Mapkey"] !== null) {
            $this->Mapkey = $param["Mapkey"];
        }

        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }

        if (array_key_exists("IspDetail",$param) and $param["IspDetail"] !== null) {
            $this->IspDetail = [];
            foreach ($param["IspDetail"] as $key => $value){
                $obj = new IspDetail();
                $obj->deserialize($value);
                array_push($this->IspDetail, $obj);
            }
        }

        if (array_key_exists("AvgTime",$param) and $param["AvgTime"] !== null) {
            $this->AvgTime = $param["AvgTime"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }
    }
}
