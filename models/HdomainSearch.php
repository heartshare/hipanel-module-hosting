<?php
/**
 * @link    http://hiqdev.com/hipanel-module-hosting
 * @license http://hiqdev.com/hipanel-module-hosting/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hipanel\modules\hosting\models;

use hipanel\base\SearchModelTrait;
use yii\helpers\ArrayHelper;

class HdomainSearch extends Hdomain{
    use SearchModelTrait {
        searchAttributes as defaultSearchAttributes;
    }

    /**
     * @inheritdoc
     */
    public function searchAttributes()
    {
        return ArrayHelper::merge($this->defaultSearchAttributes(), [
            'with_aliases',
            'with_request',
            'with_vhosts',
            'with_dns'
        ]);
    }
}
