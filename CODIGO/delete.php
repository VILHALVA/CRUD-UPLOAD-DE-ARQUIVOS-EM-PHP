<?php
include 'config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT file_name FROM files WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $filePath = 'uploads/' . $row['file_name'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $sql = "DELETE FROM files WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Arquivo deletado com sucesso.'); setTimeout(function(){ window.location.href = 'index.php'; }, 1000);</script>";
            exit();
        } else {
            echo "Erro ao deletar o arquivo.";
        }
    } else {
        echo "Arquivo não encontrado.";
    }
}
?>
