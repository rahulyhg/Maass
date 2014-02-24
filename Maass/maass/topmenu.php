<?php
session_start();
if(!session_is_registered(myusername))
{
?>		

		<!-- MEMBER NOT LOGGED IN -->
		<p>
		<img src="pics/menu.jpg" width="780" height="37" border="0" usemap="#MapMap" />
		  <map name="MapMap" id="MapMap">
		    <area shape="rect" coords="8, 4, 51, 32" href="index.php" />
            <area shape="rect" coords="69, 6, 146, 33" href="registration1.php" />
            <area shape="rect" coords="168, 5, 255, 32" href="login.php" />
            <area shape="rect" coords="275, 5, 369, 33" href="searchoption.php" />
            <area shape="rect" coords="394, 4, 472, 34" href="membership.php" />
            <area shape="rect" coords="487, 5, 535, 34" href="help.php" />
            <area shape="rect" coords="549, 5, 651, 32" href="successstory.php" />
            <area shape="rect" coords="669, 4, 771, 32" href="paymentoptions.php" />
          </map>
		  <?
}
else
{
?>
	      <!-- MEMBER LOGGED IN -->
	      <img src="pics/menu_login.jpg" width="780" height="37" border="0" usemap="#Map3Map" />
	      <map name="Map3Map" id="Map3Map">
	        <area shape="rect" coords="15, 3, 101, 35" href="mymatri.php" />
	        <area shape="rect" coords="125, 4, 268, 35" href="searchoption.php" />
	        <area shape="rect" coords="287, 0, 437, 34" href="myint.php" />
	        <area shape="rect" coords="451, 4, 548, 34" href="mymessage.php" />
	        <area shape="rect" coords="565, 4, 691, 35" href="membership.php" />
	        <area shape="rect" coords="707, 5, 772, 34" href="logout.php" />
          </map>
	      <?
}
?>
		</p>		
		