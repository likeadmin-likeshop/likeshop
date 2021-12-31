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
 * 编辑处理/剪切任务/处理结果
 *
 * @method TaskResultFile getListFile() 获取如果ResultListType不为NoListFile时，结果（TaskResultFile）列表文件的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListFile(TaskResultFile $ListFile) 设置如果ResultListType不为NoListFile时，结果（TaskResultFile）列表文件的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResultCount() 获取结果个数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultCount(integer $ResultCount) 设置结果个数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskResultFile getFirstFile() 获取第一个结果文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstFile(TaskResultFile $FirstFile) 设置第一个结果文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskResultFile getLastFile() 获取最后一个结果文件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastFile(TaskResultFile $LastFile) 设置最后一个结果文件。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaCuttingTaskResult extends AbstractModel
{
    /**
     * @var TaskResultFile 如果ResultListType不为NoListFile时，结果（TaskResultFile）列表文件的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListFile;

    /**
     * @var integer 结果个数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultCount;

    /**
     * @var TaskResultFile 第一个结果文件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstFile;

    /**
     * @var TaskResultFile 最后一个结果文件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastFile;

    /**
     * @param TaskResultFile $ListFile 如果ResultListType不为NoListFile时，结果（TaskResultFile）列表文件的存储位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResultCount 结果个数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskResultFile $FirstFile 第一个结果文件。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskResultFile $LastFile 最后一个结果文件。
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
        if (array_key_exists("ListFile",$param) and $param["ListFile"] !== null) {
            $this->ListFile = new TaskResultFile();
            $this->ListFile->deserialize($param["ListFile"]);
        }

        if (array_key_exists("ResultCount",$param) and $param["ResultCount"] !== null) {
            $this->ResultCount = $param["ResultCount"];
        }

        if (array_key_exists("FirstFile",$param) and $param["FirstFile"] !== null) {
            $this->FirstFile = new TaskResultFile();
            $this->FirstFile->deserialize($param["FirstFile"]);
        }

        if (array_key_exists("LastFile",$param) and $param["LastFile"] !== null) {
            $this->LastFile = new TaskResultFile();
            $this->LastFile->deserialize($param["LastFile"]);
        }
    }
}
