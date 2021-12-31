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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusters请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getVpcId() 获取所属VPC网络ID
 * @method void setVpcId(string $VpcId) 设置所属VPC网络ID
 * @method string getSubnetId() 获取所属子网ID
 * @method void setSubnetId(string $SubnetId) 设置所属子网ID
 * @method string getDbType() 获取数据库类型，取值范围: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) 设置数据库类型，取值范围: 
<li> MYSQL </li>
 * @method string getDbVersion() 获取数据库版本，取值范围: 
<li> MYSQL可选值：5.7 </li>
 * @method void setDbVersion(string $DbVersion) 设置数据库版本，取值范围: 
<li> MYSQL可选值：5.7 </li>
 * @method integer getProjectId() 获取所属项目ID
 * @method void setProjectId(integer $ProjectId) 设置所属项目ID
 * @method integer getCpu() 获取普通实例Cpu核数
 * @method void setCpu(integer $Cpu) 设置普通实例Cpu核数
 * @method integer getMemory() 获取普通实例内存
 * @method void setMemory(integer $Memory) 设置普通实例内存
 * @method integer getStorage() 获取存储
 * @method void setStorage(integer $Storage) 设置存储
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getAdminPassword() 获取账号密码(8-64个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()~）中的两种)
 * @method void setAdminPassword(string $AdminPassword) 设置账号密码(8-64个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()~）中的两种)
 * @method integer getPort() 获取端口，默认5432
 * @method void setPort(integer $Port) 设置端口，默认5432
 * @method integer getPayMode() 获取计费模式，按量计费：0，包年包月：1。默认按量计费。
 * @method void setPayMode(integer $PayMode) 设置计费模式，按量计费：0，包年包月：1。默认按量计费。
 * @method integer getCount() 获取购买个数，目前只支持传1（不传默认为1）
 * @method void setCount(integer $Count) 设置购买个数，目前只支持传1（不传默认为1）
 * @method string getRollbackStrategy() 获取回档类型：
noneRollback：不回档；
snapRollback，快照回档；
timeRollback，时间点回档
 * @method void setRollbackStrategy(string $RollbackStrategy) 设置回档类型：
noneRollback：不回档；
snapRollback，快照回档；
timeRollback，时间点回档
 * @method integer getRollbackId() 获取快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效
 * @method void setRollbackId(integer $RollbackId) 设置快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效
 * @method string getOriginalClusterId() 获取回档时，传入源集群ID，用于查找源poolId
 * @method void setOriginalClusterId(string $OriginalClusterId) 设置回档时，传入源集群ID，用于查找源poolId
 * @method string getExpectTime() 获取时间点回档，指定时间；快照回档，快照时间
 * @method void setExpectTime(string $ExpectTime) 设置时间点回档，指定时间；快照回档，快照时间
 * @method integer getExpectTimeThresh() 获取时间点回档，指定时间允许范围
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) 设置时间点回档，指定时间允许范围
 * @method integer getStorageLimit() 获取普通实例存储上限，单位GB
 * @method void setStorageLimit(integer $StorageLimit) 设置普通实例存储上限，单位GB
 * @method integer getInstanceCount() 获取实例数量
 * @method void setInstanceCount(integer $InstanceCount) 设置实例数量
 * @method integer getTimeSpan() 获取包年包月购买时长
 * @method void setTimeSpan(integer $TimeSpan) 设置包年包月购买时长
 * @method string getTimeUnit() 获取包年包月购买时长单位
 * @method void setTimeUnit(string $TimeUnit) 设置包年包月购买时长单位
 * @method integer getAutoRenewFlag() 获取包年包月购买是否自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置包年包月购买是否自动续费
 * @method integer getAutoVoucher() 获取是否自动选择代金券 1是 0否 默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券 1是 0否 默认为0
 * @method integer getHaCount() 获取实例数量（该参数已不再使用，只做存量兼容处理）
 * @method void setHaCount(integer $HaCount) 设置实例数量（该参数已不再使用，只做存量兼容处理）
 * @method string getOrderSource() 获取订单来源
 * @method void setOrderSource(string $OrderSource) 设置订单来源
 * @method array getResourceTags() 获取集群创建需要绑定的tag数组信息
 * @method void setResourceTags(array $ResourceTags) 设置集群创建需要绑定的tag数组信息
 * @method string getDbMode() 获取Db类型
