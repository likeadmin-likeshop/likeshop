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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加固策略信息
 *
 * @method integer getApkSizeOpt() 获取apk大小优化，0关闭，1开启
 * @method void setApkSizeOpt(integer $ApkSizeOpt) 设置apk大小优化，0关闭，1开启
 * @method integer getDex() 获取Dex加固，0关闭，1开启
 * @method void setDex(integer $Dex) 设置Dex加固，0关闭，1开启
 * @method integer getSo() 获取So加固，0关闭，1开启
 * @method void setSo(integer $So) 设置So加固，0关闭，1开启
 * @method integer getBugly() 获取数据收集，0关闭，1开启
 * @method void setBugly(integer $Bugly) 设置数据收集，0关闭，1开启
 * @method integer getAntiRepack() 获取防止重打包，0关闭，1开启
 * @method void setAntiRepack(integer $AntiRepack) 设置防止重打包，0关闭，1开启
 * @method integer getSeperateDex() 获取Dex分离，0关闭，1开启
 * @method void setSeperateDex(integer $SeperateDex) 设置Dex分离，0关闭，1开启
 * @method integer getDb() 获取内存保护，0关闭，1开启
 * @method void setDb(integer $Db) 设置内存保护，0关闭，1开启
 * @method integer getDexSig() 获取Dex签名校验，0关闭，1开启
 * @method void setDexSig(integer $DexSig) 设置Dex签名校验，0关闭，1开启
 * @method SoInfo getSoInfo() 获取So文件信息
 * @method void setSoInfo(SoInfo $SoInfo) 设置So文件信息
 * @method integer getAntiVMP() 获取vmp，0关闭，1开启
 * @method void setAntiVMP(integer $AntiVMP) 设置vmp，0关闭，1开启
 * @method array getSoType() 获取保护so的强度，
 * @method void setSoType(array $SoType) 设置保护so的强度，
 * @method integer getAntiLogLeak() 获取防日志泄漏，0关闭，1开启
 * @method void setAntiLogLeak(integer $AntiLogLeak) 设置防日志泄漏，0关闭，1开启
 * @method integer getAntiQemuRoot() 获取root检测，0关闭，1开启
 * @method void setAntiQemuRoot(integer $AntiQemuRoot) 设置root检测，0关闭，1开启
 * @method integer getAntiAssets() 获取资源防篡改，0关闭，1开启
 * @method void setAntiAssets(integer $AntiAssets) 设置资源防篡改，0关闭，1开启
 * @method integer getAntiScreenshot() 获取防止截屏，0关闭，1开启
 * @method void setAntiScreenshot(integer $AntiScreenshot) 设置防止截屏，0关闭，1开启
 * @method integer getAntiSSL() 获取SSL证书防窃取，0关闭，1开启
 * @method void setAntiSSL(integer $AntiSSL) 设置SSL证书防窃取，0关闭，1开启
 */
class PlanInfo extends AbstractModel
{
    /**
     * @var integer apk大小优化，0关闭，1开启
     */
    public $ApkSizeOpt;

    /**
     * @var integer Dex加固，0关闭，1开启
     */
    public $Dex;

    /**
     * @var integer So加固，0关闭，1开启
     */
    public $So;

    /**
     * @var integer 数据收集，0关闭，1开启
     */
    public $Bugly;

    /**
     * @var integer 防止重打包，0关闭，1开启
     */
    public $AntiRepack;

    /**
     * @var integer Dex分离，0关闭，1开启
     */
    public $SeperateDex;

    /**
     * @var integer 内存保护，0关闭，1开启
     */
    public $Db;

    /**
     * @var integer Dex签名校验，0关闭，1开启
     */
    public $DexSig;

    /**
     * @var SoInfo So文件信息
     */
    public $SoInfo;

    /**
     * @var integer vmp，0关闭，1开启
     */
    public $AntiVMP;

    /**
     * @var array 保护so的强度，
     */
    public $SoType;

