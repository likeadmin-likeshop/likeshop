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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签数据
 *
 * @method float getProportion() 获取标签覆盖率占比（在整个上传的ID列表中的覆盖率）
 * @method void setProportion(float $Proportion) 设置标签覆盖率占比（在整个上传的ID列表中的覆盖率）
 * @method float getMarket() 获取标签大盘覆盖率占比
 * @method void setMarket(float $Market) 设置标签大盘覆盖率占比
 * @method float getTgi() 获取TGI指数，由Proportion除以Market得到
 * @method void setTgi(float $Tgi) 设置TGI指数，由Proportion除以Market得到
 */
class LabelValue extends AbstractModel
{
    /**
     * @var float 标签覆盖率占比（在整个上传的ID列表中的覆盖率）
     */
    public $Proportion;

    /**
     * @var float 标签大盘覆盖率占比
     */
    public $Market;

    /**
     * @var float TGI指数，由Proportion除以Market得到
     */
    public $Tgi;

    /**
     * @param float $Proportion 标签覆盖率占比（在整个上传的ID列表中的覆盖率）
     * @param float $Market 标签大盘覆盖率占比
     * @param float $Tgi TGI指数，由Proportion除以Market得到
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
        if (array_key_exists("Proportion",$param) and $param["Proportion"] !== null) {
            $this->Proportion = $param["Proportion"];
        }

        if (array_key_exists("Market",$param) and $param["Market"] !== null) {
            $this->Market = $param["Market"];
        }

        if (array_key_exists("Tgi",$param) and $param["Tgi"] !== null) {
            $this->Tgi = $param["Tgi"];
        }
    }
}
