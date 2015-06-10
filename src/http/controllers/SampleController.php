<?php

/*
 * This file is part of Laravel Credentials.
 *
 * (c) Nguyen Dang Quyet <ndquyet@yahoo.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sample\Simple\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

/**
 * This is the user controller class.
 *
 * @author Nguyen Dang Quyet <ndquyet@yahoo.com>
 */
class SampleController extends Controller
{

    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return View::make('sample::simple.index');
    }
}
