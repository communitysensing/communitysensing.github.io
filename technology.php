<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Technology : Common Sense &#8212; Mobile sensing for community action</title>
<link rel="stylesheet" href="includes/style.css" type="text/css">
</head>
<body id="pageTechnology">
<!-- $Id: technology.php,v 1.2 2010/12/21 23:56:48 pmaoki Exp $ -->
<div id="container">
  <? include("includes/header.html") ?>
  <div id="contentwrapper">
    <div id="mainbox">
      <h1>Technology</h1>
      <p>An increasing number of mobile devices have the potential to become personal environmental sensors.  To explore this potential, we are developing research prototypes that can collect environmental data.  Currently, we are focusing our efforts on air quality measurements.  Our prototypes can be carried by individuals or placed on community vehicles such as street sweepers.  We are also developing research software to allow people to share and analyze the data that has been collected.</p>
      <h2>Handheld Device</h2>
<img src="images/headheld-device-orange-sm.jpg" alt="Handheld device" width="300" height="200"> <img src="images/circuit-board-sm.jpg" alt="Handheld device circuit board" width="300" height="200">
      <p>We have developed a handheld device with a custom board that has carbon monoxide, ozone, NOx, temperature, and humidity sensors.  This board is based on the <a href="http://www.eecs.berkeley.edu/~prabal/projects/epic" target="_blank">EPIC mote platform</a>.  The handheld device also has a GPS/GPRS module so it can collect GPS data and upload all sensor data to our servers in real-time.  It also includes a Bluetooth module so it can connect to the user’s own mobile phone.  The handheld device is typically attached to a bag, backpack, or belt-loop.<br>
      </p>
      <h2>Vehicular Platform</h2>
<img src="images/Street-Sweeper-enclosure-sm.jpg" alt="Street Sweeper enclosure" width="300" height="200"> <img src="images/splitboard-frontbackphone-sm.jpg" alt="Splitboard" width="300" height="200">
      <p>We have developed a vehicular platform that is optimized for the particular challenges of municipal vehicles such as street sweepers.  This system includes commodity mobile phones that connect to custom boards: one board has carbon monoxide, ozone, NOx, temperature, and humidity sensors, while the other board contains the remaining electronics.  This split-board design allows us to isolate most of the electronics from exposure to the environment.  The mobile phones receive the data from the boards and send the data to our servers.<br>
      </p>
      <h2>Visualization and Discussion Software</h2>
<img src="images/pleasanton-drive-sm.jpg" alt="Screenshot of visualization" width="300" height="200"> <img src="images/citystreet-sm.jpg" alt="Screenshot of visualization" width="300" height="200">
      <p>We are developing Web-based and mobile applications which will provide live and historical data from sensing deployments.  We are developing visualization tools and online community features to allow people to explore and discuss the data and develop strategies for practical action.</p>
    </div>
    <? include("includes/rightnav.html") ?>
  </div>
  <? include("includes/footer.html") ?>
</div>
</body>
</html>
