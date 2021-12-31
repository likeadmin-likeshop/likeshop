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
 * 编辑处理/剪切任务信息
 *
 * @method MediaCuttingTimeInfo getTimeInfo() 获取截取时间信息。
 * @method void setTimeInfo(MediaCuttingTimeInfo $TimeInfo) 设置截取时间信息。
 * @method MediaTargetInfo getTargetInfo() 获取输出结果信息。
 * @method void setTargetInfo(MediaTargetInfo $TargetInfo) 设置输出结果信息。
 * @method MediaCuttingOutForm getOutForm() 获取截取结果形式信息。
 * @method void setOutForm(MediaCuttingOutForm $OutForm) 设置截取结果形式信息。
 * @method string getResultListSaveType() 获取列表文件形式，存储到用户存储服务中，可选值：
UseSaveInfo：默认，结果列表和结果存储同一位置；
NoListFile：不存储结果列表。
 * @method void setResultListSaveType(string $ResultListSaveType) 设置列表文件形式，存储到用户存储服务中，可选值：
UseSaveInfo：默认，结果列表和结果存储同一位置；
NoListFile：不存储结果列表。
 */
class MediaCuttingInfo extends AbstractModel
{
    /**
     * @var MediaCuttingTimeInfo 截取时间信息。
     */
    public $TimeInfo;

    /**
     * @var MediaTargetInfo 输出结果信息。
     */
    public $TargetInfo;

    /**
     * @var MediaCuttingOutForm 截取结果形式信息。
     */
    public $OutForm;

    /**
     * @var string 列表文件形式，存储到用户存储服务中，可选值：
UseSaveInfo：默认，结果列表和结果存储同一位置；
NoListFile：不存储结果列表。
     */
    public $ResultListSaveType;

    /**
     * @param MediaCuttingTimeInfo $TimeInfo 截取时间信息。
     * @param MediaTargetInfo $TargetInfo 输出结果信息。
     * @param MediaCuttingOutForm $OutForm 截取结果形式信息。
     * @param string $ResultListSaveType 列表文件形式，存储到用户存储服务中，可选值：
UseSaveInfo：默认，结果列表和结果存储同一位置；
NoListFile：不存储结果列表。
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
        if (array_key_exists("TimeInfo",$param) and $param["TimeInfo"] !== null) {
            $this->TimeInfo = new MediaCuttingTimeInfo();
            $this->TimeInfo->deserialize($param["TimeInfo"]);
        }

        if (array_key_exists("TargetInfo",$param) and $param["TargetInfo"] !== null) {
            $this->TargetInfo = new MediaTargetInfo();
            $this->TargetInfo->deserialize($param["TargetInfo"]);
        }

        if (array_key_exists("OutForm",$param) and $param["OutForm"] !== null) {
            $this->OutForm = new MediaCuttingOutForm();
            $this->OutForm->deserialize($param["OutForm"]);
        }

        if (array_key_exists("ResultListSaveType",$param) and $param["ResultListSaveType"] !== null) {
            $this->ResultListSaveType = $param["ResultListSaveType"];
        }
    }
}
