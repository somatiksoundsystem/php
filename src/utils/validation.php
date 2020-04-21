<?php
use Illuminate\Support\Facades\Validator;

/**
 * Rules are:
 * [
 *  'id' => 'required|integer',
 *  'name' => 'required|string|max:255',
 *  'avatar_url' => 'required|string|url',
 * ];
 * @param array $data
 * @param array $validationRules
 * @throws Exception
 */
function validate(array $data, array $validationRules): void
{
    $validator = Validator::make($data, $validationRules);

    if ($validationRules && $validator->fails()) {
        throw new Exception($validator);
    }
}
