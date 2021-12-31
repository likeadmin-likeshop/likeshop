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
 * 移动告警
 *
 * @method boolean getMove() 获取是否移动
 * @method void setMove(boolean $Move) 设置是否移动
 * @method float getMoveConfidence() 获取是否移动置信度
 * @method void setMoveConfidence(float $MoveConfidence) 设置是否移动置信度
 */
class CreateCameraAlertsMoveAlert extends AbstractModel
{
    /**
     * @var boolean 是否移动
     */
    public $Move;

    /**
     * @var float 是否移动置信度
     */
    public $MoveConfidence;

    /**
     * @param boolean $Move 是否移动
     * @param float $MoveConfidence 是否移动置信度
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
        if (array_key_exists("Move",$param) and $param["Move"] !== null) {
            $this->Move = $param["Move"];
        }

        if (array_key_exists("MoveConfidence",$param) and $param["MoveConfidence"] !== null) {
            $this->MoveConfidence = $param["MoveConfidence"];
        }
    }
}
