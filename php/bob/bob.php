<?php

/**
 * Class Bob
 */
class Bob
{
    const RESPONSE_TO_NOTHING = 'Fine. Be that way!';
    const RESPONSE_TO_YELL = 'Whoa, chill out!';
    const RESPONSE_TO_QUESTION = 'Sure.';
    const RESPONSE_TO_YELLING_QUESTION = 'Calm down, I know what I\'m doing!';
    const RESPONSE_DEFAULT = 'Whatever.';

    /**
     * Returns a response depending on the text nature.
     * Responses are defined in the constants above.
     * @param string $text
     * @return string
     */
    public function respondTo(string $text): string
    {
        $text = $this->trimText($text);

        if ($this->isEmpty($text)) {
            return static::RESPONSE_TO_NOTHING;
        }

        if ($this->isYelling($text) && $this->isQuestion($text)) {
            return static::RESPONSE_TO_YELLING_QUESTION;
        }

        if ($this->isYelling($text)) {
            return static::RESPONSE_TO_YELL;
        }

        if ($this->isQuestion($text)) {
            return static::RESPONSE_TO_QUESTION;
        }

        return static::RESPONSE_DEFAULT;
    }

    /**
     * Checks if the text is empty.
     * @param string $text
     * @return bool
     */
    public function isEmpty(string $text): bool
    {
        return empty($text);
    }

    /**
     * Checks if the last character of the text is a question mark.
     * @param string $text
     * @return bool
     */
    public function isQuestion(string $text): bool
    {
        return "?" === mb_substr($text, -1);
    }

    /**
     * Checks if the text contains only capital letters.
     * @param string $text
     * @return bool
     */
    public function isYelling(string $text): bool
    {
        return $text === mb_strtoupper($text) && $text !== mb_strtolower($text);
    }

    /**
     * Removes spaces before and after the text.
     * @param string $text
     * @return string
     */
    public function trimText(string $text): string
    {
        return trim($text);
    }
}
