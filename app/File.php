<?php namespace Helpie;

use Illuminate\Database\Eloquent\SoftDeletes;
use Orchestra\Model\Eloquent;

class File extends Eloquent
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'files';

    /**
     * The class name to be used in polymorphic relations.
     *
     * @var string
     */
    protected $morphClass = 'file';

    /**
     * Polymorphic relationship with Action.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function stream()
    {
        return $this->morphMany(Action::class, 'stream');
    }

    /**
     * Belongs to relationship with User (author).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
