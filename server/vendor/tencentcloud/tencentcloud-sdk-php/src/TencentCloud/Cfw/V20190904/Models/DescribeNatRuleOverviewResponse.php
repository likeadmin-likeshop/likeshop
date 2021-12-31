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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatRuleOverview返回参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method array getEipList() 获取弹性IP列表
 * @method void setEipList(array $EipList) 设置弹性IP列表
 * @method integer getDnatNum() 获取端口转发规则数量
 * @method void setDnatNum(integer $DnatNum) 设置端口转发规则数量
 * @method integer getTotalNum() 获取访问控制规则总数
 * @method void setTotalNum(integer $TotalNum) 设置访问控制规则总数
 * @method integer getRemainNum() 获取访问控制规则剩余配额
 * @method void setRemainNum(integer $RemainNum) 设置访问控制规则剩余配额
 * @method integer getBlockNum() 获取阻断规则条数
 * @method void setBlockNum(integer $BlockNum) 设置阻断规则条数
 * @method integer getEnableNum() 获取启用规则条数
 * @method void setEnableNum(integer $EnableNum) 设置启用规则条数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNatRuleOverviewResponse extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var array 弹性IP列表
     */
    public $EipList;

    /**
     * @var integer 端口转发规则数量
     */
    public $DnatNum;

    /**
     * @var integer 访问控制规则总数
     */
    public $TotalNum;

    /**
     * @var integer 访问控制规则剩余配额
     */
    public $RemainNum;

    /**
     * @var integer 阻断规则条数
     */
    public $BlockNum;

    /**
     * @var integer 启用规则条数
     */
    public $EnableNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param array $EipList 弹性IP列表
     * @param integer $DnatNum 端口转发规则数量
     * @param integer $TotalNum 访问控制规则总数
     * @param integer $RemainNum 访问控制规则剩余配额
     * @param integer $BlockNum 阻断规则条数
     * @param integer $EnableNum 启用规则条数
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("EipList",$param) and $param["EipList"] !== null) {
            $this->EipList = $param["EipList"];
        }

        if (array_key_exists("DnatNum",$param) and $param["DnatNum"] !== null) {
            $this->DnatNum = $param["DnatNum"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("RemainNum",$param) and $param["RemainNum"] !== null) {
            $this->RemainNum = $param["RemainNum"];
        }

        if (array_key_exists("BlockNum",$param) and $param["BlockNum"] !== null) {
            $this->BlockNum = $param["BlockNum"];
        }

        if (array_key_exists("EnableNum",$param) and $param["EnableNum"] !== null) {
            $this->EnableNum = $param["EnableNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
