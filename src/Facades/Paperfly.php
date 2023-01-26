<?php

namespace Nazmul\Paperfly\Facades;

use Illuminate\Support\Facades\Facade;
use Nazmul\Paperfly\DTO\MerchantRegistrationDto;
use Nazmul\Paperfly\DTO\MerchantRegistrationResponse;
use Nazmul\Paperfly\DTO\OrderCreationRequestDto;
use Nazmul\Paperfly\DTO\OrderResponseDto;

/**
 * @see \Nazmul\Paperfly\Paperfly
 * @method static MerchantRegistrationResponse registerChildMerchant(MerchantRegistrationDto $data)
 * @method static OrderResponseDto createOrder(OrderCreationRequestDto $data)
 * @method static array trackOrder(string $orderReference, string $merchantCode)
 * @method static array cancelOrder(string $orderReference, string $merchantCode)
 */
class Paperfly extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Nazmul\Paperfly\Paperfly::class;
    }
}
