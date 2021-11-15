<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <h2><font color="yellow">Insert into Pharmacy</h2>
<form action="insertpharmacy" method="get">
<font color="red">ID: <input type="text" name="phar_id"><br>
Name: <input type="text" name="name"><br>
Fax: <input type="text" name="fax"><br>
Address: <input type="text" name="address"><br>
<input type="submit">
</form>


<h2><font color="yellow">Insert into Employee</h2>
<form action="insertemployee" method="get">
<font color="red">ID: <input type="text" name="employee_id"><br>
Pharmacy ID: <input type="text" name="phar_id"><br>
Name: <input type="text" name="name"><br>
Shift Start: <input type="text" name="shift_start"><br>
Shift End: <input type="text" name="shift_end"><br>
<input type="submit">
</form>


<h2><font color="yellow">Insert into Drug Manufacturer</h2>
<form action="insertdrugmanu" method="get">
<font color="red">ID: <input type="text" name="customer_id"><br>
Address: <input type="text" name="address"><br>
Name: <input type="text" name="name"><br>
Start Date: <input type="text" name="start_date"><br>
End Date: <input type="text" name="end_date"><br>

<input type="submit">
</form>


<h2><font color="yellow">Insert into Drug</h2>
<form action="insertdrug" method="get">
<font color="red">ID: <input type="text" name="drug_id"><br>
Customer ID: <input type="text" name="cust_id"><br>
Name: <input type="text" name="trade_name"><br>
Price: <input type="text" name="price"><br>
<input type="submit">
</form>


<h2><font color="yellow">Insert into Doctor</h2>
<form action="insertdoctor" method="get">
<font color="red">ID: <input type="text" name="phys_id"><br>
Speciality: <input type="text" name="speciality"><br>
Name: <input type="text" name="name"><br>
Drug ID: <input type="text" name="drug_id"><br>
Purchase date: <input type="text" name="date"><br>
Quantity: <input type="text" name="uantity"><br>
<input type="submit">
</form>


<h2><font color="yellow">Insert into Patient</h2>
<form action="insertpatient" method="get">
<font color="red">ID: <input type="text" name="p_id"><br>
Doctor's ID: <input type="text" name="phys_id"><br>
Name: <input type="text" name="name"><br>
Sex: <input type="text" name="sex"><br>
Address: <input type="text" name="address"><br>
Contact_no: <input type="text" name="contact"><br>
<input type="submit">
</form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\LaraEcommerce\resources\views/insert.blade.php ENDPATH**/ ?>