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
 * 人员信息。
 *
 * @method string getPersonName() 获取人员名称。
 * @method void setPersonName(string $PersonName) 设置人员名称。
 * @method string getPersonId() 获取人员ID。
 * @method void setPersonId(string $PersonId) 设置人员ID。
 * @method array getTraceInfos() 获取包含的人体轨迹图片信息列表。
 * @method void setTraceInfos(array $TraceInfos) 设置包含的人体轨迹图片信息列表。
 */
class PersonInfo extends AbstractModel
{
    /**
     * @var string 人员名称。
     */
    public $PersonName;

    /**
     * @var string 人员ID。
     */
    public $PersonId;

    /**
     * @var array 包含的人体轨迹图片信息列表。
     */
    public $TraceInfos;

    /**
     * @param string $PersonName 人员名称。
     * @param string $PersonId 人员ID。
     * @param array $TraceInfos 包含的人体轨迹图片信息列表。
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
        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("TraceInfos",$param) and $param["TraceInfos"] !== null) {
            $this->TraceInfos = [];
            foreach ($param["TraceInfos"] as $key => $value){
                $obj = new TraceInfo();
                $obj->deserialize($value);
                array_push($this->TraceInfos, $obj);
            }
        }
    }
}
