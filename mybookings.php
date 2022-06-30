<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mybookings.css"/>
</head>
<body>

<form method="post" enctype="multipart/form-data">
    <div class="hero">
    <h1  id="one">FIND YOUR WAY</h1>
    <h1  id="three">PACKAGES BOOKED</h1>
    
    <br>
    <br>
 
    <div class="table-f">
    <table style="border: 2px solid black" rules ="all">
        <thead>
            <tr class="maker">
                <th>Name</th>
                <th>Number of Guest</th>
                <th>Package Booked</th>
                <th>Departure Date</th>
                <th>Cost per person</th>
            </tr>
        </thead>
    <tbody>
            <?php
            $j='';
            $name=$_POST['nname'];
            $conn = mysqli_connect("localhost", "root", "", "test");
            $selectquery="select * from package";
            $query=mysqli_query($conn, $selectquery);
            $numd= mysqli_num_rows($query);

            if($numd>0)
            {
            while( $row=mysqli_fetch_assoc($query))
                {
                    {

                        if($name==$row['fname'])
                        {
                    ?>
                    <tr class="makerr">
                        <td><?php echo $row['fname'];?></td> 
                        <td><?php echo $row['guest'];?></td> 
                        <td><?php echo $row['package'];?></td> 
                        <td><?php echo $row['dpdate'];?></td>
                        <td><?php echo $row['fee'];?></td>  
                    </tr>

                    <?php
                }
            }
        }
    }
    ?>
</tbody>
</table>
</div>
</div>
<br>
<h1  id="three"> HOTEL BOOKED</h1>
<br>
<div class="table-f">
    <table style="border: 2px solid black" rules ="all">
        <thead>
            <tr class="maker">
                <th>Name</th>
                <th>Number of Guest</th>
                <th>Hotel Booked</th>
                <th>Departure Date</th>
                <th>Room Type</th>
            </tr>
        </thead>
    <tbody>
            <?php
            $ja='';
            $namea=$_POST['nname'];
            $conna = mysqli_connect("localhost", "root", "", "test");
            $selectquerya="select * from booked";
            $querya=mysqli_query($conna, $selectquerya);
            $numda= mysqli_num_rows($querya);

            if($numda>0)
            {
            while( $row=mysqli_fetch_assoc($querya))
                {
                    {

                        if($namea==$row['fname'])
                        {
                    ?>
                    <tr class="makerr">
                        <td><?php echo $row['fname'];?></td> 
                        <td><?php echo $row['guest'];?></td> 
                        <td><?php echo $row['hotel'];?></td> 
                        <td><?php echo $row['dpdate'];?></td>
                        <td><?php echo $row['room'];?></td>  
                    </tr>

                    <?php
                }
            }
        }
    }
    ?>
</tbody>
</table>
</div>
</div>

<br>
<h1  id="three">RESERVATION </h1>
<br>
<div class="table-f">
    <table style="border: 2px solid black" rules ="all">
        <thead>
            <tr class="maker">
                <th>First Name</th>
                <th> Last Name</th>
                <th> Email</th>
                <th>Reservation Date</th>
                <th>Reservation Type</th>
            </tr>
        </thead>
    <tbody>
            <?php
            $jb='';
            $nameb=$_POST['nname'];
            $connb = mysqli_connect("localhost", "root", "", "test");
            $selectqueryb="select * from reserve";
            $queryb=mysqli_query($connb, $selectqueryb);
            $numdb= mysqli_num_rows($queryb);

            if($numdb>0)
            {
            while( $row=mysqli_fetch_assoc($queryb))
                {
                    {

                        if($nameb==$row['fname'])
                        {
                    ?>
                    <tr class="makerr">
                        <td><?php echo $row['fname'];?></td> 
                        <td><?php echo $row['lname'];?></td> 
                        <td><?php echo $row['email'];?></td> 
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['type'];?></td>  
                    </tr>

                    <?php
                }
            }
        }
    }
    ?>
</tbody>
</table>
</div>
</div>
</body>
</form>
</html>