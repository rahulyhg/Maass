<?php
error_reporting(0);
session_start();

	
	// Education and Occupation 
	$_SESSION['Education']= strip_tags($_POST['txtEdu']);
	$_SESSION['EduDetails']= strip_tags($_POST['txtEdudetails']);
	$_SESSION['Annualincome']= strip_tags($_POST['txtIncome']); 
	$_SESSION['Occupation']= strip_tags($_POST['txtOccu']); 
	$_SESSION['Employedin']= strip_tags($_POST['txtEmp']);
	
	//Physical Attributes
	$_SESSION['Height']= strip_tags($_POST['txtHeight1']); 
	$_SESSION['Weight']= strip_tags($_POST['txtWeight']); 
	$_SESSION['BloodGroup']= strip_tags($_POST['txtBlood']); 
	$_SESSION['Bodytype']= strip_tags($_POST['txtBody']); 
	$_SESSION['Complexion']= strip_tags($_POST['txtComplexion']);
	$_SESSION['Diet']= strip_tags($_POST['txtDiet']);
	$_SESSION['Smoke']= strip_tags($_POST['txtSmoke']);
	$_SESSION['Drink']= strip_tags($_POST['txtDrink']);
	
	// Contact Details 
	$_SESSION['Address']= strip_tags($_POST['txtAddress']);
	$_SESSION['City']= strip_tags($_POST['City']); 
	$_SESSION['State']= strip_tags($_POST['ResidingState']); 
	$_SESSION['Country']= strip_tags($_POST['txtCountry']);
   $_SESSION['Code']= strip_tags($_POST['txtCC']);
   $_SESSION['Areacode']= strip_tags($_POST['txtAC']);
 
	$sCC = strip_tags($_POST['txtCC']);
	$sAC = strip_tags($_POST['txtAC']);
	$sPhone = strip_tags($_POST['txtPhone']);
	$ssep="-";
	$_SESSION['Phone']= $sCC.$ssep.$sAC.$ssep.$sPhone;
	$_SESSION['Mobile']= strip_tags($_POST['txtMobile']);
	$_SESSION['Residencein']= strip_tags($_POST['txtRes']);
//Dim StrIP As String = Request.ServerVariables("REMOTE_ADDR") 
//	msg5.text = Request.ServerVariables("REMOTE_ADDR") 

?>






