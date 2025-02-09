<?php

namespace HiEvents\Services\Handlers\TaxAndFee\DTO;

use HiEvents\DataTransferObjects\BaseDTO;

class DeleteTaxDTO extends BaseDTO
{
    public function __construct(
        public readonly int $taxId,
        public readonly int $accountId,
    )
    {
    }
}
