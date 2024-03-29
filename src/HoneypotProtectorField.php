<?php
namespace jbennecker\HoneypotProtection;

use SilverStripe\Forms\TextField;
use SilverStripe\View\Requirements;

class HoneypotProtectorField extends TextField
{

    public function Field($properties = [])
    {
        Requirements::css('jbennecker/silverstripe-honeypotprotection:css/style.css');
        $this->setAttribute('autocomplete', 'off');
        $this->setAttribute('tabindex', '-1');

        return parent::Field($properties);
    }

    public function validate($validator): bool
    {
        if (!empty($this->Value())) {
            $validator->validationError($this->name, _t('HoneypotProtectorField.INCORRECTSOLUTION', "Spamprotection: Please leave this field empty."), "error");

            return false;
        }

        return true;
    }
}
