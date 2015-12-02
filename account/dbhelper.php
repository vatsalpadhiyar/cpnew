<?php

// Host name
$host = "localhost";

// Mysql username
$username = "dbAdmin";

// Mysql password
$password = "HwS59HNpQD2n2D4X";

// Database name
$db_name = "dbfindphotographer";

// Connect to server and select databse.
$con = mysqli_connect("$host", "$username", "$password", "$db_name");

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}

mysqli_select_db($con, $db_name) or die("cannot select DB");

//All DB variables

//Table user master and its fields.
$table_user_master = "user_master";

$field_user_id = 'User_Id_int_5_PK';
$field_user_first_name = 'User_First_Name_varchar_20';
$field_user_middle_name = 'User_Middle_Name_varchar_20';
$field_user_last_name = 'User_Last_Name_varchar_20';
$field_user_email = 'User_Email_varchar_40';
$field_user_alt_email = 'User_Alternate_Email_varchar_40';
$field_user_contact = 'User_Contact_varchar_15';
$field_user_alt_contact = 'User_Alternate_Contact_varchar_15';
$field_user_gender = 'User_Gender_enum';
$field_user_registered = 'User_Registered_date';
$field_user_profile_pic = 'User_Profile_Pic_varchar_30';

// Table user login and its fields.
$table_user_login = "user_login";

$field_user_login_id = 'User_Login_Id_int_5_PK';
$field_user_login_id_FK = 'User_Id_int_5_FK';
$field_user_login_salt = 'User_salt_varchar_22';
$field_user_login_hash_password = 'User_HashPassword_varchar_43';
$field_user_login_is_active = 'User_IsActive_enum';
$field_user_login_last_date = 'User_LastLogin_date';
$field_user_login_is_locked = 'User_IsLocked_enum';

//Table photographer master and its fields.
$table_photographer_master = "photographer_master";

$field_photographer_id = 'Photographer_Id_int_5_PK';
$field_photographer_first_name = 'Photographer_First_Name_varchar_20';
$field_photographer_middle_name = 'Photographer_Middle_Name_varchar_20';
$field_photographer_last_name = 'Photographer_Last_Name_varchar_20';
$field_photographer_email = 'Photographer_Email_varchar_40';
$field_photographer_contact = 'Photographer_Contact_varchar_15';
$field_photographer_gender = 'Photographer_Gender_enum';
$field_photographer_registered = 'Photographer_Registered_date';
$field_photographer_profile_pic = 'Photographer_Profile_Pic_varchar_30';
$field_photographer_approved = 'Photographer_approved_enum';

// Table photographer login and its fields.
$table_photographer_login = "photographer_login";

$field_photographer_login_id = 'Photographer_Login_Id_int_5_PK';
$field_photographer_login_id_FK = 'Photographer_Id_int_5_FK';
$field_photographer_login_salt = 'Photographer_salt_varchar_22';
$field_photographer_login_hash_password = 'Photographer_HashPassword_varchar_43';
$field_photographer_login_is_active = 'Photographer_IsActive_enum';
$field_photographer_login_last_date = 'Photographer_LastLogin_date';
$field_photographer_login_is_locked = 'Photographer_IsLocked_enum';

// Table assignment master and its fields.
$table_assignment_master = "assignment_master";

$field_assignment_master_id = "Assignment_Id_int_5_PK";
$field_assignment_user_id_fk = "User_Id_int_5_FK";
$field_assignment_specification = "Specification_Id_int_5_FK";
$field_assignment_description = "Assignment_Description_varchar_255";
$field_assignment_created_date = "Assignment_CreatedDate_timestamp";
$field_assignment_startdate = "Assignment_StartDate_date";
$field_assignment_expirationdate = "Assignment_ExpirationDate_date";
$field_assignment_duration = "Assignment_Duration_int_2";
$field_assignment_min_budget = "Assignment_Minimum_Budget_int_8";
$field_assignment_max_budget = "Assignment_Maximum_Budget_int_8";
$field_assignment_status = "Assignment_Status_enum";

// Table assignment and its fields.
$table_assignment = "assignment";

$field_assignment_id = "Assignment_Id_int_5_PK";
$field_assignment_photographer_id = "Photographer _Id_int_5_FK";
$field_assignment_comments = "Assignment_Comments_varchar_160";
$field_assignment_ratings = "Assignment_Ratings_int_1";

// Table admin login and its fields.
$table_admin_login = "admin_login";

$field_admin_login_id = "Admin_Login_Id_int_5_PK";
$field_admin_login_username = "Admin_Username_varchar_20";
$field_admin_login_salt = "Admin_salt_varchar_22";
$field_admin_login_hash_password = "Admin_HashPassword_varchar_43";
$field_admin_login_last_date = "Admin_LastLogin_datetime";

// Table photos and its fields.
$table_photos = "photos";

$field_photos_id = "Photo_Id_int_11_PK";
$field_photos_portfolio_id_fk = "Portfolio_Id_int_5_FK";
$field_photos_name = "Photo_Name_varchar_255";
$field_photos_size = "Photo_Size_int_11";
$field_photos_type = "Photo_Type_varchar_50";
$field_photos_title = "Photo_Title_varchar_255";
$field_photos_description = "Photo_Description_varchar_255";
$field_photos_path = "Photo_Path_varchar_255";
$field_photos_is_reported = "Photo_IsReported_enum";
$field_photos_reported_by_user_id_fk = "Photo_Reported_By_int_5_FK";
$field_photos_reason = "Photo_Reason_varchar_255";

// Table photos rating and its fields
$table_photos_rating = "photos_rating";

$field_photo_rating_id = "Rating_Id_int_5_PK";
$field_photo_rating_photo_id_fk = "Photo_Id_int_5_FK";
$field_photo_rating_user_id_fk = "User_Id_int_5_FK";
$field_photo_rating_rate = "Rating_rate_int_1";
$field_photo_rating_rated_date = "Rating_rated_date";

// Table portfolio and its fields
$table_portfolio = "portfolio";

$field_portfolio_id = "Portfolio_Id_int_5_PK";
$field_portfolio_photographer_id_fk = "Photographer_Id_int_5_FK";
$field_portfolio_photos_id = "Photos_Id_varchar_50";
$field_portfolio_title = "Portfolio_Title_varchar_25";
$field_porfolio_description = "Portfolio_Description_varchar_255";
$field_portfolio_date = "Portfolio_Date_date";
$field_portfolio_creation_date = "Portfolio_CreationDate_timestamp";
$field_portfolio_specification = "Portfolio_Specification_varchar_20";


// Table quotation and its fields
$table_quotation = "quotation";

$field_quotation_id = "Quotation_Id_int_5_PK";
$field_quotation_assignment_id_fk = "Assignment_Id_int_5_FK";
$field_quotation_photographer_id_fk = "Photographer_Id_int_5_FK";
$field_quotation_cost = "Quotation_Cost_int_8";

// Table specification and its fields
$table_specifications = "specifications";

$field_specifications_id = "Specification_Id_int_5_PK";
$field_specifications_name = "Specification_Name_varchar_20";
$field_specifications_description = "Specification_Details_varchar_255";
$field_specifications_path = "Specification_Pic_varchar_20";

?>