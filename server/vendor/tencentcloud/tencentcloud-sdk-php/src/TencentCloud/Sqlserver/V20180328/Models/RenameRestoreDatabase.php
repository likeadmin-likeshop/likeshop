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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于RestoreInstance，RollbackInstance，CreateMigration、CloneDB 等接口；对恢复的库进行重命名，且支持选择要恢复的库。
 *
 * @method string getOldName() 获取库的名字，如果oldName不存在则返回失败。
在用于离线迁移任务时可不填。
 * @method void setOldName(string $OldName) 设置库的名字，如果oldName不存在则返回失败。
在用于离线迁移任务时可不填。
 * @method string getNewName() 获取库的新名字，在用于离线迁移时，不填则按照OldName命名，OldName和NewName不能同时不填。在用于克隆数据库时，OldName和NewName都必须填写，且不能重复
 * @method void setNewName(string $NewName) 设置库的新名字，在用于离线迁移时，不填则按照OldName命名，OldName和NewName不能同时不填。在用于克隆数据库时，OldName和NewName都必须填写，且不能重复
 */
class RenameRestoreDatabase extends AbstractModel
{
    /**
     * @var string 库的名字，如果oldName不存在则返回失败。
在用于离线迁移任务时可不填。
     */
    public $OldName;

    /**
     * @var string 库的新名字，在用于离线迁移时，不填则按照OldName命名，OldName和NewName不能同时不填。在用于克隆数据库时，OldName和NewName都必须填写，且不能重复
     */
    public $NewName;

    /**
     * @param string $OldName 库的名字，如果oldName不存在则返回失败。
在用于离线迁移任务时可不填。
     * @param string $NewName 库的新名字，在用于离线迁移时，不填则按照OldName命名，OldName和NewName不能同时不填。在用于克隆数据库时，OldName和NewName都必须填写，且不能重复
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
        if (array_key_exists("OldName",$param) and $param["OldName"] !== null) {
            $this->OldName = $param["OldName"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }
    }
}
