<?php

namespace App\View\Components;

use App\Models\FormInput;
use Illuminate\View\Component;

class RegisterForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if(request()->routeIs('register')){

            $query=FormInput::where('head','Register')->get();

        }else if(request()->routeIs('login')){

            $query=FormInput::where('head','Login')->get();
        }
        
        return view('components.register-form',[

            'forms'=>$query
        ]);
    }
}
