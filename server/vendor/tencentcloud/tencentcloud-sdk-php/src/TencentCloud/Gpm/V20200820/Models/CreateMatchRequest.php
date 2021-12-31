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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMatch请求参数结构体
 *
 * @method string getMatchName() 获取匹配名称，[a-zA-Z0-9-\.]* 长度128
 * @method void setMatchName(string $MatchName) 设置匹配名称，[a-zA-Z0-9-\.]* 长度128
 * @method string getRuleCode() 获取规则code
 * @method void setRuleCode(string $RuleCode) 设置规则code
 * @method integer getTimeout() 获取超时时间，1-600秒
 * @method void setTimeout(integer $Timeout) 设置超时时间，1-600秒
 * @method integer getServerType() 获取是否为匹配结果请求服务器资源，0表示否，1表示请求GSE资源
 * @method void setServerType(integer $ServerType) 设置是否为匹配结果请求服务器资源，0表示否，1表示请求GSE资源
 * @method string getMatchDesc() 获取匹配描述，最长1024
 * @method void setMatchDesc(string $MatchDesc) 设置匹配描述，最长1024
 * @method string getNotifyUrl() 获取只支持https 和 http 协议
 * @method void setNotifyUrl(string $NotifyUrl) 设置只支持https 和 http 协议
 * @method string getServerRegion() 获取游戏服务器队列地域
 * @method void setServerRegion(string $ServerRegion) 设置游戏服务器队列地域
 * @method string getServerQueue() 获取游戏服务器队列
 * @method void setServerQueue(string $ServerQueue) 设置游戏服务器队列
 * @method string getCustomPushData() 获取自定义推送数据
 * @method void setCustomPushData(string $CustomPushData) 设置自定义推送数据
 * @method string getServerSessionData() 获取游戏服务器会话数据
 * @method void setServerSessionData(string $ServerSessionData) 设置游戏服务器会话数据
 * @method array getGameProperties() 获取游戏属性，key-value结构的数组
 * @method void setGameProperties(array $GameProperties) 设置游戏属性，key-value结构的数组
 * @method integer getLogSwitch() 获取日志开关，0表示关，1表示开
 * @method void setLogSwitch(integer $LogSwitch) 设置日志开关，0表示关，1表示开
 * @method array getTags() 获取标签，key-value结构的数组
 * @method void setTags(array $Tags) 设置标签，key-value结构的数组
 */
class CreateMatchRequest extends AbstractModel
{
    /**
     * @var string 匹配名称，[a-zA-Z0-9-\.]* 长度128
     */
    public $MatchName;

    /**
     * @var string 规则code
     */
    public $RuleCode;

    /**
     * @var integer 超时时间，1-600秒
     */
    public $Timeout;

    /**
     * @var integer 是否为匹配结果请求服务器资源，0表示否，1表示请求GSE资源
     */
    public $ServerType;

    /**
     * @var string 匹配描述，最长1024
     */
    public $MatchDesc;

    /**
     * @var string 只支持https 和 http 协议
     */
    public $NotifyUrl;

    /**
     * @var string 游戏服务器队列地域
     */
    public $ServerRegion;

    /**
     * @var string 游戏服务器队列
     */
    public $ServerQueue;

    /**
     * @var string 自定义推送数据
     */
    public $CustomPushData;

    /**
     * @var string 游戏服务器会话数据
     */
    public $ServerSessionData;

    /**
     * @var array 游戏属性，key-value结构的数组
     */
    public $GameProperties;

    /**
     * @var integer 日志开关，0表示关，1表示开
     */
    public $LogSwitch;

    /**
     * @var array 标签，key-value结构的数组
     */
    public $Tags;

    /**
     * @param string $MatchName 匹配名称，[a-zA-Z0-9-\.]* 长度128
     * @param string $RuleCode 规则code
     * @param integer $Timeout 超时时间，1-600秒
     * @param integer $ServerType 是否为匹配结果请求服务器资源，0表示否，1表示请求GSE资源
     * @param string $MatchDesc 匹配描述，最长1024
     * @param string $NotifyUrl 只支持https 和 http 协议
     * @param string $ServerRegion 游戏服务器队列地域
     * @param string $ServerQueue 游戏服务器队列
     * @param string $CustomPushData 自定义推送数据
     * @param string $ServerSessionData 游戏服务器会话数据
     * @param array $GameProperties 游戏属性，key-value结构的数组
     * @param integer $LogSwitch 日志开关，0表示关，1表示开
     * @param array $Tags 标签，key-value结构的数组
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
        if (array_key_exists("MatchName",$param) and $param["MatchName"] !== null) {
            $this->MatchName = $param["MatchName"];
        }

        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("MatchDesc",$param) and $param["MatchDesc"] !== null) {
            $this->MatchDesc = $param["MatchDesc"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("ServerRegion",$param) and $param["ServerRegion"] !== null) {
            $this->ServerRegion = $param["ServerRegion"];
        }

        if (array_key_exists("ServerQueue",$param) and $param["ServerQueue"] !== null) {
            $this->ServerQueue = $param["ServerQueue"];
        }

        if (array_key_exists("CustomPushData",$param) and $param["CustomPushData"] !== null) {
            $this->CustomPushData = $param["CustomPushData"];
        }

        if (array_key_exists("ServerSessionData",$param) and $param["ServerSessionData"] !== null) {
            $this->ServerSessionData = $param["ServerSessionData"];
        }

        if (array_key_exists("GameProperties",$param) and $param["GameProperties"] !== null) {
            $this->GameProperties = [];
            foreach ($param["GameProperties"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->GameProperties, $obj);
            }
        }

        if (array_key_exists("LogSwitch",$param) and $param["LogSwitch"] !== null) {
            $this->LogSwitch = $param["LogSwitch"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
