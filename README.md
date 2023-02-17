# silverstripe-honeypotprotection

This module works by adding a normal text field which is visually hidden. The field is invalid when it's not empty. Bot will likely fill out the field, because they don't process css.

## Requirements

* SilverStripe 4.x (for SilverStripe 3.x use 3.x Branch)
* [SpamProtection Module](https://github.com/silverstripe/silverstripe-spamprotection)

## Install

Install via composer.

`composer require jbennecker/silverstripe-honeypotprotection`

Set the default spam protector in a .yml config file of your choice.

```yaml
SilverStripe\SpamProtection\Extension\FormSpamProtectionExtension:
  default_spam_protector: jbennecker\HoneypotProtection\HoneypotProtector
```

## Usage

In custom forms add the field like this

    use jbennecker\HoneypotProtection\HoneypotProtectorField;

    ....

    $fields = new FieldList(
        ....
        HoneypotProtectorField::create('Phone') // Change title accordingly
    )

For userforms simply add a spamprotector-field.
