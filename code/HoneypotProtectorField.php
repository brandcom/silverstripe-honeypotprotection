<?php

class HoneypotProtectorField extends TextField
{

    public function Field($properties = [])
    {
        Requirements::css('silverstripe-honeypotprotection/css/style.css');
        return parent::Field($properties);
    }

    public function validate($validator): bool
    {
        if (!empty($this->Value())) {
            $validator->validationError($this->name, _t('HoneypotProtectorField.INCORRECTSOLUTION', ""), "error");

            return false;
        }

        return true;
    }

    public function Title(): string
    {
        return 'Phone';
    }
}
