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
 * CreateBackupDownloadTask请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method string getBackupName() 获取要下载的备份文件名，可通过DescribeDBBackups接口获取
 * @method void setBackupName(string $BackupName) 设置要下载的备份文件名，可通过DescribeDBBackups接口获取
 * @method array getBackupSets() 获取下载备份的分片列表
 * @method void setBackupSets(array $BackupSets) 设置下载备份的分片列表
 */
class CreateBackupDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     */
    public $InstanceId;

    /**
     * @var string 要下载的备份文件名，可通过DescribeDBBackups接口获取
     */
    public $BackupName;

    /**
     * @var array 下载备份的分片列表
     */
    public $BackupSets;

    /**
     * @param string $InstanceId 实例ID，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     * @param string $BackupName 要下载的备份文件名，可通过DescribeDBBackups接口获取
     * @param array $BackupSets 下载备份的分片列表
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

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("BackupSets",$param) and $param["BackupSets"] !== null) {
            $this->BackupSets = [];
            foreach ($param["BackupSets"] as $key => $value){
                $obj = new ReplicaSetInfo();
                $obj->deserialize($value);
                array_push($this->BackupSets, $obj);
            }
        }
    }
}
