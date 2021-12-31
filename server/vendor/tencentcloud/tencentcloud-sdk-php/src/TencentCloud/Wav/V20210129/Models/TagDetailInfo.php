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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签详细信息
 *
 * @method string getTagName() 获取标签名称
 * @method void setTagName(string $TagName) 设置标签名称
 * @method string getBizTagId() 获取标签业务ID
 * @method void setBizTagId(string $BizTagId) 设置标签业务ID
 * @method string getTagId() 获取企微标签ID
 * @method void setTagId(string $TagId) 设置企微标签ID
 * @method integer getSort() 获取标签排序的次序值，sort值大的排序靠前。有效的值范围是[0, 2^32)
 * @method void setSort(integer $Sort) 设置标签排序的次序值，sort值大的排序靠前。有效的值范围是[0, 2^32)
 * @method integer getCreateTime() 获取标签创建时间,单位为秒
 * @method void setCreateTime(integer $CreateTime) 设置标签创建时间,单位为秒
 */
class TagDetailInfo extends AbstractModel
{
    /**
     * @var string 标签名称
     */
    public $TagName;

    /**
     * @var string 标签业务ID
     */
    public $BizTagId;

    /**
     * @var string 企微标签ID
     */
    public $TagId;

    /**
     * @var integer 标签排序的次序值，sort值大的排序靠前。有效的值范围是[0, 2^32)
     */
    public $Sort;

    /**
     * @var integer 标签创建时间,单位为秒
     */
    public $CreateTime;

    /**
     * @param string $TagName 标签名称
     * @param string $BizTagId 标签业务ID
     * @param string $TagId 企微标签ID
     * @param integer $Sort 标签排序的次序值，sort值大的排序靠前。有效的值范围是[0, 2^32)
     * @param integer $CreateTime 标签创建时间,单位为秒
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
        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("BizTagId",$param) and $param["BizTagId"] !== null) {
            $this->BizTagId = $param["BizTagId"];
        }

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
