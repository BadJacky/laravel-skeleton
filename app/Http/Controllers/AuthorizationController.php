<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AuthorizationRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Jiannei\Enum\Laravel\Support\Enums\HttpStatusCode;
use Jiannei\Response\Laravel\Support\Facades\Response;
use Laravel\Sanctum\PersonalAccessToken;

class AuthorizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorizationRequest $request): JsonResponse
    {
        $user = User::where('email', $request->input('username'))->first();
        if (! $user || ! Hash::check($request->input('password'), $user->password)) {
            return Response::fail(trans('auth.failed'), HttpStatusCode::HTTP_UNPROCESSABLE_ENTITY);
        }

        return Response::success([
            'user'         => $user,
            'token_type'   => 'Bearer',
            'expires_in'   => config('sanctum.expiration') * 60,
            'access_token' => $user->createToken('web')->plainTextToken,
        ], trans('messages.success.auth'), HttpStatusCode::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorizationRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): JsonResponse
    {
        /** @var PersonalAccessToken $access_token */
        $access_token = $request->user()->currentAccessToken();
        $access_token->delete();

        return Response::noContent();
    }
}
