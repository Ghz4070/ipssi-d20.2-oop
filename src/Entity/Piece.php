<?php

declare(strict_types=1);

namespace App\Connect4\Entity;

final class Piece
{
    private const BLUE = 'bleu';
    private const RED = 'rouge';
    private $color;

    private function __construct(string $color)
    {
        $this->color = $color;
    }

    public function __toString(): string
    {
        return $this->color;
    }

    public static function createWhite(): Piece
    {
        return new self(self::bleu);
    }

    public static function createBlack(): Piece
    {
        return new self(self::rouge);
    }
}