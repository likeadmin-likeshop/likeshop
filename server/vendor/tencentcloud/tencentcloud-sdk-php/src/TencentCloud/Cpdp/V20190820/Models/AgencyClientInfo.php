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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 经办人信息
 *
 * @method string getAgencyClientName() 获取经办人姓名，存在经办人必输
 * @method void setAgencyClientName(string $AgencyClientName) 设置经办人姓名，存在经办人必输
 * @method string getAgencyClientGlobalType() 获取经办人证件类型，存在经办人必输
 * @method void setAgencyClientGlobalType(string $AgencyClientGlobalType) 设置经办人证件类型，存在经办人必输
 * @method string getAgencyClientGlobalId() 获取经办人证件号，存在经办人必输
 * @method void setAgencyClientGlobalId(string $AgencyClientGlobalId) 设置经办人证件号，存在经办人必输
 * @method string getAgencyClientMobile() 获取经办人手机号，存在经办人必输
 * @method void setAgencyClientMobile(string $AgencyClientMobile) 设置经办人手机号，存在经办人必输
 */
class AgencyClientInfo extends AbstractModel
{
    /**
     * @var string 经办人姓名，存在经办人必输
     */
    public $AgencyClientName;

    /**
     * @var string 经办人证件类型，存在经办人必输
     */
    public $AgencyClientGlobalType;

    /**
     * @var string 经办人证件号，存在经办人必输
     */
    public $AgencyClientGlobalId;

    /**
     * @var string 经办人手机号，存在经办人必输
     */
    public $AgencyClientMobile;

    /**
     * @param string $AgencyClientName 经办人姓名，存在经办人必输
     * @param string $AgencyClientGlobalType 经办人证件类型，存在经办人必输
     * @param string $AgencyClientGlobalId 经办人证件号，存在经办人必输
     * @param string $AgencyClientMobile 经办人手机号，存在经办人必输
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
        if (array_key_exists("AgencyClientName",$param) and $param["AgencyClientName"] !== null) {
            $this->AgencyClientName = $param["AgencyClientName"];
        }

        if (array_key_exists("AgencyClientGlobalType",$param) and $param["AgencyClientGlobalType"] !== null) {
            $this->AgencyClientGlobalType = $param["AgencyClientGlobalType"];
        }

        if (array_key_exists("AgencyClientGlobalId",$param) and $param["AgencyClientGlobalId"] !== null) {
            $this->AgencyClientGlobalId = $param["AgencyClientGlobalId"];
        }

        if (array_key_exists("AgencyClientMobile",$param) and $param["AgencyClientMobile"] !== null) {
            $this->AgencyClientMobile = $param["AgencyClientMobile"];
        }
    }
}
