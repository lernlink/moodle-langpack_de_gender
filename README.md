moodle-langpack_de_gender
=========================

Moodle language pack with asterisk gendering


Motivation for this language pack
---------------------------------

This Moodle language pack is a sub-language pack of the official `de` language pack.
While the `de` language pack does gendering with the '/innen' syntax, this language pack does gendering with the asterisk syntax.


Coverage
--------

Currently, this language pack covers all Moodle Core strings as well as several selected Moodle third party plugins.
Strings which are not contained in this language pack do not need gendering and are taken from the parent `de` language pack.


Escaping Markdown support
-------------------------

By design, Moodle supports Markdown within admin setting descriptions and help icon texts. There is a convention that strings which are used at these positions have an identifier suffix `_desc` or `_help` (See https://docs.moodle.org/dev/String_API#Help_strings).

Unfortunately, an asterisk in Markdown initiates a section which is displayed in italic. Thus, in this language pack all gender asterisks within `_desc` and `_help` strings have to be escaped with two backslashes.

This escaping was done before the language pack is shipped. However, for future language pack strings updates, these commands will be helpful:

1. Find strings which do not end on `_desc` or `_help` and which have a double-backslash in front of an asterisk:

```
grep -F '\\*' * | grep -v "string\[[\'\"][a-zA-Z0-9:_-]*\(_desc\|_help\)[\'\"]\]"
```

At the time of writing, this command finds these string identifiers which are escaped by purpose but are not `_desc` or `_help` strings:

* admin.php:configautolang
* admin.php:configdefaultuserroleid
* admin.php:confighiddenuserfields

2. Find strings which do end on `_desc` or `_help` and which do not have a double-backslash in front of an asterisk:

```
grep -F '*' * | grep -Fv '\\*' | grep "string\[[\'\"][a-zA-Z0-9:_-]*\(_desc\|_help\)[\'\"]\]"
```

At the time of writing, this comment does not find any result. If is does, all results have to be checked thoroughly and most probably have to be escaped.


Installation
------------

Download the language pack folder and place it into
/MOODLEDATA/lang/de_gender

Afterwards, purge caches. Then, the language pack is available within Moodle and can be selected in the language picker.

See https://docs.moodle.org/en/Language_packs#Manual_language_pack_installation for details.


Moodle release and update support
---------------------------------

Currently, this language pack is built for Moodle 3.9.
It is not yet available from within AMOS (https://lang.moodle.org) and thus is maintained manually from time to time.


Maintainers
-----------

lern.link GmbH\
Alexander Bias


Copyright
---------

lern.link GmbH\
Alexander Bias
