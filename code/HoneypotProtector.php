<?php

class HoneypotProtector implements SpamProtector
{

    public function getFormField($name = null, $title = null, $value = null): HoneypotProtectorField
    {
        return new HoneypotProtectorField($name, $title, $value);
    }

    /**
     * Not used by HoneypotProtector
     */
    public function setFieldMapping($fieldMapping)
    {
    }
}
