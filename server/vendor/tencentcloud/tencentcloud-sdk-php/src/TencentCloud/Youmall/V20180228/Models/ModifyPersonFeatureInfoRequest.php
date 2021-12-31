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
 * ModifyPersonFeatureInfo请求参数结构体
 *
 * @method string getCompanyId() 获取集团ID
 * @method void setCompanyId(string $CompanyId) 设置集团ID
 * @method integer getPersonId() 获取需要修改的顾客id
 * @method void setPersonId(integer $PersonId) 设置需要修改的顾客id
 * @method string getPicture() 获取图片BASE编码
 * @method void setPicture(string $Picture) 设置图片BASE编码
 * @method string getPictureName() 获取图片名称（尽量不要重复）
 * @method void setPictureName(string $PictureName) 设置图片名称（尽量不要重复）
 * @method integer getPersonType() 获取人物类型，仅能操作黑白名单顾客（1 白名单，2 表示黑名单，101表示集团白名单，102表示集团黑名单）
 * @method void setPersonType(integer $PersonType) 设置人物类型，仅能操作黑白名单顾客（1 白名单，2 表示黑名单，101表示集团白名单，102表示集团黑名单）
 * @method integer getShopId() 获取店铺ID，如果不填表示操作集团身份库
 * @method void setShopId(integer $ShopId) 设置店铺ID，如果不填表示操作集团身份库
 */
class ModifyPersonFeatureInfoRequest extends AbstractModel
{
    /**
     * @var string 集团ID
     */
    public $CompanyId;

    /**
     * @var integer 需要修改的顾客id
     */
    public $PersonId;

    /**
     * @var string 图片BASE编码
     */
    public $Picture;

    /**
     * @var string 图片名称（尽量不要重复）
     */
    public $PictureName;

    /**
     * @var integer 人物类型，仅能操作黑白名单顾客（1 白名单，2 表示黑名单，101表示集团白名单，102表示集团黑名单）
     */
    public $PersonType;

    /**
     * @var integer 店铺ID，如果不填表示操作集团身份库
     */
    public $ShopId;

    /**
     * @param string $CompanyId 集团ID
     * @param integer $PersonId 需要修改的顾客id
     * @param string $Picture 图片BASE编码
     * @param string $PictureName 图片名称（尽量不要重复）
     * @param integer $PersonType 人物类型，仅能操作黑白名单顾客（1 白名单，2 表示黑名单，101表示集团白名单，102表示集团黑名单）
     * @param integer $ShopId 店铺ID，如果不填表示操作集团身份库
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

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Picture",$param) and $param["Picture"] !== null) {
            $this->Picture = $param["Picture"];
        }

        if (array_key_exists("PictureName",$param) and $param["PictureName"] !== null) {
            $this->PictureName = $param["PictureName"];
        }

        if (array_key_exists("PersonType",$param) and $param["PersonType"] !== null) {
            $this->PersonType = $param["PersonType"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }
    }
}
