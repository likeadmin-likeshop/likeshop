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
 * DescribeRecordList请求参数结构体
 *
 * @method string getDomain() 获取要获取的解析记录所属的域名
 * @method void setDomain(string $Domain) 设置要获取的解析记录所属的域名
 * @method integer getDomainId() 获取要获取的解析记录所属的域名Id，如果传了DomainId，系统将会忽略Domain参数
 * @method void setDomainId(integer $DomainId) 设置要获取的解析记录所属的域名Id，如果传了DomainId，系统将会忽略Domain参数
 * @method string getSubdomain() 获取解析记录的主机头，如果传了此参数，则只会返回此主机头对应的解析记录
 * @method void setSubdomain(string $Subdomain) 设置解析记录的主机头，如果传了此参数，则只会返回此主机头对应的解析记录
 * @method string getRecordType() 获取获取某种类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等
 * @method void setRecordType(string $RecordType) 设置获取某种类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等
 * @method string getRecordLine() 获取获取某条线路名称的解析记录
 * @method void setRecordLine(string $RecordLine) 设置获取某条线路名称的解析记录
 * @method string getRecordLineId() 获取获取某个线路Id对应的解析记录，如果传RecordLineId，系统会忽略RecordLine参数
 * @method void setRecordLineId(string $RecordLineId) 设置获取某个线路Id对应的解析记录，如果传RecordLineId，系统会忽略RecordLine参数
 * @method integer getGroupId() 获取获取某个分组下的解析记录时，传这个分组Id
 * @method void setGroupId(integer $GroupId) 设置获取某个分组下的解析记录时，传这个分组Id
 * @method string getKeyword() 获取通过关键字搜索解析记录，当前支持搜索主机头和记录值
 * @method void setKeyword(string $Keyword) 设置通过关键字搜索解析记录，当前支持搜索主机头和记录值
 * @method string getSortField() 获取排序字段，支持 name,line,type,value,weight,mx,ttl,updated_on 几个字段。默认值为updated_on。
 * @method void setSortField(string $SortField) 设置排序字段，支持 name,line,type,value,weight,mx,ttl,updated_on 几个字段。默认值为updated_on。
 * @method string getSortType() 获取排序方式，正序：ASC，逆序：DESC。默认值为ASC。
 * @method void setSortType(string $SortType) 设置排序方式，正序：ASC，逆序：DESC。默认值为ASC。
 * @method integer getOffset() 获取偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。
 * @method integer getLimit() 获取限制数量，当前Limit最大支持3000。默认值为3000。
 * @method void setLimit(integer $Limit) 设置限制数量，当前Limit最大支持3000。默认值为3000。
 */
class DescribeRecordListRequest extends AbstractModel
{
    /**
     * @var string 要获取的解析记录所属的域名
     */
    public $Domain;

    /**
     * @var integer 要获取的解析记录所属的域名Id，如果传了DomainId，系统将会忽略Domain参数
     */
    public $DomainId;

    /**
     * @var string 解析记录的主机头，如果传了此参数，则只会返回此主机头对应的解析记录
     */
    public $Subdomain;

    /**
     * @var string 获取某种类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等
     */
    public $RecordType;

    /**
     * @var string 获取某条线路名称的解析记录
     */
    public $RecordLine;

    /**
     * @var string 获取某个线路Id对应的解析记录，如果传RecordLineId，系统会忽略RecordLine参数
     */
    public $RecordLineId;

    /**
     * @var integer 获取某个分组下的解析记录时，传这个分组Id
     */
    public $GroupId;

    /**
     * @var string 通过关键字搜索解析记录，当前支持搜索主机头和记录值
     */
    public $Keyword;

    /**
     * @var string 排序字段，支持 name,line,type,value,weight,mx,ttl,updated_on 几个字段。默认值为updated_on。
     */
    public $SortField;

    /**
     * @var string 排序方式，正序：ASC，逆序：DESC。默认值为ASC。
     */
    public $SortType;

    /**
     * @var integer 偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 限制数量，当前Limit最大支持3000。默认值为3000。
     */
    public $Limit;

    /**
     * @param string $Domain 要获取的解析记录所属的域名
     * @param integer $DomainId 要获取的解析记录所属的域名Id，如果传了DomainId，系统将会忽略Domain参数
     * @param string $Subdomain 解析记录的主机头，如果传了此参数，则只会返回此主机头对应的解析记录
     * @param string $RecordType 获取某种类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等
     * @param string $RecordLine 获取某条线路名称的解析记录
     * @param string $RecordLineId 获取某个线路Id对应的解析记录，如果传RecordLineId，系统会忽略RecordLine参数
     * @param integer $GroupId 获取某个分组下的解析记录时，传这个分组Id
     * @param string $Keyword 通过关键字搜索解析记录，当前支持搜索主机头和记录值
     * @param string $SortField 排序字段，支持 name,line,type,value,weight,mx,ttl,updated_on 几个字段。默认值为updated_on。
     * @param string $SortType 排序方式，正序：ASC，逆序：DESC。默认值为ASC。
     * @param integer $Offset 偏移量，默认值为0。
     * @param integer $Limit 限制数量，当前Limit最大支持3000。默认值为3000。
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
