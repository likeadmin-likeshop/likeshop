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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateQualityControlTask请求参数结构体
 *
 * @method QualityControlInfo getQualityControlInfo() 获取质检任务参数
 * @method void setQualityControlInfo(QualityControlInfo $QualityControlInfo) 设置质检任务参数
 * @method DownInfo getDownInfo() 获取视频源信息
 * @method void setDownInfo(DownInfo $DownInfo) 设置视频源信息
 * @method CallbackInfo getCallbackInfo() 获取任务结果回调地址信息
 * @method void setCallbackInfo(CallbackInfo $CallbackInfo) 设置任务结果回调地址信息
 */
class CreateQualityControlTaskRequest extends AbstractModel
{
    /**
     * @var QualityControlInfo 质检任务参数
     */
    public $QualityControlInfo;

    /**
     * @var DownInfo 视频源信息
     */
    public $DownInfo;

    /**
     * @var CallbackInfo 任务结果回调地址信息
     */
    public $CallbackInfo;

    /**
     * @param QualityControlInfo $QualityControlInfo 质检任务参数
     * @param DownInfo $DownInfo 视频源信息
     * @param CallbackInfo $CallbackInfo 任务结果回调地址信息
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
        if (array_key_exists("QualityControlInfo",$param) and $param["QualityControlInfo"] !== null) {
            $this->QualityControlInfo = new QualityControlInfo();
            $this->QualityControlInfo->deserialize($param["QualityControlInfo"]);
        }

        if (array_key_exists("DownInfo",$param) and $param["DownInfo"] !== null) {
            $this->DownInfo = new DownInfo();
            $this->DownInfo->deserialize($param["DownInfo"]);
        }

        if (array_key_exists("CallbackInfo",$param) and $param["CallbackInfo"] !== null) {
            $this->CallbackInfo = new CallbackInfo();
            $this->CallbackInfo->deserialize($param["CallbackInfo"]);
        }
    }
}
