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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预热任务详情
 *
 * @method string getTaskId() 获取预热任务 ID
 * @method void setTaskId(string $TaskId) 设置预热任务 ID
 * @method string getUrl() 获取预热 URL
 * @method void setUrl(string $Url) 设置预热 URL
 * @method string getStatus() 获取预热任务状态
fail：预热失败
done：预热成功
process：预热中
 * @method void setStatus(string $Status) 设置预热任务状态
fail：预热失败
done：预热成功
process：预热中
 * @method integer getPercent() 获取预热进度百分比
 * @method void setPercent(integer $Percent) 设置预热进度百分比
 * @method string getCreateTime() 获取预热任务提交时间
 * @method void setCreateTime(string $CreateTime) 设置预热任务提交时间
 * @method string getArea() 获取预热区域
mainland：境内
overseas：境外
global：全球
 * @method void setArea(string $Area) 设置预热区域
mainland：境内
overseas：境外
global：全球
 * @method string getUpdateTime() 获取预热任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置预热任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class PushTask extends AbstractModel
{
    /**
     * @var string 预热任务 ID
     */
    public $TaskId;

    /**
     * @var string 预热 URL
     */
    public $Url;

    /**
     * @var string 预热任务状态
fail：预热失败
done：预热成功
process：预热中
     */
    public $Status;

    /**
     * @var integer 预热进度百分比
     */
    public $Percent;

    /**
     * @var string 预热任务提交时间
     */
    public $CreateTime;

    /**
     * @var string 预热区域
mainland：境内
overseas：境外
global：全球
     */
    public $Area;

    /**
     * @var string 预热任务更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $TaskId 预热任务 ID
     * @param string $Url 预热 URL
     * @param string $Status 预热任务状态
fail：预热失败
done：预热成功
process：预热中
     * @param integer $Percent 预热进度百分比
     * @param string $CreateTime 预热任务提交时间
     * @param string $Area 预热区域
mainland：境内
overseas：境外
global：全球
     * @param string $UpdateTime 预热任务更新时间
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
