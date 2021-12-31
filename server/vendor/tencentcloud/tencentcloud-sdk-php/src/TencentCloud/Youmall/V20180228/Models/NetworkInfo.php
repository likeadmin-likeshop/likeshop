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
 * 没有店铺信息的网络状态
 *
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
class NetworkInfo extends AbstractModel
{
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