<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html40/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="vs_defaultClientScript" content="JavaScript">
<title>Free Online Registration</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-size: 10px;
	color: #333333;
}
.style2 {color: #FF0000}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {font-size: 13px; color: #ff0000;}
.style5 {color: #000000; font-size: 11px;}
-->
</style>
</head>
<script>
function smutEngine() {
smut="..";
cmp="sex babes shit fuck damn porno cum cunt prick pecker ass fucking xxx XXX yahoo msn rediff gmail hotmail sify rediffmail www http"
+"asshole pedophile man-boy man/boy dong twat";
txt=document.MatriForm.txtmsg.value;
tstx="";
for (var i=0;i<16;i++){
pos=cmp.indexOf(" ");
wrd=cmp.substring(0,pos);
wrdl=wrd.length
cmp=cmp.substring(pos+1,cmp.length);
while (txt.indexOf(wrd)>-1){
pos=txt.indexOf(wrd);
txt=txt.substring(0,pos)+smut.substring(0,wrdl)
+txt.substring((pos+wrdl),txt.length);
   }
}
document.MatriForm.txtmsg.value=txt;
}
// End -->
</script>

<script>
function stringFilter (input) {
s = input.value;
filteredValues = "1234567890@/#$%^&*()_-=|][}.,;:?'{!\><";     // Characters stripped out
var i;
var returnString = "";
for (i = 0; i < s.length; i++) {  // Search through string and append to unfiltered values to returnString.
var c = s.charAt(i);
if (filteredValues.indexOf(c) == -1) returnString += c;
}
input.value = returnString;
}
//  End -->
</script>

<script language="javascript">
function ValidateNo( NumStr, String ) 
	{
 		for( var Idx = 0; Idx < NumStr.length; Idx ++ )
 		{
			 var Char = NumStr.charAt( Idx );
			 var Match = false;

				for( var Idx1 = 0; Idx1 < String.length; Idx1 ++) 
				{
					 if( Char == String.charAt( Idx1 ) ) 
					 Match = true;
				}
				
				if ( !Match ) 
					return false;
 		}

        	return true;
	}


	
	function ResetValues()
	{
		var MatriForm = this.document.MatriForm;

		
		MatriForm.txtLooking.value = "";
		MatriForm.txtmsg = "";
		MatriForm.txtFD = "";
		MatriForm.txtPPE = "";
	
		return true;
	}

	
	
	
	// Function to validate all the inputs
	function Validate(  )
	{
		var MatriForm = this.document.MatriForm;
		
	
	
	// Check Looking Field
		
	
		// Check Profile
		if ( MatriForm.txtmsg.value == "" )
		{
			alert( "Please Enter your Profile" );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		
		// Profile Min Chars 
		if ( MatriForm.txtmsg.value.length < 50 )
		{
			alert( "Profile must be atleast 50 chars." );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		
		// Profile Max Chars
		if ( MatriForm.txtmsg.value.length > 1000 )
		{
			alert( "Please do not enter more than 1000 chars. Please shorten your Profile and submit again." );	
			MatriForm.txtmsg.focus( );
			return false;
		}
		

var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var i = 0; i < MatriForm.txtmsg.value.length; i++) {
  	if (iChars.indexOf(MatriForm.txtmsg.value.charAt(i)) != -1) {
  	alert ("Special characters and numbers are not allowed in Profile.\n Please remove them.");
	MatriForm.txtmsg.focus( );
  	return false;
  	}
  }



  
  
  



		
		// Check Family Details
		if ( MatriForm.txtFD.value.length > 300 )
		{
			alert( "Please do not enter more than 300 chars. Please shorten your Family Details and submit again." );	
			MatriForm.txtFD.focus( );
			return false;
		}



var jChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";

  for (var j = 0; j < MatriForm.txtFD.value.length; j++) {
  	if (jChars.indexOf(MatriForm.txtFD.value.charAt(j)) != -1) {
  	alert ("Special characters are not allowed in Family Details.\n Please remove them.");
	MatriForm.txtFD.focus( );
  	return false;
  	}
  }
  
  
  var kChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var k = 0; k < MatriForm.txtFO.value.length; k++) {
  	if (kChars.indexOf(MatriForm.txtFO.value.charAt(k)) != -1) {
  	alert ("Special characters and numbers are not allowed in Family Origin.\n Please remove them.");
	MatriForm.txtFO.focus( );
  	return false;
  	}
  }
  
  
  var lChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var l = 0; l < MatriForm.txtFANAME.value.length; l++) {
  	if (lChars.indexOf(MatriForm.txtFANAME.value.charAt(l)) != -1) {
  	alert ("Special characters and numbers are not allowed in Father Name.\n Please remove them.");
	MatriForm.txtFANAME.focus( );
  	return false;
  	}
  }
  
  
   var mChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var m = 0; m < MatriForm.txtFFO.value.length; m++) {
  	if (mChars.indexOf(MatriForm.txtFFO.value.charAt(m)) != -1) {
  	alert ("Special characters and numbers are not allowed in Father Occupation.\n Please remove them.");
	MatriForm.txtFFO.focus( );
  	return false;
  	}
  }
  
  
   var nChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var n = 0; n < MatriForm.txtMONAME.value.length; n++) {
  	if (nChars.indexOf(MatriForm.txtMONAME.value.charAt(n)) != -1) {
  	alert ("Special characters and numbers are not allowed in Mother Name.\n Please remove them.");
	MatriForm.txtMONAME.focus( );
  	return false;
  	}
  }
  
   var oChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var o = 0; o < MatriForm.txtFMO.value.length; o++) {
  	if (oChars.indexOf(MatriForm.txtFMO.value.charAt(o)) != -1) {
  	alert ("Special characters and numbers are not allowed in Mother Occupation.\n Please remove them.");
	MatriForm.txtFMO.focus( );
  	return false;
  	}
  }





		
