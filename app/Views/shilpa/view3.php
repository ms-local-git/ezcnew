<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <?php
         require(APPPATH."views\common\__header.php");
         
         ?>
      <title>Client Price Table</title>
      <?php require(APPPATH."views\common\__css.php"); ?>
      <!-- END: Custom CSS-->
      <style type="text/css">
         .table td{
            padding: 4px !important;
            text-align: center;
         }
          input{
            display: block;
    width: 100%;
    height: 2.714rem;
    padding: 0.438rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.45;
    color: #6e6b7b;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d8d6de;
    border-radius: 0.357rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
         }
      </style>
   </head>
   <!-- END: Head-->
   <!-- BEGIN: Body-->
   <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
      <!-- BEGIN: Header-->
      <?php require(APPPATH."views\common\__header_menu.php"); ?>
      <ul class="main-search-list-defaultlist d-none">
         <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
               <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/xls.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Two new item submitted</p>
                     <small class="text-muted">Marketing Manager</small> 
                  </div>
               </div>
               <small class="search-data-size mr-50 text-muted">&apos;17kb</small> 
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/jpg.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">52 JPG file Generated</p>
                     <small class="text-muted">FontEnd Developer</small> 
                  </div>
               </div>
               <small class="search-data-size mr-50 text-muted">&apos;11kb</small> 
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/pdf.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">25 PDF File Uploaded</p>
                     <small class="text-muted">Digital Marketing Manager</small> 
                  </div>
               </div>
               <small class="search-data-size mr-50 text-muted">&apos;150kb</small> 
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
               <div class="d-flex">
                  <div class="mr-75"><img src="<?=base_url()?>/assets/app/images/icons/doc.png" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Anna_Strong.doc</p>
                     <small class="text-muted">Web Designer</small> 
                  </div>
               </div>
               <small class="search-data-size mr-50 text-muted">&apos;256kb</small> 
            </a>
         </li>
         <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
               <h6 class="section-label mt-75 mb-0">Members</h6>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">John Doe</p>
                     <small class="text-muted">UI designer</small> 
                  </div>
               </div>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Michal Clark</p>
                     <small class="text-muted">FontEnd Developer</small> 
                  </div>
               </div>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Milena Gibson</p>
                     <small class="text-muted">Digital Marketing Manager</small> 
                  </div>
               </div>
            </a>
         </li>
         <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
               <div class="d-flex align-items-center">
                  <div class="avatar mr-75"><img src="<?=base_url()?>/assets/app/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                  <div class="search-data">
                     <p class="search-data-title mb-0">Anna Strong</p>
                     <small class="text-muted">Web Designer</small> 
                  </div>
               </div>
            </a>
         </li>
      </ul>
      <ul class="main-search-list-defaultlist-other-list d-none">
         <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
               <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a>
         </li>
      </ul>
      <!-- END: Header-->
      <?php require(APPPATH."views\common\__left_menu.php"); ?>
      <!-- BEGIN: Content-->
      <div class="app-content content ">
         <div class="content-overlay"></div>
         <div class="header-navbar-shadow"></div>
         <div class="content-wrapper container-xxl p-0">
            <!--Create Offical Information -->
            <section name="invoice-printout">
             <div>
              <h2 class="card-title">Client Price Table|Service</h2>
              <br>
             </div> 
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                                
                           <div>
                              <h6 class="card-title"><h3>Client Price Table|service</h3></h6>
                              <br/>
                           </div>
                        </div>
                        <div class="card-body">
                           <form action="<?= base_url() ?>/Agent/create" method="POST" enctype="multipart/form-data">
                          
                           <table width="83%" border="1" cellpadding="0" cellspacing="0" bordercolor="#2A2F83">
			<form action="c_p_table.php" method="post" name="form1"></form>
              <tbody><tr>
                <td> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody><tr>
                    <td height="27" background="../pic4/line20.jpg" bgcolor="#DEE3ED"><span class="style1">&nbsp;&nbsp;<span class="style5">Client Price Table ::: </span></span></td>
                  </tr>
                </tbody></table>                
                  <table width="763" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td width="763">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                          <td width="6%"></td>
                          <td width="94%">&nbsp; </td>
                        </tr>
                      </tbody></table>
</td>
                      </tr>
					  
					  <tr>
                      <td>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                          <td width="6%">&nbsp;</td>
                          <td width="47%"><div align="left"><span class="text2">
						    
						  <a href="c_p_table_view.php?cpt_dir=247" class="link2">  </a>
						    						                              </span></div></td>
                          <td width="47%"><div align="right"><span class="text2"><a href="c_p_table_view.php?cpt_dir=247" class="link2">Click Here to go CPT Directory<span class="heading1">&nbsp;&nbsp;</span><span class="heading1">&nbsp;&nbsp;</span></a></span></div></td>
                        </tr>
                      </tbody></table>
