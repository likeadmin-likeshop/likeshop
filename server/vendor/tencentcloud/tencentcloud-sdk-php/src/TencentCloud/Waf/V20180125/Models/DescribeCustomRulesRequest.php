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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomRules请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method DescribeCustomRulesPagingInfo getPaging() 获取分页参数
 * @method void setPaging(DescribeCustomRulesPagingInfo $Paging) 设置分页参数
 * @method string getEdition() 获取clb-waf或者sparta-waf
 * @method void setEdition(string $Edition) 设置clb-waf或者sparta-waf
 * @method string getActionType() 获取过滤参数：动作类型：0放行，1阻断，2人机识别，3观察，4重定向
 * @method void setActionType(string $ActionType) 设置过滤参数：动作类型：0放行，1阻断，2人机识别，3观察，4重定向
 * @method string getSearch() 获取过滤参数：规则名称过滤条件
 * @method void setSearch(string $Search) 设置过滤参数：规则名称过滤条件
 */
class DescribeCustomRulesRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var DescribeCustomRulesPagingInfo 分页参数
     */
    public $Paging;

    /**
     * @var string clb-waf或者sparta-waf
     */
    public $Edition;

    /**
     * @var string 过滤参数：动作类型：0放行，1阻断，2人机识别，3观察，4重定向
     */
    public $ActionType;

    /**
     * @var string 过滤参数：规则名称过滤条件
     */
    public $Search;

    /**
     * @param string $Domain 域名
     * @param DescribeCustomRulesPagingInfo $Paging 分页参数
     * @param string $Edition clb-waf或者sparta-waf
     * @param string $ActionType 过滤参数：动作类型：0放行，1阻断，2人机识别，3观察，4重定向
     * @param string $Search 过滤参数：规则名称过滤条件
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Paging",$param) and $param["Paging"] !== null) {
            $this->Paging = new DescribeCustomRulesPagingInfo();
            $this->Paging->deserialize($param["Paging"]);
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            $this->Search = $param["Search"];
        }
    }
}
