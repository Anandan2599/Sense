<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="Temperature, Pressure, Humidity" />
    <meta
      name="description"
      content="A dashboard for viewing Temperature, Pressure & Humidity from Raspberry Pi Sense Hat"
    />
    <meta name="author" content="Anandan Basu" />
    <!--<meta http-equiv="refresh" content="30">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="style.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />

    <title>Sense</title>
  </head>
  <body>
    <header>
      <h1>Sense</h1>
    </header>

    <hr width="50%" size="20" />

    <section>
      <table>
        <tr>
          <th>Temperature</th>
          <th>Pressure</th>
          <th>Humidity</th>
        </tr>
        
        <?php include('fetch.php'); ?>
        
        </table>
    </section>

    <!--
        <footer>
            <li>Anandan Basu</li>
            <li>Shritama Chatterjee</li>
            <span>Project By: </span>
            <li>Shubham Kumar</li>
            <li>Ritabrata Roy</li>
        </footer>
    -->
  </body>
</html>