</td>
                      </tr>     
                  </tbody></table>
				  <br>
				  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td width="53%" height="73" align="center"><table width="390" height="86" border="1" cellpadding="0" cellspacing="0" bordercolor="#000066">
                        <tbody><tr>
                          <td width="392" height="84"><table width="388" height="82" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                              <td width="166" height="28"><div align="left"><span class="heading1">&nbsp;&nbsp;CPT Name :</span></div></td>
                              <td width="12">&nbsp;</td>
                              <td width="210"><span class="heading1">CAR                                    <input name="cpt" type="hidden" id="cpt2" value="1445">
                                    <input name="cpt_dir" type="hidden" id="cpt_dir2" value="247">
                              </span></td>
                            </tr>
                            <tr>
                              <td height="25"><div align="right" class="heading2">
                                  <div align="left">&nbsp;&nbsp;&nbsp;Description :</div>
                              </div></td>
                              <td>&nbsp;</td>
                              <td><div align="left" class="heading2">
                                  <input name="description" type="text" class="heading2" id="description4" size="18" maxlength="25" value="1_car_rates">
                              </div></td>
                            </tr>
                            <tr>
                              <td height="29"><div align="left"><span class="heading2">&nbsp;&nbsp;&nbsp;CPT Directory :</span></div></td>
                              <td>&nbsp;</td>
                              <td><span class="heading2"> 1003                                    <input name="cpt_name" type="hidden" class="inputtext" id="cpt_name4" size="10" maxlength="10" value="CAR" onkeypress="javascript: if(event.keyCode==13) document.form1.description.focus();">
                                    <input name="act" type="hidden" id="act4" value="i">
                                    <input name="cpt_id" type="hidden" id="cpt_id4" value="1445">
                                    <input name="to_cpt" type="hidden" id="to_cpt">
</span></td>
                            </tr>
                          </tbody></table></td>
                        </tr>
                      </tbody></table></td>
                      <td width="1%">&nbsp;</td>
                      <td width="46%"><table width="347" height="84" border="1" cellpadding="0" cellspacing="0" bordercolor="#990000">
                        <tbody><tr>
                          <td width="344" height="82"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody><tr>
                              <td height="25" colspan="2"><span class="heading2 style6">&nbsp;&nbsp;&nbsp;Copy Complete CPT From : </span></td>
                              </tr>
                            <tr>
                              <td height="25" colspan="2">
                                <div align="left"><span class="heading1">&nbsp;&nbsp;&nbsp;</span>
                                    <select name="from_cpt" class="inputtext_3" id="from_cpt">
									<option label="Mini" van="" value="1446">Mini Van</option><option label="Cargo" van="" value="1447">Cargo Van</option><option label="Truck" value="1448">Truck</option><option label="Truck" 18="" ft="" value="1832">Truck 18 ft</option><option label="Truck" with="" lift="" value="1449">Truck With lift</option><option label="Trailer" value="1450">Trailer</option><option label="Messenger" value="1703">Messenger</option>                                        </select>
                                </div></td>
                              </tr>
                            <tr>
                              <td width="70%" height="25"><div align="left"></div></td>
                              <td width="30%" height="25">
                                <div align="left">
                                  <input name="Copy" type="button" id="Copy" value="   Copy   " onclick="har_copy();">
                                </div></td>
                            </tr>
                          </tbody></table></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody></table>
				  <table width="100%" height="0%" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                      <td width="15" height="3%">&nbsp;</td>
                      <td width="727" rowspan="3" bgcolor="#DEE3ED"><div align="center">
                          <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
                            <tbody><tr>
                              <td height="59" bgcolor="#FFA4FF"><div align="center"><span class="heading1">Miles / Base </span></div></td>
                              </tr>
                          </tbody></table>
                      </div></td>
                      <td width="21">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="3%">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="3%">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="34%">&nbsp;</td>
                      <td valign="top"><table width="100%" height="49%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
                          <tbody><tr>
                            <td width="50%" height="247" valign="top"><table width="100%" height="247" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F3F4">
                              <tbody><tr bgcolor="#FFE8FF">
                                <td height="28" colspan="3"><div align="center">
                                    <input name="miles" type="radio" onclick="har_miles1()" value="f" checked="">
                                    <span class="form_heading">By Formula </span></div></td>
                              </tr>
                              <tr bgcolor="#FFE8FF">
                                <td height="19" colspan="3">&nbsp;</td>
                              </tr>
                              <tr bgcolor="#FFE8FF">
                                <td width="8%" height="19" class="form_text"><div align="center">A.</div></td>
                                <td width="50%"><span class="form_text">Minimum Miles Base </span></td>
                                <td width="42%" bgcolor="#FFE8FF"><span class="form_text">
                                  <input name="min_miles" type="text" class="inputtext" id="min_miles" size="6" maxlength="6" value="" onkeypress="javascript: if(event.keyCode==13) document.form1.m_min_char.focus(); h_digit_only();">
