<!DOCTYPE html>
<!--
Copyright © 2015, Lewis S. Bloch. All rights reserved.

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
      <title>S.N.A.R.C. - the Secret Nonexistent Amateur Radio Club</title>
  </head>

  <body>
    <?php
    // put your code here
    ?>

    <form id='indexForm' title="S.N.A.R.C. home page" method='POST'
          enctype="application/x-www-form-urlencoded"
          action='index.php' >

      <div>
        <h1>Welcome to S.N.A.R.C., the Secret Nonexistent Amateur Radio Club.</h1>
      </div>

      <div id="mainMenu">
        <h2>Snarky projects.</h2>
        <ul>
          <li>
            <a href="/view/maraudersMap.php" >Marauder's Map</a>
          </li>
        </ul>

        <h2>Administration</h2>
        <ul>
          <li><a href="/view/profileManagement.php" >Manage Profile</a></li>
        </ul>
      </div>

      <div id="navigation" >
        <input type="submit" id="navhome" name="nav" value="home" />
        <input type="submit" id="naverror" name="nav" value="error" formaction="error.php" />
      </div>

    </form>
  </body>
</html>
