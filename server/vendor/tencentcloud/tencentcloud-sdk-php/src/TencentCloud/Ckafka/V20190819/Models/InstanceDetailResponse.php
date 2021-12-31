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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详情返回结果
 *
 * @method integer getTotalCount() 获取符合条件的实例总数
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的实例总数
 * @method array getInstanceList() 获取符合条件的实例详情列表
 * @method void setInstanceList(array $InstanceList) 设置符合条件的实例详情列表
 */
class InstanceDetailResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的实例总数
     */
    public $TotalCount;

    /**
     * @var array 符合条件的实例详情列表
     */
    public $InstanceList;

    /**
     * @param integer $TotalCount 符合条件的实例总数
     * @param array $InstanceList 符合条件的实例详情列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new InstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }
    }
}
