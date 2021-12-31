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
namespace TencentCloud\Rkp\V20191209\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryDevAndRisk请求参数结构体
 *
 * @method integer getDevType() 获取设备类型 0表示Android， 1表示IOS
 * @method void setDevType(integer $DevType) 设置设备类型 0表示Android， 1表示IOS
 * @method string getImei() 获取Android Imei号
 * @method void setImei(string $Imei) 设置Android Imei号
 * @method string getMac() 获取Mac地址
 * @method void setMac(string $Mac) 设置Mac地址
 * @method string getAid() 获取android  Aid
 * @method void setAid(string $Aid) 设置android  Aid
 * @method string getCid() 获取Android Cid
 * @method void setCid(string $Cid) 设置Android Cid
 * @method string getImsi() 获取手机Imsi
 * @method void setImsi(string $Imsi) 设置手机Imsi
 * @method string getDf() 获取Df 磁盘分区信息
 * @method void setDf(string $Df) 设置Df 磁盘分区信息
 * @method string getKernelVer() 获取内核版本
 * @method void setKernelVer(string $KernelVer) 设置内核版本
 * @method string getStorage() 获取存储大小
 * @method void setStorage(string $Storage) 设置存储大小
 * @method string getDfp() 获取设备驱动指纹
 * @method void setDfp(string $Dfp) 设置设备驱动指纹
 * @method string getBootTime() 获取启动时间
 * @method void setBootTime(string $BootTime) 设置启动时间
 * @method string getResolution() 获取分辨率 水平*垂直 格式
 * @method void setResolution(string $Resolution) 设置分辨率 水平*垂直 格式
 * @method string getRingList() 获取铃声列表
 * @method void setRingList(string $RingList) 设置铃声列表
 * @method string getFontList() 获取字体列表
 * @method void setFontList(string $FontList) 设置字体列表
 * @method string getSensorList() 获取传感器列表
 * @method void setSensorList(string $SensorList) 设置传感器列表
 * @method string getCpuType() 获取CPU型号
 * @method void setCpuType(string $CpuType) 设置CPU型号
 * @method string getBattery() 获取电池容量
 * @method void setBattery(string $Battery) 设置电池容量
 * @method string getOaid() 获取信通院广告ID
 * @method void setOaid(string $Oaid) 设置信通院广告ID
 * @method string getIdfa() 获取IOS 广告ID
 * @method void setIdfa(string $Idfa) 设置IOS 广告ID
 * @method string getIdfv() 获取IOS 应用ID
 * @method void setIdfv(string $Idfv) 设置IOS 应用ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getIphoneModel() 获取IOS手机型号
 * @method void setIphoneModel(string $IphoneModel) 设置IOS手机型号
 * @method string getFingerprint() 获取Android 指纹
 * @method void setFingerprint(string $Fingerprint) 设置Android 指纹
 * @method string getSerialId() 获取Android序列号
 * @method void setSerialId(string $SerialId) 设置Android序列号
 */
class QueryDevAndRiskRequest extends AbstractModel
{
    /**
     * @var integer 设备类型 0表示Android， 1表示IOS
     */
    public $DevType;

    /**
     * @var string Android Imei号
     */
    public $Imei;

    /**
     * @var string Mac地址
     */
    public $Mac;

    /**
     * @var string android  Aid
     */
    public $Aid;

    /**
     * @var string Android Cid
     */
    public $Cid;

    /**
     * @var string 手机Imsi
     */
    public $Imsi;

    /**
     * @var string Df 磁盘分区信息
     */
    public $Df;

    /**
     * @var string 内核版本
     */
    public $KernelVer;

    /**
     * @var string 存储大小
     */
    public $Storage;

    /**
     * @var string 设备驱动指纹
     */
    public $Dfp;

    /**
     * @var string 启动时间
     */
    public $BootTime;

    /**
     * @var string 分辨率 水平*垂直 格式
     */
    public $Resolution;

    /**
     * @var string 铃声列表
     */
    public $RingList;

