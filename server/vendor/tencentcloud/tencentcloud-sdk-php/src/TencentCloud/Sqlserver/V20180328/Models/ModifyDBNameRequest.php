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
 * ModifyDBName请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getOldDBName() 获取旧数据库名
 * @method void setOldDBName(string $OldDBName) 设置旧数据库名
 * @method string getNewDBName() 获取新数据库名
 * @method void setNewDBName(string $NewDBName) 设置新数据库名
 */
class ModifyDBNameRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 旧数据库名
     */
    public $OldDBName;

    /**
     * @var string 新数据库名
     */
    public $NewDBName;

    /**
     * @param string $InstanceId 实例ID
     * @param string $OldDBName 旧数据库名
     * @param string $NewDBName 新数据库名
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OldDBName",$param) and $param["OldDBName"] !== null) {
            $this->OldDBName = $param["OldDBName"];
        }

        if (array_key_exists("NewDBName",$param) and $param["NewDBName"] !== null) {
            $this->NewDBName = $param["NewDBName"];
        }
    }
}
