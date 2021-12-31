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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 挂载配置信息
 *
 * @method string getConfigDataName() 获取配置名称
 * @method void setConfigDataName(string $ConfigDataName) 设置配置名称
 * @method string getMountedPath() 获取挂载路径
 * @method void setMountedPath(string $MountedPath) 设置挂载路径
 * @method array getData() 获取配置内容
 * @method void setData(array $Data) 设置配置内容
 */
class MountedSettingConf extends AbstractModel
{
    /**
     * @var string 配置名称
     */
    public $ConfigDataName;

    /**
     * @var string 挂载路径
     */
    public $MountedPath;

    /**
     * @var array 配置内容
     */
    public $Data;

    /**
     * @param string $ConfigDataName 配置名称
     * @param string $MountedPath 挂载路径
     * @param array $Data 配置内容
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
        if (array_key_exists("ConfigDataName",$param) and $param["ConfigDataName"] !== null) {
            $this->ConfigDataName = $param["ConfigDataName"];
        }

        if (array_key_exists("MountedPath",$param) and $param["MountedPath"] !== null) {
            $this->MountedPath = $param["MountedPath"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new Pair();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
