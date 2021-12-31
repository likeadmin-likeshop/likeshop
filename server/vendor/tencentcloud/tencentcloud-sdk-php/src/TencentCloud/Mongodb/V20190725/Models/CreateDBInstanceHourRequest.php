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
 * CreateDBInstanceHour请求参数结构体
 *
 * @method integer getMemory() 获取实例内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：GB
 * @method integer getVolume() 获取实例硬盘大小，单位：GB
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB
 * @method integer getReplicateSetNum() 获取副本集个数，创建副本集实例时，该参数必须设置为1；创建分片实例时，具体参照查询云数据库的售卖规格返回参数
 * @method void setReplicateSetNum(integer $ReplicateSetNum) 设置副本集个数，创建副本集实例时，该参数必须设置为1；创建分片实例时，具体参照查询云数据库的售卖规格返回参数
 * @method integer getNodeNum() 获取每个副本集内节点个数，当前副本集节点数固定为3，分片从节点数可选，具体参照查询云数据库的售卖规格返回参数
 * @method void setNodeNum(integer $NodeNum) 设置每个副本集内节点个数，当前副本集节点数固定为3，分片从节点数可选，具体参照查询云数据库的售卖规格返回参数
 * @method string getMongoVersion() 获取版本号，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。参数与版本对应关系是MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本，MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本，MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本
 * @method void setMongoVersion(string $MongoVersion) 设置版本号，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。参数与版本对应关系是MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本，MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本，MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本
 * @method string getMachineCode() 获取机器类型，HIO：高IO型；HIO10G：高IO万兆
 * @method void setMachineCode(string $MachineCode) 设置机器类型，HIO：高IO型；HIO10G：高IO万兆
 * @method integer getGoodsNum() 获取实例数量，最小值1，最大值为10
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，最小值1，最大值为10
 * @method string getZone() 获取可用区信息，格式如：ap-guangzhou-2
 * @method void setZone(string $Zone) 设置可用区信息，格式如：ap-guangzhou-2
 * @method string getClusterType() 获取实例类型，REPLSET-副本集，SHARD-分片集群
 * @method void setClusterType(string $ClusterType) 设置实例类型，REPLSET-副本集，SHARD-分片集群
 * @method string getVpcId() 获取私有网络ID，如果不设置该参数则默认选择基础网络
 * @method void setVpcId(string $VpcId) 设置私有网络ID，如果不设置该参数则默认选择基础网络
 * @method string getSubnetId() 获取私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
 * @method void setSubnetId(string $SubnetId) 设置私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
 * @method string getPassword() 获取实例密码，不设置该参数则默认密码规则为 实例ID+"@"+主账户uin。举例实例id为cmgo-higv73ed，uin为100000001，则默认密码为"cmgo-higv73ed@100000001"。密码必须是8-16位字符，且至少包含字母、数字和字符 !@#%^*() 中的两种
 * @method void setPassword(string $Password) 设置实例密码，不设置该参数则默认密码规则为 实例ID+"@"+主账户uin。举例实例id为cmgo-higv73ed，uin为100000001，则默认密码为"cmgo-higv73ed@100000001"。密码必须是8-16位字符，且至少包含字母、数字和字符 !@#%^*() 中的两种
 * @method integer getProjectId() 获取项目ID，不设置为默认项目
 * @method void setProjectId(integer $ProjectId) 设置项目ID，不设置为默认项目
 * @method array getTags() 获取实例标签信息
 * @method void setTags(array $Tags) 设置实例标签信息
 * @method integer getClone() 获取1:正式实例,2:临时实例,3:只读实例，4：灾备实例
 * @method void setClone(integer $Clone) 设置1:正式实例,2:临时实例,3:只读实例，4：灾备实例
 * @method string getFather() 获取父实例Id，当Clone为3或者4时，这个必须填
 * @method void setFather(string $Father) 设置父实例Id，当Clone为3或者4时，这个必须填
 * @method array getSecurityGroup() 获取安全组
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组
 */
class CreateDBInstanceHourRequest extends AbstractModel
{
    /**
     * @var integer 实例内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB
     */
    public $Volume;

    /**
     * @var integer 副本集个数，创建副本集实例时，该参数必须设置为1；创建分片实例时，具体参照查询云数据库的售卖规格返回参数
     */
    public $ReplicateSetNum;

