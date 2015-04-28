<?php namespace Helpie;

use Illuminate\Database\Eloquent\SoftDeletes;
use Orchestra\Model\Eloquent;

class Category extends Eloquent
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The class name to be used in polymorphic relations.
     *
     * @var string
     */
    protected $morphClass = 'category';

    /**
     * Has many relationship with Issue.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function issues()
    {
        return $this->hasMany(Issue::class, 'category_id', 'id');
    }
}
