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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePredictiveDialingSessions返回参数结构体
 *
 * @method integer getTotalCount() 获取数据总量
 * @method void setTotalCount(integer $TotalCount) 设置数据总量
 * @method array getSessionList() 获取呼叫的 session id 列表，通过 https://cloud.tencent.com/document/product/679/47714 可以批量获取呼叫详细话单
 * @method void setSessionList(array $SessionList) 设置呼叫的 session id 列表，通过 https://cloud.tencent.com/document/product/679/47714 可以批量获取呼叫详细话单
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePredictiveDialingSessionsResponse extends AbstractModel
{
    /**
     * @var integer 数据总量
     */
    public $TotalCount;

    /**
     * @var array 呼叫的 session id 列表，通过 https://cloud.tencent.com/document/product/679/47714 可以批量获取呼叫详细话单
     */
    public $SessionList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 数据总量
     * @param array $SessionList 呼叫的 session id 列表，通过 https://cloud.tencent.com/document/product/679/47714 可以批量获取呼叫详细话单
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SessionList",$param) and $param["SessionList"] !== null) {
            $this->SessionList = $param["SessionList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
