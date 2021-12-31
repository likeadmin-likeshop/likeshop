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
 * DescribeBackupCommand请求参数结构体
 *
 * @method string getBackupFileType() 获取备份文件类型，FULL-全量备份，FULL_LOG-全量备份需要日志增量，FULL_DIFF-全量备份需要差异增量，LOG-日志备份，DIFF-差异备份
 * @method void setBackupFileType(string $BackupFileType) 设置备份文件类型，FULL-全量备份，FULL_LOG-全量备份需要日志增量，FULL_DIFF-全量备份需要差异增量，LOG-日志备份，DIFF-差异备份
 * @method string getDataBaseName() 获取数据库名称
 * @method void setDataBaseName(string $DataBaseName) 设置数据库名称
 * @method string getIsRecovery() 获取是否需要恢复，NO-不需要，YES-需要
 * @method void setIsRecovery(string $IsRecovery) 设置是否需要恢复，NO-不需要，YES-需要
 * @method string getLocalPath() 获取备份文件保存的路径；如果不填则默认在D:\\
 * @method void setLocalPath(string $LocalPath) 设置备份文件保存的路径；如果不填则默认在D:\\
 */
class DescribeBackupCommandRequest extends AbstractModel
{
    /**
     * @var string 备份文件类型，FULL-全量备份，FULL_LOG-全量备份需要日志增量，FULL_DIFF-全量备份需要差异增量，LOG-日志备份，DIFF-差异备份
     */
    public $BackupFileType;

    /**
     * @var string 数据库名称
     */
    public $DataBaseName;

    /**
     * @var string 是否需要恢复，NO-不需要，YES-需要
     */
    public $IsRecovery;

    /**
     * @var string 备份文件保存的路径；如果不填则默认在D:\\
     */
    public $LocalPath;

    /**
     * @param string $BackupFileType 备份文件类型，FULL-全量备份，FULL_LOG-全量备份需要日志增量，FULL_DIFF-全量备份需要差异增量，LOG-日志备份，DIFF-差异备份
     * @param string $DataBaseName 数据库名称
     * @param string $IsRecovery 是否需要恢复，NO-不需要，YES-需要
     * @param string $LocalPath 备份文件保存的路径；如果不填则默认在D:\\
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
        if (array_key_exists("BackupFileType",$param) and $param["BackupFileType"] !== null) {
            $this->BackupFileType = $param["BackupFileType"];
        }

        if (array_key_exists("DataBaseName",$param) and $param["DataBaseName"] !== null) {
            $this->DataBaseName = $param["DataBaseName"];
        }

        if (array_key_exists("IsRecovery",$param) and $param["IsRecovery"] !== null) {
            $this->IsRecovery = $param["IsRecovery"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }
    }
}
