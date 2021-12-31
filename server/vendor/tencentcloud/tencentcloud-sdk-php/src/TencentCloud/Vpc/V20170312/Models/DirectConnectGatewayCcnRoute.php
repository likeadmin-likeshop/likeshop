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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专线网关云联网路由（IDC网段）对象
 *
 * @method string getRouteId() 获取路由ID。
 * @method void setRouteId(string $RouteId) 设置路由ID。
 * @method string getDestinationCidrBlock() 获取IDC网段。
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置IDC网段。
 * @method array getASPath() 获取`BGP`的`AS-Path`属性。
 * @method void setASPath(array $ASPath) 设置`BGP`的`AS-Path`属性。
 */
class DirectConnectGatewayCcnRoute extends AbstractModel
{
    /**
     * @var string 路由ID。
     */
    public $RouteId;

    /**
     * @var string IDC网段。
     */
    public $DestinationCidrBlock;

    /**
     * @var array `BGP`的`AS-Path`属性。
     */
    public $ASPath;

    /**
     * @param string $RouteId 路由ID。
     * @param string $DestinationCidrBlock IDC网段。
     * @param array $ASPath `BGP`的`AS-Path`属性。
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
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("ASPath",$param) and $param["ASPath"] !== null) {
            $this->ASPath = $param["ASPath"];
        }
    }
}
