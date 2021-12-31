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
 * 安全组规则
 *
 * @method string getCreateTime() 获取创建时间，时间格式：yyyy-mm-dd hh:mm:ss。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，时间格式：yyyy-mm-dd hh:mm:ss。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method string getSecurityGroupId() 获取安全组ID。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组ID。
 * @method string getSecurityGroupName() 获取安全组名称。
 * @method void setSecurityGroupName(string $SecurityGroupName) 设置安全组名称。
 * @method string getSecurityGroupRemark() 获取安全组备注。
 * @method void setSecurityGroupRemark(string $SecurityGroupRemark) 设置安全组备注。
 * @method array getOutbound() 获取出站规则。
 * @method void setOutbound(array $Outbound) 设置出站规则。
 * @method array getInbound() 获取入站规则。
 * @method void setInbound(array $Inbound) 设置入站规则。
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var string 创建时间，时间格式：yyyy-mm-dd hh:mm:ss。
     */
    public $CreateTime;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 安全组ID。
     */
    public $SecurityGroupId;

    /**
     * @var string 安全组名称。
     */
    public $SecurityGroupName;

    /**
     * @var string 安全组备注。
     */
    public $SecurityGroupRemark;

    /**
     * @var array 出站规则。
     */
    public $Outbound;

    /**
     * @var array 入站规则。
     */
    public $Inbound;

    /**
     * @param string $CreateTime 创建时间，时间格式：yyyy-mm-dd hh:mm:ss。
     * @param integer $ProjectId 项目ID。
     * @param string $SecurityGroupId 安全组ID。
     * @param string $SecurityGroupName 安全组名称。
     * @param string $SecurityGroupRemark 安全组备注。
     * @param array $Outbound 出站规则。
     * @param array $Inbound 入站规则。
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("Outbound",$param) and $param["Outbound"] !== null) {
            $this->Outbound = [];
            foreach ($param["Outbound"] as $key => $value){
                $obj = new Outbound();
                $obj->deserialize($value);
                array_push($this->Outbound, $obj);
            }
        }

        if (array_key_exists("Inbound",$param) and $param["Inbound"] !== null) {
            $this->Inbound = [];
            foreach ($param["Inbound"] as $key => $value){
                $obj = new Inbound();
                $obj->deserialize($value);
                array_push($this->Inbound, $obj);
            }
        }
    }
}
