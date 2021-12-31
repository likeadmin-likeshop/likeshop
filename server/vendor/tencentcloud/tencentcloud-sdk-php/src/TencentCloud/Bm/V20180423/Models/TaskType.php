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
 * 故障id对应故障名列表
 *
 * @method integer getTypeId() 获取故障类ID
 * @method void setTypeId(integer $TypeId) 设置故障类ID
 * @method string getTypeName() 获取故障类中文名
 * @method void setTypeName(string $TypeName) 设置故障类中文名
 * @method string getTaskSubType() 获取故障类型父类
 * @method void setTaskSubType(string $TaskSubType) 设置故障类型父类
 */
class TaskType extends AbstractModel
{
    /**
     * @var integer 故障类ID
     */
    public $TypeId;

    /**
     * @var string 故障类中文名
     */
    public $TypeName;

    /**
     * @var string 故障类型父类
     */
    public $TaskSubType;

    /**
     * @param integer $TypeId 故障类ID
     * @param string $TypeName 故障类中文名
     * @param string $TaskSubType 故障类型父类
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("TaskSubType",$param) and $param["TaskSubType"] !== null) {
            $this->TaskSubType = $param["TaskSubType"];
        }
    }
}
