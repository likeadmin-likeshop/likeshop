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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomImages请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取数量限制
 * @method void setLimit(integer $Limit) 设置数量限制
 * @method string getOrderField() 获取排序字段，仅支持CreateTime
 * @method void setOrderField(string $OrderField) 设置排序字段，仅支持CreateTime
 * @method integer getOrder() 获取排序方式 0:递增(默认) 1:递减
 * @method void setOrder(integer $Order) 设置排序方式 0:递增(默认) 1:递减
 * @method string getImageId() 获取按ImageId查找指定镜像信息，ImageId字段存在时其他字段失效
 * @method void setImageId(string $ImageId) 设置按ImageId查找指定镜像信息，ImageId字段存在时其他字段失效
 * @method string getSearchKey() 获取模糊查询过滤，可以查询镜像ID或镜像名
 * @method void setSearchKey(string $SearchKey) 设置模糊查询过滤，可以查询镜像ID或镜像名
 * @method array getImageStatus() 获取<ul>
镜像状态过滤列表，有效取值为：
<li>1：制作中</li>
<li>2：制作失败</li>
<li>3：正常</li>
<li>4：删除中</li>
</ul>
 * @method void setImageStatus(array $ImageStatus) 设置<ul>
镜像状态过滤列表，有效取值为：
<li>1：制作中</li>
<li>2：制作失败</li>
<li>3：正常</li>
<li>4：删除中</li>
</ul>
 */
class DescribeCustomImagesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 数量限制
     */
    public $Limit;

    /**
     * @var string 排序字段，仅支持CreateTime
     */
    public $OrderField;

    /**
     * @var integer 排序方式 0:递增(默认) 1:递减
     */
    public $Order;

    /**
     * @var string 按ImageId查找指定镜像信息，ImageId字段存在时其他字段失效
     */
    public $ImageId;

    /**
     * @var string 模糊查询过滤，可以查询镜像ID或镜像名
     */
    public $SearchKey;

    /**
     * @var array <ul>
镜像状态过滤列表，有效取值为：
<li>1：制作中</li>
<li>2：制作失败</li>
<li>3：正常</li>
<li>4：删除中</li>
</ul>
     */
    public $ImageStatus;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 数量限制
     * @param string $OrderField 排序字段，仅支持CreateTime
     * @param integer $Order 排序方式 0:递增(默认) 1:递减
     * @param string $ImageId 按ImageId查找指定镜像信息，ImageId字段存在时其他字段失效
     * @param string $SearchKey 模糊查询过滤，可以查询镜像ID或镜像名
     * @param array $ImageStatus <ul>
镜像状态过滤列表，有效取值为：
<li>1：制作中</li>
<li>2：制作失败</li>
<li>3：正常</li>
<li>4：删除中</li>
</ul>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("ImageStatus",$param) and $param["ImageStatus"] !== null) {
            $this->ImageStatus = $param["ImageStatus"];
        }
    }
}
