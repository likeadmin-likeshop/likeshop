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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetProvisionedConcurrencyConfig返回参数结构体
 *
 * @method integer getUnallocatedConcurrencyNum() 获取该函数剩余可配置的预置并发数。
 * @method void setUnallocatedConcurrencyNum(integer $UnallocatedConcurrencyNum) 设置该函数剩余可配置的预置并发数。
 * @method array getAllocated() 获取函数已预置的并发配置详情。
 * @method void setAllocated(array $Allocated) 设置函数已预置的并发配置详情。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetProvisionedConcurrencyConfigResponse extends AbstractModel
{
    /**
     * @var integer 该函数剩余可配置的预置并发数。
     */
    public $UnallocatedConcurrencyNum;

    /**
     * @var array 函数已预置的并发配置详情。
     */
    public $Allocated;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $UnallocatedConcurrencyNum 该函数剩余可配置的预置并发数。
     * @param array $Allocated 函数已预置的并发配置详情。
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
        if (array_key_exists("UnallocatedConcurrencyNum",$param) and $param["UnallocatedConcurrencyNum"] !== null) {
            $this->UnallocatedConcurrencyNum = $param["UnallocatedConcurrencyNum"];
        }

        if (array_key_exists("Allocated",$param) and $param["Allocated"] !== null) {
            $this->Allocated = [];
            foreach ($param["Allocated"] as $key => $value){
                $obj = new VersionProvisionedConcurrencyInfo();
                $obj->deserialize($value);
                array_push($this->Allocated, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
