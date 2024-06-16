<html>
    <head>
        <title>Form data capture</title>
    </head>
    <body>
        <?php

            // Form Name and Age

            $name = $_REQUEST['name'];

            echo "The name entered is: ";
            echo $name;
            echo "<br>";

            $age = $_REQUEST['number'];
            
            if ($age >= 18) {
                echo "You are of legal age with $age years.";
            }else{
                echo "You are under 18 years old. ";
            }

            echo "<br><br>";

            // Form Operation

            $select = $_REQUEST['radio1'];
            $value1 = $_REQUEST['value1'];
            $value2 = $_REQUEST['value2'];

            if ($select == "addition") {
                $addition = $value1 + $value2;
                echo "The result of the sum is: ". $addition;
            }elseif ($select == "subtraction") {
                $subtraction = $value1 - $value2;
                echo "The result of the subtraction is: " . $subtraction;
            }

            echo "<br><br>";
        
            // Form Study

            $select2 = $_REQUEST['radio2'];

            if ($select2 == "study1") {
                echo "$name you have no studies.";
            }elseif ($select2 == "study2") {
                echo "$name you have primary education.";
            }else{
                echo "$name you have secondary education.";
            }

            // Form Checkbox Operation

            echo "<br><br>";
            echo "Result Form Checkbox: <br>";

            $value_check1 = $_REQUEST['checkboxValue1'];
            $value_check2 = $_REQUEST['checkboxValue2'];

            if (isset ($_REQUEST['check1'])) {
                $sum = $value_check1 + $value_check2;
                echo "The result of the sum is: ". $sum;
                echo "<br>";
            }
            if (isset($_REQUEST['check2'])) {
                $subtraction = $value_check1 - $value_check2;
                echo "The result of the subtraction is: ". $subtraction;
            }

            // Form Sports Checkbox:

            echo "<br><br>";
            echo "Result Form Checkbox (Sports): <br>";

            $amount = 0;

            if (isset($_REQUEST['futbol'])) {
                $amount++;
            }

            if (isset($_REQUEST['basket'])) {
                $amount++;
                
            }

            if (isset($_REQUEST['tennis'])) {
                $amount++;
            }

            if (isset($_REQUEST['voley'])) {
                $amount++;
            }

            echo "$name <br>";
            echo "Practice $amount sports";

            // Formulario Control Select (Operation)

            echo "<br><br>";
            echo "Result Form Control Select. <br>";

            $value_select1 = $_REQUEST['value_select1'];
            $value_select2 = $_REQUEST['value_select2'];

            if ($_REQUEST['operation'] == "sum") {
                $sum = $value_select1 + $value_select2;
                echo "The result of the sum is: $sum";
            }elseif ($_REQUEST['operation'] == "subtract") {
                $subtraction = $value_select1 - $value_select2;
                echo "The result of the subtraction is: $subtraction";
            }

            // Form Control Select Salary
            echo "<br><br>";
            echo "Result Form Control Select. (Salary) <br>";

            

            if ($_REQUEST['salary'] == 'salary1' || $_REQUEST['salary'] == "salary2" ) {
                echo "You do not have to pay income taxes.";
            }elseif ($_REQUEST['salary'] == "salary3") {
                echo "You must pay income taxes.";
            }

            // Form Control TextArea
            echo "<br><br>";
            echo "Result Form TextArea: <br>";

            $resume = $_REQUEST['resume'];

            echo "The curriculum: $resume";

            // Form Control TextArea (Contract)
            echo "<br><br>";
            $contract = $_REQUEST['contract'];
            
            echo "Contract: <br> $contract";


            // Text file creation Form
            echo "<br>";
            $archive = fopen("data.txt", "a") or die("Problems in creation");
            fputs($archive, $_REQUEST['name2']);
            fputs($archive, "\n");
            fputs($archive, $_REQUEST['comments']);
            fputs($archive, "\n");
            fputs($archive, "--------------------------------------------------------");
            fputs($archive, "\n");
            fclose($archive);

            echo "<br>";

            echo "Data was loaded successfully.";

            echo "<br>";

            // Pizza order

            echo "<br>";
            $archive = fopen("order.txt", "a") or die("Problems in creation");
            fputs($archive, $_REQUEST['order_name']);
            fputs($archive, "\n");
            fputs($archive, $_REQUEST['address']);
            fputs($archive, "\n");
            fputs($archive, "Address:");
            fputs($archive, $_REQUEST['address']);
            fputs($archive, "\n");
            
            if (isset($_REQUEST['ham_cheese'])) {
                fputs($archive, "Amount of Ham and Cheese: ");
                fputs($archive, $_REQUEST['quantity_HC']);
                fputs($archive, "\n");
            };

            if (isset($_REQUEST['napolitana'])) {
                fputs($archive, "Amount Napolitana: ");
                fputs($archive, $_REQUEST['quantity_N']);
                fputs($archive, "\n");
            };

            if (isset($_REQUEST['muzzarella'])) {
                fputs($archive, "Amount Muzzarella: ");
                fputs($archive, $_REQUEST['quantity_M']);
                fputs($archive, "\n");
            };
            fputs($archive, "--------------------------------------------------------");
            fputs($archive, "\n");
            fclose($archive);


            echo "Order was loaded successfully.";

            echo "<br>";

            // Reading data file

            $archiveOpen = fopen("order.txt", "r") or die ("File could not be opened.");

            echo "<br>";
            echo "Reading data file: <br>";

            while (!feof($archiveOpen)) {
                $line = fgets($archiveOpen);
                $jumpLine = nl2br($line);
                echo $jumpLine;
            }

            fclose($archiveOpen);

        ?>
    </body>
</html>