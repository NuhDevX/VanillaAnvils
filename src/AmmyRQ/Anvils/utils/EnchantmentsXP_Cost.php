<?php

declare(strict_types=1);

namespace AmmyRQ\Anvils\utils;

class EnchantmentsXP_Cost
{

    /**
     * @var list<string, int>
     */
    public static array $costPerLevel =
    [
        //Tools
        "curse of vanishing" => 8, "unbreaking" => 2, "mending" => 4, "sharpness" => 1,
        "smite" => 2, "efficiency" => 1, "fortune" => 4, "bane of arthropods" => 2,
        "knockback" => 2, "fire aspect" => 4, "looting" => 4, "sweeping edge" => 8,
        "silk touch" => 8,
        //Armor
        "protection" => 1, "fire protection" => 2, "projectile protection" => 2,
        "blast protection" => 4, "respiration" => 4, "aqua affinity" => 4, "thorns" => 8,
        "curse of binding" => 8, "feather falling" => 2, "frost walker" => 4, "depth strider" => 4,
        "soul speed" => 8,
        //Bow
        "power" => 1, "punch" => 4, "flame" => 1, "infinity" => 8,
        //Crossbow
        "percing" => 1, "multishot" => 4, "quick charge" => 2,
        //Trident
        "impaling" => 2, "loyalty" => 1, "riptide" => 4, "channeling" => 8,
        //Fishing rod
        "lure" => 4, "luck of the sea" => 4
    ];
}
