<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3333333-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>

<?php include("config.php"); ?>

<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td ><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="2"></td>
      </tr>
      <tr>
        <td height="50" background="footer.jpg"><div align="center"><br />
                <?php if (isset($_SESSION['username'])) { ?><font color="#008000">
			</font>
                <a href="index.php"><font color="#00FF00">Home</font></a><font color="#00FF00"> - 
			</font> <a href="searchoption.php"><font color="#00FF00">Search</font></a><font color="#00FF00"> - 
			</font> <a href="privacy.php"><font color="#00FF00">Privacy Policy</font></a><font color="#00FF00"> - 
			</font> <a href="aboutus.php"><font color="#00FF00">About Us</font></a><font color="#00FF00"> - 
			</font> <a href="contactus.php"><font color="#00FF00">Contact Us</font></a><font color="#00FF00"> - 
			</font> <a href="successstory.php"><font color="#00FF00">Submit Success Stories</font></a><font color="#00FF00"> - 
			</font> <a href="help.php"><font color="#00FF00">Help</font></a><font color="#00FF00"> - 
			</font> <a href="sitemap.php"><font color="#00FF00">Sitemap</font></a><font color="#00FF00">
                <? } 
	else if (!isset($_SESSION['username'])) {
	?>
                </font>
                <a href="index.php"><font color="#00FF00">Home</font></a><font color="#00FF00"> - 
			</font> <a href="registration1.php"><font color="#00FF00">Register</font></a><font color="#00FF00"> - 
			</font> <a href="login.php"><font color="#00FF00">Login</font></a><font color="#00FF00"> - 
			</font> <a href="searchoption.php"><font color="#00FF00">Search</font></a><font color="#00FF00"> - 
			</font> <a href="privacy.php"><font color="#00FF00">Privacy Policy</font></a><font color="#00FF00"> - 
			</font> <a href="aboutus.php"><font color="#00FF00">About Us</font></a><font color="#00FF00"> - 
			</font> <a href="contactus.php"><font color="#00FF00">Contact Us</font></a><font color="#00FF00"> - 
			</font> <a href="successstory.php"><font color="#00FF00">Submit Success Stories</font></a><font color="#00FF00"> - 
			</font> <a href="help.php"><font color="#00FF00">Help</font></a><font color="#00FF00"> - 
			</font> <a href="sitemap.php"><font color="#00FF00">Sitemap</font></a><font color="#00FF00">
                <? } ?>                        
                      </font>                        
                      </div>
          <div>
              <div align="center">
                <table width="100%" height="30" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td valign="middle"><div align="center">
						<font color="#FFFFFF">All Rights 
						Reserved.© Copyright 2009 <?php echo $info['WebFriendlyname']; ?>. 
						</font> <a href="#" onclick="MM_openBrWindow('terms_con.php','terms','scrollbars=yes,width=500')">
						<font color="#FFFFFF">User   Agreement and Terms of Use</font></a><font color="#FFFFFF"><br>
						Site Designed &amp; Developed By
						</font>
						<a href="http://www.matrimonialphpscript.co.cc/">
						<font color="#FFFFFF">Narjis 
						Enterprise</font></a></div>
					<div align="center"><br />
                    </div></td>
                  </tr>
                </table>
              </div>
          </div></td>
      </tr>
    </table></td>
  </tr>
</table>