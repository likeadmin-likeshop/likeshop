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
namespace TencentCloud\Eis\V20200715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 连接器操作
 *
 * @method string getOperationName() 获取连接器操作名称
 * @method void setOperationName(string $OperationName) 设置连接器操作名称
 * @method string getDisplayName() 获取连接器展示名称
 * @method void setDisplayName(string $DisplayName) 设置连接器展示名称
 * @method boolean getIsTrigger() 获取操作是否为触发器
 * @method void setIsTrigger(boolean $IsTrigger) 设置操作是否为触发器
 */
class EisConnectionOperation extends AbstractModel
{
    /**
     * @var string 连接器操作名称
     */
    public $OperationName;

    /**
     * @var string 连接器展示名称
     */
    public $DisplayName;

    /**
     * @var boolean 操作是否为触发器
     */
    public $IsTrigger;

    /**
     * @param string $OperationName 连接器操作名称
     * @param string $DisplayName 连接器展示名称
     * @param boolean $IsTrigger 操作是否为触发器
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
        if (array_key_exists("OperationName",$param) and $param["OperationName"] !== null) {
            $this->OperationName = $param["OperationName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("IsTrigger",$param) and $param["IsTrigger"] !== null) {
            $this->IsTrigger = $param["IsTrigger"];
        }
    }
}
