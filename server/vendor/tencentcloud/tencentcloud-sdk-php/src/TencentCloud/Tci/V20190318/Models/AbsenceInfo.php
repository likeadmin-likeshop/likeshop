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
 * 缺勤人员信息
 *
 * @method string getLibraryIds() 获取识别到的人员所在的库id
 * @method void setLibraryIds(string $LibraryIds) 设置识别到的人员所在的库id
 * @method string getPersonId() 获取识别到的人员id
 * @method void setPersonId(string $PersonId) 设置识别到的人员id
 */
class AbsenceInfo extends AbstractModel
{
    /**
     * @var string 识别到的人员所在的库id
     */
    public $LibraryIds;

    /**
     * @var string 识别到的人员id
     */
    public $PersonId;

    /**
     * @param string $LibraryIds 识别到的人员所在的库id
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
        if (array_key_exists("LibraryIds",$param) and $param["LibraryIds"] !== null) {
            $this->LibraryIds = $param["LibraryIds"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }
    }
}
