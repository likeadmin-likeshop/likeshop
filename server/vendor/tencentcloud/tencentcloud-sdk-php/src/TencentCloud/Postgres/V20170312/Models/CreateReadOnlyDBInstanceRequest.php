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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReadOnlyDBInstance请求参数结构体
 *
 * @method string getSpecCode() 获取售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
 * @method void setSpecCode(string $SpecCode) 设置售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
 * @method string getDBVersion() 获取PostgreSQL内核版本，目前强制和主实例保持一致
 * @method void setDBVersion(string $DBVersion) 设置PostgreSQL内核版本，目前强制和主实例保持一致
 * @method integer getStorage() 获取实例容量大小，单位：GB。
 * @method void setStorage(integer $Storage) 设置实例容量大小，单位：GB。
 * @method integer getInstanceCount() 获取一次性购买的实例数量。取值1-100
 * @method void setInstanceCount(integer $InstanceCount) 设置一次性购买的实例数量。取值1-100
 * @method integer getPeriod() 获取购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
 * @method string getMasterDBInstanceId() 获取只读实例的主实例ID
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) 设置只读实例的主实例ID
 * @method string getZone() 获取可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
 * @method void setZone(string $Zone) 设置可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method string getInstanceChargeType() 获取实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
 * @method integer getAutoVoucher() 获取是否自动使用代金券。1（是），0（否），默认不使用。
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券。1（是），0（否），默认不使用。
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券。
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券。
 * @method integer getAutoRenewFlag() 获取续费标记：0-正常续费（默认）；1-自动续费；
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置续费标记：0-正常续费（默认）；1-自动续费；
 * @method string getVpcId() 获取私有网络ID。
 * @method void setVpcId(string $VpcId) 设置私有网络ID。
 * @method string getSubnetId() 获取私有网络子网ID。
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID。
 * @method integer getActivityId() 获取优惠活动ID
 * @method void setActivityId(integer $ActivityId) 设置优惠活动ID
 * @method string getName() 获取实例名(后续支持)
 * @method void setName(string $Name) 设置实例名(后续支持)
 * @method integer getNeedSupportIpv6() 获取是否需要支持Ipv6，1：是，0：否
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) 设置是否需要支持Ipv6，1：是，0：否
 * @method string getReadOnlyGroupId() 获取只读组ID。
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置只读组ID。
 * @method Tag getTagList() 获取实例需要绑定的Tag信息，默认为空
 * @method void setTagList(Tag $TagList) 设置实例需要绑定的Tag信息，默认为空
 * @method array getSecurityGroupIds() 获取安全组id
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组id
 */
class CreateReadOnlyDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
     */
    public $SpecCode;

    /**
     * @var string PostgreSQL内核版本，目前强制和主实例保持一致
     */
    public $DBVersion;

    /**
     * @var integer 实例容量大小，单位：GB。
     */
    public $Storage;

    /**
     * @var integer 一次性购买的实例数量。取值1-100
     */
    public $InstanceCount;

    /**
     * @var integer 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
     */
    public $Period;

    /**
     * @var string 只读实例的主实例ID
     */
    public $MasterDBInstanceId;

    /**
     * @var string 可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
     */
    public $Zone;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
     */
    public $InstanceChargeType;

    /**
     * @var integer 是否自动使用代金券。1（是），0（否），默认不使用。
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券。
     */
    public $VoucherIds;

    /**
     * @var integer 续费标记：0-正常续费（默认）；1-自动续费；
     */
    public $AutoRenewFlag;

    /**
     * @var string 私有网络ID。
     */
    public $VpcId;

    /**
     * @var string 私有网络子网ID。
     */
    public $SubnetId;

    /**
     * @var integer 优惠活动ID
     */
    public $ActivityId;

    /**
     * @var string 实例名(后续支持)
     */
    public $Name;

    /**
     * @var integer 是否需要支持Ipv6，1：是，0：否
     */
    public $NeedSupportIpv6;

    /**
     * @var string 只读组ID。
     */
    public $ReadOnlyGroupId;

    /**
     * @var Tag 实例需要绑定的Tag信息，默认为空
     */
    public $TagList;

    /**
     * @var array 安全组id
     */
    public $SecurityGroupIds;

    /**
     * @param string $SpecCode 售卖规格ID。该参数可以通过调用DescribeProductConfig的返回值中的SpecCode字段来获取。
     * @param string $DBVersion PostgreSQL内核版本，目前强制和主实例保持一致
     * @param integer $Storage 实例容量大小，单位：GB。
     * @param integer $InstanceCount 一次性购买的实例数量。取值1-100
     * @param integer $Period 购买时长，单位：月。目前只支持1,2,3,4,5,6,7,8,9,10,11,12,24,36这些值，按量计费模式下该参数传1。
     * @param string $MasterDBInstanceId 只读实例的主实例ID
     * @param string $Zone 可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
     * @param integer $ProjectId 项目ID。
     * @param string $InstanceChargeType 实例计费类型。目前支持：PREPAID（预付费，即包年包月），POSTPAID_BY_HOUR（后付费，即按量计费）。
     * @param integer $AutoVoucher 是否自动使用代金券。1（是），0（否），默认不使用。
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券。
     * @param integer $AutoRenewFlag 续费标记：0-正常续费（默认）；1-自动续费；
     * @param string $VpcId 私有网络ID。
     * @param string $SubnetId 私有网络子网ID。
     * @param integer $ActivityId 优惠活动ID
     * @param string $Name 实例名(后续支持)
     * @param integer $NeedSupportIpv6 是否需要支持Ipv6，1：是，0：否
     * @param string $ReadOnlyGroupId 只读组ID。
     * @param Tag $TagList 实例需要绑定的Tag信息，默认为空
     * @param array $SecurityGroupIds 安全组id
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NeedSupportIpv6",$param) and $param["NeedSupportIpv6"] !== null) {
            $this->NeedSupportIpv6 = $param["NeedSupportIpv6"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = new Tag();
            $this->TagList->deserialize($param["TagList"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