    /**
     * @var string 字体列表
     */
    public $FontList;

    /**
     * @var string 传感器列表
     */
    public $SensorList;

    /**
     * @var string CPU型号
     */
    public $CpuType;

    /**
     * @var string 电池容量
     */
    public $Battery;

    /**
     * @var string 信通院广告ID
     */
    public $Oaid;

    /**
     * @var string IOS 广告ID
     */
    public $Idfa;

    /**
     * @var string IOS 应用ID
     */
    public $Idfv;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string IOS手机型号
     */
    public $IphoneModel;

    /**
     * @var string Android 指纹
     */
    public $Fingerprint;

    /**
     * @var string Android序列号
     */
    public $SerialId;

    /**
     * @param integer $DevType 设备类型 0表示Android， 1表示IOS
     * @param string $Imei Android Imei号
     * @param string $Mac Mac地址
     * @param string $Aid android  Aid
     * @param string $Cid Android Cid
     * @param string $Imsi 手机Imsi
     * @param string $Df Df 磁盘分区信息
     * @param string $KernelVer 内核版本
     * @param string $Storage 存储大小
     * @param string $Dfp 设备驱动指纹
     * @param string $BootTime 启动时间
     * @param string $Resolution 分辨率 水平*垂直 格式
     * @param string $RingList 铃声列表
     * @param string $FontList 字体列表
     * @param string $SensorList 传感器列表
     * @param string $CpuType CPU型号
     * @param string $Battery 电池容量
     * @param string $Oaid 信通院广告ID
     * @param string $Idfa IOS 广告ID
     * @param string $Idfv IOS 应用ID
     * @param string $DeviceName 设备名称
     * @param string $IphoneModel IOS手机型号
     * @param string $Fingerprint Android 指纹
     * @param string $SerialId Android序列号
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
        if (array_key_exists("DevType",$param) and $param["DevType"] !== null) {
            $this->DevType = $param["DevType"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("Aid",$param) and $param["Aid"] !== null) {
            $this->Aid = $param["Aid"];
        }

        if (array_key_exists("Cid",$param) and $param["Cid"] !== null) {
            $this->Cid = $param["Cid"];
        }

        if (array_key_exists("Imsi",$param) and $param["Imsi"] !== null) {
            $this->Imsi = $param["Imsi"];
        }

        if (array_key_exists("Df",$param) and $param["Df"] !== null) {
            $this->Df = $param["Df"];
        }

        if (array_key_exists("KernelVer",$param) and $param["KernelVer"] !== null) {
            $this->KernelVer = $param["KernelVer"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Dfp",$param) and $param["Dfp"] !== null) {
            $this->Dfp = $param["Dfp"];
        }

        if (array_key_exists("BootTime",$param) and $param["BootTime"] !== null) {
            $this->BootTime = $param["BootTime"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("RingList",$param) and $param["RingList"] !== null) {
            $this->RingList = $param["RingList"];
        }

        if (array_key_exists("FontList",$param) and $param["FontList"] !== null) {
            $this->FontList = $param["FontList"];
        }

        if (array_key_exists("SensorList",$param) and $param["SensorList"] !== null) {
            $this->SensorList = $param["SensorList"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("Battery",$param) and $param["Battery"] !== null) {
            $this->Battery = $param["Battery"];
        }

        if (array_key_exists("Oaid",$param) and $param["Oaid"] !== null) {
            $this->Oaid = $param["Oaid"];
        }

        if (array_key_exists("Idfa",$param) and $param["Idfa"] !== null) {
            $this->Idfa = $param["Idfa"];
        }

        if (array_key_exists("Idfv",$param) and $param["Idfv"] !== null) {
            $this->Idfv = $param["Idfv"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("IphoneModel",$param) and $param["IphoneModel"] !== null) {
            $this->IphoneModel = $param["IphoneModel"];
        }

        if (array_key_exists("Fingerprint",$param) and $param["Fingerprint"] !== null) {
            $this->Fingerprint = $param["Fingerprint"];
        }

        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }
    }
}
