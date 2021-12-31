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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频处理 COS 对象信息。
 *
 * @method string getBucket() 获取视频处理对象文件所在的 COS Bucket 名，如 TopRankVideo-125xxx88。
 * @method void setBucket(string $Bucket) 设置视频处理对象文件所在的 COS Bucket 名，如 TopRankVideo-125xxx88。
 * @method string getRegion() 获取视频处理对象文件所在的 COS Bucket 所属园区，如 ap-chongqing。
 * @method void setRegion(string $Region) 设置视频处理对象文件所在的 COS Bucket 所属园区，如 ap-chongqing。
 * @method string getObject() 获取视频处理对象文件的输入路径，如`/movie/201907/WildAnimal.mov`。
 * @method void setObject(string $Object) 设置视频处理对象文件的输入路径，如`/movie/201907/WildAnimal.mov`。
 */
class CosInputInfo extends AbstractModel
{
    /**
     * @var string 视频处理对象文件所在的 COS Bucket 名，如 TopRankVideo-125xxx88。
     */
    public $Bucket;

    /**
     * @var string 视频处理对象文件所在的 COS Bucket 所属园区，如 ap-chongqing。
     */
    public $Region;

    /**
     * @var string 视频处理对象文件的输入路径，如`/movie/201907/WildAnimal.mov`。
     */
    public $Object;

    /**
     * @param string $Bucket 视频处理对象文件所在的 COS Bucket 名，如 TopRankVideo-125xxx88。
     * @param string $Region 视频处理对象文件所在的 COS Bucket 所属园区，如 ap-chongqing。
     * @param string $Object 视频处理对象文件的输入路径，如`/movie/201907/WildAnimal.mov`。
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

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }
    }
}
