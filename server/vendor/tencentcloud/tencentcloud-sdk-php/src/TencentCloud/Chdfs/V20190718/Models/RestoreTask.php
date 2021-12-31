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
namespace TencentCloud\Chdfs\V20190718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回热任务
 *
 * @method integer getRestoreTaskId() 获取回热任务ID
 * @method void setRestoreTaskId(integer $RestoreTaskId) 设置回热任务ID
 * @method string getFilePath() 获取回热任务文件路径
 * @method void setFilePath(string $FilePath) 设置回热任务文件路径
 * @method integer getType() 获取回热任务类型（1：标准；2：极速；3：批量）
 * @method void setType(integer $Type) 设置回热任务类型（1：标准；2：极速；3：批量）
 * @method integer getDays() 获取指定恢复出的临时副本的有效时长（单位天）
 * @method void setDays(integer $Days) 设置指定恢复出的临时副本的有效时长（单位天）
 * @method integer getStatus() 获取回热任务状态（1：绑定文件中；2：绑定文件完成；3：文件回热中；4：文件回热完成）
 * @method void setStatus(integer $Status) 设置回热任务状态（1：绑定文件中；2：绑定文件完成；3：文件回热中；4：文件回热完成）
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class RestoreTask extends AbstractModel
{
    /**
     * @var integer 回热任务ID
     */
    public $RestoreTaskId;

    /**
     * @var string 回热任务文件路径
     */
    public $FilePath;

    /**
     * @var integer 回热任务类型（1：标准；2：极速；3：批量）
     */
    public $Type;

    /**
     * @var integer 指定恢复出的临时副本的有效时长（单位天）
     */
    public $Days;

    /**
     * @var integer 回热任务状态（1：绑定文件中；2：绑定文件完成；3：文件回热中；4：文件回热完成）
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param integer $RestoreTaskId 回热任务ID
     * @param string $FilePath 回热任务文件路径
     * @param integer $Type 回热任务类型（1：标准；2：极速；3：批量）
     * @param integer $Days 指定恢复出的临时副本的有效时长（单位天）
     * @param integer $Status 回热任务状态（1：绑定文件中；2：绑定文件完成；3：文件回热中；4：文件回热完成）
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("RestoreTaskId",$param) and $param["RestoreTaskId"] !== null) {
            $this->RestoreTaskId = $param["RestoreTaskId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
