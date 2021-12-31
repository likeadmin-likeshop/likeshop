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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Es返回的质量数据
 *
 * @method array getContent() 获取数据内容
 * @method void setContent(array $Content) 设置数据内容
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getPeerId() 获取对端Id,为空时表示上行数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeerId(string $PeerId) 设置对端Id,为空时表示上行数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataType() 获取数据类型
 * @method void setDataType(string $DataType) 设置数据类型
 */
class QualityData extends AbstractModel
{
    /**
     * @var array 数据内容
     */
    public $Content;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 对端Id,为空时表示上行数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeerId;

    /**
     * @var string 数据类型
     */
    public $DataType;

    /**
     * @param array $Content 数据内容
     * @param string $UserId 用户ID
     * @param string $PeerId 对端Id,为空时表示上行数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataType 数据类型
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new TimeValue();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PeerId",$param) and $param["PeerId"] !== null) {
            $this->PeerId = $param["PeerId"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
