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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端用户平台统计信息
 *
 * @method string getPlatform() 获取终端用户从属平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlatform(string $Platform) 设置终端用户从属平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取平台终端用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置平台终端用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class PlatformStatistic extends AbstractModel
{
    /**
     * @var string 终端用户从属平台
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Platform;

    /**
     * @var integer 平台终端用户数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $Platform 终端用户从属平台
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 平台终端用户数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
