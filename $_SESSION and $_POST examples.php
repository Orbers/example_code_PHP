<?php
    session_start();

    if (empty($_SESSION['total'])) {
        $_SESSION['total'] = 0;
    }

    if (empty($_SESSION['highest_total'])){
        $_SESSION['highest_total'] = 0;
    }

    $previous_total = $_SESSION['total'];

    if (isset($_POST['amount'])) {
        $_SESSION['total'] += $_POST['amount'];
    }

    if ($_SESSION['total'] > $_SESSION['highest_total']) {
        $_SESSION['highest_total'] = $_SESSION['total'];
    }

    if (isset($_POST['total_to_zero'])){
        $_SESSION['total'] = 0;
    }

?>


<p>Your Total was <?php echo $previous_total;?></p>
<form accept="" method="post">
    <button type="submit" name="total_to_zero">Back to Zero</button>
</form>

<form action="" method="post">
    <input name="amount" />
    <button type="submit">Submit</button>
</form>



<p>Your new total is <?php echo $_SESSION['total'];?><br></p>
<p>The highest total you have ever had was <?php echo $_SESSION['highest_total']; ?></p>
