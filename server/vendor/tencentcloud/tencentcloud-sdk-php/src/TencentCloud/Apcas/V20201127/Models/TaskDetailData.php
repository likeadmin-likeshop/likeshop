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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 画像任务详情对象
 *
 * @method integer getTagId() 获取画像TAG ID
 * @method void setTagId(integer $TagId) 设置画像TAG ID
 * @method string getTagDesc() 获取画像TAG描述（如“省份分布”）
 * @method void setTagDesc(string $TagDesc) 设置画像TAG描述（如“省份分布”）
 * @method array getLabelDetailDataList() 获取画像Label对象列表（一个TAG对于N个Label，例如“省份分布”TAG对应“广东省”、“浙江省”等多个Label）
 * @method void setLabelDetailDataList(array $LabelDetailDataList) 设置画像Label对象列表（一个TAG对于N个Label，例如“省份分布”TAG对应“广东省”、“浙江省”等多个Label）
 */
class TaskDetailData extends AbstractModel
{
    /**
     * @var integer 画像TAG ID
     */
    public $TagId;

    /**
     * @var string 画像TAG描述（如“省份分布”）
     */
    public $TagDesc;

    /**
     * @var array 画像Label对象列表（一个TAG对于N个Label，例如“省份分布”TAG对应“广东省”、“浙江省”等多个Label）
     */
    public $LabelDetailDataList;

    /**
     * @param integer $TagId 画像TAG ID
     * @param string $TagDesc 画像TAG描述（如“省份分布”）
     * @param array $LabelDetailDataList 画像Label对象列表（一个TAG对于N个Label，例如“省份分布”TAG对应“广东省”、“浙江省”等多个Label）
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("TagDesc",$param) and $param["TagDesc"] !== null) {
            $this->TagDesc = $param["TagDesc"];
        }

        if (array_key_exists("LabelDetailDataList",$param) and $param["LabelDetailDataList"] !== null) {
            $this->LabelDetailDataList = [];
            foreach ($param["LabelDetailDataList"] as $key => $value){
                $obj = new LabelDetailData();
                $obj->deserialize($value);
                array_push($this->LabelDetailDataList, $obj);
            }
        }
    }
}
