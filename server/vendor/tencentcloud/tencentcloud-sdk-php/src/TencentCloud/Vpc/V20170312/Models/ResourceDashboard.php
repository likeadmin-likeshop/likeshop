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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC资源看板（各资源个数）
 *
 * @method string getVpcId() 获取Vpc实例ID，例如：vpc-bq4bzxpj。
 * @method void setVpcId(string $VpcId) 设置Vpc实例ID，例如：vpc-bq4bzxpj。
 * @method string getSubnetId() 获取子网实例ID，例如：subnet-bthucmmy。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID，例如：subnet-bthucmmy。
 * @method integer getClassiclink() 获取基础网络互通。
 * @method void setClassiclink(integer $Classiclink) 设置基础网络互通。
 * @method integer getDcg() 获取专线网关。
 * @method void setDcg(integer $Dcg) 设置专线网关。
 * @method integer getPcx() 获取对等连接。
 * @method void setPcx(integer $Pcx) 设置对等连接。
 * @method integer getIp() 获取统计当前除云服务器 IP、弹性网卡IP和网络探测IP以外的所有已使用的IP总数。云服务器 IP、弹性网卡IP和网络探测IP单独计数。
 * @method void setIp(integer $Ip) 设置统计当前除云服务器 IP、弹性网卡IP和网络探测IP以外的所有已使用的IP总数。云服务器 IP、弹性网卡IP和网络探测IP单独计数。
 * @method integer getNat() 获取NAT网关。
 * @method void setNat(integer $Nat) 设置NAT网关。
 * @method integer getVpngw() 获取VPN网关。
 * @method void setVpngw(integer $Vpngw) 设置VPN网关。
 * @method integer getFlowLog() 获取流日志。
 * @method void setFlowLog(integer $FlowLog) 设置流日志。
 * @method integer getNetworkDetect() 获取网络探测。
 * @method void setNetworkDetect(integer $NetworkDetect) 设置网络探测。
 * @method integer getNetworkACL() 获取网络ACL。
 * @method void setNetworkACL(integer $NetworkACL) 设置网络ACL。
 * @method integer getCVM() 获取云主机。
 * @method void setCVM(integer $CVM) 设置云主机。
 * @method integer getLB() 获取负载均衡。
 * @method void setLB(integer $LB) 设置负载均衡。
 * @method integer getCDB() 获取关系型数据库。
 * @method void setCDB(integer $CDB) 设置关系型数据库。
 * @method integer getCmem() 获取云数据库 TencentDB for Memcached。
 * @method void setCmem(integer $Cmem) 设置云数据库 TencentDB for Memcached。
 * @method integer getCTSDB() 获取时序数据库。
 * @method void setCTSDB(integer $CTSDB) 设置时序数据库。
 * @method integer getMariaDB() 获取数据库 TencentDB for MariaDB（TDSQL）。
 * @method void setMariaDB(integer $MariaDB) 设置数据库 TencentDB for MariaDB（TDSQL）。
 * @method integer getSQLServer() 获取数据库 TencentDB for SQL Server。
 * @method void setSQLServer(integer $SQLServer) 设置数据库 TencentDB for SQL Server。
 * @method integer getPostgres() 获取云数据库 TencentDB for PostgreSQL。
 * @method void setPostgres(integer $Postgres) 设置云数据库 TencentDB for PostgreSQL。
 * @method integer getNAS() 获取网络附加存储。
 * @method void setNAS(integer $NAS) 设置网络附加存储。
 * @method integer getGreenplumn() 获取Snova云数据仓库。
 * @method void setGreenplumn(integer $Greenplumn) 设置Snova云数据仓库。
 * @method integer getCkafka() 获取消息队列 CKAFKA。
 * @method void setCkafka(integer $Ckafka) 设置消息队列 CKAFKA。
 * @method integer getGrocery() 获取Grocery。
 * @method void setGrocery(integer $Grocery) 设置Grocery。
 * @method integer getHSM() 获取数据加密服务。
 * @method void setHSM(integer $HSM) 设置数据加密服务。
 * @method integer getTcaplus() 获取游戏存储 Tcaplus。
 * @method void setTcaplus(integer $Tcaplus) 设置游戏存储 Tcaplus。
 * @method integer getCnas() 获取Cnas。
 * @method void setCnas(integer $Cnas) 设置Cnas。
 * @method integer getTiDB() 获取HTAP 数据库 TiDB。
 * @method void setTiDB(integer $TiDB) 设置HTAP 数据库 TiDB。
 * @method integer getEmr() 获取EMR 集群。
 * @method void setEmr(integer $Emr) 设置EMR 集群。
 * @method integer getSEAL() 获取SEAL。
 * @method void setSEAL(integer $SEAL) 设置SEAL。
 * @method integer getCFS() 获取文件存储 CFS。
 * @method void setCFS(integer $CFS) 设置文件存储 CFS。
 * @method integer getOracle() 获取Oracle。
 * @method void setOracle(integer $Oracle) 设置Oracle。
 * @method integer getElasticSearch() 获取ElasticSearch服务。
 * @method void setElasticSearch(integer $ElasticSearch) 设置ElasticSearch服务。
 * @method integer getTBaaS() 获取区块链服务。
 * @method void setTBaaS(integer $TBaaS) 设置区块链服务。
 * @method integer getItop() 获取Itop。
 * @method void setItop(integer $Itop) 设置Itop。
 * @method integer getDBAudit() 获取云数据库审计。
 * @method void setDBAudit(integer $DBAudit) 设置云数据库审计。
 * @method integer getCynosDBPostgres() 获取企业级云数据库 CynosDB for Postgres。
 * @method void setCynosDBPostgres(integer $CynosDBPostgres) 设置企业级云数据库 CynosDB for Postgres。
 * @method integer getRedis() 获取数据库 TencentDB for Redis。
 * @method void setRedis(integer $Redis) 设置数据库 TencentDB for Redis。
 * @method integer getMongoDB() 获取数据库 TencentDB for MongoDB。
 * @method void setMongoDB(integer $MongoDB) 设置数据库 TencentDB for MongoDB。
 * @method integer getDCDB() 获取分布式数据库 TencentDB for TDSQL。
 * @method void setDCDB(integer $DCDB) 设置分布式数据库 TencentDB for TDSQL。
 * @method integer getCynosDBMySQL() 获取企业级云数据库 CynosDB for MySQL。
 * @method void setCynosDBMySQL(integer $CynosDBMySQL) 设置企业级云数据库 CynosDB for MySQL。
 * @method integer getSubnet() 获取子网。
 * @method void setSubnet(integer $Subnet) 设置子网。
 * @method integer getRouteTable() 获取路由表。
 * @method void setRouteTable(integer $RouteTable) 设置路由表。
 */
