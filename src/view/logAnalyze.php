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
      <title>S.N.A.R.C. - the Secret Nonexistent Amateur Radio Club</title>
  </head>

  <body>
    <form id='logAnalyzeForm' title="S.N.A.R.C. log analysis page" method='POST'
          enctype="application/x-www-form-urlencoded"
          action='/view/logAnalyze.php' >

      <div id="navigation" >
        <input type="submit" id="navhome" name="nav" value="home" formaction="/index.php" />
      </div>

      <div>
        <ul>
          <?php
            $fh = fopen("/var/log/apache2/access-snarc.log", "r");
            while (($line = fgets($fh)) !== false)
            {
          ?>
              <li><?= $line ?></li>
          <?php
            }
            fclose($fh);
          ?>
        </ul>
      </div>

    </form>
  </body>
</html>
