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
 * ListDiagnoseReport请求参数结构体
 *
 * @method string getKeyWords() 获取用于搜索诊断URL的关键字，不填时返回用户所有的诊断任务。
 * @method void setKeyWords(string $KeyWords) 设置用于搜索诊断URL的关键字，不填时返回用户所有的诊断任务。
 * @method string getDiagnoseLink() 获取用于搜索诊断系统返回的诊断链接，形如：http://cdn.cloud.tencent.com/self_diagnose/xxxxx
 * @method void setDiagnoseLink(string $DiagnoseLink) 设置用于搜索诊断系统返回的诊断链接，形如：http://cdn.cloud.tencent.com/self_diagnose/xxxxx
 */
class ListDiagnoseReportRequest extends AbstractModel
{
    /**
     * @var string 用于搜索诊断URL的关键字，不填时返回用户所有的诊断任务。
     */
    public $KeyWords;

    /**
     * @var string 用于搜索诊断系统返回的诊断链接，形如：http://cdn.cloud.tencent.com/self_diagnose/xxxxx
     */
    public $DiagnoseLink;

    /**
     * @param string $KeyWords 用于搜索诊断URL的关键字，不填时返回用户所有的诊断任务。
     * @param string $DiagnoseLink 用于搜索诊断系统返回的诊断链接，形如：http://cdn.cloud.tencent.com/self_diagnose/xxxxx
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
        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("DiagnoseLink",$param) and $param["DiagnoseLink"] !== null) {
            $this->DiagnoseLink = $param["DiagnoseLink"];
        }
    }
}
