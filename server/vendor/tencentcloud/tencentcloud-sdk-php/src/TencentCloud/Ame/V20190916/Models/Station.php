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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分类内容
 *
 * @method string getCategoryID() 获取StationID
 * @method void setCategoryID(string $CategoryID) 设置StationID
 * @method string getCategoryCode() 获取Station MCCode
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryCode(string $CategoryCode) 设置Station MCCode
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取Category Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置Category Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRank() 获取Station的排序值，供参考（返回结果已按其升序）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRank(integer $Rank) 设置Station的排序值，供参考（返回结果已按其升序）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImagePathMap() 获取station图片集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImagePathMap(array $ImagePathMap) 设置station图片集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class Station extends AbstractModel
{
    /**
     * @var string StationID
     */
    public $CategoryID;

    /**
     * @var string Station MCCode
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryCode;

    /**
     * @var string Category Name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer Station的排序值，供参考（返回结果已按其升序）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rank;

    /**
     * @var array station图片集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImagePathMap;

    /**
     * @param string $CategoryID StationID
     * @param string $CategoryCode Station MCCode
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name Category Name
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Rank Station的排序值，供参考（返回结果已按其升序）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImagePathMap station图片集合
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CategoryID",$param) and $param["CategoryID"] !== null) {
            $this->CategoryID = $param["CategoryID"];
        }

        if (array_key_exists("CategoryCode",$param) and $param["CategoryCode"] !== null) {
            $this->CategoryCode = $param["CategoryCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rank",$param) and $param["Rank"] !== null) {
            $this->Rank = $param["Rank"];
        }

        if (array_key_exists("ImagePathMap",$param) and $param["ImagePathMap"] !== null) {
            $this->ImagePathMap = [];
            foreach ($param["ImagePathMap"] as $key => $value){
                $obj = new ImagePath();
                $obj->deserialize($value);
                array_push($this->ImagePathMap, $obj);
            }
        }
    }
}
