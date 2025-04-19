<?php
require 'connection.php';

function getUsers($conn)
{
    $sql="SELECT id,name,email FROM users ORDERED BY id DESC";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->get_result();
}
getUsers($conn);
?>

<?php if($result->num_row>0):?>
    <?php while($row=$result->fetch_assoc()); ?>
    <ul>
        <li>Id:<?php echo $row['id']?></li>
        <li>NAME:<?php echo $row['name']?></li>
        <li>EMAIL:<?php echo $row['email']?></li>
    </ul>
<?php endwhile;?>
<?php else:?>
    <p>No post found</p>
<?php endif;?>