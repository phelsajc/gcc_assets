<?PHP
#Include the connect.php file
include('conn.php');

$query = $pdo->prepare('select accountability.accountability_id,accountability.accountability_date,items.item_name ,
 employee.employee_fname from accountability LEFT JOIN items on accountability.item_id=items.item_id left join employee on accountability.employee_id=employee.employee_id');
$query->execute();  

            
if (isset($_POST['insert'])){
            $item_name    = $_GET['item_name'];
            $item_employee    = $_GET['item_employee'];
            $item_date    = $_GET['item_date'];
     



           $stmt = $pdo->prepare("INSERT INTO `items` VALUES (?,?,?,?)");
           $res=$stmt->execute(array('',$item_name,$item_employee,$item_date));

           $itemdp = $pdo->lastInsertId();
              $passiditem['item_idp'] = $itemdp;  

              print json_encode($passiditem);
             
}
else{

    // SELECT COMMAND
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
        $t= $row['accountability_date'];
        $formats12=date("m/d/Y", strtotime($t));

        $accounts[] = array(
            'account_id' => $row['accountability_id'],
            'account_employee_id' => $row['employee_fname'],
            'account_item_id' => $row['item_name'],
            'account_date' => $formats12
          );
                
                }
            echo json_encode($accounts); 
        }

?>