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
namespace TencentCloud\Vm\V20200709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoStat请求参数结构体
 *
 * @method integer getAuditType() 获取审核类型 1: 机器审核; 2: 人工审核
 * @method void setAuditType(integer $AuditType) 设置审核类型 1: 机器审核; 2: 人工审核
 * @method array getFilters() 获取查询条件
 * @method void setFilters(array $Filters) 设置查询条件
 */
class DescribeVideoStatRequest extends AbstractModel
{
    /**
     * @var integer 审核类型 1: 机器审核; 2: 人工审核
     */
    public $AuditType;

    /**
     * @var array 查询条件
     */
    public $Filters;

    /**
     * @param integer $AuditType 审核类型 1: 机器审核; 2: 人工审核
     * @param array $Filters 查询条件
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
        if (array_key_exists("AuditType",$param) and $param["AuditType"] !== null) {
            $this->AuditType = $param["AuditType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
