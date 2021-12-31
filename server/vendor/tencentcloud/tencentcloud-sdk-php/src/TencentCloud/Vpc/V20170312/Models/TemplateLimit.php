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
 * 参数模板配额
 *
 * @method integer getAddressTemplateMemberLimit() 获取参数模板IP地址成员配额。
 * @method void setAddressTemplateMemberLimit(integer $AddressTemplateMemberLimit) 设置参数模板IP地址成员配额。
 * @method integer getAddressTemplateGroupMemberLimit() 获取参数模板IP地址组成员配额。
 * @method void setAddressTemplateGroupMemberLimit(integer $AddressTemplateGroupMemberLimit) 设置参数模板IP地址组成员配额。
 * @method integer getServiceTemplateMemberLimit() 获取参数模板I协议端口成员配额。
 * @method void setServiceTemplateMemberLimit(integer $ServiceTemplateMemberLimit) 设置参数模板I协议端口成员配额。
 * @method integer getServiceTemplateGroupMemberLimit() 获取参数模板协议端口组成员配额。
 * @method void setServiceTemplateGroupMemberLimit(integer $ServiceTemplateGroupMemberLimit) 设置参数模板协议端口组成员配额。
 */
class TemplateLimit extends AbstractModel
{
    /**
     * @var integer 参数模板IP地址成员配额。
     */
    public $AddressTemplateMemberLimit;

    /**
     * @var integer 参数模板IP地址组成员配额。
     */
    public $AddressTemplateGroupMemberLimit;

    /**
     * @var integer 参数模板I协议端口成员配额。
     */
    public $ServiceTemplateMemberLimit;

    /**
     * @var integer 参数模板协议端口组成员配额。
     */
    public $ServiceTemplateGroupMemberLimit;

    /**
     * @param integer $AddressTemplateMemberLimit 参数模板IP地址成员配额。
     * @param integer $AddressTemplateGroupMemberLimit 参数模板IP地址组成员配额。
     * @param integer $ServiceTemplateMemberLimit 参数模板I协议端口成员配额。
     * @param integer $ServiceTemplateGroupMemberLimit 参数模板协议端口组成员配额。
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
        if (array_key_exists("AddressTemplateMemberLimit",$param) and $param["AddressTemplateMemberLimit"] !== null) {
            $this->AddressTemplateMemberLimit = $param["AddressTemplateMemberLimit"];
        }

        if (array_key_exists("AddressTemplateGroupMemberLimit",$param) and $param["AddressTemplateGroupMemberLimit"] !== null) {
            $this->AddressTemplateGroupMemberLimit = $param["AddressTemplateGroupMemberLimit"];
        }

        if (array_key_exists("ServiceTemplateMemberLimit",$param) and $param["ServiceTemplateMemberLimit"] !== null) {
            $this->ServiceTemplateMemberLimit = $param["ServiceTemplateMemberLimit"];
        }

        if (array_key_exists("ServiceTemplateGroupMemberLimit",$param) and $param["ServiceTemplateGroupMemberLimit"] !== null) {
            $this->ServiceTemplateGroupMemberLimit = $param["ServiceTemplateGroupMemberLimit"];
        }
    }
}
