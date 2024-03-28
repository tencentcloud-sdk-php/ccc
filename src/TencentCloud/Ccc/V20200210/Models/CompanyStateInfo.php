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
 * 公司资质审核状态信息
 *
 * @method integer getId() 获取申请单ID
 * @method void setId(integer $Id) 设置申请单ID
 * @method string getCompanyName() 获取公司名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyName(string $CompanyName) 设置公司名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckTime() 获取审核时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckTime(integer $CheckTime) 设置审核时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckMsg() 获取审核备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckMsg(string $CheckMsg) 设置审核备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取审核状态，1-待审核，2-审核通过，3-驳回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置审核状态，1-待审核，2-审核通过，3-驳回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessId() 获取公司统一社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessId(string $BusinessId) 设置公司统一社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompanyStateInfo extends AbstractModel
{
    /**
     * @var integer 申请单ID
     */
    public $Id;

    /**
     * @var string 公司名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyName;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 审核时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckTime;

    /**
     * @var string 审核备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckMsg;

    /**
     * @var integer 审核状态，1-待审核，2-审核通过，3-驳回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 公司统一社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessId;

    /**
     * @param integer $Id 申请单ID
     * @param string $CompanyName 公司名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckTime 审核时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckMsg 审核备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 审核状态，1-待审核，2-审核通过，3-驳回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessId 公司统一社会信用代码
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CheckTime",$param) and $param["CheckTime"] !== null) {
            $this->CheckTime = $param["CheckTime"];
        }

        if (array_key_exists("CheckMsg",$param) and $param["CheckMsg"] !== null) {
            $this->CheckMsg = $param["CheckMsg"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }
    }
}
