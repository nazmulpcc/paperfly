<?php

namespace Nazmul\Paperfly\DTO;

class OrderCreationRequestDto extends BaseDto
{
    public string $merchantCode;

    public string $merOrderRef;

    public string $pickMerchantName;

    public string $pickMerchantAddress;

    public string $pickMerchantThana;

    public string $pickMerchantDistrict;

    public string $pickupMerchantPhone;

    public string $productSizeWeight;

    public string $productBrief;

    public string|int|float $packagePrice;

    public string $deliveryOption = 'regular';

    public string $custname;

    public string $custaddress;

    public string $customerThana;

    public string $customerDistrict;

    public string $custPhone;

    public string $max_weight;
}
