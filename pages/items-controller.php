<?PHP
#Include the connect.php file
include('conn.php');
error_reporting(0);
$query = $pdo->prepare('select items.item_id,items.item_name,items.item_serial,items.item_model,items.item_dop,items.item_remarks,items.item_price,items.item_description,category.category_name,items.item_qty,company.company_name,company.company_id,employee.employee_fname,employee.employee_id from items left join company on items.company_id=company.company_id left join employee on items.employee_id=employee.employee_id left join category on items.category_id=category.category_id');
$query->execute();  

if (isset($_GET['update']))
{


         
            $item_name = $_GET['item_name'];
            $item_model = $_GET['item_model'];
            $item_serial = $_GET['item_serial'];
            $item_qty = $_GET['item_qty'];   
            $item_price = $_GET['item_price']; 
            $item_date = $_GET['item_date'];
            $item_employee = $_GET['item_employee'];          
            $id = $_GET['item_idp'];
            $item_company    ='2';
        /*  $item_serial    = $_GET['item_serial'];
            $item_model    = $_GET['item_model'];
            $item_qty    = $_GET['item_qty'];
            $item_price    = $_GET['item_price'];
            $item_dop    = $_GET['item_dop'];
            $item_employee    = $_GET['item_employee'];//ok
            $item_company    =$_GET['item_company'];//ok
            $item_remarks  = $_GET['item_remarks'];
            $item_description    = $_GET['item_description'];
            $item_category    = $_GET['item_category'];//ok*/
            


   $stmt = $pdo->prepare("UPDATE `items` SET `item_name`=?,`item_serial`=?,`item_model`=?,`item_qty`=? ,`item_price`=? ,`item_dop`=? ,`employee_id`=? ,`company_id`=? WHERE `item_id`=?");
   $stmt->execute(array($item_name,$item_serial,$item_model,$item_qty,$item_price,$item_date,$item_employee,$item_company,$id));

    print $stmt;

}
else if (isset($_GET['insert']))
{

              $target_dir = "photos/";
$target_file = $target_dir . basename($_GET["item_image"]["name"]);
$images=move_uploaded_file($_GET["item_image"]["tmp_name"], $target_file);
            $item_name    = $_GET['item_name'];
            $item_serial    = $_GET['item_serial'];
            $item_model    = $_GET['item_model'];
            $item_qty    = $_GET['item_qty'];
            $item_price    = $_GET['item_price'];
            $item_dop    = $_GET['item_dop'];
            $item_employee    = $_GET['item_employee'];//ok
            $item_company    =$_GET['item_company'];//ok
            $item_remarks  = $_GET['item_remarks'];
            $item_description    = $_GET['item_description'];
            $item_category    = $_GET['item_category'];//ok

            /*$file=$_FILES['item_image']['tmp_name'];
            $image= addslashes(file_get_contents($_FILES['item_image']['tmp_name']));
            $image_name= addslashes($_FILES['item_image']['name']);
            move_uploaded_file($_FILES["item_image"]["tmp_name"],"photos/" . $_FILES["item_image"]["name"]);
            $images="photos/" . $_FILES["item_image"]["name"];*/




           $stmt = $pdo->prepare("INSERT INTO `items` VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
           $res=$stmt->execute(array('',$item_name,$item_serial,$item_model , $item_qty,$item_dop ,$item_employee,$item_company,$item_remarks ,$item_description,$images,'',$item_category,$item_price));

           $itemdp = $pdo->lastInsertId();
              $passiditem['item_idp'] = $itemdp;  

              print json_encode($passiditem);

}
else{

      while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $t= $row['item_dop'];
        $formats12=date("m/d/Y", strtotime($t));

        $items[] = array(
         
            'i_id' => $row['item_id'],
            'i_name' => $row['item_name'],
            'i_serial' => $row['item_serial'],
            'i_model' => $row['item_model'],
            'i_qty' => $row['item_qty'],        
            'i_dob' => $formats12,
            'ee_name' => $row['employee_fname'],
            'ee_id' => $row['employee_id'],
            'i_remarks' => $row['item_remarks'],
            'i_item_description' => $row['item_description'],            
            'ca_name' => $row['category_name'],
            'co_name' => $row['company_name'],
            'co_id' => $row['company_id'],
            'i_price' => $row['item_price']


          );
                
                }
            echo json_encode($items); 
          }
?>