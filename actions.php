<?php
    include_once('functions/bd_conn.php');
    if(!empty($_POST['busqueda'])){
        $busqueda = explode(" ", $_POST['busqueda']);
        $sql = "SELECT * FROM productos WHERE producto LIKE '%".$busqueda[0]."%'";
        for($i =1; $i < count($busqueda);$i++){
            if(!empty($busqueda[$i])){
                $sql .= "AND producto LIKE '%".$busqueda[$i]."%'";
            }
        }
        $sql .= "LIMIT 5"; 
        $result = mysqli_query($conn,$sql) or die (mysqli_error($conn));
        while($item = mysqli_fetch_assoc($result)){

            echo '
            <div class="product">
             <div  type="fyle" class="img">
                     <img src= "'.$item['img'].'" width="100px" float="left" >
                 </div>
                 </div>
                
                 <div class="title">
                     <h4>'.$item['producto'].' </h4> 
                 </div>
                 <div class="precio">
                 <span>'.$item['precio (und)'].'$ und </span>
             </div>
             <div class="seccion">
                 <span> producto para  '.$item['tipo'].' ubicado en la seccion  '.$item['seccion'].'</span>
             </div>
                 
            </div>';
           
        }
    }

?>