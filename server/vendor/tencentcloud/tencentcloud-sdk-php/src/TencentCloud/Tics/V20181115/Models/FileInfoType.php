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
namespace TencentCloud\Tics\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件信息类型
 *
 * @method string getDetectId() 获取判定渠道
 * @method void setDetectId(string $DetectId) 设置判定渠道
 * @method string getDetectPriority() 获取检测优先级
 * @method void setDetectPriority(string $DetectPriority) 设置检测优先级
 * @method string getEnginePriority() 获取引擎优先级
 * @method void setEnginePriority(string $EnginePriority) 设置引擎优先级
 * @method string getFileExist() 获取样本是否存在
 * @method void setFileExist(string $FileExist) 设置样本是否存在
 * @method string getFileForceUpload() 获取文件上传
 * @method void setFileForceUpload(string $FileForceUpload) 设置文件上传
 * @method string getFileSize() 获取文件大小
 * @method void setFileSize(string $FileSize) 设置文件大小
 * @method string getFileupTime() 获取文件上传时间
 * @method void setFileupTime(string $FileupTime) 设置文件上传时间
 * @method string getFullVirusName() 获取病毒文件全名
 * @method void setFullVirusName(string $FullVirusName) 设置病毒文件全名
 * @method string getIdcPosition() 获取IDC位置
 * @method void setIdcPosition(string $IdcPosition) 设置IDC位置
 * @method string getMd5Type() 获取文件md5值
 * @method void setMd5Type(string $Md5Type) 设置文件md5值
 * @method string getPeExist() 获取PE结构是否存在
 * @method void setPeExist(string $PeExist) 设置PE结构是否存在
 * @method string getPeForceUpload() 获取PE结构上传
 * @method void setPeForceUpload(string $PeForceUpload) 设置PE结构上传
 * @method string getSafeLevel() 获取安全性等级
 * @method void setSafeLevel(string $SafeLevel) 设置安全性等级
 * @method string getScanModiTime() 获取扫描时间
 * @method void setScanModiTime(string $ScanModiTime) 设置扫描时间
 * @method string getSubdetectId() 获取子判定渠道
 * @method void setSubdetectId(string $SubdetectId) 设置子判定渠道
 * @method string getUserDefName() 获取病毒名
 * @method void setUserDefName(string $UserDefName) 设置病毒名
 * @method string getVirusType() 获取病毒类型
 * @method void setVirusType(string $VirusType) 设置病毒类型
 * @method string getWhiteScore() 获取白名单分数
 * @method void setWhiteScore(string $WhiteScore) 设置白名单分数
 */
class FileInfoType extends AbstractModel
{
    /**
     * @var string 判定渠道
     */
    public $DetectId;

    /**
     * @var string 检测优先级
     */
    public $DetectPriority;

    /**
     * @var string 引擎优先级
     */
    public $EnginePriority;

    /**
     * @var string 样本是否存在
     */
    public $FileExist;

    /**
     * @var string 文件上传
     */
    public $FileForceUpload;

    /**
     * @var string 文件大小
     */
    public $FileSize;

    /**
     * @var string 文件上传时间
     */
    public $FileupTime;

    /**
     * @var string 病毒文件全名
     */
    public $FullVirusName;

    /**
     * @var string IDC位置
     */
    public $IdcPosition;

    /**
     * @var string 文件md5值
     */
    public $Md5Type;

    /**
     * @var string PE结构是否存在
     */
    public $PeExist;

    /**
     * @var string PE结构上传
     */
    public $PeForceUpload;

    /**
     * @var string 安全性等级
     */
    public $SafeLevel;

    /**
     * @var string 扫描时间
     */
    public $ScanModiTime;

    /**
     * @var string 子判定渠道
     */
    public $SubdetectId;

    /**
     * @var string 病毒名
     */
    public $UserDefName;

    /**
     * @var string 病毒类型
     */
    public $VirusType;

    /**
     * @var string 白名单分数
     */
    public $WhiteScore;

    /**
     * @param string $DetectId 判定渠道
     * @param string $DetectPriority 检测优先级
     * @param string $EnginePriority 引擎优先级
     * @param string $FileExist 样本是否存在
     * @param string $FileForceUpload 文件上传
     * @param string $FileSize 文件大小
     * @param string $FileupTime 文件上传时间
     * @param string $FullVirusName 病毒文件全名
     * @param string $IdcPosition IDC位置
     * @param string $Md5Type 文件md5值
     * @param string $PeExist PE结构是否存在
     * @param string $PeForceUpload PE结构上传
     * @param string $SafeLevel 安全性等级
     * @param string $ScanModiTime 扫描时间
     * @param string $SubdetectId 子判定渠道
     * @param string $UserDefName 病毒名
     * @param string $VirusType 病毒类型
     * @param string $WhiteScore 白名单分数
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
        if (array_key_exists("DetectId",$param) and $param["DetectId"] !== null) {
            $this->DetectId = $param["DetectId"];
        }

        if (array_key_exists("DetectPriority",$param) and $param["DetectPriority"] !== null) {
            $this->DetectPriority = $param["DetectPriority"];
        }

        if (array_key_exists("EnginePriority",$param) and $param["EnginePriority"] !== null) {
            $this->EnginePriority = $param["EnginePriority"];
        }

        if (array_key_exists("FileExist",$param) and $param["FileExist"] !== null) {
            $this->FileExist = $param["FileExist"];
        }

        if (array_key_exists("FileForceUpload",$param) and $param["FileForceUpload"] !== null) {
            $this->FileForceUpload = $param["FileForceUpload"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileupTime",$param) and $param["FileupTime"] !== null) {
            $this->FileupTime = $param["FileupTime"];
        }

        if (array_key_exists("FullVirusName",$param) and $param["FullVirusName"] !== null) {
            $this->FullVirusName = $param["FullVirusName"];
        }

        if (array_key_exists("IdcPosition",$param) and $param["IdcPosition"] !== null) {
            $this->IdcPosition = $param["IdcPosition"];
        }

        if (array_key_exists("Md5Type",$param) and $param["Md5Type"] !== null) {
            $this->Md5Type = $param["Md5Type"];
        }

        if (array_key_exists("PeExist",$param) and $param["PeExist"] !== null) {
            $this->PeExist = $param["PeExist"];
        }

        if (array_key_exists("PeForceUpload",$param) and $param["PeForceUpload"] !== null) {
            $this->PeForceUpload = $param["PeForceUpload"];
        }

        if (array_key_exists("SafeLevel",$param) and $param["SafeLevel"] !== null) {
            $this->SafeLevel = $param["SafeLevel"];
        }

        if (array_key_exists("ScanModiTime",$param) and $param["ScanModiTime"] !== null) {
            $this->ScanModiTime = $param["ScanModiTime"];
        }

        if (array_key_exists("SubdetectId",$param) and $param["SubdetectId"] !== null) {
            $this->SubdetectId = $param["SubdetectId"];
        }

        if (array_key_exists("UserDefName",$param) and $param["UserDefName"] !== null) {
            $this->UserDefName = $param["UserDefName"];
        }

        if (array_key_exists("VirusType",$param) and $param["VirusType"] !== null) {
            $this->VirusType = $param["VirusType"];
        }

        if (array_key_exists("WhiteScore",$param) and $param["WhiteScore"] !== null) {
            $this->WhiteScore = $param["WhiteScore"];
        }
    }
}
