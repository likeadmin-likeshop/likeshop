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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 水印Key
 *
 * @method string getKeyId() 获取水印KeyID
 * @method void setKeyId(string $KeyId) 设置水印KeyID
 * @method string getKeyContent() 获取水印Key值
 * @method void setKeyContent(string $KeyContent) 设置水印Key值
 * @method string getKeyVersion() 获取水印Key的版本号
 * @method void setKeyVersion(string $KeyVersion) 设置水印Key的版本号
 * @method integer getOpenStatus() 获取是否开启，取值[0（没有开启），1（已开启）]
 * @method void setOpenStatus(integer $OpenStatus) 设置是否开启，取值[0（没有开启），1（已开启）]
 * @method string getCreateTime() 获取密钥生成时间
 * @method void setCreateTime(string $CreateTime) 设置密钥生成时间
 */
class WaterPrintKey extends AbstractModel
{
    /**
     * @var string 水印KeyID
     */
    public $KeyId;

    /**
     * @var string 水印Key值
     */
    public $KeyContent;

    /**
     * @var string 水印Key的版本号
     */
    public $KeyVersion;

    /**
     * @var integer 是否开启，取值[0（没有开启），1（已开启）]
     */
    public $OpenStatus;

    /**
     * @var string 密钥生成时间
     */
    public $CreateTime;

    /**
     * @param string $KeyId 水印KeyID
     * @param string $KeyContent 水印Key值
     * @param string $KeyVersion 水印Key的版本号
     * @param integer $OpenStatus 是否开启，取值[0（没有开启），1（已开启）]
     * @param string $CreateTime 密钥生成时间
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyContent",$param) and $param["KeyContent"] !== null) {
            $this->KeyContent = $param["KeyContent"];
        }

        if (array_key_exists("KeyVersion",$param) and $param["KeyVersion"] !== null) {
            $this->KeyVersion = $param["KeyVersion"];
        }

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
