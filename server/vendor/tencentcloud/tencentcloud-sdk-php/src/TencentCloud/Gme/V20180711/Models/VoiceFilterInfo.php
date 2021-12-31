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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音文件过滤详情
 *
 * @method integer getBizId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizId(integer $BizId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取文件ID，表示文件唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(string $FileId) 设置文件ID，表示文件唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimestamp() 获取数据创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置数据创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取过滤结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置过滤结果列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class VoiceFilterInfo extends AbstractModel
{
    /**
     * @var integer 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizId;

    /**
     * @var string 文件ID，表示文件唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @var string 文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var string 数据创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var array 过滤结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param integer $BizId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId 文件ID，表示文件唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenId 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Timestamp 数据创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data 过滤结果列表
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new VoiceFilter();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
