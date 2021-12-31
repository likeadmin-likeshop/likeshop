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
 * CreateTopicPolicy请求参数结构体
 *
 * @method string getProductID() 获取产品自身ID
 * @method void setProductID(string $ProductID) 设置产品自身ID
 * @method string getTopicName() 获取Topic名称
 * @method void setTopicName(string $TopicName) 设置Topic名称
 * @method integer getPrivilege() 获取Topic权限，1发布，2订阅，3订阅和发布
 * @method void setPrivilege(integer $Privilege) 设置Topic权限，1发布，2订阅，3订阅和发布
 * @method BrokerSubscribe getBrokerSubscribe() 获取代理订阅信息，网关产品为绑定的子产品创建topic时需要填写，内容为子产品的ID和设备信息。
 * @method void setBrokerSubscribe(BrokerSubscribe $BrokerSubscribe) 设置代理订阅信息，网关产品为绑定的子产品创建topic时需要填写，内容为子产品的ID和设备信息。
 */
class CreateTopicPolicyRequest extends AbstractModel
{
    /**
     * @var string 产品自身ID
     */
    public $ProductID;

    /**
     * @var string Topic名称
     */
    public $TopicName;

    /**
     * @var integer Topic权限，1发布，2订阅，3订阅和发布
     */
    public $Privilege;

    /**
     * @var BrokerSubscribe 代理订阅信息，网关产品为绑定的子产品创建topic时需要填写，内容为子产品的ID和设备信息。
     */
    public $BrokerSubscribe;

    /**
     * @param string $ProductID 产品自身ID
     * @param string $TopicName Topic名称
     * @param integer $Privilege Topic权限，1发布，2订阅，3订阅和发布
     * @param BrokerSubscribe $BrokerSubscribe 代理订阅信息，网关产品为绑定的子产品创建topic时需要填写，内容为子产品的ID和设备信息。
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

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("BrokerSubscribe",$param) and $param["BrokerSubscribe"] !== null) {
            $this->BrokerSubscribe = new BrokerSubscribe();
            $this->BrokerSubscribe->deserialize($param["BrokerSubscribe"]);
        }
    }
}
