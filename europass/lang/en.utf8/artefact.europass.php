<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2012 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2012 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 * @translator Gregor Anzelj
 *
 * @package    Europass Online Tools Labels and Help texts
 * @purpose    Provides the labels and help texts used in the Europass Online Tools.
 * @author(s)  Europass team
 * @copyright  (C) European Communities, 2002-2011 http://europass.cedefop.europa.eu
 * @license    http://europass.cedefop.europa.eu/europass/home/botnav/LegalNotice.csp
 * @version    20110907
 * @URL        http://europass.cedefop.europa.eu/TechnicalResources/EuropassLabels/xforms/europass-labels-xforms-20110907/cv_en_GB.xhtml
 * @URL        http://europass.cedefop.europa.eu/TechnicalResources/EuropassLabels/xforms/europass-labels-xforms-20110907/lp_en_GB.xhtml
 *
 * ISO 639-1   http://europass.cedefop.europa.eu/xml/EUROPASS_ISOLanguages_V1.1.xsd
 * ISO 3166-1  http://europass.cedefop.europa.eu/xml/EUROPASS_ISOCountries_V1.1.xsd
 * List of nationalities  http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd
 *(based on ISO 3166-1)
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Europass curriculum vitae saved sucessfully';
$string['europassexportgenerated'] = 'Please wait while your export is being generated...';
$string['europassexportnoconncetion'] = 'There was an error with connection to WSDL server. Please try again later.';
$string['europassexportservererror'] = 'There was an error on WSDL server. Please try again later.';
$string['europassextensionmissing'] = 'Sorry, you cannot use Europass plugin because your PHP installation is missing required extension:';
$string['newerversionforcompatibility'] = 'For better performance and compatibility you should upgrade to Mahara version 1.3.0 or newer.';

$string['languagesaved'] = 'Language saved sucessfully';
$string['languagesavefailed'] = 'Failed to save language';
$string['languagedeleteconfirm'] = 'Are you sure you want to delete this language?';
$string['languagedeleted'] = 'Language deleted sucessfully';

$string['moveup'] = 'Move up';
$string['movedown'] = 'Move down';

