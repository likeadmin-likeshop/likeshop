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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频处理输出文件信息参数。
 *
 * @method string getRegion() 获取输出文件 Bucket 所属地域，如 ap-guangzhou  。
 * @method void setRegion(string $Region) 设置输出文件 Bucket 所属地域，如 ap-guangzhou  。
 * @method string getBucket() 获取输出文件 Bucket 。
 * @method void setBucket(string $Bucket) 设置输出文件 Bucket 。
 * @method string getDir() 获取输出文件目录，目录名必须以 "/" 结尾。
 * @method void setDir(string $Dir) 设置输出文件目录，目录名必须以 "/" 结尾。
 */
class MediaOutputInfo extends AbstractModel
{
    /**
     * @var string 输出文件 Bucket 所属地域，如 ap-guangzhou  。
     */
    public $Region;

    /**
     * @var string 输出文件 Bucket 。
     */
    public $Bucket;

    /**
     * @var string 输出文件目录，目录名必须以 "/" 结尾。
     */
    public $Dir;

    /**
     * @param string $Region 输出文件 Bucket 所属地域，如 ap-guangzhou  。
     * @param string $Bucket 输出文件 Bucket 。
     * @param string $Dir 输出文件目录，目录名必须以 "/" 结尾。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }
    }
}
