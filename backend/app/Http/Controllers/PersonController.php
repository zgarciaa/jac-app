<?php

namespace App\Http\Controllers;

use App\Http\Requests\Person\StorePersonRequest;
use App\Modules\Person\Infrastructure\PersonRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PersonController extends Controller
{

    public function __construct(
      public PersonRepository $repository
    ) {}

    public function register(): View
    {
        return view('persons.register');
    }

    public function store(StorePersonRequest $request): RedirectResponse
    {
        $person = $this->repository->register($request);
        return redirect()->route('questionary')->with(compact('person'));
    }

}
