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
 * CopyPerson请求参数结构体
 *
 * @method string getPersonId() 获取人员ID
 * @method void setPersonId(string $PersonId) 设置人员ID
 * @method array getGroupIds() 获取待加入的人员库列表
 * @method void setGroupIds(array $GroupIds) 设置待加入的人员库列表
 */
class CopyPersonRequest extends AbstractModel
{
    /**
     * @var string 人员ID
     */
    public $PersonId;

    /**
     * @var array 待加入的人员库列表
     */
    public $GroupIds;

    /**
     * @param string $PersonId 人员ID
     * @param array $GroupIds 待加入的人员库列表
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

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
