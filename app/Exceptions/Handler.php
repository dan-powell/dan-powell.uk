<?php namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler {

	/**
	 * A list of the exception types that should not be reported.
	 *
	 * @var array
	 */
	protected $dontReport = [
		'Symfony\Component\HttpKernel\Exception\HttpException'
	];

	/**
	 * Report or log an exception.
	 *
	 * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
	 *
	 * @param  \Exception  $e
	 * @return void
	 */
	public function report(Exception $e)
	{
		return parent::report($e);
	}

	/**
	 * Render an exception into an HTTP response.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Exception  $e
	 * @return \Illuminate\Http\Response
	 */
	public function render($request, Exception $e)
	{
		if ($this->isHttpException($e))
		{

    		if (!config('app.debug')) {

                switch ($e->getStatusCode())
                {
                    case 401: /* forbidden */
                        return response()->view('system.401', [], 401);
                    case 403: /* permission denied */
                        return response()->view('system.403', [], 403);
                    case 404: /* not found */
                        return response()->view('system.404', [], 404);
                    case 503: /* service unavailable - down for maintenance */
                        return response()->view('system.503', [], 503);
                    default:
                        /* internal error */
                        return response()->view('system.500', [], 500);
                }

            }
            else
            {
                /* service unavailable - down for maintenance */
                if($e->getStatusCode() == 503)
                    return response()->view('system.503', [], 503);
                else {
                    return $this->renderHttpException($e);
                }

            }

		}
		else
		{
    		if (!config('app.debug')) {
        		return response()->view('system.error', [], 500);
            } else {
			    return parent::render($request, $e);
            }
		}
	}

}
