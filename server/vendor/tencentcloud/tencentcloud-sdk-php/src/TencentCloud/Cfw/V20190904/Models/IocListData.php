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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 黑白名单IOC列表
 *
 * @method string getIP() 获取待处置IP地址，IP/Domain字段二选一
 * @method void setIP(string $IP) 设置待处置IP地址，IP/Domain字段二选一
 * @method integer getDirection() 获取只能为0或者1   0代表出站 1代表入站
 * @method void setDirection(integer $Direction) 设置只能为0或者1   0代表出站 1代表入站
 * @method string getDomain() 获取待处置域名，IP/Domain字段二选一
 * @method void setDomain(string $Domain) 设置待处置域名，IP/Domain字段二选一
 */
class IocListData extends AbstractModel
{
    /**
     * @var string 待处置IP地址，IP/Domain字段二选一
     */
    public $IP;

    /**
     * @var integer 只能为0或者1   0代表出站 1代表入站
     */
    public $Direction;

    /**
     * @var string 待处置域名，IP/Domain字段二选一
     */
    public $Domain;

    /**
     * @param string $IP 待处置IP地址，IP/Domain字段二选一
     * @param integer $Direction 只能为0或者1   0代表出站 1代表入站
     * @param string $Domain 待处置域名，IP/Domain字段二选一
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
