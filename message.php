
<?php
// connecting to database
$conn = mysqli_connect("localhost", "root", "", "db_webcovid") or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
// $getMesg = addslashes($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT replies FROM chatbot WHERE length('$getMesg')>1 and queries LIKE '%$getMesg%'";


$run_query = mysqli_query($conn, $check_data) or die("Error");



if(mysqli_num_rows($run_query) > 0){
    $fetch_data = mysqli_fetch_assoc($run_query);
    
    $replay = $fetch_data['replies'];

    echo $replay;
}else{
    echo "Xin lỗi tôi không hiểu câu hỏi của bạn!";
}

?>
