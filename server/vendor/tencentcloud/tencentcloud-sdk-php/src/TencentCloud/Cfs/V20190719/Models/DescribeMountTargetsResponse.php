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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMountTargets返回参数结构体
 *
 * @method array getMountTargets() 获取挂载点详情
 * @method void setMountTargets(array $MountTargets) 设置挂载点详情
 * @method integer getNumberOfMountTargets() 获取挂载点数量
 * @method void setNumberOfMountTargets(integer $NumberOfMountTargets) 设置挂载点数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMountTargetsResponse extends AbstractModel
{
    /**
     * @var array 挂载点详情
     */
    public $MountTargets;

    /**
     * @var integer 挂载点数量
     */
    public $NumberOfMountTargets;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MountTargets 挂载点详情
     * @param integer $NumberOfMountTargets 挂载点数量
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
        if (array_key_exists("MountTargets",$param) and $param["MountTargets"] !== null) {
            $this->MountTargets = [];
            foreach ($param["MountTargets"] as $key => $value){
                $obj = new MountInfo();
                $obj->deserialize($value);
                array_push($this->MountTargets, $obj);
            }
        }

        if (array_key_exists("NumberOfMountTargets",$param) and $param["NumberOfMountTargets"] !== null) {
            $this->NumberOfMountTargets = $param["NumberOfMountTargets"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
