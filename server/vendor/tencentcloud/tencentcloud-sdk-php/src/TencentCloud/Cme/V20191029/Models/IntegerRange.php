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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 整型范围
 *
 * @method integer getLowerBound() 获取按整形代表值的下限检索。
 * @method void setLowerBound(integer $LowerBound) 设置按整形代表值的下限检索。
 * @method integer getUpperBound() 获取按整形代表值的上限检索。
 * @method void setUpperBound(integer $UpperBound) 设置按整形代表值的上限检索。
 */
class IntegerRange extends AbstractModel
{
    /**
     * @var integer 按整形代表值的下限检索。
     */
    public $LowerBound;

    /**
     * @var integer 按整形代表值的上限检索。
     */
    public $UpperBound;

    /**
     * @param integer $LowerBound 按整形代表值的下限检索。
     * @param integer $UpperBound 按整形代表值的上限检索。
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
        if (array_key_exists("LowerBound",$param) and $param["LowerBound"] !== null) {
            $this->LowerBound = $param["LowerBound"];
        }

        if (array_key_exists("UpperBound",$param) and $param["UpperBound"] !== null) {
            $this->UpperBound = $param["UpperBound"];
        }
    }
}
