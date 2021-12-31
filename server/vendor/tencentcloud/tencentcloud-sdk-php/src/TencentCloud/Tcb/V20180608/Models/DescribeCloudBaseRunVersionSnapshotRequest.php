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
 * DescribeCloudBaseRunVersionSnapshot请求参数结构体
 *
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getVersionName() 获取版本名
 * @method void setVersionName(string $VersionName) 设置版本名
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getSnapshotName() 获取版本历史名
 * @method void setSnapshotName(string $SnapshotName) 设置版本历史名
 * @method integer getOffset() 获取偏移量。默认0
 * @method void setOffset(integer $Offset) 设置偏移量。默认0
 * @method integer getLimit() 获取限制大小。默认10，最大20
 * @method void setLimit(integer $Limit) 设置限制大小。默认10，最大20
 */
class DescribeCloudBaseRunVersionSnapshotRequest extends AbstractModel
{
    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 版本名
     */
    public $VersionName;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 版本历史名
     */
    public $SnapshotName;

    /**
     * @var integer 偏移量。默认0
     */
    public $Offset;

    /**
     * @var integer 限制大小。默认10，最大20
     */
    public $Limit;

    /**
     * @param string $ServerName 服务名
     * @param string $VersionName 版本名
     * @param string $EnvId 环境id
     * @param string $SnapshotName 版本历史名
     * @param integer $Offset 偏移量。默认0
     * @param integer $Limit 限制大小。默认10，最大20
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
        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
