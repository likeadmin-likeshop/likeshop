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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计算节点统计指标
 *
 * @method integer getSubmittedCount() 获取已经完成提交的计算节点数量
 * @method void setSubmittedCount(integer $SubmittedCount) 设置已经完成提交的计算节点数量
 * @method integer getCreatingCount() 获取创建中的计算节点数量
 * @method void setCreatingCount(integer $CreatingCount) 设置创建中的计算节点数量
 * @method integer getCreationFailedCount() 获取创建失败的计算节点数量
 * @method void setCreationFailedCount(integer $CreationFailedCount) 设置创建失败的计算节点数量
 * @method integer getCreatedCount() 获取完成创建的计算节点数量
 * @method void setCreatedCount(integer $CreatedCount) 设置完成创建的计算节点数量
 * @method integer getRunningCount() 获取运行中的计算节点数量
 * @method void setRunningCount(integer $RunningCount) 设置运行中的计算节点数量
 * @method integer getDeletingCount() 获取销毁中的计算节点数量
 * @method void setDeletingCount(integer $DeletingCount) 设置销毁中的计算节点数量
 * @method integer getAbnormalCount() 获取异常的计算节点数量
 * @method void setAbnormalCount(integer $AbnormalCount) 设置异常的计算节点数量
 */
class ComputeNodeMetrics extends AbstractModel
{
    /**
     * @var integer 已经完成提交的计算节点数量
     */
    public $SubmittedCount;

    /**
     * @var integer 创建中的计算节点数量
     */
    public $CreatingCount;

    /**
     * @var integer 创建失败的计算节点数量
     */
    public $CreationFailedCount;

    /**
     * @var integer 完成创建的计算节点数量
     */
    public $CreatedCount;

    /**
     * @var integer 运行中的计算节点数量
     */
    public $RunningCount;

    /**
     * @var integer 销毁中的计算节点数量
     */
    public $DeletingCount;

    /**
     * @var integer 异常的计算节点数量
     */
    public $AbnormalCount;

    /**
     * @param integer $SubmittedCount 已经完成提交的计算节点数量
     * @param integer $CreatingCount 创建中的计算节点数量
     * @param integer $CreationFailedCount 创建失败的计算节点数量
     * @param integer $CreatedCount 完成创建的计算节点数量
     * @param integer $RunningCount 运行中的计算节点数量
     * @param integer $DeletingCount 销毁中的计算节点数量
     * @param integer $AbnormalCount 异常的计算节点数量
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
        if (array_key_exists("SubmittedCount",$param) and $param["SubmittedCount"] !== null) {
            $this->SubmittedCount = $param["SubmittedCount"];
        }

        if (array_key_exists("CreatingCount",$param) and $param["CreatingCount"] !== null) {
            $this->CreatingCount = $param["CreatingCount"];
        }

        if (array_key_exists("CreationFailedCount",$param) and $param["CreationFailedCount"] !== null) {
            $this->CreationFailedCount = $param["CreationFailedCount"];
        }

        if (array_key_exists("CreatedCount",$param) and $param["CreatedCount"] !== null) {
            $this->CreatedCount = $param["CreatedCount"];
        }

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("DeletingCount",$param) and $param["DeletingCount"] !== null) {
            $this->DeletingCount = $param["DeletingCount"];
        }

        if (array_key_exists("AbnormalCount",$param) and $param["AbnormalCount"] !== null) {
            $this->AbnormalCount = $param["AbnormalCount"];
        }
    }
}
