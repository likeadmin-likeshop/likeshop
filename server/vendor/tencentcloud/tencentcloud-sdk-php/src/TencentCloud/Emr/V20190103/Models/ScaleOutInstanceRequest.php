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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutInstance请求参数结构体
 *
 * @method string getTimeUnit() 获取扩容的时间单位。取值范围：
<li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li>
<li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method void setTimeUnit(string $TimeUnit) 设置扩容的时间单位。取值范围：
<li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li>
<li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method integer getTimeSpan() 获取扩容的时长。结合TimeUnit一起使用。
<li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li>
<li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
 * @method void setTimeSpan(integer $TimeSpan) 设置扩容的时长。结合TimeUnit一起使用。
<li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li>
<li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getPayMode() 获取实例计费模式。取值范围：
<li>0：表示按量计费。</li>
<li>1：表示包年包月。</li>
 * @method void setPayMode(integer $PayMode) 设置实例计费模式。取值范围：
<li>0：表示按量计费。</li>
<li>1：表示包年包月。</li>
 * @method string getClientToken() 获取客户端Token。
 * @method void setClientToken(string $ClientToken) 设置客户端Token。
 * @method array getPreExecutedFileSettings() 获取引导操作脚本设置。
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) 设置引导操作脚本设置。
 * @method integer getTaskCount() 获取扩容的Task节点数量。
 * @method void setTaskCount(integer $TaskCount) 设置扩容的Task节点数量。
 * @method integer getCoreCount() 获取扩容的Core节点数量。
 * @method void setCoreCount(integer $CoreCount) 设置扩容的Core节点数量。
 * @method array getUnNecessaryNodeList() 获取扩容时不需要安装的进程。
 * @method void setUnNecessaryNodeList(array $UnNecessaryNodeList) 设置扩容时不需要安装的进程。
 * @method integer getRouterCount() 获取扩容的Router节点数量。
 * @method void setRouterCount(integer $RouterCount) 设置扩容的Router节点数量。
 * @method array getSoftDeployInfo() 获取部署的服务。
<li>SoftDeployInfo和ServiceNodeInfo是同组参数，和UnNecessaryNodeList参数互斥。</li>
<li>建议使用SoftDeployInfo和ServiceNodeInfo组合。</li>
 * @method void setSoftDeployInfo(array $SoftDeployInfo) 设置部署的服务。
<li>SoftDeployInfo和ServiceNodeInfo是同组参数，和UnNecessaryNodeList参数互斥。</li>
<li>建议使用SoftDeployInfo和ServiceNodeInfo组合。</li>
 * @method array getServiceNodeInfo() 获取启动的进程。
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) 设置启动的进程。
 * @method array getDisasterRecoverGroupIds() 获取分散置放群组ID列表，当前仅支持指定一个。
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置分散置放群组ID列表，当前仅支持指定一个。
 * @method array getTags() 获取扩容节点绑定标签列表。
 * @method void setTags(array $Tags) 设置扩容节点绑定标签列表。
 * @method string getHardwareResourceType() 获取扩容所选资源类型，可选范围为"host","pod"，host为普通的CVM资源，Pod为TKE集群提供的资源
 * @method void setHardwareResourceType(string $HardwareResourceType) 设置扩容所选资源类型，可选范围为"host","pod"，host为普通的CVM资源，Pod为TKE集群提供的资源
 * @method PodSpec getPodSpec() 获取使用Pod资源扩容时，指定的Pod规格以及来源等信息
 * @method void setPodSpec(PodSpec $PodSpec) 设置使用Pod资源扩容时，指定的Pod规格以及来源等信息
 * @method string getClickHouseClusterName() 获取使用clickhouse集群扩容时，选择的机器分组名称
 * @method void setClickHouseClusterName(string $ClickHouseClusterName) 设置使用clickhouse集群扩容时，选择的机器分组名称
 * @method string getClickHouseClusterType() 获取使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组
 * @method void setClickHouseClusterType(string $ClickHouseClusterType) 设置使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组
 * @method string getYarnNodeLabel() 获取规则扩容指定 yarn node label
 * @method void setYarnNodeLabel(string $YarnNodeLabel) 设置规则扩容指定 yarn node label
 * @method PodParameter getPodParameter() 获取POD自定义权限和自定义参数
 * @method void setPodParameter(PodParameter $PodParameter) 设置POD自定义权限和自定义参数
 * @method integer getMasterCount() 获取扩容的Master节点的数量。
 * @method void setMasterCount(integer $MasterCount) 设置扩容的Master节点的数量。
 */
class ScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string 扩容的时间单位。取值范围：
<li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li>
<li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     */
    public $TimeUnit;

    /**
     * @var integer 扩容的时长。结合TimeUnit一起使用。
<li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li>
<li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
     */
    public $TimeSpan;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 实例计费模式。取值范围：
