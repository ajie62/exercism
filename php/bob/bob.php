<?php

/**
 * Class Bob
 */
class Bob
{
    /** @var array List of responses */
    const RESPONSES = [
        'NOTHING' => 'Fine. Be that way!',
        'YELL' => 'Whoa, chill out!',
        'QUESTION' => 'Sure.',
        'YELLING_QUESTION' => 'Calm down, I know what I\'m doing!',
        'DEFAULT' => 'Whatever.'
    ];

    /**
     * Returns a response depending on the text nature.
     * Responses are defined in the constants above.
     * @param string $text
     * @return string
     */
    public function respondTo(string $text): string
    {
        $text = $this->trimText($text);

        if (Bob::isEmpty($text)) {
            return static::RESPONSES['NOTHING'];
        }

        if (Bob::isYelling($text) && Bob::isQuestion($text)) {
            return static::RESPONSES['YELLING_QUESTION'];
        }

        if (Bob::isYelling($text)) {
            return static::RESPONSES['YELL'];
        }

        if (Bob::isQuestion($text)) {
            return static::RESPONSES['QUESTION'];
        }

        return static::RESPONSES['DEFAULT'];
    }

    /**
     * Checks if the text is empty.
     * @param string $text
     * @return bool
     */
    private static function isEmpty(string $text): bool
    {
        return empty($text);
    }

    /**
     * Checks if the last character of the text is a question mark.
     * @param string $text
     * @return bool
     */
    private static function isQuestion(string $text): bool
    {
        return "?" === mb_substr($text, -1);
    }

    /**
     * Checks if the text contains only capital letters.
     * @param string $text
     * @return bool
     */
    private static function isYelling(string $text): bool
    {
        return $text === mb_strtoupper($text) && $text !== mb_strtolower($text);
    }

    /**
     * Removes spaces before and after the text.
     * @param string $text
     * @return string
     */
    private static function trimText(string $text): string
    {
        return trim($text);
    }
}
