<?php
$emp = [
 [0,"vibhu",23],
 [1,"sugan",24],
 [2,"gaurav",25],
 [3,"rupa",26],
 [4,"anu",27]
];

echo "<pre>";
print_r($emp);
echo "</pre>";

// echo $emp[0][0]." ";
// echo $emp[0][1]." ";
// echo $emp[0][2];

// echo "<br>";

// echo $emp[1][0]." ";
// echo $emp[1][1]." ";
// echo $emp[1][2];

// echo "<br>";

// echo $emp[2][0]." ";
// echo $emp[2][1]." ";
// echo $emp[2][2];

// for($row=0;$row<=4;$row++){
//     for($col=0;$col<3;$col++){
//         echo $emp[$row][$col];
//     }

//     echo "<br>";
// }
echo "<table border='5px' cellpadding='5px'>";
echo "<tr>
     <th>ID</th>
     <th>NAME</th>
     <th>AGE</th>
    </tr>";

foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td>".$v2."<td>";
    }
    echo "<tr>";
}
echo "<table>";
?>