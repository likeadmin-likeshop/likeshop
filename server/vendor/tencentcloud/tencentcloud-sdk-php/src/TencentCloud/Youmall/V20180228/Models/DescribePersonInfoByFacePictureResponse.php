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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePersonInfoByFacePicture返回参数结构体
 *
 * @method string getCompanyId() 获取集团id
 * @method void setCompanyId(string $CompanyId) 设置集团id
 * @method integer getShopId() 获取店铺id
 * @method void setShopId(integer $ShopId) 设置店铺id
 * @method integer getPersonId() 获取顾客face id
 * @method void setPersonId(integer $PersonId) 设置顾客face id
 * @method string getPictureUrl() 获取顾客底图url
 * @method void setPictureUrl(string $PictureUrl) 设置顾客底图url
 * @method integer getPersonType() 获取顾客类型（0表示普通顾客，1 白名单，2 表示黑名单，101表示集团白名单，102表示集团黑名单）
 * @method void setPersonType(integer $PersonType) 设置顾客类型（0表示普通顾客，1 白名单，2 表示黑名单，101表示集团白名单，102表示集团黑名单）
 * @method string getFirstVisitTime() 获取顾客首次进店时间
 * @method void setFirstVisitTime(string $FirstVisitTime) 设置顾客首次进店时间
 * @method integer getVisitTimes() 获取顾客历史到访次数
 * @method void setVisitTimes(integer $VisitTimes) 设置顾客历史到访次数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePersonInfoByFacePictureResponse extends AbstractModel
{
    /**
     * @var string 集团id
     */
    public $CompanyId;

    /**
     * @var integer 店铺id
     */
    public $ShopId;

    /**
     * @var integer 顾客face id
     */
    public $PersonId;

    /**
     * @var string 顾客底图url
     */
    public $PictureUrl;

    /**
     * @var integer 顾客类型（0表示普通顾客，1 白名单，2 表示黑名单，101表示集团白名单，102表示集团黑名单）
     */
    public $PersonType;

    /**
     * @var string 顾客首次进店时间
     */
    public $FirstVisitTime;

    /**
     * @var integer 顾客历史到访次数
     */
    public $VisitTimes;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompanyId 集团id
     * @param integer $ShopId 店铺id
     * @param integer $PersonId 顾客face id
     * @param string $PictureUrl 顾客底图url
     * @param integer $PersonType 顾客类型（0表示普通顾客，1 白名单，2 表示黑名单，101表示集团白名单，102表示集团黑名单）
     * @param string $FirstVisitTime 顾客首次进店时间
     * @param integer $VisitTimes 顾客历史到访次数
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("PictureUrl",$param) and $param["PictureUrl"] !== null) {
            $this->PictureUrl = $param["PictureUrl"];
        }

        if (array_key_exists("PersonType",$param) and $param["PersonType"] !== null) {
            $this->PersonType = $param["PersonType"];
        }

        if (array_key_exists("FirstVisitTime",$param) and $param["FirstVisitTime"] !== null) {
            $this->FirstVisitTime = $param["FirstVisitTime"];
        }

        if (array_key_exists("VisitTimes",$param) and $param["VisitTimes"] !== null) {
            $this->VisitTimes = $param["VisitTimes"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
