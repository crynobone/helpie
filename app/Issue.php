<?php namespace Helpie;

use Illuminate\Database\Eloquent\SoftDeletes;
use Orchestra\Model\Eloquent;

class Issue extends Eloquent
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'issues';

    /**
     * The class name to be used in polymorphic relations.
     *
     * @var string
     */
    protected $morphClass = 'issue';

    const IS_OPEN   = 'open';
    const IS_CLOSED = 'closed';

    /**
     * Belongs to relationship with Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
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

    /**
     * Belongs to relationship with User (assignee).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assignee()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
