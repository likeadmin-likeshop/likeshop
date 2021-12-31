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
 * UpgradeClusterInstances请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getOperation() 获取create 表示开始一次升级任务
pause 表示停止任务
resume表示继续任务
abort表示终止任务
 * @method void setOperation(string $Operation) 设置create 表示开始一次升级任务
pause 表示停止任务
resume表示继续任务
abort表示终止任务
 * @method string getUpgradeType() 获取升级类型，只有Operation是create需要设置
reset 大版本重装升级
hot 小版本热升级
major 大版本原地升级
 * @method void setUpgradeType(string $UpgradeType) 设置升级类型，只有Operation是create需要设置
reset 大版本重装升级
hot 小版本热升级
major 大版本原地升级
 * @method array getInstanceIds() 获取需要升级的节点列表
 * @method void setInstanceIds(array $InstanceIds) 设置需要升级的节点列表
 * @method UpgradeNodeResetParam getResetParam() 获取当节点重新加入集群时候所使用的参数，参考添加已有节点接口
 * @method void setResetParam(UpgradeNodeResetParam $ResetParam) 设置当节点重新加入集群时候所使用的参数，参考添加已有节点接口
 * @method boolean getSkipPreCheck() 获取是否忽略节点升级前检查
 * @method void setSkipPreCheck(boolean $SkipPreCheck) 设置是否忽略节点升级前检查
 * @method float getMaxNotReadyPercent() 获取最大可容忍的不可用Pod比例
 * @method void setMaxNotReadyPercent(float $MaxNotReadyPercent) 设置最大可容忍的不可用Pod比例
 */
class UpgradeClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string create 表示开始一次升级任务
pause 表示停止任务
resume表示继续任务
abort表示终止任务
     */
    public $Operation;

    /**
     * @var string 升级类型，只有Operation是create需要设置
reset 大版本重装升级
hot 小版本热升级
major 大版本原地升级
     */
    public $UpgradeType;

    /**
     * @var array 需要升级的节点列表
     */
    public $InstanceIds;

    /**
     * @var UpgradeNodeResetParam 当节点重新加入集群时候所使用的参数，参考添加已有节点接口
     */
    public $ResetParam;

    /**
     * @var boolean 是否忽略节点升级前检查
     */
    public $SkipPreCheck;

    /**
     * @var float 最大可容忍的不可用Pod比例
     */
    public $MaxNotReadyPercent;

    /**
     * @param string $ClusterId 集群ID
     * @param string $Operation create 表示开始一次升级任务
pause 表示停止任务
resume表示继续任务
abort表示终止任务
     * @param string $UpgradeType 升级类型，只有Operation是create需要设置
reset 大版本重装升级
hot 小版本热升级
major 大版本原地升级
     * @param array $InstanceIds 需要升级的节点列表
     * @param UpgradeNodeResetParam $ResetParam 当节点重新加入集群时候所使用的参数，参考添加已有节点接口
     * @param boolean $SkipPreCheck 是否忽略节点升级前检查
     * @param float $MaxNotReadyPercent 最大可容忍的不可用Pod比例
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ResetParam",$param) and $param["ResetParam"] !== null) {
            $this->ResetParam = new UpgradeNodeResetParam();
            $this->ResetParam->deserialize($param["ResetParam"]);
        }

        if (array_key_exists("SkipPreCheck",$param) and $param["SkipPreCheck"] !== null) {
            $this->SkipPreCheck = $param["SkipPreCheck"];
        }

        if (array_key_exists("MaxNotReadyPercent",$param) and $param["MaxNotReadyPercent"] !== null) {
            $this->MaxNotReadyPercent = $param["MaxNotReadyPercent"];
        }
    }
}
