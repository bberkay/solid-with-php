<?php
/**
 *  Interface Segregation Principle
 *  -------------------------------
 *  Clients should not be forced to depend on interfaces they do not use. It means
 *  that you should design fine-grained interfaces that are specific to the needs of
 *  the clients that use them, instead of having large, monolithic interfaces. This
 *  principle helps in decoupling components and reducing the impact of changes.
 *
 *  - All descriptions and comments created by ChatGPT and GitHub Copilot
 */

/**
 * Bad Example
 */
interface Machine{
    public function print();
    public function scan();
    public function copy();
}

class MultiFunctionPrinter implements Machine{
    public function print(): void
    {
        // print
    }

    public function scan(): void
    {
        // scan
    }

    public function copy(): void
    {
        // fax
    }
}

/**
 * Good Example
 */
interface Printer{
    public function print();
}

interface Scanner{
    public function scan();
}

interface Copier{
    public function copy();
}

class LaserPrinter implements Printer{
    public function print(): void
    {
        // print
    }
}

class FlatbedScanner implements Scanner{
    public function scan(): void
    {
        // scan
    }
}

class PhotoCopier implements Printer, Scanner, Copier{
    public function print(): void
    {
        // print
    }

    public function scan(): void
    {
        // scan
    }

    public function copy(): void
    {
        // copy
    }
}

/**
 * The interface segregation principle states that clients should not be forced to
 * implement interfaces they don't use. Instead of one fat interface many small
 * interfaces are preferred based on groups of methods, each one serving one
 * submodule.
 */


