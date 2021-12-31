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
 * 描述邮件发送状态
 *
 * @method string getMessageId() 获取SendEmail返回的MessageId
 * @method void setMessageId(string $MessageId) 设置SendEmail返回的MessageId
 * @method string getToEmailAddress() 获取收件人邮箱
 * @method void setToEmailAddress(string $ToEmailAddress) 设置收件人邮箱
 * @method string getFromEmailAddress() 获取发件人邮箱
 * @method void setFromEmailAddress(string $FromEmailAddress) 设置发件人邮箱
 * @method integer getSendStatus() 获取腾讯云处理状态
0: 处理成功
1001: 内部系统异常
1002: 内部系统异常
1003: 内部系统异常
1003: 内部系统异常
1004: 发信超时
1005: 内部系统异常
1006: 触发频率控制，短时间内对同一地址发送过多邮件
1007: 邮件地址在黑名单中
1009: 内部系统异常
1010: 超出了每日发送限制
1011: 无发送自定义内容权限，必须使用模板
2001: 找不到相关记录
3007: 模板ID无效或者不可用
3008: 模板状态异常
3009: 无权限使用该模板
3010: TemplateData字段格式不正确 
3014: 发件域名没有经过认证，无法发送
3020: 收件方邮箱类型在黑名单
3024: 邮箱地址格式预检查失败
3030: 退信率过高，临时限制发送
3033: 余额不足，账号欠费等
 * @method void setSendStatus(integer $SendStatus) 设置腾讯云处理状态
0: 处理成功
1001: 内部系统异常
1002: 内部系统异常
1003: 内部系统异常
1003: 内部系统异常
1004: 发信超时
1005: 内部系统异常
1006: 触发频率控制，短时间内对同一地址发送过多邮件
1007: 邮件地址在黑名单中
1009: 内部系统异常
1010: 超出了每日发送限制
1011: 无发送自定义内容权限，必须使用模板
2001: 找不到相关记录
3007: 模板ID无效或者不可用
3008: 模板状态异常
3009: 无权限使用该模板
3010: TemplateData字段格式不正确 
3014: 发件域名没有经过认证，无法发送
3020: 收件方邮箱类型在黑名单
3024: 邮箱地址格式预检查失败
3030: 退信率过高，临时限制发送
3033: 余额不足，账号欠费等
 * @method integer getDeliverStatus() 获取收件方处理状态
0: 请求成功被腾讯云接受，进入发送队列
1: 邮件递送成功，DeliverTime表示递送成功的时间
2: 邮件因某种原因被丢弃，DeliverMessage表示丢弃原因
3: 收件方ESP拒信，一般原因为邮箱地址不存在，或其它原因
8: 邮件被ESP因某些原因延迟递送，DeliverMessage表示延迟原因
 * @method void setDeliverStatus(integer $DeliverStatus) 设置收件方处理状态
0: 请求成功被腾讯云接受，进入发送队列
1: 邮件递送成功，DeliverTime表示递送成功的时间
2: 邮件因某种原因被丢弃，DeliverMessage表示丢弃原因
3: 收件方ESP拒信，一般原因为邮箱地址不存在，或其它原因
8: 邮件被ESP因某些原因延迟递送，DeliverMessage表示延迟原因
 * @method string getDeliverMessage() 获取收件方处理状态描述
 * @method void setDeliverMessage(string $DeliverMessage) 设置收件方处理状态描述
 * @method integer getRequestTime() 获取请求到达腾讯云时间戳
 * @method void setRequestTime(integer $RequestTime) 设置请求到达腾讯云时间戳
 * @method integer getDeliverTime() 获取腾讯云执行递送时间戳
 * @method void setDeliverTime(integer $DeliverTime) 设置腾讯云执行递送时间戳
 * @method boolean getUserOpened() 获取用户是否打开该邮件
 * @method void setUserOpened(boolean $UserOpened) 设置用户是否打开该邮件
 * @method boolean getUserClicked() 获取用户是否点击该邮件中的链接
 * @method void setUserClicked(boolean $UserClicked) 设置用户是否点击该邮件中的链接
 * @method boolean getUserUnsubscribed() 获取用户是否取消该发送者的订阅
 * @method void setUserUnsubscribed(boolean $UserUnsubscribed) 设置用户是否取消该发送者的订阅
 * @method boolean getUserComplainted() 获取用户是否举报该发送者
 * @method void setUserComplainted(boolean $UserComplainted) 设置用户是否举报该发送者
 */
class SendEmailStatus extends AbstractModel
{
    /**
     * @var string SendEmail返回的MessageId
     */
    public $MessageId;

    /**
     * @var string 收件人邮箱
     */
    public $ToEmailAddress;

    /**
     * @var string 发件人邮箱
     */
    public $FromEmailAddress;

    /**
     * @var integer 腾讯云处理状态
0: 处理成功
1001: 内部系统异常
1002: 内部系统异常
1003: 内部系统异常
1003: 内部系统异常
1004: 发信超时
1005: 内部系统异常
1006: 触发频率控制，短时间内对同一地址发送过多邮件
1007: 邮件地址在黑名单中
1009: 内部系统异常
1010: 超出了每日发送限制
1011: 无发送自定义内容权限，必须使用模板
2001: 找不到相关记录
3007: 模板ID无效或者不可用
3008: 模板状态异常
3009: 无权限使用该模板
3010: TemplateData字段格式不正确 
3014: 发件域名没有经过认证，无法发送
3020: 收件方邮箱类型在黑名单
3024: 邮箱地址格式预检查失败
3030: 退信率过高，临时限制发送
3033: 余额不足，账号欠费等
     */
    public $SendStatus;

