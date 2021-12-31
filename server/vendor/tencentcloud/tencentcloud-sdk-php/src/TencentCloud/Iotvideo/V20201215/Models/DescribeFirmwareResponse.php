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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFirmware返回参数结构体
 *
 * @method string getVersion() 获取固件版本号
 * @method void setVersion(string $Version) 设置固件版本号
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getName() 获取固件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置固件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取固件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置固件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5sum() 获取固件Md5值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5sum(string $Md5sum) 设置固件Md5值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatetime() 获取固件上传的秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatetime(integer $Createtime) 设置固件上传的秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFirmwareResponse extends AbstractModel
{
    /**
     * @var string 固件版本号
     */
    public $Version;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 固件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 固件描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 固件Md5值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5sum;

    /**
     * @var integer 固件上传的秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Createtime;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Version 固件版本号
     * @param string $ProductId 产品ID
     * @param string $Name 固件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 固件描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5sum 固件Md5值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Createtime 固件上传的秒级时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 产品名称
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Md5sum",$param) and $param["Md5sum"] !== null) {
            $this->Md5sum = $param["Md5sum"];
        }

        if (array_key_exists("Createtime",$param) and $param["Createtime"] !== null) {
            $this->Createtime = $param["Createtime"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
