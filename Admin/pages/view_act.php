<?php
    //include"../connection.php";
    if (!isset($_SESSION)) {
        session_start();
    }

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    if ($act == "view") {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (empty($_SESSION['items'][$id])) {
                $_SESSION['items'][$id] = $id;
            }
            else {
                $_SESSION['items'][$id] = "";
                $_SESSION['items'][$id] = $id;
            }
        }
    } elseif ($act == "del") {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_SESSION['items'][$id])) {
              //unset digunakan untuk menghapus suatu session
                unset($_SESSION['items'][$id]);
                unset($_SESSION['items']);
            }
        }
    }
    ?>
    <script>
    alert('Data Terpilih <?php echo "$id" ?>');
    window.location.href="index.php?hal=transaksi ";
    </script><?php
}
 ?>
