<?php

namespace Nazmul\Paperfly\DTO;

abstract class BaseDto
{
    public static function from(array $data): static
    {
        $dto = new static();

        foreach ($data as $key => $value) {
            if (property_exists($dto, $key)) {
                $dto->{$key} = $value;
            }
        }

        return $dto;
    }

    public function only(array $keys): array
    {
        return array_filter($this->toArray(), function ($key) use ($keys) {
            return in_array($key, $keys);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function except(array $keys): array
    {
        return array_filter($this->toArray(), function ($key) use ($keys) {
            return ! in_array($key, $keys);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toArray(): array
    {
        return (array) $this;
    }

    public function toJson(): bool|string
    {
        return json_encode($this);
    }

    public function __toString(): string
    {
        return $this->toJson();
    }
}
