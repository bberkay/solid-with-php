<?php
/**
 *  Dependency Inversion Principle
 *  ------------------------------
 *  High-level modules should not depend on low-level modules; both should depend on abstractions.
 *  It means that the design should depend on abstractions, not on concrete implementations. This
 *  principle promotes loose coupling between modules and enables easier substitution of implementations.
 *
 *  - All descriptions and comments created by ChatGPT and GitHub Copilot
 */

/**
 * Bad Example
 */
class EmailService{
    public function sendEmail(): void
    {
        // send email
    }
}

class Notification{
    private $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function sendNotification(): void
    {
        $this->emailService->sendEmail();
    }
}

/**
 * Good Example
 */
interface MessageService{
    public function sendMessage();
}

class EmailService implements MessageService{
    public function sendMessage(): void
    {
        // send email
    }
}

class Notification{
    private MessageService $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function sendNotification(): void
    {
        $this->messageService->sendMessage();
    }
}

/**
 * In the bad example, the Notification class depends on the EmailService class. If we want to
 * change the implementation of the EmailService class, we have to change the Notification class
 * as well. In the good example, the Notification class depends on the MessageService interface.
 * If we want to change the implementation of the MessageService interface, we don't have to
 * change the Notification class.
 */