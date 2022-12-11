

<?php
 $students = [
     ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
     ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
     ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
     ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
     ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
 ];

 echo "<table border='5'>";
 echo "<th>Name</th>","<th>email</th>","<th>status</th>";
 foreach($students as $key){
    if($key['status']=='Science'){
        echo "<tr style='color:red;'>";
    }else{
        echo "<tr>";
    }
        echo "<td>".$key['name'] ."<br>"."</td>";
        echo "<td>".$key['email'] ."<br>"."</td>";
        echo "<td>".$key['status'] ."<br>"."</td>";
        echo "</tr >";
}


 ?>
