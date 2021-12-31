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
namespace TencentCloud\Fmu\V20191213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BeautifyVideo请求参数结构体
 *
 * @method string getUrl() 获取视频url地址
 * @method void setUrl(string $Url) 设置视频url地址
 * @method array getBeautyParam() 获取美颜参数 - 美白、平滑、大眼和瘦脸。参数值范围[0, 100]。参数值为0，则不做美颜。参数默认值为0。目前默认取数组第一个元素是对所有人脸美颜。
 * @method void setBeautyParam(array $BeautyParam) 设置美颜参数 - 美白、平滑、大眼和瘦脸。参数值范围[0, 100]。参数值为0，则不做美颜。参数默认值为0。目前默认取数组第一个元素是对所有人脸美颜。
 * @method string getOutputVideoType() 获取目前只支持mp4
 * @method void setOutputVideoType(string $OutputVideoType) 设置目前只支持mp4
 */
class BeautifyVideoRequest extends AbstractModel
{
    /**
     * @var string 视频url地址
     */
    public $Url;

    /**
     * @var array 美颜参数 - 美白、平滑、大眼和瘦脸。参数值范围[0, 100]。参数值为0，则不做美颜。参数默认值为0。目前默认取数组第一个元素是对所有人脸美颜。
     */
    public $BeautyParam;

    /**
     * @var string 目前只支持mp4
     */
    public $OutputVideoType;

    /**
     * @param string $Url 视频url地址
     * @param array $BeautyParam 美颜参数 - 美白、平滑、大眼和瘦脸。参数值范围[0, 100]。参数值为0，则不做美颜。参数默认值为0。目前默认取数组第一个元素是对所有人脸美颜。
     * @param string $OutputVideoType 目前只支持mp4
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BeautyParam",$param) and $param["BeautyParam"] !== null) {
            $this->BeautyParam = [];
            foreach ($param["BeautyParam"] as $key => $value){
                $obj = new BeautyParam();
                $obj->deserialize($value);
                array_push($this->BeautyParam, $obj);
            }
        }

        if (array_key_exists("OutputVideoType",$param) and $param["OutputVideoType"] !== null) {
            $this->OutputVideoType = $param["OutputVideoType"];
        }
    }
}
