<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest;

use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest\dataDisk\part;
use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The index of data disk N on the destination ECS instance. Data disks on a destination ECS instance are arranged in a sequential order that starts from 1. Valid values: 1 to 16.
     *
     * >  To create a destination data disk for a source server, make sure that the source server has data disks.
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description The data disk partitions.
     *
     * @var part[]
     */
    public $part;

    /**
     * @description The size of the data disk on the destination ECS instance. Unit: GiB. Valid values: 20 to 32768.
     *
     * >  The size of a destination data disk must be larger than the size of data in the source data disk. For example, if the size of the source data disk is 500 GiB and the used space is 100 GiB, you must set this parameter to a value greater than 100.
     * @example 100
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'index' => 'Index',
        'part'  => 'Part',
        'size'  => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->part) {
            $res['Part'] = [];
            if (null !== $this->part && \is_array($this->part)) {
                $n = 0;
                foreach ($this->part as $item) {
                    $res['Part'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Part'])) {
            if (!empty($map['Part'])) {
                $model->part = [];
                $n           = 0;
                foreach ($map['Part'] as $item) {
                    $model->part[$n++] = null !== $item ? part::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
