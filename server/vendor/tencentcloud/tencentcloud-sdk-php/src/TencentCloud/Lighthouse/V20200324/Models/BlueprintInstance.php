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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述镜像实例信息。
 *
 * @method Blueprint getBlueprint() 获取镜像信息。
 * @method void setBlueprint(Blueprint $Blueprint) 设置镜像信息。
 * @method array getSoftwareSet() 获取软件列表。
 * @method void setSoftwareSet(array $SoftwareSet) 设置软件列表。
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 */
class BlueprintInstance extends AbstractModel
{
    /**
     * @var Blueprint 镜像信息。
     */
    public $Blueprint;

    /**
     * @var array 软件列表。
     */
    public $SoftwareSet;

    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @param Blueprint $Blueprint 镜像信息。
     * @param array $SoftwareSet 软件列表。
     * @param string $InstanceId 实例 ID。
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
        if (array_key_exists("Blueprint",$param) and $param["Blueprint"] !== null) {
            $this->Blueprint = new Blueprint();
            $this->Blueprint->deserialize($param["Blueprint"]);
        }

        if (array_key_exists("SoftwareSet",$param) and $param["SoftwareSet"] !== null) {
            $this->SoftwareSet = [];
            foreach ($param["SoftwareSet"] as $key => $value){
                $obj = new Software();
                $obj->deserialize($value);
                array_push($this->SoftwareSet, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
