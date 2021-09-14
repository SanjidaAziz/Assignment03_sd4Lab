<?php

$fileName = "upload/data.csv";

$file_handle = fopen($fileName, 'r');
while (!feof($file_handle)) {
    $data[] = fgetcsv($file_handle, 1024);
}
fclose($file_handle);

if (!empty($_POST)) {
    $new_csv = fopen($fileName, 'a');
    $list = array(
        0 => sizeof($data),
        1 => $_POST['username'],
        2 => $_POST['useremail'],
        3 => $_POST['userphone'],
        4 => $_POST['usermsg']
    );
    fputcsv($new_csv, $list);
    fclose($new_csv);

    $data = NULL;
    $msg = "Data Added Successfully";
    $file_handle = fopen($fileName, 'r');
    while (!feof($file_handle)) {
        $data[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/mystylesheet.css" />

    <title></title>
</head>

<body>
    <header></header>

    <main>

        <div class="container table-container">
			<div class="row ms-5 me-5 p-0 justify-content-center">
				<div class="col-12 bg-dark shadow-lg border-0 rounded p-1 pt-4  text-white text-center">
				<h2>All the responses</h2>
				</div>
				<div class="col-12 bg-dark shadow-lg border-0  p-3  text-white text-center">
					<?php
					if (isset($msg)) {
						echo $msg;
					} 
					?>
				</div>
			</div>
			
            <div class="row m-5 mt-0">

                <table class="table table-success table-striped shadow-lg">
                    <tr>
                        <th width="18%">Serial No</th>
                        <th width="18%">Name</th>
                        <th width="18%">Email</th>
                        <th width="18%">phone Number</th>
                        <th width="28%">Message</th>
                    </tr>
                    <?php
                    $serial = 0;
                    for ($x = 1; $x < (sizeof($data) - 1); $x += 1) {
                    ?>
                        <tr>
                            <td><?php echo $data[$x][0] ?></td>
                            <td><?php echo $data[$x][1] ?></td>
                            <td><?php echo $data[$x][2] ?></td>
                            <td><?php echo $data[$x][3] ?></td>
                            <td><?php echo $data[$x][4] ?></td>
                        </tr>
                    <?php } ?>

                </table>
                
            </div>
			<div class="row m-5 mt-0 justify-content-center" >
                    <form action="index.php" method="post" class="col-2 ">
                        <input type="submit" class="btn btn-outline-dark fw-bold" value="Back to Contact page" />
                    </form>
            </div>
        </div>
    </main>


    <footer></footer>

    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>