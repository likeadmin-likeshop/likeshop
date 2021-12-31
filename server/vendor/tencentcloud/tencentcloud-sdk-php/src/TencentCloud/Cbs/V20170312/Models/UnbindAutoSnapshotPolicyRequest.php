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
 * UnbindAutoSnapshotPolicy请求参数结构体
 *
 * @method array getDiskIds() 获取要解绑定期快照策略的云盘ID列表。
 * @method void setDiskIds(array $DiskIds) 设置要解绑定期快照策略的云盘ID列表。
 * @method string getAutoSnapshotPolicyId() 获取要解绑的定期快照策略ID。
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置要解绑的定期快照策略ID。
 */
class UnbindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var array 要解绑定期快照策略的云盘ID列表。
     */
    public $DiskIds;

    /**
     * @var string 要解绑的定期快照策略ID。
     */
    public $AutoSnapshotPolicyId;

    /**
     * @param array $DiskIds 要解绑定期快照策略的云盘ID列表。
     * @param string $AutoSnapshotPolicyId 要解绑的定期快照策略ID。
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }
    }
}
