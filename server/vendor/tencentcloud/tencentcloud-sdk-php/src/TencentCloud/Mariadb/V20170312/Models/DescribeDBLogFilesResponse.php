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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBLogFiles返回参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如：tdsql-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：tdsql-ow728lmc。
 * @method integer getType() 获取请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
 * @method void setType(integer $Type) 设置请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
 * @method integer getTotal() 获取请求日志总数
 * @method void setTotal(integer $Total) 设置请求日志总数
 * @method array getFiles() 获取包含uri、length、mtime（修改时间）等信息
 * @method void setFiles(array $Files) 设置包含uri、length、mtime（修改时间）等信息
 * @method string getVpcPrefix() 获取如果是VPC网络的实例，做用本前缀加上URI为下载地址
 * @method void setVpcPrefix(string $VpcPrefix) 设置如果是VPC网络的实例，做用本前缀加上URI为下载地址
 * @method string getNormalPrefix() 获取如果是普通网络的实例，做用本前缀加上URI为下载地址
 * @method void setNormalPrefix(string $NormalPrefix) 设置如果是普通网络的实例，做用本前缀加上URI为下载地址
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBLogFilesResponse extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：tdsql-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var integer 请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
     */
    public $Type;

    /**
     * @var integer 请求日志总数
     */
    public $Total;

    /**
     * @var array 包含uri、length、mtime（修改时间）等信息
     */
    public $Files;

    /**
     * @var string 如果是VPC网络的实例，做用本前缀加上URI为下载地址
     */
    public $VpcPrefix;

    /**
     * @var string 如果是普通网络的实例，做用本前缀加上URI为下载地址
     */
    public $NormalPrefix;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例 ID，形如：tdsql-ow728lmc。
     * @param integer $Type 请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
     * @param integer $Total 请求日志总数
     * @param array $Files 包含uri、length、mtime（修改时间）等信息
     * @param string $VpcPrefix 如果是VPC网络的实例，做用本前缀加上URI为下载地址
     * @param string $NormalPrefix 如果是普通网络的实例，做用本前缀加上URI为下载地址
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = [];
            foreach ($param["Files"] as $key => $value){
                $obj = new LogFileInfo();
                $obj->deserialize($value);
                array_push($this->Files, $obj);
            }
        }

        if (array_key_exists("VpcPrefix",$param) and $param["VpcPrefix"] !== null) {
            $this->VpcPrefix = $param["VpcPrefix"];
        }

        if (array_key_exists("NormalPrefix",$param) and $param["NormalPrefix"] !== null) {
            $this->NormalPrefix = $param["NormalPrefix"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
