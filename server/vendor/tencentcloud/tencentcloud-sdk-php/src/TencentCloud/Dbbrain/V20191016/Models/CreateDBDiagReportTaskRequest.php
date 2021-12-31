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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBDiagReportTask请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getStartTime() 获取开始时间，如“2020-11-08T14:00:00+08:00”。
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2020-11-08T14:00:00+08:00”。
 * @method string getEndTime() 获取结束时间，如“2020-11-09T14:00:00+08:00”。
 * @method void setEndTime(string $EndTime) 设置结束时间，如“2020-11-09T14:00:00+08:00”。
 * @method integer getSendMailFlag() 获取是否发送邮件: 0 - 否，1 - 是。
 * @method void setSendMailFlag(integer $SendMailFlag) 设置是否发送邮件: 0 - 否，1 - 是。
 * @method array getContactPerson() 获取接收邮件的联系人ID数组。
 * @method void setContactPerson(array $ContactPerson) 设置接收邮件的联系人ID数组。
 * @method array getContactGroup() 获取接收邮件的联系组ID数组。
 * @method void setContactGroup(array $ContactGroup) 设置接收邮件的联系组ID数组。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认值为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认值为"mysql"。
 */
class CreateDBDiagReportTaskRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，如“2020-11-08T14:00:00+08:00”。
     */
    public $StartTime;

    /**
     * @var string 结束时间，如“2020-11-09T14:00:00+08:00”。
     */
    public $EndTime;

    /**
     * @var integer 是否发送邮件: 0 - 否，1 - 是。
     */
    public $SendMailFlag;

    /**
     * @var array 接收邮件的联系人ID数组。
     */
    public $ContactPerson;

    /**
     * @var array 接收邮件的联系组ID数组。
     */
    public $ContactGroup;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认值为"mysql"。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $StartTime 开始时间，如“2020-11-08T14:00:00+08:00”。
     * @param string $EndTime 结束时间，如“2020-11-09T14:00:00+08:00”。
     * @param integer $SendMailFlag 是否发送邮件: 0 - 否，1 - 是。
     * @param array $ContactPerson 接收邮件的联系人ID数组。
     * @param array $ContactGroup 接收邮件的联系组ID数组。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认值为"mysql"。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SendMailFlag",$param) and $param["SendMailFlag"] !== null) {
            $this->SendMailFlag = $param["SendMailFlag"];
        }

        if (array_key_exists("ContactPerson",$param) and $param["ContactPerson"] !== null) {
            $this->ContactPerson = $param["ContactPerson"];
        }

        if (array_key_exists("ContactGroup",$param) and $param["ContactGroup"] !== null) {
            $this->ContactGroup = $param["ContactGroup"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
