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
 * 歌曲信息
 *
 * @method string getItemID() 获取Song ID
 * @method void setItemID(string $ItemID) 设置Song ID
 * @method DataInfo getDataInfo() 获取Song info
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataInfo(DataInfo $DataInfo) 设置Song info
注意：此字段可能返回 null，表示取不到有效值。
 * @method Album getAlbum() 获取专辑信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlbum(Album $Album) 设置专辑信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getArtists() 获取多个歌手集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArtists(array $Artists) 设置多个歌手集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取歌曲状态，1:添加进购物车；2:核销进曲库包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置歌曲状态，1:添加进购物车；2:核销进曲库包
注意：此字段可能返回 null，表示取不到有效值。
 */
class Item extends AbstractModel
{
    /**
     * @var string Song ID
     */
    public $ItemID;

    /**
     * @var DataInfo Song info
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataInfo;

    /**
     * @var Album 专辑信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Album;

    /**
     * @var array 多个歌手集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Artists;

    /**
     * @var integer 歌曲状态，1:添加进购物车；2:核销进曲库包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $ItemID Song ID
     * @param DataInfo $DataInfo Song info
注意：此字段可能返回 null，表示取不到有效值。
     * @param Album $Album 专辑信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Artists 多个歌手集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 歌曲状态，1:添加进购物车；2:核销进曲库包
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
        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("DataInfo",$param) and $param["DataInfo"] !== null) {
            $this->DataInfo = new DataInfo();
            $this->DataInfo->deserialize($param["DataInfo"]);
        }

        if (array_key_exists("Album",$param) and $param["Album"] !== null) {
            $this->Album = new Album();
            $this->Album->deserialize($param["Album"]);
        }

        if (array_key_exists("Artists",$param) and $param["Artists"] !== null) {
            $this->Artists = [];
            foreach ($param["Artists"] as $key => $value){
                $obj = new Artist();
                $obj->deserialize($value);
                array_push($this->Artists, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
