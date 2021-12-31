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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务视频cos信息
 *
 * @method string getRegion() 获取cos 区域值。例如：ap-beijing。
 * @method void setRegion(string $Region) 设置cos 区域值。例如：ap-beijing。
 * @method string getBucket() 获取cos 存储桶，格式为BuketName-AppId。例如：test-123456。
 * @method void setBucket(string $Bucket) 设置cos 存储桶，格式为BuketName-AppId。例如：test-123456。
 * @method string getPath() 获取cos 路径。 
对于写表示目录，例如：/test； 
对于读表示文件路径，例如：/test/test.mp4。
 * @method void setPath(string $Path) 设置cos 路径。 
对于写表示目录，例如：/test； 
对于读表示文件路径，例如：/test/test.mp4。
 * @method CosAuthMode getCosAuthMode() 获取cos 授权信息，不填默认为公有权限。
 * @method void setCosAuthMode(CosAuthMode $CosAuthMode) 设置cos 授权信息，不填默认为公有权限。
 */
class CosInfo extends AbstractModel
{
    /**
     * @var string cos 区域值。例如：ap-beijing。
     */
    public $Region;

    /**
     * @var string cos 存储桶，格式为BuketName-AppId。例如：test-123456。
     */
    public $Bucket;

    /**
     * @var string cos 路径。 
对于写表示目录，例如：/test； 
对于读表示文件路径，例如：/test/test.mp4。
     */
    public $Path;

    /**
     * @var CosAuthMode cos 授权信息，不填默认为公有权限。
     */
    public $CosAuthMode;

    /**
     * @param string $Region cos 区域值。例如：ap-beijing。
     * @param string $Bucket cos 存储桶，格式为BuketName-AppId。例如：test-123456。
     * @param string $Path cos 路径。 
对于写表示目录，例如：/test； 
对于读表示文件路径，例如：/test/test.mp4。
     * @param CosAuthMode $CosAuthMode cos 授权信息，不填默认为公有权限。
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("CosAuthMode",$param) and $param["CosAuthMode"] !== null) {
            $this->CosAuthMode = new CosAuthMode();
            $this->CosAuthMode->deserialize($param["CosAuthMode"]);
        }
    }
}
