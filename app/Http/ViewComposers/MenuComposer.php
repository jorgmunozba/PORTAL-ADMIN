<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Configuracion;

class MenuComposer{

    public function compose(View $view){
        $config = Configuracion::find(1);
        $view->with('config',$config);
    }
}