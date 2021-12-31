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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterInstanceGrps返回参数结构体
 *
 * @method integer getTotalCount() 获取实例组个数
 * @method void setTotalCount(integer $TotalCount) 设置实例组个数
 * @method array getInstanceGrpInfoList() 获取实例组列表
 * @method void setInstanceGrpInfoList(array $InstanceGrpInfoList) 设置实例组列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterInstanceGrpsResponse extends AbstractModel
{
    /**
     * @var integer 实例组个数
     */
    public $TotalCount;

    /**
     * @var array 实例组列表
     */
    public $InstanceGrpInfoList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 实例组个数
     * @param array $InstanceGrpInfoList 实例组列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("InstanceGrpInfoList",$param) and $param["InstanceGrpInfoList"] !== null) {
            $this->InstanceGrpInfoList = [];
            foreach ($param["InstanceGrpInfoList"] as $key => $value){
                $obj = new CynosdbInstanceGrp();
                $obj->deserialize($value);
                array_push($this->InstanceGrpInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
