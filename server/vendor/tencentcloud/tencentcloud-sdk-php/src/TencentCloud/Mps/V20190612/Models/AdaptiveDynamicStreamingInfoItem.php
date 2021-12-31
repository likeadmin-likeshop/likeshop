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
 * 转自适应码流信息
 *
 * @method integer getDefinition() 获取转自适应码流规格。
 * @method void setDefinition(integer $Definition) 设置转自适应码流规格。
 * @method string getPackage() 获取打包格式，可能为 HLS和 MPEG-DASH 两种。
 * @method void setPackage(string $Package) 设置打包格式，可能为 HLS和 MPEG-DASH 两种。
 * @method string getPath() 获取播放路径。
 * @method void setPath(string $Path) 设置播放路径。
 * @method TaskOutputStorage getStorage() 获取自适应码流文件的存储位置。
 * @method void setStorage(TaskOutputStorage $Storage) 设置自适应码流文件的存储位置。
 */
class AdaptiveDynamicStreamingInfoItem extends AbstractModel
{
    /**
     * @var integer 转自适应码流规格。
     */
    public $Definition;

    /**
     * @var string 打包格式，可能为 HLS和 MPEG-DASH 两种。
     */
    public $Package;

    /**
     * @var string 播放路径。
     */
    public $Path;

    /**
     * @var TaskOutputStorage 自适应码流文件的存储位置。
     */
    public $Storage;

    /**
     * @param integer $Definition 转自适应码流规格。
     * @param string $Package 打包格式，可能为 HLS和 MPEG-DASH 两种。
     * @param string $Path 播放路径。
     * @param TaskOutputStorage $Storage 自适应码流文件的存储位置。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new TaskOutputStorage();
            $this->Storage->deserialize($param["Storage"]);
        }
    }
}
