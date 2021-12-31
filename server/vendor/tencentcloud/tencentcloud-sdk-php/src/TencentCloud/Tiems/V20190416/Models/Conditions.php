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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 状态
 *
 * @method string getReason() 获取原因
 * @method void setReason(string $Reason) 设置原因
 * @method integer getCount() 获取具有相同原因的副本个数
 * @method void setCount(integer $Count) 设置具有相同原因的副本个数
 */
class Conditions extends AbstractModel
{
    /**
     * @var string 原因
     */
    public $Reason;

    /**
     * @var integer 具有相同原因的副本个数
     */
    public $Count;

    /**
     * @param string $Reason 原因
     * @param integer $Count 具有相同原因的副本个数
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
        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
