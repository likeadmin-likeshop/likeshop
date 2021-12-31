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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceDTSInfo返回参数结构体
 *
 * @method string getJobId() 获取DTS任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置DTS任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobName() 获取DTS任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobName(string $JobName) 设置DTS任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取任务状态,取值为：1-创建中(Creating),3-校验中(Checking)4-校验通过(CheckPass),5-校验不通过（CheckNotPass）,7-任务运行(Running),8-准备完成（ReadyComplete）,9-任务成功（Success）,10-任务失败（Failed）,11-撤销中（Stopping）,12-完成中（Completing）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置任务状态,取值为：1-创建中(Creating),3-校验中(Checking)4-校验通过(CheckPass),5-校验不通过（CheckNotPass）,7-任务运行(Running),8-准备完成（ReadyComplete）,9-任务成功（Success）,10-任务失败（Failed）,11-撤销中（Stopping）,12-完成中（Completing）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffset() 获取同步时延，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(integer $Offset) 设置同步时延，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCutDownTime() 获取断开时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCutDownTime(string $CutDownTime) 设置断开时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInstanceDTSInstanceInfo getSrcInfo() 获取源实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcInfo(DescribeInstanceDTSInstanceInfo $SrcInfo) 设置源实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInstanceDTSInstanceInfo getDstInfo() 获取目标实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstInfo(DescribeInstanceDTSInstanceInfo $DstInfo) 设置目标实例信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceDTSInfoResponse extends AbstractModel
{
    /**
     * @var string DTS任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string DTS任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobName;

    /**
     * @var integer 任务状态,取值为：1-创建中(Creating),3-校验中(Checking)4-校验通过(CheckPass),5-校验不通过（CheckNotPass）,7-任务运行(Running),8-准备完成（ReadyComplete）,9-任务成功（Success）,10-任务失败（Failed）,11-撤销中（Stopping）,12-完成中（Completing）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var integer 同步时延，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var string 断开时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CutDownTime;

    /**
     * @var DescribeInstanceDTSInstanceInfo 源实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcInfo;

    /**
     * @var DescribeInstanceDTSInstanceInfo 目标实例信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId DTS任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobName DTS任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 任务状态,取值为：1-创建中(Creating),3-校验中(Checking)4-校验通过(CheckPass),5-校验不通过（CheckNotPass）,7-任务运行(Running),8-准备完成（ReadyComplete）,9-任务成功（Success）,10-任务失败（Failed）,11-撤销中（Stopping）,12-完成中（Completing）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Offset 同步时延，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CutDownTime 断开时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInstanceDTSInstanceInfo $SrcInfo 源实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInstanceDTSInstanceInfo $DstInfo 目标实例信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CutDownTime",$param) and $param["CutDownTime"] !== null) {
            $this->CutDownTime = $param["CutDownTime"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new DescribeInstanceDTSInstanceInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DescribeInstanceDTSInstanceInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
