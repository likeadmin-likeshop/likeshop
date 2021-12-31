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
 * 该数据结构表示具有发布订阅关系的两个数据库。
 *
 * @method string getPublishDatabase() 获取发布数据库名称
 * @method void setPublishDatabase(string $PublishDatabase) 设置发布数据库名称
 * @method string getSubscribeDatabase() 获取订阅数据库名称
 * @method void setSubscribeDatabase(string $SubscribeDatabase) 设置订阅数据库名称
 */
class DatabaseTuple extends AbstractModel
{
    /**
     * @var string 发布数据库名称
     */
    public $PublishDatabase;

    /**
     * @var string 订阅数据库名称
     */
    public $SubscribeDatabase;

    /**
     * @param string $PublishDatabase 发布数据库名称
     * @param string $SubscribeDatabase 订阅数据库名称
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
        if (array_key_exists("PublishDatabase",$param) and $param["PublishDatabase"] !== null) {
            $this->PublishDatabase = $param["PublishDatabase"];
        }

        if (array_key_exists("SubscribeDatabase",$param) and $param["SubscribeDatabase"] !== null) {
            $this->SubscribeDatabase = $param["SubscribeDatabase"];
        }
    }
}
