<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Hourly</title>
    <meta charset="utf-8" />

    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="styles.css" />
  
  </head>

  <body>
    <main>

      <h1>Hourly</h1>

      <table>
        <tr>
          <th class="title_col">Company</th>
          <?php output_company_names(); ?>
        </tr>

        <tr>
          <th class="title_col">Wage</th>
          <?php output_wage(); ?>
        </tr>

        <tr>
          <th class="title_col">Daily Earnings</th>
          <?php output_daily_earnings(); ?>
        </tr>

        <tr>
          <th class="title_col">Weekly Earnings</th>
          <?php output_weekly_earnings(); ?>
        </tr>

        <tr>
          <th class="title_col">Monthly Earnings</th>
          <?php output_monthly_earnings(); ?>
        </tr>

        <tr>
          <th class="title_col">Salary</th>
          <?php output_salary(); ?>
        </tr>
      </table>

      <a href="../Frontend/main.php">BACK</a>

  </main>
</body>

</html>

<?php 

  // LOGIC FOR BACKEND CALCULATIONS AND FUNCTIONS GO HERE

  // function that outputs a paramater "$value" as table column
  function output_table_column($value){
    echo "<th>$value</th>";
  }

  // takes a value and returns it with a dollar sign in front of the value
  function add_dollar_sign($value){
    $return = "$" . $value;
    return $return;
  }
  
  // these functions output a variet of functions
  
  function output_company_names(){
    foreach($_GET["name"] as $name){
      output_table_column($name);
    }
  }

  function output_wage(){
    foreach($_GET["wage"] as $wage){
      output_table_column(add_dollar_sign($wage));
    }
  }

  function output_daily_earnings(){
    foreach($_GET["wage"] as $index => $wage){
      $daily_earnings = $_GET["hours"][$index] * $wage;
      output_table_column(add_dollar_sign($daily_earnings));
    }
  }

  function output_weekly_earnings(){
    foreach($_GET["wage"] as $index => $wage){
      $weekly_earnings = $_GET["hours"][$index] * $wage * 5;
      output_table_column(add_dollar_sign($weekly_earnings));
    }
  }

  function output_monthly_earnings(){
    foreach($_GET["wage"] as $index => $wage){
      $monthly_earnings = $_GET["hours"][$index] * $wage * 5 * 4;
      output_table_column(add_dollar_sign($monthly_earnings));
    }
  }

  function output_salary(){
    foreach($_GET["wage"] as $index => $wage){
      $salary = $_GET["hours"][$index] * $wage * 5 * 4 * 12;
      output_table_column(add_dollar_sign($salary));
    }
  }

  /*function convert_salary(){
    foreach($_GET["wage"] as $index => $wage){
      if ($_GET["type"][$index] == "salary"){
        $new_wage = number_format($wage/1920, "2");
        $_GET["wage"][$index] = $new_wage;

        $_GET["hours"][$index] = 8;
      }
    }
  }*/


?>
