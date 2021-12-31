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
 * 订单详情
 *
 * @method string getDealName() 获取订单名
 * @method void setDealName(string $DealName) 设置订单名
 * @method string getOwnerUin() 获取所属用户
 * @method void setOwnerUin(string $OwnerUin) 设置所属用户
 * @method integer getCount() 获取订单涉及多少个实例
 * @method void setCount(integer $Count) 设置订单涉及多少个实例
 * @method integer getPayMode() 获取付费模式。1-预付费；0-后付费
 * @method void setPayMode(integer $PayMode) 设置付费模式。1-预付费；0-后付费
 * @method integer getFlowId() 获取异步任务流程ID
 * @method void setFlowId(integer $FlowId) 设置异步任务流程ID
 * @method array getDBInstanceIdSet() 获取实例ID数组
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) 设置实例ID数组
 */
class PgDeal extends AbstractModel
{
    /**
     * @var string 订单名
     */
    public $DealName;

    /**
     * @var string 所属用户
     */
    public $OwnerUin;

    /**
     * @var integer 订单涉及多少个实例
     */
    public $Count;

    /**
     * @var integer 付费模式。1-预付费；0-后付费
     */
    public $PayMode;

    /**
     * @var integer 异步任务流程ID
     */
    public $FlowId;

    /**
     * @var array 实例ID数组
     */
    public $DBInstanceIdSet;

    /**
     * @param string $DealName 订单名
     * @param string $OwnerUin 所属用户
     * @param integer $Count 订单涉及多少个实例
     * @param integer $PayMode 付费模式。1-预付费；0-后付费
     * @param integer $FlowId 异步任务流程ID
     * @param array $DBInstanceIdSet 实例ID数组
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }
    }
}
