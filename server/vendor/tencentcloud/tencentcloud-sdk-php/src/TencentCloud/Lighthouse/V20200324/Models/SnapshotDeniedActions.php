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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快照操作限制列表。
 *
 * @method string getSnapshotId() 获取快照 ID。
 * @method void setSnapshotId(string $SnapshotId) 设置快照 ID。
 * @method array getDeniedActions() 获取操作限制列表。
 * @method void setDeniedActions(array $DeniedActions) 设置操作限制列表。
 */
class SnapshotDeniedActions extends AbstractModel
{
    /**
     * @var string 快照 ID。
     */
    public $SnapshotId;

    /**
     * @var array 操作限制列表。
     */
    public $DeniedActions;

    /**
     * @param string $SnapshotId 快照 ID。
     * @param array $DeniedActions 操作限制列表。
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DeniedActions",$param) and $param["DeniedActions"] !== null) {
            $this->DeniedActions = [];
            foreach ($param["DeniedActions"] as $key => $value){
                $obj = new DeniedAction();
                $obj->deserialize($value);
                array_push($this->DeniedActions, $obj);
            }
        }
    }
}
