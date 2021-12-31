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
 * 旁路转码时长的查询结果
 *
 * @method array getSdkAppIdTranscodeTimeUsages() 获取旁路转码时长查询结果数组
 * @method void setSdkAppIdTranscodeTimeUsages(array $SdkAppIdTranscodeTimeUsages) 设置旁路转码时长查询结果数组
 * @method integer getTotalNum() 获取查询记录数量
 * @method void setTotalNum(integer $TotalNum) 设置查询记录数量
 * @method string getSdkAppId() 获取所查询的应用ID，可能值为:1-应用的应用ID，2-total，显示为total则表示查询的是所有应用的用量合计值。
 * @method void setSdkAppId(string $SdkAppId) 设置所查询的应用ID，可能值为:1-应用的应用ID，2-total，显示为total则表示查询的是所有应用的用量合计值。
 */
class OneSdkAppIdTranscodeTimeUsagesInfo extends AbstractModel
{
    /**
     * @var array 旁路转码时长查询结果数组
     */
    public $SdkAppIdTranscodeTimeUsages;

    /**
     * @var integer 查询记录数量
     */
    public $TotalNum;

    /**
     * @var string 所查询的应用ID，可能值为:1-应用的应用ID，2-total，显示为total则表示查询的是所有应用的用量合计值。
     */
    public $SdkAppId;

    /**
     * @param array $SdkAppIdTranscodeTimeUsages 旁路转码时长查询结果数组
     * @param integer $TotalNum 查询记录数量
     * @param string $SdkAppId 所查询的应用ID，可能值为:1-应用的应用ID，2-total，显示为total则表示查询的是所有应用的用量合计值。
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
        if (array_key_exists("SdkAppIdTranscodeTimeUsages",$param) and $param["SdkAppIdTranscodeTimeUsages"] !== null) {
            $this->SdkAppIdTranscodeTimeUsages = [];
            foreach ($param["SdkAppIdTranscodeTimeUsages"] as $key => $value){
                $obj = new SdkAppIdTrtcMcuTranscodeTimeUsage();
                $obj->deserialize($value);
                array_push($this->SdkAppIdTranscodeTimeUsages, $obj);
            }
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
