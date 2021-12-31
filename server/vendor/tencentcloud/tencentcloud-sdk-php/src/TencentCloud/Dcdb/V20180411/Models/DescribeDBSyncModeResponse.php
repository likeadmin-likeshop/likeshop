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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSyncMode返回参数结构体
 *
 * @method integer getSyncMode() 获取同步模式：0 异步，1 强同步， 2 强同步可退化
 * @method void setSyncMode(integer $SyncMode) 设置同步模式：0 异步，1 强同步， 2 强同步可退化
 * @method integer getIsModifying() 获取是否有修改流程在执行中：1 是， 0 否。
 * @method void setIsModifying(integer $IsModifying) 设置是否有修改流程在执行中：1 是， 0 否。
 * @method integer getCurrentSyncMode() 获取当前复制方式，0 异步，1 同步
 * @method void setCurrentSyncMode(integer $CurrentSyncMode) 设置当前复制方式，0 异步，1 同步
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBSyncModeResponse extends AbstractModel
{
    /**
     * @var integer 同步模式：0 异步，1 强同步， 2 强同步可退化
     */
    public $SyncMode;

    /**
     * @var integer 是否有修改流程在执行中：1 是， 0 否。
     */
    public $IsModifying;

    /**
     * @var integer 当前复制方式，0 异步，1 同步
     */
    public $CurrentSyncMode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SyncMode 同步模式：0 异步，1 强同步， 2 强同步可退化
     * @param integer $IsModifying 是否有修改流程在执行中：1 是， 0 否。
     * @param integer $CurrentSyncMode 当前复制方式，0 异步，1 同步
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
        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("IsModifying",$param) and $param["IsModifying"] !== null) {
            $this->IsModifying = $param["IsModifying"];
        }

        if (array_key_exists("CurrentSyncMode",$param) and $param["CurrentSyncMode"] !== null) {
            $this->CurrentSyncMode = $param["CurrentSyncMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
