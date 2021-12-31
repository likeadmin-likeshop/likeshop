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
 * ModifyPersonFeatureInfo返回参数结构体
 *
 * @method string getCompanyId() 获取集团ID
 * @method void setCompanyId(string $CompanyId) 设置集团ID
 * @method integer getShopId() 获取店铺ID，如果不填表示操作集团身份库
 * @method void setShopId(integer $ShopId) 设置店铺ID，如果不填表示操作集团身份库
 * @method integer getPersonId() 获取请求的顾客id
 * @method void setPersonId(integer $PersonId) 设置请求的顾客id
 * @method integer getPersonIdBind() 获取图片实际绑定person_id，可能与请求的person_id不同，以此id为准
 * @method void setPersonIdBind(integer $PersonIdBind) 设置图片实际绑定person_id，可能与请求的person_id不同，以此id为准
 * @method integer getPersonType() 获取请求的顾客类型
 * @method void setPersonType(integer $PersonType) 设置请求的顾客类型
 * @method array getSimilarPersonIds() 获取与请求的person_id类型相同、与请求图片特征相似的一个或多个person_id，需要额外确认这些id是否是同一个人
 * @method void setSimilarPersonIds(array $SimilarPersonIds) 设置与请求的person_id类型相同、与请求图片特征相似的一个或多个person_id，需要额外确认这些id是否是同一个人
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyPersonFeatureInfoResponse extends AbstractModel
{
    /**
     * @var string 集团ID
     */
    public $CompanyId;

    /**
     * @var integer 店铺ID，如果不填表示操作集团身份库
     */
    public $ShopId;

    /**
     * @var integer 请求的顾客id
     */
    public $PersonId;

    /**
     * @var integer 图片实际绑定person_id，可能与请求的person_id不同，以此id为准
     */
    public $PersonIdBind;

    /**
     * @var integer 请求的顾客类型
     */
    public $PersonType;

    /**
     * @var array 与请求的person_id类型相同、与请求图片特征相似的一个或多个person_id，需要额外确认这些id是否是同一个人
     */
    public $SimilarPersonIds;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompanyId 集团ID
     * @param integer $ShopId 店铺ID，如果不填表示操作集团身份库
     * @param integer $PersonId 请求的顾客id
     * @param integer $PersonIdBind 图片实际绑定person_id，可能与请求的person_id不同，以此id为准
     * @param integer $PersonType 请求的顾客类型
     * @param array $SimilarPersonIds 与请求的person_id类型相同、与请求图片特征相似的一个或多个person_id，需要额外确认这些id是否是同一个人
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

        if (array_key_exists("PersonIdBind",$param) and $param["PersonIdBind"] !== null) {
            $this->PersonIdBind = $param["PersonIdBind"];
        }

        if (array_key_exists("PersonType",$param) and $param["PersonType"] !== null) {
            $this->PersonType = $param["PersonType"];
        }

        if (array_key_exists("SimilarPersonIds",$param) and $param["SimilarPersonIds"] !== null) {
            $this->SimilarPersonIds = $param["SimilarPersonIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
