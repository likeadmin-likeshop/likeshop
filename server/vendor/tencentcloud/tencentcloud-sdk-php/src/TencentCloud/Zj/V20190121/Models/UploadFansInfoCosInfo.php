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
 * 接口返回给服务商的COS路径等信息
 *
 * @method string getBucket() 获取COS bucket
 * @method void setBucket(string $Bucket) 设置COS bucket
 * @method string getKey() 获取COS路径
 * @method void setKey(string $Key) 设置COS路径
 * @method string getRegion() 获取COS区域
 * @method void setRegion(string $Region) 设置COS区域
 */
class UploadFansInfoCosInfo extends AbstractModel
{
    /**
     * @var string COS bucket
     */
    public $Bucket;

    /**
     * @var string COS路径
     */
    public $Key;

    /**
     * @var string COS区域
     */
    public $Region;

    /**
     * @param string $Bucket COS bucket
     * @param string $Key COS路径
     * @param string $Region COS区域
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

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
