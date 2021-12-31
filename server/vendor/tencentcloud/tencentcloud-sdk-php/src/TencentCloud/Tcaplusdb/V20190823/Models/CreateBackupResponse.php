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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackup返回参数结构体
 *
 * @method array getTaskIds() 获取创建的备份任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskIds(array $TaskIds) 设置创建的备份任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApplicationIds() 获取创建的备份申请ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationIds(array $ApplicationIds) 设置创建的备份申请ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateBackupResponse extends AbstractModel
{
    /**
     * @var array 创建的备份任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskIds;

    /**
     * @var array 创建的备份申请ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationIds;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TaskIds 创建的备份任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApplicationIds 创建的备份申请ID列表
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("ApplicationIds",$param) and $param["ApplicationIds"] !== null) {
            $this->ApplicationIds = $param["ApplicationIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
