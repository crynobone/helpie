<?php namespace Helpie;

use Orchestra\Model\User as Eloquent;

class User extends Eloquent
{
    /**
     * The class name to be used in polymorphic relations.
     *
     * @var string
     */
    protected $morphClass = 'user';

    /**
     * Polymorphic relationship with Action.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function stream()
    {
        return $this->morphMany(Action::class, 'stream');
    }
}
