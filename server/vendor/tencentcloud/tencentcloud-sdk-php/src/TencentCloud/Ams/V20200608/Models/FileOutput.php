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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cos FileOutput 
 *
 * @method string getBucket() 获取存储的Bucket
 * @method void setBucket(string $Bucket) 设置存储的Bucket
 * @method string getRegion() 获取Cos Region
 * @method void setRegion(string $Region) 设置Cos Region
 * @method string getObjectPrefix() 获取对象前缀
 * @method void setObjectPrefix(string $ObjectPrefix) 设置对象前缀
 */
class FileOutput extends AbstractModel
{
    /**
     * @var string 存储的Bucket
     */
    public $Bucket;

    /**
     * @var string Cos Region
     */
    public $Region;

    /**
     * @var string 对象前缀
     */
    public $ObjectPrefix;

    /**
     * @param string $Bucket 存储的Bucket
     * @param string $Region Cos Region
     * @param string $ObjectPrefix 对象前缀
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ObjectPrefix",$param) and $param["ObjectPrefix"] !== null) {
            $this->ObjectPrefix = $param["ObjectPrefix"];
        }
    }
}
