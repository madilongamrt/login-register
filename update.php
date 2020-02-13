<!DOCTYPE html>
<html lang="en">

<?php include 'db.php'; 

    $id = $_GET['id'];
    
    $sql = "select * from task where id='$id'"; 
    
    $rows = $db->query($sql);
    $row= $rows->fetch_assoc();
    
    // var_dump($row);
    
    if(isset($_POST['send'])){
        
        $name = $_POST['$name'];
        
        $sql2 = "update task set name='$name' where id = '$id'"; 
    
        $db->query($sql2);
    
    header('location: index.php');
    }
    
?>


<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>crud</title>
</head>

<body>
    <div class="container">
        <center>
            <h1>Update Task</h1>
        </center>
        <div class="row" style="margin-top: 70px;">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <hr><br>
                    <form method="post">
                        <div class="form-group">
                            <label>Task Name</label>
                            <input type="text" required name="name" value="<?php echo $row['name']; ?>" class="form-control">
                        </div>
                        <input type="submit" name="send" value="Add Task" class="btn btn-success">
                    </form>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
