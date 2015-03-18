<!DOCTYPE html>
<!--
Copyright © 2015 Lewis S. Bloch. All rights reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<html>
  <head>
    <meta charset="UTF-8" />
    <title>S.N.A.R.C. Marauder's Map</title>
  </head>
  <body>
    <?php
    // put your code here
    ?>
    <div id='maraudersMapBanner'
        style='background-image: url("http://fc05.deviantart.net/fs48/i/2009/218/1/3/The_Marauders_Map_Inside_by_Rob234111.jpg");
          background-color: cornsilk; background-repeat: repeat; 
          marquee-style: slide; marquee-speed: slow; marquee-play-count: 2;
          '
        >
      <p><small>
        <a href="http://rob234111.deviantart.com/art/The-Marauders-Map-Inside-132312571">
          The Marauders Map Inside</a> by <a href="http://rob234111.deviantart.com/">Rob234111</a>
        <br />
        Licensed under a Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 License.
        Some rights reserved.
      </small></p>

      <p style='color: springgreen; font-weight: bold; font-size: x-large; margin: 36px;' >
        The S.N.A.R.C. Marauder's Map project
      </p>
    </div>

    <form id='maraudersMapForm' title="S.N.A.R.C. Marauder's Map" method='POST'
          enctype="application/x-www-form-urlencoded"
          action='maraudersMap.php' 
          >

      <div>
      </div>

      <div id="maraudersMain">
        <h2>Introduction</h2>
        <p style="font-family: serif;">
          Marauder's Map, after the infamous magical artifact in the 
          <span style="font-style: italic;">Harry Potter</span> novels and movies, is a spell that 
          displays the locations of interesting signals.
        </p>
      </div>

      <div id="maraudersReferences">
        <h2>References</h2>
        <ul>
          <li>
            <a href="http://digitalcommons.calpoly.edu/theses/889/">
              Radio Direction Finding Network Receiver Design for Low-cost Public Service Applications
            </a>
            <p>
              Marcel Stieber's, AI6MS, thesis on building low-cost networks, suitable for ham radio
              and community services, to locate signal sources such as spurious transmissions using 
              TDOA (time difference of arrival).
            </p>
          </li>

          <li>
            <a href="http://oai.dtic.mil/oai/oai?verb=getRecord&metadataPrefix=html&identifier=ADA471571">
              Passive Geolocation of Low-Power Emitters in Urban Environments Using TDOA
            </a>
            <p>
              A link to a PDF of 
              <span style="font-style: italic;">
                <a href="http://oai.dtic.mil/oai/oai?verb=getRecord&metadataPrefix=html&identifier=ADA471571">
                  Passive Geolocation of Low-Power Emitters in Urban Environments Using TDOA
                </a>
              </span>
              a thesis by Myrna B. Montminy, Captain, USAF, on how to use TDOA (time difference of 
              arrival) to locate low-power signal sources such as key fobs and cell phones despite
              multipath reception and other adverse conditions.
            </p>
          </li>
        </ul>
      </div>

      <div id="navigation" >
        <input type="submit" id="navhome" name="nav" value="home" formaction="/index.php" />
      </div>

    </form>
  </body>
</html>
