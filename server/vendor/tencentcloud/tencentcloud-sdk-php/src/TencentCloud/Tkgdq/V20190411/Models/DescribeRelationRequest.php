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
namespace TencentCloud\Tkgdq\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelation请求参数结构体
 *
 * @method string getLeftEntityName() 获取输入第一个实体
 * @method void setLeftEntityName(string $LeftEntityName) 设置输入第一个实体
 * @method string getRightEntityName() 获取输入第二个实体
 * @method void setRightEntityName(string $RightEntityName) 设置输入第二个实体
 */
class DescribeRelationRequest extends AbstractModel
{
    /**
     * @var string 输入第一个实体
     */
    public $LeftEntityName;

    /**
     * @var string 输入第二个实体
     */
    public $RightEntityName;

    /**
     * @param string $LeftEntityName 输入第一个实体
     * @param string $RightEntityName 输入第二个实体
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
        if (array_key_exists("LeftEntityName",$param) and $param["LeftEntityName"] !== null) {
            $this->LeftEntityName = $param["LeftEntityName"];
        }

        if (array_key_exists("RightEntityName",$param) and $param["RightEntityName"] !== null) {
            $this->RightEntityName = $param["RightEntityName"];
        }
    }
}
