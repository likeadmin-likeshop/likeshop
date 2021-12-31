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
 * Album
 *
 * @method string getAlbumName() 获取专辑名
 * @method void setAlbumName(string $AlbumName) 设置专辑名
 * @method array getImagePathMap() 获取专辑图片大小及类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImagePathMap(array $ImagePathMap) 设置专辑图片大小及类别
注意：此字段可能返回 null，表示取不到有效值。
 */
class Album extends AbstractModel
{
    /**
     * @var string 专辑名
     */
    public $AlbumName;

    /**
     * @var array 专辑图片大小及类别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImagePathMap;

    /**
     * @param string $AlbumName 专辑名
     * @param array $ImagePathMap 专辑图片大小及类别
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
        if (array_key_exists("AlbumName",$param) and $param["AlbumName"] !== null) {
            $this->AlbumName = $param["AlbumName"];
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