</span></td>
                              </tr>
                              <tr bgcolor="#FFE8FF">
                                <td height="19" class="form_text"><div align="center">B.</div></td>
                                <td><span class="form_text">Minimum Charges: </span></td>
                                <td><span class="form_text">
                                  <input name="m_min_char" type="text" class="inputtext" id="m_min_char" size="6" maxlength="6" value="" onkeypress="  if(event.keyCode==13) document.form1.m_per_char.focus(); h_digit_only();">
</span></td>
                              </tr>
                              <tr bgcolor="#FFE8FF">
                                <td height="19" class="form_text"><div align="center">C.</div></td>
                                <td><span class="form_text">Per Miles Charges: </span></td>
                                <td><span class="form_text">
                                  <input name="m_per_char" type="text" class="inputtext" id="m_per_char" size="6" maxlength="6" onkeypress="h_digit_only();" value="">
(for one mile)</span></td>
                              </tr>
                              <tr bgcolor="#FFE8FF">
                                <td height="19" colspan="3">&nbsp;</td>
                              </tr>
                              <tr bgcolor="#FFE8FF">
                                <td height="124" colspan="3"><div align="center" class="form_note3">(((Miles-A)*C)+B)</div></td>
                              </tr>
                            </tbody></table></td>
                            <td width="50%" valign="top" bgcolor="#FFE8FF"><table width="100%" height="27" border="0" cellspacing="0" cellpadding="0">
                              <tbody><tr>
                                <td height="27" bgcolor="#FFE8FF"><div align="center">
                                    <input name="miles" type="radio" value="r" onclick="har_miles1()">
                                    <span class="form_heading">By Range </span></div></td>
                              </tr>
                            </tbody></table>

							  <table width="100%" height="70%" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
                                <tbody><tr>
                                  <td><iframe src="c_p_range_miles.php?cpt_id=1445" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" id="ran_miles" title="ran_miles" height="100%" width="100%"></iframe></td>
							  </tr>
                              </tbody></table>
							  
							  <table width="100%" height="30%" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
                                <tbody><tr>
                                  <td> <iframe src="c_p_copy_range_miles.php?cpt_id=1445&amp;act=1" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" id="copy_ran_miles" title="copy_ran_miles" height="100%" width="100%"> </iframe></td>
							  </tr>
                              </tbody></table>							  </td>
                          </tr>
                      </tbody></table></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="3%">&nbsp;</td>
                      <td valign="top">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="3%">&nbsp;</td>
                      <td rowspan="3" align="center" valign="middle" bgcolor="#DEE3ED"><div align="center"></div>                        <div align="center">
                          <table width="100%" height="15%" border="1" cellpadding="0" cellspacing="0" bordercolor="#666666">
                            <tbody><tr>
                              <td height="55" bgcolor="#53A6A6"><div align="center"><span class="heading1">COUNTY</span></div></td>
                            </tr>
                          </tbody></table>
                        </div></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="3%">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="3%">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="34%">&nbsp;</td>
                      <td valign="top"><table width="100%" height="247" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999">
                        <tbody><tr>
                          <td width="50%" height="100%" align="center" bgcolor="#ABD6D6"><table width="74%" height="22" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                              <td><input type="checkbox" name="is_county" value="1">
                                <span class="heading2_r"><strong>Consider County</strong></span></td>
                            </tr>
                          </tbody></table></td>
                          <td width="50%" valign="top" bgcolor="#ABD6D6"> 

							  <table width="100%" height="70%" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
                                <tbody><tr>
                                  <td><iframe src="c_p_county.php?cpt_id=1445" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" id="county" title="county" height="100%" width="100%"></iframe></td>
							  </tr>
                              </tbody></table>
							  
							  <table width="100%" height="30%" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
                                <tbody><tr>
                                  <td> <iframe src="c_p_copy_county.php?cpt_id=1445&amp;act=1" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" id="copy_county" title="copy_county" height="100%" width="100%"> </iframe></td>
							  </tr>
                              </tbody></table>							  </td>
						  
						  
                        </tr>
                      </tbody></table></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="11%">&nbsp;</td>
                      <td valign="top">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody></table>
                  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                      <td width="15">&nbsp;</td>
                      <td rowspan="3" align="center" bgcolor="#CACA00"><div align="center">
                        <table width="101%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                          <tbody><tr>
                            <td><div align="center"><span class="heading1">Weight</span></div></td>
                          </tr>
                        </tbody></table>
                      </div></td>
                      <td width="23">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top"><table width="100%" height="247" border="1" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                          <td width="50%" height="170" valign="top"><table width="100%" height="247" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFBB">
                            <tbody><tr>
                              <td colspan="3"><div align="center">
                                <input name="weight" type="radio" value="f" onclick="har_weight()" checked="">
                                  <span class="form_heading">By Formula </span></div></td>
                            </tr>
							                            <tr>
                              <td height="41" colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="8%" class="form_text"><div align="center">A.</div></td>
                              <td width="50%"><span class="form_text">Minimum Weight</span></td>
                              <td width="42%"><span class="form_text">
                                <input name="min_weight" type="text" class="inputtext" id="min_weight" size="6" maxlength="6" value="" onkeypress="javascript: if(event.keyCode==13) document.form1.w_min_char.focus(); h_digit_only();">
                              </span></td>
                            </tr>
                            <tr>
                              <td class="form_text"><div align="center">B.</div></td>
                              <td><span class="form_text">Minimum Charges: </span></td>
                              <td><span class="form_text">
                                <input name="w_min_char" type="text" class="inputtext" id="w_min_char" size="6" maxlength="6" value="" onkeypress="  if(event.keyCode==13) document.form1.w_per_char.focus();  h_digit_only();">
                              </span></td>
                            </tr>
                            <tr>
                              <td class="form_text"><div align="center">C.</div></td>
                              <td><span class="form_text">Per Weight Charges: </span></td>
                              <td><span class="form_text">
                                <input name="w_per_char" type="text" class="inputtext" id="w_per_char" size="6" maxlength="6" onkeypress="h_digit_only();" value="">
