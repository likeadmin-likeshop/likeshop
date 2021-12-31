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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainList请求参数结构体
 *
 * @method string getType() 获取域名分组类型，默认为ALL。可取值为ALL，MINE，SHARE，ISMARK，PAUSE，VIP，RECENT，SHARE_OUT。
 * @method void setType(string $Type) 设置域名分组类型，默认为ALL。可取值为ALL，MINE，SHARE，ISMARK，PAUSE，VIP，RECENT，SHARE_OUT。
 * @method integer getOffset() 获取记录开始的偏移, 第一条记录为 0, 依次类推。默认值为0。
 * @method void setOffset(integer $Offset) 设置记录开始的偏移, 第一条记录为 0, 依次类推。默认值为0。
 * @method integer getLimit() 获取要获取的域名数量, 比如获取20个, 则为20。默认值为3000。
 * @method void setLimit(integer $Limit) 设置要获取的域名数量, 比如获取20个, 则为20。默认值为3000。
 * @method integer getGroupId() 获取分组ID, 获取指定分组的域名
 * @method void setGroupId(integer $GroupId) 设置分组ID, 获取指定分组的域名
 * @method string getKeyword() 获取根据关键字搜索域名
 * @method void setKeyword(string $Keyword) 设置根据关键字搜索域名
 */
class DescribeDomainListRequest extends AbstractModel
{
    /**
     * @var string 域名分组类型，默认为ALL。可取值为ALL，MINE，SHARE，ISMARK，PAUSE，VIP，RECENT，SHARE_OUT。
     */
    public $Type;

    /**
     * @var integer 记录开始的偏移, 第一条记录为 0, 依次类推。默认值为0。
     */
    public $Offset;

    /**
     * @var integer 要获取的域名数量, 比如获取20个, 则为20。默认值为3000。
     */
    public $Limit;

    /**
     * @var integer 分组ID, 获取指定分组的域名
     */
    public $GroupId;

    /**
     * @var string 根据关键字搜索域名
     */
    public $Keyword;

    /**
     * @param string $Type 域名分组类型，默认为ALL。可取值为ALL，MINE，SHARE，ISMARK，PAUSE，VIP，RECENT，SHARE_OUT。
     * @param integer $Offset 记录开始的偏移, 第一条记录为 0, 依次类推。默认值为0。
     * @param integer $Limit 要获取的域名数量, 比如获取20个, 则为20。默认值为3000。
     * @param integer $GroupId 分组ID, 获取指定分组的域名
     * @param string $Keyword 根据关键字搜索域名
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
