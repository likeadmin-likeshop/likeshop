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
 * 视频源信息
 *
 * @method integer getType() 获取下载类型，可选值： 
0：UrlInfo； 
1：CosInfo。
 * @method void setType(integer $Type) 设置下载类型，可选值： 
0：UrlInfo； 
1：CosInfo。
 * @method UrlInfo getUrlInfo() 获取Url形式下载信息，当Type等于0时必选。
 * @method void setUrlInfo(UrlInfo $UrlInfo) 设置Url形式下载信息，当Type等于0时必选。
 * @method CosInfo getCosInfo() 获取Cos形式下载信息，当Type等于1时必选。
 * @method void setCosInfo(CosInfo $CosInfo) 设置Cos形式下载信息，当Type等于1时必选。
 */
class DownInfo extends AbstractModel
{
    /**
     * @var integer 下载类型，可选值： 
0：UrlInfo； 
1：CosInfo。
     */
    public $Type;

    /**
     * @var UrlInfo Url形式下载信息，当Type等于0时必选。
     */
    public $UrlInfo;

    /**
     * @var CosInfo Cos形式下载信息，当Type等于1时必选。
     */
    public $CosInfo;

    /**
     * @param integer $Type 下载类型，可选值： 
0：UrlInfo； 
1：CosInfo。
     * @param UrlInfo $UrlInfo Url形式下载信息，当Type等于0时必选。
     * @param CosInfo $CosInfo Cos形式下载信息，当Type等于1时必选。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UrlInfo",$param) and $param["UrlInfo"] !== null) {
            $this->UrlInfo = new UrlInfo();
            $this->UrlInfo->deserialize($param["UrlInfo"]);
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new CosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }
    }
}
