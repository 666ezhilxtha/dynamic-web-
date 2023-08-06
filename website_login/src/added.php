<?php
$base_url = $_SERVER['DOCUMENT_ROOT']."/learning_php/website_login";
include("$base_url/valid.php"); 
 //include("password.php"); 

    include("$base_url/config/database.php");
//   include("$base_url/info.php");
    ;?>

<?php
try {
 
    if (!count($errors) && ($_SERVER["REQUEST_METHOD"] == "POST")){
       
        $sql ="INSERT INTO infodata (user,email,message) values(:user,:email,:message)";
        $query = $conn->prepare($sql);
        $query->bindparam(':user',$user);
        $query->bindparam(':email',$email);
        $query->bindparam(':message',$message);
        
        
         $stmt = $query->execute();
        if($stmt){
        header("Location: /learning_php/website_login/index.php");
        }else{
            echo "sql error";
        }
        }
} catch (PDOException $th) {
    throw $th;
}
    

// header("Location: /learning_php/website_login/index.php");
?>