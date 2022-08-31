<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>meet tracker</title>
  <link rel="stylesheet" href="./styles/main.css">
</head>

<body>
  <h1>Meet Tracker</h1>
  <hr>
  <section class="table-section">

    <!-- date table  -->
    <table>
      <thead>
        <tr>
          <th colspan="2">Date</th>
        </tr>
        <tr>
          <th>created</th>
          <th>updated</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>05/08/2022</td>
          <td>31/08/2022</td>
        </tr>
      </tbody>
    </table>

    <!-- recruter table -->
    <table class="show-table">
      <thead>
        <tr>
          <th class="col-not-fixed" colspan="4">recruter</th>
        </tr>
        <tr>
          <th>name</th>
          <th>companies</th>
          <th>phone</th>
          <th>mail</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tiphany</td>
          <td>ESM</td>
          <td>06060606</td>
          <td>tiphany@gmail.com</td>
        </tr>
      </tbody>
    </table>

    <!-- client table -->
    <table class="show-table">
      <thead>
        <tr>
          <th colspan="3">Client</th>
        </tr>
        <tr>
          <th>client info</th>
          <th>mission duration</th>
          <th>more info</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>leBoncoin</td>
          <td>1 year</td>
          <td><a href="#">see more</a></td>
        </tr>
      </tbody>
    </table>

    <!-- process table -->
    <table class="show-table">
      <thead>
        <tr>
          <th colspan="3">process</th>
        </tr>
        <tr>
          <th>process step</th>
          <th>process statu</th>
          <th>appointments</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>technical meeting</td>
          <td>on going</td>
          <td>24/09/1990</td>
        </tr>
      </tbody>
    </table>
    
    <!-- action table -->
    <table class="show-table">
      <thead>
        <tr>
          <th colspan="3">Action</th>
        </tr>
        <tr>
          <th>show</th>
          <th>edit</th>
          <th>delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="#">show</a></td>
          <td><a href="#">edit</a></td>
          <td><a href="#">delete</a></td>
        </tr>
      </tbody>
    </table>
  </section>


</body>

</html>