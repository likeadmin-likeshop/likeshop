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
 * COS 发布信息。
 *
 * @method string getBucket() 获取发布生成的对象存储文件所在的 COS Bucket 名，如 TopRankVideo-125xxx88。
 * @method void setBucket(string $Bucket) 设置发布生成的对象存储文件所在的 COS Bucket 名，如 TopRankVideo-125xxx88。
 * @method string getRegion() 获取发布生成的对象存储文件所在的 COS Bucket 所属园区，如 ap-chongqing。
 * @method void setRegion(string $Region) 设置发布生成的对象存储文件所在的 COS Bucket 所属园区，如 ap-chongqing。
 * @method string getVideoKey() 获取发布生成的视频在 COS 存储的对象键。对象键（ObjectKey）是对象（Object）在存储桶（Bucket）中的唯一标识。
 * @method void setVideoKey(string $VideoKey) 设置发布生成的视频在 COS 存储的对象键。对象键（ObjectKey）是对象（Object）在存储桶（Bucket）中的唯一标识。
 * @method string getCoverKey() 获取发布生成的封面在 COS 存储的对象键。
 * @method void setCoverKey(string $CoverKey) 设置发布生成的封面在 COS 存储的对象键。
 */
class CosPublishInputInfo extends AbstractModel
{
    /**
     * @var string 发布生成的对象存储文件所在的 COS Bucket 名，如 TopRankVideo-125xxx88。
     */
    public $Bucket;

    /**
     * @var string 发布生成的对象存储文件所在的 COS Bucket 所属园区，如 ap-chongqing。
     */
    public $Region;

    /**
     * @var string 发布生成的视频在 COS 存储的对象键。对象键（ObjectKey）是对象（Object）在存储桶（Bucket）中的唯一标识。
     */
    public $VideoKey;

    /**
     * @var string 发布生成的封面在 COS 存储的对象键。
     */
    public $CoverKey;

    /**
     * @param string $Bucket 发布生成的对象存储文件所在的 COS Bucket 名，如 TopRankVideo-125xxx88。
     * @param string $Region 发布生成的对象存储文件所在的 COS Bucket 所属园区，如 ap-chongqing。
     * @param string $VideoKey 发布生成的视频在 COS 存储的对象键。对象键（ObjectKey）是对象（Object）在存储桶（Bucket）中的唯一标识。
     * @param string $CoverKey 发布生成的封面在 COS 存储的对象键。
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

        if (array_key_exists("VideoKey",$param) and $param["VideoKey"] !== null) {
            $this->VideoKey = $param["VideoKey"];
        }

        if (array_key_exists("CoverKey",$param) and $param["CoverKey"] !== null) {
            $this->CoverKey = $param["CoverKey"];
        }
    }
}
