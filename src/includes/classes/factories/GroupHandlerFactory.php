<?php

namespace WebPA\includes\classes\factories;

use WebPA\includes\classes\GroupHandler;

class GroupHandlerFactory
{
    public function make()
    {
        return new GroupHandler();
    }
}