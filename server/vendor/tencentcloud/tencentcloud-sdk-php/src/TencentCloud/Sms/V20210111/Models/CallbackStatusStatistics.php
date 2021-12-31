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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回执数据统计响应包体
 *
 * @method integer getCallbackCount() 获取短信回执量统计。
 * @method void setCallbackCount(integer $CallbackCount) 设置短信回执量统计。
 * @method integer getRequestSuccessCount() 获取短信提交成功量统计。
 * @method void setRequestSuccessCount(integer $RequestSuccessCount) 设置短信提交成功量统计。
 * @method integer getCallbackFailCount() 获取短信回执失败量统计。
 * @method void setCallbackFailCount(integer $CallbackFailCount) 设置短信回执失败量统计。
 * @method integer getCallbackSuccessCount() 获取短信回执成功量统计。
 * @method void setCallbackSuccessCount(integer $CallbackSuccessCount) 设置短信回执成功量统计。
 * @method integer getInternalErrorCount() 获取运营商内部错误统计。
 * @method void setInternalErrorCount(integer $InternalErrorCount) 设置运营商内部错误统计。
 * @method integer getInvalidNumberCount() 获取号码无效或空号统计。
 * @method void setInvalidNumberCount(integer $InvalidNumberCount) 设置号码无效或空号统计。
 * @method integer getShutdownErrorCount() 获取停机、关机等错误统计。
 * @method void setShutdownErrorCount(integer $ShutdownErrorCount) 设置停机、关机等错误统计。
 * @method integer getBlackListCount() 获取号码拉入黑名单统计。
 * @method void setBlackListCount(integer $BlackListCount) 设置号码拉入黑名单统计。
 * @method integer getFrequencyLimitCount() 获取运营商频率限制统计。
 * @method void setFrequencyLimitCount(integer $FrequencyLimitCount) 设置运营商频率限制统计。
 */
class CallbackStatusStatistics extends AbstractModel
{
    /**
     * @var integer 短信回执量统计。
     */
    public $CallbackCount;

    /**
     * @var integer 短信提交成功量统计。
     */
    public $RequestSuccessCount;

    /**
     * @var integer 短信回执失败量统计。
     */
    public $CallbackFailCount;

    /**
     * @var integer 短信回执成功量统计。
     */
    public $CallbackSuccessCount;

    /**
     * @var integer 运营商内部错误统计。
     */
    public $InternalErrorCount;

    /**
     * @var integer 号码无效或空号统计。
     */
    public $InvalidNumberCount;

    /**
     * @var integer 停机、关机等错误统计。
     */
    public $ShutdownErrorCount;

    /**
     * @var integer 号码拉入黑名单统计。
     */
    public $BlackListCount;

    /**
     * @var integer 运营商频率限制统计。
     */
    public $FrequencyLimitCount;

    /**
     * @param integer $CallbackCount 短信回执量统计。
     * @param integer $RequestSuccessCount 短信提交成功量统计。
     * @param integer $CallbackFailCount 短信回执失败量统计。
     * @param integer $CallbackSuccessCount 短信回执成功量统计。
     * @param integer $InternalErrorCount 运营商内部错误统计。
     * @param integer $InvalidNumberCount 号码无效或空号统计。
     * @param integer $ShutdownErrorCount 停机、关机等错误统计。
     * @param integer $BlackListCount 号码拉入黑名单统计。
     * @param integer $FrequencyLimitCount 运营商频率限制统计。
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
        if (array_key_exists("CallbackCount",$param) and $param["CallbackCount"] !== null) {
            $this->CallbackCount = $param["CallbackCount"];
        }

        if (array_key_exists("RequestSuccessCount",$param) and $param["RequestSuccessCount"] !== null) {
            $this->RequestSuccessCount = $param["RequestSuccessCount"];
        }

        if (array_key_exists("CallbackFailCount",$param) and $param["CallbackFailCount"] !== null) {
            $this->CallbackFailCount = $param["CallbackFailCount"];
        }

        if (array_key_exists("CallbackSuccessCount",$param) and $param["CallbackSuccessCount"] !== null) {
            $this->CallbackSuccessCount = $param["CallbackSuccessCount"];
        }

        if (array_key_exists("InternalErrorCount",$param) and $param["InternalErrorCount"] !== null) {
            $this->InternalErrorCount = $param["InternalErrorCount"];
        }

        if (array_key_exists("InvalidNumberCount",$param) and $param["InvalidNumberCount"] !== null) {
            $this->InvalidNumberCount = $param["InvalidNumberCount"];
        }

        if (array_key_exists("ShutdownErrorCount",$param) and $param["ShutdownErrorCount"] !== null) {
            $this->ShutdownErrorCount = $param["ShutdownErrorCount"];
        }

        if (array_key_exists("BlackListCount",$param) and $param["BlackListCount"] !== null) {
            $this->BlackListCount = $param["BlackListCount"];
        }

        if (array_key_exists("FrequencyLimitCount",$param) and $param["FrequencyLimitCount"] !== null) {
            $this->FrequencyLimitCount = $param["FrequencyLimitCount"];
        }
    }
}
