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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信发送人群包策略
 *
 * @method integer getCrowdID() 获取人群包id
 * @method void setCrowdID(integer $CrowdID) 设置人群包id
 * @method array getItems() 获取待选素材数组
 * @method void setItems(array $Items) 设置待选素材数组
 */
class PaasStrategy extends AbstractModel
{
    /**
     * @var integer 人群包id
     */
    public $CrowdID;

    /**
     * @var array 待选素材数组
     */
    public $Items;

    /**
     * @param integer $CrowdID 人群包id
     * @param array $Items 待选素材数组
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
        if (array_key_exists("CrowdID",$param) and $param["CrowdID"] !== null) {
            $this->CrowdID = $param["CrowdID"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new PaasStrategyItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
