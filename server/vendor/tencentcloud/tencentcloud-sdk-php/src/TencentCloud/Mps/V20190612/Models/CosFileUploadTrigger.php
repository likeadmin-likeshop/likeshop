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
 * 绑定到 COS 的输入规则。
 *
 * @method string getBucket() 获取工作流绑定的 COS Bucket 名，如 TopRankVideo-125xxx88。
 * @method void setBucket(string $Bucket) 设置工作流绑定的 COS Bucket 名，如 TopRankVideo-125xxx88。
 * @method string getRegion() 获取工作流绑定的 COS Bucket 所属园区，如 ap-chongiqng。
 * @method void setRegion(string $Region) 设置工作流绑定的 COS Bucket 所属园区，如 ap-chongiqng。
 * @method string getDir() 获取工作流绑定的输入路径目录，必须为绝对路径，即以 `/` 开头和结尾。如`/movie/201907/`，不填代表根目录`/`。
 * @method void setDir(string $Dir) 设置工作流绑定的输入路径目录，必须为绝对路径，即以 `/` 开头和结尾。如`/movie/201907/`，不填代表根目录`/`。
 * @method array getFormats() 获取工作流允许触发的文件格式列表，如 ["mp4", "flv", "mov"]。不填代表所有格式的文件都可以触发工作流。
 * @method void setFormats(array $Formats) 设置工作流允许触发的文件格式列表，如 ["mp4", "flv", "mov"]。不填代表所有格式的文件都可以触发工作流。
 */
class CosFileUploadTrigger extends AbstractModel
{
    /**
     * @var string 工作流绑定的 COS Bucket 名，如 TopRankVideo-125xxx88。
     */
    public $Bucket;

    /**
     * @var string 工作流绑定的 COS Bucket 所属园区，如 ap-chongiqng。
     */
    public $Region;

    /**
     * @var string 工作流绑定的输入路径目录，必须为绝对路径，即以 `/` 开头和结尾。如`/movie/201907/`，不填代表根目录`/`。
     */
    public $Dir;

    /**
     * @var array 工作流允许触发的文件格式列表，如 ["mp4", "flv", "mov"]。不填代表所有格式的文件都可以触发工作流。
     */
    public $Formats;

    /**
     * @param string $Bucket 工作流绑定的 COS Bucket 名，如 TopRankVideo-125xxx88。
     * @param string $Region 工作流绑定的 COS Bucket 所属园区，如 ap-chongiqng。
     * @param string $Dir 工作流绑定的输入路径目录，必须为绝对路径，即以 `/` 开头和结尾。如`/movie/201907/`，不填代表根目录`/`。
     * @param array $Formats 工作流允许触发的文件格式列表，如 ["mp4", "flv", "mov"]。不填代表所有格式的文件都可以触发工作流。
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

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }

        if (array_key_exists("Formats",$param) and $param["Formats"] !== null) {
            $this->Formats = $param["Formats"];
        }
    }
}
