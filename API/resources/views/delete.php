<?php 
    require_once("../Model/Connection.class.php");
    require_once("../Model/Task.class.php");
    require_once("../Controller/TaskDAO.class.php");

    header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $DAOcontroller = new TaskDAO();

        $DAOcontroller->delete($id);
    } else {
        echo "Erro inserir o GET :id";
    }

?>