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
 * 识别到的人员信息
 *
 * @method FrameInfo getFace() 获取识别到的人员信息
 * @method void setFace(FrameInfo $Face) 设置识别到的人员信息
 * @method string getPersonId() 获取识别到的人员id
 * @method void setPersonId(string $PersonId) 设置识别到的人员id
 */
class AttendanceInfo extends AbstractModel
{
    /**
     * @var FrameInfo 识别到的人员信息
     */
    public $Face;

    /**
     * @var string 识别到的人员id
     */
    public $PersonId;

    /**
     * @param FrameInfo $Face 识别到的人员信息
     * @param string $PersonId 识别到的人员id
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
        if (array_key_exists("Face",$param) and $param["Face"] !== null) {
            $this->Face = new FrameInfo();
            $this->Face->deserialize($param["Face"]);
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }
    }
}
