<?php

namespace Nazmul\Paperfly\DTO;

class MerchantRegistrationResponse extends BaseDto
{
    public string $message = '';

    public bool $success = false;

    public int $response_code = 400;

    public ?string $merchant_code = null;

    public ?string $wings_username = null;

    public ?string $password = null;

    public static function fromError(array $errorResponse): static
    {
        return static::from($errorResponse['error'] ?? [
            'message' => 'Unknown format sent by Paperfly'
        ]);
    }

    public static function fromSuccess(array $successResponse): static
    {
        if (! isset($successResponse['success'])) {
            return static::from([
                'message' => 'Unknown format sent by Paperfly'
            ]);
        }

        $data = $successResponse['success'] ?? [];
        $data['response_code'] = $successResponse['response_code'];
        $data['success'] = true;

        return static::from($data);
    }

    public function getMerchant(): array
    {
        return $this->only([
            'merchant_code',
            'wing_username',
            'password'
        ]);
    }
}