$string['languagediploma'] = 'Language diploma';
$string['languageexperience'] = 'Linguistic experience';
$string['languagediplomadeleteconfirm'] = 'Are you sure you want to delete this language diploma?';
$string['languageexperiencedeleteconfirm'] = 'Are you sure you want to delete this linguistic experience?';
$string['languagediplomadeleted'] = 'Language diploma deleted sucessfully';
$string['languageexperiencedeleted'] = 'Linguistic experience deleted sucessfully';
$string['languagediplomasaved'] = 'Language diploma saved sucessfully';
$string['languagediplomasavefailed'] = 'Failed to save language diploma';
$string['languageexperiencesaved'] = 'Linguistic experience saved sucessfully';
$string['languageexperiencesavefailed'] = 'Failed to save linguistic experience';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Export Europass';
$string['exportstep1'] = '1 - Document language and type';
$string['selectlocale&type'] = 'Select document language and type';
$string['selectlocale'] = 'Language';
$string['selectlocaledesc'] = 'Europass document language';
$string['selectdocumenttype'] = 'Document';
$string['europassCV'] = 'Europass curriculum vitae';
$string['europassLP'] = 'Europass language portfolio';
$string['photograph'] = 'Photograph';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'dd/mm/yyyy';
$string['internaldate-dmy12'] = 'dd.mm.yyyy';
$string['internaldate-dmy13'] = 'dd-mm-yyyy';
$string['internaldate-dmy21'] = 'dd/mm/yy';
$string['internaldate-dmy22'] = 'dd.mm.yy';
$string['internaldate-dmy23'] = 'dd-mm-yy';
$string['internaldate-mdy11'] = 'mm/dd/yyyy';
$string['internaldate-mdy12'] = 'mm.dd.yyyy';
$string['internaldate-mdy13'] = 'mm-dd-yyyy';
$string['internaldate-mdy21'] = 'mm/dd/yy';
$string['internaldate-mdy22'] = 'mm.dd.yy';
$string['internaldate-mdy23'] = 'mm-dd-yy';
$string['internaldate-ymd11'] = 'yyyy/mm/dd';
$string['internaldate-ymd12'] = 'yyyy.mm.dd';
$string['internaldate-ymd13'] = 'yyyy-mm-dd';
$string['internaldate-ymd21'] = 'yy/mm/dd';
$string['internaldate-ymd22'] = 'yy.mm.dd';
$string['internaldate-ymd23'] = 'yy-mm-dd';
$string['internaldate-yonly'] = 'yyyy';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'dd/mm/yyyy';
$string['externaldate-text-long'] = 'dd. month yyyy';
$string['exportfile'] = 'File';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Export';
$string['generate'] = 'Generate export';
$string['generateexport'] = 'Export';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Import Europass';
$string['importstep1'] = '1 - Import file and options';
$string['selectfile&options'] = 'Upload Europass XML file and select import options';
$string['importstep2'] = '2 - Import';
$string['execute'] = 'Execute import';
$string['executeimport'] = 'Import';
$string['importfile'] = 'Europass XML file';
$string['importfiledesc'] = 'Select valid Europass XML file to import to Mahara';
$string['notvalidxmlfile'] = 'The uploaded file is not a valid XML file.';
$string['importoptions'] = 'What to import?';
$string['importoptionsdesc'] = 'Locked profile fields will not be changed/updated';
$string['nocheckedoptions'] = 'You have to check at least one option to import.';
$string['fieldnotimported'] = 'Field "%s" not imported.';
$string['lockedfieldnotimported'] = 'Locked field "%s" not imported.';
$string['languagecodemissing'] = 'Field "%s" not imported. Language code is missing.';
$string['importdate'] = 'Import dates as';
$string['europassimportexecuted'] = 'The data from Europass XML successfully imported into Mahara.';

// Europass GUI form tabs
$string['application-tab'] = 'Application';
$string['workexperience-tab'] = 'Employment';
$string['education-tab'] = 'Education';
$string['languages-tab'] = 'Languages';
$string['skills-tab'] = 'Skills';

// Europass CV - STEP 1
$string['identification'] = 'Personal information';
$string['identification-birthdate'] = 'Date of birth';
$string['identification-birthplace'] = 'Place of birth';
$string['identification-lastname'] = 'Surname(s)';
$string['identification-firstname'] = 'First name(s)';
$string['identification-addressLine'] = 'Street number / Street';
$string['identification-municipality'] = 'City';
$string['identification-postalCode'] = 'Postal code';
$string['identification-country'] = 'Country';
$string['identification-contactinfo-telephone'] = 'Telephone(s)';
$string['identification-contactinfo-mobile'] = 'Mobile';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-mail(s)';
$string['identification-nationality'] = 'Nationality';
$string['identification-gender'] = 'Gender';

// Europass CV - STEP 2
$string['application'] = 'Desired employment / Occupational field';

// Europass CV - STEP 3
$string['workexperience'] = 'Work experience';

// Europass CV - STEP 4
$string['education'] = 'Education and training';

// Europass CV - STEP 5
$string['mothertongue'] = 'Mother tongue(s)';
$string['otherlanguage'] = 'Other language(s)';

$string['language-foreign-listening'] = 'Listening';
$string['language-foreign-listening-th'] = 'Listening';
$string['language-foreign-reading'] = 'Reading';
$string['language-foreign-reading-th'] = 'Reading';
$string['language-foreign-spokeninteraction'] = 'Spoken interaction';
$string['language-foreign-spokeninteraction-th'] = 'Spoken<br>interaction';
$string['language-foreign-spokenproduction'] = 'Spoken production';
$string['language-foreign-spokenproduction-th'] = 'Spoken<br>production';
$string['language-foreign-writing'] = 'Writing';
$string['language-foreign-writing-th'] = 'Writing';
$string['language-foreign-CEF-level'] = 'Common European Framework of Reference (CEF) level';

