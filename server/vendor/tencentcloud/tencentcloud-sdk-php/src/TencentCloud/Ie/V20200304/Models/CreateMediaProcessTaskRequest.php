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
 * CreateMediaProcessTask请求参数结构体
 *
 * @method MediaProcessInfo getMediaProcessInfo() 获取编辑处理任务参数。
 * @method void setMediaProcessInfo(MediaProcessInfo $MediaProcessInfo) 设置编辑处理任务参数。
 * @method array getSourceInfoSet() 获取编辑处理任务输入源列表。
 * @method void setSourceInfoSet(array $SourceInfoSet) 设置编辑处理任务输入源列表。
 * @method array getSaveInfoSet() 获取结果存储信息，对于涉及存储的请求必选。部子任务支持数组备份写，具体以对应任务文档为准。
 * @method void setSaveInfoSet(array $SaveInfoSet) 设置结果存储信息，对于涉及存储的请求必选。部子任务支持数组备份写，具体以对应任务文档为准。
 * @method array getCallbackInfoSet() 获取任务结果回调地址信息。部子任务支持数组备份回调，具体以对应任务文档为准。
 * @method void setCallbackInfoSet(array $CallbackInfoSet) 设置任务结果回调地址信息。部子任务支持数组备份回调，具体以对应任务文档为准。
 */
class CreateMediaProcessTaskRequest extends AbstractModel
{
    /**
     * @var MediaProcessInfo 编辑处理任务参数。
     */
    public $MediaProcessInfo;

    /**
     * @var array 编辑处理任务输入源列表。
     */
    public $SourceInfoSet;

    /**
     * @var array 结果存储信息，对于涉及存储的请求必选。部子任务支持数组备份写，具体以对应任务文档为准。
     */
    public $SaveInfoSet;

    /**
     * @var array 任务结果回调地址信息。部子任务支持数组备份回调，具体以对应任务文档为准。
     */
    public $CallbackInfoSet;

    /**
     * @param MediaProcessInfo $MediaProcessInfo 编辑处理任务参数。
     * @param array $SourceInfoSet 编辑处理任务输入源列表。
     * @param array $SaveInfoSet 结果存储信息，对于涉及存储的请求必选。部子任务支持数组备份写，具体以对应任务文档为准。
     * @param array $CallbackInfoSet 任务结果回调地址信息。部子任务支持数组备份回调，具体以对应任务文档为准。
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
        if (array_key_exists("MediaProcessInfo",$param) and $param["MediaProcessInfo"] !== null) {
            $this->MediaProcessInfo = new MediaProcessInfo();
            $this->MediaProcessInfo->deserialize($param["MediaProcessInfo"]);
        }

        if (array_key_exists("SourceInfoSet",$param) and $param["SourceInfoSet"] !== null) {
            $this->SourceInfoSet = [];
            foreach ($param["SourceInfoSet"] as $key => $value){
                $obj = new MediaSourceInfo();
                $obj->deserialize($value);
                array_push($this->SourceInfoSet, $obj);
            }
        }

        if (array_key_exists("SaveInfoSet",$param) and $param["SaveInfoSet"] !== null) {
            $this->SaveInfoSet = [];
            foreach ($param["SaveInfoSet"] as $key => $value){
                $obj = new SaveInfo();
                $obj->deserialize($value);
                array_push($this->SaveInfoSet, $obj);
            }
        }

        if (array_key_exists("CallbackInfoSet",$param) and $param["CallbackInfoSet"] !== null) {
            $this->CallbackInfoSet = [];
            foreach ($param["CallbackInfoSet"] as $key => $value){
                $obj = new CallbackInfo();
                $obj->deserialize($value);
                array_push($this->CallbackInfoSet, $obj);
            }
        }
    }
}
