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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流程作业资源描述
 *
 * @method integer getMasterCount() 获取主节点数量。
 * @method void setMasterCount(integer $MasterCount) 设置主节点数量。
 * @method JobFlowResource getMasterResourceSpec() 获取主节点配置。
 * @method void setMasterResourceSpec(JobFlowResource $MasterResourceSpec) 设置主节点配置。
 * @method integer getCoreCount() 获取Core节点数量
 * @method void setCoreCount(integer $CoreCount) 设置Core节点数量
 * @method JobFlowResource getCoreResourceSpec() 获取Core节点配置。
 * @method void setCoreResourceSpec(JobFlowResource $CoreResourceSpec) 设置Core节点配置。
 * @method integer getTaskCount() 获取Task节点数量。
 * @method void setTaskCount(integer $TaskCount) 设置Task节点数量。
 * @method integer getCommonCount() 获取Common节点数量。
 * @method void setCommonCount(integer $CommonCount) 设置Common节点数量。
 * @method JobFlowResource getTaskResourceSpec() 获取Task节点配置。
 * @method void setTaskResourceSpec(JobFlowResource $TaskResourceSpec) 设置Task节点配置。
 * @method JobFlowResource getCommonResourceSpec() 获取Common节点配置。
 * @method void setCommonResourceSpec(JobFlowResource $CommonResourceSpec) 设置Common节点配置。
 */
class JobFlowResourceSpec extends AbstractModel
{
    /**
     * @var integer 主节点数量。
     */
    public $MasterCount;

    /**
     * @var JobFlowResource 主节点配置。
     */
    public $MasterResourceSpec;

    /**
     * @var integer Core节点数量
     */
    public $CoreCount;

    /**
     * @var JobFlowResource Core节点配置。
     */
    public $CoreResourceSpec;

    /**
     * @var integer Task节点数量。
     */
    public $TaskCount;

    /**
     * @var integer Common节点数量。
     */
    public $CommonCount;

    /**
     * @var JobFlowResource Task节点配置。
     */
    public $TaskResourceSpec;

    /**
     * @var JobFlowResource Common节点配置。
     */
    public $CommonResourceSpec;

    /**
     * @param integer $MasterCount 主节点数量。
     * @param JobFlowResource $MasterResourceSpec 主节点配置。
     * @param integer $CoreCount Core节点数量
     * @param JobFlowResource $CoreResourceSpec Core节点配置。
     * @param integer $TaskCount Task节点数量。
     * @param integer $CommonCount Common节点数量。
     * @param JobFlowResource $TaskResourceSpec Task节点配置。
     * @param JobFlowResource $CommonResourceSpec Common节点配置。
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
        if (array_key_exists("MasterCount",$param) and $param["MasterCount"] !== null) {
            $this->MasterCount = $param["MasterCount"];
        }

        if (array_key_exists("MasterResourceSpec",$param) and $param["MasterResourceSpec"] !== null) {
            $this->MasterResourceSpec = new JobFlowResource();
            $this->MasterResourceSpec->deserialize($param["MasterResourceSpec"]);
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("CoreResourceSpec",$param) and $param["CoreResourceSpec"] !== null) {
            $this->CoreResourceSpec = new JobFlowResource();
            $this->CoreResourceSpec->deserialize($param["CoreResourceSpec"]);
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("CommonCount",$param) and $param["CommonCount"] !== null) {
            $this->CommonCount = $param["CommonCount"];
        }

        if (array_key_exists("TaskResourceSpec",$param) and $param["TaskResourceSpec"] !== null) {
            $this->TaskResourceSpec = new JobFlowResource();
            $this->TaskResourceSpec->deserialize($param["TaskResourceSpec"]);
        }

        if (array_key_exists("CommonResourceSpec",$param) and $param["CommonResourceSpec"] !== null) {
            $this->CommonResourceSpec = new JobFlowResource();
            $this->CommonResourceSpec->deserialize($param["CommonResourceSpec"]);
        }
    }
}
