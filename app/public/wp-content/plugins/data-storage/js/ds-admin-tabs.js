/**
 * tabs of form in admin panel
 */
jQuery(document).ready(function($) {
    $("#form_tabs").tabs();
    $("input[class^=ds_download_table_csv_]").click(function(){
        //alert("clicked");
        $(".ds_update_link").detach();
        $(".ds_del_link").detach();
        var currentTable = $('#'+$(this).attr('class'));
        currentTable.tableExport({type:'csv',escape:'false',tableName:'yourTableName'});
        $(".ds_refresh_page").html(ds_object_name2.refresh3);
    });
});