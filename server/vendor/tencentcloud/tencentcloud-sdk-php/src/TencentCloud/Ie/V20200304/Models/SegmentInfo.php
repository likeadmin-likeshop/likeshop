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
 * 输出文件切片信息
 *
 * @method integer getFragmentTime() 获取每个切片平均时长，默认10s。
 * @method void setFragmentTime(integer $FragmentTime) 设置每个切片平均时长，默认10s。
 * @method string getSegmentType() 获取切片类型，可选项：hls，不填时默认hls。
 * @method void setSegmentType(string $SegmentType) 设置切片类型，可选项：hls，不填时默认hls。
 * @method string getFragmentName() 获取切片文件名字。注意：
1.不填切片文件名时，默认按照按照如下格式命名：m3u8文件名{order}。
2.若填了切片文件名字，则会按照如下格式命名：用户指定文件名{order}。
 * @method void setFragmentName(string $FragmentName) 设置切片文件名字。注意：
1.不填切片文件名时，默认按照按照如下格式命名：m3u8文件名{order}。
2.若填了切片文件名字，则会按照如下格式命名：用户指定文件名{order}。
 */
class SegmentInfo extends AbstractModel
{
    /**
     * @var integer 每个切片平均时长，默认10s。
     */
    public $FragmentTime;

    /**
     * @var string 切片类型，可选项：hls，不填时默认hls。
     */
    public $SegmentType;

    /**
     * @var string 切片文件名字。注意：
1.不填切片文件名时，默认按照按照如下格式命名：m3u8文件名{order}。
2.若填了切片文件名字，则会按照如下格式命名：用户指定文件名{order}。
     */
    public $FragmentName;

    /**
     * @param integer $FragmentTime 每个切片平均时长，默认10s。
     * @param string $SegmentType 切片类型，可选项：hls，不填时默认hls。
     * @param string $FragmentName 切片文件名字。注意：
1.不填切片文件名时，默认按照按照如下格式命名：m3u8文件名{order}。
2.若填了切片文件名字，则会按照如下格式命名：用户指定文件名{order}。
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
        if (array_key_exists("FragmentTime",$param) and $param["FragmentTime"] !== null) {
            $this->FragmentTime = $param["FragmentTime"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("FragmentName",$param) and $param["FragmentName"] !== null) {
            $this->FragmentName = $param["FragmentName"];
        }
    }
}
