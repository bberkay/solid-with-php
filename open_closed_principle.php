<?php
/**
 *  Open Closed Principle
 *  ---------------------
 *  Software entities (classes, modules, functions, etc.) should be open for extension but
 *  closed for modification. It means that you should design your code in a way that allows
 *  adding new functionality without modifying existing code. This principle is often achieved
 *  through the use of abstractions, interfaces, and polymorphism.
 *
 *  - All descriptions and comments created by ChatGPT and GitHub Copilot
 */

/**
 * Bad Example
 */
class Shape
{
    private string $type; // string

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function draw(): void
    {
        if($this->type === 'circle')
            $this->drawCircle();
        else if($this->type === 'square')
            $this->drawSquare();
        else if($this->type === 'triangle')
            $this->drawTriangle();
        else
            throw new Exception('Unknown shape type');
    }

    private function drawCircle(): void
    {
        echo 'Drawing circle';
    }

    private function drawSquare(): void
    {
        echo 'Drawing square';
    }

    private function drawTriangle(): void
    {
        echo 'Drawing triangle';
    }
}

/**
 * Good Example
 */
interface Shape
{
    public function draw(): void;
}

class Circle implements Shape
{
    public function draw(): void
    {
        echo 'Drawing circle';
    }
}

class Square implements Shape
{
    public function draw(): void
    {
        echo 'Drawing square';
    }
}

class Triangle implements Shape
{
    public function draw(): void
    {
        echo 'Drawing triangle';
    }
}

/**
 * In the bad example, the Shape class violates the Open Closed Principle because it is not
 * closed for modification. If we want to add a new shape, we have to modify the Shape class
 * by adding a new condition to the draw() method. This is not a good approach because we
 * have to modify the existing code, which can lead to introducing new bugs.
 */