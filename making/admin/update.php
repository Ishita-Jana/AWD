<?php



include '../form/config.php';

$id = $_GET['updateid'];
$name= $_GET['name'];
$email= $_GET['em'];
$course= $_GET['c'];
$father= $_GET['f'];
$mother= $_GET['m'];
$dob= $_GET['dob'];
$nat= $_GET['nat'];
$gender= $_GET['g'];
$cat= $_GET['cat'];
$blood= $_GET['b'];


$query = "SELECT * FROM admission where ID='$id'";
            
$run = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($run);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/Registration.css">

</head>
<body>
    <div class="container">
        <div class="title">Update</div>

        <form action="" method="post"  >
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" value="<?php echo $result['Fname'];?>" placeholder="Enter Your name" name="name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Email" name="email" value="<?php echo $result['Email'];?>" required>
                </div>
                <div class="input-box">
                    <label class="details">Course Applied</label>
                    <select name="courses" class="list" >
                        <option value="">--Select--</option>
                        <option value="Human Resource" <?php if ($course== "Human Resource") echo "selected";?>>Human Resource</option>
                        <option value="Computer Science Engineering" <?php if ($course== "Computer Science Engineering") echo "selected";?>>Computer Science Engineering</option>
                        <option value="Law" <?php if ($course== "Law") echo "selected";?>>Law</option>
                        <option value="Electrical Engineering" <?php if ($course== "Electrical Engineering") echo "selected";?>>Electrical Engineering</option>
                        <option value="Commerce" <?php if ($course== "Commerce") echo "selected";?>>Commerce</option>
                        <option value="Sustainaibility" <?php if ($course== "Sustainaibility") echo "selected";?>>Sustainability</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">Father's Name</span>
                    <input type="text" placeholder="Father's Name" name="father" value="<?php echo $result['Father'];?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Mother's Name</span>
                    <input type="text" placeholder="Mother's  Name" name="mother" value="<?php echo $result['Mother'];?>" required>
                </div>
                <div class="input-box">
                    <span class="details">DOB</span>
                    <input type="date" placeholder="Date of Birth" onfocus="this.max=new Date().toISOString().split('T')[0]" name="dob" value="<?php echo $result['DOB'];?>" required>
                </div>
             
                <div class="gender-details">
                    <span class="gender-title">Gender</span> 
                    <div class="category" required>
                        <label for="male">
                            
                            <input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked";?>>
                            <span class="gender">Male</span>
                        </label>
                        <label for="female">
                            
                            <input type="radio" name="gender" value="Female" <?php if ( $gender== "Female") echo "checked";?>>
                            <span class="gender">Female</span>
                        </label>
                        
                        <label for="others">
                            
                            <input type="radio" name="gender" value="Others" <?php if ($gender== "Others") echo "checked";?>>
                            <span class="gender">Others</span>
                        </label>
                    </div>
                </div>

                <div class="input-box">
                    <span class="details">Nationality</span>
                    <input type="text" placeholder="Nationality" name="nationality" value="<?php echo $result['Nationality'];?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Category</span>
                    <select name="category" class="list"  required>
                        <option value="">--Select--</option>
                        <option value="General"  <?php if ($cat == "General") echo "selected";?>>General</option>
                        <option value="Obc"  <?php if ($cat == "Obc") echo "selected";?>>OBC</option>
                        <option value="SC/ST"  <?php if ($cat == "SC/ST") echo "selected";?>>SC/ST</option>
                    </select>
                </div>
                <div class="input-box ">
                    <span class="details">Blood Group</span>
                    <select name="blood" class="list"  required>
                        <option value="">--Select--</option>
                        <option value="A+"  <?php if ($blood == "A+") echo "selected";?> >A+</option>
                        <option value="A-" <?php if ($blood == "A-") echo "selected";?>>A-</option>
                        <option value="B+" <?php if ($blood == "B+") echo "selected";?>>B+</option>
                        <option value="B-" <?php if ($blood == "B-") echo "selected";?>>B-</option>
                        <option value="AB+" <?php if ($blood == "AB+") echo "selected";?>>AB+</option>
                        <option value="AB-" <?php if ($blood == "AB-") echo "selected";?>>AB-</option>
                        <option value="O+" <?php if ($blood == "O+") echo "selected";?>>O+</option>
                        <option value="O-" <?php if ($blood == "O-") echo "selected";?>>O-</option>
                    </select>
                </div>
                
                <div class="input-box">
                    <span class="details">Permanent Address</span>
                    <input type="text" placeholder="Permanent Address" name="pAddress" value="<?php echo $result['PerAddress'];?>"required>
                </div> 
                <!-- <div class="input-box">
                    <span class="details">Student Picture</span>
                    <input type="file" placeholder="Upload image" name="pic"  >
                </div> -->
                
                 <div  class="table-container">
                    <br>
                    <div class="details">Educational Qualification</div>
                    <table class="table-data">
                        <tr >
                            <td >
                               <label ></label> 
                            </td>
                            <td class="data">
                                University
                             </td>
                             
                             <td class="data">
                                Year
                             </td>
                             <td class="data">
                                Percentage 
                             </td>
                             <td class="data">
                                Stream 
                             </td>
                             
                        </tr>

                        <tr><td colspan="5"><hr></td></tr>
                        
                        <tr class="row">
                            <td class="data">
                               <label class="data">10th(Secondary) </label>
                            </td>
                            <td class="data">
                               <input type="text" placeholder="Board/University" name="BoardTen" value="<?php echo $result['Univ10'];?>" required> 
                             </td>
                             <td class="data">
                                <input type="number" placeholder="Year" name="YearTen"  value="<?php echo $result['Year10'];?>" required >
                             </td>
                             <td class="data">
                                <input type="number" placeholder="Percentage" name="PerTen"  value="<?php echo $result['Perc10'];?>" required>
                             </td>
                             <td class="data">
                                <input type="text" placeholder="Stream" name="StreamTen" value="<?php echo $result['Stream10'];?>"  required>
                             </td>
                        </tr>
                        
                        <tr><td colspan="5"><hr></td></tr>

                        <tr >
                            <td class="data">
                               <label class="data">12th(Secondary)</label> 
                            </td>
                            <td class="data">
                                <label>
                               <input type="text" placeholder="Board/University" name="BoardTwelve"  value="<?php echo $result['Univ12'];?>" required> </label>
                             </td>
                             <td class="data">
                             <input type="number" placeholder="Year" name="YearTwelve"  value="<?php echo $result['Year12'];?>" required>
                             </td>
                             <td class="data">
                                <input type="number" placeholder="Percentage" name="PerTwelve" value="<?php echo $result['Perc12'];?>"  required>
                             </td>
                             <td class="data">
                                <input type="text" placeholder="Stream" name="StreamTwelve" value="<?php echo $result['Stream12'];?>"  required>
                             </td>
                        </tr>

                        <tr><td colspan="5"><hr></td></tr>

                        

                        
                    </table>
                    
                </div>
                
               
            
        </div>
        <div class="submit-button">
            <input type="submit" name="update" value="update data">
        </div>
        </form>
    </div>
</body>
</html>

<?php
   

    error_reporting(E_ALL);
    ini_set('display_errors', 1);



    
    if(isset($_POST['update'])){

        

        $query = "update admission set Fname='$_POST[name]', Email='$_POST[email]', Course='$_POST[courses]', Father='$_POST[father]', Mother='$_POST[mother]', DOB='$_POST[dob]', Nationality='$_POST[nationality]', Gender='$_POST[gender]', Category='$_POST[category]', Blood='$_POST[blood]', PerAddress='$_POST[pAddress]', Univ10='$_POST[BoardTen]', Year10='$_POST[YearTen]', Perc10='$_POST[PerTen]', Stream10 ='$_POST[YearTwelve]', Univ12='$_POST[BoardTwelve]', Year12='$_POST[YearTwelve]', Perc12='$_POST[PerTwelve]', Stream12='$_POST[StreamTwelve]'where ID='$id'";

        $query_run = mysqli_query($conn, $query) or die(mysqli_error($conn));
        if($query_run){
            echo "<script>alert('Data Updated')</script>";
            
            
        }

        else{
            echo "<script>alert('Data Updation failed')</script>";
        }
    }

?>