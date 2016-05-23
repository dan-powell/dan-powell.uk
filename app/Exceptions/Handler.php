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
                        return response()->view('public.error.401.error401', [], 401);
                    case 403: /* permission denied */
                        return response()->view('public.error.403.error403', [], 403);
                    case 404: /* not found */
                        return response()->view('public.error.404.error404', [], 404);
                    case 503: /* service unavailable - down for maintenance */
                        return response()->view('public.error.503.error503', [], 503);
                    default:
                        /* internal error */
                        return response()->view('public.error.500.error500', [], 500);
                }

            }
            else
            {
                /* service unavailable - down for maintenance */
                if($e->getStatusCode() == 503)
                    return response()->view('public.error.503.error503', [], 503);
                else {
                    return $this->renderHttpException($e);
                }

            }

		}
		else
		{
    		if (!config('app.debug')) {
        		return response()->view('public.error.general.errorGeneral', [], 500);
            } else {
			    return parent::render($request, $e);
            }
		}
	}

}
