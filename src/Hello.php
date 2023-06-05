<?php

namespace nimowagukari\ComposerPackageTutorial;

class Hello
{
    private string $message;
    function __construct($message)
    {
        $this->message = $message;
    }
    public function hello()
    {
        print($this->message);
    }
}
