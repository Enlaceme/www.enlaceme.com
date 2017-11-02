<?php

class imagesModel extends IdEnModel
	{
		public function __construct(){
				parent::__construct();
			}
        
        /* BEGIN INSERT STATEMENT QUERY  */
		public function insertImage($vProfileCode, $vImageName, $vImageContent, $vImageSize, $vImageType, $vActive){
            
                $vProfileCode = (int) $vProfileCode;
                $vImageName = (string) $vImageName;
                $vImageContent = $vImageContent;
                $vImageSize = $vImageSize;
                $vImageType = (string) $vImageType;
                $vActive = (int) $vActive;
            
                $vUserCreate = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');

				$vResultInsertImage = $this->vDataBase->prepare("INSERT INTO tb_enlaceme_images(n_codprofile, c_image_name, b_image_content, n_image_size, c_image_type, n_active, c_usercreate, d_datecreate)
																VALUES(:n_codprofile, :c_image_name, :b_image_content, :n_image_size, :c_image_type, :n_active, :c_usercreate, NOW())")
								->execute(
										array(
                                            ':n_codprofile' => $vProfileCode,
                                            ':c_image_name' => $vImageName,
                                            ':b_image_content' => $vImageContent,
                                            ':n_image_size' => $vImageSize,
                                            ':c_image_type' => $vImageType,
                                            ':n_active' => $vActive,
                                            ':c_usercreate' => $vUserCreate,
										));
                return $vResultInsertImage = $this->vDataBase->lastInsertId();
                $vResultInsertImage->close();            
			}
        /* END INSERT STATEMENT QUERY  */
    
        /* BEGIN DELETE STATEMENT QUERY  */
		public function deleteImage($vImageCode, $vActive){
            
                $vImageCode = (int) $vImageCode;
                $vActive = (int) $vActive;

                if(IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email') == null){
                    $vUserMod = 'system['.date('d.m.Y h:m:s').']';
                } else {
                    $vUserMod = (string) IdEnSession::getSession(DEFAULT_USER_AUTHENTICATE.'Email');
                }
                
                $vResultDeleteImage = $this->vDataBase->prepare("DELETE
                                                                        FROM tb_enlaceme_images
                                                                            WHERE tb_enlaceme_images.n_codimage = :n_codimage;")
                                ->execute(
                                            array(
                                                    ':n_codimage'=>$vImageCode
                                                 )
                                         );
            
                return $vResultDeleteImage;
                $vResultDeleteImage->close();
			}    
        /* END DELETE STATEMENT QUERY  */    
    }