<?php include("config.php"); ?>
<? 
// Database Connection 
include 'dbconnect.php'; 

$StrGender = $_GET['gender'];
$StrSAge = $_GET['age1'];
$StrEAge = $_GET['age2'];
$Strkw = $_GET['txtkey'];
$StrPhoto = $_GET['photo'];
$search = $_GET['txtkey'];

// remove any code from the search term
$search = strip_tags($search);

//escape all data to prevent mysql injection attacks
$search = mysql_real_escape_string($search);




if(!isset($_GET['page'])){ 
    $page = 1; 
} else { 
    $page = $_GET['page']; 
} 

// Define the number of results per page 
$max_results = 10; 

// Figure out the limit for the query based 
// on the current page number. 
$from = (($page * $max_results) - $max_results);  

if($StrPhoto=="photo")
{
$sql = mysql_query("SELECT *,Left(Profile,130) as Profile1,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' AND MATCH(Education,Educationdetails,Occupation,Employedin,Religion,Caste,Subcaste,Language,Country,State,City,Residencystatus,Profile) AGAINST('%$search*' IN BOOLEAN MODE) LIMIT $from, $max_results "); 
}	
else 
{
$sql = mysql_query("SELECT *,Left(Profile,130) as Profile1,date_format(Lastlogin,'%d-%M-%Y') as 	
		lastlogindate FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Status <> 'InActive'  AND MATCH (Education,Educationdetails,Occupation,Employedin,Religion,Caste,Subcaste,Language,Country,State,City,Residencystatus,Profile) AGAINST('%$search*' IN  BOOLEAN MODE) LIMIT $from, $max_results "); 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="Description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY class="body">



<DIV align="center">
<TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="BlueTborder">
          <!--DWLayoutTable-->
          <TR>
            <TD height="37" colspan="2">
			<?php include("header.php");?>
			</TD>
    </TR>
          <TR>
            
    </TR>
          <TR>
            <TD  colspan="2"><?php include("topmenu.php");?></TD>
          </TR>
          <TR bgcolor="#FFFFFF">
            <TD colspan="2" valign="top">
			  

  
<!-- START LEFT PART -->  
<DIV align="center">
<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD width="180" height="303" valign="top" bgcolor="#F5F5F5">
<?php include("left.php");?>
<?php include("leftbanner.php");?>
</TD>
<TD valign="top"><br>
      <table width="97%" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%" valign="bottom"><img src="pics/serarch-top.gif" width="582" height="32" /></td>
        </tr>
        <tr>
          <td background="pics/search-mid.gif"><table width="560" border="0" align="center" cellpadding="0" cellspacing="2">
            <tr>
              <td width="187" class="bodyg"><div align="left"><strong>Gender : <?php echo $StrGender; ?></strong></div></td>
              <td width="171" class="bodyg"><div align="left"><strong>Age : </strong><strong><?php echo $StrSAge; ?></strong> - <strong><?php echo $StrEAge; ?></strong></div></td>
              <td width="182" class="bodyg"><div align="left"><strong>Photo : </strong><strong>
              <?php if($StrPhoto =="photo") 
			  {
			   echo $StrPhoto;
			   }
			   else
			   {
			   echo "Show all" ;
			   }
			   ?>
              </strong></div></td>
            </tr>
            <tr>
              <td colspan="3" class="bodyg"><div align="left"><strong>Keyword : </strong><strong><?php echo $Strkw; ?></strong></div>                <div align="left"></div></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="18" background="pics/search-bot.gif"><table width="540" height="15" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="243">&nbsp;</td>
              <td width="88"><div align="center"><a href="javascript:history.go(-1);">Refine Search </a></div></td>
              <td width="63">&nbsp;</td>
              <td width="91"><div align="center"><a href="adv_search.php">Regular Search </a></div></td>
              <td width="55">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="37%">&nbsp;</td>
          </tr>
      </table>
       
      <table width="97%" border="0" align="center" cellpadding="3" cellspacing="3">
        <tr>
	<?php
// Figure out the total number of results in DB: 
//= mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register"),0); 

if($StrPhoto=="photo" )
{
$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Status <> 'InActive' AND Photo1 <> 'nophoto.gif' AND MATCH(Education,Educationdetails,Occupation,Employedin,Religion,Caste,Subcaste,Language,Country,State,City,Residencystatus,Profile) AGAINST('%$search*' IN BOOLEAN MODE)  "),0); 

}	
else 
{
$total_results  = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM register where Gender ='$StrGender' AND Age Between '$StrSAge' AND '$StrEAge' AND Status <> 'InActive'  AND MATCH(Education,Educationdetails,Occupation,Employedin,Religion,Caste,Subcaste,Language,Country,State,City,Residencystatus,Profile) AGAINST('%$search*' IN BOOLEAN MODE)   "),0); 
}
	
	if($total_results ==0)
	{
	print "<script>";
    print "self.location='searchoption.php?Action=refine';"; // Comment this line if you don't want to redirect
    print "</script>";
	}
	
// Figure out the total number of pages. Always round up using ceil() 
$total_pages = ceil($total_results / $max_results);

?>
	
		
		
          <td><div align="left">
 
 <span class="Partext1"></span> <?php echo " " . $total_results ." Profiles Found" ?> </div></td>
          <td><div align="right"><span class="Partext1">
		  
		  
<?php
 
$url = "txtGender=$StrGender&txtSAge=$StrSAge&txtEAge=$StrEAge&religion=$StrReligion&caste=$StrCaste&txtphoto=$StrPhoto";

//Paging info
echo "Page ";
for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
echo "$i "; 
} else { 
echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i&$url\">$i</a>  ] "; 
} 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
//echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev&$url\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 

echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$url\">Next</a>"; 

//echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$var1=".urlencode($SearchString) ."\">Next</a>";
 
//echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&SearchString=.urlencode($SearchString) .\">Next</a>"; 
//$Nav = "<A HREF=\"Search.php?page=" . $i . "page=$next&SearchString=" .urlencode($SearchString) . "\">Next</A>"; 
} 
?>
          </span></div></td>
        </tr>
      </table>
      <table width="97%" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><?php require 'results.php'; ?></td>
          </tr>
      </table>
      <table width="97%" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td><div align="right"><span class="Partext1">
              <?php