<li>0：表示按量计费。</li>
<li>1：表示包年包月。</li>
     */
    public $PayMode;

    /**
     * @var string 客户端Token。
     */
    public $ClientToken;

    /**
     * @var array 引导操作脚本设置。
     */
    public $PreExecutedFileSettings;

    /**
     * @var integer 扩容的Task节点数量。
     */
    public $TaskCount;

    /**
     * @var integer 扩容的Core节点数量。
     */
    public $CoreCount;

    /**
     * @var array 扩容时不需要安装的进程。
     */
    public $UnNecessaryNodeList;

    /**
     * @var integer 扩容的Router节点数量。
     */
    public $RouterCount;

    /**
     * @var array 部署的服务。
<li>SoftDeployInfo和ServiceNodeInfo是同组参数，和UnNecessaryNodeList参数互斥。</li>
<li>建议使用SoftDeployInfo和ServiceNodeInfo组合。</li>
     */
    public $SoftDeployInfo;

    /**
     * @var array 启动的进程。
     */
    public $ServiceNodeInfo;

    /**
     * @var array 分散置放群组ID列表，当前仅支持指定一个。
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array 扩容节点绑定标签列表。
     */
    public $Tags;

    /**
     * @var string 扩容所选资源类型，可选范围为"host","pod"，host为普通的CVM资源，Pod为TKE集群提供的资源
     */
    public $HardwareResourceType;

    /**
     * @var PodSpec 使用Pod资源扩容时，指定的Pod规格以及来源等信息
     */
    public $PodSpec;

    /**
     * @var string 使用clickhouse集群扩容时，选择的机器分组名称
     */
    public $ClickHouseClusterName;

    /**
     * @var string 使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组
     */
    public $ClickHouseClusterType;

    /**
     * @var string 规则扩容指定 yarn node label
     */
    public $YarnNodeLabel;

    /**
     * @var PodParameter POD自定义权限和自定义参数
     */
    public $PodParameter;

    /**
     * @var integer 扩容的Master节点的数量。
     */
    public $MasterCount;

    /**
     * @param string $TimeUnit 扩容的时间单位。取值范围：
<li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li>
<li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     * @param integer $TimeSpan 扩容的时长。结合TimeUnit一起使用。
<li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li>
<li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
     * @param string $InstanceId 实例ID。
     * @param integer $PayMode 实例计费模式。取值范围：
<li>0：表示按量计费。</li>
<li>1：表示包年包月。</li>
     * @param string $ClientToken 客户端Token。
     * @param array $PreExecutedFileSettings 引导操作脚本设置。
     * @param integer $TaskCount 扩容的Task节点数量。
     * @param integer $CoreCount 扩容的Core节点数量。
     * @param array $UnNecessaryNodeList 扩容时不需要安装的进程。
     * @param integer $RouterCount 扩容的Router节点数量。
     * @param array $SoftDeployInfo 部署的服务。
<li>SoftDeployInfo和ServiceNodeInfo是同组参数，和UnNecessaryNodeList参数互斥。</li>
<li>建议使用SoftDeployInfo和ServiceNodeInfo组合。</li>
     * @param array $ServiceNodeInfo 启动的进程。
     * @param array $DisasterRecoverGroupIds 分散置放群组ID列表，当前仅支持指定一个。
     * @param array $Tags 扩容节点绑定标签列表。
     * @param string $HardwareResourceType 扩容所选资源类型，可选范围为"host","pod"，host为普通的CVM资源，Pod为TKE集群提供的资源
     * @param PodSpec $PodSpec 使用Pod资源扩容时，指定的Pod规格以及来源等信息
     * @param string $ClickHouseClusterName 使用clickhouse集群扩容时，选择的机器分组名称
     * @param string $ClickHouseClusterType 使用clickhouse集群扩容时，选择的机器分组类型。new为新增，old为选择旧分组
     * @param string $YarnNodeLabel 规则扩容指定 yarn node label
     * @param PodParameter $PodParameter POD自定义权限和自定义参数
     * @param integer $MasterCount 扩容的Master节点的数量。
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSettings();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("UnNecessaryNodeList",$param) and $param["UnNecessaryNodeList"] !== null) {
            $this->UnNecessaryNodeList = $param["UnNecessaryNodeList"];
        }

        if (array_key_exists("RouterCount",$param) and $param["RouterCount"] !== null) {
            $this->RouterCount = $param["RouterCount"];
        }

        if (array_key_exists("SoftDeployInfo",$param) and $param["SoftDeployInfo"] !== null) {
            $this->SoftDeployInfo = $param["SoftDeployInfo"];
        }

        if (array_key_exists("ServiceNodeInfo",$param) and $param["ServiceNodeInfo"] !== null) {
            $this->ServiceNodeInfo = $param["ServiceNodeInfo"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HardwareResourceType",$param) and $param["HardwareResourceType"] !== null) {
            $this->HardwareResourceType = $param["HardwareResourceType"];
        }

        if (array_key_exists("PodSpec",$param) and $param["PodSpec"] !== null) {
            $this->PodSpec = new PodSpec();
            $this->PodSpec->deserialize($param["PodSpec"]);
        }

        if (array_key_exists("ClickHouseClusterName",$param) and $param["ClickHouseClusterName"] !== null) {
            $this->ClickHouseClusterName = $param["ClickHouseClusterName"];
        }

        if (array_key_exists("ClickHouseClusterType",$param) and $param["ClickHouseClusterType"] !== null) {
            $this->ClickHouseClusterType = $param["ClickHouseClusterType"];
        }

        if (array_key_exists("YarnNodeLabel",$param) and $param["YarnNodeLabel"] !== null) {
            $this->YarnNodeLabel = $param["YarnNodeLabel"];
        }

        if (array_key_exists("PodParameter",$param) and $param["PodParameter"] !== null) {
            $this->PodParameter = new PodParameter();
            $this->PodParameter->deserialize($param["PodParameter"]);
        }

        if (array_key_exists("MasterCount",$param) and $param["MasterCount"] !== null) {
            $this->MasterCount = $param["MasterCount"];
        }
    }
}
