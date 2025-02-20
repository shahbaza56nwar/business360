<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DefaultLayout extends Component
{
    public $layout;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($layout = null)
    {
        // Init layout file
        app(config('settings.KT_THEME_BOOTSTRAP.default'))->init();

        // Use custom layout if provided, otherwise fallback to default
        $this->layout = $layout ?? config('settings.KT_THEME_LAYOUT_DIR') . '._default';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // See also starterkit/app/Core/Bootstrap/BootstrapDefault.php
        //return view(config('settings.KT_THEME_LAYOUT_DIR').'._default');

        // Use the selected layout
        return view($this->layout);
    }
}
