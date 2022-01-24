<?php
    header('Content-Type: text/html; charset=UTF-8');
    echo "<pre>";print_r($_REQUEST); echo "</pre>";
    echo "<br/> O valor recibido do campo nome completo e: ".$_REQUEST["nomeCompleto"];
    echo "<br/> O valor recibido do campo nome usuario e : ".$_REQUEST["nomeUSR"];
    echo "<br/> O valor recibido do campo contrasinal e : ".$_REQUEST["contrasinal"];
    echo "<br/> O valor recibido do campo idade é : ".$_REQUEST["idade"];
    echo "<br/> O valor recibido do campo data de nacemento e: ".$_REQUEST["dNac"];
    echo "<br/> O valor recibido do campo email e: ".$_REQUEST["hobbies"];
    echo "<br/> O valor recibido do campo URL da paxina persoal e:".$_REQUEST["url"];
    echo "<br/> O valor recibido do campo IP do equipo e".$_REQUEST["ip"];
    echo "<br/> O valor recibido do campo descricion dos hobbies e:".$_REQUEST["hobbies"];
    echo "<br/> O valor recibido do campo recibir informacion e:".$_REQUEST["rcpInfo"];
    echo "<br/> O valor recibido do campo sexo e:".$_REQUEST["sexo"];
    echo "<br/> Os valores recibido do menu linguas extranxeiras son: <pre>";
    print_r($_REQUEST["linguasEs"]);
    echo "</pre>";
    echo "<br/> O nome e o tamaño do arquivo recibido no campo curriculo son ".$_FILES["curriculo"]["name"]." e "
    .$_FILES["curriculo"]["size"]." bytes";
    move_uploaded_file($_FILES["curriculo"]["tmp_name"], "subi-dos/".$_FILES["curriculo"]["name"]);
?>