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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音检测结果返回
 *
 * @method integer getCode() 获取业务返回码
 * @method void setCode(integer $Code) 设置业务返回码
 * @method string getDataId() 获取数据唯一 ID
 * @method void setDataId(string $DataId) 设置数据唯一 ID
 * @method integer getScanFinishTime() 获取检测完成的时间戳
 * @method void setScanFinishTime(integer $ScanFinishTime) 设置检测完成的时间戳
 * @method boolean getHitFlag() 获取是否违规
 * @method void setHitFlag(boolean $HitFlag) 设置是否违规
 * @method boolean getLive() 获取是否为流
 * @method void setLive(boolean $Live) 设置是否为流
 * @method string getMsg() 获取业务返回描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置业务返回描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScanPiece() 获取检测结果，Code 为 0 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanPiece(array $ScanPiece) 设置检测结果，Code 为 0 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanStartTime() 获取提交检测的时间戳
 * @method void setScanStartTime(integer $ScanStartTime) 设置提交检测的时间戳
 * @method array getScenes() 获取语音检测场景，对应请求时的 Scene
 * @method void setScenes(array $Scenes) 设置语音检测场景，对应请求时的 Scene
 * @method string getTaskId() 获取语音检测任务 ID，由后台分配
 * @method void setTaskId(string $TaskId) 设置语音检测任务 ID，由后台分配
 * @method string getUrl() 获取文件或接流地址
 * @method void setUrl(string $Url) 设置文件或接流地址
 * @method string getStatus() 获取检测任务执行结果状态，分别为：
<li>Start: 任务开始</li>
<li>Success: 成功结束</li>
<li>Error: 异常</li>
 * @method void setStatus(string $Status) 设置检测任务执行结果状态，分别为：
<li>Start: 任务开始</li>
<li>Success: 成功结束</li>
<li>Error: 异常</li>
 */
class DescribeScanResult extends AbstractModel
{
    /**
     * @var integer 业务返回码
     */
    public $Code;

    /**
     * @var string 数据唯一 ID
     */
    public $DataId;

    /**
     * @var integer 检测完成的时间戳
     */
    public $ScanFinishTime;

    /**
     * @var boolean 是否违规
     */
    public $HitFlag;

    /**
     * @var boolean 是否为流
     */
    public $Live;

    /**
     * @var string 业务返回描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var array 检测结果，Code 为 0 时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanPiece;

    /**
     * @var integer 提交检测的时间戳
     */
    public $ScanStartTime;

    /**
     * @var array 语音检测场景，对应请求时的 Scene
     */
    public $Scenes;

    /**
     * @var string 语音检测任务 ID，由后台分配
     */
    public $TaskId;

    /**
     * @var string 文件或接流地址
     */
    public $Url;

    /**
     * @var string 检测任务执行结果状态，分别为：
<li>Start: 任务开始</li>
<li>Success: 成功结束</li>
<li>Error: 异常</li>
     */
    public $Status;

    /**
     * @param integer $Code 业务返回码
     * @param string $DataId 数据唯一 ID
     * @param integer $ScanFinishTime 检测完成的时间戳
     * @param boolean $HitFlag 是否违规
     * @param boolean $Live 是否为流
     * @param string $Msg 业务返回描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ScanPiece 检测结果，Code 为 0 时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanStartTime 提交检测的时间戳
     * @param array $Scenes 语音检测场景，对应请求时的 Scene
     * @param string $TaskId 语音检测任务 ID，由后台分配
     * @param string $Url 文件或接流地址
     * @param string $Status 检测任务执行结果状态，分别为：
<li>Start: 任务开始</li>
<li>Success: 成功结束</li>
<li>Error: 异常</li>
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("ScanFinishTime",$param) and $param["ScanFinishTime"] !== null) {
            $this->ScanFinishTime = $param["ScanFinishTime"];
        }

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Live",$param) and $param["Live"] !== null) {
            $this->Live = $param["Live"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("ScanPiece",$param) and $param["ScanPiece"] !== null) {
            $this->ScanPiece = [];
            foreach ($param["ScanPiece"] as $key => $value){
                $obj = new ScanPiece();
                $obj->deserialize($value);
                array_push($this->ScanPiece, $obj);
            }
        }

        if (array_key_exists("ScanStartTime",$param) and $param["ScanStartTime"] !== null) {
            $this->ScanStartTime = $param["ScanStartTime"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
