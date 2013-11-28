<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//base de carregamento de arquivos CSS
$config['css'] = [
     '/assets/admin/css/loader-style',
    '/assets/admin/js/iCheck/flat/all.css',
    '/assets/admin/js/iCheck/line/all.css'
];

//iniciados no footer das páginas
$config['js'] = [];

$config['jsAdmin'] = [
    '/assets/admin/js/load',
    '/assets/admin/js/main',
    '/assets/admin/js/dataTable/lib/lodash/lodash.min',
    '/assets/admin/js/dataTable/lib/jquery.dataTables/js/jquery.dataTables.min',
    '/assets/admin/js/dataTable/lib/jquery.dataTables/js/DT_bootstrap',
    '/assets/admin/js/dataTable/js/datatables.responsive',
    '/assets/admin/js/dataTable/js/dom-bootstrap',
    '/assets/admin/js/gage/raphael.2.1.0.min',
    '/assets/admin/js/gage/justgage',
    '/assets/admin/js/chart/jquery.flot',
    '/assets/admin/js/chart/jquery.flot.resize',
    '/assets/admin/js/chart/realTime',
    '/assets/admin/js/chart/chart-float-stacking',
    '/assets/admin/js/calendar/underscore/underscore-min',
    '/assets/admin/js/calendar/bootstrap2/js/bootstrap.min',
    '/assets/admin/js/calendar/jstimezonedetect/jstz.min',
    '/assets/admin/js/calendar/language/fr-FR',
    '/assets/admin/js/calendar/language/de-DE',
    '/assets/admin/js/calendar/language/el-GR',
    '/assets/admin/js/calendar/language/it-IT',
    '/assets/admin/js/calendar/language/pl-PL',
    '/assets/admin/js/calendar/language/es-MX',
    '/assets/admin/js/calendar/language/es-ES',
    '/assets/admin/js/calendar/language/ru-RU',
    '/assets/admin/js/calendar/language/sv-SE',
    '/assets/admin/js/calendar/calendar',
    '/assets/admin/js/calendar/app',
    '/assets/admin/js/textEditor/lib/js/wysihtml5-0.3.0',
    '/assets/admin/js/textEditor/lib/js/prettify',
    '/assets/admin/js/textEditor/src/bootstrap-wysihtml5',
    '/assets/admin/js/base',
    
];

$config['cssAdmin'] = [
    '/assets/admin/css/loader-style',
    '/assets/admin/js/calendar/css/calendar',
    '/assets/admin/js/textEditor/src/bootstrap-wysihtml5',
    '/assets/admin/js/dataTable/css/datatables.responsive',
    '/assets/admin/js/dataTable/lib/jquery.dataTables/css/DT_bootstrap',
    '/assets/admin/js/footable/css/footable.standalone',
    '/assets/admin/js/footable/css/footable-demos'
];