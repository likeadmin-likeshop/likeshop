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
 * DescribeUserInformation请求参数结构体
 *
 * @method string getCommId() 获取通话 ID（唯一标识一次通话）： sdkappid_roomgString（房间号_createTime（房间创建时间，unix时间戳，单位为s）例：1400353843_218695_1590065777。通过 DescribeRoomInformation（查询房间列表）接口获取（链接：https://cloud.tencent.com/document/product/647/44050）
 * @method void setCommId(string $CommId) 设置通话 ID（唯一标识一次通话）： sdkappid_roomgString（房间号_createTime（房间创建时间，unix时间戳，单位为s）例：1400353843_218695_1590065777。通过 DescribeRoomInformation（查询房间列表）接口获取（链接：https://cloud.tencent.com/document/product/647/44050）
 * @method integer getStartTime() 获取查询开始时间，14天内。本地unix时间戳（1588031999s）
 * @method void setStartTime(integer $StartTime) 设置查询开始时间，14天内。本地unix时间戳（1588031999s）
 * @method integer getEndTime() 获取查询结束时间，本地unix时间戳（1588031999s）
 * @method void setEndTime(integer $EndTime) 设置查询结束时间，本地unix时间戳（1588031999s）
 * @method string getSdkAppId() 获取用户SDKAppID（1400188366）
 * @method void setSdkAppId(string $SdkAppId) 设置用户SDKAppID（1400188366）
 * @method array getUserIds() 获取需查询的用户数组，不填默认返回6个用户,最多可填6个用户
 * @method void setUserIds(array $UserIds) 设置需查询的用户数组，不填默认返回6个用户,最多可填6个用户
 * @method string getPageNumber() 获取设置分页index，从0开始（PageNumber和PageSize 其中一个不填均默认返回6条数据）
 * @method void setPageNumber(string $PageNumber) 设置设置分页index，从0开始（PageNumber和PageSize 其中一个不填均默认返回6条数据）
 * @method string getPageSize() 获取设置分页大小（PageNumber和PageSize 其中一个不填均默认返回6条数据,PageSize最大不超过100）
 * @method void setPageSize(string $PageSize) 设置设置分页大小（PageNumber和PageSize 其中一个不填均默认返回6条数据,PageSize最大不超过100）
 */
class DescribeUserInformationRequest extends AbstractModel
{
    /**
     * @var string 通话 ID（唯一标识一次通话）： sdkappid_roomgString（房间号_createTime（房间创建时间，unix时间戳，单位为s）例：1400353843_218695_1590065777。通过 DescribeRoomInformation（查询房间列表）接口获取（链接：https://cloud.tencent.com/document/product/647/44050）
     */
    public $CommId;

    /**
     * @var integer 查询开始时间，14天内。本地unix时间戳（1588031999s）
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间，本地unix时间戳（1588031999s）
     */
    public $EndTime;

    /**
     * @var string 用户SDKAppID（1400188366）
     */
    public $SdkAppId;

    /**
     * @var array 需查询的用户数组，不填默认返回6个用户,最多可填6个用户
     */
    public $UserIds;

    /**
     * @var string 设置分页index，从0开始（PageNumber和PageSize 其中一个不填均默认返回6条数据）
     */
    public $PageNumber;

    /**
     * @var string 设置分页大小（PageNumber和PageSize 其中一个不填均默认返回6条数据,PageSize最大不超过100）
     */
    public $PageSize;

    /**
     * @param string $CommId 通话 ID（唯一标识一次通话）： sdkappid_roomgString（房间号_createTime（房间创建时间，unix时间戳，单位为s）例：1400353843_218695_1590065777。通过 DescribeRoomInformation（查询房间列表）接口获取（链接：https://cloud.tencent.com/document/product/647/44050）
     * @param integer $StartTime 查询开始时间，14天内。本地unix时间戳（1588031999s）
     * @param integer $EndTime 查询结束时间，本地unix时间戳（1588031999s）
     * @param string $SdkAppId 用户SDKAppID（1400188366）
     * @param array $UserIds 需查询的用户数组，不填默认返回6个用户,最多可填6个用户
     * @param string $PageNumber 设置分页index，从0开始（PageNumber和PageSize 其中一个不填均默认返回6条数据）
     * @param string $PageSize 设置分页大小（PageNumber和PageSize 其中一个不填均默认返回6条数据,PageSize最大不超过100）
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
        if (array_key_exists("CommId",$param) and $param["CommId"] !== null) {
            $this->CommId = $param["CommId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