(for one LBS)                            </span></td>
                            </tr>
                            <tr>
                              <td colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="18" colspan="3"><div align="center" class="form_note3">(((Weight-A)*C)+B)</div></td>
                            </tr>
                            <tr>
                              <td colspan="3">&nbsp;</td>
                            </tr>
                          </tbody></table></td>
                          <td width="50%" valign="top" bgcolor="#FFFFBB"><table width="100%" height="27" border="0" cellspacing="0" cellpadding="0">
                            <tbody><tr>
                              <td height="27" bgcolor="#FFFFBB"><div align="center">
                                  <input name="weight" type="radio" value="r" onclick="har_weight()">
                                  <span class="form_heading">By Range </span></div></td>
                            </tr>
                          </tbody></table>

							  <table width="100%" height="70%" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
                                <tbody><tr>
                                  <td><iframe src="c_p_range_weight.php?cpt_id=1445" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" id="ran_weight" title="ran_weight" height="100%" width="100%"></iframe></td>
							  </tr>
                              </tbody></table>
							  
							  <table width="100%" height="30%" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
                                <tbody><tr>
                                  <td> <iframe src="c_p_copy_range_weight.php?cpt_id=1445&amp;act=1" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" id="copy_ran_weight" title="copy_ran_weight" height="100%" width="100%"> </iframe></td>
							  </tr>
                              </tbody></table>								
							
							</td>
                        </tr>
                      </tbody></table></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody></table>
                  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                      <td>&nbsp;</td>
                      <td rowspan="3" bgcolor="#CACA00"><div align="center">
                          <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                            <tbody><tr>
                              <td bgcolor="#CACA00"><div align="center"><span class="heading1"> <strong>Pallets</strong></span></div></td>
                            </tr>
                          </tbody></table>
                      </div></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0">
                          <tbody><tr>
                            <td width="25%" valign="top"><table width="100%" height="247" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFBB">
                                <tbody><tr>
                                  <td colspan="3"><div align="center"> </div></td>
                                </tr>
                                <tr>
                                  <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="12%" class="form_text"><div align="center">A.</div></td>
                                  <td width="44%"><span class="form_text">Minimum Pallets</span></td>
                                  <td width="44%"><span class="form_text">
                                    <input name="min_pallets" type="text" class="inputtext" id="min_pallets" size="6" maxlength="6" value="0" onkeypress=" if(event.keyCode==13) document.form1.pallets_min_char.focus(); h_digit_only();">
                                  </span></td>
                                </tr>
                                <tr>
                                  <td class="form_text"><div align="center">B.</div></td>
                                  <td><span class="form_text">Minimum Charges: </span></td>
                                  <td><span class="form_text">
                                    <input name="pallets_min_char" type="text" class="inputtext" id="pallets_min_char" size="6" maxlength="6" value="0" onkeypress="javascript: if(event.keyCode==13) document.form1.pallets_per_char.focus(); h_digit_only();">
                                  </span></td>
                                </tr>
                                <tr>
                                  <td class="form_text"><div align="center">C.</div></td>
                                  <td><span class="form_text">Per Pallets Charges: </span></td>
                                  <td><span class="form_text">
                                    <input name="pallets_per_char" type="text" class="inputtext" id="pallets_per_char" size="6" maxlength="6" onkeypress="h_digit_only();" value="0">
                                  </span></td>
                                </tr>
                                <tr>
                                  <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="3"><div align="center" class="form_note3">(((<span class="form_text">No. of Pallets</span>-A)*C)+B)</div></td>
                                </tr>
                                <tr>
                                  <td height="26" colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="3">&nbsp;</td>
                                </tr>
                            </tbody></table></td>
                            <td width="25%" valign="top" bgcolor="#FFFFBB">&nbsp;</td>
                          </tr>
                      </tbody></table></td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody></table>
                  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                      <td>&nbsp;</td>
                      <td valign="top">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="2%">&nbsp;</td>
                      <td width="95%" rowspan="3" bgcolor="#0091D7"><div align="center">
                        <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                          <tbody><tr>
                            <td bgcolor="#0091D7"><div align="center"><span class="heading1">Waiting Time </span></div></td>
                          </tr>
                        </tbody></table>
                      </div></td>
                      <td width="3%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top"><table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0">
                          <tbody><tr>
                            <td width="50%" valign="top"><table width="100%" height="247" border="0" cellpadding="0" cellspacing="0" bgcolor="#C1EBFF">
                              <tbody><tr>
                                <td colspan="3"><div align="center">
                                    <input name="waiting" type="radio" value="f" checked="" onclick="har_waiting()">
                                    <span class="form_heading">By Formula </span></div></td>
                              </tr>
                              <tr>
                                <td colspan="3">&nbsp;</td>
                              </tr>
                              <tr>
                                <td width="8%" class="form_text"><div align="center">A.</div></td>
                                <td width="50%"><span class="form_text">Minimum W.Time </span></td>
                                <td width="42%"><span class="form_text">
                                  <input name="min_waiting" type="text" class="inputtext" id="min_waiting" size="6" maxlength="6" value="" onkeypress=" if(event.keyCode==13) document.form1.wt_min_char.focus(); h_digit_only();">
                                </span></td>
                              </tr>
                              <tr>
                                <td class="form_text"><div align="center">B.</div></td>
                                <td><span class="form_text">Minimum Charges: </span></td>
                                <td><span class="form_text">
                                  <input name="wt_min_char" type="text" class="inputtext" id="wt_min_char" size="6" maxlength="6" value="" onkeypress="javascript: if(event.keyCode==13) document.form1.wt_per_char.focus(); h_digit_only();">
                                </span></td>
                              </tr>
                              <tr>
                                <td class="form_text"><div align="center">C.</div></td>
                                <td><span class="form_text">Per W.Time Charges: </span></td>
                                <td><span class="form_text">
                                  <input name="wt_per_char" type="text" class="inputtext" id="wt_per_char" size="6" maxlength="6" onkeypress="h_digit_only();" value=""> 
                                  (for a min.) </span></td>
                              </tr>
                              <tr>
                                <td colspan="3">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3"><div align="center" class="form_note3">(((Waiting Time-A)*C)+B)</div></td>
                              </tr>
                              <tr>
                                <td height="26" colspan="3">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3">&nbsp;</td>
                              </tr>
                            </tbody></table></td>
                            <td width="50%" valign="top" bgcolor="#C1EBFF"><table width="100%" height="27" border="0" cellspacing="0" cellpadding="0">
                              <tbody><tr>
                                <td height="27" bgcolor="#C1EBFF"><div align="center">
                                    <input name="waiting" type="radio" value="r" onclick="har_waiting()">
                                    <span class="form_heading">By Range </span></div></td>
                              </tr>
                            </tbody></table>
						  
							  <table width="100%" height="70%" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
                                <tbody><tr>
                                  <td><iframe src="c_p_range_waiting.php?cpt_id=1445" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" id="ran_waiting" title="ran_waiting" height="100%" width="100%"></iframe></td>
							  </tr>
                              </tbody></table>
							  
							  <table width="100%" height="30%" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
                                <tbody><tr>
                                  <td> <iframe src="c_p_copy_range_waiting.php?cpt_id=1445&amp;act=1" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" id="copy_ran_waiting" title="copy_ran_waiting" height="100%" width="100%"> </iframe></td>
							  </tr>
                              </tbody></table>								
