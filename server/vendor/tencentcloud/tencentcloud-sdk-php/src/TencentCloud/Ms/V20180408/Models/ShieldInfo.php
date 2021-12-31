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
 * 加固后app的信息
 *
 * @method integer getShieldCode() 获取加固结果的返回码
 * @method void setShieldCode(integer $ShieldCode) 设置加固结果的返回码
 * @method integer getShieldSize() 获取加固后app的大小
 * @method void setShieldSize(integer $ShieldSize) 设置加固后app的大小
 * @method string getShieldMd5() 获取加固后app的md5
 * @method void setShieldMd5(string $ShieldMd5) 设置加固后app的md5
 * @method string getAppUrl() 获取加固后的APP下载地址，该地址有效期为20分钟，请及时下载
 * @method void setAppUrl(string $AppUrl) 设置加固后的APP下载地址，该地址有效期为20分钟，请及时下载
 * @method integer getTaskTime() 获取加固的提交时间
 * @method void setTaskTime(integer $TaskTime) 设置加固的提交时间
 * @method string getItemId() 获取任务唯一标识
 * @method void setItemId(string $ItemId) 设置任务唯一标识
 * @method string getServiceEdition() 获取加固版本，basic基础版，professional专业版，enterprise企业版
 * @method void setServiceEdition(string $ServiceEdition) 设置加固版本，basic基础版，professional专业版，enterprise企业版
 */
class ShieldInfo extends AbstractModel
{
    /**
     * @var integer 加固结果的返回码
     */
    public $ShieldCode;

    /**
     * @var integer 加固后app的大小
     */
    public $ShieldSize;

    /**
     * @var string 加固后app的md5
     */
    public $ShieldMd5;

    /**
     * @var string 加固后的APP下载地址，该地址有效期为20分钟，请及时下载
     */
    public $AppUrl;

    /**
     * @var integer 加固的提交时间
     */
    public $TaskTime;

    /**
     * @var string 任务唯一标识
     */
    public $ItemId;

    /**
     * @var string 加固版本，basic基础版，professional专业版，enterprise企业版
     */
    public $ServiceEdition;

    /**
     * @param integer $ShieldCode 加固结果的返回码
     * @param integer $ShieldSize 加固后app的大小
     * @param string $ShieldMd5 加固后app的md5
     * @param string $AppUrl 加固后的APP下载地址，该地址有效期为20分钟，请及时下载
     * @param integer $TaskTime 加固的提交时间
     * @param string $ItemId 任务唯一标识
     * @param string $ServiceEdition 加固版本，basic基础版，professional专业版，enterprise企业版
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
        if (array_key_exists("ShieldCode",$param) and $param["ShieldCode"] !== null) {
            $this->ShieldCode = $param["ShieldCode"];
        }

        if (array_key_exists("ShieldSize",$param) and $param["ShieldSize"] !== null) {
            $this->ShieldSize = $param["ShieldSize"];
        }

        if (array_key_exists("ShieldMd5",$param) and $param["ShieldMd5"] !== null) {
            $this->ShieldMd5 = $param["ShieldMd5"];
        }

        if (array_key_exists("AppUrl",$param) and $param["AppUrl"] !== null) {
            $this->AppUrl = $param["AppUrl"];
        }

        if (array_key_exists("TaskTime",$param) and $param["TaskTime"] !== null) {
            $this->TaskTime = $param["TaskTime"];
        }

        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ServiceEdition",$param) and $param["ServiceEdition"] !== null) {
            $this->ServiceEdition = $param["ServiceEdition"];
        }
    }
}
