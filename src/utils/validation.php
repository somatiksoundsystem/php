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
 * @return array|null - errors or null
 */
function validate(array $data, array $validationRules)
{
    $validator = Validator::make($data, $validationRules);

    if ($validator->fails()) {
        return $validator->failed();
    }

    return null;
}
