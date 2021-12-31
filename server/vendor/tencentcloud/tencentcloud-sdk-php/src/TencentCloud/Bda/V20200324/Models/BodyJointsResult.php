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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人体框和人体关键点信息。
 *
 * @method BoundRect getBoundBox() 获取图中检测出来的人体框。
 * @method void setBoundBox(BoundRect $BoundBox) 设置图中检测出来的人体框。
 * @method array getBodyJoints() 获取14个人体关键点的坐标，人体关键点详见KeyPointInfo。
 * @method void setBodyJoints(array $BodyJoints) 设置14个人体关键点的坐标，人体关键点详见KeyPointInfo。
 * @method float getConfidence() 获取检测出的人体置信度，0-1之间，数值越高越准确。
 * @method void setConfidence(float $Confidence) 设置检测出的人体置信度，0-1之间，数值越高越准确。
 */
class BodyJointsResult extends AbstractModel
{
    /**
     * @var BoundRect 图中检测出来的人体框。
     */
    public $BoundBox;

    /**
     * @var array 14个人体关键点的坐标，人体关键点详见KeyPointInfo。
     */
    public $BodyJoints;

    /**
     * @var float 检测出的人体置信度，0-1之间，数值越高越准确。
     */
    public $Confidence;

    /**
     * @param BoundRect $BoundBox 图中检测出来的人体框。
     * @param array $BodyJoints 14个人体关键点的坐标，人体关键点详见KeyPointInfo。
     * @param float $Confidence 检测出的人体置信度，0-1之间，数值越高越准确。
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
        if (array_key_exists("BoundBox",$param) and $param["BoundBox"] !== null) {
            $this->BoundBox = new BoundRect();
            $this->BoundBox->deserialize($param["BoundBox"]);
        }

        if (array_key_exists("BodyJoints",$param) and $param["BodyJoints"] !== null) {
            $this->BodyJoints = [];
            foreach ($param["BodyJoints"] as $key => $value){
                $obj = new KeyPointInfo();
                $obj->deserialize($value);
                array_push($this->BodyJoints, $obj);
            }
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
