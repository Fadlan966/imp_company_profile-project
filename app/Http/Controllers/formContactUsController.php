<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Mail;

class formContactUsController extends Controller
{
    /**
     * store
     *
     * @param  mixed $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'service'        => 'required|exists:services,id',
            'project_theme'  => 'required|exists:project_themes,id',
            'name'           => 'required|max:100',
            'email'          => 'required|email:rfc,dns',
            'company_name'   => 'required|max:50',
            'project_details'=> 'required|max:450',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $mail = Mail::create([
            'service_id'        => $request->service,
            'project_theme_id'  => $request->project_theme,
            'name'           => $request->name,
            'email'          => $request->email,
            'company_name'   => $request->company_name,
            'project_details'=> $request->project_details,
            'replied'        => false,
            'created_at'     => now(),
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $mail  
        ]);
    }
}
