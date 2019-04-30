
<?php 

    // Hämtar begärt Horoskop
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == 'GET') {
    if(isset($_SESSION['horoscope'])) {
        $horos = $_SESSION['horoscope'];
        
        echo json_encode($horos);
    } else {
        echo json_encode('');
    }
}
?>