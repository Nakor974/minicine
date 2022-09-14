<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $name;
    public $titre;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $titre)
    {
        $this->name = $name;
        $this->titre = $titre;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert', [
            'tags' => $this->getTags()
        ]);
    }


    private function getTags()
    {

        return [
            'HTML',
            'PHP',
            'JavaScript',


        ];
    }
}
