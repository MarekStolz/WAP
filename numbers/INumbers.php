<?php
interface INumbers
{
    public function add(int $number): void;
    public function remove(int $number): void;
    public function clear(): void;
    public function count(int $number = null): int;
    public function exists(int $number): bool;
    public function toStr(string $sep = " - "): string;
}