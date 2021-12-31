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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个SdkAppId的音视频互动计费时长用量数组和数组长度。
 *
 * @method integer getTotalNum() 获取该 SdkAppId 对应的用量记录数长度
 * @method void setTotalNum(integer $TotalNum) 设置该 SdkAppId 对应的用量记录数长度
 * @method array getSdkAppIdTrtcTimeUsages() 获取用量数组
 * @method void setSdkAppIdTrtcTimeUsages(array $SdkAppIdTrtcTimeUsages) 设置用量数组
 * @method string getSdkAppId() 获取应用ID
 * @method void setSdkAppId(string $SdkAppId) 设置应用ID
 */
class OneSdkAppIdUsagesInfo extends AbstractModel
{
    /**
     * @var integer 该 SdkAppId 对应的用量记录数长度
     */
    public $TotalNum;

    /**
     * @var array 用量数组
     */
    public $SdkAppIdTrtcTimeUsages;

    /**
     * @var string 应用ID
     */
    public $SdkAppId;

    /**
     * @param integer $TotalNum 该 SdkAppId 对应的用量记录数长度
     * @param array $SdkAppIdTrtcTimeUsages 用量数组
     * @param string $SdkAppId 应用ID
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
        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("SdkAppIdTrtcTimeUsages",$param) and $param["SdkAppIdTrtcTimeUsages"] !== null) {
            $this->SdkAppIdTrtcTimeUsages = [];
            foreach ($param["SdkAppIdTrtcTimeUsages"] as $key => $value){
                $obj = new SdkAppIdTrtcUsage();
                $obj->deserialize($value);
                array_push($this->SdkAppIdTrtcTimeUsages, $obj);
            }
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
