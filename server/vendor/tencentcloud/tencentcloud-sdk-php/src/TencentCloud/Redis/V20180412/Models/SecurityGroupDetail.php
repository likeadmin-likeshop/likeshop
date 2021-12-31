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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组详情
 *
 * @method integer getProjectId() 获取项目Id
 * @method void setProjectId(integer $ProjectId) 设置项目Id
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getSecurityGroupId() 获取安全组Id
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组Id
 * @method string getSecurityGroupName() 获取安全组名称
 * @method void setSecurityGroupName(string $SecurityGroupName) 设置安全组名称
 * @method string getSecurityGroupRemark() 获取安全组标记
 * @method void setSecurityGroupRemark(string $SecurityGroupRemark) 设置安全组标记
 * @method array getInboundRule() 获取安全组入站规则
 * @method void setInboundRule(array $InboundRule) 设置安全组入站规则
 * @method array getOutboundRule() 获取安全组出站规则
 * @method void setOutboundRule(array $OutboundRule) 设置安全组出站规则
 */
class SecurityGroupDetail extends AbstractModel
{
    /**
     * @var integer 项目Id
     */
    public $ProjectId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 安全组Id
     */
    public $SecurityGroupId;

    /**
     * @var string 安全组名称
     */
    public $SecurityGroupName;

    /**
     * @var string 安全组标记
     */
    public $SecurityGroupRemark;

    /**
     * @var array 安全组入站规则
     */
    public $InboundRule;

    /**
     * @var array 安全组出站规则
     */
    public $OutboundRule;

    /**
     * @param integer $ProjectId 项目Id
     * @param string $CreateTime 创建时间
     * @param string $SecurityGroupId 安全组Id
     * @param string $SecurityGroupName 安全组名称
     * @param string $SecurityGroupRemark 安全组标记
     * @param array $InboundRule 安全组入站规则
     * @param array $OutboundRule 安全组出站规则
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            $this->SecurityGroupName = $param["SecurityGroupName"];
        }

        if (array_key_exists("SecurityGroupRemark",$param) and $param["SecurityGroupRemark"] !== null) {
            $this->SecurityGroupRemark = $param["SecurityGroupRemark"];
        }

        if (array_key_exists("InboundRule",$param) and $param["InboundRule"] !== null) {
            $this->InboundRule = [];
            foreach ($param["InboundRule"] as $key => $value){
                $obj = new SecurityGroupsInboundAndOutbound();
                $obj->deserialize($value);
                array_push($this->InboundRule, $obj);
            }
        }

        if (array_key_exists("OutboundRule",$param) and $param["OutboundRule"] !== null) {
            $this->OutboundRule = [];
            foreach ($param["OutboundRule"] as $key => $value){
                $obj = new SecurityGroupsInboundAndOutbound();
                $obj->deserialize($value);
                array_push($this->OutboundRule, $obj);
            }
        }
    }
}
