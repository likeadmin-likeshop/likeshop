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
 * 获取当前门店最新网络状态数据返回结构
 *
 * @method integer getCount() 获取总数
 * @method void setCount(integer $Count) 设置总数
 * @method array getInfos() 获取网络状态
 * @method void setInfos(array $Infos) 设置网络状态
 */
class NetworkLastInfo extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $Count;

    /**
     * @var array 网络状态
     */
    public $Infos;

    /**
     * @param integer $Count 总数
     * @param array $Infos 网络状态
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new NetworkAndShopInfo();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }
    }
}
