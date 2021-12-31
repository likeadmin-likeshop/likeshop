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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志详情
 *
 * @method string getDate() 获取时间
 * @method void setDate(string $Date) 设置时间
 * @method string getOperatorUin() 获取操作人uin
 * @method void setOperatorUin(string $OperatorUin) 设置操作人uin
 * @method string getContent() 获取日志内容
 * @method void setContent(string $Content) 设置日志内容
 */
class AuditLogInfo extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Date;

    /**
     * @var string 操作人uin
     */
    public $OperatorUin;

    /**
     * @var string 日志内容
     */
    public $Content;

    /**
     * @param string $Date 时间
     * @param string $OperatorUin 操作人uin
     * @param string $Content 日志内容
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
