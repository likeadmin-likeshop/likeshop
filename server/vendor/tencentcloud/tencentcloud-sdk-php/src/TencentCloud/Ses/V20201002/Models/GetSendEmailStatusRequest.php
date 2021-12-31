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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSendEmailStatus请求参数结构体
 *
 * @method string getRequestDate() 获取发送的日期，必填。仅支持查询某个日期，不支持范围查询。
 * @method void setRequestDate(string $RequestDate) 设置发送的日期，必填。仅支持查询某个日期，不支持范围查询。
 * @method integer getOffset() 获取偏移量。默认为0
 * @method void setOffset(integer $Offset) 设置偏移量。默认为0
 * @method integer getLimit() 获取拉取最大条数，最多 100。
 * @method void setLimit(integer $Limit) 设置拉取最大条数，最多 100。
 * @method string getMessageId() 获取SendMail接口返回的MessageId字段。
 * @method void setMessageId(string $MessageId) 设置SendMail接口返回的MessageId字段。
 * @method string getToEmailAddress() 获取收件人邮箱。
 * @method void setToEmailAddress(string $ToEmailAddress) 设置收件人邮箱。
 */
class GetSendEmailStatusRequest extends AbstractModel
{
    /**
     * @var string 发送的日期，必填。仅支持查询某个日期，不支持范围查询。
     */
    public $RequestDate;

    /**
     * @var integer 偏移量。默认为0
     */
    public $Offset;

    /**
     * @var integer 拉取最大条数，最多 100。
     */
    public $Limit;

    /**
     * @var string SendMail接口返回的MessageId字段。
     */
    public $MessageId;

    /**
     * @var string 收件人邮箱。
     */
    public $ToEmailAddress;

    /**
     * @param string $RequestDate 发送的日期，必填。仅支持查询某个日期，不支持范围查询。
     * @param integer $Offset 偏移量。默认为0
     * @param integer $Limit 拉取最大条数，最多 100。
     * @param string $MessageId SendMail接口返回的MessageId字段。
     * @param string $ToEmailAddress 收件人邮箱。
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
        if (array_key_exists("RequestDate",$param) and $param["RequestDate"] !== null) {
            $this->RequestDate = $param["RequestDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ToEmailAddress",$param) and $param["ToEmailAddress"] !== null) {
            $this->ToEmailAddress = $param["ToEmailAddress"];
        }
    }
}
