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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPersonGroupInfo请求参数结构体
 *
 * @method string getGroupId() 获取人员库ID
 * @method void setGroupId(string $GroupId) 设置人员库ID
 * @method string getPersonId() 获取人员ID
 * @method void setPersonId(string $PersonId) 设置人员ID
 * @method array getPersonExDescriptionInfos() 获取需要修改的人员描述字段内容，key-value
 * @method void setPersonExDescriptionInfos(array $PersonExDescriptionInfos) 设置需要修改的人员描述字段内容，key-value
 */
class ModifyPersonGroupInfoRequest extends AbstractModel
{
    /**
     * @var string 人员库ID
     */
    public $GroupId;

    /**
     * @var string 人员ID
     */
    public $PersonId;

    /**
     * @var array 需要修改的人员描述字段内容，key-value
     */
    public $PersonExDescriptionInfos;

    /**
     * @param string $GroupId 人员库ID
     * @param string $PersonId 人员ID
     * @param array $PersonExDescriptionInfos 需要修改的人员描述字段内容，key-value
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

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("PersonExDescriptionInfos",$param) and $param["PersonExDescriptionInfos"] !== null) {
            $this->PersonExDescriptionInfos = [];
            foreach ($param["PersonExDescriptionInfos"] as $key => $value){
                $obj = new PersonExDescriptionInfo();
                $obj->deserialize($value);
                array_push($this->PersonExDescriptionInfos, $obj);
            }
        }
    }
}
