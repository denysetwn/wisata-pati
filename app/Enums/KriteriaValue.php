<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class KriteriaValue extends Enum
{
    const Kurang = 0;
    const Cukup = 0.5;
    const Baik = 1;
}
