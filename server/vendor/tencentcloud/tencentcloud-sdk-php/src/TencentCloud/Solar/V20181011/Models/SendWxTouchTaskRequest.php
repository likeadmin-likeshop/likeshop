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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendWxTouchTask请求参数结构体
 *
 * @method string getGroupId() 获取客户分组ID
 * @method void setGroupId(string $GroupId) 设置客户分组ID
 * @method boolean getDistinctFlag() 获取去除今日已发送的客户
 * @method void setDistinctFlag(boolean $DistinctFlag) 设置去除今日已发送的客户
 * @method boolean getIsSendNow() 获取是否立马发送
 * @method void setIsSendNow(boolean $IsSendNow) 设置是否立马发送
 * @method integer getSendDate() 获取发送时间，一般为0
 * @method void setSendDate(integer $SendDate) 设置发送时间，一般为0
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getWxTouchType() 获取微信触达类型，text, news, smallapp, tmplmsg
 * @method void setWxTouchType(string $WxTouchType) 设置微信触达类型，text, news, smallapp, tmplmsg
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getContent() 获取文本内容
 * @method void setContent(string $Content) 设置文本内容
 * @method string getNewsId() 获取图文素材ID
 * @method void setNewsId(string $NewsId) 设置图文素材ID
 * @method string getSmallProgramId() 获取小程序卡片ID
 * @method void setSmallProgramId(string $SmallProgramId) 设置小程序卡片ID
 * @method string getTemplateId() 获取模板消息ID
 * @method void setTemplateId(string $TemplateId) 设置模板消息ID
 * @method string getWxAppId() 获取微信公众号appId
 * @method void setWxAppId(string $WxAppId) 设置微信公众号appId
 */
class SendWxTouchTaskRequest extends AbstractModel
{
    /**
     * @var string 客户分组ID
     */
    public $GroupId;

    /**
     * @var boolean 去除今日已发送的客户
     */
    public $DistinctFlag;

    /**
     * @var boolean 是否立马发送
     */
    public $IsSendNow;

    /**
     * @var integer 发送时间，一般为0
     */
    public $SendDate;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 微信触达类型，text, news, smallapp, tmplmsg
     */
    public $WxTouchType;

    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string 文本内容
     */
    public $Content;

    /**
     * @var string 图文素材ID
     */
    public $NewsId;

    /**
     * @var string 小程序卡片ID
     */
    public $SmallProgramId;

    /**
     * @var string 模板消息ID
     */
    public $TemplateId;

    /**
     * @var string 微信公众号appId
     */
    public $WxAppId;

    /**
     * @param string $GroupId 客户分组ID
     * @param boolean $DistinctFlag 去除今日已发送的客户
     * @param boolean $IsSendNow 是否立马发送
     * @param integer $SendDate 发送时间，一般为0
     * @param string $TaskName 任务名称
     * @param string $WxTouchType 微信触达类型，text, news, smallapp, tmplmsg
     * @param string $Title 标题
     * @param string $Content 文本内容
     * @param string $NewsId 图文素材ID
     * @param string $SmallProgramId 小程序卡片ID
     * @param string $TemplateId 模板消息ID
     * @param string $WxAppId 微信公众号appId
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("DistinctFlag",$param) and $param["DistinctFlag"] !== null) {
            $this->DistinctFlag = $param["DistinctFlag"];
        }

        if (array_key_exists("IsSendNow",$param) and $param["IsSendNow"] !== null) {
            $this->IsSendNow = $param["IsSendNow"];
        }

        if (array_key_exists("SendDate",$param) and $param["SendDate"] !== null) {
            $this->SendDate = $param["SendDate"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WxTouchType",$param) and $param["WxTouchType"] !== null) {
            $this->WxTouchType = $param["WxTouchType"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("NewsId",$param) and $param["NewsId"] !== null) {
            $this->NewsId = $param["NewsId"];
        }

        if (array_key_exists("SmallProgramId",$param) and $param["SmallProgramId"] !== null) {
            $this->SmallProgramId = $param["SmallProgramId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("WxAppId",$param) and $param["WxAppId"] !== null) {
            $this->WxAppId = $param["WxAppId"];
        }
    }
}
