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
 * In the bad example, the MultiFunctionPrinter class implements all the methods
 * of the Machine interface, even though it does not need all of them. This is
 * a violation of the Interface Segregation Principle. The good example shows
 * how to fix this problem by splitting the Machine interface into three smaller
 * interfaces: Printer, Scanner, and Copier. Now, the MultiFunctionPrinter class
 * can implement only the interfaces it needs.
 */


