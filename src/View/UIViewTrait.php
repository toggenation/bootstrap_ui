<?php

declare(strict_types=1);

namespace App\View;

use App\View\Helper\HtmlHelper;

/**
 * UIViewTrait: Trait that loads the custom UIBootstrap helpers and sets View
 * layout to the UIBootstrap's one.
 */
trait UIViewTrait
{
    /**
     * Initialization hook method.
     *
     * @param array $options Associative array with valid keys:
     *   - `layout`:
     *      - If not set or true will use the plugin's layout
     *      - If a layout name passed it will be used
     *      - If false do nothing (will keep your layout)
     * @return void
     */
    public function initializeUI(array $options = []): void
    {
        if (
            (!isset($options['layout']) || $options['layout'] === true) &&
            $this->layout === 'default'
        ) {
            $this->layout = 'BootstrapUI.default';
        } elseif (isset($options['layout']) && is_string($options['layout'])) {
            $this->layout = $options['layout'];
        }

        $helpers = [
            'Breadcrumbs' => ['className' => 'BootstrapUI.Breadcrumbs'],
            'Flash' => ['className' => 'BootstrapUI.Flash'],
            'Form' => ['className' => 'BootstrapUI.Form'],
            'Html' => ['className' => HtmlHelper::class],
            'Paginator' => ['className' => 'BootstrapUI.Paginator'],
        ];

        $this->helpers = array_merge($helpers, $this->helpers);
    }
}
