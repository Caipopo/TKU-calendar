<?php

//insert.php

$connect =new PDO('mysql: host=localhost; dbname=mysql','calendar','');

if(isset($_POST["title"]))
{
    $query = "
    INSERT INTO events
    (title, start_event, end_event)
    VALUES (:title, :start _event, end _event)
    ";
    $statement = $connect->prepare ($query) ;
    $statement ->execute(
        array(
            ':title'=> $_POST[ 'title'],
            ':start event'=>$_POST[ 'start'],
            ':end event'=>$_POST [ 'end' ]
        )
        );
}
?>