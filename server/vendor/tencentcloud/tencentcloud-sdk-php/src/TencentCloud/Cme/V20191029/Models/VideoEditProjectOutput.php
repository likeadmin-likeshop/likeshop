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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目导出信息。
 *
 * @method string getMaterialId() 获取导出的云剪素材 MaterialId，仅当导出为云剪素材时有效。
 * @method void setMaterialId(string $MaterialId) 设置导出的云剪素材 MaterialId，仅当导出为云剪素材时有效。
 * @method string getVodFileId() 获取云点播媒资 FileId。
 * @method void setVodFileId(string $VodFileId) 设置云点播媒资 FileId。
 * @method string getURL() 获取导出的媒资 URL。
 * @method void setURL(string $URL) 设置导出的媒资 URL。
 * @method MediaMetaData getMetaData() 获取元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置元信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoEditProjectOutput extends AbstractModel
{
    /**
     * @var string 导出的云剪素材 MaterialId，仅当导出为云剪素材时有效。
     */
    public $MaterialId;

    /**
     * @var string 云点播媒资 FileId。
     */
    public $VodFileId;

    /**
     * @var string 导出的媒资 URL。
     */
    public $URL;

    /**
     * @var MediaMetaData 元信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @param string $MaterialId 导出的云剪素材 MaterialId，仅当导出为云剪素材时有效。
     * @param string $VodFileId 云点播媒资 FileId。
     * @param string $URL 导出的媒资 URL。
     * @param MediaMetaData $MetaData 元信息。
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
        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("VodFileId",$param) and $param["VodFileId"] !== null) {
            $this->VodFileId = $param["VodFileId"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
