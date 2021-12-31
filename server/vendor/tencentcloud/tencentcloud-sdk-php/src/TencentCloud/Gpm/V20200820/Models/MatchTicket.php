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
 * 匹配票据信息
 *
 * @method string getId() 获取匹配票据 ID长度 128 [a-zA-Z0-9-\.]*
 * @method void setId(string $Id) 设置匹配票据 ID长度 128 [a-zA-Z0-9-\.]*
 * @method string getMatchCode() 获取匹配 Code
 * @method void setMatchCode(string $MatchCode) 设置匹配 Code
 * @method string getMatchResult() 获取根据 MatchType 取不同的结构序列化结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchResult(string $MatchResult) 设置根据 MatchType 取不同的结构序列化结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchType() 获取表示不同的匹配类型,NORMAL | GSE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchType(string $MatchType) 设置表示不同的匹配类型,NORMAL | GSE
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPlayers() 获取玩家信息列表
 * @method void setPlayers(array $Players) 设置玩家信息列表
 * @method string getStatus() 获取匹配状态: SEARCHING 匹配中; PLACING 匹配放置中; COMPLETED 匹配完成; CANCELLED 匹配取消; TIMEDOUT 匹配超时; FAILED 匹配失败
 * @method void setStatus(string $Status) 设置匹配状态: SEARCHING 匹配中; PLACING 匹配放置中; COMPLETED 匹配完成; CANCELLED 匹配取消; TIMEDOUT 匹配超时; FAILED 匹配失败
 * @method string getStatusMessage() 获取匹配状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusMessage(string $StatusMessage) 设置匹配状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusReason() 获取匹配状态原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusReason(string $StatusReason) 设置匹配状态原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取收到发起匹配请求的时间 eg: "2020-08-17T08:14:38.077Z"
 * @method void setStartTime(string $StartTime) 设置收到发起匹配请求的时间 eg: "2020-08-17T08:14:38.077Z"
 * @method string getEndTime() 获取匹配请求因完成、失败、超时、被取消而停止执行的时间 eg: "2020-08-17T08:14:38.077Z"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置匹配请求因完成、失败、超时、被取消而停止执行的时间 eg: "2020-08-17T08:14:38.077Z"
注意：此字段可能返回 null，表示取不到有效值。
 */
class MatchTicket extends AbstractModel
{
    /**
     * @var string 匹配票据 ID长度 128 [a-zA-Z0-9-\.]*
     */
    public $Id;

    /**
     * @var string 匹配 Code
     */
    public $MatchCode;

    /**
     * @var string 根据 MatchType 取不同的结构序列化结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchResult;

    /**
     * @var string 表示不同的匹配类型,NORMAL | GSE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchType;

    /**
     * @var array 玩家信息列表
     */
    public $Players;

    /**
     * @var string 匹配状态: SEARCHING 匹配中; PLACING 匹配放置中; COMPLETED 匹配完成; CANCELLED 匹配取消; TIMEDOUT 匹配超时; FAILED 匹配失败
     */
    public $Status;

    /**
     * @var string 匹配状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusMessage;

    /**
     * @var string 匹配状态原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusReason;

    /**
     * @var string 收到发起匹配请求的时间 eg: "2020-08-17T08:14:38.077Z"
     */
    public $StartTime;

    /**
     * @var string 匹配请求因完成、失败、超时、被取消而停止执行的时间 eg: "2020-08-17T08:14:38.077Z"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $Id 匹配票据 ID长度 128 [a-zA-Z0-9-\.]*
     * @param string $MatchCode 匹配 Code
     * @param string $MatchResult 根据 MatchType 取不同的结构序列化结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchType 表示不同的匹配类型,NORMAL | GSE
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Players 玩家信息列表
     * @param string $Status 匹配状态: SEARCHING 匹配中; PLACING 匹配放置中; COMPLETED 匹配完成; CANCELLED 匹配取消; TIMEDOUT 匹配超时; FAILED 匹配失败
     * @param string $StatusMessage 匹配状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusReason 匹配状态原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 收到发起匹配请求的时间 eg: "2020-08-17T08:14:38.077Z"
     * @param string $EndTime 匹配请求因完成、失败、超时、被取消而停止执行的时间 eg: "2020-08-17T08:14:38.077Z"
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }

        if (array_key_exists("MatchResult",$param) and $param["MatchResult"] !== null) {
            $this->MatchResult = $param["MatchResult"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("Players",$param) and $param["Players"] !== null) {
            $this->Players = [];
            foreach ($param["Players"] as $key => $value){
                $obj = new Player();
                $obj->deserialize($value);
                array_push($this->Players, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
