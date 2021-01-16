<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;

class SuccessResponse implements Responsable
{
    protected $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function toResponse($request)
    {
        return response()->json([
            'status' => 'ok',
            'msg' => $this->msg,
        ], 200);
    }
    
}
