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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListScdnLogTasks请求参数结构体
 *
 * @method string getSource() 获取产品来源 cdn/ecdn
 * @method void setSource(string $Source) 设置产品来源 cdn/ecdn
 * @method string getArea() 获取地域：mainland 或 overseas 为空表示查询所有地域
 * @method void setArea(string $Area) 设置地域：mainland 或 overseas 为空表示查询所有地域
 */
class ListScdnLogTasksRequest extends AbstractModel
{
    /**
     * @var string 产品来源 cdn/ecdn
     */
    public $Source;

    /**
     * @var string 地域：mainland 或 overseas 为空表示查询所有地域
     */
    public $Area;

    /**
     * @param string $Source 产品来源 cdn/ecdn
     * @param string $Area 地域：mainland 或 overseas 为空表示查询所有地域
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
