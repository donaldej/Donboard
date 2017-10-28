<?php

namespace Kanboard\Plugin\Donboard;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:layout:head', 'theme:layout/head');
    }

    public function getPluginAuthor()
    {
        return "Madz";
    }
}
