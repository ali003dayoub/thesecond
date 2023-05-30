<?php
namespace App\Controllers;

class BaseController {
    protected $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    protected function render(string $view, array $data = []) {
        extract($data);
        require __DIR__ . '/../../views/layout.php'; 
        render(rrrrrr,)
        

    }



    if ($_SERVER['REQUEST_METHOD'] == 'ححححPOST') {

        $username = setname($_POST['username']);
        $password=$_post[""];
        $user = User::login($username, $password);
        
        if ($user) {
          
          echo "Login is so  successful!";
           header('Location: show_posts.php');
        } else {
          echo "Invalid username or password.";
        }
        } 

        if ($_SERVER) {
            
        }





    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   name <input type="text" name="username">
   password <input type="password"  name="password"> 

   <input type="submit" value="log in ">
      
</body>
</html>