if ( !MatriForm.txtLooking[0].checked && !MatriForm.txtLooking[1].checked && !MatriForm.txtLooking[2].checked && !MatriForm.txtLooking[3].checked)
		{
			alert( "Please Select the Looking for." );
			MatriForm.txtLooking[0].focus( );
			return false;
		}
	

if ( MatriForm.Fromage.value == "" )
		{
			alert( "Please Enter your Expected From Age." );
			MatriForm.Fromage.focus( );
			return false;
		}



if(isNaN(document.MatriForm.Fromage.value)) 
		{ 
		 alert("Age should be only numbers."); 
		document.MatriForm.Fromage.focus();
		 return false; 
		}
		

if(document.MatriForm.Fromage.value < 18 )
		{ 
		 alert("Age should be 18 And Above."); 
		 document.MatriForm.Fromage.focus();
		 return false; 
		}



if ( MatriForm.Toage.value == "" )
		{
			alert( "Please Enter your Expected To Age." );
			MatriForm.Toage.focus( );
			return false;
		}

		
		if(document.MatriForm.Toage.value < 18 )
		{ 
		 alert("Age should be 18 And Above."); 
		 document.MatriForm.Toage.focus();
		 return false; 
		}






if ( MatriForm.religion.selectedIndex == 0 )
		{
			alert( "Please Select your Expected Religion." );	
			MatriForm.religion.focus( );
			return false;
		}


if ( MatriForm.caste.selectedIndex == 0 )
		{
			alert( "Please Select your Expected Caste." );	
			MatriForm.caste.focus( );
			return false;
		}
		
		// Check Partner Expectation details
		if ( MatriForm.txtPPE.value.length > 300 )
		{
			alert( "Please do not enter more than 300 chars. Please shorten your Partner Expectation and submit again." );	
			MatriForm.txtPPE.focus( );
			return false;
		}




 var pChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var p = 0; p < MatriForm.txtPPE.value.length; p++) {
  	if (pChars.indexOf(MatriForm.txtPPE.value.charAt(p)) != -1) {
  	alert ("Special characters and numbers are not allowed in Partner Preference.\n Please remove them.");
	MatriForm.txtPPE.focus( );
  	return false;
  	}
  }


var qChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var q = 0; q < MatriForm.txtOh.value.length; q++) {
  	if (qChars.indexOf(MatriForm.txtOh.value.charAt(q)) != -1) {
  	alert ("Special characters and numbers are not allowed in Other Hobbies.\n Please remove them.");
	MatriForm.txtOh.focus( );
  	return false;
  	}
  }
  
  
  var rChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?0123456789";

  for (var r = 0; r < MatriForm.txtOi.value.length; r++) {
  	if (rChars.indexOf(MatriForm.txtOi.value.charAt(r)) != -1) {
  	alert ("Special characters and numbers are not allowed in Other Interest.\n Please remove them.");
	MatriForm.txtOi.focus( );
  	return false;
  	}
  }


	
	return true;
	}

		</script> 



<script>
<!--
function clearform()
	{
	
//		MatriForm.txtEdu.value = "1"
		//MatriForm.txtAddress.value = ""
		//MatriForm.txtAddress.value = ""
	//	MatriForm.txtAddress.value = ""
		//MatriForm.txtAddress.value = ""
		////MatriForm.txtAddress.value = ""
	//	MatriForm.txtAddress.value = ""
		MatriForm.txtEdudetails.value = ""
		
		MatriForm.txtAddress.value = ""
		MatriForm.txtCity.value = ""
		MatriForm.txtState.value = ""
		MatriForm.txtPhone.value = ""
		
		
	}
//-->
</script>


<script language="JavaScript">
<!--
function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}
//  End -->

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>



		
<script language="JavaScript">

