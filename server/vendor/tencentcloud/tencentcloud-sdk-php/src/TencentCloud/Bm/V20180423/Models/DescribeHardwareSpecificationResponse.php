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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHardwareSpecification返回参数结构体
 *
 * @method array getCpuInfoSet() 获取CPU型号列表
 * @method void setCpuInfoSet(array $CpuInfoSet) 设置CPU型号列表
 * @method array getMemSet() 获取内存的取值，单位为G
 * @method void setMemSet(array $MemSet) 设置内存的取值，单位为G
 * @method array getDiskInfoSet() 获取硬盘型号列表
 * @method void setDiskInfoSet(array $DiskInfoSet) 设置硬盘型号列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHardwareSpecificationResponse extends AbstractModel
{
    /**
     * @var array CPU型号列表
     */
    public $CpuInfoSet;

    /**
     * @var array 内存的取值，单位为G
     */
    public $MemSet;

    /**
     * @var array 硬盘型号列表
     */
    public $DiskInfoSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CpuInfoSet CPU型号列表
     * @param array $MemSet 内存的取值，单位为G
     * @param array $DiskInfoSet 硬盘型号列表
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
        if (array_key_exists("CpuInfoSet",$param) and $param["CpuInfoSet"] !== null) {
            $this->CpuInfoSet = [];
            foreach ($param["CpuInfoSet"] as $key => $value){
                $obj = new CpuInfo();
                $obj->deserialize($value);
                array_push($this->CpuInfoSet, $obj);
            }
        }

        if (array_key_exists("MemSet",$param) and $param["MemSet"] !== null) {
            $this->MemSet = $param["MemSet"];
        }

        if (array_key_exists("DiskInfoSet",$param) and $param["DiskInfoSet"] !== null) {
            $this->DiskInfoSet = [];
            foreach ($param["DiskInfoSet"] as $key => $value){
                $obj = new DiskInfo();
                $obj->deserialize($value);
                array_push($this->DiskInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
