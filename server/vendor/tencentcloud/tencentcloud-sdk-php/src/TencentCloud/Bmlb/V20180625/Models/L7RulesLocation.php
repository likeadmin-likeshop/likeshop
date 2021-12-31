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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取七层转发规则时返回的转发域名下面的转发路径。
 *
 * @method string getUrl() 获取转发路径。
 * @method void setUrl(string $Url) 设置转发路径。
 * @method string getLocationId() 获取转发路径实例ID。
 * @method void setLocationId(string $LocationId) 设置转发路径实例ID。
 * @method integer getSessionExpire() 获取会话保持时间。
 * @method void setSessionExpire(integer $SessionExpire) 设置会话保持时间。
 * @method integer getHealthSwitch() 获取是否开启健康检查。
 * @method void setHealthSwitch(integer $HealthSwitch) 设置是否开启健康检查。
 * @method string getHttpCheckPath() 获取健康检查检查路径。
 * @method void setHttpCheckPath(string $HttpCheckPath) 设置健康检查检查路径。
 * @method string getHttpCheckDomain() 获取健康检查检查域名。
 * @method void setHttpCheckDomain(string $HttpCheckDomain) 设置健康检查检查域名。
 * @method integer getIntervalTime() 获取健康检查检查间隔时间。
 * @method void setIntervalTime(integer $IntervalTime) 设置健康检查检查间隔时间。
 * @method integer getHealthNum() 获取健康检查健康阈值。
 * @method void setHealthNum(integer $HealthNum) 设置健康检查健康阈值。
 * @method integer getUnhealthNum() 获取健康检查不健康阈值。
 * @method void setUnhealthNum(integer $UnhealthNum) 设置健康检查不健康阈值。
 * @method array getHttpCodes() 获取健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
 * @method void setHttpCodes(array $HttpCodes) 设置健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
 * @method string getBalanceMode() 获取均衡方式。
 * @method void setBalanceMode(string $BalanceMode) 设置均衡方式。
 * @method integer getStatus() 获取转发路径当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method void setStatus(integer $Status) 设置转发路径当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method string getAddTimestamp() 获取创建时间戳。
 * @method void setAddTimestamp(string $AddTimestamp) 设置创建时间戳。
 */
class L7RulesLocation extends AbstractModel
{
    /**
     * @var string 转发路径。
     */
    public $Url;

    /**
     * @var string 转发路径实例ID。
     */
    public $LocationId;

    /**
     * @var integer 会话保持时间。
     */
    public $SessionExpire;

    /**
     * @var integer 是否开启健康检查。
     */
    public $HealthSwitch;

    /**
     * @var string 健康检查检查路径。
     */
    public $HttpCheckPath;

    /**
     * @var string 健康检查检查域名。
     */
    public $HttpCheckDomain;

    /**
     * @var integer 健康检查检查间隔时间。
     */
    public $IntervalTime;

    /**
     * @var integer 健康检查健康阈值。
     */
    public $HealthNum;

    /**
     * @var integer 健康检查不健康阈值。
     */
    public $UnhealthNum;

    /**
     * @var array 健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
     */
    public $HttpCodes;

    /**
     * @var string 均衡方式。
     */
    public $BalanceMode;

    /**
     * @var integer 转发路径当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     */
    public $Status;

    /**
     * @var string 创建时间戳。
     */
    public $AddTimestamp;

    /**
     * @param string $Url 转发路径。
     * @param string $LocationId 转发路径实例ID。
     * @param integer $SessionExpire 会话保持时间。
     * @param integer $HealthSwitch 是否开启健康检查。
     * @param string $HttpCheckPath 健康检查检查路径。
     * @param string $HttpCheckDomain 健康检查检查域名。
     * @param integer $IntervalTime 健康检查检查间隔时间。
     * @param integer $HealthNum 健康检查健康阈值。
     * @param integer $UnhealthNum 健康检查不健康阈值。
     * @param array $HttpCodes 健康检查中认为健康的HTTP返回码的组合。可选值为1~5的集合，1表示HTTP返回码为1xx认为健康。2表示HTTP返回码为2xx认为健康。3表示HTTP返回码为3xx认为健康。4表示HTTP返回码为4xx认为健康。5表示HTTP返回码为5xx认为健康。
     * @param string $BalanceMode 均衡方式。
     * @param integer $Status 转发路径当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     * @param string $AddTimestamp 创建时间戳。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("SessionExpire",$param) and $param["SessionExpire"] !== null) {
            $this->SessionExpire = $param["SessionExpire"];
        }

        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("HttpCheckDomain",$param) and $param["HttpCheckDomain"] !== null) {
            $this->HttpCheckDomain = $param["HttpCheckDomain"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnhealthNum",$param) and $param["UnhealthNum"] !== null) {
            $this->UnhealthNum = $param["UnhealthNum"];
        }

        if (array_key_exists("HttpCodes",$param) and $param["HttpCodes"] !== null) {
            $this->HttpCodes = $param["HttpCodes"];
        }

        if (array_key_exists("BalanceMode",$param) and $param["BalanceMode"] !== null) {
            $this->BalanceMode = $param["BalanceMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTimestamp",$param) and $param["AddTimestamp"] !== null) {
            $this->AddTimestamp = $param["AddTimestamp"];
        }
    }
}