//Paging info
echo "Page ";


for($i = 1; $i <= $total_pages; $i++){ 
if(($page) == $i){ 
echo "$i "; 
} else { 







echo "&nbsp;[ <a href=\"".$_SERVER['PHP_SELF']."?page=$i&$url\">$i</a>  ] "; 


//echo  " &nbsp;[ <A HREF=\"".$_SERVER['PHP_SELF']."?page=" . $i . "&StrGender=" .urlencode($StrGender) . "&StrSAge=" .urlencode($StrSAge) .  "&StrEAge=" .urlencode($StrEAge) .  "&StrReligion=" .urlencode($StrReligion) . "&StrCaste=" .urlencode($StrCaste) . "&StrPhoto=" .urlencode($StrPhoto) . "\">$i</A>  ] ";


} 
} 


echo " of ". $total_pages ; 


// Build Previous Link 
if($page > 1){ 
$prev = ($page - 1); 
//echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev&$url\"> Previous</a> &nbsp;|";
} 

// Build Next Link 
if($page < $total_pages){ 
$next = ($page + 1); 
echo "&nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$next&$url\">Next</a>"; 
} 
?>
          </span></div></td>
        </tr>
      </table></TD>
</TR>
</TABLE>

</DIV>
<!-- END LEFT PART -->	


		  
		    </TD>
    </TR>
			
          <TR>
            <TD><?php include("footer.php");?></TD>
          </TR>
          <TR>
          
    </TR>
          <TR>
         
          </TR>
  </TABLE>
  
</DIV>




</BODY>
</HTML>
