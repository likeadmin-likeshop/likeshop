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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageToClass请求参数结构体
 *
 * @method array getImageInfoList() 获取图片列表，允许传入多张图片，支持传入图片的url或base64编码
 * @method void setImageInfoList(array $ImageInfoList) 设置图片列表，允许传入多张图片，支持传入图片的url或base64编码
 * @method HandleParam getHandleParam() 获取图片处理参数
 * @method void setHandleParam(HandleParam $HandleParam) 设置图片处理参数
 * @method integer getType() 获取图片类型，目前支持11（检验报告），12（检查报告），15（病理报告），218（诊断证明）。
 * @method void setType(integer $Type) 设置图片类型，目前支持11（检验报告），12（检查报告），15（病理报告），218（诊断证明）。
 */
class ImageToClassRequest extends AbstractModel
{
    /**
     * @var array 图片列表，允许传入多张图片，支持传入图片的url或base64编码
     */
    public $ImageInfoList;

    /**
     * @var HandleParam 图片处理参数
     */
    public $HandleParam;

    /**
     * @var integer 图片类型，目前支持11（检验报告），12（检查报告），15（病理报告），218（诊断证明）。
     */
    public $Type;

    /**
     * @param array $ImageInfoList 图片列表，允许传入多张图片，支持传入图片的url或base64编码
     * @param HandleParam $HandleParam 图片处理参数
     * @param integer $Type 图片类型，目前支持11（检验报告），12（检查报告），15（病理报告），218（诊断证明）。
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
        if (array_key_exists("ImageInfoList",$param) and $param["ImageInfoList"] !== null) {
            $this->ImageInfoList = [];
            foreach ($param["ImageInfoList"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfoList, $obj);
            }
        }

        if (array_key_exists("HandleParam",$param) and $param["HandleParam"] !== null) {
            $this->HandleParam = new HandleParam();
            $this->HandleParam->deserialize($param["HandleParam"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
