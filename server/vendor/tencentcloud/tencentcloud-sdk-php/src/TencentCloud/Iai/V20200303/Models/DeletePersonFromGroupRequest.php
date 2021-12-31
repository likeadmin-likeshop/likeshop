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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePersonFromGroup请求参数结构体
 *
 * @method string getPersonId() 获取人员ID，取值为创建人员接口中的PersonId
 * @method void setPersonId(string $PersonId) 设置人员ID，取值为创建人员接口中的PersonId
 * @method string getGroupId() 获取人员库ID，取值为创建人员库接口中的GroupId
 * @method void setGroupId(string $GroupId) 设置人员库ID，取值为创建人员库接口中的GroupId
 */
class DeletePersonFromGroupRequest extends AbstractModel
{
    /**
     * @var string 人员ID，取值为创建人员接口中的PersonId
     */
    public $PersonId;

    /**
     * @var string 人员库ID，取值为创建人员库接口中的GroupId
     */
    public $GroupId;

    /**
     * @param string $PersonId 人员ID，取值为创建人员接口中的PersonId
     * @param string $GroupId 人员库ID，取值为创建人员库接口中的GroupId
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
