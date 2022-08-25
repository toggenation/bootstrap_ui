<?php

declare(strict_types=1);

namespace App\View\Helper;

use BootstrapUI\View\Helper\HtmlHelper as BootstrapUIHelper;

/**
 * Html helper
 */
class HtmlHelper extends BootstrapUIHelper
{
    public function activeIcon($active = false, $options = [])
    {
        $icon = $active ? 'check' : 'x';

        return $this->icon($icon, $options);
    }
}
