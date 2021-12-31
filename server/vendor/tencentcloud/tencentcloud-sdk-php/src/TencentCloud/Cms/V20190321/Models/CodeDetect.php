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
 * 图片二维码详情
 *
 * @method array getModerationDetail() 获取从图片中检测到的二维码，可能为多个
 * @method void setModerationDetail(array $ModerationDetail) 设置从图片中检测到的二维码，可能为多个
 * @method integer getModerationCode() 获取检测是否成功，0：成功，-1：出错
 * @method void setModerationCode(integer $ModerationCode) 设置检测是否成功，0：成功，-1：出错
 */
class CodeDetect extends AbstractModel
{
    /**
     * @var array 从图片中检测到的二维码，可能为多个
     */
    public $ModerationDetail;

    /**
     * @var integer 检测是否成功，0：成功，-1：出错
     */
    public $ModerationCode;

    /**
     * @param array $ModerationDetail 从图片中检测到的二维码，可能为多个
     * @param integer $ModerationCode 检测是否成功，0：成功，-1：出错
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
        if (array_key_exists("ModerationDetail",$param) and $param["ModerationDetail"] !== null) {
            $this->ModerationDetail = [];
            foreach ($param["ModerationDetail"] as $key => $value){
                $obj = new CodeDetail();
                $obj->deserialize($value);
                array_push($this->ModerationDetail, $obj);
            }
        }

        if (array_key_exists("ModerationCode",$param) and $param["ModerationCode"] !== null) {
            $this->ModerationCode = $param["ModerationCode"];
        }
    }
}
