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
 * DeletePublishSubscribe请求参数结构体
 *
 * @method integer getPublishSubscribeId() 获取发布订阅ID，可通过DescribePublishSubscribe接口获得
 * @method void setPublishSubscribeId(integer $PublishSubscribeId) 设置发布订阅ID，可通过DescribePublishSubscribe接口获得
 * @method array getDatabaseTupleSet() 获取待删除的数据库的订阅发布关系集合
 * @method void setDatabaseTupleSet(array $DatabaseTupleSet) 设置待删除的数据库的订阅发布关系集合
 */
class DeletePublishSubscribeRequest extends AbstractModel
{
    /**
     * @var integer 发布订阅ID，可通过DescribePublishSubscribe接口获得
     */
    public $PublishSubscribeId;

    /**
     * @var array 待删除的数据库的订阅发布关系集合
     */
    public $DatabaseTupleSet;

    /**
     * @param integer $PublishSubscribeId 发布订阅ID，可通过DescribePublishSubscribe接口获得
     * @param array $DatabaseTupleSet 待删除的数据库的订阅发布关系集合
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
        if (array_key_exists("PublishSubscribeId",$param) and $param["PublishSubscribeId"] !== null) {
            $this->PublishSubscribeId = $param["PublishSubscribeId"];
        }

        if (array_key_exists("DatabaseTupleSet",$param) and $param["DatabaseTupleSet"] !== null) {
            $this->DatabaseTupleSet = [];
            foreach ($param["DatabaseTupleSet"] as $key => $value){
                $obj = new DatabaseTuple();
                $obj->deserialize($value);
                array_push($this->DatabaseTupleSet, $obj);
            }
        }
    }
}
