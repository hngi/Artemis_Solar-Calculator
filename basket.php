<?php
$total_watts = 0;
$total_kilowatts = 0;
    if (isset($_SESSION['appliance_array'])) {
    ?>
    <div id="each_appliance" class="each_appliance" style="max-height:150px;!important; overflow-y:auto; !important;">
        <?php
        //$total_watts = 0;
        foreach ($_SESSION['appliance_array'] as $key => $value) {
            $appliance_watts = $value['Total Power Rating'];
//            echo "<tr id='appliances'>";
            echo "<input type='text' placeholder='{$value['Appliance']}' disabled>";
            echo "<input type='text' placeholder='{$value['Quantity']}' disabled>";
            echo "<input type='text' placeholder='{$value['Watts']}' disabled>";
            echo "<input type='text' placeholder='{$value['Hours']}' disabled>";
            echo "<a href='{$value['Appliance']}' id='removeBtn'><button><i class='fa fa-trash'>Remove</i></button></a><br>";

            $total_watts += $value['Hours'];
            $total_kilowatts = $total_watts/1000;
        }
        ?>
    </div>
    <?php
    if(isset($_GET["action"])){
        if($_GET["action"] == "delete")
        {
            foreach($_SESSION["appliance_array"] as $keys => $values)
            {
                if($values["Appliance"] == $_GET["id"])
                {
                    unset($_SESSION["appliance_array"][$keys]);
                }
            }
        }
    }
}

?>
