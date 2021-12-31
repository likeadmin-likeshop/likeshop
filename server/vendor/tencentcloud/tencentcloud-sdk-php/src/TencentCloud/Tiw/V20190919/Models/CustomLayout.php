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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义混流布局参数
 *
 * @method Canvas getCanvas() 获取混流画布参数
 * @method void setCanvas(Canvas $Canvas) 设置混流画布参数
 * @method array getInputStreamList() 获取流布局参数，每路流的布局不能超出画布区域
 * @method void setInputStreamList(array $InputStreamList) 设置流布局参数，每路流的布局不能超出画布区域
 */
class CustomLayout extends AbstractModel
{
    /**
     * @var Canvas 混流画布参数
     */
    public $Canvas;

    /**
     * @var array 流布局参数，每路流的布局不能超出画布区域
     */
    public $InputStreamList;

    /**
     * @param Canvas $Canvas 混流画布参数
     * @param array $InputStreamList 流布局参数，每路流的布局不能超出画布区域
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
        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new Canvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("InputStreamList",$param) and $param["InputStreamList"] !== null) {
            $this->InputStreamList = [];
            foreach ($param["InputStreamList"] as $key => $value){
                $obj = new StreamLayout();
                $obj->deserialize($value);
                array_push($this->InputStreamList, $obj);
            }
        }
    }
}
