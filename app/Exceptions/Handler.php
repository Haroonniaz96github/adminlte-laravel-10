<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            // $userId = Auth::user()->id ?? 1;


            // $data = array(
            //     'user_id' => $userId,
            //     'code' => $e->getCode(),
            //     'file' => $e->getFile(),
            //     'line' => $e->getLine(),
            //     'message' => $e->getMessage(),
            //     'trace' => $e->getTraceAsString(),
            // );

            // Log::create($data);
        });
    }
}
