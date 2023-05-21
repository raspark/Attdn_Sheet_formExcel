<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* table,td, th{
    border:1px solid black;
    border-collapse: collapse;
  } */
    </style>
</head>

<body>

    <table border="1" cellspacing="0" class="table  table-striped " id="emp-data">
        <thead>

            <tr>
                <th>Id</th>
                <th>Timing</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
                <th>21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th>27</th>
                <th>28</th>
                <th>29</th>
                <th>30</th>
                
            </tr>
            
        </thead>

        <?php
        include "dbconfig.php";
        $query2 = "SELECT * from emp_table";
        $result = mysqli_query($conn, $query2);
        foreach ($result as $row) {
            echo $row['Id'] . "<br>";

        }

        $row = mysqli_query($conn, $query2);
        ?>




        <?php
        include "dbconfig.php";
        $query = "SELECT * FROM attendance where id=1";

        //     $sql="SELECT Id, Name FROM emp_table";
        
        //    $result = mysqli_query($conn, $sql);
//      foreach($result as $row) {
//          echo  $row['Id'];
        
        //     }
        
        $row = mysqli_query($conn, $query);
        ?>
        <td>1</td>
        <td>Intime
            <hr>
            Outtime
        </td>
        <?php
        while ($data = mysqli_fetch_array($row)) {
            ?>


            <td>
                <?= $data['time_in'] ?>
                <hr>
                <?= $data['time_out'] ?>
            </td>
            



            <?php
        }
        ?>
        
        <?php
        include "dbconfig.php";
        $query = "SELECT * FROM attendance where id=2";

        //     $sql="SELECT Id, Name FROM emp_table";
        
        //    $result = mysqli_query($conn, $sql);
//      foreach($result as $row) {
//          echo  $row['Id'];
        
        //     }
        
        $row = mysqli_query($conn, $query);
        ?>

        <td>2</td>
        <td>Intime
            <hr>
            Outtime
        </td>
        <?php
        while ($data = mysqli_fetch_array($row)) {
            ?>


            <td>
                <?= $data['time_in'] ?>
                <hr>
                <?= $data['time_out'] ?>
            </td>




            <?php
        }
        ?>
    </table>
</body>

</html>