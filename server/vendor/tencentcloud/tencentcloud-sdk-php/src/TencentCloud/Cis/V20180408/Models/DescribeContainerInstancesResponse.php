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
namespace TencentCloud\Cis\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeContainerInstances返回参数结构体
 *
 * @method array getContainerInstanceList() 获取容器实例列表
 * @method void setContainerInstanceList(array $ContainerInstanceList) 设置容器实例列表
 * @method integer getTotalCount() 获取容器实例总数
 * @method void setTotalCount(integer $TotalCount) 设置容器实例总数
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */
class DescribeContainerInstancesResponse extends AbstractModel
{
    /**
     * @var array 容器实例列表
     */
    public $ContainerInstanceList;

    /**
     * @var integer 容器实例总数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;

    /**
     * @param array $ContainerInstanceList 容器实例列表
     * @param integer $TotalCount 容器实例总数
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("ContainerInstanceList",$param) and $param["ContainerInstanceList"] !== null) {
            $this->ContainerInstanceList = [];
            foreach ($param["ContainerInstanceList"] as $key => $value){
                $obj = new ContainerInstance();
                $obj->deserialize($value);
                array_push($this->ContainerInstanceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
