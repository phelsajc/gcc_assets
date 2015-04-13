 
 <?php include("scripts/system_general_scripts.php"); ?>
 <?php include("scripts/system_item_scripts.php"); ?>

   <html>
  <body>

      
            <div id="jq">
            </div>

  
<div id="popupadd">
            <div>Edit</div>
            <div style="overflow: hidden;">
            <form method="POST" enctype="multipart/form-data" action="items-controller.php">
              <table>
                    <tr>
                        <td align="right"></td>
                        <td align="left"><div id="nname"><input id="itemname" name="item_name" /></div></td>
                        <td align="left"><div id="nid"><input id="itemid" name="item_id" hidden/></div></td>

                        <td align="left"><div id="nserial"><input id="itemserial" name="item_serial" /></div></td>
                    </tr>
                    <tr>
                        <td align="right">Model:</td>
                        <td align="left"><div id="nmodel"><input id="itemmodel" name="item_model" /></div></td>
                    
                        <td align="right">Quantity:</td>
                        <td align="left"><div id="nqty"><input id="itemqty" name="item_qty"/></div></td>
                    </tr>
                    <tr>
                        <td align="right">Price:</td>
                        <td align="leaft"><div id="nprice"><input id="itemprice" name="item_price"/></div></td>
                    
                        <td align="right">Date:</td>
                        <td><div name="item_dop" id="birthInput1"></div></td>
                    </tr>
                     <tr>
                    
                        <td align="right">For Employee:</td>
                        <td align="left"><div name="item_employee" id="itememployee" style="width:169 px;"></div></td>

                   
                        <td align="right">For Company:</td>
                        <td><div name="item_company" id="itemcompany" style="width:169 px;"></div></td>
                    </tr>
                     <tr>
                        <td align="right">Remakrs:</td>
                        <td align="left"><div id="nremarks"><input id="itemremarks" name="item_remarks"/></div></td>
                    
                        <td align="right">Descriptions:</td>
                        <td><div id="ndesc"><input id="itemdescription"  name="item_description"/></div></td>
                    </tr>     
                    <tr>
                        <td align="right">Image:</td>
                        <td align="left"><input type="file" name="image"  id="imageupload"></div></td>
                    
                        <td align="right">Category:</td>
                        <td><div name="item_category" id="itemcategory" style="width:169 px;"></div></td>
                    </tr>               
                    <tr>
                        <td align="right"></td>
                        <td style="padding-top: 10px;" align="right"><input style="margin-right: 5px;" type="submit" id="Save" value="Save" name="insert" /><input id="Cancel" type="button" value="Cancel" /></td>
                    </tr>
                </table>
                </form>
            </div>

</div>



<div id="popupedit">
            <div>Edit</div>
            <div style="overflow: hidden;">
            <form method="POST" enctype="multipart/form-data" action="items-controller.php">
              <table>
                    <tr>
                        <td align="right"></td>
                        <td align="left"><div id="nname"><input id="itemnamex" name="item_name" /></div></td>
                        <td align="left"><div id="nid"><input id="itemidx" name="item_id" hidden/></div></td>

                        <td align="left"><div id="nserial"><input id="itemserialx" name="item_serial" /></div></td>
                    </tr>
                    <tr>
                        <td align="right">Model:</td>
                        <td align="left"><div id="nmodel"><input id="itemmodelx" name="item_model" /></div></td>
                    
                        <td align="right">Quantity:</td>
                        <td align="left"><div id="nqty"><input id="itemqtyx" name="item_qty"/></div></td>
                    </tr>
                    <tr>
                        <td align="right">Price:</td>
                        <td align="leaft"><div id="nprice"><input id="itempricex" name="item_price"/></div></td>
                    
                        <td align="right">Date:</td>
                        <td><div name="item_dop" id="birthInput2"></div></td>
                    </tr>
                     <tr>
                    
                        <td align="right">For Employee:</td>
                        <td align="left"><div name="item_employee" id="itememployeeD" style="width:169 px;"></div></td>

                   
                        <td align="right">For Company:</td>
                        <td><div name="item_company" id="itemcompanyD" style="width:169 px;"></div></td>
                    </tr>
                     <tr>
                        <td align="right">Remakrs:</td>
                        <td align="left"><div id="nremarks"><input id="itemremarksx" name="item_remarks"/></div></td>
                    
                        <td align="right">Descriptions:</td>
                        <td><div id="ndesc"><input id="itemdescriptionx"  name="item_description"/></div></td>
                    </tr>     
                    <tr>
                        <td align="right">Image:</td>
                        <td align="left"><input type="file" name="image"  id="imageuploadx"></td>
                    
                        <td align="right">Category:</td>
                        <td><div name="item_category" id="itemcategoryD" style="width:169 px;"></div></td>
                    </tr>               
                    <tr>
                        <td align="right"></td>
                        <td style="padding-top: 10px;" align="right"><input style="margin-right: 5px;" type="submit" id="Update" value="Update" name="update" /><input id="Cancel" type="button" value="Cancel" /></td>
                    </tr>
                </table>
                </form>
            </div>

</div>

</body>
</html>