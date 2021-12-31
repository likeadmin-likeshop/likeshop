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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApply请求参数结构体
 *
 * @method array getApplyStatus() 获取申请单状态
 * @method void setApplyStatus(array $ApplyStatus) 设置申请单状态
 */
class UpdateApplyRequest extends AbstractModel
{
    /**
     * @var array 申请单状态
     */
    public $ApplyStatus;

    /**
     * @param array $ApplyStatus 申请单状态
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
        if (array_key_exists("ApplyStatus",$param) and $param["ApplyStatus"] !== null) {
            $this->ApplyStatus = [];
            foreach ($param["ApplyStatus"] as $key => $value){
                $obj = new ApplyStatus();
                $obj->deserialize($value);
                array_push($this->ApplyStatus, $obj);
            }
        }
    }
}
