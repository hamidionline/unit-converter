<?php declare(strict_types = 1);

/**
 * This file is part of the jordanbrauer/unit-converter PHP package.
 *
 * @copyright 2018 Jordan Brauer <jbrauer.inc@gmail.com>
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UnitConverter\Unit\Volume;

/**
 * Pint (U.S. liquid) unit data class.
 *
 * @version 1.0.0
 * @since 0.0.1
 * @author Jordan Brauer <jbrauer.inc@gmail.com>
 */
class Pint extends VolumeUnit
{
    protected function configure (): void
    {
        $this
            ->setName("pint")

            ->setSymbol("pt")

            ->setUnits(0.473176)
            ;
    }
}
