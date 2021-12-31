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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logo
 *
 * @method RrectF getRrectF() 获取logo图标坐标信息
 * @method void setRrectF(RrectF $RrectF) 设置logo图标坐标信息
 * @method float getConfidence() 获取logo图标置信度
 * @method void setConfidence(float $Confidence) 设置logo图标置信度
 * @method string getName() 获取logo图标名称
 * @method void setName(string $Name) 设置logo图标名称
 */
class Logo extends AbstractModel
{
    /**
     * @var RrectF logo图标坐标信息
     */
    public $RrectF;

    /**
     * @var float logo图标置信度
     */
    public $Confidence;

    /**
     * @var string logo图标名称
     */
    public $Name;

    /**
     * @param RrectF $RrectF logo图标坐标信息
     * @param float $Confidence logo图标置信度
     * @param string $Name logo图标名称
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
        if (array_key_exists("RrectF",$param) and $param["RrectF"] !== null) {
            $this->RrectF = new RrectF();
            $this->RrectF->deserialize($param["RrectF"]);
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
