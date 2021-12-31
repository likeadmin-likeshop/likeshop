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
 * 手动加入的节点
 *
 * @method integer getJoining() 获取加入中的节点数量
 * @method void setJoining(integer $Joining) 设置加入中的节点数量
 * @method integer getInitializing() 获取初始化中的节点数量
 * @method void setInitializing(integer $Initializing) 设置初始化中的节点数量
 * @method integer getNormal() 获取正常的节点数量
 * @method void setNormal(integer $Normal) 设置正常的节点数量
 * @method integer getTotal() 获取节点总数
 * @method void setTotal(integer $Total) 设置节点总数
 */
class ManuallyAdded extends AbstractModel
{
    /**
     * @var integer 加入中的节点数量
     */
    public $Joining;

    /**
     * @var integer 初始化中的节点数量
     */
    public $Initializing;

    /**
     * @var integer 正常的节点数量
     */
    public $Normal;

    /**
     * @var integer 节点总数
     */
    public $Total;

    /**
     * @param integer $Joining 加入中的节点数量
     * @param integer $Initializing 初始化中的节点数量
     * @param integer $Normal 正常的节点数量
     * @param integer $Total 节点总数
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
        if (array_key_exists("Joining",$param) and $param["Joining"] !== null) {
            $this->Joining = $param["Joining"];
        }

        if (array_key_exists("Initializing",$param) and $param["Initializing"] !== null) {
            $this->Initializing = $param["Initializing"];
        }

        if (array_key_exists("Normal",$param) and $param["Normal"] !== null) {
            $this->Normal = $param["Normal"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
