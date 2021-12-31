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
 * CreatePerson请求参数结构体
 *
 * @method string getGroupId() 获取待加入的人员库ID。
 * @method void setGroupId(string $GroupId) 设置待加入的人员库ID。
 * @method string getPersonName() 获取人员名称。[1，60]个字符，可修改，可重复。
 * @method void setPersonName(string $PersonName) 设置人员名称。[1，60]个字符，可修改，可重复。
 * @method string getPersonId() 获取人员ID，单个腾讯云账号下不可修改，不可重复。 
支持英文、数字、-%@#&_，，长度限制64B。
 * @method void setPersonId(string $PersonId) 设置人员ID，单个腾讯云账号下不可修改，不可重复。 
支持英文、数字、-%@#&_，，长度限制64B。
 * @method Trace getTrace() 获取人体轨迹信息。
 * @method void setTrace(Trace $Trace) 设置人体轨迹信息。
 */
class CreatePersonRequest extends AbstractModel
{
    /**
     * @var string 待加入的人员库ID。
     */
    public $GroupId;

    /**
     * @var string 人员名称。[1，60]个字符，可修改，可重复。
     */
    public $PersonName;

    /**
     * @var string 人员ID，单个腾讯云账号下不可修改，不可重复。 
支持英文、数字、-%@#&_，，长度限制64B。
     */
    public $PersonId;

    /**
     * @var Trace 人体轨迹信息。
     */
    public $Trace;

    /**
     * @param string $GroupId 待加入的人员库ID。
     * @param string $PersonName 人员名称。[1，60]个字符，可修改，可重复。
     * @param string $PersonId 人员ID，单个腾讯云账号下不可修改，不可重复。 
支持英文、数字、-%@#&_，，长度限制64B。
     * @param Trace $Trace 人体轨迹信息。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = new Trace();
            $this->Trace->deserialize($param["Trace"]);
        }
    }
}
