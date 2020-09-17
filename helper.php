<?php

if (! function_exists('isAdmin')) {
    function isAdmin()
    {
        if (auth()->user()) {
            if (auth()->user()->role == config('admin.role.admin')) {
                return true;
            }
        }
        return false;
    }
}

if (! function_exists('isUser')) {
    function isUser()
    {
        if (auth()->user()) {
            if (auth()->user()->role != config('admin.role.admin')) {
                return true;
            }
        }
        return false;
    }
}

if (! function_exists('flashMessage')) {
    function flashMessage($request, $message, $messageType)
    {
        $request->session()->flash('message', $message);
        $request->session()->flash('val_alert', $messageType);
    }
}

if (! function_exists('getProGood')) {
    function getProGood ($val)
    {
        if ($val == 1)
        {
            return 'Yes';
        }

        if ($val == 2)
        {
            return 'No';
        }

        if ($val == 0) {
            return "";
        }
    }
}
