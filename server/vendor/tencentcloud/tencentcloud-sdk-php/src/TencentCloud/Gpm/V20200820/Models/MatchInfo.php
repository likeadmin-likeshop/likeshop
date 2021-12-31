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
 * 匹配信息
 *
 * @method string getMatchCode() 获取匹配code
 * @method void setMatchCode(string $MatchCode) 设置匹配code
 * @method string getMatchName() 获取匹配名称
 * @method void setMatchName(string $MatchName) 设置匹配名称
 * @method string getMatchDesc() 获取匹配描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchDesc(string $MatchDesc) 设置匹配描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleCode() 获取规则code
 * @method void setRuleCode(string $RuleCode) 设置规则code
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getTimeout() 获取超时时间
 * @method void setTimeout(integer $Timeout) 设置超时时间
 * @method string getNotifyUrl() 获取接收通知地址
 * @method void setNotifyUrl(string $NotifyUrl) 设置接收通知地址
 * @method integer getServerType() 获取是否为匹配结果请求服务器资源，0否，1请求GSE资源
 * @method void setServerType(integer $ServerType) 设置是否为匹配结果请求服务器资源，0否，1请求GSE资源
 * @method string getServerRegion() 获取服务器队列所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerRegion(string $ServerRegion) 设置服务器队列所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServerQueue() 获取服务器队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerQueue(string $ServerQueue) 设置服务器队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomPushData() 获取自定义推送数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomPushData(string $CustomPushData) 设置自定义推送数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServerSessionData() 获取游戏服务器会话数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerSessionData(string $ServerSessionData) 设置游戏服务器会话数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGameProperties() 获取游戏属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGameProperties(array $GameProperties) 设置游戏属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogSwitch() 获取日志开关，0表示关，1表示开
 * @method void setLogSwitch(integer $LogSwitch) 设置日志开关，0表示关，1表示开
 * @method string getLogsetId() 获取日志集id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置日志集id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetName() 获取日志集名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetName(string $LogsetName) 设置日志集名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTopicId() 获取日志主题id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTopicId(string $LogTopicId) 设置日志主题id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTopicName() 获取日志主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTopicName(string $LogTopicName) 设置日志主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户主账号Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户主账号Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUin() 获取用户创建账号Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUin(string $CreateUin) 设置用户创建账号Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogStatus() 获取日志状态，0表示正常，1表示日志集不存在，2表示日志主题不存在，3表示日志集和日志主题都不存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogStatus(integer $LogStatus) 设置日志状态，0表示正常，1表示日志集不存在，2表示日志主题不存在，3表示日志集和日志主题都不存在。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MatchInfo extends AbstractModel
{
    /**
     * @var string 匹配code
     */
    public $MatchCode;

    /**
     * @var string 匹配名称
     */
    public $MatchName;

    /**
     * @var string 匹配描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchDesc;

    /**
     * @var string 规则code
     */
    public $RuleCode;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 超时时间
     */
    public $Timeout;

    /**
     * @var string 接收通知地址
     */
    public $NotifyUrl;

    /**
     * @var integer 是否为匹配结果请求服务器资源，0否，1请求GSE资源
     */
    public $ServerType;

    /**
     * @var string 服务器队列所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerRegion;

    /**
     * @var string 服务器队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerQueue;

    /**
     * @var string 自定义推送数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomPushData;

    /**
     * @var string 游戏服务器会话数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerSessionData;

    /**
     * @var array 游戏属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GameProperties;

    /**
     * @var integer 日志开关，0表示关，1表示开
     */
    public $LogSwitch;

    /**
     * @var string 日志集id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @var string 日志集名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetName;

    /**
     * @var string 日志主题id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTopicId;

    /**
     * @var string 日志主题名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTopicName;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 地区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户主账号Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 用户创建账号Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUin;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 日志状态，0表示正常，1表示日志集不存在，2表示日志主题不存在，3表示日志集和日志主题都不存在。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogStatus;

    /**
     * @param string $MatchCode 匹配code
     * @param string $MatchName 匹配名称
     * @param string $MatchDesc 匹配描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleCode 规则code
     * @param string $CreateTime 创建时间
     * @param integer $Timeout 超时时间
     * @param string $NotifyUrl 接收通知地址
     * @param integer $ServerType 是否为匹配结果请求服务器资源，0否，1请求GSE资源
     * @param string $ServerRegion 服务器队列所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServerQueue 服务器队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomPushData 自定义推送数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServerSessionData 游戏服务器会话数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GameProperties 游戏属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogSwitch 日志开关，0表示关，1表示开
     * @param string $LogsetId 日志集id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetName 日志集名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTopicId 日志主题id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTopicName 日志主题名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户主账号Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUin 用户创建账号Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogStatus 日志状态，0表示正常，1表示日志集不存在，2表示日志主题不存在，3表示日志集和日志主题都不存在。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }

        if (array_key_exists("MatchName",$param) and $param["MatchName"] !== null) {
            $this->MatchName = $param["MatchName"];
        }

        if (array_key_exists("MatchDesc",$param) and $param["MatchDesc"] !== null) {
            $this->MatchDesc = $param["MatchDesc"];
        }

        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
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

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("LogTopicName",$param) and $param["LogTopicName"] !== null) {
            $this->LogTopicName = $param["LogTopicName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("LogStatus",$param) and $param["LogStatus"] !== null) {
            $this->LogStatus = $param["LogStatus"];
        }
    }
}
