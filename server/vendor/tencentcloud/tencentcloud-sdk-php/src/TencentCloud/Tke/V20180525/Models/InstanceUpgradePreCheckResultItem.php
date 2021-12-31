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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点升级检查项结果
 *
 * @method string getNamespace() 获取工作负载的命名空间
 * @method void setNamespace(string $Namespace) 设置工作负载的命名空间
 * @method string getWorkLoadKind() 获取工作负载类型
 * @method void setWorkLoadKind(string $WorkLoadKind) 设置工作负载类型
 * @method string getWorkLoadName() 获取工作负载名称
 * @method void setWorkLoadName(string $WorkLoadName) 设置工作负载名称
 * @method integer getBefore() 获取驱逐节点前工作负载running的pod数目
 * @method void setBefore(integer $Before) 设置驱逐节点前工作负载running的pod数目
 * @method integer getAfter() 获取驱逐节点后工作负载running的pod数目
 * @method void setAfter(integer $After) 设置驱逐节点后工作负载running的pod数目
 * @method array getPods() 获取工作负载在本节点上的pod列表
 * @method void setPods(array $Pods) 设置工作负载在本节点上的pod列表
 */
class InstanceUpgradePreCheckResultItem extends AbstractModel
{
    /**
     * @var string 工作负载的命名空间
     */
    public $Namespace;

    /**
     * @var string 工作负载类型
     */
    public $WorkLoadKind;

    /**
     * @var string 工作负载名称
     */
    public $WorkLoadName;

    /**
     * @var integer 驱逐节点前工作负载running的pod数目
     */
    public $Before;

    /**
     * @var integer 驱逐节点后工作负载running的pod数目
     */
    public $After;

    /**
     * @var array 工作负载在本节点上的pod列表
     */
    public $Pods;

    /**
     * @param string $Namespace 工作负载的命名空间
     * @param string $WorkLoadKind 工作负载类型
     * @param string $WorkLoadName 工作负载名称
     * @param integer $Before 驱逐节点前工作负载running的pod数目
     * @param integer $After 驱逐节点后工作负载running的pod数目
     * @param array $Pods 工作负载在本节点上的pod列表
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("WorkLoadKind",$param) and $param["WorkLoadKind"] !== null) {
            $this->WorkLoadKind = $param["WorkLoadKind"];
        }

        if (array_key_exists("WorkLoadName",$param) and $param["WorkLoadName"] !== null) {
            $this->WorkLoadName = $param["WorkLoadName"];
        }

        if (array_key_exists("Before",$param) and $param["Before"] !== null) {
            $this->Before = $param["Before"];
        }

        if (array_key_exists("After",$param) and $param["After"] !== null) {
            $this->After = $param["After"];
        }

        if (array_key_exists("Pods",$param) and $param["Pods"] !== null) {
            $this->Pods = $param["Pods"];
        }
    }
}
