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
 * 磁盘组。
 *
 * @method DiskSpec getSpec() 获取磁盘规格。
 * @method void setSpec(DiskSpec $Spec) 设置磁盘规格。
 * @method integer getCount() 获取同类型磁盘数量。
 * @method void setCount(integer $Count) 设置同类型磁盘数量。
 */
class DiskGroup extends AbstractModel
{
    /**
     * @var DiskSpec 磁盘规格。
     */
    public $Spec;

    /**
     * @var integer 同类型磁盘数量。
     */
    public $Count;

    /**
     * @param DiskSpec $Spec 磁盘规格。
     * @param integer $Count 同类型磁盘数量。
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new DiskSpec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
