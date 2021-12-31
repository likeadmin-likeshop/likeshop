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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大教室场景肢体动作识别信息
 *
 * @method ActionType getBodyPosture() 获取躯体动作识别结果，包含坐着（sit）、站立（stand）和趴睡（sleep）
 * @method void setBodyPosture(ActionType $BodyPosture) 设置躯体动作识别结果，包含坐着（sit）、站立（stand）和趴睡（sleep）
 * @method ActionType getHandup() 获取举手识别结果，包含举手（hand）和未检测到举手（nothand）
 * @method void setHandup(ActionType $Handup) 设置举手识别结果，包含举手（hand）和未检测到举手（nothand）
 * @method ActionType getLookHead() 获取是否低头识别结果，包含抬头（lookingahead）和未检测到抬头（notlookingahead）
 * @method void setLookHead(ActionType $LookHead) 设置是否低头识别结果，包含抬头（lookingahead）和未检测到抬头（notlookingahead）
 * @method ActionType getWriting() 获取是否写字识别结果，包含写字（write）和未检测到写字（notlookingahead）
 * @method void setWriting(ActionType $Writing) 设置是否写字识别结果，包含写字（write）和未检测到写字（notlookingahead）
 * @method integer getHeight() 获取动作图像高度
 * @method void setHeight(integer $Height) 设置动作图像高度
 * @method integer getLeft() 获取动作出现图像的左侧起始坐标位置
 * @method void setLeft(integer $Left) 设置动作出现图像的左侧起始坐标位置
 * @method integer getTop() 获取动作出现图像的上侧起始侧坐标位置
 * @method void setTop(integer $Top) 设置动作出现图像的上侧起始侧坐标位置
 * @method integer getWidth() 获取动作图像宽度
 * @method void setWidth(integer $Width) 设置动作图像宽度
 */
class ActionInfo extends AbstractModel
{
    /**
     * @var ActionType 躯体动作识别结果，包含坐着（sit）、站立（stand）和趴睡（sleep）
     */
    public $BodyPosture;

    /**
     * @var ActionType 举手识别结果，包含举手（hand）和未检测到举手（nothand）
     */
    public $Handup;

    /**
     * @var ActionType 是否低头识别结果，包含抬头（lookingahead）和未检测到抬头（notlookingahead）
     */
    public $LookHead;

    /**
     * @var ActionType 是否写字识别结果，包含写字（write）和未检测到写字（notlookingahead）
     */
    public $Writing;

    /**
     * @var integer 动作图像高度
     */
    public $Height;

    /**
     * @var integer 动作出现图像的左侧起始坐标位置
     */
    public $Left;

    /**
     * @var integer 动作出现图像的上侧起始侧坐标位置
     */
    public $Top;

    /**
     * @var integer 动作图像宽度
     */
    public $Width;

    /**
     * @param ActionType $BodyPosture 躯体动作识别结果，包含坐着（sit）、站立（stand）和趴睡（sleep）
     * @param ActionType $Handup 举手识别结果，包含举手（hand）和未检测到举手（nothand）
     * @param ActionType $LookHead 是否低头识别结果，包含抬头（lookingahead）和未检测到抬头（notlookingahead）
     * @param ActionType $Writing 是否写字识别结果，包含写字（write）和未检测到写字（notlookingahead）
     * @param integer $Height 动作图像高度
     * @param integer $Left 动作出现图像的左侧起始坐标位置
     * @param integer $Top 动作出现图像的上侧起始侧坐标位置
     * @param integer $Width 动作图像宽度
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
        if (array_key_exists("BodyPosture",$param) and $param["BodyPosture"] !== null) {
            $this->BodyPosture = new ActionType();
            $this->BodyPosture->deserialize($param["BodyPosture"]);
        }

        if (array_key_exists("Handup",$param) and $param["Handup"] !== null) {
            $this->Handup = new ActionType();
            $this->Handup->deserialize($param["Handup"]);
        }

        if (array_key_exists("LookHead",$param) and $param["LookHead"] !== null) {
            $this->LookHead = new ActionType();
            $this->LookHead->deserialize($param["LookHead"]);
        }

        if (array_key_exists("Writing",$param) and $param["Writing"] !== null) {
            $this->Writing = new ActionType();
            $this->Writing->deserialize($param["Writing"]);
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }
    }
}
