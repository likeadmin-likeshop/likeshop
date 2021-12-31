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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 遮挡告警
 *
 * @method boolean getCover() 获取是否遮挡
 * @method void setCover(boolean $Cover) 设置是否遮挡
 * @method float getCoverConfidence() 获取是否移动置信度
 * @method void setCoverConfidence(float $CoverConfidence) 设置是否移动置信度
 */
class CreateCameraAlertsCoverAlert extends AbstractModel
{
    /**
     * @var boolean 是否遮挡
     */
    public $Cover;

    /**
     * @var float 是否移动置信度
     */
    public $CoverConfidence;

    /**
     * @param boolean $Cover 是否遮挡
     * @param float $CoverConfidence 是否移动置信度
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
        if (array_key_exists("Cover",$param) and $param["Cover"] !== null) {
            $this->Cover = $param["Cover"];
        }

        if (array_key_exists("CoverConfidence",$param) and $param["CoverConfidence"] !== null) {
            $this->CoverConfidence = $param["CoverConfidence"];
        }
    }
}
