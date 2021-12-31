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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeItems返回参数结构体
 *
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method integer getSize() 获取当前页歌曲数量
 * @method void setSize(integer $Size) 设置当前页歌曲数量
 * @method integer getTotal() 获取总数据条数
 * @method void setTotal(integer $Total) 设置总数据条数
 * @method integer getHaveMore() 获取剩余数量（total-offset-size），通过这个值判断是否
还有下一页
 * @method void setHaveMore(integer $HaveMore) 设置剩余数量（total-offset-size），通过这个值判断是否
还有下一页
 * @method array getItems() 获取Items 歌曲列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置Items 歌曲列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeItemsResponse extends AbstractModel
{
    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var integer 当前页歌曲数量
     */
    public $Size;

    /**
     * @var integer 总数据条数
     */
    public $Total;

    /**
     * @var integer 剩余数量（total-offset-size），通过这个值判断是否
还有下一页
     */
    public $HaveMore;

    /**
     * @var array Items 歌曲列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Offset 分页偏移量
     * @param integer $Size 当前页歌曲数量
     * @param integer $Total 总数据条数
     * @param integer $HaveMore 剩余数量（total-offset-size），通过这个值判断是否
还有下一页
     * @param array $Items Items 歌曲列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("HaveMore",$param) and $param["HaveMore"] !== null) {
            $this->HaveMore = $param["HaveMore"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
