<?php
/**
 *  SOLID Principles
 *  ----------------
 *  The SOLID principles are a set of design principles that aim to guide software developers
 *  in creating maintainable, scalable, and modular software systems. These principles were
 *  introduced by Robert C. Martin (also known as Uncle Bob) and have become widely accepted
 *  in the field of software development.
 *
 *  Single Responsibility Principle
 *  -------------------------------
 *  A class should have only one reason to change. It means that a class or module should
 *  have a single responsibility or purpose and should encapsulate that responsibility.
 *  This principle promotes high cohesion and reduces the potential for ripple effects when
 *  making changes.
 *
 *  - All descriptions and comments created by ChatGPT and GitHub Copilot
 */

/**
 * Bad Example
 */
class ProductInventory
{
    public function addProduct($product)
    {
        // Add product to inventory
    }

    public function removeProduct($product){
        // Remove product from inventory
    }

    public function generateReports($product){
        // Generate reports for product
    }
}

/**
 * Good Example
 */
class ProductInventory
{
    public function addProduct($product)
    {
        // Add product to inventory
    }

    public function removeProduct($product)
    {
        // Remove product from inventory
    }
}

class ReportGenerator
{
    public function generateReports($product)
    {
        // Generate reports for product
    }
}

/**
 * generateReports() method is moved to a separate class ReportGenerator. This class is
 * responsible for generating reports. Now, if there is any change in the report generation
 * logic, we need to change only the ReportGenerator class. The ProductInventory class is
 * not affected by this change.
 */




?>