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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一条预授权规则
 *
 * @method string getPsaId() 获取规则ID
 * @method void setPsaId(string $PsaId) 设置规则ID
 * @method string getPsaName() 获取规则别名
 * @method void setPsaName(string $PsaName) 设置规则别名
 * @method integer getTagCount() 获取关联标签数量
 * @method void setTagCount(integer $TagCount) 设置关联标签数量
 * @method integer getInstanceCount() 获取关联实例数量
 * @method void setInstanceCount(integer $InstanceCount) 设置关联实例数量
 * @method integer getRepairCount() 获取故障实例数量
 * @method void setRepairCount(integer $RepairCount) 设置故障实例数量
 * @method integer getRepairLimit() 获取故障实例上限
 * @method void setRepairLimit(integer $RepairLimit) 设置故障实例上限
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getPsaDescription() 获取规则备注
 * @method void setPsaDescription(string $PsaDescription) 设置规则备注
 * @method array getTags() 获取关联标签
 * @method void setTags(array $Tags) 设置关联标签
 * @method array getTaskTypeIds() 获取关联故障类型id
 * @method void setTaskTypeIds(array $TaskTypeIds) 设置关联故障类型id
 */
class PsaRegulation extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $PsaId;

    /**
     * @var string 规则别名
     */
    public $PsaName;

    /**
     * @var integer 关联标签数量
     */
    public $TagCount;

    /**
     * @var integer 关联实例数量
     */
    public $InstanceCount;

    /**
     * @var integer 故障实例数量
     */
    public $RepairCount;

    /**
     * @var integer 故障实例上限
     */
    public $RepairLimit;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 规则备注
     */
    public $PsaDescription;

    /**
     * @var array 关联标签
     */
    public $Tags;

    /**
     * @var array 关联故障类型id
     */
    public $TaskTypeIds;

    /**
     * @param string $PsaId 规则ID
     * @param string $PsaName 规则别名
     * @param integer $TagCount 关联标签数量
     * @param integer $InstanceCount 关联实例数量
     * @param integer $RepairCount 故障实例数量
     * @param integer $RepairLimit 故障实例上限
     * @param string $CreateTime 创建时间
     * @param string $PsaDescription 规则备注
     * @param array $Tags 关联标签
     * @param array $TaskTypeIds 关联故障类型id
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
        if (array_key_exists("PsaId",$param) and $param["PsaId"] !== null) {
            $this->PsaId = $param["PsaId"];
        }

        if (array_key_exists("PsaName",$param) and $param["PsaName"] !== null) {
            $this->PsaName = $param["PsaName"];
        }

        if (array_key_exists("TagCount",$param) and $param["TagCount"] !== null) {
            $this->TagCount = $param["TagCount"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("RepairCount",$param) and $param["RepairCount"] !== null) {
            $this->RepairCount = $param["RepairCount"];
        }

        if (array_key_exists("RepairLimit",$param) and $param["RepairLimit"] !== null) {
            $this->RepairLimit = $param["RepairLimit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PsaDescription",$param) and $param["PsaDescription"] !== null) {
            $this->PsaDescription = $param["PsaDescription"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TaskTypeIds",$param) and $param["TaskTypeIds"] !== null) {
            $this->TaskTypeIds = $param["TaskTypeIds"];
        }
    }
}
