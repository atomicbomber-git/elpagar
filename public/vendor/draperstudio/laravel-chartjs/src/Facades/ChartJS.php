<?php

/*
 * This file is part of Laravel ChartJS.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\ChartJS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ChartJS.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ChartJS extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'chartjs';
    }
}
