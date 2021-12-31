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
namespace TencentCloud\Sslpod\V20190605\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知额度限制信息
 *
 * @method string getType() 获取通知类型
 * @method void setType(string $Type) 设置通知类型
 * @method integer getTotal() 获取总量
 * @method void setTotal(integer $Total) 设置总量
 * @method integer getSent() 获取已发送
 * @method void setSent(integer $Sent) 设置已发送
 */
class LimitInfo extends AbstractModel
{
    /**
     * @var string 通知类型
     */
    public $Type;

    /**
     * @var integer 总量
     */
    public $Total;

    /**
     * @var integer 已发送
     */
    public $Sent;

    /**
     * @param string $Type 通知类型
     * @param integer $Total 总量
     * @param integer $Sent 已发送
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Sent",$param) and $param["Sent"] !== null) {
            $this->Sent = $param["Sent"];
        }
    }
}
