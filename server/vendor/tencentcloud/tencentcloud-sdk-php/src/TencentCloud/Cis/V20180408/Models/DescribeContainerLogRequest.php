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
 * DescribeContainerLog请求参数结构体
 *
 * @method string getInstanceName() 获取容器实例名称
 * @method void setInstanceName(string $InstanceName) 设置容器实例名称
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method integer getTail() 获取日志显示尾部行数
 * @method void setTail(integer $Tail) 设置日志显示尾部行数
 * @method string getSinceTime() 获取日志起始时间
 * @method void setSinceTime(string $SinceTime) 设置日志起始时间
 */
class DescribeContainerLogRequest extends AbstractModel
{
    /**
     * @var string 容器实例名称
     */
    public $InstanceName;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var integer 日志显示尾部行数
     */
    public $Tail;

    /**
     * @var string 日志起始时间
     */
    public $SinceTime;

    /**
     * @param string $InstanceName 容器实例名称
     * @param string $ContainerName 容器名称
     * @param integer $Tail 日志显示尾部行数
     * @param string $SinceTime 日志起始时间
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Tail",$param) and $param["Tail"] !== null) {
            $this->Tail = $param["Tail"];
        }

        if (array_key_exists("SinceTime",$param) and $param["SinceTime"] !== null) {
            $this->SinceTime = $param["SinceTime"];
        }
    }
}
