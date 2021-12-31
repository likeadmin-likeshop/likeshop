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
 * 加固后app的信息，包含基本信息和加固信息
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
 * @method string getServiceEdition() 获取加固服务版本
 * @method void setServiceEdition(string $ServiceEdition) 设置加固服务版本
 * @method integer getShieldCode() 获取加固结果返回码
 * @method void setShieldCode(integer $ShieldCode) 设置加固结果返回码
 * @method string getAppUrl() 获取加固后的APP下载地址
 * @method void setAppUrl(string $AppUrl) 设置加固后的APP下载地址
 * @method integer getTaskStatus() 获取任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method string getClientIp() 获取请求的客户端ip
 * @method void setClientIp(string $ClientIp) 设置请求的客户端ip
 * @method integer getTaskTime() 获取提交加固时间
 * @method void setTaskTime(integer $TaskTime) 设置提交加固时间
 * @method string getAppIconUrl() 获取app的图标url
 * @method void setAppIconUrl(string $AppIconUrl) 设置app的图标url
 * @method string getShieldMd5() 获取加固后app的md5
 * @method void setShieldMd5(string $ShieldMd5) 设置加固后app的md5
 * @method integer getShieldSize() 获取加固后app的大小
 * @method void setShieldSize(integer $ShieldSize) 设置加固后app的大小
 */
class AppSetInfo extends AbstractModel
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
     * @var string 加固服务版本
     */
    public $ServiceEdition;

    /**
     * @var integer 加固结果返回码
     */
    public $ShieldCode;

    /**
     * @var string 加固后的APP下载地址
     */
    public $AppUrl;

    /**
     * @var integer 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     */
    public $TaskStatus;

    /**
     * @var string 请求的客户端ip
     */
    public $ClientIp;

    /**
     * @var integer 提交加固时间
     */
    public $TaskTime;

    /**
     * @var string app的图标url
     */
    public $AppIconUrl;

    /**
     * @var string 加固后app的md5
     */
    public $ShieldMd5;

    /**
     * @var integer 加固后app的大小
     */
    public $ShieldSize;

    /**
     * @param string $ItemId 任务唯一标识
     * @param string $AppName app的名称
     * @param string $AppPkgName app的包名
     * @param string $AppVersion app的版本号
     * @param string $AppMd5 app的md5
     * @param integer $AppSize app的大小
     * @param string $ServiceEdition 加固服务版本
     * @param integer $ShieldCode 加固结果返回码
     * @param string $AppUrl 加固后的APP下载地址
     * @param integer $TaskStatus 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     * @param string $ClientIp 请求的客户端ip
     * @param integer $TaskTime 提交加固时间
     * @param string $AppIconUrl app的图标url
     * @param string $ShieldMd5 加固后app的md5
     * @param integer $ShieldSize 加固后app的大小
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

        if (array_key_exists("ServiceEdition",$param) and $param["ServiceEdition"] !== null) {
            $this->ServiceEdition = $param["ServiceEdition"];
        }

        if (array_key_exists("ShieldCode",$param) and $param["ShieldCode"] !== null) {
            $this->ShieldCode = $param["ShieldCode"];
        }

        if (array_key_exists("AppUrl",$param) and $param["AppUrl"] !== null) {
            $this->AppUrl = $param["AppUrl"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("TaskTime",$param) and $param["TaskTime"] !== null) {
            $this->TaskTime = $param["TaskTime"];
        }

        if (array_key_exists("AppIconUrl",$param) and $param["AppIconUrl"] !== null) {
            $this->AppIconUrl = $param["AppIconUrl"];
        }

        if (array_key_exists("ShieldMd5",$param) and $param["ShieldMd5"] !== null) {
            $this->ShieldMd5 = $param["ShieldMd5"];
        }

        if (array_key_exists("ShieldSize",$param) and $param["ShieldSize"] !== null) {
            $this->ShieldSize = $param["ShieldSize"];
        }
    }
}