function caste_disable(obj){
	if(obj.options[obj.selectedIndex].text != 'Hindu' &&
		obj.options[obj.selectedIndex].text != 'Muslim' &&
		obj.options[obj.selectedIndex].text != 'Christian' &&
		obj.options[obj.selectedIndex].text != 'Jain' &&
		obj.options[obj.selectedIndex].text != 'Sikh'){
		document.MatriForm.caste.disabled = true;
	}
	else {
		document.MatriForm.caste.disabled = false;
		get_caste(obj.form.religion,0);
	}
}
//-->
</script>


	<script language="javascript">

	var caste=new Array();
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","adar","agar Brahmin","aidu","air","air Vaniya","ambiar","epali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thevar","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav"];
caste["Muslim"] = ["Bengali","Dawoodi Bohra","Ehle-Hadith","Memon","Rajput","Shia","Shia Imami Ismaili","Sunni"];
caste["Christian"] = ["Born Again","Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","adar","Protestant","Syrian"];
caste["Jain"] = ["Digambar","Shewetamber","Vania"];
caste["Sikh"] = ["Clean Shaven","Gursikh","Jat","Kamboj","Kesadhari","Khatri","Ramgharia"];


	function get_caste(obj,show_default){

		var sel_caste = '';

		var sel_religion	= obj.options[obj.selectedIndex].text;
		var caste_obj		= obj.form.elements["caste"];
		//CLEAN CASTE SELECT BOX
		while ( caste_obj.options.length ) caste_obj.options[0] = null;

		//ADD FIRST SELECT OPTION
		caste_obj.options[0]=new Option("Does not matter","Does not matter",true);


		//ADD CASTE OPTIONS FOR SELECTED RELIGION
		//if(obj.selectedIndex>0){
			for(j=0;j<caste[sel_religion].length;j++){
				//NOT TO INCLUDE OPTIONS HAVING NULL VALUES
				if(caste[sel_religion][j]!=""){
					var caste_val = caste[sel_religion][j]=="Does not matter"?"Does not matter":caste[sel_religion][j];
					var def_sel   = (sel_caste == caste_val) ? true : false;
                    caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);

				}
			}
		//}

	}

	</script>



		

<body oncontextmenu="return false" onselectstart="return false" 
ondragstart="return false" text=#000000 vlink=#000000 alink=#000000 link=#000000 
bgcolor=#ffffff leftmargin=0 topmargin=0 marginheight="0" marginwidth="0">


<form action="registration4.php" method="post" name="MatriForm" id="MatriForm" onSubmit="return Validate()" >
<div align="center">
  
  <table width="780" border="0" cellpadding="0" cellspacing="0" class="BlueTborder">
    <!--DWLayoutTable-->
    <tr>
      <td width="780" height="164">
	  
	
        <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="Tborder">
          <!--DWLayoutTable-->
          <tr>
            <td height="37" colspan="2">
					<?php include("header.php");?>
			  </td>
            </tr>
          <tr>            </tr>
          <tr>
            <td  colspan="2" valign="top">
						
														
							
			  </td>
          </tr>
          
          <tr valign="top">
            <td height="206" colspan="2">
               
                  <table width="100%" border="0" align="center">
                    <tr>
                      <td width="570" class="LgHeading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											

					  </td>
                      <td width="200">Already Registered? <span class="h1dp"><a href="login.php">Login Now</a></span> </td>
                    </tr>
                    <tr>
                        <td bgcolor=#cccccc colspan=5 height=1><spacer height="1" type="block"></td>
                    </tr>
                  </table>
                  <table width="746" border="0" align="center">
                    <tr>
                      <td><div align="left"><span class="LgHeading">Register Final </span></div></td>
                    </tr>
                    <tr>
                      <td width="719"><div align="left">All Fields marks <span class="bodysg"><span class="Alert">*</span></span> are compulsory.<br>
  Please mention accurate information in this form or your profile may be declined. </div></td>
                    </tr>
                </table>
				  
				 
                  
                  <div align="center"><br>
                    <br>
                    <TABLE cellSpacing=0 cellPadding=0 width=746 border=0>
                      <TR>
                        <TD class=grebg vAlign=top colSpan=3 height=12><IMG src="pics/trans.gif"></TD>
                      </TR>
                      <TR>
                        <TD class=grebg width=12><IMG height=1  src="pics/trans.gif"></TD>
                        <TD class=lastnull vAlign=top width=722><TABLE cellSpacing=0 cellPadding=0 width=722  border=0>
                            <TR height=28>
                              <TD class=smalltxt align=right colSpan=2><div align="left"></div></TD>
                            </TR>
                            <!---- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Profile</span></div></TD>
                            </TR>
                            <!---- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1 src="pics/blank(1).gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left">Profile <span class="Alert">* </span><br>
                                <textarea name="txtmsg" cols="50" rows="7" id="txtmsg" style="width:650px;"
