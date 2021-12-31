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
 * 节点升级过程中集群当前状态
 *
 * @method integer getPodTotal() 获取pod总数
 * @method void setPodTotal(integer $PodTotal) 设置pod总数
 * @method integer getNotReadyPod() 获取NotReady pod总数
 * @method void setNotReadyPod(integer $NotReadyPod) 设置NotReady pod总数
 */
class InstanceUpgradeClusterStatus extends AbstractModel
{
    /**
     * @var integer pod总数
     */
    public $PodTotal;

    /**
     * @var integer NotReady pod总数
     */
    public $NotReadyPod;

    /**
     * @param integer $PodTotal pod总数
     * @param integer $NotReadyPod NotReady pod总数
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
        if (array_key_exists("PodTotal",$param) and $param["PodTotal"] !== null) {
            $this->PodTotal = $param["PodTotal"];
        }

        if (array_key_exists("NotReadyPod",$param) and $param["NotReadyPod"] !== null) {
            $this->NotReadyPod = $param["NotReadyPod"];
        }
    }
}
