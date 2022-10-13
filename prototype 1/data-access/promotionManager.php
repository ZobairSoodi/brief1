<?php include 'conn.php' ?>

<?php
class PromotionManager extends Conn
{
    function insert($prom)
    {
        $insert_pro = "INSERT INTO promotion(nom) VALUES('" . $prom->get_nom() . "')";
        $this->conn()->query($insert_pro);
    }

    function search($prom)
    {
        $search_pro = "SELECT * FROM promotion WHERE nom LIKE '%".$prom->get_nom()."%'";
        $res = $this->conn()->query($search_pro);
        $rows = [];
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }
}
