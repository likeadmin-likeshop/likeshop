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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBBackups请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method integer getBackupMethod() 获取备份方式，当前支持：0-逻辑备份，1-物理备份，2-所有备份。默认为逻辑备份。
 * @method void setBackupMethod(integer $BackupMethod) 设置备份方式，当前支持：0-逻辑备份，1-物理备份，2-所有备份。默认为逻辑备份。
 * @method integer getLimit() 获取分页大小，最大值为100，不设置默认查询所有。
 * @method void setLimit(integer $Limit) 设置分页大小，最大值为100，不设置默认查询所有。
 * @method integer getOffset() 获取分页偏移量，最小值为0，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，最小值为0，默认值为0。
 */
class DescribeDBBackupsRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     */
    public $InstanceId;

    /**
     * @var integer 备份方式，当前支持：0-逻辑备份，1-物理备份，2-所有备份。默认为逻辑备份。
     */
    public $BackupMethod;

    /**
     * @var integer 分页大小，最大值为100，不设置默认查询所有。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，最小值为0，默认值为0。
     */
    public $Offset;

    /**
     * @param string $InstanceId 实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     * @param integer $BackupMethod 备份方式，当前支持：0-逻辑备份，1-物理备份，2-所有备份。默认为逻辑备份。
     * @param integer $Limit 分页大小，最大值为100，不设置默认查询所有。
     * @param integer $Offset 分页偏移量，最小值为0，默认值为0。
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
