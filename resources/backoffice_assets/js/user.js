import { DataTableSpanish } from "./datatables.spanish";

$(document).ready(() => {
  $('.table-js').DataTable({
    language: DataTableSpanish,
    order: [6, 'asc']
  });
});