$string['language-foreign-level.A1'] = 'Basic user (A1)';
$string['language-foreign-level.A2'] = 'Basic user (A2)';
$string['language-foreign-level.B1'] = 'Independent user (B1)';
$string['language-foreign-level.B2'] = 'Independent user (B2)';
$string['language-foreign-level.C1'] = 'Proficient user (C1)';
$string['language-foreign-level.C2'] = 'Proficient user (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Driving licence(s)';
$string['skills-and-competences'] = 'Personal skills and competences';
$string['socialskill'] = 'Social skills and competences';
$string['organisationalskill'] = 'Organisational skills and competences';
$string['technicalskill'] = 'Technical skills and competences';
$string['computerskill'] = 'Computer skills and competences';
$string['artisticskill'] = 'Artistic skills and competences';
$string['otherskill'] = 'Other skills and competences';
$string['additionalinfo'] = 'Additional information';
$string['annexes'] = 'Annexes';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diploma(s) or certificate(s)';
$string['diploma-title'] = 'Title';
$string['diploma-awardingBody'] = 'Awarding body';
$string['diploma-date'] = 'Date';
$string['diploma-level'] = 'European level';
$string['language-experiences'] = 'Linguistic experience(s)';
$string['experiences-period-from'] = 'From';
$string['experiences-period-to'] = 'To';

// List of supported locales in which Europass can be exported...
// The names of languages are localized - there's no need for translation!
$string['locale.bg_BG'] = 'Български – (bg)';
$string['locale.cs_CZ'] = 'čeština – (cs)';
$string['locale.da_DK'] = 'Dansk – (da)';
$string['locale.de_DE'] = 'Deutsch – (de)';
$string['locale.et_EE'] = 'eesti keel – (et)';
$string['locale.el_GR'] = 'Ελληνικά – (el)';
$string['locale.en_GB'] = 'English – (en)';
$string['locale.es_ES'] = 'Español – (es)';
$string['locale.fi_FI'] = 'suomi – (fi)';
$string['locale.fr_FR'] = 'Français – (fr)';
$string['locale.hr_HR'] = 'Hrvatski – (hr)';
$string['locale.hu_HU'] = 'magyar – (hu)';
$string['locale.is_IS'] = 'Íslenska – (is)';
$string['locale.it_IT'] = 'Italiano – (it)';
$string['locale.lt_LT'] = 'Lietuvių – (lt)';
$string['locale.lv_LV'] = 'Latviešu – (lv)';
$string['locale.mt_MT'] = 'Malti – (mt)';
$string['locale.nl_NL'] = 'Nederlands – (nl)';
$string['locale.no_NO'] = 'Norsk – (no)';
$string['locale.pl_PL'] = 'polski – (pl)';
$string['locale.pt_PT'] = 'Português – (pt)';
$string['locale.ro_RO'] = 'Română – (ro)';
$string['locale.sk_SK'] = 'slovenčina – (sk)';
$string['locale.sl_SI'] = 'slovenščina – (sl)';
$string['locale.sv_SE'] = 'Svenska – (sv)';
$string['locale.tr_TR'] = 'Türkçe – (tr)';

