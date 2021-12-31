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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublishSubscribe请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-j8kv137v
 * @method string getPubOrSubInstanceId() 获取订阅/发布实例ID，与InstanceId是发布实例还是订阅实例有关；当InstanceId为发布实例时，本字段按照订阅实例ID做筛选；当InstanceId为订阅实例时，本字段按照发布实例ID做筛选；
 * @method void setPubOrSubInstanceId(string $PubOrSubInstanceId) 设置订阅/发布实例ID，与InstanceId是发布实例还是订阅实例有关；当InstanceId为发布实例时，本字段按照订阅实例ID做筛选；当InstanceId为订阅实例时，本字段按照发布实例ID做筛选；
 * @method string getPubOrSubInstanceIp() 获取订阅/发布实例内网IP，与InstanceId是发布实例还是订阅实例有关；当InstanceId为发布实例时，本字段按照订阅实例内网IP做筛选；当InstanceId为订阅实例时，本字段按照发布实例内网IP做筛选；
 * @method void setPubOrSubInstanceIp(string $PubOrSubInstanceIp) 设置订阅/发布实例内网IP，与InstanceId是发布实例还是订阅实例有关；当InstanceId为发布实例时，本字段按照订阅实例内网IP做筛选；当InstanceId为订阅实例时，本字段按照发布实例内网IP做筛选；
 * @method integer getPublishSubscribeId() 获取订阅发布ID，用于筛选
 * @method void setPublishSubscribeId(integer $PublishSubscribeId) 设置订阅发布ID，用于筛选
 * @method string getPublishSubscribeName() 获取订阅发布名字，用于筛选
 * @method void setPublishSubscribeName(string $PublishSubscribeName) 设置订阅发布名字，用于筛选
 * @method string getPublishDBName() 获取发布库名字，用于筛选
 * @method void setPublishDBName(string $PublishDBName) 设置发布库名字，用于筛选
 * @method string getSubscribeDBName() 获取订阅库名字，用于筛选
 * @method void setSubscribeDBName(string $SubscribeDBName) 设置订阅库名字，用于筛选
 * @method integer getOffset() 获取分页，页数
 * @method void setOffset(integer $Offset) 设置分页，页数
 * @method integer getLimit() 获取分页，页大小
 * @method void setLimit(integer $Limit) 设置分页，页大小
 */
class DescribePublishSubscribeRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var string 订阅/发布实例ID，与InstanceId是发布实例还是订阅实例有关；当InstanceId为发布实例时，本字段按照订阅实例ID做筛选；当InstanceId为订阅实例时，本字段按照发布实例ID做筛选；
     */
    public $PubOrSubInstanceId;

    /**
     * @var string 订阅/发布实例内网IP，与InstanceId是发布实例还是订阅实例有关；当InstanceId为发布实例时，本字段按照订阅实例内网IP做筛选；当InstanceId为订阅实例时，本字段按照发布实例内网IP做筛选；
     */
    public $PubOrSubInstanceIp;

    /**
     * @var integer 订阅发布ID，用于筛选
     */
    public $PublishSubscribeId;

    /**
     * @var string 订阅发布名字，用于筛选
     */
    public $PublishSubscribeName;

    /**
     * @var string 发布库名字，用于筛选
     */
    public $PublishDBName;

    /**
     * @var string 订阅库名字，用于筛选
     */
    public $SubscribeDBName;

    /**
     * @var integer 分页，页数
     */
    public $Offset;

    /**
     * @var integer 分页，页大小
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例ID，形如mssql-j8kv137v
     * @param string $PubOrSubInstanceId 订阅/发布实例ID，与InstanceId是发布实例还是订阅实例有关；当InstanceId为发布实例时，本字段按照订阅实例ID做筛选；当InstanceId为订阅实例时，本字段按照发布实例ID做筛选；
     * @param string $PubOrSubInstanceIp 订阅/发布实例内网IP，与InstanceId是发布实例还是订阅实例有关；当InstanceId为发布实例时，本字段按照订阅实例内网IP做筛选；当InstanceId为订阅实例时，本字段按照发布实例内网IP做筛选；
     * @param integer $PublishSubscribeId 订阅发布ID，用于筛选
     * @param string $PublishSubscribeName 订阅发布名字，用于筛选
     * @param string $PublishDBName 发布库名字，用于筛选
     * @param string $SubscribeDBName 订阅库名字，用于筛选
     * @param integer $Offset 分页，页数
     * @param integer $Limit 分页，页大小
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

        if (array_key_exists("PubOrSubInstanceId",$param) and $param["PubOrSubInstanceId"] !== null) {
            $this->PubOrSubInstanceId = $param["PubOrSubInstanceId"];
        }

        if (array_key_exists("PubOrSubInstanceIp",$param) and $param["PubOrSubInstanceIp"] !== null) {
            $this->PubOrSubInstanceIp = $param["PubOrSubInstanceIp"];
        }

        if (array_key_exists("PublishSubscribeId",$param) and $param["PublishSubscribeId"] !== null) {
            $this->PublishSubscribeId = $param["PublishSubscribeId"];
        }

        if (array_key_exists("PublishSubscribeName",$param) and $param["PublishSubscribeName"] !== null) {
            $this->PublishSubscribeName = $param["PublishSubscribeName"];
        }

        if (array_key_exists("PublishDBName",$param) and $param["PublishDBName"] !== null) {
            $this->PublishDBName = $param["PublishDBName"];
        }

        if (array_key_exists("SubscribeDBName",$param) and $param["SubscribeDBName"] !== null) {
            $this->SubscribeDBName = $param["SubscribeDBName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
