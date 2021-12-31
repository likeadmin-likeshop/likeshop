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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混流配置
 *
 * @method boolean getEnabled() 获取是否开启混流
 * @method void setEnabled(boolean $Enabled) 设置是否开启混流
 * @method boolean getDisableAudio() 获取是否禁用音频混流
 * @method void setDisableAudio(boolean $DisableAudio) 设置是否禁用音频混流
 * @method integer getModelId() 获取内置混流布局模板ID, 取值 [1, 2], 区别见内置混流布局模板样式示例说明
在没有填Custom字段时候，ModelId是必填的
 * @method void setModelId(integer $ModelId) 设置内置混流布局模板ID, 取值 [1, 2], 区别见内置混流布局模板样式示例说明
在没有填Custom字段时候，ModelId是必填的
 * @method string getTeacherId() 获取老师用户ID
此字段只有在ModelId填了的情况下生效
填写TeacherId的效果是把指定为TeacherId的用户视频流显示在内置模板的第一个小画面中
 * @method void setTeacherId(string $TeacherId) 设置老师用户ID
此字段只有在ModelId填了的情况下生效
填写TeacherId的效果是把指定为TeacherId的用户视频流显示在内置模板的第一个小画面中
 * @method CustomLayout getCustom() 获取自定义混流布局参数
当此字段存在时，ModelId 及 TeacherId 字段将被忽略
 * @method void setCustom(CustomLayout $Custom) 设置自定义混流布局参数
当此字段存在时，ModelId 及 TeacherId 字段将被忽略
 */
class MixStream extends AbstractModel
{
    /**
     * @var boolean 是否开启混流
     */
    public $Enabled;

    /**
     * @var boolean 是否禁用音频混流
     */
    public $DisableAudio;

    /**
     * @var integer 内置混流布局模板ID, 取值 [1, 2], 区别见内置混流布局模板样式示例说明
在没有填Custom字段时候，ModelId是必填的
     */
    public $ModelId;

    /**
     * @var string 老师用户ID
此字段只有在ModelId填了的情况下生效
填写TeacherId的效果是把指定为TeacherId的用户视频流显示在内置模板的第一个小画面中
     */
    public $TeacherId;

    /**
     * @var CustomLayout 自定义混流布局参数
当此字段存在时，ModelId 及 TeacherId 字段将被忽略
     */
    public $Custom;

    /**
     * @param boolean $Enabled 是否开启混流
     * @param boolean $DisableAudio 是否禁用音频混流
     * @param integer $ModelId 内置混流布局模板ID, 取值 [1, 2], 区别见内置混流布局模板样式示例说明
在没有填Custom字段时候，ModelId是必填的
     * @param string $TeacherId 老师用户ID
此字段只有在ModelId填了的情况下生效
填写TeacherId的效果是把指定为TeacherId的用户视频流显示在内置模板的第一个小画面中
     * @param CustomLayout $Custom 自定义混流布局参数
当此字段存在时，ModelId 及 TeacherId 字段将被忽略
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("DisableAudio",$param) and $param["DisableAudio"] !== null) {
            $this->DisableAudio = $param["DisableAudio"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = new CustomLayout();
            $this->Custom->deserialize($param["Custom"]);
        }
    }
}
