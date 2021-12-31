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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了定期快照策略的详细信息
 *
 * @method string getAutoSnapshotPolicyId() 获取定期快照策略ID。
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置定期快照策略ID。
 * @method string getAutoSnapshotPolicyName() 获取定期快照策略名称。
 * @method void setAutoSnapshotPolicyName(string $AutoSnapshotPolicyName) 设置定期快照策略名称。
 * @method string getAutoSnapshotPolicyState() 获取定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
 * @method void setAutoSnapshotPolicyState(string $AutoSnapshotPolicyState) 设置定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
 * @method boolean getIsActivated() 获取定期快照策略是否激活。
 * @method void setIsActivated(boolean $IsActivated) 设置定期快照策略是否激活。
 * @method boolean getIsPermanent() 获取使用该定期快照策略创建出来的快照是否永久保留。
 * @method void setIsPermanent(boolean $IsPermanent) 设置使用该定期快照策略创建出来的快照是否永久保留。
 * @method integer getRetentionDays() 获取使用该定期快照策略创建出来的快照保留天数。
 * @method void setRetentionDays(integer $RetentionDays) 设置使用该定期快照策略创建出来的快照保留天数。
 * @method string getCreateTime() 获取定期快照策略的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置定期快照策略的创建时间。
 * @method string getNextTriggerTime() 获取定期快照下次触发的时间。
 * @method void setNextTriggerTime(string $NextTriggerTime) 设置定期快照下次触发的时间。
 * @method array getPolicy() 获取定期快照的执行策略。
 * @method void setPolicy(array $Policy) 设置定期快照的执行策略。
 * @method array getDiskIdSet() 获取已绑定当前定期快照策略的云盘ID列表。
 * @method void setDiskIdSet(array $DiskIdSet) 设置已绑定当前定期快照策略的云盘ID列表。
 */
class AutoSnapshotPolicy extends AbstractModel
{
    /**
     * @var string 定期快照策略ID。
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string 定期快照策略名称。
     */
    public $AutoSnapshotPolicyName;

    /**
     * @var string 定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
     */
    public $AutoSnapshotPolicyState;

    /**
     * @var boolean 定期快照策略是否激活。
     */
    public $IsActivated;

    /**
     * @var boolean 使用该定期快照策略创建出来的快照是否永久保留。
     */
    public $IsPermanent;

    /**
     * @var integer 使用该定期快照策略创建出来的快照保留天数。
     */
    public $RetentionDays;

    /**
     * @var string 定期快照策略的创建时间。
     */
    public $CreateTime;

    /**
     * @var string 定期快照下次触发的时间。
     */
    public $NextTriggerTime;

    /**
     * @var array 定期快照的执行策略。
     */
    public $Policy;

    /**
     * @var array 已绑定当前定期快照策略的云盘ID列表。
     */
    public $DiskIdSet;

    /**
     * @param string $AutoSnapshotPolicyId 定期快照策略ID。
     * @param string $AutoSnapshotPolicyName 定期快照策略名称。
     * @param string $AutoSnapshotPolicyState 定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
     * @param boolean $IsActivated 定期快照策略是否激活。
     * @param boolean $IsPermanent 使用该定期快照策略创建出来的快照是否永久保留。
     * @param integer $RetentionDays 使用该定期快照策略创建出来的快照保留天数。
     * @param string $CreateTime 定期快照策略的创建时间。
     * @param string $NextTriggerTime 定期快照下次触发的时间。
     * @param array $Policy 定期快照的执行策略。
     * @param array $DiskIdSet 已绑定当前定期快照策略的云盘ID列表。
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            $this->AutoSnapshotPolicyName = $param["AutoSnapshotPolicyName"];
        }

        if (array_key_exists("AutoSnapshotPolicyState",$param) and $param["AutoSnapshotPolicyState"] !== null) {
            $this->AutoSnapshotPolicyState = $param["AutoSnapshotPolicyState"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NextTriggerTime",$param) and $param["NextTriggerTime"] !== null) {
            $this->NextTriggerTime = $param["NextTriggerTime"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }

        if (array_key_exists("DiskIdSet",$param) and $param["DiskIdSet"] !== null) {
            $this->DiskIdSet = $param["DiskIdSet"];
        }
    }
}
