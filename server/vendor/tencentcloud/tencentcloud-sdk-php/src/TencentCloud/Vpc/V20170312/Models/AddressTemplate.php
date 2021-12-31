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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP地址模板
 *
 * @method string getAddressTemplateName() 获取IP地址模板名称。
 * @method void setAddressTemplateName(string $AddressTemplateName) 设置IP地址模板名称。
 * @method string getAddressTemplateId() 获取IP地址模板实例唯一ID。
 * @method void setAddressTemplateId(string $AddressTemplateId) 设置IP地址模板实例唯一ID。
 * @method array getAddressSet() 获取IP地址信息。
 * @method void setAddressSet(array $AddressSet) 设置IP地址信息。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 */
class AddressTemplate extends AbstractModel
{
    /**
     * @var string IP地址模板名称。
     */
    public $AddressTemplateName;

    /**
     * @var string IP地址模板实例唯一ID。
     */
    public $AddressTemplateId;

    /**
     * @var array IP地址信息。
     */
    public $AddressSet;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @param string $AddressTemplateName IP地址模板名称。
     * @param string $AddressTemplateId IP地址模板实例唯一ID。
     * @param array $AddressSet IP地址信息。
     * @param string $CreatedTime 创建时间。
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
        if (array_key_exists("AddressTemplateName",$param) and $param["AddressTemplateName"] !== null) {
            $this->AddressTemplateName = $param["AddressTemplateName"];
        }

        if (array_key_exists("AddressTemplateId",$param) and $param["AddressTemplateId"] !== null) {
            $this->AddressTemplateId = $param["AddressTemplateId"];
        }

        if (array_key_exists("AddressSet",$param) and $param["AddressSet"] !== null) {
            $this->AddressSet = $param["AddressSet"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
