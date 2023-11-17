<?php
function get_annonce() {
    require_once 'config.php';
        $annonce = [];
    
    
        $sql = "SELECT * FROM annonce  ;";
        $result = $link->query($sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = $result->fetch_assoc()) {
                $annonce[] = $row;
            }
        }else {
            echo "Aucune annonce trouvée.";
        }
        mysqli_free_result($result);
        mysqli_close($link);

    
    return $annonce;

}