    /**
     * @var integer 收件方处理状态
0: 请求成功被腾讯云接受，进入发送队列
1: 邮件递送成功，DeliverTime表示递送成功的时间
2: 邮件因某种原因被丢弃，DeliverMessage表示丢弃原因
3: 收件方ESP拒信，一般原因为邮箱地址不存在，或其它原因
8: 邮件被ESP因某些原因延迟递送，DeliverMessage表示延迟原因
     */
    public $DeliverStatus;

    /**
     * @var string 收件方处理状态描述
     */
    public $DeliverMessage;

    /**
     * @var integer 请求到达腾讯云时间戳
     */
    public $RequestTime;

    /**
     * @var integer 腾讯云执行递送时间戳
     */
    public $DeliverTime;

    /**
     * @var boolean 用户是否打开该邮件
     */
    public $UserOpened;

    /**
     * @var boolean 用户是否点击该邮件中的链接
     */
    public $UserClicked;

    /**
     * @var boolean 用户是否取消该发送者的订阅
     */
    public $UserUnsubscribed;

    /**
     * @var boolean 用户是否举报该发送者
     */
    public $UserComplainted;

    /**
     * @param string $MessageId SendEmail返回的MessageId
     * @param string $ToEmailAddress 收件人邮箱
     * @param string $FromEmailAddress 发件人邮箱
     * @param integer $SendStatus 腾讯云处理状态
0: 处理成功
1001: 内部系统异常
1002: 内部系统异常
1003: 内部系统异常
1003: 内部系统异常
1004: 发信超时
1005: 内部系统异常
1006: 触发频率控制，短时间内对同一地址发送过多邮件
1007: 邮件地址在黑名单中
1009: 内部系统异常
1010: 超出了每日发送限制
1011: 无发送自定义内容权限，必须使用模板
2001: 找不到相关记录
3007: 模板ID无效或者不可用
3008: 模板状态异常
3009: 无权限使用该模板
3010: TemplateData字段格式不正确 
3014: 发件域名没有经过认证，无法发送
3020: 收件方邮箱类型在黑名单
3024: 邮箱地址格式预检查失败
3030: 退信率过高，临时限制发送
3033: 余额不足，账号欠费等
     * @param integer $DeliverStatus 收件方处理状态
0: 请求成功被腾讯云接受，进入发送队列
1: 邮件递送成功，DeliverTime表示递送成功的时间
2: 邮件因某种原因被丢弃，DeliverMessage表示丢弃原因
3: 收件方ESP拒信，一般原因为邮箱地址不存在，或其它原因
8: 邮件被ESP因某些原因延迟递送，DeliverMessage表示延迟原因
     * @param string $DeliverMessage 收件方处理状态描述
     * @param integer $RequestTime 请求到达腾讯云时间戳
     * @param integer $DeliverTime 腾讯云执行递送时间戳
     * @param boolean $UserOpened 用户是否打开该邮件
     * @param boolean $UserClicked 用户是否点击该邮件中的链接
     * @param boolean $UserUnsubscribed 用户是否取消该发送者的订阅
     * @param boolean $UserComplainted 用户是否举报该发送者
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
        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ToEmailAddress",$param) and $param["ToEmailAddress"] !== null) {
            $this->ToEmailAddress = $param["ToEmailAddress"];
        }

        if (array_key_exists("FromEmailAddress",$param) and $param["FromEmailAddress"] !== null) {
            $this->FromEmailAddress = $param["FromEmailAddress"];
        }

        if (array_key_exists("SendStatus",$param) and $param["SendStatus"] !== null) {
            $this->SendStatus = $param["SendStatus"];
        }

        if (array_key_exists("DeliverStatus",$param) and $param["DeliverStatus"] !== null) {
            $this->DeliverStatus = $param["DeliverStatus"];
        }

        if (array_key_exists("DeliverMessage",$param) and $param["DeliverMessage"] !== null) {
            $this->DeliverMessage = $param["DeliverMessage"];
        }

        if (array_key_exists("RequestTime",$param) and $param["RequestTime"] !== null) {
            $this->RequestTime = $param["RequestTime"];
        }

        if (array_key_exists("DeliverTime",$param) and $param["DeliverTime"] !== null) {
            $this->DeliverTime = $param["DeliverTime"];
        }

        if (array_key_exists("UserOpened",$param) and $param["UserOpened"] !== null) {
            $this->UserOpened = $param["UserOpened"];
        }

        if (array_key_exists("UserClicked",$param) and $param["UserClicked"] !== null) {
            $this->UserClicked = $param["UserClicked"];
        }

        if (array_key_exists("UserUnsubscribed",$param) and $param["UserUnsubscribed"] !== null) {
            $this->UserUnsubscribed = $param["UserUnsubscribed"];
        }

        if (array_key_exists("UserComplainted",$param) and $param["UserComplainted"] !== null) {
            $this->UserComplainted = $param["UserComplainted"];
        }
    }
}
