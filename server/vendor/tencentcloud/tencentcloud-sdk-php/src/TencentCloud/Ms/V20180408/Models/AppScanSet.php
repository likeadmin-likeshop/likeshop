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
 * 扫描后app的信息，包含基本信息和扫描状态信息
 *
 * @method string getItemId() 获取任务唯一标识
 * @method void setItemId(string $ItemId) 设置任务唯一标识
 * @method string getAppName() 获取app的名称
 * @method void setAppName(string $AppName) 设置app的名称
 * @method string getAppPkgName() 获取app的包名
 * @method void setAppPkgName(string $AppPkgName) 设置app的包名
 * @method string getAppVersion() 获取app的版本号
 * @method void setAppVersion(string $AppVersion) 设置app的版本号
 * @method string getAppMd5() 获取app的md5
 * @method void setAppMd5(string $AppMd5) 设置app的md5
 * @method integer getAppSize() 获取app的大小
 * @method void setAppSize(integer $AppSize) 设置app的大小
 * @method integer getScanCode() 获取扫描结果返回码
 * @method void setScanCode(integer $ScanCode) 设置扫描结果返回码
 * @method integer getTaskStatus() 获取任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method integer getTaskTime() 获取提交扫描时间
 * @method void setTaskTime(integer $TaskTime) 设置提交扫描时间
 * @method string getAppIconUrl() 获取app的图标url
 * @method void setAppIconUrl(string $AppIconUrl) 设置app的图标url
 * @method string getAppSid() 获取标识唯一该app，主要用于删除
 * @method void setAppSid(string $AppSid) 设置标识唯一该app，主要用于删除
 * @method integer getSafeType() 获取安全类型:1-安全软件，2-风险软件，3病毒软件
 * @method void setSafeType(integer $SafeType) 设置安全类型:1-安全软件，2-风险软件，3病毒软件
 * @method integer getVulCount() 获取漏洞个数
 * @method void setVulCount(integer $VulCount) 设置漏洞个数
 */
class AppScanSet extends AbstractModel
{
    /**
     * @var string 任务唯一标识
     */
    public $ItemId;

    /**
     * @var string app的名称
     */
    public $AppName;

    /**
     * @var string app的包名
     */
    public $AppPkgName;

    /**
     * @var string app的版本号
     */
    public $AppVersion;

    /**
     * @var string app的md5
     */
    public $AppMd5;

    /**
     * @var integer app的大小
     */
    public $AppSize;

    /**
     * @var integer 扫描结果返回码
     */
    public $ScanCode;

    /**
     * @var integer 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     */
    public $TaskStatus;

    /**
     * @var integer 提交扫描时间
     */
    public $TaskTime;

    /**
     * @var string app的图标url
     */
    public $AppIconUrl;

    /**
     * @var string 标识唯一该app，主要用于删除
     */
    public $AppSid;

    /**
     * @var integer 安全类型:1-安全软件，2-风险软件，3病毒软件
     */
    public $SafeType;

    /**
     * @var integer 漏洞个数
     */
    public $VulCount;

    /**
     * @param string $ItemId 任务唯一标识
     * @param string $AppName app的名称
     * @param string $AppPkgName app的包名
     * @param string $AppVersion app的版本号
     * @param string $AppMd5 app的md5
     * @param integer $AppSize app的大小
     * @param integer $ScanCode 扫描结果返回码
     * @param integer $TaskStatus 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     * @param integer $TaskTime 提交扫描时间
     * @param string $AppIconUrl app的图标url
     * @param string $AppSid 标识唯一该app，主要用于删除
     * @param integer $SafeType 安全类型:1-安全软件，2-风险软件，3病毒软件
     * @param integer $VulCount 漏洞个数
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppPkgName",$param) and $param["AppPkgName"] !== null) {
            $this->AppPkgName = $param["AppPkgName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("AppMd5",$param) and $param["AppMd5"] !== null) {
            $this->AppMd5 = $param["AppMd5"];
        }

        if (array_key_exists("AppSize",$param) and $param["AppSize"] !== null) {
            $this->AppSize = $param["AppSize"];
        }

        if (array_key_exists("ScanCode",$param) and $param["ScanCode"] !== null) {
            $this->ScanCode = $param["ScanCode"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskTime",$param) and $param["TaskTime"] !== null) {
            $this->TaskTime = $param["TaskTime"];
        }

        if (array_key_exists("AppIconUrl",$param) and $param["AppIconUrl"] !== null) {
            $this->AppIconUrl = $param["AppIconUrl"];
        }

        if (array_key_exists("AppSid",$param) and $param["AppSid"] !== null) {
            $this->AppSid = $param["AppSid"];
        }

        if (array_key_exists("SafeType",$param) and $param["SafeType"] !== null) {
            $this->SafeType = $param["SafeType"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }
    }
}
