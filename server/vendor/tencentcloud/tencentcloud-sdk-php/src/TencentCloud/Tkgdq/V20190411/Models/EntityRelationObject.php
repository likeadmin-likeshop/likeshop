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
namespace TencentCloud\Tkgdq\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实体关系查询返回的Object类型
 *
 * @method array getId() 获取object对应id
 * @method void setId(array $Id) 设置object对应id
 * @method array getName() 获取object对应name
 * @method void setName(array $Name) 设置object对应name
 * @method array getPopular() 获取object对应popular值
 * @method void setPopular(array $Popular) 设置object对应popular值
 */
class EntityRelationObject extends AbstractModel
{
    /**
     * @var array object对应id
     */
    public $Id;

    /**
     * @var array object对应name
     */
    public $Name;

    /**
     * @var array object对应popular值
     */
    public $Popular;

    /**
     * @param array $Id object对应id
     * @param array $Name object对应name
     * @param array $Popular object对应popular值
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Popular",$param) and $param["Popular"] !== null) {
            $this->Popular = $param["Popular"];
        }
    }
}
