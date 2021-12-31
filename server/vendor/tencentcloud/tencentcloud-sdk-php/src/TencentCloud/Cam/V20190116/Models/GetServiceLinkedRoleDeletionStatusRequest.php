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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceLinkedRoleDeletionStatus请求参数结构体
 *
 * @method string getDeletionTaskId() 获取删除任务ID
 * @method void setDeletionTaskId(string $DeletionTaskId) 设置删除任务ID
 */
class GetServiceLinkedRoleDeletionStatusRequest extends AbstractModel
{
    /**
     * @var string 删除任务ID
     */
    public $DeletionTaskId;

    /**
     * @param string $DeletionTaskId 删除任务ID
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
        if (array_key_exists("DeletionTaskId",$param) and $param["DeletionTaskId"] !== null) {
            $this->DeletionTaskId = $param["DeletionTaskId"];
        }
    }
}
