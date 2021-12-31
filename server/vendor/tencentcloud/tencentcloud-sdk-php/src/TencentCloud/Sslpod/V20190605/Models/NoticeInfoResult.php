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
namespace TencentCloud\Sslpod\V20190605\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知信息结果
 *
 * @method integer getId() 获取通知ID
 * @method void setId(integer $Id) 设置通知ID
 * @method integer getNoticeType() 获取通知开关信息
 * @method void setNoticeType(integer $NoticeType) 设置通知开关信息
 * @method array getLimitInfos() 获取额度信息
 * @method void setLimitInfos(array $LimitInfos) 设置额度信息
 */
class NoticeInfoResult extends AbstractModel
{
    /**
     * @var integer 通知ID
     */
    public $Id;

    /**
     * @var integer 通知开关信息
     */
    public $NoticeType;

    /**
     * @var array 额度信息
     */
    public $LimitInfos;

    /**
     * @param integer $Id 通知ID
     * @param integer $NoticeType 通知开关信息
     * @param array $LimitInfos 额度信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("NoticeType",$param) and $param["NoticeType"] !== null) {
            $this->NoticeType = $param["NoticeType"];
        }

        if (array_key_exists("LimitInfos",$param) and $param["LimitInfos"] !== null) {
            $this->LimitInfos = [];
            foreach ($param["LimitInfos"] as $key => $value){
                $obj = new LimitInfo();
                $obj->deserialize($value);
                array_push($this->LimitInfos, $obj);
            }
        }
    }
}
