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

      <div style="font-family: monospace;">
        <p>
        <ul>
          <li style="font-weight: bold; ">Access<br />Origin</li>
        </ul>
        </p>
        <ul style="max-height: 600px; max-width: 66%; overflow: scroll;">
          <?php
            $fh = fopen("/var/log/apache2/access-snarc.log", "r");
            while (($line = fgets($fh)) !== false)
            {
          ?>
            <li style="">
              <?= $line ?><br />
              <?php
                $MARKER = '[client ';
                $ENDER = ']';
                $ippos = strpos($line, $MARKER);
                if ($ippos >= 0)
                {
                  $ippos += strlen($MARKER);
                  $ipend = strpos($line, $ENDER, $ippos);
                }
                else
                {
                  $ipend = $ippos;
                }

                if ($ipend <= $ippos)
                {
                  print("No client");
                }
                else
                {
                  $client = substr($line, $ippos, $ipend - $ippos);
                  $info = ((substr($client, 0, 2) == "::") ? false : geoip_record_by_name($client));
                  if (!$info)
                  {
                    print "no info";
                  }
                  else
                  {
                    print $info['city'] . ', ' . $info['region'] . ' ' . $info['postal_code'] . ' ' . $info['country_name'];
                    print " &nbsp; area code " . $info['area_code'] . "<br />";
                    print "geo (" . $info['latitude'] . ", " . $info['longitude'] . ")";
                  }
                }
              ?>
              <br />&nbsp;
            </li>
          <?php
            }
            fclose($fh);
          ?>
        </ul>
      </div>

      <div id="navigation" >
        <input type="submit" id="navhome" name="nav" value="home" formaction="/index.php" />
      </div>

    </form>
  </body>
</html>
