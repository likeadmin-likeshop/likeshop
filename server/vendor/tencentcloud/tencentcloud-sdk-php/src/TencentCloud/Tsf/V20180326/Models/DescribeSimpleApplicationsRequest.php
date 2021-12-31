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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSimpleApplications请求参数结构体
 *
 * @method array getApplicationIdList() 获取应用ID列表
 * @method void setApplicationIdList(array $ApplicationIdList) 设置应用ID列表
 * @method string getApplicationType() 获取应用类型
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method integer getOffset() 获取起始偏移量
 * @method void setOffset(integer $Offset) 设置起始偏移量
 * @method string getMicroserviceType() 获取微服务类型
 * @method void setMicroserviceType(string $MicroserviceType) 设置微服务类型
 * @method array getApplicationResourceTypeList() 获取资源类型数组
 * @method void setApplicationResourceTypeList(array $ApplicationResourceTypeList) 设置资源类型数组
 * @method string getSearchWord() 获取通过id和name进行关键词过滤
 * @method void setSearchWord(string $SearchWord) 设置通过id和name进行关键词过滤
 */
class DescribeSimpleApplicationsRequest extends AbstractModel
{
    /**
     * @var array 应用ID列表
     */
    public $ApplicationIdList;

    /**
     * @var string 应用类型
     */
    public $ApplicationType;

    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var integer 起始偏移量
     */
    public $Offset;

    /**
     * @var string 微服务类型
     */
    public $MicroserviceType;

    /**
     * @var array 资源类型数组
     */
    public $ApplicationResourceTypeList;

    /**
     * @var string 通过id和name进行关键词过滤
     */
    public $SearchWord;

    /**
     * @param array $ApplicationIdList 应用ID列表
     * @param string $ApplicationType 应用类型
     * @param integer $Limit 每页条数
     * @param integer $Offset 起始偏移量
     * @param string $MicroserviceType 微服务类型
     * @param array $ApplicationResourceTypeList 资源类型数组
     * @param string $SearchWord 通过id和name进行关键词过滤
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
        if (array_key_exists("ApplicationIdList",$param) and $param["ApplicationIdList"] !== null) {
            $this->ApplicationIdList = $param["ApplicationIdList"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ApplicationResourceTypeList",$param) and $param["ApplicationResourceTypeList"] !== null) {
            $this->ApplicationResourceTypeList = $param["ApplicationResourceTypeList"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
