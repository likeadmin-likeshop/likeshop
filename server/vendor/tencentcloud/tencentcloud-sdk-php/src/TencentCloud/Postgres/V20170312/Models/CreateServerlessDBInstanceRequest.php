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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServerlessDBInstance请求参数结构体
 *
 * @method string getZone() 获取可用区ID。公测阶段仅支持ap-shanghai-2、ap-beijing-1,ap-guangzhou-2.
 * @method void setZone(string $Zone) 设置可用区ID。公测阶段仅支持ap-shanghai-2、ap-beijing-1,ap-guangzhou-2.
 * @method string getDBInstanceName() 获取DB实例名称，同一个账号下该值必须唯一。
 * @method void setDBInstanceName(string $DBInstanceName) 设置DB实例名称，同一个账号下该值必须唯一。
 * @method string getDBVersion() 获取PostgreSQL内核版本，目前只支持：10.4。
 * @method void setDBVersion(string $DBVersion) 设置PostgreSQL内核版本，目前只支持：10.4。
 * @method string getDBCharset() 获取PostgreSQL数据库字符集，目前支持UTF8。
 * @method void setDBCharset(string $DBCharset) 设置PostgreSQL数据库字符集，目前支持UTF8。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method string getVpcId() 获取私有网络ID。
 * @method void setVpcId(string $VpcId) 设置私有网络ID。
 * @method string getSubnetId() 获取私有网络子网ID。
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID。
 * @method array getTagList() 获取实例需要绑定的标签数组信息
 * @method void setTagList(array $TagList) 设置实例需要绑定的标签数组信息
 */
class CreateServerlessDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 可用区ID。公测阶段仅支持ap-shanghai-2、ap-beijing-1,ap-guangzhou-2.
     */
    public $Zone;

    /**
     * @var string DB实例名称，同一个账号下该值必须唯一。
     */
    public $DBInstanceName;

    /**
     * @var string PostgreSQL内核版本，目前只支持：10.4。
     */
    public $DBVersion;

    /**
     * @var string PostgreSQL数据库字符集，目前支持UTF8。
     */
    public $DBCharset;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 私有网络ID。
     */
    public $VpcId;

    /**
     * @var string 私有网络子网ID。
     */
    public $SubnetId;

    /**
     * @var array 实例需要绑定的标签数组信息
     */
    public $TagList;

    /**
     * @param string $Zone 可用区ID。公测阶段仅支持ap-shanghai-2、ap-beijing-1,ap-guangzhou-2.
     * @param string $DBInstanceName DB实例名称，同一个账号下该值必须唯一。
     * @param string $DBVersion PostgreSQL内核版本，目前只支持：10.4。
     * @param string $DBCharset PostgreSQL数据库字符集，目前支持UTF8。
     * @param integer $ProjectId 项目ID。
     * @param string $VpcId 私有网络ID。
     * @param string $SubnetId 私有网络子网ID。
     * @param array $TagList 实例需要绑定的标签数组信息
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            $this->DBInstanceName = $param["DBInstanceName"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("DBCharset",$param) and $param["DBCharset"] !== null) {
            $this->DBCharset = $param["DBCharset"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