</td>

                          </tr>
                      </tbody></table></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody></table>                  
                  <table width="100%" height="84%" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                      <td>&nbsp;</td>
                      <td rowspan="3" bgcolor="#9999FF"><div align="center">
                          <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                            <tbody><tr>
                              <td bgcolor="#9999FF"><div align="center"><span class="heading1"> Service Charges</span></div></td>
                            </tr>
                          </tbody></table>
                      </div></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top"><table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0">
                          <tbody><tr>
                            <td width="100%" height="122"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F3F4">
                                <tbody><tr valign="top">
                                  <td valign="top"><table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                                      <tbody><tr>
                                        <td height="207" align="center" valign="top" bgcolor="#DDDDFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="form_heading">
                                            <tbody><tr>
                                              <td width="129" height="24" class="form_heading">Charges 1st. --&gt; </td>
                                              <td width="245">Name :
<input name="chr_name1" type="text" class="inputtext" id="chr_name1" onkeypress="h_capital_only();" value="" size="25" maxlength="25"></td>
                                              <td width="193">Value / Chrg. :
                                                <input name="chr_amt1" type="text" class="inputtext" id="chr_amt1" size="6" maxlength="6" onkeypress="h_digit_only()" value="">                                                 
                                                </td>
                                              <td width="60"><input name="chr_type1" type="radio" value="f" checked="">
                                                Fix</td>
                                              <td width="90"><input name="chr_type1" type="radio" value="p"> 
                                                Percent.</td>
                                            </tr>
                                            <tr>
                                              <td>Charges 2nd. --&gt;</td>
                                              <td>Name :
