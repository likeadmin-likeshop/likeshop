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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聚合类型
 *
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method array getBucket() 获取数组
 * @method void setBucket(array $Bucket) 设置数组
 */
class AggregationObj extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var array 数组
     */
    public $Bucket;

    /**
     * @param string $Type 类型
     * @param array $Bucket 数组
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = [];
            foreach ($param["Bucket"] as $key => $value){
                $obj = new Bucket();
                $obj->deserialize($value);
                array_push($this->Bucket, $obj);
            }
        }
    }
}
