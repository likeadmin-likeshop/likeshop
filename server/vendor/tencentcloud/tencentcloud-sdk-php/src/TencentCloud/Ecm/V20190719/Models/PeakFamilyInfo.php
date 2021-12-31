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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PeakFamilyInfo 按机型类别分类的cpu等数据的峰值信息
 *
 * @method InstanceFamilyTypeConfig getInstanceFamily() 获取机型类别信息。
 * @method void setInstanceFamily(InstanceFamilyTypeConfig $InstanceFamily) 设置机型类别信息。
 * @method array getPeakBaseSet() 获取基础数据峰值信息。
 * @method void setPeakBaseSet(array $PeakBaseSet) 设置基础数据峰值信息。
 */
class PeakFamilyInfo extends AbstractModel
{
    /**
     * @var InstanceFamilyTypeConfig 机型类别信息。
     */
    public $InstanceFamily;

    /**
     * @var array 基础数据峰值信息。
     */
    public $PeakBaseSet;

    /**
     * @param InstanceFamilyTypeConfig $InstanceFamily 机型类别信息。
     * @param array $PeakBaseSet 基础数据峰值信息。
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
        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = new InstanceFamilyTypeConfig();
            $this->InstanceFamily->deserialize($param["InstanceFamily"]);
        }

        if (array_key_exists("PeakBaseSet",$param) and $param["PeakBaseSet"] !== null) {
            $this->PeakBaseSet = [];
            foreach ($param["PeakBaseSet"] as $key => $value){
                $obj = new PeakBase();
                $obj->deserialize($value);
                array_push($this->PeakBaseSet, $obj);
            }
        }
    }
}