class ResourceDashboard extends AbstractModel
{
    /**
     * @var string Vpc实例ID，例如：vpc-bq4bzxpj。
     */
    public $VpcId;

    /**
     * @var string 子网实例ID，例如：subnet-bthucmmy。
     */
    public $SubnetId;

    /**
     * @var integer 基础网络互通。
     */
    public $Classiclink;

    /**
     * @var integer 专线网关。
     */
    public $Dcg;

    /**
     * @var integer 对等连接。
     */
    public $Pcx;

    /**
     * @var integer 统计当前除云服务器 IP、弹性网卡IP和网络探测IP以外的所有已使用的IP总数。云服务器 IP、弹性网卡IP和网络探测IP单独计数。
     */
    public $Ip;

    /**
     * @var integer NAT网关。
     */
    public $Nat;

    /**
     * @var integer VPN网关。
     */
    public $Vpngw;

    /**
     * @var integer 流日志。
     */
    public $FlowLog;

    /**
     * @var integer 网络探测。
     */
    public $NetworkDetect;

    /**
     * @var integer 网络ACL。
     */
    public $NetworkACL;

    /**
     * @var integer 云主机。
     */
    public $CVM;

    /**
     * @var integer 负载均衡。
     */
    public $LB;

    /**
     * @var integer 关系型数据库。
     */
    public $CDB;

    /**
     * @var integer 云数据库 TencentDB for Memcached。
     */
    public $Cmem;

    /**
     * @var integer 时序数据库。
     */
    public $CTSDB;

    /**
     * @var integer 数据库 TencentDB for MariaDB（TDSQL）。
     */
    public $MariaDB;

    /**
     * @var integer 数据库 TencentDB for SQL Server。
     */
    public $SQLServer;

    /**
     * @var integer 云数据库 TencentDB for PostgreSQL。
     */
    public $Postgres;

    /**
     * @var integer 网络附加存储。
     */
    public $NAS;

    /**
     * @var integer Snova云数据仓库。
     */
    public $Greenplumn;

    /**
     * @var integer 消息队列 CKAFKA。
     */
    public $Ckafka;

    /**
     * @var integer Grocery。
     */
    public $Grocery;

    /**
     * @var integer 数据加密服务。
     */
    public $HSM;

    /**
     * @var integer 游戏存储 Tcaplus。
     */
    public $Tcaplus;

    /**
     * @var integer Cnas。
     */
    public $Cnas;

    /**
     * @var integer HTAP 数据库 TiDB。
     */
    public $TiDB;

    /**
     * @var integer EMR 集群。
     */
    public $Emr;

