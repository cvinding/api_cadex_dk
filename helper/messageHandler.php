<?php
namespace HELPER;

/**
 * Class MessageHandler
 * @package HELPER
 * @author Christian Vinding Rasmussen
 * A simple message handler class for outputting a response in the view
 */
class MessageHandler {

    /**
     * The array for storing all system messages
     * @var array $messages
     */
    private static $messages = [];

    /**
     * The array for storing all system results
     * @var array $messages
     */
    private static $results = [];

    /**
     * attachMessage() is used for attaching response message
     * @param string $message
     * @param int $httpCode
     * @return void
     */
    public static function attachMessage(string $message, int $httpCode = 200) : void {
        self::$messages[] = ["message" => $message, "httpCode" => $httpCode];
    }

    /**
     * attachResult() is used for attaching results as response messages
     * @param array $result
     * @param int $httpCode = 200
     * @return void
     */
    public static function attachResult(array $result, int $httpCode = 200) : void {
        self::$results[] = ["result" => $result, "httpCode" => $httpCode];
    }

    /**
     * getMessages() returns all messages
     * @return array
     */
    public static function getMessages() : array {
        return self::$messages;
    }

    /**
     * getResults() returns all results
     * @return array
     */
    public static function getResults() : array {
        return self::$results;
    }

}