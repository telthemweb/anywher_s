 <?php  
  header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
header('content-type: application/json; charset=utf-8'); 
require '../autoloader.php'; 
$doctor = new Doctor();
 $response = array();
 $final_reply['response'] = false;
 $final_reply['data'] = '';
$final_response['response'] = '';
if (isset($_GET['id'])) {
	$id = $_GET['id'];


	$response= $doctor->deleteDoctorDetails($id);
    if ($response == true) {
    	$final_reply['data']  ="Doctor Deleted successfully !!"; 
         $final_reply['response'] = true;
          echo json_encode($final_reply);
    }
    else{
    	$final_reply['data'] = "Failed to delete client account something went wrong";
        $final_reply['response'] = false;
         echo json_encode($final_reply);
    }
        
}
 

