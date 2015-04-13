      <script type="text/javascript">
        $(document).ready(function () {

            var countries = [
                 { value: "Male", label: "Male" },
                 { value: "Female", label: "Female" }
                 ];

            var countriesSource =
            {
                 datatype: "array",
                 datafields: [
                     { name: 'label', type: 'string' },
                     { name: 'value', type: 'string' }
                 ],
                 localdata: countries
            };

            var countriesAdapter = new $.jqx.dataAdapter(countriesSource, {
                autoBind: true
            });   

            var level = [
                 { value: "admin", label: "Administrator" },
                 { value: "super admin", label: "Super Administrator" }
                 ];

            var levelSource =
            {
                 datatype: "array",
                 datafields: [
                     { name: 'label', type: 'string' },
                     { name: 'value', type: 'string' }
                 ],
                 localdata: level
            };

            var levelAdapter = new $.jqx.dataAdapter(levelSource, {
                autoBind: true
            });        

            var barangays = [
                 { value: "Alangilan", label: "Alangilan" },
                 { value: "Alijis", label: "Alijis" },
                 { value: "Banago", label: "Banago" },
                 { value: "Bata", label: "Bata" },
                 { value: "Cabug", label: "Cabug" },
                 { value: "Estefania", label: "Estefania" },
                 { value: "Felisa", label: "Felisa" },
                 { value: "Granada", label: "Granada" },
                 { value: "Handumanan", label: "Handumanan" },
                 { value: "Mandalagan", label: "Mandalagan" },
                 { value: "Mansilingan", label: "Mansilingan" },
                 { value: "Montevista", label: "Montevista" },
                 { value: "Pahanocoy", label: "Pahanocoy" },
                 { value: "Punta-taytay", label: "Punta-taytay" },
                 { value: "Singcang-Airport", label: "Singcang-Airport" },
                 { value: "Sum-ag", label: "Sum-ag" },
                 { value: "Taculing", label: "Taculing" },
                 { value: "Tangub", label: "Tangub" },
                 { value: "Villamonte", label: "Villamonte" },
                 { value: "Vista Alegre", label: "Vista Alegre" },
                 { value: "Barangay 1", label: "Barangay 1" },
                 { value: "Barangay 2", label: "Barangay 2" },
                 { value: "Barangay 3", label: "Barangay 3" },
                 { value: "Barangay 4", label: "Barangay 4" },
                 { value: "Barangay 5", label: "Barangay 5" },
                 { value: "Barangay 6", label: "Barangay 6" },
                 { value: "Barangay 7", label: "Barangay 7" },
                 { value: "Barangay 8", label: "Barangay 8" },
                 { value: "Barangay 9", label: "Barangay 9" },
                 { value: "Barangay 10", label: "Barangay 10" },
                 { value: "Barangay 11", label: "Barangay 11" },
                 { value: "Barangay 12", label: "Barangay 12" },
                 { value: "Barangay 13", label: "Barangay 13" },
                 { value: "Barangay 14", label: "Barangay 14" },
                 { value: "Barangay 15", label: "Barangay 15" },
                 { value: "Barangay 16", label: "Barangay 16" },
                 { value: "Barangay 17", label: "Barangay 17" },
                 { value: "Barangay 18", label: "Barangay 18" },
                 { value: "Barangay 19", label: "Barangay 19" },
                 { value: "Barangay 20", label: "Barangay 20" },
                 { value: "Barangay 21", label: "Barangay 21" },
                 { value: "Barangay 22", label: "Barangay 22" },
                 { value: "Barangay 23", label: "Barangay 23" },
                 { value: "Barangay 24", label: "Barangay 24" },
                 { value: "Barangay 25", label: "Barangay 25" },
                 { value: "Barangay 26", label: "Barangay 26" },
                 { value: "Barangay 27", label: "Barangay 27" },
                 { value: "Barangay 28", label: "Barangay 28" },
                 { value: "Barangay 29", label: "Barangay 29" },
                 { value: "Barangay 30", label: "Barangay 30" },
                 { value: "Barangay 31", label: "Barangay 31" },
                 { value: "Barangay 32", label: "Barangay 32" },
                 { value: "Barangay 33", label: "Barangay 33" },
                 { value: "Barangay 34", label: "Barangay 34" },
                 { value: "Barangay 35", label: "Barangay 35" },
                 { value: "Barangay 36", label: "Barangay 36" },
                 { value: "Barangay 37", label: "Barangay 37" },
                 { value: "Barangay 38", label: "Barangay 38" },
                 { value: "Barangay 39", label: "Barangay 39" },
                 { value: "Barangay 40", label: "Barangay 40" },
                 { value: "Barangay 41", label: "Barangay 41" }
                 ];


            var barangaysSource =
            {
                 datatype: "array",
                 datafields: [
                     { name: 'label', type: 'string' },
                     { name: 'value', type: 'string' }
                 ],
                 localdata: barangays
            };


            var barangaysAdapter = new $.jqx.dataAdapter(barangaysSource, {
                autoBind: true
            });
            var source =
            {
                datatype: "json",
                cache: false,
                datafields: [
                    { name: 'account_id'},
                  { name: 'account_employee_id'},//employee_id
                   { name: 'account_item_id'},//employee_fname
                   { name: 'account_date'}
            ],
            id: 'account_id',
            url: 'accounts-controller.php'};




var generaterow = function (id) {//adding new row for new data entry
                var row = {};
              
                row["e_id"] = "";
                row["e_fn"] = "";
                row["e_mn"] = "";
                row["e_ln"] = "";
                row["e_db"] = "";
                row["e_ag"] = "";
                row["e_gd"] = "";
                row["e_en"] = "";
                row["e_po"] = "";
                row["e_hnum"] = "";
                row["e_st"] = "";
                row["e_sb"] = "";
                row["e_bl"] = "";
                row["e_lnum"] = "";
                row["e_by"] = "";
                row["e_ct"] = "";
                row["e_pl"] = "";
                row["e_un"] = "";
                row["e_pw"] = "";
                row["e_al"] = "";
              
                return row;
            }


         var pagerrenderer = function () {
                var element = $("<div style='margin-top: 5px;float:left; width: 100%; height: 100%;'>");
                var paginginfo = $("#jqAccount").jqxGrid('getpaginginformation');
                for (i = 0; i < paginginfo.pagescount; i++) {
                    // add anchor tag with the page number for each page.
                    var anchor = $("<a style='padding: 5px;' href='#" + i + "'>" + i + "</a></div>");
                    anchor.appendTo(element);
                    anchor.click(function (event) {
                        // go to a page.
                        var pagenum = parseInt($(event.target).text());
                        $("#jqAccount").jqxGrid('gotopage', pagenum);
                    });
                }
                return element;
            }  
var n=2;


var dataAdapter = new $.jqx.dataAdapter(source);
// initialize jqxGrid
$("#jqAccount").jqxGrid(
{           
                editable: true,
               //  editmode: false,
                groupable: true,
                width: 1000,
                height: 900,
                showfilterrow: true,
                filterable: true,
                sortable: true,
                selectionmode: 'checkbox',//'singlecell'
                pageable: true,
                pagermode:'simple',
                autoheight: true,
                columnsresize: true,
                source: dataAdapter,
                showtoolbar: true,

                rendertoolbar: function (toolbar) {
                    var me = this;
                    var container = $("<div style='margin: 5px;'></div>");
                    toolbar.append(container);
                    container.append('<input id="addrowbutton" type="button" disabled value="Add New Row" />');                    
                    container.append('<input style="margin-left: 5px;" id="deleterowbutton" type="button" disabled value="Delete Selected Row"  />');
                    container.append('<input style="margin-left: 5px;" id="reload-grid" type="button" value="Refresh Grid" />');
                  
                   $("#addrowbutton").jqxButton();
                   if(n==1){
                    $("#addrowbutton").jqxButton({ disabled: true});
                }
                else{
                $("#addrowbutton").jqxButton({ disabled: false});

                }
                    $("#deleterowbutton").jqxButton();
                    
                    // update row.
                    $("#updaterowbutton").on('click', function () {
                        var datarow = generaterow();
                        var selectedrowindex = $("#jqAccount").jqxGrid('getselectedrowindex');
                        var rowscount = $("#jqAccount").jqxGrid('getdatainformation').rowscount;
                        if (selectedrowindex >= 0 && selectedrowindex < rowscount) {
                            var id = $("#jqAccount").jqxGrid('getrowid', selectedrowindex);
                            var commit = $("#jqAccount").jqxGrid('updaterow', id, datarow);

                            $("#jqAccount").jqxGrid('ensurerowvisible', selectedrowindex);
                        }
                    });


                     $("#reload-grid").on('click', function () {
                     $("#jqAccount").jqxGrid('updatebounddata', 'cells');
                     });

                    // create new row.
                    $("#addrowbutton").on('click', function () {
                       

                    var datarow = generaterow();                
                    var commit = $("#jqAccount").jqxGrid('addrow', null, datarow,'first');
                     
                    });

                    //delete row
                    $("#deleterowbutton").on('click', function () {
                    var selectedrowindexes = $("#jqAccount").jqxGrid('getselectedrowindexes');
                    var rowscount = $("#jqAccount").jqxGrid('getdatainformation').rowscount;
                    // begin update. Stops the Grid's rendering.
                    $("#jqAccount").jqxGrid('beginupdate');
                    selectedrowindexes.sort();
                    // delete the selected rows by using the 'deleterow' method of jqxGrid.
                    for (var m = 0; m < selectedrowindexes.length; m++) {
                        var selectedrowindex = selectedrowindexes[selectedrowindexes.length - m - 1];
                        if (selectedrowindex >= 0 && selectedrowindex < rowscount) {
                            var id = $("#jqAccount").jqxGrid('getrowid', selectedrowindex);
                            $("#jqAccount").jqxGrid('deleterow', id);
                        }
                    }
                    $("#jqAccount").jqxGrid('endupdate');
              });
    },
            columns: [
           
                    { text: 'ID', datafield: 'account_id', editable: false,width: 100 },
                    { text: 'Employee Name', datafield: 'account_employee_id', width: 100  },
                 { text: 'Item Name', datafield: 'account_item_id', width: 100 },
                    { text: 'Date of Holding', datafield: 'account_date', filtertype: 'date',columntype: 'datetimeinput',  align: 'right', cellsalign: 'right', cellsformat: 'dddd-MMMM-yyyy'}

                    
                ],
                groups: ['account_item_id']
        });//end of jqxgrid


});
</script>

<!---->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="../css/bootstrap.css" />
   
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
 