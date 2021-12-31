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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器人列表
 *
 * @method string getBotId() 获取机器人ID
 * @method void setBotId(string $BotId) 设置机器人ID
 * @method string getBotName() 获取机器人名称
 * @method void setBotName(string $BotName) 设置机器人名称
 * @method string getBotStatus() 获取机器人状态。0-停用 1-启用 2-待审核
 * @method void setBotStatus(string $BotStatus) 设置机器人状态。0-停用 1-启用 2-待审核
 */
class BotInfo extends AbstractModel
{
    /**
     * @var string 机器人ID
     */
    public $BotId;

    /**
     * @var string 机器人名称
     */
    public $BotName;

    /**
     * @var string 机器人状态。0-停用 1-启用 2-待审核
     */
    public $BotStatus;

    /**
     * @param string $BotId 机器人ID
     * @param string $BotName 机器人名称
     * @param string $BotStatus 机器人状态。0-停用 1-启用 2-待审核
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
        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("BotName",$param) and $param["BotName"] !== null) {
            $this->BotName = $param["BotName"];
        }

        if (array_key_exists("BotStatus",$param) and $param["BotStatus"] !== null) {
            $this->BotStatus = $param["BotStatus"];
        }
    }
}
