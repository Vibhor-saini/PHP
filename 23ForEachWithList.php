<?php
$marks = [

    "krishna" => [
    "id" => 23,
    "name" => "sugan",
    "salary" => 2253
    ],

    "salman" => [
        "id" => 43,
        "name" => "vibhor",
        "salary" => 23653
    ],
    " kasim" => [
        "id" => 93,
        "name" => "gaurav",
        "salary" => 33953
    ],
    "kusum" => [
        "id" => 3,
        "name" => "Saurav",
        "salary" => 38953
    ]
    
];

echo "<table border='3px'>
       <tr>
       <th>ID</th>
       <th>Name</th>       
       <th>Salary</th>
       </tr>";
foreach($marks as list("id"=>$id,"name"=>$name,"salary"=>$salary)){

    echo "<tr>
    <td>$id</td>
    <td>$name</td>
    <td>$salary</th>
    </tr>";

}
    "</table>";





    
    $emp = [
        [1,"mohan", "manager" , 23009],
        [2,"rohan", "director" , 22009],
        [3,"sohan", "peon" , 27009],
        [4,"papa", "electrician" , 123009]
    ];

echo "<table border='3px'>
       <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Designation</th>
       <th>Salary</th>
       </tr>";
foreach($emp as list($id,$name,$desi,$salary)){
   
    
    echo "<tr>
     <td>$id</td>
     <td>$name</td>
     <td>$desi</td>
     <td>$salary</th>
     </tr>";

    }
    "</table>";


?>