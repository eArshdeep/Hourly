<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Hourly</title>
    <meta charset="utf-8" />

    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="styles.css" />

    <!-- JS -->
    <script type="text/javascript" src="script.js"></script>
  
  </head>

  <body>
    <main>

      <h1>Hourly</h1>

      <p>Enter a hourly wage and daily deserible hours to work to
      get a complete rundown of your earnings.</p>

      <p>Select how many jobs to compare - </p>

      <!-- Drop down wheel to determine how many forms to display -->
      <select id="dropdown" onchange="getValue()">
          <option value="0">Select</option>
          <option value="1">Compare 1 Job</option>
          <option value="2">Compare 2 Job</option>
          <option value="3">Compare 3 Job</option>
          <option value="4">Compare 4 Job</option>
          <option value="5">Compare 5 Job</option>
      </select>

      <!-- Container for form inputs -->
      <div class="container" id="container">
        <form id="form" action="../Backend/main.php">
              <!-- divs in inputs for the form will go here -->
        </form>
      </div>

  </main>
</body>

</html>
