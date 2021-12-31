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
 * 编辑处理/拼接任务/处理结果
 *
 * @method TaskResultFile getFile() 获取拼接结果文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFile(TaskResultFile $File) 设置拼接结果文件。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaJoiningTaskResult extends AbstractModel
{
    /**
     * @var TaskResultFile 拼接结果文件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $File;

    /**
     * @param TaskResultFile $File 拼接结果文件。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = new TaskResultFile();
            $this->File->deserialize($param["File"]);
        }
    }
}
