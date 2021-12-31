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
 * 包含此人员的人员库及描述字段内容列表
 *
 * @method string getGroupId() 获取包含此人员的人员库ID
 * @method void setGroupId(string $GroupId) 设置包含此人员的人员库ID
 * @method array getPersonExDescriptions() 获取人员描述字段内容
 * @method void setPersonExDescriptions(array $PersonExDescriptions) 设置人员描述字段内容
 */
class PersonGroupInfo extends AbstractModel
{
    /**
     * @var string 包含此人员的人员库ID
     */
    public $GroupId;

    /**
     * @var array 人员描述字段内容
     */
    public $PersonExDescriptions;

    /**
     * @param string $GroupId 包含此人员的人员库ID
     * @param array $PersonExDescriptions 人员描述字段内容
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

        if (array_key_exists("PersonExDescriptions",$param) and $param["PersonExDescriptions"] !== null) {
            $this->PersonExDescriptions = $param["PersonExDescriptions"];
        }
    }
}
