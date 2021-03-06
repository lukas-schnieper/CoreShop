<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2017 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Component\Order\Calculator;

use CoreShop\Component\Order\Model\PriceAwarePurchasableInterface;
use CoreShop\Component\Order\Model\PurchasableInterface;

/**
 * @deprecated Class CoreShop\Component\Order\Calculator\PriceAwarePurchasableCalculator is deprecated since version 2.0.0-beta.4 and will be removed in 2.0.
 */
final class PriceAwarePurchasableCalculator implements PurchasableRetailPriceCalculatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getRetailPrice(PurchasableInterface $purchasable)
    {
        if ($purchasable instanceof PriceAwarePurchasableInterface) {
            @trigger_error('Class CoreShop\Component\Order\Calculator\PriceAwarePurchasableCalculator is deprecated since version 2.0.0-beta.4 and will be removed in 2.0.', E_USER_DEPRECATED);

            return $purchasable->getPrice();
        }

        return null;
    }
}