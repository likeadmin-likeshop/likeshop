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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstance请求参数结构体
 *
 * @method integer getSecondaryNum() 获取每个副本集内从节点个数
 * @method void setSecondaryNum(integer $SecondaryNum) 设置每个副本集内从节点个数
 * @method integer getMemory() 获取实例内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：GB
 * @method integer getVolume() 获取实例硬盘大小，单位：GB
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB
 * @method string getMongoVersion() 获取版本号，当前支持 MONGO_3_WT、MONGO_3_ROCKS、MONGO_36_WT
 * @method void setMongoVersion(string $MongoVersion) 设置版本号，当前支持 MONGO_3_WT、MONGO_3_ROCKS、MONGO_36_WT
 * @method string getMachineCode() 获取机器类型，GIO：高IO版；TGIO：高IO万兆
 * @method void setMachineCode(string $MachineCode) 设置机器类型，GIO：高IO版；TGIO：高IO万兆
 * @method integer getGoodsNum() 获取实例数量，默认值为1, 最小值1，最大值为10
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，默认值为1, 最小值1，最大值为10
 * @method string getZone() 获取实例所属区域名称，格式如：ap-guangzhou-2
 * @method void setZone(string $Zone) 设置实例所属区域名称，格式如：ap-guangzhou-2
 * @method integer getTimeSpan() 获取时长，购买月数
 * @method void setTimeSpan(integer $TimeSpan) 设置时长，购买月数
 * @method string getPassword() 获取实例密码
 * @method void setPassword(string $Password) 设置实例密码
 * @method integer getProjectId() 获取项目ID，不填为默认项目
 * @method void setProjectId(integer $ProjectId) 设置项目ID，不填为默认项目
 * @method array getSecurityGroup() 获取安全组参数
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组参数
 * @method string getUniqVpcId() 获取私有网络ID，如果不传则默认选择基础网络
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络ID，如果不传则默认选择基础网络
 * @method string getUniqSubnetId() 获取私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer 每个副本集内从节点个数
     */
    public $SecondaryNum;

    /**
     * @var integer 实例内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB
     */
    public $Volume;

    /**
     * @var string 版本号，当前支持 MONGO_3_WT、MONGO_3_ROCKS、MONGO_36_WT
     */
    public $MongoVersion;

    /**
     * @var string 机器类型，GIO：高IO版；TGIO：高IO万兆
     */
    public $MachineCode;

    /**
     * @var integer 实例数量，默认值为1, 最小值1，最大值为10
     */
    public $GoodsNum;

    /**
     * @var string 实例所属区域名称，格式如：ap-guangzhou-2
     */
    public $Zone;

    /**
     * @var integer 时长，购买月数
     */
    public $TimeSpan;

    /**
     * @var string 实例密码
     */
    public $Password;

    /**
     * @var integer 项目ID，不填为默认项目
     */
    public $ProjectId;

    /**
     * @var array 安全组参数
     */
    public $SecurityGroup;

    /**
     * @var string 私有网络ID，如果不传则默认选择基础网络
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
     */
    public $UniqSubnetId;

    /**
     * @param integer $SecondaryNum 每个副本集内从节点个数
     * @param integer $Memory 实例内存大小，单位：GB
     * @param integer $Volume 实例硬盘大小，单位：GB
     * @param string $MongoVersion 版本号，当前支持 MONGO_3_WT、MONGO_3_ROCKS、MONGO_36_WT
     * @param string $MachineCode 机器类型，GIO：高IO版；TGIO：高IO万兆
     * @param integer $GoodsNum 实例数量，默认值为1, 最小值1，最大值为10
     * @param string $Zone 实例所属区域名称，格式如：ap-guangzhou-2
     * @param integer $TimeSpan 时长，购买月数
     * @param string $Password 实例密码
     * @param integer $ProjectId 项目ID，不填为默认项目
     * @param array $SecurityGroup 安全组参数
     * @param string $UniqVpcId 私有网络ID，如果不传则默认选择基础网络
     * @param string $UniqSubnetId 私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
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
        if (array_key_exists("SecondaryNum",$param) and $param["SecondaryNum"] !== null) {
            $this->SecondaryNum = $param["SecondaryNum"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }
    }
}
