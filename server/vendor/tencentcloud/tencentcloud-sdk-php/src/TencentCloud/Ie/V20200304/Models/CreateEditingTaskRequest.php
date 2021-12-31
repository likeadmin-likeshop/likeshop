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
 * CreateEditingTask请求参数结构体
 *
 * @method EditingInfo getEditingInfo() 获取智能编辑任务参数。
 * @method void setEditingInfo(EditingInfo $EditingInfo) 设置智能编辑任务参数。
 * @method DownInfo getDownInfo() 获取视频源信息。
 * @method void setDownInfo(DownInfo $DownInfo) 设置视频源信息。
 * @method SaveInfo getSaveInfo() 获取结果存储信息。对于包含智能拆条、智能集锦或者智能封面的任务必选。
 * @method void setSaveInfo(SaveInfo $SaveInfo) 设置结果存储信息。对于包含智能拆条、智能集锦或者智能封面的任务必选。
 * @method CallbackInfo getCallbackInfo() 获取任务结果回调地址信息。
 * @method void setCallbackInfo(CallbackInfo $CallbackInfo) 设置任务结果回调地址信息。
 */
class CreateEditingTaskRequest extends AbstractModel
{
    /**
     * @var EditingInfo 智能编辑任务参数。
     */
    public $EditingInfo;

    /**
     * @var DownInfo 视频源信息。
     */
    public $DownInfo;

    /**
     * @var SaveInfo 结果存储信息。对于包含智能拆条、智能集锦或者智能封面的任务必选。
     */
    public $SaveInfo;

    /**
     * @var CallbackInfo 任务结果回调地址信息。
     */
    public $CallbackInfo;

    /**
     * @param EditingInfo $EditingInfo 智能编辑任务参数。
     * @param DownInfo $DownInfo 视频源信息。
     * @param SaveInfo $SaveInfo 结果存储信息。对于包含智能拆条、智能集锦或者智能封面的任务必选。
     * @param CallbackInfo $CallbackInfo 任务结果回调地址信息。
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
        if (array_key_exists("EditingInfo",$param) and $param["EditingInfo"] !== null) {
            $this->EditingInfo = new EditingInfo();
            $this->EditingInfo->deserialize($param["EditingInfo"]);
        }

        if (array_key_exists("DownInfo",$param) and $param["DownInfo"] !== null) {
            $this->DownInfo = new DownInfo();
            $this->DownInfo->deserialize($param["DownInfo"]);
        }

        if (array_key_exists("SaveInfo",$param) and $param["SaveInfo"] !== null) {
            $this->SaveInfo = new SaveInfo();
            $this->SaveInfo->deserialize($param["SaveInfo"]);
        }

        if (array_key_exists("CallbackInfo",$param) and $param["CallbackInfo"] !== null) {
            $this->CallbackInfo = new CallbackInfo();
            $this->CallbackInfo->deserialize($param["CallbackInfo"]);
        }
    }
}
