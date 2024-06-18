<?php
namespace Composition\Compose\Traits;

trait LoggerTrait {
    // Log a message
    public function logMessage($message) {
        // Assuming logs are saved in a file named "app.log"
        $logFile = __DIR__ . '/../MySampleAppLogger.log';
        $dateTime = date('Y-m-d H:i:s');
        $formattedMessage = "[$dateTime] $message" . PHP_EOL;
        
        // Append the message to the log file
        file_put_contents($logFile, $formattedMessage, FILE_APPEND);
    }
    
    // Log user activity
    public function logUserActivity($userId, $activity) {
        $message = "User ID $userId performed activity: $activity";
        $this->logMessage($message);
    }
}
