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
 * ModifyPublishSubscribeName请求参数结构体
 *
 * @method integer getPublishSubscribeId() 获取发布订阅ID
 * @method void setPublishSubscribeId(integer $PublishSubscribeId) 设置发布订阅ID
 * @method string getPublishSubscribeName() 获取待修改的发布订阅名称
 * @method void setPublishSubscribeName(string $PublishSubscribeName) 设置待修改的发布订阅名称
 */
class ModifyPublishSubscribeNameRequest extends AbstractModel
{
    /**
     * @var integer 发布订阅ID
     */
    public $PublishSubscribeId;

    /**
     * @var string 待修改的发布订阅名称
     */
    public $PublishSubscribeName;

    /**
     * @param integer $PublishSubscribeId 发布订阅ID
     * @param string $PublishSubscribeName 待修改的发布订阅名称
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

        if (array_key_exists("PublishSubscribeName",$param) and $param["PublishSubscribeName"] !== null) {
            $this->PublishSubscribeName = $param["PublishSubscribeName"];
        }
    }
}
