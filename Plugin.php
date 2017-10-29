<?php

namespace Kanboard\Plugin\Donboard;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:project:dropdown', 'Donboard:project/dropdown');
    }

    public function getPluginAuthor()
    {
        return "Madz";
    }
    
    public function getPluginName()
    {
        return 'Donboard';
    }
}
