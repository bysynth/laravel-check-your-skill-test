<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HelloWorld extends Component
{
    public function render()
    {
        return view('components.hello-world');
    }
}