<input name="chr_name2" type="text" class="inputtext" id="chr_name2" size="25" maxlength="25" onkeypress="h_capital_only();" value=""></td>
                                              <td>Value / Chrg. : <input name="chr_amt2" type="text" class="inputtext" id="chr_amt2" size="6" maxlength="6" onkeypress="h_digit_only()" value="">                                                  </td>
                                              <td><input name="chr_type2" type="radio" value="f" checked="">
Fix</td>
                                              <td><input name="chr_type2" type="radio" value="p">
Percent.</td>
                                            </tr>
                                            <tr>
                                              <td>Charges 3rd. --&gt;</td>
                                              <td>Name :
<input name="chr_name3" type="text" class="inputtext" id="chr_name3" size="25" maxlength="25" onkeypress="h_capital_only();" value=""></td>
                                              <td>Value / Chrg. : <input name="chr_amt3" type="text" class="inputtext" id="chr_amt3" size="6" maxlength="6" onkeypress="h_digit_only()" value="">                                                  </td>
                                              <td><input name="chr_type3" type="radio" value="f" checked="">
Fix</td>
                                              <td><input name="chr_type3" type="radio" value="p">
Percent.</td>
                                            </tr>
                                            <tr>
                                              <td>Charges 4th. --&gt;</td>
                                              <td>Name :
                                                <input name="chr_name4" type="text" class="inputtext" id="chr_name4" size="25" maxlength="25" onkeypress="h_capital_only();" value=""></td>
                                              <td>Value / Chrg. : <input name="chr_amt4" type="text" class="inputtext" id="chr_amt4" size="6" maxlength="6" onkeypress="h_digit_only()" value="">                                                  </td>
                                              <td><input name="chr_type4" type="radio" value="f" checked="">
Fix</td>
                                              <td><input name="chr_type4" type="radio" value="p">
Percent.</td>
                                            </tr>
                                            <tr>
                                              <td>Charges 5th. --&gt;</td>
                                              <td>Name :
<input name="chr_name5" type="text" class="inputtext" id="chr_name5" size="25" maxlength="25" onkeypress="h_capital_only();" value=""></td>
                                              <td>Value / Chrg. : <input name="chr_amt5" type="text" class="inputtext" id="chr_amt5" size="6" maxlength="6" onkeypress="h_digit_only()" value="">                                                  </td>
                                              <td><input name="chr_type5" type="radio" value="f" checked="">
Fix</td>
                                              <td><input name="chr_type5" type="radio" value="p">
Percent.</td>
                                            </tr>
                                            <tr>
                                              <td>Charges 6th. --&gt;</td>
                                              <td>Name :
<input name="chr_name6" type="text" class="inputtext" id="chr_name6" size="25" maxlength="25" onkeypress="h_capital_only();" value=""></td>
                                              <td>Value / Chrg. :
                                                <input name="chr_amt6" type="text" class="inputtext" id="chr_amt6" size="6" maxlength="6" onkeypress="h_digit_only()" value="">                                                  </td>
                                              <td><input name="chr_type6" type="radio" value="f" checked="">
Fix</td>
                                              <td><input name="chr_type6" type="radio" value="p">