    /**
     * @var integer 防日志泄漏，0关闭，1开启
     */
    public $AntiLogLeak;

    /**
     * @var integer root检测，0关闭，1开启
     */
    public $AntiQemuRoot;

    /**
     * @var integer 资源防篡改，0关闭，1开启
     */
    public $AntiAssets;

    /**
     * @var integer 防止截屏，0关闭，1开启
     */
    public $AntiScreenshot;

    /**
     * @var integer SSL证书防窃取，0关闭，1开启
     */
    public $AntiSSL;

    /**
     * @param integer $ApkSizeOpt apk大小优化，0关闭，1开启
     * @param integer $Dex Dex加固，0关闭，1开启
     * @param integer $So So加固，0关闭，1开启
     * @param integer $Bugly 数据收集，0关闭，1开启
     * @param integer $AntiRepack 防止重打包，0关闭，1开启
     * @param integer $SeperateDex Dex分离，0关闭，1开启
     * @param integer $Db 内存保护，0关闭，1开启
     * @param integer $DexSig Dex签名校验，0关闭，1开启
     * @param SoInfo $SoInfo So文件信息
     * @param integer $AntiVMP vmp，0关闭，1开启
     * @param array $SoType 保护so的强度，
     * @param integer $AntiLogLeak 防日志泄漏，0关闭，1开启
     * @param integer $AntiQemuRoot root检测，0关闭，1开启
     * @param integer $AntiAssets 资源防篡改，0关闭，1开启
     * @param integer $AntiScreenshot 防止截屏，0关闭，1开启
     * @param integer $AntiSSL SSL证书防窃取，0关闭，1开启
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
        if (array_key_exists("ApkSizeOpt",$param) and $param["ApkSizeOpt"] !== null) {
            $this->ApkSizeOpt = $param["ApkSizeOpt"];
        }

        if (array_key_exists("Dex",$param) and $param["Dex"] !== null) {
            $this->Dex = $param["Dex"];
        }

        if (array_key_exists("So",$param) and $param["So"] !== null) {
            $this->So = $param["So"];
        }

        if (array_key_exists("Bugly",$param) and $param["Bugly"] !== null) {
            $this->Bugly = $param["Bugly"];
        }

        if (array_key_exists("AntiRepack",$param) and $param["AntiRepack"] !== null) {
            $this->AntiRepack = $param["AntiRepack"];
        }

        if (array_key_exists("SeperateDex",$param) and $param["SeperateDex"] !== null) {
            $this->SeperateDex = $param["SeperateDex"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("DexSig",$param) and $param["DexSig"] !== null) {
            $this->DexSig = $param["DexSig"];
        }

        if (array_key_exists("SoInfo",$param) and $param["SoInfo"] !== null) {
            $this->SoInfo = new SoInfo();
            $this->SoInfo->deserialize($param["SoInfo"]);
        }

        if (array_key_exists("AntiVMP",$param) and $param["AntiVMP"] !== null) {
            $this->AntiVMP = $param["AntiVMP"];
        }

        if (array_key_exists("SoType",$param) and $param["SoType"] !== null) {
            $this->SoType = $param["SoType"];
        }

        if (array_key_exists("AntiLogLeak",$param) and $param["AntiLogLeak"] !== null) {
            $this->AntiLogLeak = $param["AntiLogLeak"];
        }

        if (array_key_exists("AntiQemuRoot",$param) and $param["AntiQemuRoot"] !== null) {
            $this->AntiQemuRoot = $param["AntiQemuRoot"];
        }

        if (array_key_exists("AntiAssets",$param) and $param["AntiAssets"] !== null) {
            $this->AntiAssets = $param["AntiAssets"];
        }

        if (array_key_exists("AntiScreenshot",$param) and $param["AntiScreenshot"] !== null) {
            $this->AntiScreenshot = $param["AntiScreenshot"];
        }

        if (array_key_exists("AntiSSL",$param) and $param["AntiSSL"] !== null) {
            $this->AntiSSL = $param["AntiSSL"];
        }
    }
}
