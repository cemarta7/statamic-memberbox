<?php

namespace JackSleight\StatamicMemberbox\Http\Resources\CP\Members;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Statamic\Http\Resources\CP\Users\ListedUser;

class Members extends ResourceCollection
{
    public $collects = ListedUser::class;
    protected $blueprint;
    protected $columns;

    public function blueprint($blueprint)
    {
        $this->blueprint = $blueprint;

        return $this;
    }

    public function columns($columns)
    {
        $this->columns = collect($columns);

        return $this;
    }

    public function toArray($request)
    {
        return [
            'data' => $this->collection->each(function ($user) {
                $user
                    ->blueprint($this->blueprint)
                    ->columns($this->columns);
            }),

            'meta' => [
                'columns' => $this->columns,
            ],
        ];
    }
}
