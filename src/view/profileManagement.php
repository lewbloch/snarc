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
<?php
  $amateur = array('callsign' => 'KW2KW');
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Profile</title>
  </head>
  <body>
    <h1>S.N.A.R.C. Profile</h1>
    <form action="?action=manageProfile" id="manageProfileForm" name="manageProfileForm" 
          method="POST">
      <div>
        <label for="callsign">Callsign:</label>
        <input id="callsign" type="text" size="10" maxlength="10" 
               value="<?= $amateur['callsign'] ?>" />
      </div>

      <div id="navigation" >
        <input type="submit" id="navhome" name="nav" value="home" formaction="/index.php" />
      </div>
    </form>
  </body>
</html>
