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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取设备绑定信息时返回的设备所绑定的转发路径信息。
 *
 * @method string getUrl() 获取转发路径。
 * @method void setUrl(string $Url) 设置转发路径。
 * @method string getLocationId() 获取转发路径实例ID。
 * @method void setLocationId(string $LocationId) 设置转发路径实例ID。
 * @method array getBackendSet() 获取该转发路径所绑定的主机列表。
 * @method void setBackendSet(array $BackendSet) 设置该转发路径所绑定的主机列表。
 */
class DevicesBindInfoLocation extends AbstractModel
{
    /**
     * @var string 转发路径。
     */
    public $Url;

    /**
     * @var string 转发路径实例ID。
     */
    public $LocationId;

    /**
     * @var array 该转发路径所绑定的主机列表。
     */
    public $BackendSet;

    /**
     * @param string $Url 转发路径。
     * @param string $LocationId 转发路径实例ID。
     * @param array $BackendSet 该转发路径所绑定的主机列表。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("BackendSet",$param) and $param["BackendSet"] !== null) {
            $this->BackendSet = [];
            foreach ($param["BackendSet"] as $key => $value){
                $obj = new DevicesBindInfoBackend();
                $obj->deserialize($value);
                array_push($this->BackendSet, $obj);
            }
        }
    }
}