    /**
     * @var integer 每个副本集内节点个数，当前副本集节点数固定为3，分片从节点数可选，具体参照查询云数据库的售卖规格返回参数
     */
    public $NodeNum;

    /**
     * @var string 版本号，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。参数与版本对应关系是MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本，MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本，MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本
     */
    public $MongoVersion;

    /**
     * @var string 机器类型，HIO：高IO型；HIO10G：高IO万兆
     */
    public $MachineCode;

    /**
     * @var integer 实例数量，最小值1，最大值为10
     */
    public $GoodsNum;

    /**
     * @var string 可用区信息，格式如：ap-guangzhou-2
     */
    public $Zone;

    /**
     * @var string 实例类型，REPLSET-副本集，SHARD-分片集群
     */
    public $ClusterType;

    /**
     * @var string 私有网络ID，如果不设置该参数则默认选择基础网络
     */
    public $VpcId;

    /**
     * @var string 私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
     */
    public $SubnetId;

    /**
     * @var string 实例密码，不设置该参数则默认密码规则为 实例ID+"@"+主账户uin。举例实例id为cmgo-higv73ed，uin为100000001，则默认密码为"cmgo-higv73ed@100000001"。密码必须是8-16位字符，且至少包含字母、数字和字符 !@#%^*() 中的两种
     */
    public $Password;

    /**
     * @var integer 项目ID，不设置为默认项目
     */
    public $ProjectId;

    /**
     * @var array 实例标签信息
     */
    public $Tags;

    /**
     * @var integer 1:正式实例,2:临时实例,3:只读实例，4：灾备实例
     */
    public $Clone;

    /**
     * @var string 父实例Id，当Clone为3或者4时，这个必须填
     */
    public $Father;

    /**
     * @var array 安全组
     */
    public $SecurityGroup;

    /**
     * @param integer $Memory 实例内存大小，单位：GB
     * @param integer $Volume 实例硬盘大小，单位：GB
     * @param integer $ReplicateSetNum 副本集个数，创建副本集实例时，该参数必须设置为1；创建分片实例时，具体参照查询云数据库的售卖规格返回参数
     * @param integer $NodeNum 每个副本集内节点个数，当前副本集节点数固定为3，分片从节点数可选，具体参照查询云数据库的售卖规格返回参数
     * @param string $MongoVersion 版本号，具体支持的售卖版本请参照查询云数据库的售卖规格（DescribeSpecInfo）返回结果。参数与版本对应关系是MONGO_3_WT：MongoDB 3.2 WiredTiger存储引擎版本，MONGO_3_ROCKS：MongoDB 3.2 RocksDB存储引擎版本，MONGO_36_WT：MongoDB 3.6 WiredTiger存储引擎版本
     * @param string $MachineCode 机器类型，HIO：高IO型；HIO10G：高IO万兆
     * @param integer $GoodsNum 实例数量，最小值1，最大值为10
     * @param string $Zone 可用区信息，格式如：ap-guangzhou-2
     * @param string $ClusterType 实例类型，REPLSET-副本集，SHARD-分片集群
     * @param string $VpcId 私有网络ID，如果不设置该参数则默认选择基础网络
     * @param string $SubnetId 私有网络下的子网ID，如果设置了 VpcId，则 SubnetId必填
     * @param string $Password 实例密码，不设置该参数则默认密码规则为 实例ID+"@"+主账户uin。举例实例id为cmgo-higv73ed，uin为100000001，则默认密码为"cmgo-higv73ed@100000001"。密码必须是8-16位字符，且至少包含字母、数字和字符 !@#%^*() 中的两种
     * @param integer $ProjectId 项目ID，不设置为默认项目
     * @param array $Tags 实例标签信息
     * @param integer $Clone 1:正式实例,2:临时实例,3:只读实例，4：灾备实例
     * @param string $Father 父实例Id，当Clone为3或者4时，这个必须填
     * @param array $SecurityGroup 安全组
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("ReplicateSetNum",$param) and $param["ReplicateSetNum"] !== null) {
            $this->ReplicateSetNum = $param["ReplicateSetNum"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
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

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Clone",$param) and $param["Clone"] !== null) {
            $this->Clone = $param["Clone"];
        }

        if (array_key_exists("Father",$param) and $param["Father"] !== null) {
            $this->Father = $param["Father"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }
    }
}