    /**
     * @var integer SEAL。
     */
    public $SEAL;

    /**
     * @var integer 文件存储 CFS。
     */
    public $CFS;

    /**
     * @var integer Oracle。
     */
    public $Oracle;

    /**
     * @var integer ElasticSearch服务。
     */
    public $ElasticSearch;

    /**
     * @var integer 区块链服务。
     */
    public $TBaaS;

    /**
     * @var integer Itop。
     */
    public $Itop;

    /**
     * @var integer 云数据库审计。
     */
    public $DBAudit;

    /**
     * @var integer 企业级云数据库 CynosDB for Postgres。
     */
    public $CynosDBPostgres;

    /**
     * @var integer 数据库 TencentDB for Redis。
     */
    public $Redis;

    /**
     * @var integer 数据库 TencentDB for MongoDB。
     */
    public $MongoDB;

    /**
     * @var integer 分布式数据库 TencentDB for TDSQL。
     */
    public $DCDB;

    /**
     * @var integer 企业级云数据库 CynosDB for MySQL。
     */
    public $CynosDBMySQL;

    /**
     * @var integer 子网。
     */
    public $Subnet;

    /**
     * @var integer 路由表。
     */
    public $RouteTable;

    /**
     * @param string $VpcId Vpc实例ID，例如：vpc-bq4bzxpj。
     * @param string $SubnetId 子网实例ID，例如：subnet-bthucmmy。
     * @param integer $Classiclink 基础网络互通。
     * @param integer $Dcg 专线网关。
     * @param integer $Pcx 对等连接。
     * @param integer $Ip 统计当前除云服务器 IP、弹性网卡IP和网络探测IP以外的所有已使用的IP总数。云服务器 IP、弹性网卡IP和网络探测IP单独计数。
     * @param integer $Nat NAT网关。
     * @param integer $Vpngw VPN网关。
     * @param integer $FlowLog 流日志。
     * @param integer $NetworkDetect 网络探测。
     * @param integer $NetworkACL 网络ACL。
     * @param integer $CVM 云主机。
     * @param integer $LB 负载均衡。
     * @param integer $CDB 关系型数据库。
     * @param integer $Cmem 云数据库 TencentDB for Memcached。
     * @param integer $CTSDB 时序数据库。
     * @param integer $MariaDB 数据库 TencentDB for MariaDB（TDSQL）。
     * @param integer $SQLServer 数据库 TencentDB for SQL Server。
     * @param integer $Postgres 云数据库 TencentDB for PostgreSQL。
     * @param integer $NAS 网络附加存储。
     * @param integer $Greenplumn Snova云数据仓库。
     * @param integer $Ckafka 消息队列 CKAFKA。
     * @param integer $Grocery Grocery。
     * @param integer $HSM 数据加密服务。
     * @param integer $Tcaplus 游戏存储 Tcaplus。
     * @param integer $Cnas Cnas。
     * @param integer $TiDB HTAP 数据库 TiDB。
     * @param integer $Emr EMR 集群。
     * @param integer $SEAL SEAL。
     * @param integer $CFS 文件存储 CFS。
     * @param integer $Oracle Oracle。
     * @param integer $ElasticSearch ElasticSearch服务。
     * @param integer $TBaaS 区块链服务。
     * @param integer $Itop Itop。
     * @param integer $DBAudit 云数据库审计。
     * @param integer $CynosDBPostgres 企业级云数据库 CynosDB for Postgres。
     * @param integer $Redis 数据库 TencentDB for Redis。
     * @param integer $MongoDB 数据库 TencentDB for MongoDB。
     * @param integer $DCDB 分布式数据库 TencentDB for TDSQL。
     * @param integer $CynosDBMySQL 企业级云数据库 CynosDB for MySQL。
     * @param integer $Subnet 子网。
     * @param integer $RouteTable 路由表。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Classiclink",$param) and $param["Classiclink"] !== null) {
            $this->Classiclink = $param["Classiclink"];
        }

        if (array_key_exists("Dcg",$param) and $param["Dcg"] !== null) {
            $this->Dcg = $param["Dcg"];
        }

        if (array_key_exists("Pcx",$param) and $param["Pcx"] !== null) {
            $this->Pcx = $param["Pcx"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Nat",$param) and $param["Nat"] !== null) {
            $this->Nat = $param["Nat"];
        }

        if (array_key_exists("Vpngw",$param) and $param["Vpngw"] !== null) {
            $this->Vpngw = $param["Vpngw"];
        }

        if (array_key_exists("FlowLog",$param) and $param["FlowLog"] !== null) {
            $this->FlowLog = $param["FlowLog"];
        }

        if (array_key_exists("NetworkDetect",$param) and $param["NetworkDetect"] !== null) {
            $this->NetworkDetect = $param["NetworkDetect"];
        }

        if (array_key_exists("NetworkACL",$param) and $param["NetworkACL"] !== null) {
            $this->NetworkACL = $param["NetworkACL"];
        }

        if (array_key_exists("CVM",$param) and $param["CVM"] !== null) {
            $this->CVM = $param["CVM"];
        }

        if (array_key_exists("LB",$param) and $param["LB"] !== null) {
            $this->LB = $param["LB"];
        }

        if (array_key_exists("CDB",$param) and $param["CDB"] !== null) {
            $this->CDB = $param["CDB"];
        }

        if (array_key_exists("Cmem",$param) and $param["Cmem"] !== null) {
            $this->Cmem = $param["Cmem"];
        }

        if (array_key_exists("CTSDB",$param) and $param["CTSDB"] !== null) {
            $this->CTSDB = $param["CTSDB"];
        }

        if (array_key_exists("MariaDB",$param) and $param["MariaDB"] !== null) {
            $this->MariaDB = $param["MariaDB"];
        }

        if (array_key_exists("SQLServer",$param) and $param["SQLServer"] !== null) {
            $this->SQLServer = $param["SQLServer"];
        }

        if (array_key_exists("Postgres",$param) and $param["Postgres"] !== null) {
            $this->Postgres = $param["Postgres"];
        }

        if (array_key_exists("NAS",$param) and $param["NAS"] !== null) {
            $this->NAS = $param["NAS"];
        }

        if (array_key_exists("Greenplumn",$param) and $param["Greenplumn"] !== null) {
            $this->Greenplumn = $param["Greenplumn"];
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = $param["Ckafka"];
        }

        if (array_key_exists("Grocery",$param) and $param["Grocery"] !== null) {
            $this->Grocery = $param["Grocery"];
        }

        if (array_key_exists("HSM",$param) and $param["HSM"] !== null) {
            $this->HSM = $param["HSM"];
        }

        if (array_key_exists("Tcaplus",$param) and $param["Tcaplus"] !== null) {
            $this->Tcaplus = $param["Tcaplus"];
        }

        if (array_key_exists("Cnas",$param) and $param["Cnas"] !== null) {
            $this->Cnas = $param["Cnas"];
        }

        if (array_key_exists("TiDB",$param) and $param["TiDB"] !== null) {
            $this->TiDB = $param["TiDB"];
        }

        if (array_key_exists("Emr",$param) and $param["Emr"] !== null) {
            $this->Emr = $param["Emr"];
        }

        if (array_key_exists("SEAL",$param) and $param["SEAL"] !== null) {
            $this->SEAL = $param["SEAL"];
        }

        if (array_key_exists("CFS",$param) and $param["CFS"] !== null) {
            $this->CFS = $param["CFS"];
        }

        if (array_key_exists("Oracle",$param) and $param["Oracle"] !== null) {
            $this->Oracle = $param["Oracle"];
        }

        if (array_key_exists("ElasticSearch",$param) and $param["ElasticSearch"] !== null) {
            $this->ElasticSearch = $param["ElasticSearch"];
        }

        if (array_key_exists("TBaaS",$param) and $param["TBaaS"] !== null) {
            $this->TBaaS = $param["TBaaS"];
        }

        if (array_key_exists("Itop",$param) and $param["Itop"] !== null) {
            $this->Itop = $param["Itop"];
        }

        if (array_key_exists("DBAudit",$param) and $param["DBAudit"] !== null) {
            $this->DBAudit = $param["DBAudit"];
        }

        if (array_key_exists("CynosDBPostgres",$param) and $param["CynosDBPostgres"] !== null) {
            $this->CynosDBPostgres = $param["CynosDBPostgres"];
        }

        if (array_key_exists("Redis",$param) and $param["Redis"] !== null) {
            $this->Redis = $param["Redis"];
        }

        if (array_key_exists("MongoDB",$param) and $param["MongoDB"] !== null) {
            $this->MongoDB = $param["MongoDB"];
        }

        if (array_key_exists("DCDB",$param) and $param["DCDB"] !== null) {
            $this->DCDB = $param["DCDB"];
        }

        if (array_key_exists("CynosDBMySQL",$param) and $param["CynosDBMySQL"] !== null) {
            $this->CynosDBMySQL = $param["CynosDBMySQL"];
        }

        if (array_key_exists("Subnet",$param) and $param["Subnet"] !== null) {
            $this->Subnet = $param["Subnet"];
        }

        if (array_key_exists("RouteTable",$param) and $param["RouteTable"] !== null) {
            $this->RouteTable = $param["RouteTable"];
        }
    }
}
