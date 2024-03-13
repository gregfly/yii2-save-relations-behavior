<?php

namespace lhs\Yii2SaveRelationsBehavior;

trait SaveRelationsTrait
{

    public function load($data, $formName = null)
    {
        $loaded = parent::load($data, $formName);
        if ($loaded && $this->hasMethod('loadRelations2')) {
            $this->loadRelations2($data);
        }
        return $loaded;
    }
}