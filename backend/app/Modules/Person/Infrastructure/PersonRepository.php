<?php

namespace App\Modules\Person\Infrastructure;

use App\Models\Person;
use App\Models\Question;
use App\Modules\Person\Domain\PersonRepositoryInterface;
use App\Modules\Question\Domain\QuestionRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PersonRepository implements PersonRepositoryInterface
{
    public function register(Request $request): Person
    {
        $data = [
            'document_number' => $request->document_number,
            'phone_number' => $request->phone_number,
            'first_name' => $request->first_name,
            'other_name' => $request->other_name ?? null,
            'first_surname' => $request->first_surname,
            'second_surname' => $request->second_surname ?? null,
        ];
        $person = new Person($data);
        $person->save();
        return $person;
    }
}
