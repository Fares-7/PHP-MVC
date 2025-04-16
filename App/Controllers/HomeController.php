<?

namespace App\Controllers;

use PhpMvc\View\view;

class HomeController
{
    public function index()
    {
        return view::make('home');
    }

}