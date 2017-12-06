<?php
/**
 * 2015-2017 Urb-it
 *
 * NOTICE OF LICENSE
 *
 *
 *
 * Do not edit or add to this file if you wish to upgrade Urb-it to newer
 * versions in the future. If you wish to customize Urb-it for your
 * needs please refer to https://urb-it.com for more information.
 *
 * @author    Urb-it SA <parissupport@urb-it.com>
 * @copyright 2015-2017 Urb-it SA
 * @license  http://www.gnu.org/licenses/
 */

/**
 * Class UrbitProductfeedUrbitHelperForm
 */
class UrbitInventoryfeedUrbitHelperForm extends HelperFormCore
{
    /**
     * UrbitProductfeedUrbitHelperForm constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->base_folder = dirname(__FILE__).'/../views/templates/admin/';
        $this->base_tpl = 'urbit_form.tpl';
    }
}
