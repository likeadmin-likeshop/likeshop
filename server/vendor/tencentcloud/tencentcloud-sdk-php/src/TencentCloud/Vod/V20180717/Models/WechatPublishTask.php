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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微信发布任务信息
 *
 * @method string getTaskId() 获取任务 ID。
 * @method void setTaskId(string $TaskId) 设置任务 ID。
 * @method string getStatus() 获取任务状态，取值：
WAITING：等待中；
PROCESSING：处理中；
FINISH：已完成。
 * @method void setStatus(string $Status) 设置任务状态，取值：
WAITING：等待中；
PROCESSING：处理中；
FINISH：已完成。
 * @method integer getErrCode() 获取错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method string getFileId() 获取发布视频文件 ID。
 * @method void setFileId(string $FileId) 设置发布视频文件 ID。
 * @method integer getDefinition() 获取微信发布模板 ID。
 * @method void setDefinition(integer $Definition) 设置微信发布模板 ID。
 * @method integer getSourceDefinition() 获取发布视频所对应的转码模板 ID，为 0 代表原始视频。
 * @method void setSourceDefinition(integer $SourceDefinition) 设置发布视频所对应的转码模板 ID，为 0 代表原始视频。
 * @method string getWechatStatus() 获取微信发布状态，取值：
<li>FAIL：失败；</li>
<li>SUCCESS：成功；</li>
<li>AUDITNOTPASS：审核未通过；</li>
<li>NOTTRIGGERED：尚未发起微信发布。</li>
 * @method void setWechatStatus(string $WechatStatus) 设置微信发布状态，取值：
<li>FAIL：失败；</li>
<li>SUCCESS：成功；</li>
<li>AUDITNOTPASS：审核未通过；</li>
<li>NOTTRIGGERED：尚未发起微信发布。</li>
 * @method string getWechatVid() 获取微信 Vid。
 * @method void setWechatVid(string $WechatVid) 设置微信 Vid。
 * @method string getWechatUrl() 获取微信地址。
 * @method void setWechatUrl(string $WechatUrl) 设置微信地址。
 */
class WechatPublishTask extends AbstractModel
{
    /**
     * @var string 任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务状态，取值：
WAITING：等待中；
PROCESSING：处理中；
FINISH：已完成。
     */
    public $Status;

    /**
     * @var integer 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var string 发布视频文件 ID。
     */
    public $FileId;

    /**
     * @var integer 微信发布模板 ID。
     */
    public $Definition;

    /**
     * @var integer 发布视频所对应的转码模板 ID，为 0 代表原始视频。
     */
    public $SourceDefinition;

    /**
     * @var string 微信发布状态，取值：
<li>FAIL：失败；</li>
<li>SUCCESS：成功；</li>
<li>AUDITNOTPASS：审核未通过；</li>
<li>NOTTRIGGERED：尚未发起微信发布。</li>
     */
    public $WechatStatus;

    /**
     * @var string 微信 Vid。
     */
    public $WechatVid;

    /**
     * @var string 微信地址。
     */
    public $WechatUrl;

    /**
     * @param string $TaskId 任务 ID。
     * @param string $Status 任务状态，取值：
WAITING：等待中；
PROCESSING：处理中；
FINISH：已完成。
     * @param integer $ErrCode 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     * @param string $Message 错误信息。
     * @param string $FileId 发布视频文件 ID。
     * @param integer $Definition 微信发布模板 ID。
     * @param integer $SourceDefinition 发布视频所对应的转码模板 ID，为 0 代表原始视频。
     * @param string $WechatStatus 微信发布状态，取值：
<li>FAIL：失败；</li>
<li>SUCCESS：成功；</li>
<li>AUDITNOTPASS：审核未通过；</li>
<li>NOTTRIGGERED：尚未发起微信发布。</li>
     * @param string $WechatVid 微信 Vid。
     * @param string $WechatUrl 微信地址。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SourceDefinition",$param) and $param["SourceDefinition"] !== null) {
            $this->SourceDefinition = $param["SourceDefinition"];
        }

        if (array_key_exists("WechatStatus",$param) and $param["WechatStatus"] !== null) {
            $this->WechatStatus = $param["WechatStatus"];
        }

        if (array_key_exists("WechatVid",$param) and $param["WechatVid"] !== null) {
            $this->WechatVid = $param["WechatVid"];
        }

        if (array_key_exists("WechatUrl",$param) and $param["WechatUrl"] !== null) {
            $this->WechatUrl = $param["WechatUrl"];
        }
    }
}
