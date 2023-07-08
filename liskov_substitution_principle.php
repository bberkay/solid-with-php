<?php
/**
 *  Liskov Substitution Principle
 *  ------------------------------
 *  Subtypes must be substitutable for their base types. It means that objects of a
 *  superclass should be able to be replaced with objects of its subclass without affecting
 *  the correctness of the program. In other words, derived classes should be able to be used
 *  wherever their base classes are used, without introducing unexpected behavior.
 *
 *  - All descriptions and comments created by ChatGPT and GitHub Copilot
 */

/**
 * Bad Example
 */
class Rectangle
{
    protected int $width;
    protected int $height;

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
    public function calculateArea(): int
    {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle
{
    public function setWidth(int $width): void
    {
        $this->width = $width;
        $this->height = $width;
    }
    public function setHeight(int $height): void
    {
        $this->width = $height;
        $this->height = $height;
    }
}

/**
 * Good Example
 */
interface Shape
{
    public function calculateArea(): int;
}

class Rectangle implements Shape
{
    protected int $width;
    protected int $height;

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
    public function calculateArea(): int
    {
        return $this->width * $this->height;
    }
}

class Square implements Shape
{
    protected int $length;

    public function setLength(int $length): void
    {
        $this->length = $length;
    }
    public function calculateArea(): int
    {
        return $this->length * $this->length;
    }
}

/**
 * In the bad example, the Square class extends the Rectangle class and overrides its
 * setWidth() and setHeight() methods to ensure that both the width and height of the
 * square are always equal. However, this violates the Liskov Substitution Principle
 * because the Square class is not substitutable for the Rectangle class. For example,
 * if we have a method that expects a Rectangle object and we pass it a Square object,
 * the method will not behave as expected.
 */