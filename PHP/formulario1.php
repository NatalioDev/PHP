<html>
    <head>
        <title>Data entry form</title>
    </head>
    <body>
        <form method="post" action="formulario2.php">
            Enter your name:
            <input type="text" name="name">
            <br>
            <input type="number" name="number">
            <br><br>

            <!-- Formulario studies -->
            Study Form:
            <br><br>

            <input type="radio" name="radio2" value="study1">
            I don't have studies.
            <br>

            <input type="radio" name="radio2" value="study2">
            Primary studies.
            <br>

            <input type="radio" name="radio2" value="study3">
            Secondary studies.
            <br><br>

            <!-- Formulario operación -->
            Addition or Subtraction Form:
            <br><br>
            
            Enter the first value:
            <input type="text" name="value1">
            <br>
            
            Enter the second value:
            <input type="text" name="value2">
            <br><br>
            
            <input type="radio" name="radio1" value="addition">
            Addition
            <br>
            
            <input type="radio" name="radio1" value="subtraction">
            Subtraction
            <br><br>

            <!-- Formulario operación checkbox-->

            Addition or Subtraction Form (checkbox):
            <br><br>
            
            Enter the first value:
            <input type="text" name="checkboxValue1">
            <br>
            
            Enter the second value:
            <input type="text" name="checkboxValue2">
            <br><br>
            
            <input type="checkbox" name="check1">
            Addition
            <br>
            
            <input type="checkbox" name="check2">
            Subtraction
            <br><br>
            
            <!-- Formulario operación checkbox (Sporst)-->

            Select Soprts:
            <br>
            
            <input type="checkbox" name="futbol">
            Futbol
            <br>

            <input type="checkbox" name="basket">
            Basket
            <br>

            <input type="checkbox" name="tennis">
            Tennis
            <br>

            <input type="checkbox" name="voley">
            Voley

            <br><br>

            <!-- Formulario Control Select -->

            Formulario Control Select (Operation)
            <br>
            Enter first value:
            <input type="text" name="value_select1">
            <br>
            Enter second value:
            <input type="text" name="value_select2">
            <br>
            <select name="operation" >
                <option value="sum">Add up</option>
                <option value="subtract">Subtract</option>
            </select>
            <br>
            <!-- Form Control Select Salary -->
            <br>
            Monthly Income Selection Form:
            <select name="salary">
                <option value="salary1">
                    1-1000
                </option>
                <option value="salary2">
                    1001-3000
                </option>
                <option value="salary3">
                    >3000
                </option>
            </select>

            <br>
            <!-- Form Control TextArea -->
            <br>
            Form Control TextArea:
            <br>
            Enter your resume: <br>
            <textarea name="resume"></textarea>
            <br>

            <!-- Form Control TextArea -->
            <br>
            Form Control TextArea (Contract):
            <br>

            Complete Contract: <br>
            <textarea name="contract" rows="8" cols="80">En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
            </textarea>
            <br>
            
            <!-- Text file creation Form -->

            <br>
            Text file creation Form:
            <br>
            Enter your name:
            <input type="text" name="name2">
            <br>
            Comments:
            <br>
            <textarea name="comments" rows="10" cols="40"></textarea>
            <br>

            <!-- Pizza Order -->
            <br>
            Pizza Order:
            <br>
            Name:
            <input type="text" name="order_name">
            <br>
            Address:
            <input type="text" name="address">
            <br>
            Ham and cheese:
            <input type="checkbox" name="ham_cheese">
            <br>
            Quantity:
            <input type="number" name="quantity_HC">
            <br>
            <br>
            Napolitana:
            <input type="checkbox" name="napolitana">
            <br>
            Quantity:
            <input type="number" name="quantity_N">
            <br>
            <br>
            Muzzarella:
            <input type="checkbox" name="muzzarella">
            <br>
            Quantity:
            <input type="number" name="quantity_M">
            <br>

            <br>
            <input type="submit" value="Confirm">
            
        </form>
    </body>
</html>