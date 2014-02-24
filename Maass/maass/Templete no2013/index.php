<?php include("config.php"); ?>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $info['Title']; ?></title>
<meta name="description" content="<?php echo $info['Description']; ?>">
<meta name="keywords" content="<?php echo $info['Keywords']; ?>">
<LINK href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {font-weight: bold}
.style3 {color: #0080C0}
.style4 {	color: #DD7502;
	font-weight: bold;
	font-size: 13px;
}
-->
</style>
</head>


						
<SCRIPT language="JavaScript">
<!-- Start
// Set up the image files to be used.
var theImages = new Array() // do not change this
// To add more image files, continue with the
// pattern below, adding to the array.



theImages[0] = 'images/pic1.jpg'
theImages[1] = 'images/pic2.jpg'
theImages[2] = 'images/pic3.jpg'
theImages[3] = 'images/pic4.jpg'


// do not edit anything below this line

var j = 0
var p = theImages.length;
var preBuffer = new Array()
for (i = 0; i < p; i++){
   preBuffer[i] = new Image()
   preBuffer[i].src = theImages[i]
}
var whichImage = Math.round(Math.random()*(p-1));
function showImage(){
document.write('<img src="'+theImages[whichImage]+'">');
}

//  End -->
            </SCRIPT>



<SCRIPT language="javascript">
	function validate()
  {
  		 if ( MatriForm.txtSAge.value == "" )
		 {
			alert( "Please enter minimum age." );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		 if ( MatriForm.txtSAge.value < 18 )
		 {
			alert( "Minimum age should be above 18" );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		
		if ( MatriForm.txtSAge.value > 60 )
		 {
			alert( "Minimum age should not be above 60" );
			MatriForm.txtSAge.focus( );
			return false;
		}
		
		 if ( MatriForm.txtEAge.value == "" )
		 {
			alert( "Please enter maximum Age" );
			MatriForm.txtEAge.focus( );
			return false;
		}
		
		if ( MatriForm.txtEAge.value > 60 )
		 {
			alert( "Maximum Age should be below 60" );
			MatriForm.txtEAge.focus( );
			return false;
		}
		
		if ( MatriForm.txtEAge.value < 18 )
		 {
			alert( "Maximum Age should not be below 18" );
			MatriForm.txtEAge.focus( );
			return false;
		}
	
		if ( MatriForm.religion.selectedIndex == 0 )
		{
			alert( "Please select Religion." );	
			MatriForm.religion.focus( );
			return false;
		}
		
			
}

 </SCRIPT>
 
 


		
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
caste["Hindu"] = ["6000 Niyogi","96K Kokanastha","Adi Dravida","Agarwal","Anavil Brahmin","Arora","Arya Vysya","Aryasamaj","Audichya Brahmin","Bahi","Balija Naidu","Bengali","Bengali Brahmin","Bhandari","Billava","Brahmin","Brahmin Bhumihar","Brahmin Goswami","Brahmin Kanada Madhva","Brahmin Kanyakubja","Brahmin Niyogi Nandavariki","Brahmin Saryuparin","Brahmin Tyagi","Bunt","Chaurasia","Chettiar","Coorgi","Davadnya Brahmin","Dawoodi Bhora","Deshastha Brahmin","Devanga","Dhaneshawat Vaish","Dhiman Brahmin","Digambar","Ezhava","Ezhuthachan","Garhwali Brahmins","Garhwali Rajput","Gomantak Maratha","Goswami","Gounder","Gour Brahmin","Gowd Saraswat Brahmin","Gowda","Gujarati","Gupta","Gurjar","Havyaka Brahmin","Iyengar","Iyer","Iyer Brahmin","Jaiswal","Jat","Kalar","Kalinga Vysya","Kamboj","Kamma","Kannada Mogaveera","Kapu","Kapu Naidu","Karhade Brahmin","Karuneekar","Kashmiri Pandit (Brahmin)","Kashyap","Kayastha","Khatri","Kokanastha Brahmin","Kongu Vellala Gounder","Kori","Koshti","Kshatriya","Kumaoni Brahmins","Kumaoni Rajput","Kumawat","Kumbara","Kunbi","Kurmi","Kuruba","Leva Patil","Lingayat","Lohana","Maithil Brahmin","Malayalee Namboodiri","Malayalee Variar","Mali","Maharashtrian","Maharashtrian Brahmin","Maheshwari","Maratha","Maruthuvar","Marvar","Marwari","Maurya","Menon","Mudaliar","Mudaliar Arcot","Mudaliar Saiva","Mudaliar Senguntha","Mukulathur","Nadar","Nagar Brahmin","Naidu","Nair","Nair Vaniya","Nambiar","Nepali","OBC (Barber-Naayee)","Padmashali","Patel Desai","Patel Kadva","Patel Leva","Perika","Pillai","Prajapati","Punjabi","Punjabi Brahmin","Rajput","Reddy","Saraswat Brahmins","Sahu","Scheduled Caste","Sepahia","Setti Balija","Sindhi","Somvanshi","Sonar","Sowrashtra","Sozhiya Vellalar","Sutar","Swarnakar","Tamil Yadava","Teli","Telugu","Telugu Brahmin","Thevar","Thiyya","Udayar","Vaidiki Brahmin","Vaishnav","Vaishnav Bhatia","Vaishnav Vania","Varshney","Vanniyakullak Shatriya","Vanniyar","Veerashaiva","Velethadathu Nair","Vellalar","Vellama","Vishwakarma","Viswabrahmin","Vokaliga","Vysya","Yadav","Devanga chettier", "24 manai chettier","Vaniya chettier", "Jangumar", "Andipandaram", "Ariyavaisiyar","Vannar"];
caste["Muslim"] = ["Bengali","Dawoodi Bohra","Ehle-Hadith","Memon","Rajput","Shia","Shia Imami Ismaili","Sunni"];
caste["Christian"] = ["Catholic","CMS","CSI","Evangelical","Jacobite","Marthoma","Nadar","Protestant","Syrian"];
caste["Jain"] = ["Digambar","Shewetamber","Vania"];
caste["Sikh"] = ["Clean Shaven","Gursikh","Jat","Kamboj","Kesadhari","Khatri","Ramgharia"];


	function get_caste(obj,show_default){

		var sel_caste = '';

		var sel_religion	= obj.options[obj.selectedIndex].text;
		var caste_obj		= obj.form.elements["caste"];
		//CLEAN CASTE SELECT BOX
		while ( caste_obj.options.length ) caste_obj.options[0] = null;

		//ADD FIRST SELECT OPTION
		caste_obj.options[0]=new Option("Any","Any",true);


		//ADD CASTE OPTIONS FOR SELECTED RELIGION
		//if(obj.selectedIndex>0){
			for(j=0;j<caste[sel_religion].length;j++){
				//NOT TO INCLUDE OPTIONS HAVING NULL VALUES
				if(caste[sel_religion][j]!=""){
					var caste_val = caste[sel_religion][j]=="Any"?"Any":caste[sel_religion][j];
					var def_sel   = (sel_caste == caste_val) ? true : false;
                    caste_obj.options[j+1] = new Option(caste[sel_religion][j], caste_val, true, def_sel);

				}
			}
		//}

	}

	</script>
	
	 <script>
function check_Age(field_name)
{
	var i, max, field_info
	field_info = eval("document.MatriForm." + field_name);
	max = field_info.value.length;
	
	for (i = 0; i < max; i++)
	{
		if(isNaN(field_info.value.charAt(i)))
		{
			alert("Age must be numeric.");
			field_info.value = "";
			field_info.focus();
			return false;
		}
	}
			return true;
}
</script>
<BODY leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="body" rightmargin="0" bottommargin="0">

<DIV align="center">
  <TABLE width="784" border="0" cellpadding="0" cellspacing="0" class="bordertopless" height="619">
  <!--DWLayoutTable-->
  <tr>
    <TD width="782" height="617">
		
		
<TABLE width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="Tborder">
  <TR>
    <TD width="780" height="1">
      <div align="left">
        
        <?php include("header.php");?>      </div></TD>
        <TR>
<TD>
<?php include("topmenu.php");?></TD>
</TR>

        
        </TR>
        
        <TR>
    <TD height="0" valign="top" bgcolor="#FFFFFF">
	
	<table border="0" width="780" id="table1" cellspacing="0" cellpadding="0">
		<tr>
			<td height="263" background="jpg%20files/1_banner.JPG" valign="bottom">
			<table border="0" width="780" id="table2" cellspacing="0" cellpadding="0">
				<tr>
					<td>&nbsp;</td>
					<td width="317">
										<table  height="155" cellspacing="0" cellpadding="0" 
            width="327" border="0" id="table3">
                                          <tbody>
                                            <tr>
                                              <td class="style">
											    <form action="simplesearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >
											      <table  height="138" cellspacing="0" cellpadding="0" 
            width="283" align="center" border="0" id="table4">
                                                
                                                  
                                                  <tr>
                                                    <td width="72" height="20" class="style style1"><div align="left" class="smallbold1">Looking For </div></td>
                                                    <td width="139"><div align="left">
                                                      <input name="txtGender" type="radio" class="forminput" value="Male" checked />
                                                      Male 
                                                      &nbsp;
                                                      <input name="txtGender" type="radio" class="forminput" value="Female" />
                                                      Female </div></td>
                                                  </tr>
                                                  <tr>
                                                    <td height="18" class="style style1"><div align="left" class="smallbold1">Age</div></td>
                                                    <td><div align="left">From
                                                      <select name="txtSAge" class="forminput" id="txtSAge" style="width:40px;">
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
														<option value="32">32</option>
														<option value="33">33</option>
														<option value="34">34</option>
														<option value="35">35</option>
														<option value="36">36</option>
														<option value="37">37</option>
														<option value="38">38</option>
														<option value="39">39</option>
														<option value="40">40</option>
														<option value="41">41</option>
														<option value="42">42</option>
														<option value="43">43</option>
														<option value="44">44</option>
														<option value="45">45</option>
														<option value="46">46</option>
														<option value="47">47</option>
														<option value="48">48</option>
														<option value="49">49</option>
														<option value="50">50</option>
														<option value="51">51</option>
														<option value="52">52</option>
														<option value="53">53</option>
														<option value="54">54</option>
														<option value="55">55</option>
														<option value="56">56</option>
														<option value="57">57</option>
														<option value="58">58</option>
														<option value="59">59</option>
														<option value="60">60</option>														
                                                      </select>
&nbsp; to &nbsp;
                                                    <select name="txtEAge" class="forminput" id="txtSAge" style="width:40px;">
                                                         <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
														<option value="32">32</option>
														<option value="33">33</option>
														<option value="34">34</option>
														<option value="35">35</option>
														<option value="36">36</option>
														<option value="37">37</option>
														<option value="38">38</option>
														<option value="39">39</option>
														<option value="40">40</option>
														<option value="41">41</option>
														<option value="42">42</option>
														<option value="43">43</option>
														<option value="44">44</option>
														<option value="45">45</option>
														<option value="46">46</option>
														<option value="47">47</option>
														<option value="48">48</option>
														<option value="49">49</option>
														<option value="50">50</option>
														<option value="51">51</option>
														<option value="52">52</option>
														<option value="53">53</option>
														<option value="54">54</option>
														<option value="55">55</option>
														<option value="56">56</option>
														<option value="57">57</option>
														<option value="58">58</option>
														<option value="59">59</option>
														<option value="60" selected>60</option>	
                                                      </select>                  years </div></td>
                                                  </tr>
                                                  <tr>
                                                    <td height="19" class="style style1"><div align="left" class="smallbold1">Religion</div></td>
                                                    <td><div align="left">
                                                      <select name="religion" class="forminput" id="religion" onChange="return caste_disable(document.MatriForm.religion);" style="width:180px;">
                                                        <option value="- Select -" selected="selected">- Select -</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Christian">Christian</option>
                                                        <option value="Muslim">Muslim</option>
                                                        <option value="Sikh">Sikh</option>
                                                        <option value="Jain">Jain</option>
                                                        <option value="Parsi">Parsi</option>
                                                        <option value="Buddhist">Buddhist</option>
                                                        <option value="Bahai">Bahai</option>
                                                        <option value="Inter-Religion">Inter-Religion</option>
                                                        <option value="Others">Others</option>
                                                      </select>
                                                    </div></td>
                                                  </tr>
                                                  <tr>
                                                    <td height="19" class="style style1"><div align="left" class="smallbold1">Caste</div></td>
                                                    <td><div align="left">
                                                      <select name="caste" class="forminput" id="caste" style="width:180px;">
                                                        <option value="Any">Any</option>
                                                      </select>
                                                    </div></td>
                                                  </tr>
                                                  <tr>
                                                    <td height="14" align="right" valign="bottom" background="#99CC66">
                                                      <div align="left">
                                                        <input name="Submit2" type="image" value="Search" src="pics/search_botton.gif" />
                                                    </div></td><td><div align="left">
                                                          <input name="txtphoto" type="checkbox" id="txtphoto" value="Show profiles with Photo" />
                                                      Profiles with Photo</td>
                                                  </tr>
                                              </table>
											</form>											  </td>
                                            </tr>
                                            
                                            </table>
					</td>
					<td width="13"></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
		</TD>
  </TR>
					<!--DWLayoutTable-->
					
					<TR>
					  <TD valign="top" bgcolor="#FFFFFF"><table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><table width="780" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="100%" height="188" valign="bottom" background="jpg%20files/2_banner.JPG">
								<table border="0" width="780" id="table5" cellspacing="0" cellpadding="0">
									<tr>
										<td height="200" width="17">&nbsp;</td>
										<td height="200">
										<table border="0" width="100%" id="table6" cellspacing="0" cellpadding="0">
											<tr>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td height="158">
												<table width="402" border="0" align="left" cellpadding="5" cellspacing="4" id="table8">
                        <tr>
                          <td colspan="2"><div align="left"><span class="style4"><strong>
							<font color="#FDB400">Community   Search </font> </strong></span> </div>
                              </td>
                        </tr>
                        <tr>
                          <td width="14%"><div>
                              <div align="left"><font color="#FFFFFF">Religion:</font></div>
                          </div></td>
                          <td width="69%"><div align="left"><a href="profile_religion.php?id=Christian" target="_blank" class="none style8">
							<font color="#FFFFFF">Christian</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_religion.php?id=Hindu" target="_blank" class="none style8"><font color="#FFFFFF">Hindu</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a  href="profile_religion.php?id=Muslim" target="_blank" class="none style8"><font color="#FFFFFF">Muslim</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_religion.php?id=Jain" target="_blank" class="none style8"><font color="#FFFFFF">Jain</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_religion.php?id=Sikh" target="_blank" class="none style8"><font color="#FFFFFF">Sikh</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="searchoption.php" target="_blank" class="style8"><u><font color="#FFFFFF">More...</font></u></a></div></td>
                        </tr>
                        <tr>
                          <td><div align="left"><font color="#FFFFFF">Caste:</font></div></td>
                          <td><div align="left"><a href="profile_cast.php?id=Brahmin" target="_blank" class="none style8">
							<font color="#FFFFFF">Brahmin</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_cast.php?id=Chettiar" target="_blank" class="none style8"><font color="#FFFFFF">Chettiar</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_cast.php?id=Gounder" target="_blank" class="none style8"><font color="#FFFFFF">Gounder</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_cast.php?id=Naidu" target="_blank" class="none style8"><font color="#FFFFFF">Naidu</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="searchoption.php" title="Mukkulathor  Matrimonial" target="_blank" class="style8"><font color="#FFFFFF">More...</font></a></div></td>
                        </tr>
                        <tr>
                          <td><div align="left"><font color="#FFFFFF">Education:</font></div></td>
                          <td><div align="left"><a href="profile_edu.php?id=Bachelors" target="_blank" class="none style8">
							<font color="#FFFFFF">Bachelors</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_edu.php?id=Masters" target="_blank" class="none style8"><font color="#FFFFFF">Masters</font></a><font color="#FFFFFF"> <span class="style7">|</span>&nbsp;</font><a href="profile_edu.php?id=Doctorate" target="_blank" class="none style8"><font color="#FFFFFF">Doctorate</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_edu.php?id=Diploma" target="_blank" class="none style8"><font color="#FFFFFF">Diploma</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="searchoption.php" target="_blank" class="style8"><font color="#FFFFFF">More...</font></a></div></td>
                        </tr>
                        <tr>
                          <td><div align="left"><font color="#FFFFFF">City:</font></div></td>
                          <td><div align="left"><a href="profile_city.php?id=Delhi" target="_blank" class="none style8">
							<font color="#FFFFFF">Delhi</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_city.php?id=Calcutta" target="_blank" class="none style8"><font color="#FFFFFF">Calcutta</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_city.php?id=Mumbai" target="_blank" class="none style8"><font color="#FFFFFF">Mumbai</font></a><font color="#FFFFFF">&nbsp;<span class="style7">|</span>&nbsp;</font><a href="profile_city.php?id=Chennai" target="_blank" class="none style8"><font color="#FFFFFF">Chennai</font></a><font color="#FFFFFF"><span class="style7"> |</span> 
							</font> <a href="searchoption.php" target="_blank" class="style8">
							<font color="#FFFFFF">More...</font></a></div></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </table></td>
											</tr>
										</table>
										</td>
										<td height="200" width="104">&nbsp;</td>
										<td height="200" width="258" valign="bottom">
										<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0">
											<tr>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td height="106">&nbsp;</td>
											</tr>
											<tr>
												<td height="50"><a href="registration1.php">
												<img src="jpg%20files/register_but.jpg" width="170" height="44" border="0"></a></td>
											</tr>
											<tr>
												<td height="10"></td>
											</tr>
										</table>
										</td>
									</tr>
								</table>
								</td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td>
							<table border="0" width="780" id="table9" cellspacing="0" cellpadding="0" height="154">
								<tr>
									<td height="154" background="jpg%20files/3_banner.JPG">
									<table border="0" width="780" id="table10" cellspacing="0" cellpadding="0" height="150">
										<tr>
											<td height="150" width="17">&nbsp;</td>
											<td height="150" width="278">
											<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
												<tr>
													<td>
						 <FORM  name="form1" id="form1" method="post" action="memlogin_submit.php">
					    <table width="100%" border="0" cellspacing="2" cellpadding="3" id="table12">
                          <tr>
                            <td><font 
					color="#FDB400"><b>Member Login</b></font></td>
                          </tr>
                          <tr>
                            <td><font color="#FFFFFF">ID/E-mail :&nbsp;
                                <input name="txtusername" type="text" class="forminput" maxlength="50"  />                            </font>                            </td>
                          </tr>
                          <tr>
                            <td><font color="#FFFFFF">Password :&nbsp;
                                <input name="txtpassword" type="password" class="forminput" id="txtpassword" maxlength="50"  /></font></td>
                          </tr>
                          <tr>
                            <td>
							<input name="Submit" type="image" value="Submit" src="jpg%20files/login_but.GIF" width="65" height="30" />
                              &nbsp;&nbsp;<a class="txtsmall" title="Forgot Password?" 
					href="forgotpassword.php"><font 
					color="#FFFFFF">Forgot Password?</font></a></td>
                          </tr>
                        </table></FORM>
					  								</td>
												</tr>
											</table>
											</td>
											<td height="150" width="188">&nbsp;</td>
											<td height="150" valign="top">
											<table border="0" width="100%" id="table13" cellspacing="0" cellpadding="0" height="133">
												<tr>
													<td height="13">
													<p style="margin-top: 0; margin-bottom: 0">
													</td>
												</tr>
												<tr>
													<td height="28"><DIV align="center">
														<p style="margin-top: 0; margin-bottom: 0"><A href="more_recent_profiles.php" class="none "><STRONG>
														<FONT color="#FDB400" size="2">Featured Members</FONT></STRONG></A></DIV>
													<p style="margin-top: 0; margin-bottom: 0">&nbsp;</td>
												</tr>
												<tr>
													<td>
													<p style="margin: 0 5px">
													<font color="#FFFFFF">
													<STRONG>Over 350 New Profiles everyday</STRONG><BR />
  													The Right Way to Get Started on your&nbsp;&nbsp;&nbsp; marriage !
													</font></td>
												</tr>
												<tr>
													<td height="47">
													<p style="margin-left: 5px; margin-right: 5px">
													<font color="#FFFFFF">Avail value added services, become a <BR />
					    							<STRONG>Premium   Member</STRONG></font><font color="#FDB400">
													</font> <STRONG><A href="paymentoptions.php"><u>
													<font color="#FDB400">Click here&raquo;</font></u></A></STRONG></td>
												</tr>
											</table>
											</td>
											<td height="150" width="21">&nbsp;</td>
										</tr>
									</table>
									</td>
								</tr>
							</table>
                          </td>
                        </tr>
                      </table></TD>
					</TR>
					

					<TR valign="top">
					  <TD bgcolor="#FFFFFF"><?php include("footer.php");?></TD>
				  </TR>
					<TR valign="top">
					  <TD bgcolor="#FFFFFF"></TD>
		  </TR>
</TABLE>
	  </TD>
  </tr>
</TABLE>  
</DIV>
</BODY>
</HTML>