Percent.</td>
                                            </tr>
                                          </tbody></table>
                                            <div align="center" class="form_note3">
                                              <div align="right"><br>
                                                (<strong>Note :</strong> Precentage will calculate on Base Charges.)&nbsp;&nbsp;&nbsp;&nbsp; </div>
                                            </div>                                            
                                            <table width="100%" height="30%" border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
                                              <tbody><tr>
                                                <td height="70">
                                                  <iframe src="c_p_copy_charges.php?cpt_id=1445&amp;act=1" scrolling="auto" marginheight="0" marginwidth="0" frameborder="0" id="copy_ran_miles" title="copy_ran_miles" height="100%" width="100%"> </iframe></td>
                                              </tr>
                                          </tbody></table></td>
                                      </tr>
                                  </tbody></table></td>
                                </tr>
                            </tbody></table></td>
                          </tr>
                      </tbody></table></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top"><div align="right" class="form_note3"></div></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="2%">&nbsp;</td>
                      <td width="95%" rowspan="3" bgcolor="#99CC00"><div align="center">
                          <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                            <tbody><tr>
                              <td bgcolor="#99CC00"><div align="center"><span class="heading1"> Misc. </span></div></td>
                            </tr>
                          </tbody></table>
                      </div></td>
                      <td width="3%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top"><table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0">
                          <tbody><tr>
                            <td width="100%" height="122"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F3F4">
                                <tbody><tr valign="top">
                                  <td width="50%" valign="top"><div align="center"> </div>
                                      <div align="center">
                                        <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                                          <tbody><tr>
                                            <td width="50%" height="128" bgcolor="#F5FFD7">
                                              <div align="center">
                                                <p><span class="form_heading">Fuel Charges : </span>
                                                    <input name="fuel" type="text" class="inputtext" id="fuel" size="6" maxlength="6" onkeypress="h_digit_only()" value="">
                                                    <span class="form_note2">%</span> </p>
                                            </div></td>
                                          </tr>
                                        </tbody></table>
                                    </div></td>
                                  <td valign="top"><div align="center">
                                      <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                                        <tbody><tr>
                                          <td height="128" bgcolor="#F5FFD7">
                                            <div align="center">
                                              <p>&nbsp; </p>
                                          </div></td>
                                        </tr>
                                      </tbody></table>
                                  </div></td>
                                </tr>
                            </tbody></table></td>
                          </tr>
                      </tbody></table></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top"><div align="right" class="form_note3">[% will apply on base ] </div></td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody></table>
                  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                      <td width="2%">&nbsp;</td>
                      <td width="95%" rowspan="3" bgcolor="#999999"><div align="center">
                          <table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                            <tbody><tr>
                              <td bgcolor="#999999"><div align="center"><span class="form_heading">
        Weekend / Holiday / Night </span></div></td>
                            </tr>
                          </tbody></table>
                      </div></td>
                      <td width="3%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top"><table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0">
                          <tbody><tr>
                            
                            <td width="100%" height="122"><table width="100%" height="204" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F3F4">
                                <tbody><tr valign="top">
                                  <td width="25%" height="175" valign="top"><div align="center">                                    
                                      <table width="180" height="216" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                                        <tbody><tr>
                                          <td width="176" height="214" align="center" valign="top" bgcolor="#CCCCCC">                                            <div align="center">
                                            <p align="center">                                                <br>
                                              <input name="is_weekend" type="checkbox" id="is_weekend" value="1">
                                                <span class="form_heading"> Weekend Charges</span> <br>
                                            </p>
                                            <p align="center">&nbsp;                                            </p>
                                            <table width="168" height="63" border="1" cellpadding="0" cellspacing="0">
                                              <tbody><tr>
                                                <td width="88" height="19"><div align="center">
                                                  <input name="weekend_per_fix" type="radio" value="f" checked="">
                                                    <span class="form_note2">Fixed</span></div></td>
                                                <td width="88"><input name="weekend_per_fix" type="radio" value="p">
                                                  <span class="form_note2">Per. %</span></td>
                                              </tr>
                                              <tr>
                                                <td height="44" colspan="2"><div align="center"><span class="form_heading">Value :</span>
                                                      <input name="weekend_value" type="text" class="inputtext" id="weekend_value" size="6" maxlength="6" onkeypress="h_digit_only()" value="">
                                                </div></td>
                                              </tr>
                                            </tbody></table>
                                            </div></td>
                                        </tr>
                                      </tbody></table>
                                      
                                </div></td>
                                  <td width="25%" valign="top"><div align="center">                                      
                                    <table width="179" height="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                                      <tbody><tr>
                                        <td width="176" height="211" align="center" valign="top" bgcolor="#CCCCCC"><div align="center">
                                          <p align="center">                                              <br>
                                            <input name="is_holiday" type="checkbox" id="is_holiday" value="1">
                                              <span class="form_heading">Holiday 
                                              Charges</span> <br>
                                          </p>
                                          <p align="center">&nbsp;                                          </p>
                                          <table width="168" height="63" border="1" cellpadding="0" cellspacing="0">
                                            <tbody><tr>
                                              <td width="88" height="19"><div align="center">
                                                  <input name="holiday_per_fix" type="radio" value="f" checked="">
                                                  <span class="form_note2">Fixed</span></div></td>
                                              <td width="88"><input name="holiday_per_fix" type="radio" value="p">
                                                  <span class="form_note2">Per. %</span></td>
                                            </tr>
                                            <tr>
                                              <td height="44" colspan="2"><div align="center"><span class="form_heading">Value :</span>
                                                      <input name="holiday_value" type="text" class="inputtext" id="holiday_value" size="6" maxlength="6" onkeypress="h_digit_only()" value="">
                                              </div></td>
                                            </tr>
                                          </tbody></table>
                                        </div></td>
                                      </tr>
                                    </tbody></table>
                                                                    </div></td>
                                  <td width="25%" valign="top"><div align="center">
                                      <table width="180" height="212" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                                        <tbody><tr>
                                          <td width="176" height="210" align="center" valign="top" bgcolor="#CCCCCC"><div align="center">
                                            <p align="center">                                                <br>
                                              <input name="is_night" type="checkbox" id="is_night" value="1">
                                                <span class="form_heading">Night 
                                                Charges</span>                                            </p>
                                            <table width="163" height="151" border="1" cellpadding="0" cellspacing="0">
                                              <tbody><tr>
                                                <td width="81" height="19"><div align="center">
                                                    <input name="night_per_fix" type="radio" value="f" checked="">
                                                    <span class="form_note2">Fixed</span></div></td>
                                                <td width="76"><input name="night_per_fix" type="radio" value="p">
                                                    <span class="form_note2">Per. %</span></td>
                                              </tr>
                                              <tr>
                                                <td height="44" colspan="2"><div align="center">
                                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody><tr>
                                                      <td width="51%"><span class="form_note2">&nbsp;From Time :</span><span class="form_note2">&nbsp;</span> </td>
                                                      <td width="49%"><input name="night_from" type="text" class="inputtext" id="night_from" size="6" maxlength="6" onkeypress="h_time_only(night_from);" value=""></td>
                                                    </tr>
                                                    <tr>
                                                      <td><span class="form_note2">&nbsp;To Time :</span></td>
                                                      <td><input name="night_to" type="text" class="inputtext" id="night_to" size="6" maxlength="6" onkeypress="h_time_only(night_to);" value=""></td>
                                                    </tr>
                                                  </tbody></table></div></td>
                                              </tr>
                                              <tr>
                                                <td height="44" colspan="2"><div align="center">
                                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody><tr>
                                                      <td width="51%"><span class="form_note2">&nbsp;From Time :</span><span class="form_note2">&nbsp;</span> </td>
                                                      <td width="49%"><input name="night_from2" type="text" class="inputtext" id="night_from2" size="6" maxlength="6" onkeypress="h_time_only(night_from2);" value=""></td>
                                                    </tr>
                                                    <tr>
                                                      <td><span class="form_note2">&nbsp;To Time :</span></td>
                                                      <td><input name="night_to2" type="text" class="inputtext" id="night_to2" size="6" maxlength="6" onkeypress="h_time_only(night_to2);" value=""></td>
                                                    </tr>
                                                  </tbody></table>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                <td height="42" colspan="2"><span class="form_heading">Value :</span>
                                                  <input name="night_value" type="text" class="inputtext" id="night_value" size="6" maxlength="6" onkeypress="h_digit_only()" value=""></td>
                                              </tr>
                                            </tbody></table>
                                            </div></td>
                                        </tr>
                                      </tbody></table>
                                      
                                   </div></td>
                                  <td width="25%" valign="top"><table width="181" height="212" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
                                    <tbody><tr>
                                      <td width="177" height="210" align="center" valign="middle" bgcolor="#CCCCCC"><p><br>
                                        <br>
                                        <br>
                                        <input name="is_higher" type="checkbox" id="is_higher" value="1">
                                              <span class="form_heading style6">Apply Higher Value <br>
                                              of <br>
                                              [Weekend, <br>
                                              Holiday, <br>
                                              Night]</span>
