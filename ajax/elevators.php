<?php
require_once '../Classes/Achieve.php';
require_once '../FileConnection/Data_connection.php';
$class = new Achieve();
$text = $_POST['text'];
try {
    if ($text == "كل المشاريع") {
        $sql = "SELECT * FROM `elevators` ";
        $c = $class->coulam_name($Data_communication, "elevators");
        $array = array();
    } elseif ($text == "") {
        $sql = "SELECT * FROM `elevators` ";
        $c = $class->coulam_name($Data_communication, "elevators");
        $array = array();
    } else {
        $sql = "SELECT * FROM `elevators` where  ids = ? ";
        $c = $class->coulam_name($Data_communication, "elevators");
        $array = array($text);
    }
    $rows = $class->sql_feth($Data_communication, $sql, $array);
    foreach ($rows as $value):
        $id = $value[$c[0]];
        $statement1 = $value[$c[1]];
        $statement2 = $value[$c[2]];
        $statement3 = $value[$c[3]];
        ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sorting-item  b2b smm technology">
            <div class="case-item align-center mb60">
                <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                    <img src="cpanel/pages/layout/elevators/uplod/<?php echo $statement2; ?>" alt="our case">
                </div>
                <h5 class="case-item__title"><?php echo $statement1; ?></h5>
            </div>
        </div>
        <?php
    endforeach;
} catch (PDOException $exc) {
    echo $exc->getTraceAsString();
}
?>