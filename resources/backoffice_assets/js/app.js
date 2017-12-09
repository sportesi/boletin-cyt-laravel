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

    $('.sidebar a').each((a, b) => {
        let item = $(b);
        if (item.attr('href') === window.location.href) {
            item.parent().toggleClass('active');
        }
    });
});