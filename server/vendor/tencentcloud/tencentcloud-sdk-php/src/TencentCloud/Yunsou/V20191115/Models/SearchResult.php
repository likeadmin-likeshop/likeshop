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
namespace TencentCloud\Yunsou\V20191115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 搜索结果
 *
 * @method integer getCostTime() 获取检索耗时，单位ms
 * @method void setCostTime(integer $CostTime) 设置检索耗时，单位ms
 * @method integer getDisplayNum() 获取搜索最多可以展示的结果数，多页
 * @method void setDisplayNum(integer $DisplayNum) 设置搜索最多可以展示的结果数，多页
 * @method string getEcho() 获取和检索请求中的echo相对应
 * @method void setEcho(string $Echo) 设置和检索请求中的echo相对应
 * @method integer getEResultNum() 获取检索结果的估算篇数，由索引平台估算
 * @method void setEResultNum(integer $EResultNum) 设置检索结果的估算篇数，由索引平台估算
 * @method integer getResultNum() 获取检索返回的当前页码结果数
 * @method void setResultNum(integer $ResultNum) 设置检索返回的当前页码结果数
 * @method array getResultList() 获取检索结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultList(array $ResultList) 设置检索结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSegList() 获取检索的分词结果，array类型，可包含多个
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegList(array $SegList) 设置检索的分词结果，array类型，可包含多个
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchResult extends AbstractModel
{
    /**
     * @var integer 检索耗时，单位ms
     */
    public $CostTime;

    /**
     * @var integer 搜索最多可以展示的结果数，多页
     */
    public $DisplayNum;

    /**
     * @var string 和检索请求中的echo相对应
     */
    public $Echo;

    /**
     * @var integer 检索结果的估算篇数，由索引平台估算
     */
    public $EResultNum;

    /**
     * @var integer 检索返回的当前页码结果数
     */
    public $ResultNum;

    /**
     * @var array 检索结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultList;

    /**
     * @var array 检索的分词结果，array类型，可包含多个
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegList;

    /**
     * @param integer $CostTime 检索耗时，单位ms
     * @param integer $DisplayNum 搜索最多可以展示的结果数，多页
     * @param string $Echo 和检索请求中的echo相对应
     * @param integer $EResultNum 检索结果的估算篇数，由索引平台估算
     * @param integer $ResultNum 检索返回的当前页码结果数
     * @param array $ResultList 检索结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SegList 检索的分词结果，array类型，可包含多个
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("DisplayNum",$param) and $param["DisplayNum"] !== null) {
            $this->DisplayNum = $param["DisplayNum"];
        }

        if (array_key_exists("Echo",$param) and $param["Echo"] !== null) {
            $this->Echo = $param["Echo"];
        }

        if (array_key_exists("EResultNum",$param) and $param["EResultNum"] !== null) {
            $this->EResultNum = $param["EResultNum"];
        }

        if (array_key_exists("ResultNum",$param) and $param["ResultNum"] !== null) {
            $this->ResultNum = $param["ResultNum"];
        }

        if (array_key_exists("ResultList",$param) and $param["ResultList"] !== null) {
            $this->ResultList = [];
            foreach ($param["ResultList"] as $key => $value){
                $obj = new SearchResultItem();
                $obj->deserialize($value);
                array_push($this->ResultList, $obj);
            }
        }

        if (array_key_exists("SegList",$param) and $param["SegList"] !== null) {
            $this->SegList = [];
            foreach ($param["SegList"] as $key => $value){
                $obj = new SearchResultSeg();
                $obj->deserialize($value);
                array_push($this->SegList, $obj);
            }
        }
    }
}
