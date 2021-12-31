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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTopicPolicy请求参数结构体
 *
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getTopicName() 获取更新前Topic名
 * @method void setTopicName(string $TopicName) 设置更新前Topic名
 * @method string getNewTopicName() 获取更新后Topic名
 * @method void setNewTopicName(string $NewTopicName) 设置更新后Topic名
 * @method integer getPrivilege() 获取Topic权限
 * @method void setPrivilege(integer $Privilege) 设置Topic权限
 * @method BrokerSubscribe getBrokerSubscribe() 获取代理订阅信息
 * @method void setBrokerSubscribe(BrokerSubscribe $BrokerSubscribe) 设置代理订阅信息
 */
class UpdateTopicPolicyRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 更新前Topic名
     */
    public $TopicName;

    /**
     * @var string 更新后Topic名
     */
    public $NewTopicName;

    /**
     * @var integer Topic权限
     */
    public $Privilege;

    /**
     * @var BrokerSubscribe 代理订阅信息
     */
    public $BrokerSubscribe;

    /**
     * @param string $ProductID 产品ID
     * @param string $TopicName 更新前Topic名
     * @param string $NewTopicName 更新后Topic名
     * @param integer $Privilege Topic权限
     * @param BrokerSubscribe $BrokerSubscribe 代理订阅信息
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("NewTopicName",$param) and $param["NewTopicName"] !== null) {
            $this->NewTopicName = $param["NewTopicName"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("BrokerSubscribe",$param) and $param["BrokerSubscribe"] !== null) {
            $this->BrokerSubscribe = new BrokerSubscribe();
            $this->BrokerSubscribe->deserialize($param["BrokerSubscribe"]);
        }
    }
}
