<?php

declare(strict_types=1);

namespace Nucleus\Loaders;

use Illuminate\Database\Eloquent\Relations\Relation;

trait ModelMapLoader
{
    use Getters;

    /**
     * @return void
     */
    protected function loadMaps(): void
    {
        $result = [];

        foreach ($this->getModels() as $model) {
            if (true === method_exists($model, 'getMap')) {
                /** @var BaseModel $model_object */
                $model_object = (new $model());
                if ($model_object->getMap()) {
                    $result[$model_object->getMap()] = $model;
                }
            }
        }

        Relation::morphMap($result);
    }
}
