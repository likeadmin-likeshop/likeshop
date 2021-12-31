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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询_通用字段
 *
 * @method string getId() 获取Id
 * @method void setId(string $Id) 设置Id
 * @method string getUin() 获取Uin
 * @method void setUin(string $Uin) 设置Uin
 * @method string getAppId() 获取AppId
 * @method void setAppId(string $AppId) 设置AppId
 * @method string getEventName() 获取EventName
 * @method void setEventName(string $EventName) 设置EventName
 * @method string getDivulgeSoure() 获取DivulgeSoure
 * @method void setDivulgeSoure(string $DivulgeSoure) 设置DivulgeSoure
 * @method string getAsset() 获取Asset
 * @method void setAsset(string $Asset) 设置Asset
 * @method string getRuleName() 获取RuleName
 * @method void setRuleName(string $RuleName) 设置RuleName
 * @method string getRuleId() 获取RuleId
 * @method void setRuleId(string $RuleId) 设置RuleId
 * @method string getRuleWord() 获取RuleWord
 * @method void setRuleWord(string $RuleWord) 设置RuleWord
 * @method string getScanUrl() 获取ScanUrl
 * @method void setScanUrl(string $ScanUrl) 设置ScanUrl
 * @method string getScanCount() 获取ScanCount
 * @method void setScanCount(string $ScanCount) 设置ScanCount
 * @method string getLevel() 获取Level
 * @method void setLevel(string $Level) 设置Level
 * @method string getStatus() 获取Status
 * @method void setStatus(string $Status) 设置Status
 * @method string getEventTime() 获取EventTime
 * @method void setEventTime(string $EventTime) 设置EventTime
 * @method string getInsertTime() 获取InsertTime
 * @method void setInsertTime(string $InsertTime) 设置InsertTime
 * @method string getUpdateTime() 获取UpdateTime
 * @method void setUpdateTime(string $UpdateTime) 设置UpdateTime
 */
class SaDivulgeDataQueryPub extends AbstractModel
{
    /**
     * @var string Id
     */
    public $Id;

    /**
     * @var string Uin
     */
    public $Uin;

    /**
     * @var string AppId
     */
    public $AppId;

    /**
     * @var string EventName
     */
    public $EventName;

    /**
     * @var string DivulgeSoure
     */
    public $DivulgeSoure;

    /**
     * @var string Asset
     */
    public $Asset;

    /**
     * @var string RuleName
     */
    public $RuleName;

    /**
     * @var string RuleId
     */
    public $RuleId;

    /**
     * @var string RuleWord
     */
    public $RuleWord;

    /**
     * @var string ScanUrl
     */
    public $ScanUrl;

    /**
     * @var string ScanCount
     */
    public $ScanCount;

    /**
     * @var string Level
     */
    public $Level;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var string EventTime
     */
    public $EventTime;

    /**
     * @var string InsertTime
     */
    public $InsertTime;

    /**
     * @var string UpdateTime
     */
    public $UpdateTime;

    /**
     * @param string $Id Id
     * @param string $Uin Uin
     * @param string $AppId AppId
     * @param string $EventName EventName
     * @param string $DivulgeSoure DivulgeSoure
     * @param string $Asset Asset
     * @param string $RuleName RuleName
     * @param string $RuleId RuleId
     * @param string $RuleWord RuleWord
     * @param string $ScanUrl ScanUrl
     * @param string $ScanCount ScanCount
     * @param string $Level Level
     * @param string $Status Status
     * @param string $EventTime EventTime
     * @param string $InsertTime InsertTime
     * @param string $UpdateTime UpdateTime
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("DivulgeSoure",$param) and $param["DivulgeSoure"] !== null) {
            $this->DivulgeSoure = $param["DivulgeSoure"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleWord",$param) and $param["RuleWord"] !== null) {
            $this->RuleWord = $param["RuleWord"];
        }

        if (array_key_exists("ScanUrl",$param) and $param["ScanUrl"] !== null) {
            $this->ScanUrl = $param["ScanUrl"];
        }

        if (array_key_exists("ScanCount",$param) and $param["ScanCount"] !== null) {
            $this->ScanCount = $param["ScanCount"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
