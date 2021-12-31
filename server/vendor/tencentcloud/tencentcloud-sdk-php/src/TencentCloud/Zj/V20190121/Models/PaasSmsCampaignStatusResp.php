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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拉取活动状态返回
 *
 * @method integer getStatus() 获取0-未发送 1-发送中 2-发送结束 3-发送取消
 * @method void setStatus(integer $Status) 设置0-未发送 1-发送中 2-发送结束 3-发送取消
 */
class PaasSmsCampaignStatusResp extends AbstractModel
{
    /**
     * @var integer 0-未发送 1-发送中 2-发送结束 3-发送取消
     */
    public $Status;

    /**
     * @param integer $Status 0-未发送 1-发送中 2-发送结束 3-发送取消
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
