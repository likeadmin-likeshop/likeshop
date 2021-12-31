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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsFileSystemSizeLimit请求参数结构体
 *
 * @method integer getFsLimit() 获取文件系统容量限制大小，输入范围0-1073741824, 单位为GB；其中输入值为0时，表示不限制文件系统容量。
 * @method void setFsLimit(integer $FsLimit) 设置文件系统容量限制大小，输入范围0-1073741824, 单位为GB；其中输入值为0时，表示不限制文件系统容量。
 * @method string getFileSystemId() 获取文件系统ID，目前仅支持标准型文件系统。
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID，目前仅支持标准型文件系统。
 */
class UpdateCfsFileSystemSizeLimitRequest extends AbstractModel
{
    /**
     * @var integer 文件系统容量限制大小，输入范围0-1073741824, 单位为GB；其中输入值为0时，表示不限制文件系统容量。
     */
    public $FsLimit;

    /**
     * @var string 文件系统ID，目前仅支持标准型文件系统。
     */
    public $FileSystemId;

    /**
     * @param integer $FsLimit 文件系统容量限制大小，输入范围0-1073741824, 单位为GB；其中输入值为0时，表示不限制文件系统容量。
     * @param string $FileSystemId 文件系统ID，目前仅支持标准型文件系统。
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
        if (array_key_exists("FsLimit",$param) and $param["FsLimit"] !== null) {
            $this->FsLimit = $param["FsLimit"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }
    }
}