// ISO 639-1:2002 filtered by Europass, including the languages considered as "dead"
// (http://www.iso.org/iso/catalogue_detail?csnumber=22109)
$string['language.ab'] = 'Abkhazian';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragonese';
$string['language.ar'] = 'Arabic';
$string['language.as'] = 'Assamese';
$string['language.az'] = 'Azerbaijani';
$string['language.be'] = 'Belarusian';
$string['language.bg'] = 'Bulgarian';
$string['language.bn'] = 'Bengali';
$string['language.bo'] = 'Tibetan';
$string['language.br'] = 'Breton';
$string['language.bs'] = 'Bosnian';
$string['language.ca'] = 'Catalan / Valencian';
$string['language.ce'] = 'Chechen';
$string['language.co'] = 'Corsican';
$string['language.cs'] = 'Czech';
$string['language.cy'] = 'Welsh';
$string['language.da'] = 'Danish';
$string['language.de'] = 'German';
$string['language.el'] = 'Greek';
$string['language.en'] = 'English';
$string['language.es'] = 'Spanish / Castilian';
$string['language.et'] = 'Estonian';
$string['language.eu'] = 'Basque';
$string['language.fa'] = 'Persian';
$string['language.fi'] = 'Finnish';
$string['language.fj'] = 'Fijian';
$string['language.fo'] = 'Faroese';
$string['language.fr'] = 'French';
$string['language.fy'] = 'Western Frisian';
$string['language.ga'] = 'Irish';
$string['language.gd'] = 'Gaelic / Scottish Gaelic';
$string['language.gl'] = 'Galician';
$string['language.gv'] = 'Manx';
$string['language.he'] = 'Hebrew';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Croatian';
$string['language.ht'] = 'Haitian; Haitian Creole';
$string['language.hu'] = 'Hungarian';
$string['language.hy'] = 'Armenian';
$string['language.id'] = 'Indonesian';
$string['language.is'] = 'Icelandic';
$string['language.it'] = 'Italian';
$string['language.ja'] = 'Japanese';
$string['language.jv'] = 'Javanese';
$string['language.ka'] = 'Georgian';
$string['language.kg'] = 'Kongo';
$string['language.ko'] = 'Korean';
$string['language.ku'] = 'Kurdish';
$string['language.kw'] = 'Cornish';
$string['language.ky'] = 'Kirghiz';
$string['language.lb'] = 'Luxembourgish; Letzeburgesch';
$string['language.li'] = 'Limburgan; Limburger; Limburgish';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Lithuanian';
$string['language.lv'] = 'Latvian';
$string['language.mg'] = 'Malagasy';
$string['language.mk'] = 'Macedonian';
$string['language.mn'] = 'Mongolian';
$string['language.mo'] = 'Moldavian';
$string['language.ms'] = 'Malay';
$string['language.mt'] = 'Maltese';
$string['language.my'] = 'Burmese';
$string['language.nb'] = 'Norwegian (Bokmål)';
$string['language.ne'] = 'Nepali';
$string['language.nl'] = 'Dutch';
$string['language.nn'] = 'Norwegian (Nynorsk)';
$string['language.no'] = 'Norwegian';
$string['language.pl'] = 'Polish';
$string['language.pt'] = 'Portuguese';
$string['language.rm'] = 'Raeto-Romance';
$string['language.ro'] = 'Romanian';
$string['language.ru'] = 'Russian';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardinian';
$string['language.se'] = 'Northern Sami';
$string['language.sk'] = 'Slovak';
$string['language.sl'] = 'Slovenian';
$string['language.so'] = 'Somali';
$string['language.sq'] = 'Albanian';
$string['language.sr'] = 'Serbian';
$string['language.sv'] = 'Swedish';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Turkmen';
$string['language.tr'] = 'Turkish';
$string['language.ty'] = 'Tahitian';
$string['language.uk'] = 'Ukrainian';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Uzbek';
$string['language.vi'] = 'Vietnamese';
$string['language.yi'] = 'Yiddish';
$string['language.zh'] = 'Chinese';
$string['language.cu'] = 'Church Slavic';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latin';
$string['language.oc'] = 'Occitan (post 1500); Provençal';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestan';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amharic';
$string['language.av'] = 'Avaric';
$string['language.ay'] = 'Aymara';
$string['language.ba'] = 'Bashkir';
$string['language.bh'] = 'Bihari languages';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Chuvash';
$string['language.dv'] = 'Divehi; Dhivehi; Maldivian';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Ewe';
$string['language.ff'] = 'Fulah';
$string['language.gn'] = 'Guarani';
$string['language.gu'] = 'Gujarati';
$string['language.ha'] = 'Hausa';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'Interlingua (International Auxiliary Language Association)';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Sichuan Yi; Nuosu';
$string['language.ik'] = 'Inupiaq';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Kikuyu; Gikuyu';
$string['language.kj'] = 'Kuanyama; Kwanyama';
$string['language.kk'] = 'Kazakh';
$string['language.kl'] = 'Kalaallisut; Greenlandic';
$string['language.km'] = 'Khmer';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'Kashmiri';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Ganda';
$string['language.lo'] = 'Lao';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshallese';
$string['language.mi'] = 'Maori';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Nauru';
$string['language.nd'] = 'Ndebele, North';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndebele, South';
$string['language.nv'] = 'Navajo; Navaho';
$string['language.ny'] = 'Chichewa; Chewa; Nyanja';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossetian; Ossetic';
$string['language.pa'] = 'Panjabi; Punjabi';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pushto; Pashto';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Rundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Sanskrit';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Sinhala; Sinhalese';
$string['language.sm'] = 'Samoan';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Swati';
$string['language.st'] = 'Sotho, Southern';
$string['language.su'] = 'Sundanese';
$string['language.ta'] = 'Tamil';
$string['language.te'] = 'Telugu';
$string['language.tg'] = 'Tajik';
$string['language.th'] = 'Thai';
$string['language.ti'] = 'Tigrinya';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tonga (Tonga Islands)';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tatar';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Uighur; Uyghur';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Walloon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang; Chuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'United Arab Emirates';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua and Barbuda';
$string['country.al'] = 'Albania';
$string['country.am'] = 'Armenia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Austria';
$string['country.au'] = 'Australia';
$string['country.az'] = 'Azerbaijan';
$string['country.ba'] = 'Bosnia and Herzegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgium';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaria';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brazil';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Belarus';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Canada';
$string['country.cd'] = 'Democratic Republic of the Congo';
$string['country.cf'] = 'Central African Republic';
$string['country.cg'] = 'Republic of the Congo';
$string['country.ch'] = 'Switzerland';
$string['country.ci'] = 'Côte d\'Ivoire';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Cameroon';
$string['country.cn'] = 'China';
$string['country.co'] = 'Colombia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Cape Verde';
$string['country.cy'] = 'Cyprus';
$string['country.cz'] = 'Czech Republic';
$string['country.de'] = 'Germany';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Denmark';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Dominican Republic';
$string['country.dz'] = 'Algeria';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estonia';
$string['country.eg'] = 'Egypt';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Spain';
$string['country.et'] = 'Ethiopia';
$string['country.fi'] = 'Finland';
$string['country.fj'] = 'Fiji';
$string['country.fm'] = 'Micronesia, Federated States of';
$string['country.fr'] = 'France';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'United Kingdom';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgia';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Greenland';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Equatorial Guinea';
$string['country.gr'] = 'Greece';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Croatia';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Hungary';
$string['country.id'] = 'Indonesia';
$string['country.ie'] = 'Ireland';
$string['country.il'] = 'Israel';
$string['country.in'] = 'India';
$string['country.iq'] = 'Iraq';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Iceland';
$string['country.it'] = 'Italy';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordan';
$string['country.jp'] = 'Japan';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kyrgyzstan';
$string['country.kh'] = 'Cambodia';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Comoros';
$string['country.kn'] = 'Saint Kitts and Nevis';
$string['country.kp'] = 'North Korea';
$string['country.kr'] = 'South Korea';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kazakstan';
$string['country.la'] = 'Lao People´s Democratic Republic';
$string['country.lb'] = 'Lebanon';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Lithuania';
$string['country.lu'] = 'Luxembourg';
$string['country.lv'] = 'Latvia';
$string['country.ly'] = 'Libyan Arab Jamahiriya';
$string['country.ma'] = 'Morocco';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldova, Republic of';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagascar';
$string['country.mh'] = 'Marshall Islands';
$string['country.mk'] = 'Macedonia, the former Yugoslav Republic of';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolia';
$string['country.mr'] = 'Mauritania';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Maldives';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexico';
$string['country.my'] = 'Malaysia';
$string['country.mz'] = 'Mozambique';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Netherlands';
$string['country.no'] = 'Norway';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'New Zealand';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua New Guinea';
$string['country.ph'] = 'Philippines';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Poland';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'Autonomous Palestinian Territories';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Romania';
$string['country.rs'] = 'Serbia';
$string['country.ru'] = 'Russian Federation';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Saudi Arabia';
$string['country.sb'] = 'Solomon Islands';
$string['country.sc'] = 'Seychelles';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Sweden';
$string['country.sg'] = 'Singapore';
$string['country.si'] = 'Slovenia';
$string['country.sk'] = 'Slovakia';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Suriname';
$string['country.st'] = 'Sao Tome and Principe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Syrian Arab Republic';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Chad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thailand';
$string['country.tj'] = 'Tajikistan';
$string['country.tl'] = 'Timor-Leste';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunisia';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turkey';
$string['country.tt'] = 'Trindidad and Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania, United republic of';
$string['country.ua'] = 'Ukraina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'United States';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Holy See (Vatican City State)';
$string['country.vc'] = 'Saint Vincent and the Grenadines';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Viet Nam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Yemen';
$string['country.za'] = 'South Africa';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorran';
$string['nationality.ae'] = 'Emirian (United Arab Emirates)';
$string['nationality.af'] = 'Afghan';
$string['nationality.ag'] = 'of Antigua and Barbuda';
$string['nationality.al'] = 'Albanian';
$string['nationality.am'] = 'Armenian';
$string['nationality.ao'] = 'Angolan';
$string['nationality.ar'] = 'Argentinian';
$string['nationality.at'] = 'Austrian';
$string['nationality.au'] = 'Australian';
$string['nationality.az'] = 'Azerbaijani';
$string['nationality.ba'] = 'Bosnian-Herzegovinian';
$string['nationality.bb'] = 'Barbadian';
$string['nationality.bd'] = 'Bangladeshi';
$string['nationality.be'] = 'Belgian';
$string['nationality.bf'] = 'Burkinabe';
$string['nationality.bg'] = 'Bulgarian';
$string['nationality.bh'] = 'Bahraini';
$string['nationality.bi'] = 'Burundian';
$string['nationality.bj'] = 'Beninese';
$string['nationality.bn'] = 'Bruneian';
$string['nationality.bo'] = 'Bolivian';
$string['nationality.br'] = 'Brazilian';
$string['nationality.bs'] = 'Bahamian';
$string['nationality.bt'] = 'Bhutanese';
$string['nationality.bw'] = 'Botswanan';
$string['nationality.by'] = 'Byelorussian';
$string['nationality.bz'] = 'Belizean';
$string['nationality.ca'] = 'Canadian';
$string['nationality.cd'] = 'Congolese (Republic of the Congo)';
$string['nationality.cf'] = 'Central African';
$string['nationality.cg'] = 'Congolese (Democratic Republic of the Congo)';
$string['nationality.ch'] = 'Swiss';
$string['nationality.ci'] = 'Ivorian';
$string['nationality.cl'] = 'Chilean';
$string['nationality.cm'] = 'Cameroonian';
$string['nationality.cn'] = 'Chinese';
$string['nationality.co'] = 'Colombian';
$string['nationality.cr'] = 'Costa Rican';
$string['nationality.cu'] = 'Cuban';
$string['nationality.cv'] = 'Cape Verdean';
$string['nationality.cy'] = 'Cypriot';
$string['nationality.cz'] = 'Czech';
$string['nationality.de'] = 'German';
$string['nationality.dj'] = 'Djiboutian';
$string['nationality.dk'] = 'Danish';
$string['nationality.dm'] = 'Dominican (Dominica)';
$string['nationality.do'] = 'Dominican (Dominican Republic)';
$string['nationality.dz'] = 'Algerian';
$string['nationality.ec'] = 'Ecuadorian';
$string['nationality.ee'] = 'Estonian';
$string['nationality.eg'] = 'Egyptian';
$string['nationality.er'] = 'Eritrean';
$string['nationality.es'] = 'Spanish';
$string['nationality.et'] = 'Ethiopian';
$string['nationality.fi'] = 'Finnish';
$string['nationality.fj'] = 'Fijian';
$string['nationality.fm'] = 'Micronesian';
$string['nationality.fr'] = 'French';
$string['nationality.ga'] = 'Gabonese';
$string['nationality.gb'] = 'British';
$string['nationality.gd'] = 'Grenadian';
$string['nationality.ge'] = 'Georgian';
$string['nationality.gh'] = 'Ghanaian';
$string['nationality.gl'] = 'Greenlandic';
$string['nationality.gm'] = 'Gambian';
$string['nationality.gn'] = 'Guinean (Republic of Guinea)';
$string['nationality.gq'] = 'Equatoguinean (Equatorial Guinea)';
$string['nationality.gr'] = 'Greek';
$string['nationality.gt'] = 'Guatemalan';
$string['nationality.gw'] = 'Guinean (Republic of Guinea-Bissau)';
$string['nationality.gy'] = 'Guyanese (Guyana)';
$string['nationality.hn'] = 'Honduran';
$string['nationality.hr'] = 'Croatian';
$string['nationality.ht'] = 'Haitian';
$string['nationality.hu'] = 'Hungarian';
$string['nationality.id'] = 'Indonesian';
$string['nationality.ie'] = 'Irish';
$string['nationality.il'] = 'Israeli';
$string['nationality.in'] = 'Indian';
$string['nationality.iq'] = 'Iraqi';
$string['nationality.ir'] = 'Iranian';
$string['nationality.is'] = 'Icelandic';
$string['nationality.it'] = 'Italian';
$string['nationality.jm'] = 'Jamaican';
$string['nationality.jo'] = 'Jordanian';
$string['nationality.jp'] = 'Japanese';
$string['nationality.ke'] = 'Kenyan';
$string['nationality.kg'] = 'Kyrgyzstani';
$string['nationality.kh'] = 'Cambodian';
$string['nationality.ki'] = 'I-kiribati';
$string['nationality.km'] = 'Comorian';
$string['nationality.kn'] = 'Kittitian / Nevisian (Saint Kitts and Nevis)';
$string['nationality.kp'] = 'Nord Korean (Democratic People\'s Republic of Korea)';
$string['nationality.kr'] = 'South Korean (Republic of Korea)';
$string['nationality.kw'] = 'Kuwaiti';
$string['nationality.kz'] = 'kazakhstani';
$string['nationality.la'] = 'Laotian';
$string['nationality.lb'] = 'Lebanese';
$string['nationality.lc'] = 'Saint Lucian (Saint Lucia)';
$string['nationality.li'] = 'Liechtensteiner';
$string['nationality.lk'] = 'Sri Lankan';
$string['nationality.lr'] = 'Liberian';
$string['nationality.ls'] = 'Basotho (Lesotho)';
$string['nationality.lt'] = 'Lithuanian';
$string['nationality.lu'] = 'Luxembourgish';
$string['nationality.lv'] = 'Latvian';
$string['nationality.ly'] = 'Libyan';
$string['nationality.ma'] = 'Moroccan';
$string['nationality.mc'] = 'Monegasque';
$string['nationality.md'] = 'Moldovan';
$string['nationality.me'] = 'Montenegrin';
$string['nationality.mg'] = 'Malagasy';
$string['nationality.mh'] = 'Marshallese';
$string['nationality.mk'] = 'of the former Yugoslav Republic of Macedonia';
$string['nationality.ml'] = 'Malian';
$string['nationality.mm'] = 'Burmese (Myanmar)';
$string['nationality.mn'] = 'Mongolian';
$string['nationality.mr'] = 'Mauritanian';
$string['nationality.mt'] = 'Maltese';
$string['nationality.mu'] = 'Mauritian';
$string['nationality.mv'] = 'Maldivian';
$string['nationality.mw'] = 'Malawian';
$string['nationality.mx'] = 'Mexican';
$string['nationality.my'] = 'Malaysian';
$string['nationality.mz'] = 'Mozambican';
$string['nationality.na'] = 'Namibian';
$string['nationality.ne'] = 'Nigerien (Republic of Niger)';
$string['nationality.ng'] = 'Nigerian (Federal Republic of Nigeria)';
$string['nationality.ni'] = 'Nicaraguan';
$string['nationality.nl'] = 'Dutch';
$string['nationality.no'] = 'Norwegian';
$string['nationality.np'] = 'Nepalese';
$string['nationality.nr'] = 'Nauruan';
$string['nationality.nu'] = 'Niuean';
$string['nationality.nz'] = 'New Zealander';
$string['nationality.om'] = 'Omani';
$string['nationality.pa'] = 'Panamanian';
$string['nationality.pe'] = 'Peruvian';
$string['nationality.pg'] = 'Papua New Guinean';
$string['nationality.ph'] = 'Philippine';
$string['nationality.pk'] = 'Pakistani';
$string['nationality.pl'] = 'Polish';
$string['nationality.pr'] = 'Puerto Rican';
$string['nationality.ps'] = 'Palestinian';
$string['nationality.pt'] = 'Portuguese';
$string['nationality.pw'] = 'Palauan';
$string['nationality.py'] = 'Paraguayan';
$string['nationality.qa'] = 'Qatari';
$string['nationality.ro'] = 'Romanian';
$string['nationality.rs'] = 'Serbian';
$string['nationality.ru'] = 'Russian';
$string['nationality.rw'] = 'Rwandan; Rwandese';
$string['nationality.sa'] = 'Saudi Arabian';
$string['nationality.sb'] = 'Solomon Islander';
$string['nationality.sc'] = 'Seychellois';
$string['nationality.sd'] = 'Sudanese';
$string['nationality.se'] = 'Swedish';
$string['nationality.sg'] = 'Singaporean';
$string['nationality.si'] = 'Slovenian';
$string['nationality.sk'] = 'Slovak';
$string['nationality.sl'] = 'Sierra Leonean';
$string['nationality.sm'] = 'Sammarinese';
$string['nationality.sn'] = 'Senegalese';
$string['nationality.so'] = 'Somali';
$string['nationality.sr'] = 'Surinamese';
$string['nationality.st'] = 'Sao Tomean';
$string['nationality.sv'] = 'Salvadoran';
$string['nationality.sy'] = 'Syrian';
$string['nationality.sz'] = 'Swazi';
$string['nationality.td'] = 'Chadian';
$string['nationality.tg'] = 'Togolese';
$string['nationality.th'] = 'Thai';
$string['nationality.tj'] = 'Tajik';
$string['nationality.tl'] = 'Timorese';
$string['nationality.tm'] = 'Turkmen';
$string['nationality.tn'] = 'Tunisian';
$string['nationality.to'] = 'Tongan';
$string['nationality.tr'] = 'Turkish';
$string['nationality.tt'] = 'of Trinidad and Tobago';
$string['nationality.tv'] = 'Tuvaluan';
$string['nationality.tz'] = 'Tanzanian';
$string['nationality.ua'] = 'Ukrainian';
$string['nationality.ug'] = 'Ugandan';
$string['nationality.us'] = 'American';
$string['nationality.uy'] = 'Uruguayan';
$string['nationality.uz'] = 'Uzbek';
$string['nationality.va'] = 'Vatican';
$string['nationality.vc'] = 'Saint Vincentian (Saint Vincent and the Grenadines)';
$string['nationality.ve'] = 'Venezuelan';
$string['nationality.vn'] = 'Vietnamese';
$string['nationality.vu'] = 'Ni-Vanuatu';
$string['nationality.ws'] = 'Samoan';
$string['nationality.ye'] = 'Yemeni';
$string['nationality.za'] = 'South African';
$string['nationality.zm'] = 'Zambian';
$string['nationality.zw'] = 'Zimbabwean';

?>
