<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace XuTL\Acme;

use Illuminate\Support\Facades\Facade;

/**
 * Class Acme
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Acme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'acme';
    }
}