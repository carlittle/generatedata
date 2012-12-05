<?php


$L = array();

// Core language strings
$L["language"] = "English";
$L["title"] = "generatedata.com";
$L["about"] = "About";
$L["accounts"] = "Accounts";
$L["add"] = "Add";
$L["add_default_auto_increment_col"] = "Add default auto-increment column";
$L["confirm_delete_form"] = "Are you sure you want to delete this form?";
$L["confirm_empty_form"] = "Are you sure you want to clear the page?";
$L["countries"] = "Countries";
$L["meta_description"] = "GenerateData.com: free, GNU-licensed, random custom data generator for testing software";
$L["meta_keywords"] = "Random Data, Test Data, Sample Data, data generator, generate data";
$L["row_label"] = "Column Title";
$L["row_label_plural"] = "Column Titles";
$L["update_settings"] = "Update Settings";
$L["data_type"] = "Data Type";
$L["db_table_name"] = "Database table name";
$L["db_type"] = "Database Type";
$L["default_save_form_empty_str"] = "Enter form name here";
$L["del"] = "Del";
$L["del_uc"] = "DEL";
$L["delimiter_chars"] = "Delimiter Character(s)";
$L["donate"] = "Donate!";
$L["empty_form"] = "Empty Form";
$L["enclose_table_backquotes"] = "Enclose table and field names with backquotes";
$L["eol_char"] = "End of line character";
$L["examples"] = "Examples";
$L["fatal_error"] = "A fatal error occurred.";
$L["form_deleted"] = "The form has been deleted.";
$L["form_exists_overwrite_confirmation"] = "This form already exists. Do you want to overwrite it?";
$L["form_not_deleted"] = "Sorry, we couldn&#39;t delete this form. Re-log in and try again.";
$L["form_saved"] = "Your form has been saved.";
$L["forums"] = "Forums";
$L["generate"] = "Generate";
$L["generator"] = "Generator";
$L["help"] = "Help";
$L["hide_error"] = "Hide error";
$L["human_data"] = "Human Data";
$L["include_create_table_query"] = "Include CREATE TABLE query";
$L["include_drop_table_query"] = "Include DROP TABLE query";
$L["invalid_custom_xml"] = "There&#39;s a problem with the custom XML markup you entered. Please consult the user documentation for more information.";
$L["invalid_node_names"] = "XML node names can must only contain alphanumeric characters and must begin with a letter. Please fix the following rows:";
$L["invalid_num_results"] = "Please enter a valid number of results.";
$L["invalid_table_names"] = "Database column names can only alphanumeric characters and must begin with a letter. Please fix the following rows:";
$L["invalid_xml_record_node_name"] = "Please enter a valid XML record node value.";
$L["invalid_xml_root_node_name"] = "Please enter a valid XML root node value.";
$L["load_uc"] = "LOAD";
$L["misc_options"] = "Misc Options";
$L["missing_node_names"] = "The following rows have missing node names:";
$L["missing_table_names"] = "The following rows have missing table column names:";
$L["missing_xml_record_node_name"] = "Please enter a value for the XML record node.";
$L["missing_xml_root_node_name"] = "Please enter a value for the XML root node.";
$L["no_csv_delimiter"] = "Please enter the CSV delimiter.";
$L["no_data"] = "Oops, nothing to generate! Enter some data to be generated.";
$L["no_examples_available"] = "No examples available.";
$L["no_form_name"] = "Please enter a form name.";
$L["no_num_rows"] = "Please enter the number of rows to add.";
$L["no_options_available"] = "No options available.";
$L["node_name"] = "Node Name";
$L["none"] = "None";
$L["num_results"] = "Num Results";
$L["ok"] = "OK";
$L["options"] = "Options";
$L["order"] = "Order";
$L["other"] = "Other";
$L["please_fix_errors"] = "Please fix the following errors and resubmit:";
$L["please_select"] = "Please Select";
$L["select_data_type"] = "Select Data Type";
$L["primary_key"] = "Primary Key";
$L["record_node_name"] = "Record node name";
$L["result_type"] = "Result Type";
$L["root_node_name"] = "Root node name";
$L["row_sp"] = "Row(s)";
$L["save_uc"] = "SAVE";
$L["script_thinking"] = "Oops, hold on for a second. The script is thinking.";
$L["see_help_popup"] = "&nbsp;See help popup.";
$L["select_language"] = "Select Language";
$L["statement_type"] = "Statement Type";
$L["table_column"] = "Table Column";
$L["text"] = "Text";
$L["use_custom_xml_format"] = "Use custom XML format";
$L["website"] = "Website";
$L["no_js"] = "Please enable javascript in your browser.";
$L["no_js_blurb"] = "You know this is, like, the 21st century? The Data Generator script relies heavily on javascript - things just plain won't work without it. You&#39;ll need to enable it in your browser then refresh this page.";
$L["install"] = "Install";
$L["host_name"] = "Host Name";
$L["installation"] = "Installation";
$L["table_prefix"] = "Table Prefix";
$L["database_name"] = "Database Name";
$L["mysql_username"] = "MySQL Username";
$L["mysql_password"] = "MySQL Password";
$L["default_language"] = "Default Language";
$L["installation_intro"] = "Alrighty, let's get this sucker installed. Enter your database information to create your database tables. If you're unsure about any of these fields, click on the Help tab for a little more info.";
$L["version"] = "Version";
$L["help_intro"] = "The installation script does two things for you. One, it automatically generates a <b>settings.php</b> file which contains your unique database connection info, so that it knows how to connect to the database whenever you visit the script. Two, it populates the database with various information that it needs: things like general settings, user accounts and raw data like people's names, country and city names.";
$L["help_prerequisites"] = "Pre-requisites";
$L["help_prereq_info"] = "Just like virtually every other PHP/MySQL script out there, you need to have already created a database before running the installation script. <i>The installation script doesn't create the database, it just tries to connect to it to create the tables.</i> If you're not sure how to create a database within your environment, you'll either need to contact your hosting provider, or spend some time researching it on Google. Sorry!";
$L["what_each_field_means"] = "What each field means";
$L["host_name_desc"] = "The name of your database connection. Often it's just <i>localhost</i>, but sometimes it's something like <i>mysql.yoursite.com</i>.";
$L["database_name_desc"] = "The name of your database that you (or your hosting provider) created.";
$L["mysql_username_desc"] = "The name of the MySQL user account that has access to the database details provided in the previous fields.";
$L["mysql_password_desc"] = "The MySQL user's password.";
$L["mysql_table_prefix_desc"] = "This adds a prefix to all of your database tables, to ensure they never conflict with any existing table names.";
$L["default_lang_desc"] = "The entire user interface can be viewed in whatever language you want.";
$L["still_stuck"] = "Still stuck?";
$L["still_stuck_info"] = "I'm afraid if you're still stuck, you'll need to hunt down a developer to lend a hand. Try luring them into your office with cans of jolt or promises of xbox. You could try posting in our <a href=\"http://forums.generatedata.com\" target=\"_blank\">forums</a> but there's not much more information we'll be able to provide that isn't already described here.";
$L["refresh_page"] = "Refresh Page";
$L["database_info"] = "Database Info";
$L["user_account"] = "User Account";
$L["user_accounts"] = "User Accounts";
$L["password"] = "Password";
$L["email"] = "Email";
$L["yes"] = "Yes";
$L["no"] = "No";
$L["employ_user_accounts"] = "Employ user accounts";
$L["validation_no_db_hostname"] = "Please enter your database hostname.";
$L["validation_no_db_name"] = "Please enter your database name.";
$L["validation_invalid_chars"] = "Alphanumeric and underscore characters only, please.";
$L["validation_no_mysql_username"] = "Please enter your MySQL username.";
$L["employ_user_accounts_desc"] = "By default, the Data Generator saves all form configurations to a single location so anyone visiting the script will see all saved configurations. If you enable the user account feature, any time you want to save or load a test configuration you'll need to be logged in. This can be handy if the script is going to be used by multiple people. The installation script lets you create a single user account, but you can create more later on.";
$L["email_desc"] = "Your email address.";
$L["password_desc"] = "Your password. A default, random one is generated for your convenience.";
$L["validation_no_email"] = "Please enter your email address.";
$L["validation_no_first_name"] = "Please enter your first name.";
$L["validation_no_last_name"] = "Please enter your last name.";
$L["validation_no_password"] = "Please enter your password.";
$L["install_invalid_db_info"] = "We were unable to connect to the database using the information you supplied. The error message the database returned is: <i>{\$db_connection_error}</i>";
$L["install_no_db_connection"] = "Please check your database name and login information. Although we were able to connect to the database host, we could not connect to the database. The error message the database returned is: <i>{\$db_select_error}</i>";

