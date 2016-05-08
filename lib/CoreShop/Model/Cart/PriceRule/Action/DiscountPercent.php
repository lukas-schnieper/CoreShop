<?php
/**
 * CoreShop
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015 Dominik Pfaffenbauer (http://dominik.pfaffenbauer.at)
 * @license    http://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Model\Cart\PriceRule\Action;

use CoreShop\Model\Cart;
use CoreShop\Model\Cart\PriceRule\Action\AbstractAction;
use Pimcore\Model;

class DiscountPercent extends AbstractAction
{

    /**
     * @var int
     */
    public $currency_id;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $type = "discountPercent";

    /**
     * @return mixed
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * @param mixed $currency_id
     */
    public function setCurrencyId($currency_id)
    {
        $this->currency_id = $currency_id;
    }

    /**
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param int $percent
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    }

    /**
     * Calculate discount
     *
     * @param Cart $cart
     * @return int
     */
    public function getDiscount(Cart $cart)
    {
        return $cart->getSubtotal() * ($this->getPercent() / 100);
    }

    /**
     * Apply Rule to Cart
     *
     * @param Cart $cart
     * @return bool
     */
    public function applyRule(Cart $cart)
    {
        return true;
    }

    /**
     * Remove Rule from Cart
     *
     * @param Cart $cart
     * @return bool
     */
    public function unApplyRule(Cart $cart)
    {
        return true;
    }
}