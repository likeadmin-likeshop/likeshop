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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签键值对以及资源ID
 *
 * @method string getTagKey() 获取标签键
 * @method void setTagKey(string $TagKey) 设置标签键
 * @method string getTagValue() 获取标签值
 * @method void setTagValue(string $TagValue) 设置标签值
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getTagKeyMd5() 获取标签键MD5值
 * @method void setTagKeyMd5(string $TagKeyMd5) 设置标签键MD5值
 * @method string getTagValueMd5() 获取标签值MD5值
 * @method void setTagValueMd5(string $TagValueMd5) 设置标签值MD5值
 * @method string getServiceType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class TagResource extends AbstractModel
{
    /**
     * @var string 标签键
     */
    public $TagKey;

    /**
     * @var string 标签值
     */
    public $TagValue;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 标签键MD5值
     */
    public $TagKeyMd5;

    /**
     * @var string 标签值MD5值
     */
    public $TagValueMd5;

    /**
     * @var string 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @param string $TagKey 标签键
     * @param string $TagValue 标签值
     * @param string $ResourceId 资源ID
     * @param string $TagKeyMd5 标签键MD5值
     * @param string $TagValueMd5 标签值MD5值
     * @param string $ServiceType 资源类型
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TagKeyMd5",$param) and $param["TagKeyMd5"] !== null) {
            $this->TagKeyMd5 = $param["TagKeyMd5"];
        }

        if (array_key_exists("TagValueMd5",$param) and $param["TagValueMd5"] !== null) {
            $this->TagValueMd5 = $param["TagValueMd5"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
