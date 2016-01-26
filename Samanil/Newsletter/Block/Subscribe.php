<?php
/**
 * Copyright © 2015 Samanil. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Newsletter subscribe block
 *
 * @author    Samanil <samumaretiya@gmail.com>
 */
namespace Samanil\Newsletter\Block;

class Subscribe extends \Magento\Framework\View\Element\Template
{
    /**
     * Retrieve form action url and set "secure" param to avoid confirm
     * message when we submit form from secure page to unsecure
     *
     * @return string
     */
    public function getFormActionUrl()
    {
        return $this->getUrl('newsletter/subscriber/new', ['_secure' => true]);
    }
}
