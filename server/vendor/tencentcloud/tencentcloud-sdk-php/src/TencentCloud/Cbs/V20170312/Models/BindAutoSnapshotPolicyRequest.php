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
 * BindAutoSnapshotPolicy请求参数结构体
 *
 * @method string getAutoSnapshotPolicyId() 获取要绑定的定期快照策略ID。
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置要绑定的定期快照策略ID。
 * @method array getDiskIds() 获取要绑定的云硬盘ID列表，一次请求最多绑定80块云盘。
 * @method void setDiskIds(array $DiskIds) 设置要绑定的云硬盘ID列表，一次请求最多绑定80块云盘。
 */
class BindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string 要绑定的定期快照策略ID。
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var array 要绑定的云硬盘ID列表，一次请求最多绑定80块云盘。
     */
    public $DiskIds;

    /**
     * @param string $AutoSnapshotPolicyId 要绑定的定期快照策略ID。
     * @param array $DiskIds 要绑定的云硬盘ID列表，一次请求最多绑定80块云盘。
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

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }
    }
}
