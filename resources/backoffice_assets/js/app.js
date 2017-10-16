import {DataTableSpanish} from "./datatables.spanish";

window.$ = window.jQuery = require('jquery');
require('jquery-ui');
require('bootstrap-sass');
require('admin-lte');
require('datatables.net-bs');
require('bootstrap-notify');
require('./user');

$(document).ready(() => {
    $('.datatable-js').dataTable({
        language: DataTableSpanish
    });
});