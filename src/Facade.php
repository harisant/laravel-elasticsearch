<?php 

namespace Harisant\LaravelElasticsearch;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * Class Facade
 *
 * @package Harisant\LaravelElasticsearch
 */
class Facade extends BaseFacade
{
    /**
     * @inheritdoc
     */
    protected static function getFacadeAccessor()
    {
        return 'elasticsearch';
    }
}
