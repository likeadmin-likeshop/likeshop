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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 彩信实例审核状态
 *
 * @method string getOperator() 获取运营商
 * @method void setOperator(string $Operator) 设置运营商
 * @method integer getState() 获取审核状态：0未审核，1审核通过，2审核拒绝
 * @method void setState(integer $State) 设置审核状态：0未审核，1审核通过，2审核拒绝
 */
class MmsInstanceStateInfo extends AbstractModel
{
    /**
     * @var string 运营商
     */
    public $Operator;

    /**
     * @var integer 审核状态：0未审核，1审核通过，2审核拒绝
     */
    public $State;

    /**
     * @param string $Operator 运营商
     * @param integer $State 审核状态：0未审核，1审核通过，2审核拒绝
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
