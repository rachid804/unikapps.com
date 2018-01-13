<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(Request $request)
    {
        View::share('class', $this->get_view_class($request));
    }

    /**
     *  Generate CSS Page Class  in this form: controllerName-method
     * @param Request $request
     * @return string
     */
    private function get_view_class(Request $request): string
    {
        $action = $request->route()->getAction();
        $controller = str_replace($action['namespace'] . '\\', '', $action['controller']);
        list($controller, $action) = explode('@', $controller);
        $controller = strtolower(str_replace('Controller', '', $controller));

        return $controller . '-' . $action;
    }
}
