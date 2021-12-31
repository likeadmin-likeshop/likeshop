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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 7层监听器转发规则信息
 *
 * @method string getRuleId() 获取规则信息
 * @method void setRuleId(string $RuleId) 设置规则信息
 * @method string getListenerId() 获取监听器信息
 * @method void setListenerId(string $ListenerId) 设置监听器信息
 * @method string getDomain() 获取规则域名
 * @method void setDomain(string $Domain) 设置规则域名
 * @method string getPath() 获取规则路径
 * @method void setPath(string $Path) 设置规则路径
 * @method string getRealServerType() 获取源站类型
 * @method void setRealServerType(string $RealServerType) 设置源站类型
 * @method string getScheduler() 获取转发源站策略
 * @method void setScheduler(string $Scheduler) 设置转发源站策略
 * @method integer getHealthCheck() 获取是否开启健康检查标志，1表示开启，0表示关闭
 * @method void setHealthCheck(integer $HealthCheck) 设置是否开启健康检查标志，1表示开启，0表示关闭
 * @method integer getRuleStatus() 获取规则状态，0表示运行中，1表示创建中，2表示销毁中，3表示绑定解绑源站中，4表示配置更新中
 * @method void setRuleStatus(integer $RuleStatus) 设置规则状态，0表示运行中，1表示创建中，2表示销毁中，3表示绑定解绑源站中，4表示配置更新中
 * @method RuleCheckParams getCheckParams() 获取健康检查相关参数
 * @method void setCheckParams(RuleCheckParams $CheckParams) 设置健康检查相关参数
 * @method array getRealServerSet() 获取已绑定的源站相关信息
 * @method void setRealServerSet(array $RealServerSet) 设置已绑定的源站相关信息
 * @method integer getBindStatus() 获取源站的服务状态，0表示异常，1表示正常。
未开启健康检查时，该状态始终未正常。
只要有一个源站健康状态为异常时，该状态为异常，具体源站的状态请查看RealServerSet。
 * @method void setBindStatus(integer $BindStatus) 设置源站的服务状态，0表示异常，1表示正常。
未开启健康检查时，该状态始终未正常。
只要有一个源站健康状态为异常时，该状态为异常，具体源站的状态请查看RealServerSet。
 * @method string getForwardHost() 获取通道转发到源站的请求所携带的host，其中default表示直接转发接收到的host。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForwardHost(string $ForwardHost) 设置通道转发到源站的请求所携带的host，其中default表示直接转发接收到的host。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleInfo extends AbstractModel
{
    /**
     * @var string 规则信息
     */
    public $RuleId;

    /**
     * @var string 监听器信息
     */
    public $ListenerId;

    /**
     * @var string 规则域名
     */
    public $Domain;

    /**
     * @var string 规则路径
     */
    public $Path;

    /**
     * @var string 源站类型
     */
    public $RealServerType;

    /**
     * @var string 转发源站策略
     */
    public $Scheduler;

    /**
     * @var integer 是否开启健康检查标志，1表示开启，0表示关闭
     */
    public $HealthCheck;

    /**
     * @var integer 规则状态，0表示运行中，1表示创建中，2表示销毁中，3表示绑定解绑源站中，4表示配置更新中
     */
    public $RuleStatus;

    /**
     * @var RuleCheckParams 健康检查相关参数
     */
    public $CheckParams;

    /**
     * @var array 已绑定的源站相关信息
     */
    public $RealServerSet;

    /**
     * @var integer 源站的服务状态，0表示异常，1表示正常。
未开启健康检查时，该状态始终未正常。
只要有一个源站健康状态为异常时，该状态为异常，具体源站的状态请查看RealServerSet。
     */
    public $BindStatus;

    /**
     * @var string 通道转发到源站的请求所携带的host，其中default表示直接转发接收到的host。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForwardHost;

    /**
     * @param string $RuleId 规则信息
     * @param string $ListenerId 监听器信息
     * @param string $Domain 规则域名
     * @param string $Path 规则路径
     * @param string $RealServerType 源站类型
     * @param string $Scheduler 转发源站策略
     * @param integer $HealthCheck 是否开启健康检查标志，1表示开启，0表示关闭
     * @param integer $RuleStatus 规则状态，0表示运行中，1表示创建中，2表示销毁中，3表示绑定解绑源站中，4表示配置更新中
     * @param RuleCheckParams $CheckParams 健康检查相关参数
     * @param array $RealServerSet 已绑定的源站相关信息
     * @param integer $BindStatus 源站的服务状态，0表示异常，1表示正常。
未开启健康检查时，该状态始终未正常。
只要有一个源站健康状态为异常时，该状态为异常，具体源站的状态请查看RealServerSet。
     * @param string $ForwardHost 通道转发到源站的请求所携带的host，其中default表示直接转发接收到的host。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("CheckParams",$param) and $param["CheckParams"] !== null) {
            $this->CheckParams = new RuleCheckParams();
            $this->CheckParams->deserialize($param["CheckParams"]);
        }

        if (array_key_exists("RealServerSet",$param) and $param["RealServerSet"] !== null) {
            $this->RealServerSet = [];
            foreach ($param["RealServerSet"] as $key => $value){
                $obj = new BindRealServer();
                $obj->deserialize($value);
                array_push($this->RealServerSet, $obj);
            }
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("ForwardHost",$param) and $param["ForwardHost"] !== null) {
            $this->ForwardHost = $param["ForwardHost"];
        }
    }
}
