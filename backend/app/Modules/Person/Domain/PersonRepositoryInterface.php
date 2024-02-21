<?php

namespace App\Modules\Person\Domain;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

interface PersonRepositoryInterface
{
    public function register(Request $request);
}