&nbsp;<br>
                                          <br>&nbsp;&nbsp;                                        </p>                                          </td>
                                    </tr>
                                  </tbody></table></td>
                                  </tr>
                            </tbody></table></td>
                          </tr>
                      </tbody></table></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="top" class="form_note3"><div align="right">[% will apply on base Charge] </div></td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody></table> 
				  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td><div align="center">
                          <p>
                            <br>
                               &nbsp;
          <input name="Button2" type="button" class="button" value="      Save      " onclick="h_submit2()">
                          </p>
                      </div></td>
                    </tr>
                  </tbody></table>                  <p>&nbsp;</p>                  
                  <p align="center">&nbsp;</p></td>
              </tr>
           
		    </tbody></table>
                        </div>
                     </div>
                  </div>

               </div>
            </section>
      </div>
      <!-- END: Content-->
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
      <?php require(APPPATH.'views\common\__footer.php'); ?>
      <!-- BEGIN: Page JS-->
      <!-- END: Page JS-->
      <script>
         $(document).ready(function() {
            <?php
            $search = $request->getPost("search");
            if(isset($search)) { 
            ?>
            // $('#basic-datatable').show();
            // $('#searchBox').hide();
            <?php } else { ?>
            // $('#basic-datatable').hide();
            <?php } ?>
         });
         // function showFilters() {
         //     $('#searchBox').show();
         //     $('#filterBtn').hide();
         // }
         $(window).on('load', function() {
            if(feather) {
               feather.replace({
                  width: 14,
                  height: 14
               });
            }
         });
      </script>

      <script type="text/javascript">
         function add(){
      var new_chq_no = parseInt($('#total_chq').val())+1;
      var new_input="<input type='text' id='new_" +new_chq_no+"'>";
      $('#new_chq').append(new_input);
      $('#total_chq').val(new_chq_no)
    }
      </script>
   </body>
   <!-- END: Body-->
</html>