onKeyDown="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,50)" onKeyUp="textCounter(document.MatriForm.txtmsg,document.MatriForm.remLen1,50)" ></textarea>
                                    <br>
                                    <input name="remLen1" type="text" class="bodylight" value="50" size="4" maxlength="4" readonly>
                                    <span class="style1">You could enter details about you or a bried description about yourself.<br>
                                    <!--<span class="style2">Min 50</span>  --><!--chas--> <span class="style2">Max 50 chars</span>. (If Profile contains ay details about your <br>
contact information like e-mail,phone number, ete. Your profile will be rejected)</span></div></TD>
                            </TR>
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Family Details </span></div>                                <div align="left"></div></TD>
                            </TR>
                            <!-- -->
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Family Details </div></TD>
                              <TD class=smalltxt><div align="left">
                                <textarea name="txtFD" rows="3" id="txtFD" style="width:150px;"></textarea>
                              </div></TD>
                            </TR>
							
							
							
							
							
							 <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Family Values </div></TD>
                              <TD class=smalltxt><div align="left">
                                <select name="txtFV" class="forminput" id="txtFV" style="width:150px;">
                                  <option value="Traditional">Traditional</option>
                                  <option value="Orthodox">Orthodox</option>
                                  <option value="Liberal">Liberal</option>
                                  <option value="Moderate">Moderate</option>
                                </select>
                              </div></TD>
                            </TR>
							
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1 vAlign=center><div align="left">&nbsp;Family Type</div></TD>
                              <TD class=smalltxt><div align="left">
                                <select name="txtFT" class="forminput" id="txtFT" style="width:150px;">
                                  <option value="Seperate Family">Seperate Family</option>
                                  <option value="Joint Family" >Joint Family</option>
                                </select>
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1 width=210><div align="left">&nbsp;Family Status</div></TD>
                              <TD vAlign=top><div align="left">
                                <select name="txtFS" class="forminput" id="txtFS" style="width:150px;">
                                  <option value="Rich">Rich</option>
                                  <option value="Upper Middle Class">Upper Middle Class</option>
                                  <option value="High Class">High Class</option>
                                  <option value="Middle Class">Middle Class</option>
                                  <option value="Do not want to tell at this time">Do not want to tell at this time</option>
                                </select>
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Family Origin </div></TD>
                              <TD class=grtxt><div align="left">
                                <input name="txtFO" type="text" class="forminput" id="txtFO" size="40" maxlength="40" style="width:200px;">
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">No of Brothers </div></TD>
                              <TD class=grtxt><div align="left">
                                <select name="txtFS1" class="forminput" id="txtFS1" style="width:95px;">
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="4 +">4 +</option>
                                </select>
                              &nbsp;&nbsp;&nbsp;&nbsp;No of Brothers Married : 
                              <select name="nbm" class="forminput" id="nbm" style="width:95px;">
                                 <option value="No married brother">No married brother</option>
                                <option value="One married brother">One married brother</option>
                                <option value="Two married brother">Two married brother</option>
                                <option value="Three married brother">Three married brother</option>
                                <option value="Four married brother">Four married brothers</option>
                                <option value="Above four married brother">Above four married brother</option>
                              </select>
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">No of Sisters </div></TD>
                              <TD class=grtxt><div align="left">
                                <select name="txtFS2" class="forminput" id="txtFS2" style="width:95px;">
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3 ">3</option>
                                  <option value="4">4</option>
                                  <option value="4 +">4 +</option>
                                </select>
                              &nbsp;&nbsp;&nbsp;&nbsp;No of Sisters Married :&nbsp;&nbsp;&nbsp;  
                              <select name="nsm" class="forminput" id="nsm" style="width:95px;">
                                <option value="No married sister">No married sister</option>
                                <option value="One married sister">One married sister</option>
                                <option value="Two married sisters">Two married sisters</option>
                                <option value="Three married sisters">Three married sisters</option>
                                <option value="Four married sisters">Four married sistes</option>
                                <option value="Above four married sisters">Above four married sisters</option>
                                                            </select>
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <!--<TD colspan="2" class=grtxtbold1><div align="left"><span class="bodysg">Father's Detail </span></div>                                <div align="left"></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Name:</div></TD>
                              <TD class=grtxt><div align="left">
                                <input name="txtFANAME" type="text" class="forminput" id="txtFANAME" size="40" maxlength="20" style="width:150px;">
                              </div>
                                  <div align="left"></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left"></div></TD>
                              <TD><div align="left">
                                <input name="txtFalive" type="radio" value="Alive" checked>
                                <span class="h4p">Alive</span> &nbsp;
                                <input name="txtFalive" type="radio" value="otAlive">
                                <span class="h4p">Not Alive</span></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Occupation</div></TD>
                              <TD class=grtxt><div align="left">
                                <input name="txtFFO" type="text" class="forminput" id="txtFFO" size="40" maxlength="10" style="width:150px;">
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colspan="2" align=left class=grtxtbold1><div align="left" class="bodysg">Mother's Detail </div>
                                  <div align="left"></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left">Name:</div></TD>
                              <TD><div align="left">
                                <input name="txtMONAME" type="text" class="forminput" id="txtMONAME" size="40" maxlength="20" style="width:150px;">
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1><div align="left"></div></TD>
                              <TD class=smalltxt><div align="left">
                                <input name="txtMalive" type="radio" value="Alive" checked>
                                <span class="h4p">Alive</span> &nbsp;
                                <input name="txtMalive" type="radio" value="otAlive">
                                <span class="h4p">Not Alive</span></div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD class=grtxtbold1 align=left><div align="left">Occupation</div></TD>
                              <TD><div align="left">
                                <input name="txtFMO" type="text" class="forminput" id="txtFMO" size="40" maxlength="40" style="width:150px;">
                              </div></TD>
                            </TR>
                            <TR>
                              <TD class=grebg colSpan=2><IMG height=1  src="pics/trans.gif"></TD> -->
                            </TR>
                            
                            <!-- -->
                            
                            <!-- -->
                            <!-- -->
                            
                            <TR class=tabpadding>
                              <TD class=grtxtbold1 vAlign=center>&nbsp;</TD>
                              <TD class=formtxt vAlign=top width=500>&nbsp;</TD>
                            </TR>
                            <TR class=tabpadding>
                              <TD colSpan=3 height=7><div align="center">
                                  <div align="center"><a href="javascript:clearform();"></a>
                                    <input name="txtstatus" type="hidden" id="txtstatus" value="<?php echo "InActive" ; ?>">
                                    <input name="txtregdate" type="hidden" id="txtregdate" value="<?php echo date('d-M-Y'); ?>">
                                    <input name="txtip" type="hidden" id="txtip" value="<?php echo  $_SERVER['REMOTE_ADDR']; ?>">
                                    <input name="txtref" type="hidden" id="txtref" value="<?php  echo  $_SERVER['HTTP_REFERER']; ?>">
                                    <input name="txtagent" type="hidden" id="txtagent" value="<?php  echo $_SERVER['HTTP_USER_AGENT']; ?>">
                                    <input name="h1" type="hidden" id="h1" value="<?php $_SESSION['Name']; ?>">
                                    <input name="Submit" type="image" value="Submit" src="pics/continue.gif" alt="Register" >
                                    <a href="javascript:clearform();"></a></div>
                              </div></TD>
                            </TR>
                        </TABLE></TD>
                        <TD class=grebg width=12><IMG height=1  src="pics/trans.gif"></TD>
                      </TR>
                      <TR>
                        <TD class=grebg vAlign=top colSpan=3><IMG height=12 src="pics/trans.gif" width=564></TD>
                      </TR>
                    </TABLE>
                    <br>
                    <br>
                  </div>
                  </td>
          </tr>
          
          <tr>
         <?php include("footer.php");?> 
		 
            </tr>
        </table>
 

	  </td>
    </tr>
  </table>
</div>
</form>
</body>
</html>

