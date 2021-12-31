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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LogoDetail
 *
 * @method array getAppLogoDetail() 获取命中的Applogo详情
 * @method void setAppLogoDetail(array $AppLogoDetail) 设置命中的Applogo详情
 */
class LogoDetail extends AbstractModel
{
    /**
     * @var array 命中的Applogo详情
     */
    public $AppLogoDetail;

    /**
     * @param array $AppLogoDetail 命中的Applogo详情
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
        if (array_key_exists("AppLogoDetail",$param) and $param["AppLogoDetail"] !== null) {
            $this->AppLogoDetail = [];
            foreach ($param["AppLogoDetail"] as $key => $value){
                $obj = new Logo();
                $obj->deserialize($value);
                array_push($this->AppLogoDetail, $obj);
            }
        }
    }
}