当DbType为MYSQL时可选(默认NORMAL)：
<li>NORMAL</li>
<li>SERVERLESS</li>
 * @method void setDbMode(string $DbMode) 设置Db类型
当DbType为MYSQL时可选(默认NORMAL)：
<li>NORMAL</li>
<li>SERVERLESS</li>
 * @method float getMinCpu() 获取当DbMode为SEVERLESS时必填
cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method void setMinCpu(float $MinCpu) 设置当DbMode为SEVERLESS时必填
cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method float getMaxCpu() 获取当DbMode为SEVERLESS时必填：
cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method void setMaxCpu(float $MaxCpu) 设置当DbMode为SEVERLESS时必填：
cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
 * @method string getAutoPause() 获取当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
默认值:yes
 * @method void setAutoPause(string $AutoPause) 设置当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
默认值:yes
 * @method integer getAutoPauseDelay() 获取当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]
默认值:600
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) 设置当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]
默认值:600
 */
class CreateClustersRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 所属VPC网络ID
     */
    public $VpcId;

    /**
     * @var string 所属子网ID
     */
    public $SubnetId;

    /**
     * @var string 数据库类型，取值范围: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var string 数据库版本，取值范围: 
<li> MYSQL可选值：5.7 </li>
     */
    public $DbVersion;

    /**
     * @var integer 所属项目ID
     */
    public $ProjectId;

    /**
     * @var integer 普通实例Cpu核数
     */
    public $Cpu;

    /**
     * @var integer 普通实例内存
     */
    public $Memory;

    /**
     * @var integer 存储
     */
    public $Storage;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 账号密码(8-64个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()~）中的两种)
     */
    public $AdminPassword;

    /**
     * @var integer 端口，默认5432
     */
    public $Port;

    /**
     * @var integer 计费模式，按量计费：0，包年包月：1。默认按量计费。
     */
    public $PayMode;

    /**
     * @var integer 购买个数，目前只支持传1（不传默认为1）
     */
    public $Count;

    /**
     * @var string 回档类型：
noneRollback：不回档；
snapRollback，快照回档；
timeRollback，时间点回档
     */
    public $RollbackStrategy;

    /**
     * @var integer 快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效
     */
    public $RollbackId;

    /**
     * @var string 回档时，传入源集群ID，用于查找源poolId
     */
    public $OriginalClusterId;

    /**
     * @var string 时间点回档，指定时间；快照回档，快照时间
     */
    public $ExpectTime;

    /**
     * @var integer 时间点回档，指定时间允许范围
     */
    public $ExpectTimeThresh;

    /**
     * @var integer 普通实例存储上限，单位GB
     */
    public $StorageLimit;

    /**
     * @var integer 实例数量
     */
    public $InstanceCount;

    /**
     * @var integer 包年包月购买时长
     */
    public $TimeSpan;

    /**
     * @var string 包年包月购买时长单位
     */
    public $TimeUnit;

    /**
     * @var integer 包年包月购买是否自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 是否自动选择代金券 1是 0否 默认为0
     */
    public $AutoVoucher;

    /**
     * @var integer 实例数量（该参数已不再使用，只做存量兼容处理）
     */
    public $HaCount;

    /**
     * @var string 订单来源
     */
    public $OrderSource;

    /**
     * @var array 集群创建需要绑定的tag数组信息
     */
    public $ResourceTags;

    /**
     * @var string Db类型
当DbType为MYSQL时可选(默认NORMAL)：
<li>NORMAL</li>
<li>SERVERLESS</li>
     */
    public $DbMode;

    /**
     * @var float 当DbMode为SEVERLESS时必填
cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     */
    public $MinCpu;

    /**
     * @var float 当DbMode为SEVERLESS时必填：
cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     */
    public $MaxCpu;

    /**
     * @var string 当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
默认值:yes
     */
    public $AutoPause;

    /**
     * @var integer 当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]
默认值:600
     */
    public $AutoPauseDelay;

    /**
     * @param string $Zone 可用区
     * @param string $VpcId 所属VPC网络ID
     * @param string $SubnetId 所属子网ID
     * @param string $DbType 数据库类型，取值范围: 
<li> MYSQL </li>
     * @param string $DbVersion 数据库版本，取值范围: 
<li> MYSQL可选值：5.7 </li>
     * @param integer $ProjectId 所属项目ID
     * @param integer $Cpu 普通实例Cpu核数
     * @param integer $Memory 普通实例内存
     * @param integer $Storage 存储
     * @param string $ClusterName 集群名称
     * @param string $AdminPassword 账号密码(8-64个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()~）中的两种)
     * @param integer $Port 端口，默认5432
     * @param integer $PayMode 计费模式，按量计费：0，包年包月：1。默认按量计费。
     * @param integer $Count 购买个数，目前只支持传1（不传默认为1）
     * @param string $RollbackStrategy 回档类型：
noneRollback：不回档；
snapRollback，快照回档；
timeRollback，时间点回档
     * @param integer $RollbackId 快照回档，表示snapshotId；时间点回档，表示queryId，为0，表示需要判断时间点是否有效
     * @param string $OriginalClusterId 回档时，传入源集群ID，用于查找源poolId
     * @param string $ExpectTime 时间点回档，指定时间；快照回档，快照时间
     * @param integer $ExpectTimeThresh 时间点回档，指定时间允许范围
     * @param integer $StorageLimit 普通实例存储上限，单位GB
     * @param integer $InstanceCount 实例数量
     * @param integer $TimeSpan 包年包月购买时长
     * @param string $TimeUnit 包年包月购买时长单位
     * @param integer $AutoRenewFlag 包年包月购买是否自动续费
     * @param integer $AutoVoucher 是否自动选择代金券 1是 0否 默认为0
     * @param integer $HaCount 实例数量（该参数已不再使用，只做存量兼容处理）
     * @param string $OrderSource 订单来源
     * @param array $ResourceTags 集群创建需要绑定的tag数组信息
     * @param string $DbMode Db类型
当DbType为MYSQL时可选(默认NORMAL)：
<li>NORMAL</li>
<li>SERVERLESS</li>
     * @param float $MinCpu 当DbMode为SEVERLESS时必填
cpu最小值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     * @param float $MaxCpu 当DbMode为SEVERLESS时必填：
cpu最大值，可选范围参考DescribeServerlessInstanceSpecs接口返回
     * @param string $AutoPause 当DbMode为SEVERLESS时，指定集群是否自动暂停，可选范围
<li>yes</li>
<li>no</li>
默认值:yes
     * @param integer $AutoPauseDelay 当DbMode为SEVERLESS时，指定集群自动暂停的延迟，单位秒，可选范围[600,691200]
默认值:600
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("RollbackId",$param) and $param["RollbackId"] !== null) {
            $this->RollbackId = $param["RollbackId"];
        }

        if (array_key_exists("OriginalClusterId",$param) and $param["OriginalClusterId"] !== null) {
            $this->OriginalClusterId = $param["OriginalClusterId"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("ExpectTimeThresh",$param) and $param["ExpectTimeThresh"] !== null) {
            $this->ExpectTimeThresh = $param["ExpectTimeThresh"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("HaCount",$param) and $param["HaCount"] !== null) {
            $this->HaCount = $param["HaCount"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseDelay",$param) and $param["AutoPauseDelay"] !== null) {
            $this->AutoPauseDelay = $param["AutoPauseDelay"];
        }
    }
}
