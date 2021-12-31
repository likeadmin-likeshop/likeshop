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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视图基本配置信息
 *
 * @method string getDatabaseName() 获取该视图所属数据库名字
 * @method void setDatabaseName(string $DatabaseName) 设置该视图所属数据库名字
 * @method string getViewName() 获取视图名称
 * @method void setViewName(string $ViewName) 设置视图名称
 */
class ViewBaseInfo extends AbstractModel
{
    /**
     * @var string 该视图所属数据库名字
     */
    public $DatabaseName;

    /**
     * @var string 视图名称
     */
    public $ViewName;

    /**
     * @param string $DatabaseName 该视图所属数据库名字
     * @param string $ViewName 视图名称
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }
    }
}
