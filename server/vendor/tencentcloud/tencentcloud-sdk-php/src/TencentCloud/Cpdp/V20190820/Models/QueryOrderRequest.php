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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryOrder请求参数结构体
 *
 * @method string getMidasAppId() 获取聚鑫分配的支付主 MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主 MidasAppId
 * @method string getUserId() 获取用户ID，长度不小于5位， 仅支持字母和数字的组合
 * @method void setUserId(string $UserId) 设置用户ID，长度不小于5位， 仅支持字母和数字的组合
 * @method string getType() 获取type=by_order根据订单号 查订单；
type=by_user根据用户id 查订单 。
 * @method void setType(string $Type) 设置type=by_order根据订单号 查订单；
type=by_user根据用户id 查订单 。
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getMidasSignature() 获取按照聚鑫安全密钥计算的签名
 * @method void setMidasSignature(string $MidasSignature) 设置按照聚鑫安全密钥计算的签名
 * @method integer getCount() 获取每页返回的记录数。根据用户 号码查询订单列表时需要传。 用于分页展示。Type=by_order时必填
 * @method void setCount(integer $Count) 设置每页返回的记录数。根据用户 号码查询订单列表时需要传。 用于分页展示。Type=by_order时必填
 * @method integer getOffset() 获取记录数偏移量，默认从0开 始。根据用户号码查询订单列 表时需要传。用于分页展示。Type=by_order时必填
 * @method void setOffset(integer $Offset) 设置记录数偏移量，默认从0开 始。根据用户号码查询订单列 表时需要传。用于分页展示。Type=by_order时必填
 * @method string getStartTime() 获取查询开始时间，Unix时间戳。Type=by_order时必填
 * @method void setStartTime(string $StartTime) 设置查询开始时间，Unix时间戳。Type=by_order时必填
 * @method string getEndTime() 获取查询结束时间，Unix时间戳。Type=by_order时必填
 * @method void setEndTime(string $EndTime) 设置查询结束时间，Unix时间戳。Type=by_order时必填
 * @method string getOutTradeNo() 获取业务订单号，OutTradeNo与 TransactionId不能同时为 空，都传优先使用 OutTradeNo
 * @method void setOutTradeNo(string $OutTradeNo) 设置业务订单号，OutTradeNo与 TransactionId不能同时为 空，都传优先使用 OutTradeNo
 * @method string getTransactionId() 获取聚鑫订单号，OutTradeNo与 TransactionId不能同时为 空，都传优先使用 OutTradeNo
 * @method void setTransactionId(string $TransactionId) 设置聚鑫订单号，OutTradeNo与 TransactionId不能同时为 空，都传优先使用 OutTradeNo
 * @method string getMidasEnvironment() 获取环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 */
class QueryOrderRequest extends AbstractModel
{
    /**
     * @var string 聚鑫分配的支付主 MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 用户ID，长度不小于5位， 仅支持字母和数字的组合
     */
    public $UserId;

    /**
     * @var string type=by_order根据订单号 查订单；
type=by_user根据用户id 查订单 。
     */
    public $Type;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string 按照聚鑫安全密钥计算的签名
     */
    public $MidasSignature;

    /**
     * @var integer 每页返回的记录数。根据用户 号码查询订单列表时需要传。 用于分页展示。Type=by_order时必填
     */
    public $Count;

    /**
     * @var integer 记录数偏移量，默认从0开 始。根据用户号码查询订单列 表时需要传。用于分页展示。Type=by_order时必填
     */
    public $Offset;

    /**
     * @var string 查询开始时间，Unix时间戳。Type=by_order时必填
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，Unix时间戳。Type=by_order时必填
     */
    public $EndTime;

    /**
     * @var string 业务订单号，OutTradeNo与 TransactionId不能同时为 空，都传优先使用 OutTradeNo
     */
    public $OutTradeNo;

    /**
     * @var string 聚鑫订单号，OutTradeNo与 TransactionId不能同时为 空，都传优先使用 OutTradeNo
     */
    public $TransactionId;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @param string $MidasAppId 聚鑫分配的支付主 MidasAppId
     * @param string $UserId 用户ID，长度不小于5位， 仅支持字母和数字的组合
     * @param string $Type type=by_order根据订单号 查订单；
type=by_user根据用户id 查订单 。
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $MidasSignature 按照聚鑫安全密钥计算的签名
     * @param integer $Count 每页返回的记录数。根据用户 号码查询订单列表时需要传。 用于分页展示。Type=by_order时必填
     * @param integer $Offset 记录数偏移量，默认从0开 始。根据用户号码查询订单列 表时需要传。用于分页展示。Type=by_order时必填
     * @param string $StartTime 查询开始时间，Unix时间戳。Type=by_order时必填
     * @param string $EndTime 查询结束时间，Unix时间戳。Type=by_order时必填
     * @param string $OutTradeNo 业务订单号，OutTradeNo与 TransactionId不能同时为 空，都传优先使用 OutTradeNo
     * @param string $TransactionId 聚鑫订单号，OutTradeNo与 TransactionId不能同时为 空，都传优先使用 OutTradeNo
     * @param string $MidasEnvironment 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
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
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}
