
    <!-- Main content -->
    <div class="wrapper">

      
    
		<?php		   
		echo form_open('index.php/update_profile/updateinfo','id="validate" class="main"');
		?>
            <fieldset>
                <div class="widget fluid">
                    
                    <div class="formRow">
                            <div class="grid3"><label>Name:<span class="req">*</span></label></div>
							<div class="grid6"><input class="validate[required]" id="req" type="text" name="uname"  value="<?php echo $name;?>" /></div>
							<div class="clear"></div>
                        </div>
						<div class="formRow">
                            <div class="grid3"><label>Description :</label></div>
							<div class="grid6"><input   type="text" name="desc"  value="<?php echo $description;?>" /></div>
							<div class="clear"></div>
                        </div>

						<div class="formRow">
                            <div class="grid3"><label>Password:</label></div>
                            <div class="grid6"><input class="validate[required]" type="password"id="password1" name="upw"  value="<?php echo $password;?>" /></div>
							
                            <div class="clear"></div>
                        </div>
						
						<div class="formRow">
                            <div class="grid3"><label>Confirm Password:</label></div>
                            <div class="grid6"><input class="validate[required,equals[password1]]" type="password" id="password2"name="ucpw" value="" /></div>
							
                            <div class="clear"></div>
                        </div>
						
						<div class="formRow">
                            <div class="grid3"><label>Email :</label></div>
                            <div class="grid6"><input  class="validate[required,custom[email]]"   id="emailValid"  type="text" name="email" id="city" value="<?php echo $email;?>" /></div>                                                        
							
                            <div class="clear"></div>
                        </div>
                    
