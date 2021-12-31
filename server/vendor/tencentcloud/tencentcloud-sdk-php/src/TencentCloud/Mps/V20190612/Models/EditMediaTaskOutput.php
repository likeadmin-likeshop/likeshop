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
 * 编辑视频任务的输出
 *
 * @method TaskOutputStorage getOutputStorage() 获取编辑后文件的目标存储。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置编辑后文件的目标存储。
 * @method string getPath() 获取编辑后的视频文件路径。
 * @method void setPath(string $Path) 设置编辑后的视频文件路径。
 */
class EditMediaTaskOutput extends AbstractModel
{
    /**
     * @var TaskOutputStorage 编辑后文件的目标存储。
     */
    public $OutputStorage;

    /**
     * @var string 编辑后的视频文件路径。
     */
    public $Path;

    /**
     * @param TaskOutputStorage $OutputStorage 编辑后文件的目标存储。
     * @param string $Path 编辑后的视频文件路径。
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
        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
