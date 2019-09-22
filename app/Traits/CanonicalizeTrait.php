<?php namespace App\Traits;

trait CanonicalizeTrait
{
    /**
     * Canonicalize rows while saving (create/update)
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            foreach (self::$canonicalRows as $row) {

                if (!empty(self::$canonicalRowsNames[$row])) {
                    $model->{self::$canonicalRowsNames[$row]} = strtolower($model->{$row});
                } else {
                    $model->{$row . '_canonical'} = strtolower($model->{$row});
                }

            }
        });
    }
}
