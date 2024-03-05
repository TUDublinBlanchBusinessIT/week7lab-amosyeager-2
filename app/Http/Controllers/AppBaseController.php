<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AppBaseController extends BaseController
{
    /**
     * Display a success flash message.
     *
     * @param string $message
     */
    protected function successMessage($message)
    {
        Session::flash('success', $message);
    }

    /**
     * Display an error flash message.
     *
     * @param string $message
     */
    protected function errorMessage($message)
    {
        Session::flash('error', $message);
    }

    /**
     * Check if the current user is authenticated.
     *
     * @return bool
     */
    protected function isAuthenticated()
    {
        return Auth::check();
    }

    /**
     * Get the ID of the currently authenticated user.
     *
     * @return int|null
     */
    protected function getCurrentUserId()
    {
        return Auth::id();
    }
    
    // Add more methods for common functionality as needed...
}