<!--
						<div class="formRow">
							<div class="grid3"><label>Timezone :</label></div>
							<div class="grid9">
							
							<?php 
						echo timezone_menu('timezone');
					
							?>
							</div>
							<div class="clear"></div>
							
						</div>
						
	-->				
						
						
						
						
						
					<?php
					$country[0]='Afghanistan';
					$country[1]='Aland Islands';
					$country[2]='Albania';
					$country[3]='Algeria';
					$country[4]='American Samoa';
					$country[5]='Andorra';
					$country[6]='Angola';
					$country[7]='Anguilla';
					$country[8]='Antarctica';
					$country[9]='Antigua and Barbuda';
					$country[10]='Argentina';
					$country[11]='Armenia';
					$country[12]='Aruba';
					$country[13]='Australia';
					$country[14]='Austria';
					$country[15]='Azerbaijan';
					$country[16]='Bahamas';
					$country[17]='Bahrain';
					$country[18]='Bangladesh';
					$country[19]='Barbados';
					$country[20]='Belarus';
					$country[21]='Belgium';
					$country[22]='Belize';
					$country[23]='Benin';
					$country[24]='Bermuda';
					$country[25]='Bhutan';
					$country[26]='Bolivia';
					$country[27]='Bosnia and Herzegovina';
					$country[28]='Botswana';
					$country[29]='Brazil';
					$country[30]='British Indian Ocean Territory';
					$country[31]='Brunei Darussalam';
					$country[32]='Bulgaria';
					$country[33]='Burkina Faso';
					$country[34]='Burundi';
					$country[35]='Cambodia';
					$country[36]='Cameroon';
					$country[37]='Canada';
					$country[38]='Cape Verde';
					$country[39]='Caribbean Nations';
					$country[40]='Cayman Islands';
					$country[41]='Central African Republic';
					$country[42]='Chad';
					$country[43]='Chile';
					$country[44]='China';
					$country[45]='Christmas Island';
					$country[46]='Cocos (Keeling) Islands';
					$country[47]='Colombia';
					$country[48]='Comoros';
					$country[49]='Congo';
					$country[50]='Cook Islands';
					$country[51]='Costa Rica';
					$country[52]='Cote D Ivoire (Ivory Coast)';
					$country[53]='Croatia';
					$country[54]='Cuba';
					$country[55]='Cyprus';
					$country[56]='Czech Republic';
					$country[57]='Democratic Republic of the Congo';
					$country[58]='Denmark';
					$country[59]='Djibouti';
					$country[60]='Dominica';
					$country[61]='Dominican Republic';
					$country[62]='East Timor';
					$country[63]='Ecuador';
					$country[64]='Egypt';
					$country[65]='El Salvador';
					$country[66]='Equatorial Guinea';
					$country[67]='Eritrea';
					$country[68]='Estonia';
					$country[69]='Ethiopia';
					$country[70]='Falkland Islands (Malvinas)';
					$country[71]='Faroe Islands';
					$country[72]='Federated States of Micronesia';
					$country[73]='Fiji';
					$country[74]='Finland';
					$country[75]='France';
					$country[76]='French Guiana';
					$country[77]='French Polynesia';
					$country[78]='French Southern Territories';
					$country[79]='Gabon';
					$country[80]='Gambia';
					$country[81]='Georgia';
					$country[82]='Germany';
					$country[83]='Ghana';
					$country[84]='Gibraltar';
					$country[85]='Greece';
					$country[86]='Greenland';
					$country[87]='Grenada';
					$country[88]='Guadeloupe';
					$country[89]='Guam';
					$country[90]='Guatemala';
					$country[91]='Guernsey';
					$country[92]='Guinea';
					$country[93]='Guinea-Bissau';
					$country[94]='Guyana';
					$country[95]='Haiti';
					$country[96]='Honduras';
					$country[97]='Hong Kong';
					$country[98]='Hungary';
					$country[99]='Iceland';
					$country[100]='India';
					$country[101]='Indonesia';
					$country[102]='Iran';
					$country[103]='Iraq';
					$country[104]='Ireland';
					$country[105]='Isle of Man';
					$country[106]='Israel';
					$country[107]='Italy';
					$country[108]='Jamaica';
					$country[109]='Japan';
					$country[110]='Jersey';
					$country[111]='Jordan';
					$country[112]='Kazakhstan';
					$country[113]='Kenya';
					$country[114]='Kiribati/';
					$country[115]='Korea';
					$country[116]='Korea (North)';
					$country[117]='Kuwait';
					$country[118]='Kyrgyzstan';
					$country[119]='Laos';
					$country[120]='Latvia';
					$country[121]='Lebanon';
					$country[122]='Lesotho';
					$country[123]='Liberia';
					$country[124]='Libya';
					$country[125]='Liechtenstein';
					$country[126]='Lithuania';
					$country[127]='Luxembourg';
					$country[128]='Macao';
					$country[129]='Macedonia';
					$country[130]='Madagascar';
					$country[131]='Malawi';
					$country[132]='Malaysia';
					$country[133]='Maldives';
					$country[134]='Mali';
					$country[135]='Malta';
					$country[136]='Marshall Islands';
					$country[137]='Martinique';
					$country[138]='Mauritania';
					$country[139]='Mauritius';
					$country[140]='Mayotte';
					$country[141]='Mexico';
					$country[142]='Moldova';
					$country[143]='Monaco';
					$country[144]='Mongolia';
					$country[145]='Montenegro';
					$country[146]='Montserrat';
					$country[147]='Morocco';
					$country[148]='Mozambique';
					$country[149]='Myanmar';
					$country[150]='Namibia';
					$country[151]='Nauru';
					$country[152]='Nepal';
					$country[153]='Netherlands';
					$country[154]='Netherlands Antilles';
					$country[155]='New Caledonia';
					$country[156]='New Zealand';
					$country[157]='Nicaragua';
					$country[158]='Niger';
					$country[159]='Nigeria';
					$country[160]='Niue';
					$country[161]='Norfolk Island';
					$country[162]='Northern Mariana Islands';
					$country[163]='Norway';
					$country[164]='Oman';
					$country[165]='Pakistan';
					$country[166]='Palau';
					$country[167]='Palestinian Territory';
					$country[168]='Panama';
					$country[169]='Papua New Guinea';
					$country[170]='Paraguay';
					$country[171]='Peru';
					$country[172]='Philippines';
					$country[173]='Pitcairn';
					$country[174]='Poland';
					$country[175]='Portugal';
					$country[176]='Puerto Rico';
					$country[177]='Qatar';
					$country[178]='Reunion';
					$country[179]='Romania';
					$country[180]='Russian Federation';
					$country[181]='Rwanda';
					$country[182]='Saint Helena';
					$country[183]='Saint Kitts and Nevis';
					$country[184]='Saint Lucia';
					$country[185]='Saint Pierre and Miquelon';
					$country[186]='Saint Vincent and the Grenadines';
					$country[187]='Samoa';
					$country[188]='San Marino';
					$country[189]='Sao Tome and Principe';
					$country[190]='Saudi Arabia';
					$country[191]='Senegal';
					$country[192]='Serbia';
					$country[193]='Seychelles';
					$country[194]='Sierra Leone';
					$country[195]='Singapore';
					$country[196]='Slovak Republic';
					$country[197]='Slovenia';
					$country[198]='Solomon Islands';
					$country[199]='Somalia';
					$country[200]='South Africa';
					$country[201]='Spain';
					$country[202]='Sri Lanka';
					$country[203]='Sudan';
					$country[204]='Suriname';
					$country[205]='Svalbard and Jan Mayen';
					$country[206]='Swaziland';
					$country[207]='Sweden';
					$country[208]='Switzerland';
					$country[209]='Syria';
					$country[210]='Taiwan';
					$country[211]='Tajikistan';
					$country[212]='Tanzania';
					$country[213]='Thailand';
					$country[214]='Timor-Leste';
					$country[215]='Togo';
					$country[216]='Tokelau';
					$country[217]='Tonga';
					$country[218]='Trinidad and Tobago';
					$country[219]='Tunisia';
					$country[220]='Turkey';
					$country[221]='Turkmenistan';
					$country[222]='Turks and Caicos Islands';
					$country[223]='Tuvalu';
					$country[224]='Uganda';
					$country[225]='Ukraine';
					$country[226]='United Arab Emirates';
					$country[227]='United Kingdom';
					$country[228]='United States';
					$country[229]='Uruguay';
					$country[230]='Uzbekistan';
					$country[231]='Vanuatu';
					$country[232]='Vatican City State (Holy See)';
					$country[233]='Venezuela';
					$country[234]='Vietnam';
					$country[235]='Virgin Islands (British)';
					$country[236]='Virgin Islands (U.S.)';
					$country[237]='Wallis and Futuna';
					$country[238]='Western Sahara';
					$country[239]='Yemen';
					$country[240]='Zambia';
					$country[241]='Zimbabwe';
					$country[242]='Other';
					?>
					 
					
					
					  <div class="formRow">
                            <div class="grid3"><label>Country :</label></div>
                            <div class="grid9 searchDrop">
                                <select   name="country[]" class="validate[required] select" id="selectReq" style="width:350px;" tabindex="2">
								<option value=""></option>
								<?php
									for ($i='0'; $i <='242'; $i++)
									{									
										if( in_array($country[$i],$mycountry) )
										{?>
										
										<option selected value="<?php echo $country[$i]; ?>"><?php echo $country[$i]; ?></option>;
										<?php }
										else
										{?>									
										<option value="<?php echo $country[$i]; ?>"><?php echo $country[$i]; ?></option>;
										<?php }
									}									
								?>
                                    
                                </select>
                            </div>             
                            <div class="clear"></div>
                        </div>
	
                        <div class="formRow">
                            <div class="grid3"><label>Your city:</label></div>
                            <div class="grid6"><input  value="<?php echo $city; ?>"  type="text" name="city" id="city" /></div>
                            <div class="clear"></div>
                        </div>
						
					
						<div class="formRow">
							<div class="grid3"><label>Skills:</label></div>
							<?php 
							$skills = implode(",", $skills);

							?>
							<div class="grid9"><input type="text" id="tags" name="skills" class="tags" value="<?php echo $skills; ?>" /></div>
							<div class="clear"></div>
						</div>
						

															
						
						<?php											
						$industry[0]='All Industries';
						$industry[1]='Accounting';
						$industry[2]='Airlines/Aviation';
						$industry[3]='Alternative Dispute Resolution';
						$industry[4]='Alternative Medicine';
						$industry[5]='Animation';
						$industry[6]='Apparel & Fashion';
						$industry[7]='Architecture & Planning';
						$industry[8]='Arts and Crafts';
						$industry[9]='Automotive';
						$industry[10]='Aviation & Aerospace';
						$industry[11]='Banking';
						$industry[12]='Biotechnology';
						$industry[13]='Broadcast Media';
						$industry[14]='Building Materials';
						$industry[15]='Business Supplies and Equipment';
						$industry[16]='Capital Markets';
						$industry[17]='Chemicals';
						$industry[18]='Civic & Social Organization';
						$industry[19]='Civil Engineering';
						$industry[20]='Commercial Real Estate';
						$industry[21]='Computer & Network Security';
						$industry[22]='Computer Games';
						$industry[23]='Computer Hardware';
						$industry[24]='Computer Networking';
						$industry[25]='Computer Software';
						$industry[26]='Construction';
						$industry[27]='Consumer Electronics';
						$industry[28]='Consumer Goods';
						$industry[29]='Consumer Services';
						$industry[30]='Cosmetics';
						$industry[31]='Dairy';
						$industry[32]='Defense & Space';
						$industry[33]='Design';
						$industry[34]='Education Management';
						$industry[35]='E-Learning';
						$industry[36]='Electrical/Electronic Manufacturing';
						$industry[37]='Entertainment';
						$industry[38]='Environmental Services';
						$industry[39]='Events Services';
						$industry[40]='Executive Office';
						$industry[41]='Facilities Services';
						$industry[42]='Farming';
						$industry[43]='Financial Services';
						$industry[44]='Fine Art';
						$industry[45]='Fishery';
						$industry[46]='Food & Beverages';
						$industry[47]='Food Production';
						$industry[48]='Fund-Raising';
						$industry[49]='Furniture';
						$industry[50]='Gambling & Casinos';
						$industry[51]='Glass, Ceramics & Concrete';
						$industry[52]='Government Administration';
						$industry[53]='Government Relations';
						$industry[54]='Graphic Design';
						$industry[55]='Health, Wellness and Fitness';
						$industry[56]='Higher Education';
						$industry[57]='Hospital & Health Care';
						$industry[58]='Hospitality';
						$industry[59]='Human Resources';
						$industry[60]='Import and Export';
						$industry[61]='Individual & Family Services';
						$industry[62]='Industrial Automation';
						$industry[63]='Information Services';
						$industry[64]='Information Technology and Services';
						$industry[65]='Insurance';
						$industry[66]='International Affairs';
						$industry[67]='International Trade and Development';
						$industry[68]='Internet';
						$industry[69]='Investment Banking';
						$industry[70]='Investment Management';
						$industry[71]='Judiciary';
						$industry[72]='Law Enforcement';
						$industry[73]='Law Practice';
						$industry[74]='Legal Services';
						$industry[75]='Legislative Office';
						$industry[76]='Leisure, Travel & Tourism';
						$industry[77]='Libraries';
						$industry[78]='Logistics and Supply Chain';
						$industry[79]='Luxury Goods & Jewelry';
						$industry[80]='Machinery';
						$industry[81]='Management Consulting';
						$industry[82]='Maritime';
						$industry[83]='Marketing and Advertising';
						$industry[84]='Market Research';
						$industry[85]='Mechanical or Industrial Engineering';
						$industry[86]='Media Production';
						$industry[87]='Medical Devices';
						$industry[88]='Medical Practice';
						$industry[89]='Mental Health Care';
						$industry[90]='Military';
						$industry[91]='Mining & Metals';
						$industry[92]='Motion Pictures and Film';
						$industry[93]='Museums and Institutions';
						$industry[94]='Music';
						$industry[95]='Nanotechnology';
						$industry[96]='Newspapers';
						$industry[97]='Nonprofit Organization Management';
						$industry[98]='Oil & Energy';
						$industry[99]='Online Media';
						$industry[100]='Outsourcing/Offshoring';
						$industry[101]='Package/Freight Delivery';
						$industry[102]='Packaging and Containers';
						$industry[103]='Paper & Forest Products';
						$industry[104]='Performing Arts';
						$industry[105]='Pharmaceuticals';
						$industry[106]='Philanthropy';
						$industry[107]='Photography';
						$industry[108]='Plastics';
						$industry[109]='Political Organization';
						$industry[110]='Primary/Secondary Education';
						$industry[111]='Printing';
						$industry[112]='Professional Training & Coaching';
						$industry[113]='Program Development';
						$industry[114]='Public Policy';
						$industry[115]='Public Relations and Communications';
						$industry[116]='Public Safety';
						$industry[117]='Publishing';
						$industry[118]='Railroad Manufacture';
						$industry[119]='Ranching';
						$industry[120]='Real Estate';
						$industry[121]='Recreational Facilities and Services';
						$industry[122]='Religious Institutions';
						$industry[123]='Renewables & Environment';
						$industry[124]='Research';
						$industry[125]='Restaurants';
						$industry[126]='Retail';
						$industry[127]='Security and Investigations';
						$industry[128]='Semiconductors';
						$industry[129]='Shipbuilding';
						$industry[130]='Sporting Goods';
						$industry[131]='Sports';
						$industry[132]='Staffing and Recruiting';
						$industry[133]='Supermarkets';
						$industry[134]='Telecommunications';
						$industry[135]='Textiles';
						$industry[136]='Think Tanks';
						$industry[137]='Tobacco';
						$industry[138]='Translation and Localization';
						$industry[139]='Transportation/Trucking/Railroad';
						$industry[140]='Utilities';
						$industry[141]='Venture Capital & Private Equity';
						$industry[142]='Veterinary';
						$industry[143]='Warehousing';
						$industry[144]='Wholesale';
						$industry[145]='Wine and Spirits';
						$industry[146]='Wireless';
						$industry[147]='Writing and Editing';												
						?>
						
						
						
						<div class="formRow">
                            <div class="grid3"><label>Professional Details:</label></div>
                            <div class="grid9">
                                <select data-placeholder="What Industry do you belong to?" name="industry[]" class="fullwidth select" multiple="multiple" tabindex="6">
                                  
									<option value=""></option>
									<?php
									for ($i='0'; $i <='147'; $i++)
									{									
										if( in_array($industry[$i],$myindustry) )
										{?>
										
										<option selected value="<?php echo $industry[$i]; ?>"><?php echo $industry[$i]; ?></option>;
										<?php }
										else
										{?>									
										<option value="<?php echo $industry[$i]; ?>"><?php echo $industry[$i]; ?></option>;
										<?php }
									}									
									?>																											                
                                </select>  
                            </div>             
                            <div class="clear"></div>
                        </div>
						<?php
						$interest[0]='Academics';
						$interest[1]='Accounting';
						$interest[2]='Administrative';
						$interest[3]='Business development';
						$interest[4]='Buyer';
						$interest[5]='Consultant';
						$interest[6]='Creative';
						$interest[7]='Engineering';
						$interest[8]='Entrepreneur';
						$interest[9]='Finance';
						$interest[10]='Human resources';
						$interest[11]='Information technology';
						$interest[12]='Legal';
						$interest[13]='Marketing';
						$interest[14]='Medical';
						$interest[15]='Operations';
						$interest[16]='Product';
						$interest[17]='Public relations';
						$interest[18]='Real estate';
						$interest[19]='Sales';
						$interest[20]='Support';
						?>
						<div class="formRow">
                            <div class="grid3"><label>Interests:</label></div>
                            <div class="grid9">
                                <select data-placeholder="Tell us what your interests are" name="interest[]" class="fullwidth select" multiple="multiple" tabindex="6">
                                    <option value=""></option>                                                                        
									
									<?php
									for ($i='0'; $i <='20'; $i++)
									{									
										if( in_array($interest[$i],$myinterest) )
										{?>
										
										<option selected value="<?php echo $interest[$i]; ?>"><?php echo $interest[$i]; ?></option>;
										<?php }
										else
										{?>									
										<option value="<?php echo $interest[$i]; ?>"><?php echo $interest[$i]; ?></option>;
										<?php }
									}									
									?>		
                                    
                                </select>  
                            </div>             
                            <div class="clear"></div>
                        </div>								
					<?php
					$exp[0]='Less than 1 year';
					$exp[1]='1 to 2 years';
					$exp[2]='3 to 5 years';
					$exp[3]='6 to 10 years';
					$exp[4]='More than 10 years';
					?>
					<div class="formRow">
                            <div class="grid3"><label>Experience:</label></div>
                            <div class="grid9 searchDrop">
							<select   name="exp" class="validate[required] select" id="selectReqexp" style="width:350px;" tabindex="2">
                                
                                    <option value=""></option>
									
									<?php
									for ($i='0'; $i <='4'; $i++)
									{									
										if( $exp[$i]==$myexp )
										{?>
										
										<option selected value="<?php echo $exp[$i]; ?>"><?php echo $exp[$i]; ?></option>;
										<?php }
										else
										{?>									
										<option value="<?php echo $exp[$i]; ?>"><?php echo $exp[$i]; ?></option>;
										<?php }
									}									
									?>	
									
                                </select>  
                            </div>             
                            <div class="clear"></div>
                    </div>
					
					<div class="formRow">
                    <input type="submit" name="submit" class="buttonS bLightBlue" value="Update Profile" />
					</div>
					
					</div>
					
				</fieldset>
			<div class="divider"><span></span></div>
			
        </form>
    </div>

</div>
<!-- Content ends -->

</body>
</html>

