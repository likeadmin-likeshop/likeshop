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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询设备历史
 *
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getActionId() 获取动作Id
 * @method void setActionId(string $ActionId) 设置动作Id
 * @method string getActionName() 获取动作名称
 * @method void setActionName(string $ActionName) 设置动作名称
 * @method integer getReqTime() 获取请求时间
 * @method void setReqTime(integer $ReqTime) 设置请求时间
 * @method integer getRspTime() 获取响应时间
 * @method void setRspTime(integer $RspTime) 设置响应时间
 * @method string getInputParams() 获取输入参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputParams(string $InputParams) 设置输入参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputParams() 获取输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputParams(string $OutputParams) 设置输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalling() 获取调用方式
 * @method void setCalling(string $Calling) 设置调用方式
 * @method string getClientToken() 获取调用Id
 * @method void setClientToken(string $ClientToken) 设置调用Id
 * @method string getStatus() 获取调用状态
 * @method void setStatus(string $Status) 设置调用状态
 */
class ActionHistory extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 动作Id
     */
    public $ActionId;

    /**
     * @var string 动作名称
     */
    public $ActionName;

    /**
     * @var integer 请求时间
     */
    public $ReqTime;

    /**
     * @var integer 响应时间
     */
    public $RspTime;

    /**
     * @var string 输入参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputParams;

    /**
     * @var string 输出参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputParams;

    /**
     * @var string 调用方式
     */
    public $Calling;

    /**
     * @var string 调用Id
     */
    public $ClientToken;

    /**
     * @var string 调用状态
     */
    public $Status;

    /**
     * @param string $DeviceName 设备名称
     * @param string $ActionId 动作Id
     * @param string $ActionName 动作名称
     * @param integer $ReqTime 请求时间
     * @param integer $RspTime 响应时间
     * @param string $InputParams 输入参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputParams 输出参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Calling 调用方式
     * @param string $ClientToken 调用Id
     * @param string $Status 调用状态
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("ReqTime",$param) and $param["ReqTime"] !== null) {
            $this->ReqTime = $param["ReqTime"];
        }

        if (array_key_exists("RspTime",$param) and $param["RspTime"] !== null) {
            $this->RspTime = $param["RspTime"];
        }

        if (array_key_exists("InputParams",$param) and $param["InputParams"] !== null) {
            $this->InputParams = $param["InputParams"];
        }

        if (array_key_exists("OutputParams",$param) and $param["OutputParams"] !== null) {
            $this->OutputParams = $param["OutputParams"];
        }

        if (array_key_exists("Calling",$param) and $param["Calling"] !== null) {
            $this->Calling = $param["Calling"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
