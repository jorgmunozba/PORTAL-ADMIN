<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrusel;
use App\Models\Producto;
use App\Models\Post;


class FrontController extends Controller
{
    public function index(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $producto = Producto::orderBy('visitas','desc')->take(3)->get();
        $post = Post::orderBy('created_at','desc')->take(2)->get();
        return view('welcome',compact('carrusel','producto','post'));
    }
}
