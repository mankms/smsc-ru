<?php

namespace NotificationChannels\SmscRu;

class SmscRuMessage
{
    /**
     * The phone number the message should be sent from.
     *
     * @var string
     */
    public $from = '';

    /**
     * The message is an email if true.
     *
     * @var bool
     */
    public $isAnEmail = false;

    /**
     * The subject for the email message.
     *
     * @var string
     */
    public $subject = '';

    /**
     * The message content.
     *
     * @var string
     */
    public $content = '';

    /**
     * Time of sending a message.
     *
     * @var \DateTimeInterface
     */
    public $sendAt;

    /**
     * Create a new message instance.
     *
     * @param  string $content
     *
     * @return static
     */
    public static function create($content = '')
    {
        return new static($content);
    }

    /**
     * @param  string  $content
     */
    public function __construct($content = '')
    {
        $this->content = $content;
    }

    /**
     * Set the message content.
     *
     * @param  string  $content
     *
     * @return $this
     */
    public function content($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Set the phone number or sender name the message should be sent from.
     *
     * @param  string  $from
     *
     * @return $this
     */
    public function from($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Marks the message as an email.
     *
     * @return $this
     */
    public function email()
    {
        $this->isAnEmail = true;

        return $this;
    }

    /**
     * Set the subject for the email message.
     *
     * @param  string  $subject
     *
     * @return $this
     */
    public function subject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Set the time the message should be sent.
     *
     * @param  \DateTimeInterface|null  $sendAt
     *
     * @return $this
     */
    public function sendAt(\DateTimeInterface $sendAt = null)
    {
        $this->sendAt = $sendAt;

        return $this;
    }
}
