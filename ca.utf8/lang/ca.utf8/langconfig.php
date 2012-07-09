<?php

defined('INTERNAL') || die();

$string['locales'] = 'ca_utf8,en_US.utf8,en_GB.utf8,en,es_utf8';
$string['strfdateofbirth'] = '%%A/%%m/%%d';
$string['strfdaymonthyearshort'] = '%%d/%%m/%%Y';
$string['strftimedate'] = '%%d %%B %%Y';
$string['strftimedateshort'] = '%%d %%B';
$string['strftimedatetime'] = '%%d %%B %%Y, %%l:%%M %%p';
$string['strftimedatetimeshort'] = '%%d/%%m/%%Y %%H:%%M';
$string['strftimedaydate'] = '%%A, %%d %%B %%Y';
$string['strftimedaydatetime'] = '%%A, %%d %%B %%Y, %%l:%%M %%p';
$string['strftimedayshort'] = '%%A, %%d %%B';
$string['strftimedaytime'] = '%%a, %%k:%%M';
$string['strftimemonthyear'] = '%%B %%Y';
$string['strftimerecent'] = '%%d %%b, %%k:%%M';
$string['strftimerecentfull'] = '%%a, %%d %%b %%Y, %%l:%%M %%p';
$string['strftimerecentyear'] = '%%d %%b %%A, %%k:%%M';
$string['strftimetime'] = '%%l:%%M %%p';
$string['strftimew3cdate'] = '%%Y-%%m-%%d';
$string['strftimew3cdatetime'] = '%%Y-%%m-%%dT%%T%%z';
$string['thislanguage'] = 'Català';

// Plural forms, added by language pack generator
$string['pluralrule'] = 'n != 1';
$string['pluralfunction'] = 'plural_ca_utf8';
function plural_ca_utf8($n) {
    return $n != 1;
}
