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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分类信息描述
 *
 * @method integer getClassId() 获取分类 ID
 * @method void setClassId(integer $ClassId) 设置分类 ID
 * @method integer getParentId() 获取父类 ID，一级分类的父类 ID 为 -1。
 * @method void setParentId(integer $ParentId) 设置父类 ID，一级分类的父类 ID 为 -1。
 * @method string getClassName() 获取分类名称
 * @method void setClassName(string $ClassName) 设置分类名称
 * @method integer getLevel() 获取分类级别，一级分类为 0，最大值为 3，即最多允许 4 级分类层次。
 * @method void setLevel(integer $Level) 设置分类级别，一级分类为 0，最大值为 3，即最多允许 4 级分类层次。
 * @method array getSubClassIdSet() 获取当前分类的第一级子类 ID 集合
 * @method void setSubClassIdSet(array $SubClassIdSet) 设置当前分类的第一级子类 ID 集合
 */
class MediaClassInfo extends AbstractModel
{
    /**
     * @var integer 分类 ID
     */
    public $ClassId;

    /**
     * @var integer 父类 ID，一级分类的父类 ID 为 -1。
     */
    public $ParentId;

    /**
     * @var string 分类名称
     */
    public $ClassName;

    /**
     * @var integer 分类级别，一级分类为 0，最大值为 3，即最多允许 4 级分类层次。
     */
    public $Level;

    /**
     * @var array 当前分类的第一级子类 ID 集合
     */
    public $SubClassIdSet;

    /**
     * @param integer $ClassId 分类 ID
     * @param integer $ParentId 父类 ID，一级分类的父类 ID 为 -1。
     * @param string $ClassName 分类名称
     * @param integer $Level 分类级别，一级分类为 0，最大值为 3，即最多允许 4 级分类层次。
     * @param array $SubClassIdSet 当前分类的第一级子类 ID 集合
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
        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubClassIdSet",$param) and $param["SubClassIdSet"] !== null) {
            $this->SubClassIdSet = $param["SubClassIdSet"];
        }
    }
}
