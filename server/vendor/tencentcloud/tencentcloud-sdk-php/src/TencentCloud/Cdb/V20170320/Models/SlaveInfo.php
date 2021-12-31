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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备机信息
 *
 * @method SlaveInstanceInfo getFirst() 获取第一备机信息
 * @method void setFirst(SlaveInstanceInfo $First) 设置第一备机信息
 * @method SlaveInstanceInfo getSecond() 获取第二备机信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecond(SlaveInstanceInfo $Second) 设置第二备机信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class SlaveInfo extends AbstractModel
{
    /**
     * @var SlaveInstanceInfo 第一备机信息
     */
    public $First;

    /**
     * @var SlaveInstanceInfo 第二备机信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Second;

    /**
     * @param SlaveInstanceInfo $First 第一备机信息
     * @param SlaveInstanceInfo $Second 第二备机信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("First",$param) and $param["First"] !== null) {
            $this->First = new SlaveInstanceInfo();
            $this->First->deserialize($param["First"]);
        }

        if (array_key_exists("Second",$param) and $param["Second"] !== null) {
            $this->Second = new SlaveInstanceInfo();
            $this->Second->deserialize($param["Second"]);
        }
    }
}
