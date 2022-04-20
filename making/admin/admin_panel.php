<?php





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<ink rel="stylesheet" href="../css/view.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body >
    <div class="container">
        <h2 style="text-align: center;">Details of the registered students</h2><br>
        <table class="table table-border" style="text-align: center; background: linear-gradient(135deg, #71b7e6, #9b59b6);">
            <thead>
                <tr>
                    <th>S1 No</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Date of Birth</th>
                    <th>Nationality</th>
                    <th>Gender</th>
                    <th>Category</th>
                    <th>Blood</th>
                    <th>Operations</th>
                    
                    
                </tr>
            </thead>
            <tbody>

            <?php

            $c=1;
            $con = mysqli_connect('localhost', 'root','','registration') ;
            if($con){
                
            }
            else{
                echo "connection error";
            }

            $sel = "SELECT * FROM admission";
            
            $query = mysqli_query($con,$sel);
            if($query){
            while($row=$query->fetch_assoc()){

                $id = $row['ID'];
                $name= $row['Fname'];
                $email= $row['Email'];
                $course= $row['Course'];
                $father= $row['Father'];
                $mother= $row['Mother'];
                $dob= $row['DOB'];
                $nat= $row['Nationality'];
                $gender= $row['Gender'];
                $category= $row['Category'];
                $blood= $row['Blood'];
                
            
                echo '<tr>
                    <td>'. $c++. '</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$course.'</td>
                    <td>'.$father.'</td>
                    <td>'.$mother.'</td>
                    <td>'.$dob.'</td>
                    <td>'.$nat.'</td>
                    <td>'.$gender.'</td>
                    <td>'.$category.'</td>
                    <td>'.$blood.'</td>
                    
                    
                    <td><a href="update.php?updateid='.$id.'&name='.$name.'&em='.$email.'&c='.$course.'&f='.$father.'&m='.$mother.'&dob='.$dob.'&nat='.$nat.'&g='.$gender.'&cat='.$category.'&b='.$blood.'"><button type="button" name="update">Update</button></a>
                    <a href="delete.php?deleteid='.$id.'"><button type="button" name="delete">Delete</button></a></td>
                </tr>';
            }
            }
                ?>
            </tbody>

        </table>
        <button>Add user</button>
    </div>
</body>
</html>