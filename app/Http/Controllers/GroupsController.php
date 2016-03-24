<?php
/*
 * This code was generated automatically by Nebo15/REST
 */

namespace App\Http\Controllers;

use Nebo15\REST\AbstractController;

class GroupsController extends AbstractController
{
    protected $repositoryClassName = 'App\Repositories\GroupsRepository';

    protected $validationRules = [
        'create' => [
            'probability' => 'required|in:random',
            'tables' => 'required|array',
            'tables.*' => 'sometimes|required|array',
            'tables.*._id' => 'required|string|groupTablesFields',
            'tables.*.percent' => 'required_if:probability,percent|numeric',
        ],
        'update' => [
            'probability' => 'sometimes|required|in:random,percent',
            'tables' => 'sometimes|required|array',
            'tables.*' => 'sometimes|required|array',
            'tables.*._id' => 'sometimes|required|string|groupTablesExists',
            'tables.*.percent' => 'sometimes|required_if:probability,percent|numeric',
        ],
    ];
}