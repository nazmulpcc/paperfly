<?php

namespace Nazmul\Paperfly\DTO;

class MerchantRegistrationDto extends BaseDto
{
    public string $merchant_name;

    public string $product_nature;

    public string $address;

    public string $thana;

    public string $district;

    public string $website;

    public string $facebook;

    public string $email;

    public string $company_phone;

    public string $contact_name;

    public string $contact_number;

    public string $designation;

    public string $account_name;

    public string $account_number;

    public string $bank_name;

    public string $bank_branch;

    public string $routing_number;

    public string $payment_mode = 'beftn';
}
