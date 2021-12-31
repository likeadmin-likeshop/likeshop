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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人审审核数据相关信息
 *
 * @method string getBatchId() 获取审核批次号
 * @method void setBatchId(string $BatchId) 设置审核批次号
 * @method string getContent() 获取审核内容
 * @method void setContent(string $Content) 设置审核内容
 * @method string getContentId() 获取消息Id
 * @method void setContentId(string $ContentId) 设置消息Id
 * @method integer getContentType() 获取审核内容类型 1 图片 2 视频 3 文本 4 音频
 * @method void setContentType(integer $ContentType) 设置审核内容类型 1 图片 2 视频 3 文本 4 音频
 * @method User getUserInfo() 获取用户信息
 * @method void setUserInfo(User $UserInfo) 设置用户信息
 * @method integer getAutoDetailCode() 获取机器审核类型，与腾讯机器审核定义一致
100 正常
20001 政治
20002 色情
20006 违法
20007 谩骂
24001 暴恐
20105 广告
20103 性感
 * @method void setAutoDetailCode(integer $AutoDetailCode) 设置机器审核类型，与腾讯机器审核定义一致
100 正常
20001 政治
20002 色情
20006 违法
20007 谩骂
24001 暴恐
20105 广告
20103 性感
 * @method integer getAutoResult() 获取机器审核结果 0 放过 1 拦截
 * @method void setAutoResult(integer $AutoResult) 设置机器审核结果 0 放过 1 拦截
 * @method string getCallBackInfo() 获取回调信息标识，回传数据时原样返回
 * @method void setCallBackInfo(string $CallBackInfo) 设置回调信息标识，回传数据时原样返回
 * @method string getCreateTime() 获取创建时间 格式“2020-01-01 00:00:12”
 * @method void setCreateTime(string $CreateTime) 设置创建时间 格式“2020-01-01 00:00:12”
 * @method integer getPriority() 获取审核优先级，可选值 [1,2,3,4]，其中 1 最高，4 最低
 * @method void setPriority(integer $Priority) 设置审核优先级，可选值 [1,2,3,4]，其中 1 最高，4 最低
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 */
class ManualReviewContent extends AbstractModel
{
    /**
     * @var string 审核批次号
     */
    public $BatchId;

    /**
     * @var string 审核内容
     */
    public $Content;

    /**
     * @var string 消息Id
     */
    public $ContentId;

    /**
     * @var integer 审核内容类型 1 图片 2 视频 3 文本 4 音频
     */
    public $ContentType;

    /**
     * @var User 用户信息
     */
    public $UserInfo;

    /**
     * @var integer 机器审核类型，与腾讯机器审核定义一致
100 正常
20001 政治
20002 色情
20006 违法
20007 谩骂
24001 暴恐
20105 广告
20103 性感
     */
    public $AutoDetailCode;

    /**
     * @var integer 机器审核结果 0 放过 1 拦截
     */
    public $AutoResult;

    /**
     * @var string 回调信息标识，回传数据时原样返回
     */
    public $CallBackInfo;

    /**
     * @var string 创建时间 格式“2020-01-01 00:00:12”
     */
    public $CreateTime;

    /**
     * @var integer 审核优先级，可选值 [1,2,3,4]，其中 1 最高，4 最低
     */
    public $Priority;

    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @param string $BatchId 审核批次号
     * @param string $Content 审核内容
     * @param string $ContentId 消息Id
     * @param integer $ContentType 审核内容类型 1 图片 2 视频 3 文本 4 音频
     * @param User $UserInfo 用户信息
     * @param integer $AutoDetailCode 机器审核类型，与腾讯机器审核定义一致
100 正常
20001 政治
20002 色情
20006 违法
20007 谩骂
24001 暴恐
20105 广告
20103 性感
     * @param integer $AutoResult 机器审核结果 0 放过 1 拦截
     * @param string $CallBackInfo 回调信息标识，回传数据时原样返回
     * @param string $CreateTime 创建时间 格式“2020-01-01 00:00:12”
     * @param integer $Priority 审核优先级，可选值 [1,2,3,4]，其中 1 最高，4 最低
     * @param string $Title 标题
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new User();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("AutoDetailCode",$param) and $param["AutoDetailCode"] !== null) {
            $this->AutoDetailCode = $param["AutoDetailCode"];
        }

        if (array_key_exists("AutoResult",$param) and $param["AutoResult"] !== null) {
            $this->AutoResult = $param["AutoResult"];
        }

        if (array_key_exists("CallBackInfo",$param) and $param["CallBackInfo"] !== null) {
            $this->CallBackInfo = $param["CallBackInfo"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