$L["settings_file_exists"] = "The settings file already exists. For new installations, the settings.php shouldn't exist. Either delete it and continue the installation script or try loading the script again with the existing settings file values.";
$L["first_name"] = "First Name";
$L["last_name"] = "Last Name";
$L["settings"] = "Settings";
$L["geo"] = "Geo";
$L["numeric"] = "Numeric";
$L["notify_settings_updated"] = "Your settings have been updated.";

$L["tip_country_data"] = "<p>This section lets you control what country-specific data should be included in your generated data sets. The values you select here affect certain Data Types that you may select, such as <i>Region</i>, <i>Postal/Zip</i> and <i>Country</i>.</p><p>To give you a better idea of what this means, try selecting the <i>Region</i> Data Type for one of your rows in the Data Set section, then add / remove countries from the Country-Specific Data section. You'll see that various options that appear in the row are directly affected by the countries you have selected: you can only ever generate a subset of the countries selected.</p>";
$L["tip_data_set"] = "<p>This is where you define what kind of data you want to generate. Use the table to build up, row by row, what each should contain. Each Data Type you choose will have different options - some will have none. You can add new rows using the Add button beneath the table; you can sort the data by clicking on the order column cell and dragging the row up or down. When you have finished constructing your data set, you can proceed to the next section.</p>";
$L["tip_data_format"] = "<p>This section controls the export format for the data.</p>";

$L["country_specific_data"] = "Country-specific data";
$L["data_set"] = "Data Set";
$L["data_format"] = "Data Format";
$L["no_additional_export_type_settings"] = "No additional export type settings.";
