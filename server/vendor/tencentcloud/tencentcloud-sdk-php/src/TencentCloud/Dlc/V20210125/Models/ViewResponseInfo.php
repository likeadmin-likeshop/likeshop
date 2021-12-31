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
 * 查询视图信息对象
 *
 * @method ViewBaseInfo getViewBaseInfo() 获取视图基本信息。
 * @method void setViewBaseInfo(ViewBaseInfo $ViewBaseInfo) 设置视图基本信息。
 * @method array getColumns() 获取视图列信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置视图列信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取视图属性信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置视图属性信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取视图创建时间。
 * @method void setCreateTime(string $CreateTime) 设置视图创建时间。
 * @method string getModifiedTime() 获取视图更新时间。
 * @method void setModifiedTime(string $ModifiedTime) 设置视图更新时间。
 */
class ViewResponseInfo extends AbstractModel
{
    /**
     * @var ViewBaseInfo 视图基本信息。
     */
    public $ViewBaseInfo;

    /**
     * @var array 视图列信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var array 视图属性信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var string 视图创建时间。
     */
    public $CreateTime;

    /**
     * @var string 视图更新时间。
     */
    public $ModifiedTime;

    /**
     * @param ViewBaseInfo $ViewBaseInfo 视图基本信息。
     * @param array $Columns 视图列信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties 视图属性信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 视图创建时间。
     * @param string $ModifiedTime 视图更新时间。
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
        if (array_key_exists("ViewBaseInfo",$param) and $param["ViewBaseInfo"] !== null) {
            $this->ViewBaseInfo = new ViewBaseInfo();
            $this->ViewBaseInfo->deserialize($param["ViewBaseInfo"]);
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
