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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输入数据配置
 *
 * @method string getChannelName() 获取通道名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelName(string $ChannelName) 设置通道名
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataSource getDataSource() 获取数据源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(DataSource $DataSource) 设置数据源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputMode() 获取输入类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputMode(string $InputMode) 设置输入类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentType() 获取文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentType(string $ContentType) 设置文件类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class InputDataConfig extends AbstractModel
{
    /**
     * @var string 通道名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelName;

    /**
     * @var DataSource 数据源配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @var string 输入类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputMode;

    /**
     * @var string 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentType;

    /**
     * @param string $ChannelName 通道名
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataSource $DataSource 数据源配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputMode 输入类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentType 文件类型
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
        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = new DataSource();
            $this->DataSource->deserialize($param["DataSource"]);
        }

        if (array_key_exists("InputMode",$param) and $param["InputMode"] !== null) {
            $this->InputMode = $param["InputMode"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }
    }
}
