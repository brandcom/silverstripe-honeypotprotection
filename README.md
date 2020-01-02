# silverstripe-honeypotprotection

## Requirements

* SilverStripe 3.x
* [SpamProtection Module](https://github.com/silverstripe/silverstripe-spamprotection)

## Install

Install via composer.

`composer require jbennecker/silverstripe-honeypotprotection`

Set the default spam protector in mysite/_config/spamprotection.yml

```yaml
---
name: spamprotection
---
FormSpamProtectionExtension:
  default_spam_protector: HoneypotProtector
```
