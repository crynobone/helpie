<?php namespace Helpie;

use Orchestra\Model\Eloquent;

class Action extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actions';

    /**
     * Belongs to relationship with Issue.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issue()
    {
        return $this->belongsTo(Issue::class, 'issue_id');
    }

    /**
     * Get the stream target.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function stream()
    {
        return $this->morphTo();
    }
}
