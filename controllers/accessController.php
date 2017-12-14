<?Php

class accessController extends IdEnController
	{		
		public function __construct(){
                parent::__construct();         
            
                $this->vAccessData = $this->LoadModel('access');
                $this->vUsersData = $this->LoadModel('users');
                $this->vProfileData = $this->LoadModel('profile');
			}
			
		public function index(){
            
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                    $this->redirect('admin');
                } else {
                    $this->vView->visualize('login');
                }
                /* END VALIDATION TIME SESSION USER */            
			}
    
		public function timeExpired(){
                IdEnSession::sessionDestroy();
                $this->vView->visualize('timeExpired');
            }
    
        public function LoginMethod(){
            
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                        $this->redirect('admin');
                }
                /* END VALIDATION TIME SESSION USER */            
            
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $vEmail = (string) strtolower($_POST['vEmail']);
                    $vPassword = (string) $_POST['vPassword'];
                    
                    //echo $vEmail.'-'.$vPassword;
                    $vVerifyUserStatus = $this->vUsersData->getUserEmailExists($vEmail);
                    
                    if($vVerifyUserStatus == 0){
                        // Email not register in database.
                        echo '0';
                    } elseif($vVerifyUserStatus == 1){
                        // Email exists in database.
                        $vValidPassword = $this->vAccessData->getValidPassword($vEmail,$vPassword);
                        
                        if($vValidPassword == 1){
                            $vUserAccountStatus = $this->vUsersData->getUserAccountStatus($vEmail);

                            if($vUserAccountStatus == 0){
                                echo '3';
                            } elseif($vUserAccountStatus == 1){
                                $vAccessStatus = $this->vAccessData->getAccessStatus($vEmail,$vPassword);
                                $vProfileType = 1;
                                $vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($vAccessStatus['n_coduser'], $vProfileType);

                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE, true);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Code', $vAccessStatus['n_coduser']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Email', $vAccessStatus['c_email']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Role', $vAccessStatus['c_userrole']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode', $vProfileCode);
                                IdEnSession::setSession('vTimeSessionUser', time());

                                /*$arrayUserData = array(
                                                        'vUserCode' => $vUserLoginStatus['n_coduser'],
                                                        'vUserName' => $this->vLoginData->getUserCompleteNames($vUserLoginStatus['n_coduser'])
                                                    );

                                echo json_encode($arrayUserData);*/

                                echo '1';

                            } elseif($vUserAccountStatus == 2){
                                
                                $vAccessStatus = $this->vAccessData->getAccessStatus($vEmail,$vPassword);
                                $vProfileType = 1;
                                $vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($vAccessStatus['n_coduser'], $vProfileType);

                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE, true);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Code', $vAccessStatus['n_coduser']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Email', $vAccessStatus['c_email']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Role', $vAccessStatus['c_userrole']);
                                IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode', $vProfileCode);
                                IdEnSession::setSession('vTimeSessionUser', time());
                                
                                echo '2';
                            }                            
                        } else {
                            echo 'invalid-pass';
                        }
                    }
                }
			}
        
		public function LogoutMethod(){								
				IdEnSession::sessionDestroy();
				$this->redirect('access','login');
			}      
    
		public function register(){
            
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                        $this->redirect('admin');
                }
                /* END VALIDATION TIME SESSION USER */
            
            
                $this->vView->visualize('register');
			}
    
		public function RegisterMethod(){

                /* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                        $this->redirect('admin');
                }
                /* END VALIDATION TIME SESSION USER */
            
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    
                    $vFormProceed = 0;
                    
                    $vNames = (string) strtolower($_POST['vName']);
                    $vLastNames = (string) strtolower($_POST['vLastNames']);
                    $vEmail = (string) strtolower($_POST['vEmail']);
                    $vPassword = (string) $_POST['vPassword'];
                    $vRePassword = (string) $_POST['vRePassword'];
                    $vRole = (string) 'user';
                    $vActivationcode = rand(10000, 99999);
                    $vActive = (int) 2;
                   
                    if(strlen($vNames) <= 3){
                        $vFormProceed = 1;
                    } else if(strlen($vLastNames) <= 3){
                        $vFormProceed = 2;
                    } else if($this->isValidEmail($vEmail) == false){
                        $vFormProceed = 3;
                    } else if($this->vUsersData->getUserEmailExists($vEmail) != 0){
                        $vFormProceed = 4;
                    } else if($vPassword != $vRePassword){
                        $vFormProceed = 5;
                    } else if((strlen($vPassword) <= 3) || (strlen($vRePassword) <= 3)){
                        $vFormProceed = 8;
                    }
                       
                    if($vFormProceed == 0){
                        if(($this->vUsersData->getUserNameExists($vEmail) == 0) && ($this->vUsersData->getUserEmailExists($vEmail) == 0)){
                            $vUserCode = $this->vUsersData->userRegister($vEmail, $vPassword, $vRePassword, $vEmail, $vRole, $vActivationcode, $vActive);
                            if($vUserCode != 0){
                                $vOthername = (string) $vEmail;
                                $UserNameCode = $this->vUsersData->userInfoRegister($vUserCode, $vNames, $vLastNames, $vOthername, $vBirthDate, $vCountry, $vCity, $vActive);
                                if($UserNameCode != 0){
                                    $vProfileName = (string) strtolower(str_replace(' ', '', $vNames).str_replace(' ', '', $vLastNames));
                                    $vProfileType = 1;
                                    $ProfileCode = $this->vProfileData->profileRegister($vUserCode, $vProfileName, $vProfileType, $vActive);
                                    if(($vUserCode != 0) && ($UserNameCode != 0) && ($ProfileCode != 0)){
                                        $vUserActivationCode = $this->vUsersData->getUserActivationCode($vEmail);
                                        //echo 'El usuario se registro correctamente!';
                                        
                                            //$vTextMessage = '<p>Sigue el siguiente enlace para confirmar tu correo electronico <a href="'.BASE_VIEW_URL.'access/validateEmailAccount/'.$vEmail.'/'.$vUserActivationCode.'/'.$vState.'">Validar mi cuenta!</a></p>.';
                                        
                                            $vTextMessage = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Registro Enlaceme.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css"></style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<html>
<!-- / Full width container -->
		<table class="full-width-container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#eeeeee" style="width: 100%; height: 100%; padding: 30px 0 30px 0;">
			<tr>
				<td align="center" valign="top">
					<!-- / 700px container -->
					<table class="container" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="width: 700px;">
						<tr>
							<td align="center" valign="top">
								<!-- / Header -->
								<table class="container header" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
									<tr>
										<td style="padding: 30px 0 30px 0; border-bottom: solid 1px #eeeeee;" align="left">
											<a href="#" style="font-size: 30px; text-decoration: none; color: #000000;">Bienvenido a Enlaceme.com, <strong>'.$vNames.' '.$vLastNames.'</strong></a>
										</td>
									</tr>
								</table>
								<!-- /// Header -->
								<!-- / Hero subheader -->
								<table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
									<tr>
										<td class="hero-subheader__content" style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;" align="left">
                                            Gracias por registrarte en la primera Red Social Latinoamericana de trabajo, oficios, servicios, pasatiempos o hobbies, <strong>por favor debes seguir el siguiente enlace para poder activar tu cuenta de correo electronico: <a href="'.BASE_VIEW_URL.'access/validateEmailAccount/'.$vEmail.'/'.$vUserActivationCode.'/'.$vActive.'">Validar mi cuenta!</a></strong>
                                        </td>
									</tr>
								</table>
								<!-- /// Hero subheader -->
								<!-- / Divider -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding-top: 25px;" align="center">
									<tr>
										<td align="center">
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-bottom: solid 1px #eeeeee; width: 620px;">
												<tr>
													<td align="center">&nbsp;</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- /// Divider -->
								<!-- / Info Bullets -->
								<table class="container info-bullets" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
									<tr>
										<td align="center">
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="width: 620px;">
												<tr>
													<td class="info-bullets__block" style="padding: 30px 30px 15px 30px;" align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td class="info-bullets__icon" style="padding: 0 15px 0 0;">
																	<img src="http://dev2.slicejack.com/portfolio-email/img/img13.png">
																</td>

																<td class="info-bullets__content" style="color: #969696; font-size: 16px;">info@enlaceme.com</td>
															</tr>
														</table>
													</td>

													<td class="info-bullets__block" style="padding: 30px 30px 15px 30px;" align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td class="info-bullets__icon" style="padding: 0 15px 0 0;">
																	<img src="http://dev2.slicejack.com/portfolio-email/img/img11.png">
																</td>

																<td class="info-bullets__content" style="color: #969696; font-size: 16px;">(+591) 787-95415</td>
															</tr>
														</table>
													</td>
												</tr>

												<tr>
													<td class="info-bullets__block" style="padding: 60px;" align="center" colspan="2">
														<table class="container" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td class="info-bullets__icon" style="padding: 0 15px 0 0;">
																	<img src="http://dev2.slicejack.com/portfolio-email/img/img12.png">
																</td>

																<td class="info-bullets__content" style="color: #969696; font-size: 16px;">
                                                                    Calle Pinilla #2588</br>
                                                                    Edif. Arcadia mezzanine Torre B Of. 109<br/>
                                                                    La Paz, Bolivia
                                                                </td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- /// Info Bullets -->
								<!-- / Social nav -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
									<tr>
										<td align="center">
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-top: 1px solid #eeeeee; width: 620px;">
												<tr>
													<td align="center" style="padding: 30px 0 30px 0;">
														<a href="#">
															<img src="http://dev2.slicejack.com/portfolio-email/img/img7.png" border="0">
														</a>
													</td>

													<td align="center" style="padding: 30px 0 30px 0;">
														<a href="#">
															<img src="http://dev2.slicejack.com/portfolio-email/img/img8.png" border="0">
														</a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- /// Social nav -->
								<!-- / Footer -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
									<tr>
										<td align="center">
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-top: 1px solid #eeeeee; width: 620px;">
												<tr>
													<td style="text-align: center; padding: 50px 0 10px 0;">
														<a href="#" style="font-size: 28px; text-decoration: none; color: #d5d5d5;">Registro Enlaceme.com</a>
													</td>
												</tr>

												<tr>
													<td align="middle">
														<table width="60" height="2" border="0" cellpadding="0" cellspacing="0" style="width: 60px; height: 2px;">
															<tr>
																<td align="middle" width="60" height="2" style="background-color: #eeeeee; width: 60px; height: 2px; font-size: 1px;"><img src="http://dev2.slicejack.com/portfolio-email/img/img16.jpg"></td>
															</tr>
														</table>
													</td>
												</tr>

												<tr>
													<td style="color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;">Copyright &copy; 2017 <a href="http://www.ideas-envision.com" target="_blank" style="text-decoration: none; border-bottom: 1px solid #d5d5d5; color: #d5d5d5;">Ideas-Envision</a>. <br />Todos los derechos reservados.</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- /// Footer -->
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	<script type="text/javascript"></script>
</body>
</html>';
                                            
                                            $this->getLibrary('class.phpmailer');
                                            $this->vMail = new PHPMailer();								
                                            //$this->vMail->IsSMTP();
                                            $this->vMail->SMTPAuth = true;
                                            $this->vMail->Host = 'smtp.enlaceme.com';
                                            $this->vMail->Username = 'info@enlaceme.com';
                                            $this->vMail->Password = '@3nl4c3m3_infomail';
                                            $this->vMail->SMTPSecure = 'ssl';
                                            $this->vMail->Port = 25;
                                            $this->vMail->SetFrom('info@enlaceme.com', 'Red Social Enlaceme.com');
                                            $this->vMail->AddAddress(strtolower(trim($vEmail)));
                                            $this->vMail->Subject = 'Registro y validacion de cuenta Enlaceme.com';
                                            $this->vMail->MsgHTML($vTextMessage);
                                        
                                            $exito = $this->vMail->Send();

                                            if($exito){
                                                $this->vMail->ClearAddresses();
                                                
                                                //echo 'El usuario se registro correctamente; Las instrucciones de validación de cuenta se han enviado al correo a '.$vEmail.', gracias!';
                                                echo $vFormProceed = 6;                                                
                                                
                                            } else {
                                                //echo 'No se ha enviado el correo a '.$email;
                                                echo $vFormProceed = 7;
                                            }
                                    }
                                }
                            }
                        }
                    } else {
                        echo $vFormProceed;
                    }
                }
			}
    
		public function sendEmailValidation(){
            
				/* BEGIN VALIDATION TIME SESSION USER */
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                        $this->redirect('admin');
                }
                /* END VALIDATION TIME SESSION USER */
            
            
                $this->vView->visualize('sendemailvalidation');
			}
    
		public function sendEmailValidationProfile($vEmail){
                
                $this->vView->vEmail = (string) $vEmail;
                
                $this->vView->visualize('profileemailvalidation');
			}    
    
		public function accessFromRegister($vEmail, $vPassword){

                $vEmail = (string) strtolower($vEmail);
                $vPassword = (string) $vPassword;
            
                /* BEGIN DEFAULT LOGIN FRON REGISTER */            
                    $vVerifyUserStatus = $this->vUsersData->getUserEmailExists($vEmail);
            
                    $vAccessStatus = $this->vAccessData->getAccessStatus($vEmail,$vPassword);
                    $vProfileType = 1;
                    $vProfileCode = $this->vProfileData->getProfileCodeFromUserCode($vAccessStatus['n_coduser'], $vProfileType);            

                    IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE, true);
                    IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Code', $vAccessStatus['n_coduser']);
                    IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Email', $vAccessStatus['c_email']);
                    IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'Role', $vAccessStatus['c_userrole']);
                    IdEnSession::setSession(DEFAULT_USER_AUTHENTICATE.'ProfileCode', $vProfileCode);
                    IdEnSession::setSession('vTimeSessionUser', time());
                /* BEGIN DEFAULT LOGIN FRON REGISTER */
            
                $this->redirect('profile/account');

			}     
    
		public function sendEmailForValidation()
			{
				if ($_SERVER['REQUEST_METHOD'] == 'POST')
					{
						$vEmail = (string) $_POST['vEmail'];
                    
                        if($this->vUsersData->getUserEmailExists($vEmail) == 1){
                            $vState = $this->vUsersData->getUserState($vEmail);
                            if($vState == 2){
                                $vUserActivationCode = $this->vUsersData->getUserActivationCode($vEmail);
                                
                                /*$vTextMessage = '<p>Sigue el siguiente enlace para confirmar tu correo electrónico <a href="'.BASE_VIEW_URL.'access/validateEmailAccount/'.$vEmail.'/'.$vUserActivationCode.'/'.$vState.'">Validar mi cuenta!</a></p>.';*/
                                $vTextMessage = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Registro Enlaceme.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css"></style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<html>
<!-- / Full width container -->
		<table class="full-width-container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#eeeeee" style="width: 100%; height: 100%; padding: 30px 0 30px 0;">
			<tr>
				<td align="center" valign="top">
					<!-- / 700px container -->
					<table class="container" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="width: 700px;">
						<tr>
							<td align="center" valign="top">
								<!-- / Header -->
								<table class="container header" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
									<tr>
										<td style="padding: 30px 0 30px 0; border-bottom: solid 1px #eeeeee;" align="left">
											<a href="#" style="font-size: 30px; text-decoration: none; color: #000000;">Validacion de Cuenta</a>
										</td>
									</tr>
								</table>
								<!-- /// Header -->
								<!-- / Hero subheader -->
								<table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
									<tr>
										<td class="hero-subheader__title" style="font-size: 43px; font-weight: bold; padding: 80px 0 15px 0;" align="left">Red Social Latinoamericana</td>
									</tr>

									<tr>
										<td class="hero-subheader__content" style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;" align="left">
                                            Gracias por registrarte en la primera Red Social Latinoamericana de trabajo, oficios, servicios, pasatiempos o hobbies, <strong>por favor debes seguir el siguiente enlace para poder activar tu cuenta de correo electronico: <a href="'.BASE_VIEW_URL.'access/validateEmailAccount/'.$vEmail.'/'.$vUserActivationCode.'/'.$vState.'">Validar mi cuenta!</a></strong>
                                        </td>
									</tr>
								</table>
								<!-- /// Hero subheader -->
								<!-- / Divider -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding-top: 25px;" align="center">
									<tr>
										<td align="center">
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-bottom: solid 1px #eeeeee; width: 620px;">
												<tr>
													<td align="center">&nbsp;</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- /// Divider -->
								<!-- / Info Bullets -->
								<table class="container info-bullets" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
									<tr>
										<td align="center">
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="width: 620px;">
												<tr>
													<td class="info-bullets__block" style="padding: 30px 30px 15px 30px;" align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td class="info-bullets__icon" style="padding: 0 15px 0 0;">
																	<img src="http://dev2.slicejack.com/portfolio-email/img/img13.png">
																</td>

																<td class="info-bullets__content" style="color: #969696; font-size: 16px;">info@enlaceme.com</td>
															</tr>
														</table>
													</td>

													<td class="info-bullets__block" style="padding: 30px 30px 15px 30px;" align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td class="info-bullets__icon" style="padding: 0 15px 0 0;">
																	<img src="http://dev2.slicejack.com/portfolio-email/img/img11.png">
																</td>

																<td class="info-bullets__content" style="color: #969696; font-size: 16px;">(+591) 787-95415</td>
															</tr>
														</table>
													</td>
												</tr>

												<tr>
													<td class="info-bullets__block" style="padding: 60px;" align="center" colspan="2">
														<table class="container" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td class="info-bullets__icon" style="padding: 0 15px 0 0;">
																	<img src="http://dev2.slicejack.com/portfolio-email/img/img12.png">
																</td>

																<td class="info-bullets__content" style="color: #969696; font-size: 16px;">
                                                                    Calle Pinilla #2588</br>
                                                                    Edif. Arcadia mezzanine Torre B Of. 109<br/>
                                                                    La Paz, Bolivia
                                                                </td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- /// Info Bullets -->
								<!-- / Social nav -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
									<tr>
										<td align="center">
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-top: 1px solid #eeeeee; width: 620px;">
												<tr>
													<td align="center" style="padding: 30px 0 30px 0;">
														<a href="#">
															<img src="http://dev2.slicejack.com/portfolio-email/img/img7.png" border="0">
														</a>
													</td>

													<td align="center" style="padding: 30px 0 30px 0;">
														<a href="#">
															<img src="http://dev2.slicejack.com/portfolio-email/img/img8.png" border="0">
														</a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- /// Social nav -->
								<!-- / Footer -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
									<tr>
										<td align="center">
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-top: 1px solid #eeeeee; width: 620px;">
												<tr>
													<td style="text-align: center; padding: 50px 0 10px 0;">
														<a href="#" style="font-size: 28px; text-decoration: none; color: #d5d5d5;">Registro Enlaceme.com</a>
													</td>
												</tr>

												<tr>
													<td align="middle">
														<table width="60" height="2" border="0" cellpadding="0" cellspacing="0" style="width: 60px; height: 2px;">
															<tr>
																<td align="middle" width="60" height="2" style="background-color: #eeeeee; width: 60px; height: 2px; font-size: 1px;"><img src="http://dev2.slicejack.com/portfolio-email/img/img16.jpg"></td>
															</tr>
														</table>
													</td>
												</tr>

												<tr>
													<td style="color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;">Copyright &copy; 2017 <a href="http://www.ideas-envision.com" target="_blank" style="text-decoration: none; border-bottom: 1px solid #d5d5d5; color: #d5d5d5;">Ideas-Envision</a>. <br />Todos los derechos reservados.</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<!-- /// Footer -->
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	<script type="text/javascript"></script>
</body>
</html>';

                                $this->getLibrary('class.phpmailer');
                                $this->vMail = new PHPMailer();								
                                //$this->vMail->IsSMTP();
                                $this->vMail->SMTPAuth = true;
                                $this->vMail->Host = 'smtp.enlaceme.com';
                                $this->vMail->Username = 'info@enlaceme.com';
                                $this->vMail->Password = '@3nl4c3m3_infomail';
                                $this->vMail->SMTPSecure = 'ssl';
                                $this->vMail->Port = 25;
                                $this->vMail->SetFrom('info@enlaceme.com', 'Red Social Enlaceme.com');
                                $this->vMail->AddAddress(strtolower(trim($vEmail)));
                                $this->vMail->Subject = 'Validacion de cuenta Enlaceme.com';
                                $this->vMail->MsgHTML($vTextMessage);											

                                $exito = $this->vMail->Send();

                                if($exito)
                                    {
                                         $this->vMail->ClearAddresses();
                                         echo 'Las instrucciones de validación de cuenta se han enviado al correo a '.$vEmail.', gracias!';
                                         //echo 'true';
                                    }
                                else
                                    {
                                         //echo 'No se ha enviado el correo a '.$email;
                                        echo 'false';
                                    }                                
                                
                                
                            } else {
                                echo 'La cuenta ya esta activada!, por favor inicie sesión.';
                            }
                        } else {
                           echo 'El correo electrónico '.$vEmail.', no esta registrado, por favor registre sus datos.'; 
                        }
					}
			}    
        
		public function validateEmailAccount($vEmail, $vActivationCode, $vState){
            
                /* BEGIN VALIDATION TIME SESSION USER 
				if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE)){
                        $this->redirect('admin');
                }*/
                /* END VALIDATION TIME SESSION USER */            
            
                $vStatusValidateEmailAccount = 0;
            
                $vEmail = (string) strtolower($vEmail);
                $vActivationCode = (int) $vActivationCode;
                $vState = (int) $vState;

                $vUserEmailExists = $this->vUsersData->getUserEmailExists($vEmail);
                $vUserActivationCode = $this->vUsersData->getUserActivationCode($vEmail);
                $vUserAccountStatus = $this->vUsersData->getUserAccountStatus($vEmail);

                if(($vUserEmailExists == 1) && ($vUserActivationCode == $vActivationCode) && ($vUserAccountStatus == $vState)){
                    // Email not register in database.
                    $vUserCode = $this->vUsersData->getUserCodeFromEmailActivationCode($vActivationCode, $vEmail);
                    $vActive = 1;
                    $vProfileType = 1;
                    
                    $vUpdateUserStatus = $this->vUsersData->updateUserStatus($vUserCode, $vActive);
                    $vUpdateUserInfoStatus = $this->vUsersData->updateUserInfoStatus($vUserCode, $vActive);
                    $vUpdateProfileStatus = $this->vProfileData->updateProfileStatus($vUserCode, $vProfileType, $vActive);
                    
                    $vStatusValidateEmailAccount = 1;
                    //echo 'ok activación realizada - '.$vUpdateUserStatus;
                } else {
                    $vStatusValidateEmailAccount = 2;
                }
            
                if($vStatusValidateEmailAccount == 1){
                    $this->vView->vStatusValidateEmailAccount = 'La cuenta se habilitó correctamente, ahora puedes iniciar sesión.';
                } elseif($vStatusValidateEmailAccount == 2){
                    $this->vView->vStatusValidateEmailAccount = '¡UPS! Existe un error al habilitar la cuenta, intenta nuevamente. Sí el error persiste por favor envianos un mensaje aquí';
                } else {
                    $this->vView->vStatusValidateEmailAccount = '¡UPS! Algo sucedio mal, por favor envianos un mensaje aquí';
                }
            
                $this->vView->visualize('validateAccount');
			}
	}
?>