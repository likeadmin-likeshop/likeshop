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
 * 返回的实体关系查询结果详细内容
 *
 * @method array getObject() 获取实体关系查询返回关系的object
 * @method void setObject(array $Object) 设置实体关系查询返回关系的object
 * @method array getSubject() 获取实体关系查询返回关系的subject
 * @method void setSubject(array $Subject) 设置实体关系查询返回关系的subject
 * @method string getRelation() 获取实体关系查询返回的关系名称
 * @method void setRelation(string $Relation) 设置实体关系查询返回的关系名称
 */
class EntityRelationContent extends AbstractModel
{
    /**
     * @var array 实体关系查询返回关系的object
     */
    public $Object;

    /**
     * @var array 实体关系查询返回关系的subject
     */
    public $Subject;

    /**
     * @var string 实体关系查询返回的关系名称
     */
    public $Relation;

    /**
     * @param array $Object 实体关系查询返回关系的object
     * @param array $Subject 实体关系查询返回关系的subject
     * @param string $Relation 实体关系查询返回的关系名称
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
        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = [];
            foreach ($param["Object"] as $key => $value){
                $obj = new EntityRelationObject();
                $obj->deserialize($value);
                array_push($this->Object, $obj);
            }
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = [];
            foreach ($param["Subject"] as $key => $value){
                $obj = new EntityRelationSubject();
                $obj->deserialize($value);
                array_push($this->Subject, $obj);
            }
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }
    }
}
