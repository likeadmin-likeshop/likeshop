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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSearchTemplate请求参数结构体
 *
 * @method SearchTemplate getSearchTemplate() 获取搜索模板
 * @method void setSearchTemplate(SearchTemplate $SearchTemplate) 设置搜索模板
 */
class CreateSearchTemplateRequest extends AbstractModel
{
    /**
     * @var SearchTemplate 搜索模板
     */
    public $SearchTemplate;

    /**
     * @param SearchTemplate $SearchTemplate 搜索模板
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
        if (array_key_exists("SearchTemplate",$param) and $param["SearchTemplate"] !== null) {
            $this->SearchTemplate = new SearchTemplate();
            $this->SearchTemplate->deserialize($param["SearchTemplate"]);
        }
    }
}
