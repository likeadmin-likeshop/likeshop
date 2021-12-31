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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 眼睛信息
 *
 * @method AttributeItem getGlass() 获取识别是否佩戴眼镜。
AttributeItem对应的Type为 —— 0：无眼镜，1：普通眼镜，2：墨镜
 * @method void setGlass(AttributeItem $Glass) 设置识别是否佩戴眼镜。
AttributeItem对应的Type为 —— 0：无眼镜，1：普通眼镜，2：墨镜
 * @method AttributeItem getEyeOpen() 获取识别眼睛的睁开、闭合状态。
AttributeItem对应的Type为 —— 0：睁开，1：闭眼
 * @method void setEyeOpen(AttributeItem $EyeOpen) 设置识别眼睛的睁开、闭合状态。
AttributeItem对应的Type为 —— 0：睁开，1：闭眼
 * @method AttributeItem getEyelidType() 获取识别是否双眼皮。
AttributeItem对应的Type为 —— 0：无，1：有。
 * @method void setEyelidType(AttributeItem $EyelidType) 设置识别是否双眼皮。
AttributeItem对应的Type为 —— 0：无，1：有。
 * @method AttributeItem getEyeSize() 获取眼睛大小。
AttributeItem对应的Type为 —— 0：小眼睛，1：普通眼睛，2：大眼睛。
 * @method void setEyeSize(AttributeItem $EyeSize) 设置眼睛大小。
AttributeItem对应的Type为 —— 0：小眼睛，1：普通眼睛，2：大眼睛。
 */
class Eye extends AbstractModel
{
    /**
     * @var AttributeItem 识别是否佩戴眼镜。
AttributeItem对应的Type为 —— 0：无眼镜，1：普通眼镜，2：墨镜
     */
    public $Glass;

    /**
     * @var AttributeItem 识别眼睛的睁开、闭合状态。
AttributeItem对应的Type为 —— 0：睁开，1：闭眼
     */
    public $EyeOpen;

    /**
     * @var AttributeItem 识别是否双眼皮。
AttributeItem对应的Type为 —— 0：无，1：有。
     */
    public $EyelidType;

    /**
     * @var AttributeItem 眼睛大小。
AttributeItem对应的Type为 —— 0：小眼睛，1：普通眼睛，2：大眼睛。
     */
    public $EyeSize;

    /**
     * @param AttributeItem $Glass 识别是否佩戴眼镜。
AttributeItem对应的Type为 —— 0：无眼镜，1：普通眼镜，2：墨镜
     * @param AttributeItem $EyeOpen 识别眼睛的睁开、闭合状态。
AttributeItem对应的Type为 —— 0：睁开，1：闭眼
     * @param AttributeItem $EyelidType 识别是否双眼皮。
AttributeItem对应的Type为 —— 0：无，1：有。
     * @param AttributeItem $EyeSize 眼睛大小。
AttributeItem对应的Type为 —— 0：小眼睛，1：普通眼睛，2：大眼睛。
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
        if (array_key_exists("Glass",$param) and $param["Glass"] !== null) {
            $this->Glass = new AttributeItem();
            $this->Glass->deserialize($param["Glass"]);
        }

        if (array_key_exists("EyeOpen",$param) and $param["EyeOpen"] !== null) {
            $this->EyeOpen = new AttributeItem();
            $this->EyeOpen->deserialize($param["EyeOpen"]);
        }

        if (array_key_exists("EyelidType",$param) and $param["EyelidType"] !== null) {
            $this->EyelidType = new AttributeItem();
            $this->EyelidType->deserialize($param["EyelidType"]);
        }

        if (array_key_exists("EyeSize",$param) and $param["EyeSize"] !== null) {
            $this->EyeSize = new AttributeItem();
            $this->EyeSize->deserialize($param["EyeSize"]);
        }
    }
}
