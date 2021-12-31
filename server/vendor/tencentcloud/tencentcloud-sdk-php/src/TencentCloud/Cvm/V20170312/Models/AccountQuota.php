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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配额详情
 *
 * @method array getPostPaidQuotaSet() 获取后付费配额列表
 * @method void setPostPaidQuotaSet(array $PostPaidQuotaSet) 设置后付费配额列表
 * @method array getPrePaidQuotaSet() 获取预付费配额列表
 * @method void setPrePaidQuotaSet(array $PrePaidQuotaSet) 设置预付费配额列表
 * @method array getSpotPaidQuotaSet() 获取spot配额列表
 * @method void setSpotPaidQuotaSet(array $SpotPaidQuotaSet) 设置spot配额列表
 * @method array getImageQuotaSet() 获取镜像配额列表
 * @method void setImageQuotaSet(array $ImageQuotaSet) 设置镜像配额列表
 * @method array getDisasterRecoverGroupQuotaSet() 获取置放群组配额列表
 * @method void setDisasterRecoverGroupQuotaSet(array $DisasterRecoverGroupQuotaSet) 设置置放群组配额列表
 */
class AccountQuota extends AbstractModel
{
    /**
     * @var array 后付费配额列表
     */
    public $PostPaidQuotaSet;

    /**
     * @var array 预付费配额列表
     */
    public $PrePaidQuotaSet;

    /**
     * @var array spot配额列表
     */
    public $SpotPaidQuotaSet;

    /**
     * @var array 镜像配额列表
     */
    public $ImageQuotaSet;

    /**
     * @var array 置放群组配额列表
     */
    public $DisasterRecoverGroupQuotaSet;

    /**
     * @param array $PostPaidQuotaSet 后付费配额列表
     * @param array $PrePaidQuotaSet 预付费配额列表
     * @param array $SpotPaidQuotaSet spot配额列表
     * @param array $ImageQuotaSet 镜像配额列表
     * @param array $DisasterRecoverGroupQuotaSet 置放群组配额列表
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
        if (array_key_exists("PostPaidQuotaSet",$param) and $param["PostPaidQuotaSet"] !== null) {
            $this->PostPaidQuotaSet = [];
            foreach ($param["PostPaidQuotaSet"] as $key => $value){
                $obj = new PostPaidQuota();
                $obj->deserialize($value);
                array_push($this->PostPaidQuotaSet, $obj);
            }
        }

        if (array_key_exists("PrePaidQuotaSet",$param) and $param["PrePaidQuotaSet"] !== null) {
            $this->PrePaidQuotaSet = [];
            foreach ($param["PrePaidQuotaSet"] as $key => $value){
                $obj = new PrePaidQuota();
                $obj->deserialize($value);
                array_push($this->PrePaidQuotaSet, $obj);
            }
        }

        if (array_key_exists("SpotPaidQuotaSet",$param) and $param["SpotPaidQuotaSet"] !== null) {
            $this->SpotPaidQuotaSet = [];
            foreach ($param["SpotPaidQuotaSet"] as $key => $value){
                $obj = new SpotPaidQuota();
                $obj->deserialize($value);
                array_push($this->SpotPaidQuotaSet, $obj);
            }
        }

        if (array_key_exists("ImageQuotaSet",$param) and $param["ImageQuotaSet"] !== null) {
            $this->ImageQuotaSet = [];
            foreach ($param["ImageQuotaSet"] as $key => $value){
                $obj = new ImageQuota();
                $obj->deserialize($value);
                array_push($this->ImageQuotaSet, $obj);
            }
        }

        if (array_key_exists("DisasterRecoverGroupQuotaSet",$param) and $param["DisasterRecoverGroupQuotaSet"] !== null) {
            $this->DisasterRecoverGroupQuotaSet = [];
            foreach ($param["DisasterRecoverGroupQuotaSet"] as $key => $value){
                $obj = new DisasterRecoverGroupQuota();
                $obj->deserialize($value);
                array_push($this->DisasterRecoverGroupQuotaSet, $obj);
            }
        }
    }
}
