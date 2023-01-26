<?php

namespace Nazmul\Paperfly\DTO;

class OrderResponseDto extends BaseDto
{
    public bool $success = false;

    public string $message = '';

    public string $tracking_number;

    public int $response_code = 400;

    public static function fromError(array $errorResponse): static
    {
        $data = $errorResponse['error'] ?? [
            'message' => 'Unknown format sent by Paperfly'
        ];
        $data['success'] = false;
        $data['response_code'] = $errorResponse['response_code'] ?? 400;

        return static::from($data);
    }

    public static function fromSuccess(array $successResponse): static
    {
        $data = $successResponse['success'] ?? [
            'message' => 'Unknown format sent by Paperfly'
        ];
        $data['success'] = true;
        $data['response_code'] = $successResponse['response_code'] ?? 200;

        return static::from($data);
    }
}
