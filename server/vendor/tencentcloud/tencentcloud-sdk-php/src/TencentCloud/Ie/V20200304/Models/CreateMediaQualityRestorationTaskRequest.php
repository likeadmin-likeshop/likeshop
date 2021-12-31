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
 * CreateMediaQualityRestorationTask请求参数结构体
 *
 * @method DownInfo getDownInfo() 获取源文件地址。
 * @method void setDownInfo(DownInfo $DownInfo) 设置源文件地址。
 * @method array getTransInfo() 获取画质重生任务参数信息。
 * @method void setTransInfo(array $TransInfo) 设置画质重生任务参数信息。
 * @method SaveInfo getSaveInfo() 获取任务结束后文件存储信息。
 * @method void setSaveInfo(SaveInfo $SaveInfo) 设置任务结束后文件存储信息。
 * @method CallbackInfo getCallbackInfo() 获取任务结果回调地址信息。
 * @method void setCallbackInfo(CallbackInfo $CallbackInfo) 设置任务结果回调地址信息。
 */
class CreateMediaQualityRestorationTaskRequest extends AbstractModel
{
    /**
     * @var DownInfo 源文件地址。
     */
    public $DownInfo;

    /**
     * @var array 画质重生任务参数信息。
     */
    public $TransInfo;

    /**
     * @var SaveInfo 任务结束后文件存储信息。
     */
    public $SaveInfo;

    /**
     * @var CallbackInfo 任务结果回调地址信息。
     */
    public $CallbackInfo;

    /**
     * @param DownInfo $DownInfo 源文件地址。
     * @param array $TransInfo 画质重生任务参数信息。
     * @param SaveInfo $SaveInfo 任务结束后文件存储信息。
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
        if (array_key_exists("DownInfo",$param) and $param["DownInfo"] !== null) {
            $this->DownInfo = new DownInfo();
            $this->DownInfo->deserialize($param["DownInfo"]);
        }

        if (array_key_exists("TransInfo",$param) and $param["TransInfo"] !== null) {
            $this->TransInfo = [];
            foreach ($param["TransInfo"] as $key => $value){
                $obj = new SubTaskTranscodeInfo();
                $obj->deserialize($value);
                array_push($this->TransInfo, $obj);
            }
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
