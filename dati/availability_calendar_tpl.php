<?php if (!@$framed and !@$_GET['framed'] and !@$_POST['framed']) { ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<title>  </title>
<style type="text/css">
 a { color: #000000; }
</style>
</head>
<body style="background-color: #ffffff; color: #000000; padding: 0; margin: 0;">


<div style="text-align: center; padding: 10px;">




<!-- END OF THE FIRST PART OF CUSTOM HTML  -->


<?php
} # fine if (!@$framed and !@$_GET['framed'] and !@$_POST['framed'])


# BEGINNING OF MODIFIABLE VARIABLES (modify the value on the right)

# Insert in this variable the name of the page if $PHP_SELF is not defined
$var_page_name = "";

$var_year = 2016;
$var_db_type = "mysqli";
$var_db_name = "hoteldruid";
$var_db_host = "localhost";
$var_db_port = "3306";
$var_db_user = "root";
$var_db_password = "root";
$var_db_load_extension = "";
$var_db_tables_prefix = "";
$var_template_language = "en";
$var_extend_last_date = "YES";
$var_rates_to_show = array( 1 => "YES", 2 => "YES", 3 => "YES", 4 => "YES", 5 => "YES", 6 => "YES", 7 => "YES", 8 => "YES");
$var_imposed_rates_names = array();
$var_motivations_of_rule1_to_consider = array();
$var_default_date = "";
$var_days_number = "31";
$var_align_availability_with_arrival = "YES";

$var_group_availability_overview_with_rule_2 = "YES";
$var_group_availability_overview_with_people = "NO";
$var_cal_table_style = "border=1 cellspacing=0 cellpadding=1  style=\"background-color: #dddddd; font-size:70%; text-align: center; margin-left: auto;  margin-right: auto;\"";
$var_color_week_beginning_availability_overview = "#bbbbbb";
$var_color_free_availability_overview = "#0cc80c";
$var_color_full_availability_overview = "#f8011e";
$var_opening_font_availability_overview = "";
$var_closing_font_availability_overview = "";
$var_show_free_number_availability_overview = "YES";

$var_font_tag_opening = "<small>";
$var_font_tag_closing = "</small>";
$var_framed_css_file = "";
$var_template_theme = "default";
$var_theme_color_1 = "#000000";
$var_theme_color_2 = "#ffffff";
$var_theme_color_3 = "#ebebeb";
$var_theme_value_1 = "";
$var_theme_value_2 = "";
$var_theme_value_3 = "Back to HOME";

# PHRASES
$var_phr_rate = "rate";
$var_phr_person = "person";
$var_phr_people = "people";
$var_phr_January = "January";
$var_phr_February = "February";
$var_phr_March = "March";
$var_phr_April = "April";
$var_phr_May = "May";
$var_phr_June = "June";
$var_phr_July = "July";
$var_phr_August = "August";
$var_phr_September = "September";
$var_phr_October = "October";
$var_phr_November = "November";
$var_phr_December = "December";
$var_phr_Indicative_availability_overview = "Indicative availability overview";
$var_fr_freccia_destra = "-->";
$var_fr_freccia_sinistra = "<--";

# MENUS PERIODS
$var_menu_periods = "<option value=\"2016-01-01\">Jan 01 Fr, 2016</option>
<option value=\"2016-01-02\">Jan 02 Sa, 2016</option>
<option value=\"2016-01-03\">Jan 03 Su, 2016</option>
<option value=\"2016-01-04\">Jan 04 Mo, 2016</option>
<option value=\"2016-01-05\">Jan 05 Tu, 2016</option>
<option value=\"2016-01-06\">Jan 06 We, 2016</option>
<option value=\"2016-01-07\">Jan 07 Th, 2016</option>
<option value=\"2016-01-08\">Jan 08 Fr, 2016</option>
<option value=\"2016-01-09\">Jan 09 Sa, 2016</option>
<option value=\"2016-01-10\">Jan 10 Su, 2016</option>
<option value=\"2016-01-11\">Jan 11 Mo, 2016</option>
<option value=\"2016-01-12\">Jan 12 Tu, 2016</option>
<option value=\"2016-01-13\">Jan 13 We, 2016</option>
<option value=\"2016-01-14\">Jan 14 Th, 2016</option>
<option value=\"2016-01-15\">Jan 15 Fr, 2016</option>
<option value=\"2016-01-16\">Jan 16 Sa, 2016</option>
<option value=\"2016-01-17\">Jan 17 Su, 2016</option>
<option value=\"2016-01-18\">Jan 18 Mo, 2016</option>
<option value=\"2016-01-19\">Jan 19 Tu, 2016</option>
<option value=\"2016-01-20\">Jan 20 We, 2016</option>
<option value=\"2016-01-21\">Jan 21 Th, 2016</option>
<option value=\"2016-01-22\">Jan 22 Fr, 2016</option>
<option value=\"2016-01-23\">Jan 23 Sa, 2016</option>
<option value=\"2016-01-24\">Jan 24 Su, 2016</option>
<option value=\"2016-01-25\">Jan 25 Mo, 2016</option>
<option value=\"2016-01-26\">Jan 26 Tu, 2016</option>
<option value=\"2016-01-27\">Jan 27 We, 2016</option>
<option value=\"2016-01-28\">Jan 28 Th, 2016</option>
<option value=\"2016-01-29\">Jan 29 Fr, 2016</option>
<option value=\"2016-01-30\">Jan 30 Sa, 2016</option>
<option value=\"2016-01-31\">Jan 31 Su, 2016</option>
<option value=\"2016-02-01\">Feb 01 Mo, 2016</option>
<option value=\"2016-02-02\">Feb 02 Tu, 2016</option>
<option value=\"2016-02-03\">Feb 03 We, 2016</option>
<option value=\"2016-02-04\">Feb 04 Th, 2016</option>
<option value=\"2016-02-05\">Feb 05 Fr, 2016</option>
<option value=\"2016-02-06\">Feb 06 Sa, 2016</option>
<option value=\"2016-02-07\">Feb 07 Su, 2016</option>
<option value=\"2016-02-08\">Feb 08 Mo, 2016</option>
<option value=\"2016-02-09\">Feb 09 Tu, 2016</option>
<option value=\"2016-02-10\">Feb 10 We, 2016</option>
<option value=\"2016-02-11\">Feb 11 Th, 2016</option>
<option value=\"2016-02-12\">Feb 12 Fr, 2016</option>
<option value=\"2016-02-13\">Feb 13 Sa, 2016</option>
<option value=\"2016-02-14\">Feb 14 Su, 2016</option>
<option value=\"2016-02-15\">Feb 15 Mo, 2016</option>
<option value=\"2016-02-16\">Feb 16 Tu, 2016</option>
<option value=\"2016-02-17\">Feb 17 We, 2016</option>
<option value=\"2016-02-18\">Feb 18 Th, 2016</option>
<option value=\"2016-02-19\">Feb 19 Fr, 2016</option>
<option value=\"2016-02-20\">Feb 20 Sa, 2016</option>
<option value=\"2016-02-21\">Feb 21 Su, 2016</option>
<option value=\"2016-02-22\">Feb 22 Mo, 2016</option>
<option value=\"2016-02-23\">Feb 23 Tu, 2016</option>
<option value=\"2016-02-24\">Feb 24 We, 2016</option>
<option value=\"2016-02-25\">Feb 25 Th, 2016</option>
<option value=\"2016-02-26\">Feb 26 Fr, 2016</option>
<option value=\"2016-02-27\">Feb 27 Sa, 2016</option>
<option value=\"2016-02-28\">Feb 28 Su, 2016</option>
<option value=\"2016-02-29\">Feb 29 Mo, 2016</option>
<option value=\"2016-03-01\">Mar 01 Tu, 2016</option>
<option value=\"2016-03-02\">Mar 02 We, 2016</option>
<option value=\"2016-03-03\">Mar 03 Th, 2016</option>
<option value=\"2016-03-04\">Mar 04 Fr, 2016</option>
<option value=\"2016-03-05\">Mar 05 Sa, 2016</option>
<option value=\"2016-03-06\">Mar 06 Su, 2016</option>
<option value=\"2016-03-07\">Mar 07 Mo, 2016</option>
<option value=\"2016-03-08\">Mar 08 Tu, 2016</option>
<option value=\"2016-03-09\">Mar 09 We, 2016</option>
<option value=\"2016-03-10\">Mar 10 Th, 2016</option>
<option value=\"2016-03-11\">Mar 11 Fr, 2016</option>
<option value=\"2016-03-12\">Mar 12 Sa, 2016</option>
<option value=\"2016-03-13\">Mar 13 Su, 2016</option>
<option value=\"2016-03-14\">Mar 14 Mo, 2016</option>
<option value=\"2016-03-15\">Mar 15 Tu, 2016</option>
<option value=\"2016-03-16\">Mar 16 We, 2016</option>
<option value=\"2016-03-17\">Mar 17 Th, 2016</option>
<option value=\"2016-03-18\">Mar 18 Fr, 2016</option>
<option value=\"2016-03-19\">Mar 19 Sa, 2016</option>
<option value=\"2016-03-20\">Mar 20 Su, 2016</option>
<option value=\"2016-03-21\">Mar 21 Mo, 2016</option>
<option value=\"2016-03-22\">Mar 22 Tu, 2016</option>
<option value=\"2016-03-23\">Mar 23 We, 2016</option>
<option value=\"2016-03-24\">Mar 24 Th, 2016</option>
<option value=\"2016-03-25\">Mar 25 Fr, 2016</option>
<option value=\"2016-03-26\">Mar 26 Sa, 2016</option>
<option value=\"2016-03-27\">Mar 27 Su, 2016</option>
<option value=\"2016-03-28\">Mar 28 Mo, 2016</option>
<option value=\"2016-03-29\">Mar 29 Tu, 2016</option>
<option value=\"2016-03-30\">Mar 30 We, 2016</option>
<option value=\"2016-03-31\">Mar 31 Th, 2016</option>
<option value=\"2016-04-01\">Apr 01 Fr, 2016</option>
<option value=\"2016-04-02\">Apr 02 Sa, 2016</option>
<option value=\"2016-04-03\">Apr 03 Su, 2016</option>
<option value=\"2016-04-04\">Apr 04 Mo, 2016</option>
<option value=\"2016-04-05\">Apr 05 Tu, 2016</option>
<option value=\"2016-04-06\">Apr 06 We, 2016</option>
<option value=\"2016-04-07\">Apr 07 Th, 2016</option>
<option value=\"2016-04-08\">Apr 08 Fr, 2016</option>
<option value=\"2016-04-09\">Apr 09 Sa, 2016</option>
<option value=\"2016-04-10\">Apr 10 Su, 2016</option>
<option value=\"2016-04-11\">Apr 11 Mo, 2016</option>
<option value=\"2016-04-12\">Apr 12 Tu, 2016</option>
<option value=\"2016-04-13\">Apr 13 We, 2016</option>
<option value=\"2016-04-14\">Apr 14 Th, 2016</option>
<option value=\"2016-04-15\">Apr 15 Fr, 2016</option>
<option value=\"2016-04-16\">Apr 16 Sa, 2016</option>
<option value=\"2016-04-17\">Apr 17 Su, 2016</option>
<option value=\"2016-04-18\">Apr 18 Mo, 2016</option>
<option value=\"2016-04-19\">Apr 19 Tu, 2016</option>
<option value=\"2016-04-20\">Apr 20 We, 2016</option>
<option value=\"2016-04-21\">Apr 21 Th, 2016</option>
<option value=\"2016-04-22\">Apr 22 Fr, 2016</option>
<option value=\"2016-04-23\">Apr 23 Sa, 2016</option>
<option value=\"2016-04-24\">Apr 24 Su, 2016</option>
<option value=\"2016-04-25\">Apr 25 Mo, 2016</option>
<option value=\"2016-04-26\">Apr 26 Tu, 2016</option>
<option value=\"2016-04-27\">Apr 27 We, 2016</option>
<option value=\"2016-04-28\">Apr 28 Th, 2016</option>
<option value=\"2016-04-29\">Apr 29 Fr, 2016</option>
<option value=\"2016-04-30\">Apr 30 Sa, 2016</option>
<option value=\"2016-05-01\">May 01 Su, 2016</option>
<option value=\"2016-05-02\">May 02 Mo, 2016</option>
<option value=\"2016-05-03\">May 03 Tu, 2016</option>
<option value=\"2016-05-04\">May 04 We, 2016</option>
<option value=\"2016-05-05\">May 05 Th, 2016</option>
<option value=\"2016-05-06\">May 06 Fr, 2016</option>
<option value=\"2016-05-07\">May 07 Sa, 2016</option>
<option value=\"2016-05-08\">May 08 Su, 2016</option>
<option value=\"2016-05-09\">May 09 Mo, 2016</option>
<option value=\"2016-05-10\">May 10 Tu, 2016</option>
<option value=\"2016-05-11\">May 11 We, 2016</option>
<option value=\"2016-05-12\">May 12 Th, 2016</option>
<option value=\"2016-05-13\">May 13 Fr, 2016</option>
<option value=\"2016-05-14\">May 14 Sa, 2016</option>
<option value=\"2016-05-15\">May 15 Su, 2016</option>
<option value=\"2016-05-16\">May 16 Mo, 2016</option>
<option value=\"2016-05-17\">May 17 Tu, 2016</option>
<option value=\"2016-05-18\">May 18 We, 2016</option>
<option value=\"2016-05-19\">May 19 Th, 2016</option>
<option value=\"2016-05-20\">May 20 Fr, 2016</option>
<option value=\"2016-05-21\">May 21 Sa, 2016</option>
<option value=\"2016-05-22\">May 22 Su, 2016</option>
<option value=\"2016-05-23\">May 23 Mo, 2016</option>
<option value=\"2016-05-24\">May 24 Tu, 2016</option>
<option value=\"2016-05-25\">May 25 We, 2016</option>
<option value=\"2016-05-26\">May 26 Th, 2016</option>
<option value=\"2016-05-27\">May 27 Fr, 2016</option>
<option value=\"2016-05-28\">May 28 Sa, 2016</option>
<option value=\"2016-05-29\">May 29 Su, 2016</option>
<option value=\"2016-05-30\">May 30 Mo, 2016</option>
<option value=\"2016-05-31\">May 31 Tu, 2016</option>
<option value=\"2016-06-01\">Jun 01 We, 2016</option>
<option value=\"2016-06-02\">Jun 02 Th, 2016</option>
<option value=\"2016-06-03\">Jun 03 Fr, 2016</option>
<option value=\"2016-06-04\">Jun 04 Sa, 2016</option>
<option value=\"2016-06-05\">Jun 05 Su, 2016</option>
<option value=\"2016-06-06\">Jun 06 Mo, 2016</option>
<option value=\"2016-06-07\">Jun 07 Tu, 2016</option>
<option value=\"2016-06-08\">Jun 08 We, 2016</option>
<option value=\"2016-06-09\">Jun 09 Th, 2016</option>
<option value=\"2016-06-10\">Jun 10 Fr, 2016</option>
<option value=\"2016-06-11\">Jun 11 Sa, 2016</option>
<option value=\"2016-06-12\">Jun 12 Su, 2016</option>
<option value=\"2016-06-13\">Jun 13 Mo, 2016</option>
<option value=\"2016-06-14\">Jun 14 Tu, 2016</option>
<option value=\"2016-06-15\">Jun 15 We, 2016</option>
<option value=\"2016-06-16\">Jun 16 Th, 2016</option>
<option value=\"2016-06-17\">Jun 17 Fr, 2016</option>
<option value=\"2016-06-18\">Jun 18 Sa, 2016</option>
<option value=\"2016-06-19\">Jun 19 Su, 2016</option>
<option value=\"2016-06-20\">Jun 20 Mo, 2016</option>
<option value=\"2016-06-21\">Jun 21 Tu, 2016</option>
<option value=\"2016-06-22\">Jun 22 We, 2016</option>
<option value=\"2016-06-23\">Jun 23 Th, 2016</option>
<option value=\"2016-06-24\">Jun 24 Fr, 2016</option>
<option value=\"2016-06-25\">Jun 25 Sa, 2016</option>
<option value=\"2016-06-26\">Jun 26 Su, 2016</option>
<option value=\"2016-06-27\">Jun 27 Mo, 2016</option>
<option value=\"2016-06-28\">Jun 28 Tu, 2016</option>
<option value=\"2016-06-29\">Jun 29 We, 2016</option>
<option value=\"2016-06-30\">Jun 30 Th, 2016</option>
<option value=\"2016-07-01\">Jul 01 Fr, 2016</option>
<option value=\"2016-07-02\">Jul 02 Sa, 2016</option>
<option value=\"2016-07-03\">Jul 03 Su, 2016</option>
<option value=\"2016-07-04\">Jul 04 Mo, 2016</option>
<option value=\"2016-07-05\">Jul 05 Tu, 2016</option>
<option value=\"2016-07-06\">Jul 06 We, 2016</option>
<option value=\"2016-07-07\">Jul 07 Th, 2016</option>
<option value=\"2016-07-08\">Jul 08 Fr, 2016</option>
<option value=\"2016-07-09\">Jul 09 Sa, 2016</option>
<option value=\"2016-07-10\">Jul 10 Su, 2016</option>
<option value=\"2016-07-11\">Jul 11 Mo, 2016</option>
<option value=\"2016-07-12\">Jul 12 Tu, 2016</option>
<option value=\"2016-07-13\">Jul 13 We, 2016</option>
<option value=\"2016-07-14\">Jul 14 Th, 2016</option>
<option value=\"2016-07-15\">Jul 15 Fr, 2016</option>
<option value=\"2016-07-16\">Jul 16 Sa, 2016</option>
<option value=\"2016-07-17\">Jul 17 Su, 2016</option>
<option value=\"2016-07-18\">Jul 18 Mo, 2016</option>
<option value=\"2016-07-19\">Jul 19 Tu, 2016</option>
<option value=\"2016-07-20\">Jul 20 We, 2016</option>
<option value=\"2016-07-21\">Jul 21 Th, 2016</option>
<option value=\"2016-07-22\">Jul 22 Fr, 2016</option>
<option value=\"2016-07-23\">Jul 23 Sa, 2016</option>
<option value=\"2016-07-24\">Jul 24 Su, 2016</option>
<option value=\"2016-07-25\">Jul 25 Mo, 2016</option>
<option value=\"2016-07-26\">Jul 26 Tu, 2016</option>
<option value=\"2016-07-27\">Jul 27 We, 2016</option>
<option value=\"2016-07-28\">Jul 28 Th, 2016</option>
<option value=\"2016-07-29\">Jul 29 Fr, 2016</option>
<option value=\"2016-07-30\">Jul 30 Sa, 2016</option>
<option value=\"2016-07-31\">Jul 31 Su, 2016</option>
<option value=\"2016-08-01\">Aug 01 Mo, 2016</option>
<option value=\"2016-08-02\">Aug 02 Tu, 2016</option>
<option value=\"2016-08-03\">Aug 03 We, 2016</option>
<option value=\"2016-08-04\">Aug 04 Th, 2016</option>
<option value=\"2016-08-05\">Aug 05 Fr, 2016</option>
<option value=\"2016-08-06\">Aug 06 Sa, 2016</option>
<option value=\"2016-08-07\">Aug 07 Su, 2016</option>
<option value=\"2016-08-08\">Aug 08 Mo, 2016</option>
<option value=\"2016-08-09\">Aug 09 Tu, 2016</option>
<option value=\"2016-08-10\">Aug 10 We, 2016</option>
<option value=\"2016-08-11\">Aug 11 Th, 2016</option>
<option value=\"2016-08-12\">Aug 12 Fr, 2016</option>
<option value=\"2016-08-13\">Aug 13 Sa, 2016</option>
<option value=\"2016-08-14\">Aug 14 Su, 2016</option>
<option value=\"2016-08-15\">Aug 15 Mo, 2016</option>
<option value=\"2016-08-16\">Aug 16 Tu, 2016</option>
<option value=\"2016-08-17\">Aug 17 We, 2016</option>
<option value=\"2016-08-18\">Aug 18 Th, 2016</option>
<option value=\"2016-08-19\">Aug 19 Fr, 2016</option>
<option value=\"2016-08-20\">Aug 20 Sa, 2016</option>
<option value=\"2016-08-21\">Aug 21 Su, 2016</option>
<option value=\"2016-08-22\">Aug 22 Mo, 2016</option>
<option value=\"2016-08-23\">Aug 23 Tu, 2016</option>
<option value=\"2016-08-24\">Aug 24 We, 2016</option>
<option value=\"2016-08-25\">Aug 25 Th, 2016</option>
<option value=\"2016-08-26\">Aug 26 Fr, 2016</option>
<option value=\"2016-08-27\">Aug 27 Sa, 2016</option>
<option value=\"2016-08-28\">Aug 28 Su, 2016</option>
<option value=\"2016-08-29\">Aug 29 Mo, 2016</option>
<option value=\"2016-08-30\">Aug 30 Tu, 2016</option>
<option value=\"2016-08-31\">Aug 31 We, 2016</option>
<option value=\"2016-09-01\">Sep 01 Th, 2016</option>
<option value=\"2016-09-02\">Sep 02 Fr, 2016</option>
<option value=\"2016-09-03\">Sep 03 Sa, 2016</option>
<option value=\"2016-09-04\">Sep 04 Su, 2016</option>
<option value=\"2016-09-05\">Sep 05 Mo, 2016</option>
<option value=\"2016-09-06\">Sep 06 Tu, 2016</option>
<option value=\"2016-09-07\">Sep 07 We, 2016</option>
<option value=\"2016-09-08\">Sep 08 Th, 2016</option>
<option value=\"2016-09-09\">Sep 09 Fr, 2016</option>
<option value=\"2016-09-10\">Sep 10 Sa, 2016</option>
<option value=\"2016-09-11\">Sep 11 Su, 2016</option>
<option value=\"2016-09-12\">Sep 12 Mo, 2016</option>
<option value=\"2016-09-13\">Sep 13 Tu, 2016</option>
<option value=\"2016-09-14\">Sep 14 We, 2016</option>
<option value=\"2016-09-15\">Sep 15 Th, 2016</option>
<option value=\"2016-09-16\">Sep 16 Fr, 2016</option>
<option value=\"2016-09-17\">Sep 17 Sa, 2016</option>
<option value=\"2016-09-18\">Sep 18 Su, 2016</option>
<option value=\"2016-09-19\">Sep 19 Mo, 2016</option>
<option value=\"2016-09-20\">Sep 20 Tu, 2016</option>
<option value=\"2016-09-21\">Sep 21 We, 2016</option>
<option value=\"2016-09-22\">Sep 22 Th, 2016</option>
<option value=\"2016-09-23\">Sep 23 Fr, 2016</option>
<option value=\"2016-09-24\">Sep 24 Sa, 2016</option>
<option value=\"2016-09-25\">Sep 25 Su, 2016</option>
<option value=\"2016-09-26\">Sep 26 Mo, 2016</option>
<option value=\"2016-09-27\">Sep 27 Tu, 2016</option>
<option value=\"2016-09-28\">Sep 28 We, 2016</option>
<option value=\"2016-09-29\">Sep 29 Th, 2016</option>
<option value=\"2016-09-30\">Sep 30 Fr, 2016</option>
<option value=\"2016-10-01\">Oct 01 Sa, 2016</option>
<option value=\"2016-10-02\">Oct 02 Su, 2016</option>
<option value=\"2016-10-03\">Oct 03 Mo, 2016</option>
<option value=\"2016-10-04\">Oct 04 Tu, 2016</option>
<option value=\"2016-10-05\">Oct 05 We, 2016</option>
<option value=\"2016-10-06\">Oct 06 Th, 2016</option>
<option value=\"2016-10-07\">Oct 07 Fr, 2016</option>
<option value=\"2016-10-08\">Oct 08 Sa, 2016</option>
<option value=\"2016-10-09\">Oct 09 Su, 2016</option>
<option value=\"2016-10-10\">Oct 10 Mo, 2016</option>
<option value=\"2016-10-11\">Oct 11 Tu, 2016</option>
<option value=\"2016-10-12\">Oct 12 We, 2016</option>
<option value=\"2016-10-13\">Oct 13 Th, 2016</option>
<option value=\"2016-10-14\">Oct 14 Fr, 2016</option>
<option value=\"2016-10-15\">Oct 15 Sa, 2016</option>
<option value=\"2016-10-16\">Oct 16 Su, 2016</option>
<option value=\"2016-10-17\">Oct 17 Mo, 2016</option>
<option value=\"2016-10-18\">Oct 18 Tu, 2016</option>
<option value=\"2016-10-19\">Oct 19 We, 2016</option>
<option value=\"2016-10-20\">Oct 20 Th, 2016</option>
<option value=\"2016-10-21\">Oct 21 Fr, 2016</option>
<option value=\"2016-10-22\">Oct 22 Sa, 2016</option>
<option value=\"2016-10-23\">Oct 23 Su, 2016</option>
<option value=\"2016-10-24\">Oct 24 Mo, 2016</option>
<option value=\"2016-10-25\">Oct 25 Tu, 2016</option>
<option value=\"2016-10-26\">Oct 26 We, 2016</option>
<option value=\"2016-10-27\">Oct 27 Th, 2016</option>
<option value=\"2016-10-28\">Oct 28 Fr, 2016</option>
<option value=\"2016-10-29\">Oct 29 Sa, 2016</option>
<option value=\"2016-10-30\">Oct 30 Su, 2016</option>
<option value=\"2016-10-31\">Oct 31 Mo, 2016</option>
<option value=\"2016-11-01\">Nov 01 Tu, 2016</option>
<option value=\"2016-11-02\">Nov 02 We, 2016</option>
<option value=\"2016-11-03\">Nov 03 Th, 2016</option>
<option value=\"2016-11-04\">Nov 04 Fr, 2016</option>
<option value=\"2016-11-05\">Nov 05 Sa, 2016</option>
<option value=\"2016-11-06\">Nov 06 Su, 2016</option>
<option value=\"2016-11-07\">Nov 07 Mo, 2016</option>
<option value=\"2016-11-08\">Nov 08 Tu, 2016</option>
<option value=\"2016-11-09\">Nov 09 We, 2016</option>
<option value=\"2016-11-10\">Nov 10 Th, 2016</option>
<option value=\"2016-11-11\">Nov 11 Fr, 2016</option>
<option value=\"2016-11-12\">Nov 12 Sa, 2016</option>
<option value=\"2016-11-13\">Nov 13 Su, 2016</option>
<option value=\"2016-11-14\">Nov 14 Mo, 2016</option>
<option value=\"2016-11-15\">Nov 15 Tu, 2016</option>
<option value=\"2016-11-16\">Nov 16 We, 2016</option>
<option value=\"2016-11-17\">Nov 17 Th, 2016</option>
<option value=\"2016-11-18\">Nov 18 Fr, 2016</option>
<option value=\"2016-11-19\">Nov 19 Sa, 2016</option>
<option value=\"2016-11-20\">Nov 20 Su, 2016</option>
<option value=\"2016-11-21\">Nov 21 Mo, 2016</option>
<option value=\"2016-11-22\">Nov 22 Tu, 2016</option>
<option value=\"2016-11-23\">Nov 23 We, 2016</option>
<option value=\"2016-11-24\">Nov 24 Th, 2016</option>
<option value=\"2016-11-25\">Nov 25 Fr, 2016</option>
<option value=\"2016-11-26\">Nov 26 Sa, 2016</option>
<option value=\"2016-11-27\">Nov 27 Su, 2016</option>
<option value=\"2016-11-28\">Nov 28 Mo, 2016</option>
<option value=\"2016-11-29\">Nov 29 Tu, 2016</option>
<option value=\"2016-11-30\">Nov 30 We, 2016</option>
<option value=\"2016-12-01\">Dec 01 Th, 2016</option>
<option value=\"2016-12-02\">Dec 02 Fr, 2016</option>
<option value=\"2016-12-03\">Dec 03 Sa, 2016</option>
<option value=\"2016-12-04\">Dec 04 Su, 2016</option>
<option value=\"2016-12-05\">Dec 05 Mo, 2016</option>
<option value=\"2016-12-06\">Dec 06 Tu, 2016</option>
<option value=\"2016-12-07\">Dec 07 We, 2016</option>
<option value=\"2016-12-08\">Dec 08 Th, 2016</option>
<option value=\"2016-12-09\">Dec 09 Fr, 2016</option>
<option value=\"2016-12-10\">Dec 10 Sa, 2016</option>
<option value=\"2016-12-11\">Dec 11 Su, 2016</option>
<option value=\"2016-12-12\">Dec 12 Mo, 2016</option>
<option value=\"2016-12-13\">Dec 13 Tu, 2016</option>
<option value=\"2016-12-14\">Dec 14 We, 2016</option>
<option value=\"2016-12-15\">Dec 15 Th, 2016</option>
<option value=\"2016-12-16\">Dec 16 Fr, 2016</option>
<option value=\"2016-12-17\">Dec 17 Sa, 2016</option>
<option value=\"2016-12-18\">Dec 18 Su, 2016</option>
<option value=\"2016-12-19\">Dec 19 Mo, 2016</option>
<option value=\"2016-12-20\">Dec 20 Tu, 2016</option>
<option value=\"2016-12-21\">Dec 21 We, 2016</option>
<option value=\"2016-12-22\">Dec 22 Th, 2016</option>
<option value=\"2016-12-23\">Dec 23 Fr, 2016</option>
<option value=\"2016-12-24\">Dec 24 Sa, 2016</option>
<option value=\"2016-12-25\">Dec 25 Su, 2016</option>
<option value=\"2016-12-26\">Dec 26 Mo, 2016</option>
<option value=\"2016-12-27\">Dec 27 Tu, 2016</option>
<option value=\"2016-12-28\">Dec 28 We, 2016</option>
<option value=\"2016-12-29\">Dec 29 Th, 2016</option>
<option value=\"2016-12-30\">Dec 30 Fr, 2016</option>
<option value=\"2016-12-31\">Dec 31 Sa, 2016</option>
<option value=\"2017-01-01\">Jan 01 Su, 2017</option>
";

# END OF MODIFIABLE VARIABLES



############################################################################
###        DO NOT MODIFY ANYTHING FROM HERE
############################################################################

error_reporting(E_ALL ^ E_NOTICE);
$PHPR_LOG = "NO";
$pag = $var_page_name;
if (!$pag) {
if (@$PHP_SELF or @$_SERVER["PHP_SELF"] or @$HTTP_SERVER_VARS["PHP_SELF"]) {
if (@$_SERVER["PHP_SELF"]) $PHP_SELF = $_SERVER["PHP_SELF"];
else if (@$HTTP_SERVER_VARS["PHP_SELF"]) $PHP_SELF = $HTTP_SERVER_VARS["PHP_SELF"];
$pag = explode("/",$PHP_SELF);
$pag = $pag[(count($pag)-1)];
} # fine if (@$PHP_SELF or @$_SERVER["PHP_SELF"] or...
else echo "The \$PHP_SELF variable is not defined, you'll have to edit this page by hand to add its name.<br>";
} # fine if (!$pag)

define(C_PERCORSO_A_DATI,"D:\xampp\htdocs\hoteldruid\dati/");

$anno = $var_year;
$PHPR_DB_TYPE = $var_db_type;
$PHPR_DB_NAME = $var_db_name;
$PHPR_DB_HOST = $var_db_host;
$PHPR_DB_PORT = $var_db_port;
$PHPR_DB_USER = $var_db_user;
$PHPR_DB_PASS = $var_db_password;
if (strtoupper($var_db_load_extension) == "YES") $PHPR_LOAD_EXT = "SI";
else $PHPR_LOAD_EXT = "NO";
$PHPR_TAB_PRE = $var_db_tables_prefix;
$lingua_modello = $var_template_language;
if (strtoupper($var_extend_last_date) == "YES") $estendi_ultima_data = "SI";
else $estendi_ultima_data = "NO";
unset($tariffe_mostra);
reset ($var_rates_to_show);
while (list ($key, $val) = each ($var_rates_to_show)) {
if (strtoupper($val) == "YES") $tariffe_mostra[$key] = "SI";
if (strtoupper($val) == "NO") $tariffe_mostra[$key] = "NO";
} # fine while
$n_tariffe_imposte = $var_imposed_rates_names;
unset($motivazioni_regola1);
reset ($var_motivations_of_rule1_to_consider);
while (list ($key, $val) = each ($var_motivations_of_rule1_to_consider)) {
if (strtoupper($val) == "YES") $motivazioni_regola1[$key] = "SI";
if (strtoupper($val) == "NO") $motivazioni_regola1[$key] = "NO";
} # fine while
$data_preselezionata = $var_default_date;
$numero_giorni = $var_days_number;
if (strtoupper($var_align_availability_with_arrival) == "YES") $allinea_disponibilita_con_arrivo = "SI";
else $allinea_disponibilita_con_arrivo = "NO";

$mostra_quadro_disp = "app";
if (strtoupper($var_group_availability_overview_with_people) == "YES") $mostra_quadro_disp = "pers";
if (strtoupper($var_group_availability_overview_with_rule_2) == "YES") $mostra_quadro_disp = "reg2";
$stile_tabella_cal = $var_cal_table_style;
$c_inisett_tab_disp = $var_color_week_beginning_availability_overview;
$c_libero_tab_disp = $var_color_free_availability_overview;
$c_occupato_tab_disp = $var_color_full_availability_overview;
$aper_font_tab_disp = $var_opening_font_availability_overview;
$chiu_font_tab_disp = $var_closing_font_availability_overview;
if (strtoupper($var_show_free_number_availability_overview) == "YES") $mostra_num_liberi = "SI";
else $mostra_num_liberi = "NO";

$apertura_tag_font = $var_font_tag_opening;
$chiusura_tag_font = $var_font_tag_closing;
$file_css_frame = $var_framed_css_file;
$extra_head_frame = "<style type=\"text/css\">
 body { background-color: #ffffff; color: #000000; }
 div.cal_title { text-align: center; }
 a { color: #000000; }
</style>";
$tipo_periodi = "g";

# FRASI
$fr_Euro = $var_phr_Currency_sing;
$fr_Euros = $var_phr_Currency_plur;
$fr_tariffa = $var_phr_rate;
$fr_persona = $var_phr_person;
$fr_persone = $var_phr_people;
$fr_Gennaio = $var_phr_January;
$fr_Febbraio = $var_phr_February;
$fr_Marzo = $var_phr_March;
$fr_Aprile = $var_phr_April;
$fr_Maggio = $var_phr_May;
$fr_Giugno = $var_phr_June;
$fr_Luglio = $var_phr_July;
$fr_Agosto = $var_phr_August;
$fr_Settembre = $var_phr_September;
$fr_Ottobre = $var_phr_October;
$fr_Novembre = $var_phr_November;
$fr_Dicembre = $var_phr_December;
$fr_Quadro_indicativo_disponibilita = $var_phr_Indicative_availability_overview;
$fr_freccia_destra = $var_fr_freccia_destra;
$fr_freccia_sinistra = $var_fr_freccia_sinistra;

# PERIODI NEI MENU
$menu_periodi = $var_menu_periods;

function mex_data($messaggio) {

###########################################
###  INIZIO ./includes/lang/en/giorni_mesi.php 
###########################################

switch ($messaggio) {

case " Do":  					$messaggio = " Su"; break;
case " Lu":  					$messaggio = " Mo"; break;
case " Ma":  					$messaggio = " Tu"; break;
case " Me":  					$messaggio = " We"; break;
case " Gi":  					$messaggio = " Th"; break;
case " Ve":  					$messaggio = " Fr"; break;
case " Sa":  					$messaggio = " Sa"; break;
case "Gen":  					$messaggio = "Jan"; break;
case "Feb":  					$messaggio = "Feb"; break;
case "Mar":  					$messaggio = "Mar"; break;
case "Apr":  					$messaggio = "Apr"; break;
case "Mag":  					$messaggio = "May"; break;
case "Giu":  					$messaggio = "Jun"; break;
case "Lug":  					$messaggio = "Jul"; break;
case "Ago":  					$messaggio = "Aug"; break;
case "Set":  					$messaggio = "Sep"; break;
case "Ott":  					$messaggio = "Oct"; break;
case "Nov":  					$messaggio = "Nov"; break;
case "Dic":  					$messaggio = "Dec"; break;
case "Gennaio":  				$messaggio = "January"; break;
case "Febbraio":  				$messaggio = "February"; break;
case "Marzo":  					$messaggio = "March"; break;
case "Aprile":  				$messaggio = "April"; break;
case "Maggio":  				$messaggio = "May"; break;
case "Giugno":  				$messaggio = "June"; break;
case "Luglio":  				$messaggio = "July"; break;
case "Agosto":  				$messaggio = "August"; break;
case "Settembre":  				$messaggio = "September"; break;
case "Ottobre":  				$messaggio = "October"; break;
case "Novembre":  				$messaggio = "November"; break;
case "Dicembre":  				$messaggio = "December"; break;
case "Domenica":  				$messaggio = "Sunday"; break;
case "Lunedì":  				$messaggio = "Monday"; break;
case "Martedì":  				$messaggio = "Tuesday"; break;
case "Mercoledì":  				$messaggio = "Wednesday"; break;
case "Giovedì":  				$messaggio = "Thursday"; break;
case "Venerdì":  				$messaggio = "Friday"; break;
case "Sabato":  				$messaggio = "Saturday"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)


###########################################
###  FINE ./includes/lang/en/giorni_mesi.php 
###########################################

return $messaggio;
} # fine function mex_data


###########################################
###  INIZIO ./includes/funzioni_mysqli.php 
###########################################

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2014 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################

#Funzioni per usare il database MYSQL con estensioni mysqli

ignore_user_abort(1);

# variabili per le differenze nella sintassi delle query
#global $ILIKE,$LIKE;
$ILIKE = "LIKE";
$LIKE = "LIKE BINARY";
$DATETIME = "datetime";
$MEDIUMTEXT = "mediumtext";
unset($link_mysqli);


function connetti_db ($database,$host,$port,$user,$password,$estensione) {

global $link_mysqli;
if ($estensione == "SI") dl("mysqli.so");
$link_mysqli = mysqli_connect($host,$user,$password,$database,$port);
@mysqli_query($link_mysqli,"SET NAMES 'utf8'");

return $link_mysqli;

} # fine function connetti_db


function disconnetti_db (&$numconnessione) {

$risul = mysqli_close($numconnessione);
return $risul;

} # fine function disconnetti_db


if (substr($PHPR_LOG,0,2) != "SI") {

function esegui_query ($query,$silenzio = "",$idlog = "") {

global $link_mysqli;
$risul[-1] = mysqli_query($link_mysqli,$query);
$risul[-2] = -1;
if (!$risul[-1] and !$silenzio) {
global $PHPR_TAB_PRE;
echo "<br>ERROR IN: ".str_replace(" ".$PHPR_TAB_PRE," ",$query)." <br>".mysqli_errno($link_mysqli).": ".mysqli_error($link_mysqli)."<br>";
} # fine if (!$risul and !$silenzio)

return $risul;

} # fine function esegui_query

} # fine if (substr($PHPR_LOG,0,2) != "SI")


else {
if (!function_exists("inserisci_log")) include("./includes/funzioni_log.php");

function esegui_query ($query,$silenzio = "",$idlog = "") {

global $link_mysqli;
$risul[-1] = mysqli_query($link_mysqli,$query);
$risul[-2] = -3;
if (!$risul[-1] and !$silenzio) {
global $PHPR_TAB_PRE;
echo "<br>ERROR IN: ".str_replace(" ".$PHPR_TAB_PRE," ",$query)." <br>".mysqli_errno($link_mysqli).": ".mysqli_error($link_mysqli)."<br>";
} # fine if (!$risul and !$silenzio)

if ($idlog != 1) inserisci_log($query,$idlog);

return $risul;

} # fine function esegui_query

} # fine else if (substr($PHPR_LOG,0,2) != "SI")


function risul_query (&$query,$riga,$colonna,$tab="") {

/*
# version that uses too much memory ($query stores each line)
if (!$query[$riga]) {
if ($query[-2] != ($riga - 1)) mysqli_data_seek($query[-1],$riga);
$query[$riga] = mysqli_fetch_array($query[-1]);
$query[-2] = $riga;
#if (!$risul) echo "<br>Nessun risultato in riga $riga colonna $colonna<br>";
} # fine if (!$query[$riga])

return $query[$riga][$colonna];
*/

if ($query[-2] != $riga) {
if ($query[-2] != ($riga - 1)) mysqli_data_seek($query[-1],$riga);
$query[1] = mysqli_fetch_array($query[-1]);
$query[-2] = $riga;
#if (!$risul) echo "<br>Nessun risultato in riga $riga colonna $colonna<br>";
} # fine if ($query[-2] != $riga)

return $query[1][$colonna];

} # fine function risul_query


function numlin_query ($query) {

$risul = mysqli_num_rows($query[-1]);
return $risul;

} # fine function numlin_query


function aggslashdb ($stringa) {

$risul = addslashes($stringa);
return $risul;

} # fine function aggslashdb


function arraylin_query (&$query,$num) {

if ($query[-2] != ($num - 1)) mysqli_data_seek($query[-1],$num);
$risul =  mysqli_fetch_row($query[-1]);
$query[-2] = $num;
return $risul;

} # fine function arraylin_query


function numcampi_query ($query) {

$risul = mysqli_num_fields($query[-1]);
return $risul;

} # fine function numcampi_query


function nomecampo_query ($query,$num) {

$risul = mysqli_fetch_field_direct($query[-1],$num);
return $risul->name;

} # fine function nomecampo_query


function tipocampo_query ($query,$num) {

$risul = mysqli_fetch_field_direct($query[-1],$num);
return $risul->type;

} # fine function tipocampo_query


function dimcampo_query ($query,$num) {

$risul = mysqli_fetch_field_direct($query[-1],$num);
return $risul->max_length;

} # fine function dimcampo_query


function lock_tabelle ($tabelle,$altre_tab_usate = "",$lock_dir = C_DATI_PATH) {

if (@is_array($tabelle)) {
for ($num1 = 0 ; $num1 < count($tabelle); $num1++) {
$lista_tabelle .= $tabelle[$num1]." write,";
} # fine for $num1
} # fine if (@is_array($tabelle))
if (@is_array($altre_tab_usate)) {
for ($num1 = 0 ; $num1 < count($altre_tab_usate); $num1++) {
$lista_tabelle .= $altre_tab_usate[$num1]." read,";
} # fine for $num1
} # fine if (@is_array($altre_tab_usate))
$lista_tabelle = substr($lista_tabelle,0,-1);
global $link_mysqli;
$risul = mysqli_query($link_mysqli,"lock tables $lista_tabelle");
if (!$risul) echo "<br>ERROR IN: lock tables $lista_tabelle<br>".mysqli_errno($link_mysqli).": ".mysqli_error($link_mysqli)."<br>";

return $risul;

} # fine function lock_tabelle


function unlock_tabelle ($tabelle_lock,$azione = "") {

global $link_mysqli;
$risul = mysqli_query($link_mysqli,"unlock tables");

} # fine function unlock_tabelle


function crea_indice ($tabella,$colonne,$nome) {

global $link_mysqli;
mysqli_query($link_mysqli,"alter table $tabella add index $nome ($colonne)");

} # fine function crea_indice




###########################################
###  FINE ./includes/funzioni_mysqli.php 
###########################################


$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);

###########################################
###  INIZIO ./includes/funzioni.php 
###########################################

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2016 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################


error_reporting(E_ALL ^ E_NOTICE);
if (function_exists('mb_internal_encoding')) mb_internal_encoding('UTF-8');
if (function_exists('date_default_timezone_set')) if (!ini_get('date.timezone')) date_default_timezone_set('UTC');


# nel caso fosse settato register_globals = Off
if (@is_array($_POST)) reset($_POST);
for($num1 = 0 ; $num1 < count($_POST); $num1++) {
$var_POST = key($_POST);
if (!isset($$var_POST)) $$var_POST = $_POST[$var_POST];
next($_POST);
} # fine for $num1
if (@is_array($_GET)) reset($_GET);
for($num1 = 0 ; $num1 < count($_GET); $num1++) {
$var_GET = key($_GET);
if (!isset($$var_GET)) $$var_GET = $_GET[$var_GET];
next($_GET);
} # fine for $num1


if (@is_file(C_DATI_PATH."/tema.php")) include(C_DATI_PATH."/tema.php");
else {
unset($tema);
$trad_ui = 0;
} # fine else if (@is_file(C_DATI_PATH."/tema.php"))

#$pag = explode("/", $SCRIPT_NAME);
#$pag = end($pag);
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";

#@include("./includes/costanti.php");
#@include(C_DATI_PATH."/costanti.php");
define('C_PHPR_VERSIONE_NUM',2.14);
define('C_PHPR_VERSIONE_TXT',"2.1.4");

# Se non si specifica nessun anno uso l'attuale
$anno_corrente = date("Y",(time() + (C_DIFF_ORE * 3600)));
if (!$anno) {
if ($id_sessione) $anno = substr($id_sessione,0,4);
else {
if (!defined('C_GIORNI_NUOVO_ANNO')) include("./costanti.php");
$anno = date("Y",(time() + (C_DIFF_ORE * 3600) - (C_GIORNI_NUOVO_ANNO * 86400)));
# Se ci troviamo nel periodo di C_GIORNI_NUOVO_ANNO ma il nuovo anno è già stato creato
if ($anno_corrente != $anno) {
if (@is_file(C_DATI_PATH."/selectperiodi$anno_corrente.1.php")) $anno = $anno_corrente;
} # fine if ($anno_corrente != $anno)
} # fine else if ($id_sessione)
} # fine if (!$anno)

if ($vers_hinc) $vers_hinc = "?v=".C_PHPR_VERSIONE_NUM;

if ($_SERVER['SERVER_NAME']) $HOSTNAME = $_SERVER['SERVER_NAME'];
elseif ($SERVER_NAME) $HOSTNAME = $SERVER_NAME;
$HOSTNAME = htmlspecialchars($HOSTNAME);

if (strstr($_SERVER['HTTP_USER_AGENT'],'(iP') or strstr($_SERVER['HTTP_USER_AGENT'],'Android') or strstr($_SERVER['HTTP_USER_AGENT'],'webOS') or strstr($_SERVER['HTTP_USER_AGENT'],'BlackBerry') or strstr($_SERVER['HTTP_USER_AGENT'],'Mobile') or strstr($_SERVER['HTTP_USER_AGENT'],'Opera Mobi')) $mobile_device = 1;
else $mobile_device = 0;


if (function_exists('aggslashdb')) {
$anno = aggslashdb($anno);
$id_sessione = aggslashdb($id_sessione);
$HOSTNAME = aggslashdb($HOSTNAME);
} # fine if (function_exists('aggslashdb'))
else {
$anno = addslashes($anno);
$id_sessione = addslashes($id_sessione);
$HOSTNAME = addslashes($HOSTNAME);
} # fine else if (function_exists('aggslashdb'))



if (!$parole_sost) {
function mex ($messaggio,$pagina) {

global $lingua_mex;
if ($lingua_mex != "ita") {
include("./includes/lang/$lingua_mex/$pagina");
} # fine if ($lingua_mex != "ita")
elseif ($pagina == "unit.php") include("./includes/unit.php");

return $messaggio;

} # fine function mex
} # fine if (!$parole_sost)


else {
function mex ($messaggio,$pagina) {

global $lingua_mex;
if ($lingua_mex != "ita") {
include("./includes/lang/$lingua_mex/$pagina");
} # fine if ($lingua_mex != "ita")
elseif ($pagina == "unit.php") include("./includes/unit.php");
if (substr($messaggio,0,4) != 'var_') @include(C_DATI_PATH."/parole_sost.php");

return $messaggio;

} # fine function mex
} # fine else if (!$parole_sost)



function controlla_anno ($anno) {

$verificato = "SI";
$verifica_num = preg_replace("/[0-9]/","",$anno);
if (strcmp($verifica_num,"")) $verificato = "NO";
if (strlen($anno) != 4) $verificato = "NO";
$prime_cifre =substr ($anno,0,2);
if ($prime_cifre != 18 and $prime_cifre != 19 and $prime_cifre != 20 and $prime_cifre != 21) $verificato = "NO";

return $verificato;

} # fine function controlla_anno

# controllo che l'anno passato a tutte le pagine non sia falso
if (controlla_anno($anno) != "SI") $anno = "";



# parametro deve essere positivo o 0
function controlla_num_pos ($num) {

$verificato = "SI";
if (!strcmp($num,"")) $verificato = "NO";
$verifica_num = preg_replace("/[0-9]/","",$num);
if (strcmp($verifica_num,"")) $verificato = "NO";

return $verificato;

} # fine function controlla_num_pos



function controlla_num ($num) {

$verificato = "SI";
$uno = substr($num,0,1);
if ($uno == "-") $num = substr($num,1);
$verifica_num = preg_replace("/[0-9]/","",$num);
if (strcmp($verifica_num,"")) $verificato = "NO";

return $verificato;

} # fine function controlla_num



function nome_valuta ($id_utente_valuta = "") {

global $tablepersonalizza;
if ($id_utente_valuta) $id_utente = $id_utente_valuta;
else global $id_utente;
$nome_valuta = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'valuta' and idutente = '$id_utente'");
$nome_valuta = risul_query($nome_valuta,0,'valpersonalizza');

return $nome_valuta;

} # fine function nome_valuta



function stile_data ($id_utente_st = "") {

global $tablepersonalizza;
if ($id_utente_st) $id_utente = $id_utente_st;
else global $id_utente;
$stile_data = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'stile_data' and idutente = '$id_utente'");
$stile_data = risul_query($stile_data,0,'valpersonalizza');

return $stile_data;

} # fine function stile_data



function formatta_data ($data,$stile_data="europa") {

$giorno = substr($data,8,2);
$mese = substr($data,5,2);
$anno = substr($data,0,4);
#$formato = "d-m-Y";
#if ($stile_data == 'usa') $formato = "m-d-Y";
#$data_formattata = date ($formato, mktime(0,0,0,$mese,$giorno,$anno));
switch ($stile_data) {
case "usa": $data_formattata = $mese."-".$giorno."-".$anno; break;
default: $data_formattata = $giorno."-".$mese."-".$anno;
} # fine switch ($stile_data)
$data_formattata .= substr($data,10);

return $data_formattata;

} # fine function formatta_data



function stile_soldi ($id_utente_st = "") {

global $tablepersonalizza;
if ($id_utente_st) $id_utente = $id_utente_st;
else global $id_utente;
$stile_soldi = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'stile_soldi' and idutente = '$id_utente'");
$stile_soldi = risul_query($stile_soldi,0,'valpersonalizza');

return $stile_soldi;

} # fine function stile_soldi



function punti_in_num ($num,$stile_soldi="europa",$decimali="") {

#$uno = substr ($num,0,1);
#if ($uno == "-") { $num = substr ($num,1); }
#$num = strrev($num);
#$num = chunk_split($num,3,".");
#$num = substr ($num,0,-1);
#$num = strrev($num);
#if ($uno == "-") { $num = "-".$num; }

if (!strcmp($decimali,"")) {
if (!strstr($num,".") or substr(strstr($num,"."),1) == 0) $decimali = 0;
else $decimali = 2;
} # fine (!strcmp($decimali,""))
if ($stile_soldi == "usa") $num = number_format((double) $num,$decimali);
else $num = number_format((double) $num,$decimali,",",".");

return $num;

} # fine function punti_in_num



function virgola_in_num ($num,$stile_soldi="europa") {

if ($stile_soldi == "europa") $num = str_replace(".",",",$num);

return $num;

} # fine function virgola_in_num



function controlla_soldi ($num,$pos="NO") {

$verificato = "SI";
$uno = substr ($num,0,1);
if ($uno == "-" and $pos == "NO") $num = substr($num,1);
#$num = str_replace(",",".",$num);
$parti = explode(".",$num);
if (count($parti) > 2) $verificato = "NO";
$num = str_replace(".","",$num);
$verifica_num = preg_replace("/[0-9]/","",$num);
if (strcmp($verifica_num,"")) $verificato = "NO";

return $verificato;

} # fine function controlla_soldi



function formatta_soldi ($num) {

$num = str_replace(",",".",$num);
$parti = explode(".",$num);
if (count($parti) == 2) {
if ($parti[1]) {
if (strlen($parti[1]) > 2) {
$parti[1] = substr($parti[1],0,2).".".substr($parti[1],2);
$parti[1] = round($parti[1]);
} # fine if (strlen($parti[1]) > 2)
$num = $parti[0].".".$parti[1];
settype ($num,double);
} # fine if ($parti[1])
else $num = $parti[0];
} # fine if (count($parti) == 2)

return $num;

} # fine function formatta_soldi



function togli_acapo($stringa) {

$stringa = str_replace("\r\n","",$stringa);
$stringa = str_replace("\r","",$stringa);
$stringa = str_replace("\n","",$stringa);
$stringa = str_replace("
","",$stringa);

return $stringa;

} # fine function togli_acapo



function aggiungi_slash($stringa) {

$stringa = str_replace("\\","\\\\",$stringa);
$stringa = str_replace("\$","\\\$",$stringa);
$stringa = str_replace("\"","\\\"",$stringa);

return $stringa;

} # fine function aggiungi_slash



function strip_magic_slashs ($val) {
if (@get_magic_quotes_gpc()) $val = stripslashes($val);
return $val;
} # fine function strip_magic_slashs



function prendi_numero_versione ($tableversioni,$idversioni="idversioni",$num_versione="num_versione") {

$versione = esegui_query("select * from $tableversioni where $idversioni = '2'");
if (numlin_query($versione)) {
$versione = risul_query($versione,0,$num_versione);
$versione = $versione + 1;
if ($versione >= 99999990) $versione = 100;
esegui_query("update $tableversioni set $num_versione = '$versione' where $idversioni = '2'");
} # fine if (numlin_query($versione))
else {
$versione = 100;
esegui_query("insert into $tableversioni ($idversioni,$num_versione) values ('2','100') ");
} # fine else if (numlin_query($versione))

return $versione;

} # fine function prendi_numero_versione



#Funzione per controllare le sessioni

$id_utente = "";


function controlla_login (&$numconnessione,&$PHPR_TAB_PRE,&$id_sessione,$nome_utente_phpr,$password_phpr,$anno) {

if (defined("C_FILE_SCADENZA_ACCOUNT") and C_FILE_SCADENZA_ACCOUNT != "") {
$scadenza = trim(@implode("",@file("./".C_FILE_SCADENZA_ACCOUNT)));
$adesso = date("YmdHis");
if (!$scadenza or $scadenza < $adesso) {
$disattivato = "SI";
if (defined("C_HTML_PRE_LOGIN") and C_HTML_PRE_LOGIN != "") echo C_HTML_PRE_LOGIN;
echo "Expired account.<br>";
if (defined("C_HTML_POST_LOGIN") and C_HTML_POST_LOGIN != "") echo C_HTML_POST_LOGIN;
} # fine (!$scadenza or $scadenza < $adesso)
} # fine (defined("C_FILE_SCADENZA_ACCOUNT") and C_FILE_SCADENZA_ACCOUNT != "")
if (!$disattivato) {

global $lingua_mex,$tema,$pag,$ILIKE,$LIKE,$DATETIME,$nome_utente_login,$PHPR_LOG;
@include(C_DATI_PATH."/lingua.php");
@include(C_DATI_PATH."/versione.php");
if ($lingua[1] and @is_dir("./includes/lang/".$lingua[1])) $lingua_mex = $lingua[1];
else $lingua_mex = "ita";
$nome_utente_login = "";


if (!is_file(C_DATI_PATH."/abilita_login")) $id_utente = 1;

else {

if (!$id_sessione) {
if ($nome_utente_phpr and $password_phpr) {
if (!$numconnessione) {
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
} # fine if (!$numconnessione)
$nome_utente_phpr = aggslashdb($nome_utente_phpr);
$password_phpr = aggslashdb($password_phpr);
$tableutenti = $PHPR_TAB_PRE."utenti";
$tablesessioni = $PHPR_TAB_PRE."sessioni";
$tableversioni = $PHPR_TAB_PRE."versioni";
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tabelle_lock = array($tableversioni,$tablesessioni,$tabletransazioni);
$altre_tab_lock = array($tablepersonalizza,$tableutenti);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

$sec_log_sbagliati = 5;
$limite_login_sbagliati = date("Y-m-d H:i:s",(time() - $sec_log_sbagliati + (C_DIFF_ORE * 3600)));
$ultimo_login_sbagliato = esegui_query("select ultimo_accesso from $tabletransazioni where tipo_transazione = 'err_l' and ultimo_accesso >= '$limite_login_sbagliati'");
if (numlin_query($ultimo_login_sbagliato) > 0) {
$mostra_form_login = "SI";
$messaggio_errore .= mex("Dopo un login <div style=\"display: inline; color: red;\">errato</div> si devono attendere","funzioni.php")." $sec_log_sbagliati ".mex("secondi","funzioni.php").".<br><br>";
} # fine if (numlin_query($ultimo_login_sbagliato) > 0)
else {
$num_log_sbagliati = 7;
$num_log_avviso = 3;
$minuti_durata_sessione = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'minuti_durata_sessione' and idutente = '1'");
$minuti_durata_sessione = risul_query($minuti_durata_sessione,0,'valpersonalizza_num');
$limite_transazioni_vecchie = date("Y-m-d H:i:s",(time() - ($minuti_durata_sessione * 60) + (C_DIFF_ORE * 3600)));
esegui_query("delete from $tabletransazioni where ultimo_accesso <= '$limite_transazioni_vecchie'");
$login_sbagliati = esegui_query("select tipo_transazione from $tabletransazioni where tipo_transazione = 'err_l' and dati_transazione1 = '$nome_utente_phpr'");
$login_sbagliati = numlin_query($login_sbagliati);
if ($login_sbagliati >= $num_log_sbagliati) {
$messaggio_errore .= mex("Numero eccesivo di login <div style=\"display: inline; color: red;\">errati</div> negli ultimi","funzioni.php")." $minuti_durata_sessione ".mex("minuti","funzioni.php").".<br><br>";
if (defined("C_HTML_POST_LOGIN") and C_HTML_POST_LOGIN != "") $messaggio_errore .= mex("È possibile reimpostare la password dal proprio account di hosting","funzioni.php").".".C_HTML_POST_LOGIN;
} # fine if ($login_sbagliati >= $num_log_sbagliati)
else {

$utente = esegui_query("select * from $tableutenti where nome_utente = '$nome_utente_phpr'");
if (numlin_query($utente) == 1) {
$nome_utente_login = risul_query($utente,0,'nome_utente');
$tipo_pass = risul_query($utente,0,'tipo_pass');
$password = risul_query($utente,0,'password');
if ($tipo_pass == "5") {
if (C_VERSIONE_ATTUALE > 1.32) {
$salt = risul_query($utente,0,'salt');
for ($num1 = 0 ; $num1 < 15 ; $num1++) $password_phpr = md5($password_phpr.substr($salt,0,(20 - $num1)));
} # fine if (C_VERSIONE_ATTUALE > 1.32)
else $password_phpr = md5($password_phpr);
} # fine if ($tipo_pass == "5")

# login effettuato con successo
if ($password == $password_phpr and $tipo_pass != "n") {
$id_utente = risul_query($utente,0,'idutenti');
$adesso = $anno.date("mdHis",(time() + (C_DIFF_ORE * 3600)));
$versione_unica = prendi_numero_versione($tableversioni);
list($usec, $sec) = explode(' ', microtime());
mt_srand((float) $sec + ((float) $usec * 100000));
$val_casuale = mt_rand(100000,999999);
$id_sessione = $adesso.$val_casuale.$versione_unica;
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
global $_SERVER,$REMOTE_ADDR,$REMOTE_PORT,$HTTP_USER_AGENT;
if ($_SERVER['REMOTE_ADDR']) $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
$REMOTE_ADDR = aggslashdb($REMOTE_ADDR);
if ($_SERVER['REMOTE_PORT']) $REMOTE_PORT = $_SERVER['REMOTE_PORT'];
$REMOTE_PORT = aggslashdb($REMOTE_PORT);
if ($_SERVER['HTTP_USER_AGENT']) $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
$HTTP_USER_AGENT = aggslashdb($HTTP_USER_AGENT);
if ($_SERVER['HTTPS'] == "on" or $_SERVER['SERVER_PORT'] == "443") $tipo_conn = "HTTPS";
else $tipo_conn = "HTTP";
if (C_VERSIONE_ATTUALE >= 2.1) esegui_query("insert into $tablesessioni (idsessioni,idutente,indirizzo_ip,tipo_conn,user_agent,ultimo_accesso) values ('$id_sessione','$id_utente','$REMOTE_ADDR','$tipo_conn','$HTTP_USER_AGENT','$ultimo_accesso')","",$id_utente);
else esegui_query("insert into $tablesessioni (idsessioni,idutente,indirizzo_ip,user_agent,ultimo_accesso) values ('$id_sessione','$id_utente','$REMOTE_ADDR','$HTTP_USER_AGENT','$ultimo_accesso')","",$id_utente);
} # fine if ($password == $password_phpr and $tipo_pass != "n")

else $login_fallito = "SI";
} # fine if (numlin_query($utente) == 1)
else $login_fallito = "SI";
if ($login_fallito == "SI") {
$mostra_form_login = "SI";
$messaggio_errore .= mex("Nome utente o password <div style=\"display: inline; color: red;\">errati</div>","funzioni.php").".<br>";
if ($login_sbagliati >= ($num_log_sbagliati - $num_log_avviso - 1)) {
if (($num_log_sbagliati - $login_sbagliati - 1) > 1) $messaggio_errore .= mex("Mancano solo","funzioni.php")." <span class=\"colred\"><b>".($num_log_sbagliati - $login_sbagliati - 1)."</b></span> ".mex("tentativi prima del blocco dei login","funzioni.php").".<br>";
if (($num_log_sbagliati - $login_sbagliati - 1) == 1) $messaggio_errore .= mex("Manca solo","funzioni.php")." <span class=\"colred\"><b>1</b></span> ".mex("tentativo prima del blocco dei login","funzioni.php").".<br>";
} # fine if (numlin_query($utente) == 1)
$messaggio_errore .= "<br>";
$versione_transazione = prendi_numero_versione($tableversioni);
$adesso = date("YmdHis",(time() + (C_DIFF_ORE * 3600)));
list($usec, $sec) = explode(' ', microtime());
mt_srand((float) $sec + ((float) $usec * 100000));
$val_casuale = mt_rand(100000,999999);
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
global $_SERVER,$REMOTE_ADDR;
if ($_SERVER['REMOTE_ADDR']) $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
$REMOTE_ADDR = aggslashdb($REMOTE_ADDR);
$id_transazione = $adesso.$val_casuale.$versione_transazione;
esegui_query("insert into $tabletransazioni (idtransazioni,tipo_transazione,dati_transazione1,dati_transazione2,ultimo_accesso) values ('$id_transazione','err_l','$nome_utente_phpr','$REMOTE_ADDR','$ultimo_accesso')");
} # fine if ($login_fallito == "SI")

} # fine else if ($login_sbagliati >= $num_log_sbagliati)
} # fine else if (numlin_query($ultimo_login_sbagliato) > 0)
unlock_tabelle($tabelle_lock);
} # fine if ($nome_utente and $password)
else $mostra_form_login = "SI";
} # fine if (!$id_sessione)

else {
if (!$numconnessione) {
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
} # fine if ($numconnessione)
$tableutenti = $PHPR_TAB_PRE."utenti";
$tablesessioni = $PHPR_TAB_PRE."sessioni";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tabelle_lock = array($tableutenti,$tablesessioni);
$altre_tab_lock = array($tablepersonalizza);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
$minuti_durata_sessione = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'minuti_durata_sessione' and idutente = '1'");
$minuti_durata_sessione = risul_query($minuti_durata_sessione,0,'valpersonalizza_num');
$limite_sessioni_vecchie = date("Y-m-d H:i:s",(time() - ($minuti_durata_sessione * 60) + (C_DIFF_ORE * 3600)));
esegui_query("delete from $tablesessioni where ultimo_accesso <= '$limite_sessioni_vecchie'");
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
global $_SERVER,$REMOTE_ADDR,$REMOTE_PORT,$HTTP_USER_AGENT;
if ($_SERVER['REMOTE_ADDR']) $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
$REMOTE_ADDR = aggslashdb($REMOTE_ADDR);
if ($_SERVER['REMOTE_PORT']) $REMOTE_PORT = $_SERVER['REMOTE_PORT'];
$REMOTE_PORT = aggslashdb($REMOTE_PORT);
if ($_SERVER['HTTP_USER_AGENT']) $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
$HTTP_USER_AGENT = aggslashdb($HTTP_USER_AGENT);
$sessione = esegui_query("select * from $tablesessioni where idsessioni = '$id_sessione'");
if (numlin_query($sessione) == 1) {
$indirizzo_ip = risul_query($sessione,0,'indirizzo_ip');
$tipo_conn = @risul_query($sessione,0,'tipo_conn');
$user_agent = risul_query($sessione,0,'user_agent');
if (($indirizzo_ip == $REMOTE_ADDR and $user_agent == $HTTP_USER_AGENT) or ($tipo_conn == "HTTPS" and ($_SERVER['HTTPS'] == "on" or $_SERVER['SERVER_PORT'] == "443"))) {
$id_utente_presunto = risul_query($sessione,0,'idutente');
$utente_presente = esegui_query("select nome_utente from $tableutenti where idutenti = '$id_utente_presunto'");
if (numlin_query($utente_presente) == 1) {
$nome_utente_login = risul_query($utente_presente,0,'nome_utente');
$id_utente = $id_utente_presunto;
esegui_query("update $tablesessioni set ultimo_accesso = '$ultimo_accesso' where idsessioni = '$id_sessione'");
} # fine if (numlin_query($utente_presente) == 1)
else $sessione_scaduta = "SI";
} # fine if (($indirizzo_ip == $REMOTE_ADDR and $user_agent == $HTTP_USER_AGENT) or...
else $sessione_scaduta = "SI";
} # fine if (numlin_query($sessione) == 1)
else $sessione_scaduta = "SI";
unlock_tabelle($tabelle_lock);
if ($sessione_scaduta == "SI") {
$mostra_form_login = "SI";
$messaggio_errore .= "".mex("Sessione <div style=\"display: inline; color: red;\">scaduta</div>","funzioni.php").".<br><br>";
} # fine if ($sessione_scaduta == "SI")
} # fine else if (!$id_sessione)

if ($messaggio_errore or $mostra_form_login == "SI") {
if ($pag == "aggiorna.php") $action = "aggiorna.php";
else {
if ((@is_array($_POST) or @is_array($_GET)) and $pag) {
$action = $pag;
if (@is_array($_POST)) {
reset($_POST);
for ($num1 = 0 ; $num1 < count($_POST); $num1++) {
$key = key($_POST);
if ($key != "id_sessione" and $key != "nome_utente_phpr" and $key != "password_phpr" and $key != "pass_cc" and $key != "logout") $input_var_passate .= "<input type=\"hidden\" name=\"$key\" value=\"".htmlspecialchars(strip_magic_slashs(current($_POST)))."\">";
next($_POST);
} # fine for $num1
} # fine if (@is_array($_POST))
if (@is_array($_GET)) {
reset($_GET);
for ($num1 = 0 ; $num1 < count($_GET); $num1++) {
$key = key($_GET);
if ($key != "id_sessione" and $key != "nome_utente_phpr" and $key != "password_phpr" and $key != "pass_cc" and $key != "logout") $input_var_passate .= "<input type=\"hidden\" name=\"$key\" value=\"".htmlspecialchars(strip_magic_slashs(current($_GET)))."\">";
next($_GET);
} # fine for $num1
} # fine if (@is_array($_GET))
} # fine if ((@is_array($_POST) or @is_array($_GET)) and $pag)
else $action = "inizio.php";
} # fine else if ($pag == "aggiorna.php")
$pag = "login";
if (C_NASCONDI_MARCA == "SI") $titolo = "Login";
else $titolo = mex("Login per HotelDruid","funzioni.php");
$show_bar = "NO";
$tema_corr = $tema[1];
if ($tema[1] and $tema[1] != "base" and @is_dir("./themes/".$tema[1]."/php")) include("./themes/".$tema[1]."/php/head.php");
else include("./includes/head.php");
if (!defined('C_URL_LOGO') or C_URL_LOGO == "") echo "<div id=\"flogin\">";
else echo "<div style=\"background: url(".C_URL_LOGO.") no-repeat right top; padding: 5px; line-height: 1.6;\">";
echo $messaggio_errore;
} # fine if ($messaggio_errore or $mostra_form_login == "SI")
if ($mostra_form_login == "SI") {
if (@is_file(C_DATI_PATH."/dati_subordinazione.php")) include(C_DATI_PATH."/dati_subordinazione.php");
if (defined("C_HTML_PRE_LOGIN") and C_HTML_PRE_LOGIN != "") echo C_HTML_PRE_LOGIN;
$mess = $titolo;
if ($commento_subordinazione) $mess .= " ($commento_subordinazione)";
echo "<big><big>$mess:</big></big><br><div style=\"height: 6px\"></div>
<form accept-charset=\"utf-8\" method=\"post\" action=\"$action\"><div>
<input type=\"hidden\" name=\"vers_hinc\" value=\"1\">
$input_var_passate
".mex("Nome utente","funzioni.php").": <input type=\"text\" name=\"nome_utente_phpr\" size=\"12\"><br>
".mex("Password","funzioni.php").": <input type=\"password\" name=\"password_phpr\" size=\"12\" autocorrect=\"off\" autocapitalize=\"off\"><br>
<table><tr><td style=\"height: 2px;\"></td></tr></table>
<button class=\"login\" type=\"submit\"><div>".mex("Entra","funzioni.php")."</div></button>
</div></form>";
if (defined("C_HTML_POST_LOGIN") and C_HTML_POST_LOGIN != "") echo C_HTML_POST_LOGIN;
} # fine if ($mostra_form_login == "SI")
if ($messaggio_errore or $mostra_form_login == "SI") {

# You are not authorized to remove the following copyright notice. Ask for permission info@digitaldruid.net
if (C_MOSTRA_COPYRIGHT != "NO") {
echo "<div style=\"position: absolute; bottom: 3%; right: 1%; background: #ffffff; color: #000000; font-size: 11px;\">
&nbsp;Website <a style=\"color: #000000;\" href=\"./mostra_sorgente.php\">engine code</a> is copyright © by DigitalDruid.Net.
<a style=\"color: #000000;\" href=\"http://www.hoteldruid.com\">HotelDruid</a> is a free software released under the GNU/AGPL.</div>";
} # fine if (C_MOSTRA_COPYRIGHT != "NO")
echo "<div>";

if ($tema[1] and $tema[1] != "base" and @is_dir("./themes/".$tema[1]."/php")) include("./themes/".$tema[1]."/php/foot.php");
else include("./includes/foot.php");
} # fine if ($messaggio_errore or $mostra_form_login == "SI")

if ($id_utente and ($lingua[$id_utente] == "ita" or @is_dir("./includes/lang/".$lingua[$id_utente]))) $lingua_mex = $lingua[$id_utente];
} # fine else if (!is_file(C_DATI_PATH."/abilita_login"))


if ($id_utente and $tema[$id_utente] != "base" and (!$tema[$id_utente] or !@is_dir("./themes/".$tema[$id_utente]."/php"))) $tema[$id_utente] = "base";

if (C_VERSIONE_ATTUALE < C_PHPR_VERSIONE_NUM and $id_utente and $pag != "aggiorna.php") {
if (@is_file(C_DATI_PATH."/dati_connessione.php") or @is_file("./dati/connessione_db.php") or @is_file("./datipermanenti/connessione_db.inc")) {
if ($pag == "interconnessioni.php" and $id_utente != 1) {
$id_utente_az = esegui_query("select idlocale from $PHPR_TAB_PRE"."interconnessioni where tipoid = 'id_utente_az' ");
if (numlin_query($id_utente_az) == 1) $id_utente_azione_ic = risul_query($id_utente_az,0,'idlocale');
} # fine if ($pag == "interconnessioni.php" and $id_utente != 1)
if ($id_utente == $id_utente_azione_ic) {
include("./includes/funzioni_aggiorna.php");
aggiorna_versione_phpr($numconnessione,$id_utente,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
} # fine if ($id_utente == $id_utente_azione_ic) 
else {
$show_bar = "NO";
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");
echo mex("Il database deve essere aggiornato","funzioni.php").".<br>";
echo "<form method=\"post\" action=\"aggiorna.php\"><div>
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input class=\"sbutton\" type=\"submit\" value=\"".mex("Aggiorna","funzioni.php")."\">
</div></form>";
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");
} # fine else if ($id_utente == $id_utente_azione_ic) 
unset($id_utente);
} # fine if (@is_file(C_DATI_PATH."/dati_connessione.php") or...
} # fine if (C_VERSIONE_ATTUALE < C_PHPR_VERSIONE_NUM and...


return $id_utente;

} # fine if (!$disattivato)

} # fine function controlla_login



function scrivi_file ($linee,$nome_file) {

$scrittura_corretta = "SI";
if ($fileaperto = fopen("$nome_file.tmp","w+")) {
flock($fileaperto,2);
if (!@is_array($linee)) {
$linee2 = $linee;
unset($linee);
$linee[0] = $linee2;
unset($linee2);
} # fine if (!@is_array($linee))
for ($num1 = 0 ; $num1 < count($linee) ; $num1++) fwrite($fileaperto,$linee[$num1]);
flock($fileaperto,3);
fclose($fileaperto);
$linee2 = @file("$nome_file.tmp");
$num_linee2 = 0;
$ultima_linea = "";
for ($num1 = 0 ; $num1 < count($linee) ; $num1++) {
$linee[$num1] = str_replace("\r\n","\n",$linee[$num1]);
$linee[$num1] = str_replace("
","\n",$linee[$num1]);
$sub_linee = explode("\n",$linee[$num1]);
for ($num2 = 0 ; $num2 < count($sub_linee) ; $num2++) {
if ($num2 == 0)  $sub_linee[$num2] = $ultima_linea.$sub_linee[$num2];
if ($num2 != (count($sub_linee)-1)) {
if (togli_acapo($linee2[$num_linee2]) != $sub_linee[$num2]) $scrittura_corretta = "NO";
$num_linee2++;
} # fine if ($num2 != (count($sub_linee)-1))
else $ultima_linea = $sub_linee[$num2];
} # fine for $num2
} # fine for $num1
if (togli_acapo($linee2[$num_linee2]) != $ultima_linea) $scrittura_corretta = "NO";
if ($scrittura_corretta != "NO") {
@unlink("$nome_file");
if (!rename("$nome_file.tmp","$nome_file")) $scrittura_corretta = "NO";
} # fine if ($scrittura_corretta != "NO")
} # fine if ($fileaperto = fopen("$nome_file.tmp","w+"))
else $scrittura_corretta = "NO";
if ($scrittura_corretta == "NO") {
@unlink("$nome_file.tmp");
echo mex("<div style=\"display: inline; color: red;\">ERRORE</div> di scrittura del file","funzioni.php")." $nome_file.<br>";
} # fine if ($scrittura_corretta == "NO")

return $scrittura_corretta;

} # fine function scrivi_file



function crea_lock_file ($nome_file) {

$filelock = fopen("$nome_file.lock","w+");
flock($filelock,2);

return $filelock;

} # fine function crea_lock_file



function distruggi_lock_file ($filelock,$nome_file) {

flock($filelock,3);
fclose($filelock);
@unlink("$nome_file.lock");

} # fine function distruggi_lock_file



function elimina_caratteri_slash ($var) {

$var = str_replace ("'","",$var);
$var = str_replace ("\\","",$var);
$var = str_replace ("\"","",$var);

return $var;

} # fine function elimina_caratteri_slash



function recupera_dati_transazione ($id_transazione,$id_sessione,$anno,$lock_tabletransazioni,&$tipo_transazione,$minuti_durata_sessione="",$cond_sessione="SI",$cond_tipo="NO",$transazioni="transazioni") {

global $PHPR_TAB_PRE;
$tabletransazioni = $PHPR_TAB_PRE.$transazioni;
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";

$tipo_transazione = "";
if ($id_transazione) {
$tabelle_lock = array($tabletransazioni);
if (!$minuti_durata_sessione) $altre_tab_lock = array($tablepersonalizza);
else $altre_tab_lock = array();
if ($lock_tabletransazioni == "SI") $tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);
if (!$minuti_durata_sessione) {
$minuti_durata_sessione = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'minuti_durata_sessione' and idutente = '1'");
$minuti_durata_sessione = risul_query($minuti_durata_sessione,0,'valpersonalizza_num');
} # fine if (!$minuti_durata_sessione)
$limite_transazioni_vecchie = date("Y-m-d H:i:s",(time() - ($minuti_durata_sessione * 60) + (C_DIFF_ORE * 3600)));
if ($cond_tipo != "NO") $cond_tipo = " and tipo_transazione = '$cond_tipo'";
else $cond_tipo = "";
esegui_query("delete from $tabletransazioni where ultimo_accesso <= '$limite_transazioni_vecchie' $cond_tipo");
$id_transazione = aggslashdb($id_transazione);
if ($cond_sessione == "SI") $cond_sessione = " and idsessione = '$id_sessione'";
else $cond_sessione = "";
$dati_transazione = esegui_query("select * from $tabletransazioni where idtransazioni = '$id_transazione' $cond_sessione");
if (numlin_query($dati_transazione) == 1) {
if ($anno == risul_query($dati_transazione,0,'anno')) {
$tipo_transazione = risul_query($dati_transazione,0,'tipo_transazione');
$ultimo_accesso = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
esegui_query("update $tabletransazioni set ultimo_accesso = '$ultimo_accesso' where idtransazioni = '$id_transazione' $cond_sessione");
} # fine if ($anno == risul_query($dati_transazione,0,'anno'))
} # fine if (numlin_query($dati_transazione) == 1)
if ($lock_tabletransazioni == "SI") unlock_tabelle($tabelle_lock);
} # fine if ($id_transazione)

return $dati_transazione;

} # fine function recupera_dati_transazione



# Function che calcola l'id del periodo corrente per le prenotazioni già iniziate ==> fisse
function calcola_id_periodo_corrente ($anno,$anticipare="SI") {

global $id_utente;
global $PHPR_TAB_PRE;
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
if ($anticipare == "SI") {
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
if ($id_utente == "") $id_utente_anticipa_ore = 1;
else $id_utente_anticipa_ore = $id_utente;
$ore_anticipa_periodo_corrente = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'ore_anticipa_periodo_corrente' and idutente = '$id_utente_anticipa_ore'");
$ore_anticipa_periodo_corrente = risul_query($ore_anticipa_periodo_corrente,0,'valpersonalizza_num');
} # fine if ($anticipare == "SI")
else $ore_anticipa_periodo_corrente = 0;
$oggi = date("Y-m-d",(time() + ($ore_anticipa_periodo_corrente * 3600) + (C_DIFF_ORE * 3600)));
$idperiodocorrente = esegui_query("select idperiodi from $tableperiodi where datainizio <= '$oggi' and datafine >= '$oggi' ");
$numidperiodocorrente = numlin_query($idperiodocorrente);
if ($numidperiodocorrente >= 1) {
$num_risposta = 0;
if ($numidperiodocorrente == 2) $num_risposta = 1;
$idperiodocorrente = risul_query($idperiodocorrente,$num_risposta,'idperiodi');
} # fine if ($numidperiodocorrente >= 1)
else {
$annocorrente = date("Y",(time() + (C_DIFF_ORE * 3600)));
if ($anno < $annocorrente) $idperiodocorrente = 100000;
if ($anno >= $annocorrente) $idperiodocorrente = -1;
} # fine else if ($numidperiodocorrente >= 1)

return $idperiodocorrente;

} # fine function calcola_id_periodo_corrente



function mostra_menu_date ($file,$name_date_var,$date_selected,$show_blank_option,$blank_selected,$id_utente,$tema,$standalone_dates_menu="",$second_date_selected="",$js="") {

global $last_dates_menu,$hide_default_dates,$y_ini_menu,$m_ini_menu,$d_ini_menu,$n_dates_menu,$d_increment,$d_names,$m_names,$dates_options_list,$current_dates_menu,$mos_tut_dat,$modifica_pers,$partial_dates;

if ($last_dates_menu != $file) {
$y_ini_menu = "";
$m_ini_menu = "";
$d_ini_menu = "";
$n_dates_menu = "";
$d_increment = "";
$partial_dates = 0;
if (!$standalone_dates_menu) $current_dates_menu = 1;
else $current_dates_menu = 0;
if (substr($file,0,(strlen(C_DATI_PATH) + 15)) == C_DATI_PATH."/selperiodimenu" and $mos_tut_dat == "SI" and $modifica_pers != "NO") include(C_DATI_PATH."/selectperiodi".substr($file,(strlen(C_DATI_PATH) + 15)));
else include("$file");
} # fine if ($last_dates_menu != $file)
else if (!$standalone_dates_menu) $current_dates_menu++;

if ($blank_selected) $date_selected = "";
$num_periodi_date = count($d_increment);
if (($num_periodi_date > 1 or $d_increment[0] > 1) and $date_selected) {
for ($num1 = 0 ; $num1 < $num_periodi_date ; $num1++) {
for ($num2 = 0 ; $num2 < $n_dates_menu[$num1] ; $num2++) {
$data_corr = date("Y-m-d",mktime(0,0,0,($m_ini_menu[$num1] + 1),($d_ini_menu[$num1] + ($num2 * $d_increment[$num1])),$y_ini_menu[$num1]));
if ($data_corr == $date_selected) break;
if ((int) str_replace("-","",$data_corr) > (int) str_replace("-","",$date_selected)) {
if (floor($current_dates_menu / 2) == (($current_dates_menu - 1) / 2)) $date_selected = $data_prec;
else $date_selected = $data_corr;
break;
} # fine if ((int) str_replace("-","",$data_corr) > (int) str_replace("-","",$date_selected))
$data_prec = $data_corr;
} # fine for $num2
if ($data_corr == $date_selected or $data_prec == $date_selected) break;
} # fine for $num1
} # fine if (($num_periodi_date > 1 or $d_increment[0] > 1) and $date_selected)

if ($tema[$id_utente] != "base") include("./themes/".$tema[$id_utente]."/php/selectperiod.php");

if (!$hide_default_dates) {
if (!$js) $out = "<select name=\"$name_date_var\">";
else $out = "<select name=\"'+$name_date_var+'\">";
if ($show_blank_option) $out .= "<option value=\"\"$blank_selected>----</option>";
$out .= str_replace("value=\"$date_selected\">","value=\"$date_selected\" selected>",$dates_options_list);
$out .= "</select>";
if (!$js) echo $out;
else echo "$js += '".str_replace("\n","\\\n",$out)."';
";
} # fine if (!$hide_default_dates)
else unset($dates_options_list);

if (substr($file,0,(strlen(C_DATI_PATH) + 15)) == C_DATI_PATH."/selperiodimenu" and floor($current_dates_menu / 2) != (($current_dates_menu - 1) / 2) and $mos_tut_dat != "SI" and $modifica_pers != "NO" and $partial_dates) {
if (@is_array($_POST)) reset($_POST);
for($num1 = 0 ; $num1 < count($_POST); $num1++) {
if (key($_POST) != "mos_tut_dat" and substr(key($_POST),0,8) != "modifica") $lista_var .= "&amp;".htmlspecialchars(key($_POST))."=".htmlspecialchars(strip_magic_slashs($_POST[key($_POST)]));
next($_POST);
} # fine for $num1
if (@is_array($_GET)) reset($_GET);
for($num1 = 0 ; $num1 < count($_GET); $num1++) {
if (key($_GET) != "mos_tut_dat" and substr(key($_GET),0,8) != "modifica") $lista_var .= "&amp;".htmlspecialchars(key($_GET))."=".htmlspecialchars(strip_magic_slashs($_GET[key($_GET)]));
next($_GET);
} # fine for $num1
if ($lista_var) {
$lista_var = "?mos_tut_dat=SI".$lista_var;
$out = "<a href=\"$pag$lista_var\" style=\"text-decoration: none;\" title=\"".mex("mostra tutte le date","inizio.php")."\"><b style=\"font-weight: normal; color: #666666;\">&prime;</b></a>";
if (!$js) echo $out;
else echo "$js += '".str_replace("\n","\\\n",$out)."';
";
} # fine if ($lista_var)
} # fine if (substr($file,0,(strlen(C_DATI_PATH) + 15)) == C_DATI_PATH."/selperiodimenu" and floor($current_dates_menu / 2) != (($current_dates_menu - 1) / 2) and...

$last_dates_menu = $file;

} # fine function mostra_menu_date



function allunga_tempo_limite ($n_lim="") {

if (function_exists('set_time_limit')) {
if (!strcmp($n_lim,"")) $n_lim = 420;
$lim_att = 30;
if (function_exists('ini_get')) $lim_att = ini_get('max_execution_time');
if ($lim_att < $n_lim) set_time_limit($n_lim);
} # fine if (function_exists('set_time_limit')

} # fine function allunga_tempo_limite



function http_keep_alive ($car=" ") {

echo $car;
flush();
if (function_exists('ob_flush')) ob_flush();

} # fine function http_keep_alive



/*
function aggiorna_interconnessioni ($nome_funz1,$nome_funz2,$anno,$PHPR_TAB_PRE,$lock) {

$file_interconnessioni = C_DATI_PATH."/dati_interconnessioni.php";
if (@is_file($file_interconnessioni)) {
include($file_interconnessioni);
if (@is_array($ic_present)) {
$interconn_dir = opendir("./includes/interconnect/");
while ($mod_ext = readdir($interconn_dir)) {
if ($mod_ext != "." and $mod_ext != ".." and @is_dir("./includes/interconnect/$mod_ext")) {
include("./includes/interconnect/$mod_ext/name.php");
if ($ic_present[$interconnection_name] == "SI") {
$funz_agg_interconn = $nome_funz1.$interconnection_name;
if (!function_exists($funz_agg_interconn)) include("./includes/interconnect/$mod_ext/functions.php");
$funz_agg_interconn($file_interconnessioni,$anno,$PHPR_TAB_PRE,$lock);
if ($nome_funz2) {
$funz_agg_interconn = $nome_funz2.$interconnection_name;
$funz_agg_interconn($file_interconnessioni,$anno,$PHPR_TAB_PRE,$lock);
} # fine if ($nome_funz2)
} # fine if ($ic_present[$interconnection_name] == "SI")
} # fine if ($modello_ext != "." and $modello_ext != ".." and...
} # fine while ($mod_ext = readdir($interconn_dir))
closedir($interconn_dir);
} # fine if (@is_array($ic_present))
} # fine if (@is_file($file_interconnessioni))

} # fine function aggiorna_interconnessioni
*/




###########################################
###  FINE ./includes/funzioni.php 
###########################################

###########################################
###  INIZIO ./dati/versione.php 
###########################################
define(C_VERSIONE_ATTUALE,2.14);
define(C_DIFF_ORE,0);

###########################################
###  FINE ./dati/versione.php 
###########################################

###########################################
###  INIZIO ./includes/liberasettimane.php 
###########################################

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2014 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################



$debug = "off";
$sec_limite_libsett = "";
#apd_set_pprof_trace();
#if (function_exists('ini_set')) @ini_set('xdebug.max_nesting_level',1000000);


# Function per passare dalla tabella prenota alle variabili
function tab_a_var (&$limiti_var,&$app_prenota_id,&$app_orig_prenota_id,&$inizio_prenota_id,&$fine_prenota_id,&$app_assegnabili_id,&$prenota_in_app_sett,$anno,&$dati_app,$profondita,$nome_tab_prenota = "prenota") {
global $PHPR_TAB_PRE,$sec_limite_libsett,$debug;
$tableprenota = $nome_tab_prenota . $anno . $profondita['iniziale'];
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";

if (!$limiti_var['idperiodocorrente']) $limiti_var['idperiodocorrente'] = calcola_id_periodo_corrente($anno);
if (!$limiti_var['tutti_fissi']) {
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$prenota_tutte_fisse = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'tutti_fissi' and idutente = '1'");
$limiti_var['tutti_fissi'] = risul_query($prenota_tutte_fisse,0,'valpersonalizza');
if ($limiti_var['tutti_fissi'] != "SI") {
if (defined("C_SEC_LIMITE_LIBERA_APP") and C_SEC_LIMITE_LIBERA_APP != "") $sec_limite_libsett = C_SEC_LIMITE_LIBERA_APP;
else $sec_limite_libsett = $limiti_var['tutti_fissi'];
$limiti_var['t_limite'] = (time() + $sec_limite_libsett);
} # fine if ($limiti_var['tutti_fissi'] != "SI")
} # fine if (!$limiti_var['tutti_fissi'])
if (!$limiti_var['lim_prenota_temp']) {
$minuti_durata_insprenota = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'minuti_durata_insprenota' and idutente = '1'");
$minuti_durata_insprenota = risul_query($minuti_durata_insprenota,0,'valpersonalizza_num');
$limiti_var['lim_prenota_temp'] = date("Y-m-d H:i:s",(time() + (C_DIFF_ORE * 3600) - ($minuti_durata_insprenota * 60)));
} # fine if (!$limiti_var['lim_prenota_temp'])

# metto i dati della tabella appartamenti in $dati_app
if (!$dati_app) {
$idapp = esegui_query("select idappartamenti,maxoccupanti,app_vicini from $tableappartamenti order by priorita");
$numappartamenti = numlin_query($idapp);
for ($num1 = 0 ; $num1 < $numappartamenti ; $num1++) {
$numapp = risul_query($idapp,$num1,'idappartamenti');
$maxocc = risul_query($idapp,$num1,'maxoccupanti');
$dati_app['posizione'][$num1] = $numapp;
$dati_app['maxocc'][$numapp] = $maxocc;
$dati_app['vicini'][$numapp] = risul_query($idapp,$num1,'app_vicini');
if ($dati_app['vicini'][$numapp]) $dati_app['vicini'][$numapp] .= ",$numapp";
else $dati_app['vicini'][$numapp] = "$numapp";
} # fine for $num1
asort ($dati_app['maxocc']);
reset ($dati_app['maxocc']);
$dati_app['minocc'] = current($dati_app['maxocc']);
$lista_tutti_app = ",";
while (list($key, $val) = each($dati_app['posizione'])) $lista_tutti_app .= "$val,";
$dati_app['lista'] = $lista_tutti_app;
$dati_app['totapp'] = $numappartamenti;
} # fine if (!$dati_app)

if ((string) $limiti_var['ini'] == "") $limiti_var['ini'] = ($limiti_var['n_fine'] + 1);
if ((string) $limiti_var['fine'] == "") $limiti_var['fine'] = ($limiti_var['n_ini'] - 1);
for ($num_rip = 0 ; $num_rip < 2 ; $num_rip++) {
if ($num_rip) {
if ($lista_comp) {
$lista_comp = explode(",",substr($lista_comp,1));
$num_lista_comp = count($lista_comp);
for ($num1 = 0 ; $num1 < $num_lista_comp ; $num1++) {
if (!$app_prenota_id[$lista_comp[$num1]]) {
$query_comp .= "idprenota = '".$lista_comp[$num1]."' or ";
} # fine if (!$app_prenota_id[$lista_comp[$num1]])
} # fine for $num1
$query_comp = substr($query_comp,0,-3);
} # fine if ($lista_comp)
if ($query_comp) $prenota_in_var = esegui_query("select idprenota,idclienti,idappartamenti,iddatainizio,iddatafine,assegnazioneapp,app_assegnabili,num_persone,idprenota_compagna,checkin,datainserimento from $tableprenota where $query_comp ");
else break;
} # fine if ($num_rip)
else $prenota_in_var = esegui_query("select idprenota,idclienti,idappartamenti,iddatainizio,iddatafine,assegnazioneapp,app_assegnabili,num_persone,idprenota_compagna,checkin,datainserimento from $tableprenota where (iddatainizio < '".$limiti_var[ini]."' and iddatafine >= '".$limiti_var[n_ini]."') or (iddatainizio <= '".$limiti_var[n_fine]."' and iddatafine > '".$limiti_var[fine]."')");
$num_prenota_in_var = numlin_query($prenota_in_var);
for ($num1 = 0 ; $num1 < $num_prenota_in_var ; $num1++) {
$ins_prenota = 1;
if (risul_query($prenota_in_var,$num1,'idclienti') == "0") {
if ($limiti_var['lim_prenota_temp'] > risul_query($prenota_in_var,$num1,'datainserimento')) $ins_prenota = 0;
} # fine if (risul_query($prenota_in_var,$num1,'idclienti') == "0")
$idprenota = risul_query($prenota_in_var,$num1,'idprenota');
if (!$app_prenota_id[$idprenota] and $ins_prenota) {
$app_prenota = risul_query($prenota_in_var,$num1,'idappartamenti');
if (strstr($dati_app['lista'],",".$app_prenota.",")) {
$app_prenota_id[$idprenota] = $app_prenota;
$app_orig_prenota_id[$idprenota] = $app_prenota_id[$idprenota];
$inizio_prenota_id[$idprenota] = risul_query($prenota_in_var,$num1,'iddatainizio');
$fine_prenota_id[$idprenota] = risul_query($prenota_in_var,$num1,'iddatafine');
$app_assegnabili_id[0][$idprenota] = risul_query($prenota_in_var,$num1,'idprenota_compagna');
if ($app_assegnabili_id[0][$idprenota]) $lista_comp .= ",".$app_assegnabili_id[0][$idprenota];
for ($num2 = $inizio_prenota_id[$idprenota] ; $num2 <= $fine_prenota_id[$idprenota] ; $num2++) {
$prenota_in_app_sett[$app_prenota_id[$idprenota]][$num2] = $idprenota;
} # fine for $num2
$assegnazione_app = risul_query($prenota_in_var,$num1,'assegnazioneapp');
$checkin = risul_query($prenota_in_var,$num1,'checkin');
if ($inizio_prenota_id[$idprenota] > $limiti_var['idperiodocorrente'] and $assegnazione_app != "k" and $limiti_var['tutti_fissi'] != "SI" and !$checkin) {
$num_persone = risul_query($prenota_in_var,$num1,'num_persone');
$app_assegnabili = risul_query($prenota_in_var,$num1,'app_assegnabili');
if (!$num_persone or $num_persone <= $dati_app['minocc']) {
if ($assegnazione_app == "v") $app_assegnabili_id[$idprenota] = "v";
if ($assegnazione_app == "c") $app_assegnabili_id[$idprenota] = $app_assegnabili;
} # fine if (!$num_persone or $num_persone <= $dati_app['minocc'])
else {
if ($assegnazione_app == "v") $lista_app = $dati_app['lista'];
if ($assegnazione_app == "c") $lista_app = ",".$app_assegnabili.",";
$app_in_lista = explode (",", $lista_app);
$num_app_in_lista = count($app_in_lista) - 1;
for ($num2 = 1 ; $num2 < $num_app_in_lista ; $num2++) {
if ($dati_app['maxocc'][$app_in_lista[$num2]] and $dati_app['maxocc'][$app_in_lista[$num2]] < $num_persone) {
$lista_app = str_replace(",".$app_in_lista[$num2].",",",",$lista_app);
} # fine if ($dati_app['maxocc'][$app_in_lista[$num2]] and $dati_app['maxocc'][$app_in_lista[$num2]] < $num_persone)
} # fine for $num2
$lista_app = substr($lista_app,1,-1);
$app_assegnabili_id[$idprenota] = $lista_app;
} # fine else if (!$num_persone or $num_persone <= $dati_app[minocc])
} # fine if ($inizio_prenota_id[$idprenota] > $limiti_var['idperiodocorrente'] and $assegnazione_app != "k" and...
if ($debug == "on") echo "Aggiunta prenota $idprenota dal ".$inizio_prenota_id[$idprenota]." al ".$fine_prenota_id[$idprenota]." in ".$app_prenota_id[$idprenota]." assegnabile in ".$app_assegnabili_id[$idprenota]."<br>";
} # fine if (strstr($dati_app['lista'],",".$app_prenota.","))
} # fine if (!$app_prenota_id[$idprenota] and $ins_prenota)
} # fine for $num1
} # fine for $num_rip
if ($limiti_var['n_ini'] < $limiti_var['ini']) $limiti_var['ini'] = $limiti_var['n_ini'];
if ($limiti_var['n_fine'] > $limiti_var['fine']) $limiti_var['fine'] = $limiti_var['n_fine'];

} # fine function tab_a_var




# Function per trovare tutte le prenotazioni in un appartamento in un certo periodo
function prenota_in_app_e_periodo (&$app,&$ini_periodo,&$fine_periodo,&$prenota_in_app_sett,&$fine_prenota_id,&$num_pp) {
$num_pp = 0;
for ($num1 = $ini_periodo ; $num1 <= $fine_periodo ; $num1++) {
if ($prenota_in_app_sett[$app][$num1]) {
$num_pp++;
$prenota_presente[$num_pp] = $prenota_in_app_sett[$app][$num1];
$num1 = $fine_prenota_id[$prenota_in_app_sett[$app][$num1]];
} # fine if ($prenota_in_app_sett[$app][$num1])
} # fine for $num1
return $prenota_presente;
} # fine function prenota_in_app_e_periodo




function inserisci_prenota_fittizie ($info_periodi,&$profondita,&$app_prenota_id,&$inizio_prenota_id,&$fine_prenota_id,&$prenota_in_app_sett,&$app_assegnabili_id) {
for ($num1 = 0 ; $num1 < $info_periodi['numero'] ; $num1++) {
$id_app_periodo = $info_periodi['app'][$num1];
$idinizio_periodo = $info_periodi['ini'][$num1];
$idfine_periodo = $info_periodi['fine'][$num1];
$idinizio_prenota_falsa = $idinizio_periodo;
$prenota_falsa_da_inserire = "NO";
for ($num2 = $idinizio_periodo ; $num2 <= ($idfine_periodo + 1) ; $num2++) {
$prenota_presente = prenota_in_app_e_periodo($id_app_periodo,$num2,$num2,$prenota_in_app_sett,$fine_prenota_id,$num_pp);
if ($num_pp or $num2 == ($idfine_periodo + 1)) {
if ($prenota_falsa_da_inserire == "SI") {
$profondita['tot_prenota_attuale']++;
$app_prenota_id[$profondita['tot_prenota_attuale']] = $id_app_periodo;
$inizio_prenota_id[$profondita['tot_prenota_attuale']] = $idinizio_prenota_falsa;
$fine_prenota_id[$profondita['tot_prenota_attuale']] = $idfine_prenota_falsa;
for ($num3 = $idinizio_prenota_falsa ; $num3 <= $idfine_prenota_falsa ; $num3++) {
$prenota_in_app_sett[$id_app_periodo][$num3] = $profondita['tot_prenota_attuale'];
} # fine for $num3
} # fine if ($prenota_falsa_da_inserire == "SI")
$prenota_falsa_da_inserire = "NO";
$idinizio_prenota_falsa = $num2 + 1;
if ($num2 != ($idfine_periodo + 1)) {
reset($prenota_presente);
for ($num3 = 1 ; $num3 <= $num_pp ; $num3++) $app_assegnabili_id[$prenota_presente[$num3]] = "";
} # fine if ($num2 != ($idfine_periodo + 1))
} # fine if ($num_pp or $num2 == ($idfine_periodo + 1))
else {
$prenota_falsa_da_inserire = "SI";
$idfine_prenota_falsa = $num2;
} # fine else if ($num_pp or $num2 == ($idfine_periodo + 1))
} # fine for $num2
} # fine for $num1
} # fine function inserisci_prenota_fittizie




function incrocia_app_richiesti ($lista_app1,$lista_app2) {
if ((string) $lista_app1 != "" and (string) $lista_app2 != "") {
if ($lista_app1 == ",tutti,") $lista_app = $lista_app2;
if ($lista_app2 == ",tutti,") $lista_app = $lista_app1;
if ($lista_app1 != ",tutti," and $lista_app2 != ",tutti,") {
$lista_app1 = explode(",",$lista_app1);
$num_la1 = count($lista_app1);
for ($num1 = 0 ; $num1 < $num_la1 ; $num1++) {
if (str_replace(",".$lista_app1[$num1].",","",",".$lista_app2.",") != ",".$lista_app2.",") $lista_app .= $lista_app1[$num1].",";
} # fine for $num1
$lista_app = substr($lista_app,0,-1);
} # fine ($lista_app1 != ",tutti," and $lista_app2 != ",tutti,")
} # fine ((string) $lista_app1 != "" and (string) $lista_app2 != "")
return $lista_app;
} # fine function incrocia_app_richiesti




if (!function_exists('array_keys')) {
function array_keys($arr,$term="") {
$t = array();
while (list($k,$v) = each($arr)) {
if ($term && $v != $term) continue;
$t[] = $k;
} # fine while (list($k,$v) = each($arr))
return $t;
} # fine function array_keys
} # fine if (!function_exists('array_keys'))




function aggiorna_tableprenota ($app_prenota_id,$app_orig_prenota_id,$nome_tableprenota) {
$fatto = 1;
if (@is_array($app_orig_prenota_id)) {
reset($app_orig_prenota_id);
while (list($idprenota, $app_prenota) = each($app_orig_prenota_id)) if (!strcmp($app_prenota_id[$idprenota],"")) $fatto = 0;
if ($fatto) {
reset($app_orig_prenota_id);
while (list($idprenota, $app_prenota) = each($app_orig_prenota_id)) {
if ($app_prenota_id[$idprenota] != $app_prenota) {
esegui_query("update $nome_tableprenota set idappartamenti = '".aggslashdb($app_prenota_id[$idprenota])."' where idprenota = '$idprenota'");
#$adesso = date("Y-M-d H:i:s",(time() + (C_DIFF_ORE * 3600)));
#esegui_query("update $tableprenota set data_modifica = '$adesso' where idprenota = '$idprenota'");
} # fine if ($app_prenota_id[$idprenota] != $app_prenota)
} # fine while (list($key, $val) = each($app_orig_prenota_id))
} # fine if ($fatto)
else echo "<span class=\"colred\">ERROR in assignment engine: please report this bug to <a href=\"mailto:info@digitaldruid.net\">info@digitaldruid.net</a></span><br>";
} # fine if (@is_array($app_orig_prenota_id))
return $fatto;
} # fine function aggiorna_tableprenota




# function che controlla che gli app. richiesti non siano tutti occupati
function controlla_tutti_occupati ($idinizio,$idfine,$app_richiesti,&$prenota_in_app_sett,&$app_prenota_id,&$app_assegnabili_id,&$dati_app,&$fine_prenota_id) {
$tutti_occupati = "NO";
if ($app_richiesti) while (list($key, $val) = each($app_richiesti)) if ($val != "SI") unset($app_richiesti[$key]);
if (!$app_richiesti) $num_app_controlla_orig = $dati_app['totapp'];
else $num_app_controlla_orig = count($app_richiesti);
for ($num1 = $idinizio ; $num1 <= $idfine ; $num1++) {
$num_prenota_presenti_in_settimana = 0;
for ($num2 = 0 ; $num2 < $dati_app['totapp'] ; $num2++) {
if ($prenota_in_app_sett[$dati_app['posizione'][$num2]][$num1]) $num_prenota_presenti_in_settimana++;
} # fine for $num2
if ($num_prenota_presenti_in_settimana >= $num_app_controlla_orig) {
if (!$app_richiesti) { $tutti_occupati = "SI"; break; }
else {
$app_controlla = $app_richiesti;
$uno_libero = "NO";
reset($app_controlla);
while (list($key, $val) = each($app_controlla)) {
$prenotainperiodo = prenota_in_app_e_periodo($key,$num1,$num1,$prenota_in_app_sett,$fine_prenota_id,$num_pp);
if (!$num_pp) { $uno_libero = "SI"; break; }
$app_assegnabili_prenota = $app_assegnabili_id[$prenotainperiodo[1]];
if ($app_assegnabili_prenota == "v") {
if ($num_prenota_presenti_in_settimana < $dati_app['totapp']) $uno_libero = "SI";
break;
} # fine if ($app_assegnabili_prenota == "v")
if ($app_assegnabili_prenota) {
$app_assegnabili_prenota = explode (",", $app_assegnabili_prenota);
$n_app_assegnabili_prenota = count($app_assegnabili_prenota);
for ($num2 = 0 ; $num2 < $n_app_assegnabili_prenota ; $num2++) if (!$app_controlla[$app_assegnabili_prenota[$num2]]) $app_controlla[$app_assegnabili_prenota[$num2]] = "SI";
} # fine if ($app_assegnabili_prenota)
} # fine while (list($key, $val) = each($app_controlla))
if ($uno_libero == "NO") { $tutti_occupati = "SI"; break; }
} # fine else if (!$app_richiesti)
} # fine if ($num_prenota_presenti_in_settimana >= $num_app_controlla_orig)
} # fine for $num1
return $tutti_occupati;
} # fine function controlla_tutti_occupati




# function che trova tutte le prenotazioni in un periodo
function lista_prenota_periodo ($idinizio,$idfine,&$dati_app,&$prenota_in_app_sett,&$pren_pres_in_lista,&$lista_prenota_periodo,&$num_lista_pren_per) {
for ($num1 = $idinizio ; $num1 <= $idfine ; $num1++) {
for ($num2 = 0 ; $num2 < $dati_app['totapp'] ; $num2++) {
$pren_in_sett = $prenota_in_app_sett[$dati_app['posizione'][$num2]][$num1];
if ($pren_in_sett and !$pren_pres_in_lista[$pren_in_sett]) {
$pren_pres_in_lista[$pren_in_sett] = 1;
$lista_prenota_periodo[$num_lista_pren_per] = $pren_in_sett;
$num_lista_pren_per++;
} # fine if ($pren_in_sett and !$pren_pres_in_lista[$pren_in_sett])
} # fine for $num2
} # fine for $num1
} # fine function lista_prenota_periodo




# function che cancella le prenotazioni vicine e prepara le variabili per liberasettimane
function cancella_prenota_compagne ($idprenota_comp,$num_idprenota_comp,&$idinizioprenota,&$idfineprenota,&$app_richiesti,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$app_prenota_id,&$prenota_in_app_sett) {
$id_ric = 1;
$idinizioprenota_vett = "";
$idfineprenota_vett = "";
$idinizioprenota_vett[$id_ric] = $idinizioprenota;
$idfineprenota_vett[$id_ric] = $idfineprenota;
$idinizioprenota = $idinizioprenota_vett;
$idfineprenota = $idfineprenota_vett;
$app_richiesti_vett = "";
if (!$app_richiesti) $app_richiesti_vett[$id_ric] = ",tutti,";
else {
while (list($key, $val) = each($app_richiesti)) if ($val == "SI") $app_richiesti_vett[$id_ric] .= $key.",";
$app_richiesti_vett[$id_ric] = substr($app_richiesti_vett[$id_ric],0,-1);
} # fine else if (!$app_richiesti)
$app_richiesti = $app_richiesti_vett;
$app_richiesti[',vicini,'] = "SI";
$app_richiesti[',numero,'] = $num_idprenota_comp + 1;
for ($num1 = 0 ; $num1 < $num_idprenota_comp ; $num1++) {
$id_comp = $idprenota_comp[$num1];
if ($fine_prenota_id[$id_comp]) {
$id_ric++;
$idinizioprenota[$id_ric] = $inizio_prenota_id[$id_comp];
$idfineprenota[$id_ric] = $fine_prenota_id[$id_comp];
$app_richiesti[$id_ric] = $app_assegnabili_id[$id_comp];
if (!$app_assegnabili_id[$id_comp]) $app_richiesti[$id_ric] = $app_prenota_id[$id_comp];
if ($app_assegnabili_id[$id_comp] == "v") $app_richiesti[$id_ric] = ",tutti,";
for ($num2 = $idinizioprenota[$id_ric] ; $num2 <= $idfineprenota[$id_ric] ; $num2++) {
$prenota_in_app_sett[$app_prenota_id[$id_comp]][$num2] = "";
} # fine for $num2
#$app_prenota_id[$id_comp] = "";
} # fine if ($fine_prenota_id[$id_comp])
} # fine for $num1
} # fine function cancella_prenota_compagne




function ripristina_prenota_compagne ($idprenota_comp,$num_idprenota_comp,&$idinizioprenota,&$idfineprenota,&$appartamento,&$app_prenota_id,&$prenota_in_app_sett,$fine_prenota_id,$profondita) {
global $debug;
for ($num1 = 0 ; $num1 < $num_idprenota_comp ; $num1++) {
$id_comp = $idprenota_comp[$num1];
if ($fine_prenota_id[$id_comp]) {
$id_ric = $num1 + 2;
$app_prenota_id[$id_comp] = $appartamento[$id_ric];
if ($debug == "on") {
echo "&nbsp;";
for ($i = 0 ; $i < $profondita['attuale'] ; $i++) echo "&nbsp;&nbsp;";
echo "<b>".$profondita['attuale']."</b> spostata pren $id_comp in  ".$appartamento[$id_ric]."<br>";
} # fine if ($debug == "on")
for ($num2 = $idinizioprenota[$id_ric] ; $num2 <= $idfineprenota[$id_ric] ; $num2++) {
$prenota_in_app_sett[$appartamento[$id_ric]][$num2] = $id_comp;
} # fine for $num2
} # fine if ($fine_prenota_id[$id_comp])
} # fine for $num1
$idinizioprenota = $idinizioprenota[1];
$idfineprenota = $idfineprenota[1];
$appartamento = $appartamento[1];
} # fine function ripristina_prenota_compagne




function aggiorna_app_aggiunti (&$limiti_var,&$limiti_var_orig,&$app_orig_prenota_id,&$app_prenota_id,&$inizio_prenota_id,&$fine_prenota_id,&$prenota_in_app_sett) {
if ($limiti_var['ini'] < $limiti_var_orig['ini'] or $limiti_var['fine'] > $limiti_var_orig['fine']) {
if (@is_array($app_orig_prenota_id)) {
reset($app_orig_prenota_id);
while (list($idp,$app) = each($app_orig_prenota_id)) {
if (!strcmp($app_prenota_id[$idp],"")) {
$app_prenota_id[$idp] = $app;
for ($num1 = $inizio_prenota_id[$idp] ; $num1 <= $fine_prenota_id[$idp] ; $num1++) {
$prenota_in_app_sett[$app][$num1] = $idp;
} # fine for $num1
} # fine if (!strcmp($app_prenota_id[$key2],""))
} # fine while (list($key2, $val2) = each($app_orig_prenota_id))
} # fine if (@is_array($app_orig_prenota_id))
} # fine if ($limiti_var['ini'] < $limiti_var_orig['ini'] or...
} # fine function aggiorna_app_aggiunti




# Struttura delle variabili sulle prenotazioni create con tab_a_var() :
#
# $prenota_in_app_sett[id_app][id_settimana] = id_prenota ("" se vuoto)
# $inizio_prenota_id[id_prenota] = "id_settimana"
# $fine_prenota_id[id_prenota] = "id_settimana"
# $app_prenota_id[id_prenota] = "id_app"
# $app_assegnabili_id[id_prenota] = {"id_app,id_app,...,id_app" | "v" | ""} (app. fisso se vuoto)
# $app_assegnabili_id[0][id_prenota] = {"id_prenota,...,id_prenota" | ""} (nessuna prenota compagna se vuoto)





#
# LIBERASETTIMANE: function ricorsiva per l'assegnazione degli appartamenti.
#
function liberasettimane ($idinizio,$idfine,&$limiti_var,$anno,&$fatto,&$appartamento,$profondita,$app_richiesti,&$app_prenota_id,&$app_orig_prenota_id,&$inizio_prenota_id,&$fine_prenota_id,&$app_assegnabili_id,&$prenota_in_app_sett,&$dati_app,$nome_tab_prenota = "prenota") {
global $debug;

if (@is_array($app_richiesti) and $app_richiesti[',numero,']) {
$app_richiesti_vett = $app_richiesti;
$idinizio_vett = $idinizio;
$idfine_vett = $idfine;
if (@is_array($appartamento)) $appartamento_vett = $appartamento;
if (!$app_richiesti_vett['id']) {
$app_richiesti_vett['id'] = 1;
$limiti_var['n_ini'] = "";
$limiti_var['n_fine'] = "";
for ($num1 = 1 ; $num1 <= $app_richiesti_vett[',numero,'] ; $num1++) {
if (!$limiti_var['n_ini'] or $limiti_var['n_ini'] > $idinizio_vett[$num1]) $limiti_var['n_ini'] = $idinizio_vett[$num1];
if (!$limiti_var['n_fine'] or $limiti_var['n_fine'] < $idfine_vett[$num1]) $limiti_var['n_fine'] = $idfine_vett[$num1];
} # fine for $num1
} # fine if (!$app_richiesti_vett['id'])
else {
$app_richiesti_vett['id']++;
$limiti_var['n_ini'] = $idinizio_vett[$app_richiesti_vett['id']];
$limiti_var['n_fine'] = $idfine_vett[$app_richiesti_vett['id']];
} # fine else if (!$app_richiesti_vett['id'])
unset($app_richiesti);
if ($app_richiesti_vett[$app_richiesti_vett['id']] != ",tutti,") {
$vett_app = explode(",",$app_richiesti_vett[$app_richiesti_vett['id']]);
$n_vett_app = count($vett_app);
for ($num1 = 0 ; $num1 < $n_vett_app ; $num1++) $app_richiesti[$vett_app[$num1]] = "SI";
} # fine if ($app_richiesti_vett[$app_richiesti_vett[id]] != ",tutti,")
$idinizio = $idinizio_vett[$app_richiesti_vett['id']];
$idfine = $idfine_vett[$app_richiesti_vett['id']];
$appartamento = "";
} # fine if (@is_array($app_richiesti) and $app_richiesti[',numero,'])
else {
$limiti_var['n_ini'] = $idinizio;
$limiti_var['n_fine'] = $idfine;
} # fine else if (@is_array($app_richiesti) and $app_richiesti[',numero,'])

if (!@is_array($profondita)) {
$primo_ciclo = "SI";
$prof_copia = $profondita;
$profondita = "";
$profondita['iniziale'] = $prof_copia;
$profondita['attuale'] = $prof_copia;
$tableprenota = $nome_tab_prenota . $anno . $profondita['iniziale'];
$max_prenota = esegui_query("select max(idprenota) from $tableprenota");
$tot_prenota = risul_query($max_prenota,0,0);
$profondita['tot_prenota_ini'] = $tot_prenota;
$profondita['tot_prenota_attuale'] = $tot_prenota;
tab_a_var($limiti_var,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$anno,$dati_app,$profondita,$nome_tab_prenota);
} # fine if (!@is_array($profondita))
if ($profondita['controllato_tutti_occupati'] != "SI") {
$tutti_occupati = controlla_tutti_occupati($idinizio,$idfine,$app_richiesti,$prenota_in_app_sett,$app_prenota_id,$app_assegnabili_id,$dati_app,$fine_prenota_id);
$profondita['controllato_tutti_occupati'] = "SI";
} # fine if ($profondita[controllato_tutti_occupati] != "SI")
if ($tutti_occupati == "SI") $fatto = "SI";
else $fatto = "NO";
$num_da_liberare = 1;
$num_da_liberare2 = 1;


# cicli da ripetere per ogni appartamento fino a che $fatto = SI

# primo ciclo che controlla se c'é già un appartamento libero
if ($fatto != "SI") {
for ($num1 = 0 ; $num1 < $dati_app['totapp'] ; $num1++) {
$numapp = $dati_app['posizione'][$num1];
if (!$app_richiesti or $app_richiesti[$numapp] == "SI") {
if ($app_richiesti_vett[',vicini,'] != "SI" or $dati_app['vicini'][$numapp] != $numapp) {
$prenotainperiodo = prenota_in_app_e_periodo($numapp,$idinizio,$idfine,$prenota_in_app_sett,$fine_prenota_id,$num_pp);
if (!$num_pp) {
$appartamento = $numapp;
$fatto = "SI";
if ($debug == "on") echo "LIBERATO1 $appartamento<br>";
break;
} # fine if (!$num_pp)
} # fine if ($app_richiesti_vett[',vicini,'] != "SI" or $dati_app['vicini'][$numapp] != $numapp)
} # fine if (!$app_richiesti or $app_richiesti[$numapp] == "SI")
} # fine for $num1
} # fine if ($fatto != "SI")

if ($fatto != "SI") {

# allargo il periodo passato dalla tabella alle variabili se necessario
$lista_prenota_periodo = "";
$pren_pres_in_lista = "";
$num_lista_pren_per = 0;
if (!$limiti_var[s_ini]) {
lista_prenota_periodo($idinizio,$idfine,$dati_app,$prenota_in_app_sett,$pren_pres_in_lista,$lista_prenota_periodo,$num_lista_pren_per);
$limiti_var[s_ini] = $idinizio;
$limiti_var[s_fine] = $idfine;
} # fine if (!$limiti_var[s_ini])
if ($limiti_var['s_ini'] > $idinizio) {
lista_prenota_periodo($idinizio,($limiti_var['s_ini'] - 1),$dati_app,$prenota_in_app_sett,$pren_pres_in_lista,$lista_prenota_periodo,$num_lista_pren_per);
$limiti_var['s_ini'] = $idinizio;
} # fine if ($limiti_var['s_ini'] > $idinizio)
if ($limiti_var['s_fine'] < $idfine) {
lista_prenota_periodo(($limiti_var['s_fine'] + 1),$idfine,$dati_app,$prenota_in_app_sett,$pren_pres_in_lista,$lista_prenota_periodo,$num_lista_pren_per);
$limiti_var['s_fine'] = $idfine;
} # fine if ($limiti_var['s_ini'] > $idinizio)
for ($num1 = 0 ; $num1 < $num_lista_pren_per ; $num1++) {
if ($inizio_prenota_id[$lista_prenota_periodo[$num1]] < $limiti_var['n_ini']) $limiti_var['n_ini'] = $inizio_prenota_id[$lista_prenota_periodo[$num1]];
if ($fine_prenota_id[$lista_prenota_periodo[$num1]] > $limiti_var['n_fine']) $limiti_var['n_fine'] = $fine_prenota_id[$lista_prenota_periodo[$num1]];
} # fine for $num1
if ($limiti_var['n_ini'] < $limiti_var['ini'] or $limiti_var['n_fine'] > $limiti_var['fine']) {
tab_a_var ($limiti_var,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$anno,$dati_app,$profondita,$nome_tab_prenota);
} # fine if ($limiti_var['n_ini'] < $limiti_var['ini'] or $limiti_var['n_fine'] > $limiti_var['fine'])

# ciclo che prova a spostare le prime prenotazioni ed eventualmente le
# mette in $da_liberare o $da_scambiare
for ($num1 = 0 ; $num1 < $dati_app['totapp'] ; $num1++) {
$numapp = $dati_app['posizione'][$num1];
if (!$app_richiesti or $app_richiesti[$numapp] == "SI") {
$prenotainperiodo = prenota_in_app_e_periodo($numapp,$idinizio,$idfine,$prenota_in_app_sett,$fine_prenota_id,$num_pp);
$idiniziop = "";
$idfinep = "";
unset($app_assegnabili);
$mobile = "SI";
$tutti_liberabili = "SI";

# Trovo le prenotazioni del periodo per l'appartamento $numapp, controllo
# che si posssano muovere e trovo le settimane iniziale e finale, e i 
# vincoli sull'appartamento di destinazione ($num_min_persome, $numcasa e
# $num_piano).
for ($num2 = 1 ; $num2 <= $num_pp ; $num2++) {
$idprenotainperiodo = $prenotainperiodo[$num2];
if ($app_assegnabili_id[$idprenotainperiodo] and $app_assegnabili_id[$idprenotainperiodo] != "v") {
$vett_assegnabili = explode (",", $app_assegnabili_id[$idprenotainperiodo]);
$num_assegnabili = count($vett_assegnabili);
for ($num3 = 0 ; $num3 < $num_assegnabili ; $num3++) {
$app_ = $vett_assegnabili[$num3];
$app_assegnabili[$idprenotainperiodo][$app_] = "SI";
} # fine for $num3
} # fine if ($app_assegnabili_id[$idprenotainperiodo] and $app_assegnabili_id[$idprenotainperiodo] != "v")
if ($app_assegnabili_id[$idprenotainperiodo]) {
if (!$idiniziop or $idiniziop > $inizio_prenota_id[$idprenotainperiodo]) {
$idiniziop = $inizio_prenota_id[$idprenotainperiodo];
} # fine if (!$idiniziop or $idiniziop > $inizio_prenota_id[$idprenotainperiodo])
if (!$idfinep or $idfinep < $fine_prenota_id[$idprenotainperiodo]) {
$idfinep = $fine_prenota_id[$idprenotainperiodo];
} # fine if (!$idfinep or $idfinep < $fine_prenota_id[$idprenotainperiodo])
} # fine if ($app_assegnabili_id[$idprenotainperiodo])
else $mobile = "NO";
if ($app_richiesti_vett[',vicini,'] == "SI" and !$dati_app['vicini'][$numapp] == $numapp) $mobile = "NO";
} # fine for $num2


if ($mobile == "SI") {
# Provo a spostare le prenotazioni dell'appartamento $numapp.
$mobile2 = "SI";
$prenota_comp_presente = "NO";
#$liberabile = "";
#$scambiabile = "";
#$da_scambiare = "";
for ($num2 = 1 ; $num2 <= $num_pp ; $num2++) {
$idprenotainperiodo = $prenotainperiodo[$num2];
for ($num3 = 0 ; $num3 < $dati_app['totapp'] ; $num3++) {
if ($num3 != $num1) {
$numapp2 = $dati_app[posizione][$num3];
if ($app_assegnabili_id[$idprenotainperiodo] == "v" or $app_assegnabili[$idprenotainperiodo][$numapp2] == "SI") {
$prenotainperiodo2 = prenota_in_app_e_periodo($numapp2,$inizio_prenota_id[$idprenotainperiodo],$fine_prenota_id[$idprenotainperiodo],$prenota_in_app_sett,$fine_prenota_id,$num_pp2);
if (!$num_pp2 and !$app_assegnabili_id[0][$idprenotainperiodo]) {
$nuovo_app[$idprenotainperiodo] = $numapp2;
$liberabile[$idprenotainperiodo] = "SI";
$scambiabile[$idprenotainperiodo] = "NO";
break;
} # fine (!$num_pp2 and...
else {
# Se non si possono spostare vedere se sono da scambiare
if ($app_assegnabili_id[0][$idprenotainperiodo]) $prenota_comp_presente = "SI";
$prenota_fissa_presente = "NO";
for ($num4 = 1 ; $num4 <= $num_pp2 ; $num4++) {
$idprenotainperiodo2 = $prenotainperiodo2[$num4];
if (!$app_assegnabili_id[$idprenotainperiodo2]) $prenota_fissa_presente = "SI";
else {
# se $idprenotainperiodo è uguale o minore di $idprenotainperiodo2 e ne contiene gli app. assegnabili è inutile fare lo scambio
if ($inizio_prenota_id[$idprenotainperiodo2] <= $inizio_prenota_id[$idprenotainperiodo] and $fine_prenota_id[$idprenotainperiodo2] >= $fine_prenota_id[$idprenotainperiodo]) {
if ($app_assegnabili_id[$idprenotainperiodo] == "v") $prenota_fissa_presente = "SI";
else {
if ($app_assegnabili_id[$idprenotainperiodo2] != "v" and !$app_assegnabili_id[0][$idprenotainperiodo]) {
$vett_assegnabili = explode (",",$app_assegnabili_id[$idprenotainperiodo2]);
$num_assegnabili = count($vett_assegnabili);
$lista_app_contenuta = "SI";
for ($num5 = 0 ; $num5 < $num_assegnabili ; $num5++) {
if ($app_assegnabili[$idprenotainperiodo][$vett_assegnabili[$num5]] != "SI") { $lista_app_contenuta = "NO"; break; }
} # fine for $num5
if ($lista_app_contenuta == "SI") $prenota_fissa_presente = "SI";
} # fine if ($app_assegnabili_id[$idprenotainperiodo2] != "v" and !$app_assegnabili_id[0][$idprenotainperiodo])
} # fine else if ($app_assegnabili_id[$idprenotainperiodo] == "v")
} # fine if ($inizio_prenota_id[$idprenotainperiodo2] <= $inizio_prenota_id[$idprenotainperiodo] and...
} # fine else if (!$app_assegnabili_id[$idprenotainperiodo2])
} # fine fine for $num4
if ($prenota_fissa_presente == "NO") {
$scambiabile[$idprenotainperiodo] = "SI";
$da_scambiare[$idprenotainperiodo][$numapp2] = "SI";
} # fine if ($prenota_fissa_presente == "NO")
} # fine else if (!$num_pp2)
} # fine if ($app_assegnabili_id[$idprenotainperiodo] == "v" or ...
} # fine if ($num3 != $num1)
} # fine for $num3

if ($liberabile[$idprenotainperiodo] != "SI") $tutti_liberabili = "NO";
if ($liberabile[$idprenotainperiodo] != "SI" and $scambiabile[$idprenotainperiodo] != "SI") $mobile2 = "NO";
} # fine for $num2

# Applico gli eventuali spostamenti, altrimenti metto i dati in $da_liberare
if ($tutti_liberabili != "NO") {
for ($num2 = 1 ; $num2 <= $num_pp ; $num2++) {
$idprenotainperiodo = $prenotainperiodo[$num2];
$n_app = $nuovo_app[$idprenotainperiodo];
for ($num3 = $inizio_prenota_id[$idprenotainperiodo] ; $num3 <= $fine_prenota_id[$idprenotainperiodo] ; $num3++) {
$prenota_in_app_sett[$numapp][$num3] = "";
$prenota_in_app_sett[$n_app][$num3] = $idprenotainperiodo;
} # fine for $num3
$app_prenota_id[$idprenotainperiodo] = $n_app;
} # fine for $num2
$appartamento = $numapp;
$fatto = "SI";
if ($debug == "on") echo "LIBERATO2 $appartamento<br>";
break;
} # fine if ($tutti_liberabili != "NO")

if ($mobile2 == "SI") {
if ($prenota_comp_presente == "NO") {
$idinizio_da_liberare[$num_da_liberare] = $idiniziop;
$idfine_da_liberare[$num_da_liberare] = $idfinep;
$app_da_liberare[$num_da_liberare] = $numapp;
$prenotainperiodo_da_liberare[$num_da_liberare] = $prenotainperiodo;
$num_pp_da_liberare[$num_da_liberare] = $num_pp;
$num_da_liberare++;
} # fine if ($prenota_comp_presente == "NO")
else {
$idinizio_da_liberare2[$num_da_liberare2] = $idiniziop;
$idfine_da_liberare2[$num_da_liberare2] = $idfinep;
$app_da_liberare2[$num_da_liberare2] = $numapp;
$prenotainperiodo_da_liberare2[$num_da_liberare2] = $prenotainperiodo;
$num_pp_da_liberare2[$num_da_liberare2] = $num_pp;
$num_da_liberare2++;
} # fine else if ($prenota_comp_presente == "NO")
} # fine if ($mobile2 == "SI")
else $riprova_app[$numapp] = "NO";

if ($fatto == "SI") { break; }
} # fine if ($mobile == "SI")
else $riprova_app[$numapp] = "NO";
} # fine if (!$app_richiesti or $app_richiesti[$numapp] == "SI")
} # fine for $num1

} # fine if ($fatto != "SI")




# Se non è ancora $fatto chiamo ricorsivamente liberasettimane con i dati
# in $da_liberare e $da_scambiare, operando su una variabile temporanea.
if ($fatto == "NO" and $limiti_var['t_limite'] >= time()) {
$nuova_profondita = $profondita;
$nuova_profondita['attuale'] = $profondita['attuale'] + 1;
$num_da_lib_no_comp = $num_da_liberare;
for ($num1 = 1 ; $num1 < $num_da_liberare2 ; $num1++) {
$idinizio_da_liberare[$num_da_liberare] = $idinizio_da_liberare2[$num1];
$idfine_da_liberare[$num_da_liberare] = $idfine_da_liberare2[$num1];
$app_da_liberare[$num_da_liberare] = $app_da_liberare2[$num1];
$prenotainperiodo_da_liberare[$num_da_liberare] = $prenotainperiodo_da_liberare2[$num1];
$num_pp_da_liberare[$num_da_liberare] = $num_pp_da_liberare2[$num1];
$num_da_liberare++;
} # fine for $num1

for ($num1 = 1 ; $num1 < $num_da_liberare ; $num1++) {
if ($app_da_liberare[$num1] != ",,NO") {
$n_app_prenota_id = $app_prenota_id;
$n_prenota_in_app_sett = $prenota_in_app_sett;
$nuova_profondita['tot_prenota_attuale'] = $profondita['tot_prenota_attuale'];
$idiniziop = $idinizio_da_liberare[$num1];
$idfinep = $idfine_da_liberare[$num1];
$numapp = $app_da_liberare[$num1];
$prenotainperiodo = $prenotainperiodo_da_liberare[$num1];
$num_pp = $num_pp_da_liberare[$num1];

# Muovo le prenotazioni liberabili
for ($num2 = 1 ; $num2 <= $num_pp ; $num2++) {
$idprenotainperiodo = $prenotainperiodo[$num2];
if ($liberabile[$idprenotainperiodo] == "SI") {
$n_app = $nuovo_app[$idprenotainperiodo];
for ($num3 = $inizio_prenota_id[$idprenotainperiodo] ; $num3 <= $fine_prenota_id[$idprenotainperiodo] ; $num3++) {
$n_prenota_in_app_sett[$numapp][$num3] = "";
$n_prenota_in_app_sett[$n_app][$num3] = $idprenotainperiodo;
} # fine for $num3
$n_app_prenota_id[$idprenotainperiodo] = $n_app;
} # fine if ($liberabile[$idpenotainperiodo] == "SI")
} # fine for $num2

# Riempio gli spazi vuoti con prenotazioni kostanti.
$idinizio_prenota_falsa = $idinizio;
$prenota_falsa_da_inserire = "NO";
for ($num2 = $idinizio ; $num2 <= ($idfine+1) ; $num2++) {
if ($n_prenota_in_app_sett[$numapp][$num2] or $num2 == ($idfine+1)) {
if ($prenota_falsa_da_inserire == "SI") {
$nuova_profondita['tot_prenota_attuale']++;
$n_app_prenota_id[$nuova_profondita['tot_prenota_attuale']] = $numapp;
$inizio_prenota_id[$nuova_profondita['tot_prenota_attuale']] = $idinizio_prenota_falsa;
$fine_prenota_id[$nuova_profondita['tot_prenota_attuale']] = $idfine_prenota_falsa;
for ($num3 = $idinizio_prenota_falsa ; $num3 <= $idfine_prenota_falsa ; $num3++) {
$n_prenota_in_app_sett[$numapp][$num3] = $nuova_profondita['tot_prenota_attuale'];
} # fine for $num3
} # fine if ($prenota_falsa_da_inserire == "SI")
$prenota_falsa_da_inserire = "NO";
$idinizio_prenota_falsa = $num2 + 1;
} # fine if ($n_prenota_in_app_sett[$numapp][$num2] or $num2 == ($idfine+1))
else {
$prenota_falsa_da_inserire = "SI";
$idfine_prenota_falsa = $num2;
} # fine else if ($n_prenota_in_app_sett[$numapp][$num2] or $num2 == ($idfine+1))
} # fine for $num2


#chiamo ricorsivamente liberasettimane con gli app. $da_scambiare
$fatto3 = "SI";
$limiti_var_orig = $limiti_var;
$num_pp_s = $num_pp;
$prenotainperiodo_s = $prenotainperiodo;
$scambiabile_s = $scambiabile;
unset($prenotainperiodo_agg);
for ($num2 = 1 ; $num2 <= $num_pp_s ; $num2++) {
$idprenotainperiodo = $prenotainperiodo_s[$num2];
if ($scambiabile_s[$idprenotainperiodo] == "SI") {
$idinizioprenota2 = $inizio_prenota_id[$idprenotainperiodo];
$idfineprenota2 = $fine_prenota_id[$idprenotainperiodo];
if ($idinizioprenota2 > $idinizio) { $idinizio_rimpicciolito = $idinizioprenota2; }
else { $idinizio_rimpicciolito = $idinizio; }
if ($idfineprenota2 < $idfine) { $idfine_rimpicciolito = $idfineprenota2; }
else { $idfine_rimpicciolito = $idfine; }

# Se la prenotazione scambiabile che c'era prima è stata spostata in un altro appartamento
# riempio gli spazi vuoti ed aggiungo eventuali nuove prenotazioni a $prenotainperiodo_s
if ($numapp != $n_app_prenota_id[$idprenotainperiodo]) {
$idinizio_prenota_falsa = $idinizio_rimpicciolito;
$prenota_falsa_da_inserire = "NO";
for ($num3 = $idinizio_rimpicciolito ; $num3 <= ($idfine_rimpicciolito + 1) ; $num3++) {
if ($n_prenota_in_app_sett[$numapp][$num3] and !$prenotainperiodo_agg[$n_prenota_in_app_sett[$numapp][$num3]] and $num3 != ($idfine_rimpicciolito + 1)) {
$prenotainperiodo_agg[$n_prenota_in_app_sett[$numapp][$num3]] = 1;
$num_pp_s++;
$prenotainperiodo_s[$num_pp_s] = $n_prenota_in_app_sett[$numapp][$num3];
$scambiabile_s[$n_prenota_in_app_sett[$numapp][$num3]] = "SI";
} # fine ($n_prenota_in_app_sett[$numapp][$num3] and !$prenotainperiodo_agg[$n_prenota_in_app_sett[$numapp][$num3]] and...
if ($n_prenota_in_app_sett[$numapp][$num3] or $num3 == ($idfine_rimpicciolito + 1)) {
if ($prenota_falsa_da_inserire == "SI") {
$nuova_profondita['tot_prenota_attuale']++;
$n_app_prenota_id[$nuova_profondita['tot_prenota_attuale']] = $numapp;
$inizio_prenota_id[$nuova_profondita['tot_prenota_attuale']] = $idinizio_prenota_falsa;
$fine_prenota_id[$nuova_profondita['tot_prenota_attuale']] = $idfine_prenota_falsa;
for ($num4 = $idinizio_prenota_falsa ; $num4 <= $idfine_prenota_falsa ; $num4++) {
$n_prenota_in_app_sett[$numapp][$num4] = $nuova_profondita['tot_prenota_attuale'];
} # fine for $num4
} # fine if ($prenota_falsa_da_inserire == "SI")
$prenota_falsa_da_inserire = "NO";
$idinizio_prenota_falsa = $num3 + 1;
} # fine if ($n_prenota_in_app_sett[$numapp][$num2] or $num2 == ($idfine+1))
else {
$prenota_falsa_da_inserire = "SI";
$idfine_prenota_falsa = $num3;
} # fine else if ($n_prenota_in_app_sett[$numapp][$num2] or $num2 == ($idfine+1))
} # fine for $num3
} # fine if ($numapp != $n_app_prenota_id[$idprenotainperiodo])

else {
$inizio_prenota_id[$idprenotainperiodo] = $idinizio_rimpicciolito;
$fine_prenota_id[$idprenotainperiodo] = $idfine_rimpicciolito;
for ($num3 = $idinizioprenota2 ; $num3 < $idinizio_rimpicciolito ; $num3++) {
$n_prenota_in_app_sett[$numapp][$num3] = "";
} # fine for $num3
for ($num3 = ($idfine_rimpicciolito + 1) ; $num3 <= $idfineprenota2 ; $num3++) {
$n_prenota_in_app_sett[$numapp][$num3] = "";
} # fine for $num3
$app_assegnabili_id2 = $app_assegnabili_id[$idprenotainperiodo];
$app_assegnabili_id[$idprenotainperiodo] = "";
$ap_ric = "";
for ($num3 = 0 ; $num3 < $dati_app['totapp'] ; $num3++) {
$numapp2 = $dati_app['posizione'][$num3];
if ($da_scambiare[$idprenotainperiodo][$numapp2] == "SI") {
$ap_ric[$numapp2] = "SI";
} # fine if ($da_scambiare[$idprenotainperiodo][$numapp2] == "SI")
} # fine for $num3

# Se la prenotazione da scambiare ne ha altre compagne
if ($app_assegnabili_id[0][$idprenotainperiodo]) {
$idprenota_comp = explode(",",$app_assegnabili_id[0][$idprenotainperiodo]);
$num_idprenota_comp = count($idprenota_comp);
cancella_prenota_compagne($idprenota_comp,$num_idprenota_comp,$idinizioprenota2,$idfineprenota2,$ap_ric,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$n_app_prenota_id,$n_prenota_in_app_sett);
} # fine if ($app_assegnabili_id[0][$idprenotainperiodo])

$appartamento2 = "";
$fatto2 = "";
if ($debug == "on") {
global $passo;
$passo++;
echo $passo;
for ($i = 0 ; $i < $profondita['attuale'] ; $i++) echo "&nbsp;&nbsp;";
if ($ap_ric[',numero,']) {
$ap_ric_ved = $ap_ric[1]." (pren $idprenotainperiodo + ".$app_assegnabili_id[0][$idprenotainperiodo].")";
$idinizioprenota2_ved = $idinizioprenota2[1];
$idfineprenota2_ved = $idfineprenota2[1];
} # fine if ($ap_ric[',numero,']) 
else {
$ap_ric_ved = implode(",",array_keys($ap_ric))." (pren $idprenotainperiodo)";;
$idinizioprenota2_ved = $idinizioprenota2;
$idfineprenota2_ved = $idfineprenota2;
} # fine else if ($ap_ric[',numero,']) 
echo "<b>".$profondita['attuale']."</b> <em>".date("H:i:s")."</em> libera il $numapp da $idinizioprenota2_ved a $idfineprenota2_ved negli app $ap_ric_ved<br>";
} # fine if ($debug == "on")
liberasettimane($idinizioprenota2,$idfineprenota2,$limiti_var,$anno,$fatto2,$appartamento2,$nuova_profondita,$ap_ric,$n_app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$n_prenota_in_app_sett,$dati_app,$nome_tab_prenota);
if ($debug == "on") {
echo $passo;
for ($i = 0 ; $i < $profondita['attuale'] ; $i++) echo "&nbsp;&nbsp;";
echo "<b>".$profondita['attuale']."</b> finito <em>".date("H:i:s")."</em> $fatto2 (app $appartamento2)<br>";
} # fine if ($debug == "on")

if ($app_assegnabili_id[0][$idprenotainperiodo]) {
$inizio_prenota_id[$idprenotainperiodo] = $idinizioprenota2[1];
$fine_prenota_id[$idprenotainperiodo] = $idfineprenota2[1];
if ($fatto2 == "SI") ripristina_prenota_compagne($idprenota_comp,$num_idprenota_comp,$idinizioprenota2,$idfineprenota2,$appartamento2,$n_app_prenota_id,$n_prenota_in_app_sett,$fine_prenota_id,$profondita);
} # fine if ($app_assegnabili_id[0][$idprenotainperiodo])
else {
$inizio_prenota_id[$idprenotainperiodo] = $idinizioprenota2;
$fine_prenota_id[$idprenotainperiodo] = $idfineprenota2;
} # fine else if ($app_assegnabili_id[0][$idprenotainperiodo])
$app_assegnabili_id[$idprenotainperiodo] = $app_assegnabili_id2;

if ($fatto2 == "SI") {
for ($num3 = $idinizio_rimpicciolito ; $num3 <= $idfine_rimpicciolito ; $num3++) {
$n_prenota_in_app_sett[$numapp][$num3] = "";
} # fine for $num3
for ($num3 = $idinizioprenota2 ; $num3 <= $idfineprenota2 ; $num3++) {
$n_prenota_in_app_sett[$appartamento2][$num3] = $idprenotainperiodo;
} # fine for $num3
$n_app_prenota_id[$idprenotainperiodo] = $appartamento2;
if ($debug == "on") {
echo $passo;
for ($i = 0 ; $i < $profondita['attuale'] ; $i++) echo "&nbsp;&nbsp;";
echo "<b>".$profondita['attuale']."</b> spostata pren $idprenotainperiodo in ".$appartamento2."<br>";
} # fine if ($debug == "on")
$nuova_profondita['tot_prenota_attuale']++;
$n_app_prenota_id[$nuova_profondita['tot_prenota_attuale']] = $numapp;
$inizio_prenota_id[$nuova_profondita['tot_prenota_attuale']] = $idinizio_rimpicciolito;
$fine_prenota_id[$nuova_profondita['tot_prenota_attuale']] = $idfine_rimpicciolito;
for ($num3 = $idinizio_rimpicciolito ; $num3 <= $idfine_rimpicciolito ; $num3++) {
$n_prenota_in_app_sett[$numapp][$num3] = $nuova_profondita['tot_prenota_attuale'];
} # fine for $num3
} # fine if ($fatto2 == "SI")
else {
$fatto3 = "NO";
aggiorna_app_aggiunti($limiti_var,$limiti_var_orig,$app_orig_prenota_id,$app_prenota_id,$inizio_prenota_id,$fine_prenota_id,$prenota_in_app_sett);
break;
} # fine else if ($fatto2 == "SI")
} # fine else if ($numapp != $n_app_prenota_id[$idprenotainperiodo])
} # fine if ($scambiabile_s[$idprenotainperiodo] == "SI")
} # fine for $num2


# cancello le prenotazioni kostanti
for ($num2 = ($profondita['tot_prenota_attuale'] + 1) ; $num2 <= $nuova_profondita['tot_prenota_attuale'] ; $num2++) {
for ($num3 = $inizio_prenota_id[$num2] ; $num3 <= $fine_prenota_id[$num2] ; $num3++) {
$n_prenota_in_app_sett[$numapp][$num3] = "";
} # fine for $num3
$n_app_prenota_id[$num2] = "";
$inizio_prenota_id[$num2] = "";
$fine_prenota_id[$num2] = "";
} # fine for $num2

if ($fatto3 == "SI") {
$app_prenota_id = $n_app_prenota_id;
$prenota_in_app_sett = $n_prenota_in_app_sett;
$fatto = "SI";
$appartamento = $numapp;
break;
} # fine if ($fatto3 == "SI")
else $riprova_app[$numapp] = "NO";

# Elimino gli appartamenti successivi che si possono scambiare con questo
if ($num1 != ($num_da_liberare - 1) and $num1 < $num_da_lib_no_comp) {
$lista_app_assegnabili = "";
for ($num2 = 1 ; $num2 <= $num_pp ; $num2++) {
$idprenotainperiodo = $prenotainperiodo[$num2];
if (!$lista_app_assegnabili or $lista_app_assegnabili == "v") $lista_app_assegnabili = $app_assegnabili_id[$idprenotainperiodo];
else {
$app_ass_num2 = $app_assegnabili_id[$idprenotainperiodo];
if ($app_ass_num2 != "v" and $app_ass_num2 != $lista_app_assegnabili) {
$app_ass_num2 = explode(",",$app_ass_num2);
$num_app_ass_num2 = (count($app_ass_num2) - 1);
$n_lista_app_assegnabili = "";
for ($num3 = 1 ; $num3 < $num_app_ass_num2 ; $num3++) {
if (str_replace(",".$app_ass_num2[$num3].",","",$lista_app_assegnabili) != $lista_app_assegnabili) $n_lista_app_assegnabili .= ",".$app_ass_num2[$num3];
} # fine for $num3
$lista_app_assegnabili = $n_lista_app_assegnabili;
if (!$lista_app_assegnabili) break;
else $lista_app_assegnabili .= ",";
} # fine if ($app_ass_num2 != "v" and $app_ass_num2 != $lista_app_assegnabili)
} # fine else if (!$lista_app_assegnabili or...
} # fine for $num2
if ($lista_app_assegnabili) {
for ($num2 = ($num1 + 1) ; $num2 < $num_da_liberare ; $num2++) {
$numapp2 = $app_da_liberare[$num2];
if (($lista_app_assegnabili == "v" or str_replace(",$numapp2,","",$lista_app_assegnabili) != $lista_app_assegnabili) and $numapp2 != ",,NO") {
if ($prenota_in_app_sett[$numapp2][$idiniziop]) $ini_blocco2 = $inizio_prenota_id[$prenota_in_app_sett[$numapp2][$idiniziop]];
else $ini_blocco2 = $idiniziop;
if ($prenota_in_app_sett[$numapp2][$idfinep]) $fine_blocco2 = $fine_prenota_id[$prenota_in_app_sett[$numapp2][$idfinep]];
else $fine_blocco2 = $idfinep;
if ($ini_blocco2 == $idiniziop and $fine_blocco2 == $idfinep) {
$scambiabili = "SI";
for ($num3 = $idiniziop ; $num3 <= $idfinep ; $num3++) {
if ($prenota_in_app_sett[$numapp2][$num3]) {
$app_ass_num3 = $app_assegnabili_id[$prenota_in_app_sett[$numapp2][$num3]];
if ($app_ass_num3 != "v" and str_replace(",$numapp,","",$app_ass_num3) == $app_ass_num3) {
$scambiabili = "NO";
break;
} # fine if ($app_ass_num5 != "v" and...
$num3 = $fine_prenota_id[$prenota_in_app_sett[$numapp2][$num3]];
} # fine if ($prenota_in_app_sett[$numapp3][$num3])
} # fine for $num3
if ($scambiabili == "SI") {
$app_da_liberare[$num2] = ",,NO";
$riprova_app[$numapp2] = "NO";
} # fine if ($scambiabili == "SI")
} # fine if ($ini_blocco2 == $ini_blocco1 and...
} # fine if (($lista_app_assegnabili == "v" or...
} # fine for $num2
} # fine if ($lista_app_assegnabili)
} # fine if ($num1 != ($num_da_liberare - 1) and...

} # fine if ($app_da_liberare[$num1] != ",,NO")
} # fine for $num1

} # fine if ($fatto == "NO")



if ($tutti_occupati == "SI") $fatto = "NO";


# Se bisogna liberare altri appartamenti oltre a quello appena liberato
if ($fatto == "SI" and $app_richiesti_vett[',numero,']) {
if ($app_richiesti_vett[',numero,'] > $app_richiesti_vett['id']) {
$nuova_profondita = $profondita;
$nuova_profondita['attuale']++;
$nuova_profondita['controllato_tutti_occupati'] = "NO";
$n_app_prenota_id = $app_prenota_id;
$n_prenota_in_app_sett = $prenota_in_app_sett;
$nuova_profondita['tot_prenota_attuale']++;
$id_prenota_lib = $nuova_profondita['tot_prenota_attuale'];
if ($debug == "on") echo "inserita ".$nuova_profondita['tot_prenota_attuale']." in $appartamento da $idinizio a $idfine<br>";
$n_app_prenota_id[$id_prenota_lib] = $appartamento;
$inizio_prenota_id[$id_prenota_lib] = $idinizio;
$fine_prenota_id[$id_prenota_lib] = $idfine;
for ($num1 = $idinizio ; $num1 <= $idfine ; $num1++) {
$n_prenota_in_app_sett[$appartamento][$num1] = $id_prenota_lib;
} # fine for $num1

# Se gli app devono essere vicini mantengo l'app liberato fisso e provo i restanti da liberare
if ($app_richiesti_vett[',vicini,'] == "SI") {
$fatto = "NO";
$lim_for = $app_richiesti_vett[',numero,'];
if ($lim_for != ($app_richiesti_vett['id'] + 1) and $limiti_var['t_limite'] < time()) {
$lim_for = ($app_richiesti_vett['id'] + 1);
if ($debug == "on") echo "timeout<br>";
} # fine if ($limiti_var['t_limite'] < time())
for ($num1 = ($app_richiesti_vett['id'] + 1) ; $num1 <= $lim_for ; $num1++) {
if ($provato[$idinizio_vett[$num1]][$idfine_vett[$num1]][$app_richiesti_vett[$num1]] != "SI") {
$provato[$idinizio_vett[$num1]][$idfine_vett[$num1]][$app_richiesti_vett[$num1]] = "SI";
$n_app_prenota_id2 = $n_app_prenota_id;
$n_prenota_in_app_sett2 = $n_prenota_in_app_sett;
$n_app_richiesti_vett = $app_richiesti_vett;
if ((string) $n_app_richiesti_vett[',app_vicini,'] == "") $n_app_richiesti_vett[',app_vicini,'] = $dati_app['vicini'][$appartamento];
else {
$app_vicini = explode(",",$dati_app['vicini'][$appartamento]);
$num_app_vicini = count($app_vicini);
for ($num2 = 0 ; $num2 < $num_app_vicini ; $num2++) {
if (str_replace(",".$app_vicini[$num2].",","",",".$n_app_richiesti_vett[',app_vicini,'].",") == ",".$n_app_richiesti_vett[',app_vicini,'].",") $n_app_richiesti_vett[',app_vicini,'] .= ",".$app_vicini[$num2];
} # fine for $num2
} # fine else if ((string) $app_richiesti_vett[',app_vicini,'] == "")
$n_app_richiesti_vett[$num1] = incrocia_app_richiesti($n_app_richiesti_vett[$num1],$n_app_richiesti_vett[',app_vicini,']);
if ((string) $n_app_richiesti_vett[$num1] != "") {
$n_idinizio_vett = $idinizio_vett;
$n_idfine_vett = $idfine_vett;
$val = $n_app_richiesti_vett[($app_richiesti_vett['id'] + 1)];
$n_app_richiesti_vett[($app_richiesti_vett['id'] + 1)] = $n_app_richiesti_vett[$num1];
$n_app_richiesti_vett[$num1] = $val;
$n_idinizio_vett[($app_richiesti_vett['id'] + 1)] = $idinizio_vett[$num1];
$n_idinizio_vett[$num1] = $idinizio_vett[($app_richiesti_vett['id'] + 1)];
$n_idfine_vett[($app_richiesti_vett['id'] + 1)] = $idfine_vett[$num1];
$n_idfine_vett[$num1] = $idfine_vett[($app_richiesti_vett['id'] + 1)];
if ($debug == "on") {
global $passo;
echo $passo;
for ($i = 0 ; $i < $profondita['attuale'] ; $i++) echo "&nbsp;&nbsp;";
echo "<b>".$profondita['attuale']."</b> libera vicini a $appartamento da ".$n_idinizio_vett[($app_richiesti_vett['id'] + 1)]." a ".$n_idfine_vett[($app_richiesti_vett['id'] + 1)]." in ".$n_app_richiesti_vett[($app_richiesti_vett['id'] + 1)]."<br>";
} # fine if ($debug == "on")
liberasettimane($n_idinizio_vett,$n_idfine_vett,$limiti_var,$anno,$fatto,$appartamento_vett,$nuova_profondita,$n_app_richiesti_vett,$n_app_prenota_id2,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$n_prenota_in_app_sett2,$dati_app,$nome_tab_prenota);
if ($debug == "on") {
echo $passo;
for ($i = 0 ; $i < $profondita['attuale'] ; $i++) echo "&nbsp;&nbsp;";
echo "<b>".$profondita['attuale']."</b> fatto libera vicini a $appartamento $fatto<br>";
} # fine if ($debug == "on")
if ($fatto == "SI") {
$n_app_prenota_id = $n_app_prenota_id2;
$n_prenota_in_app_sett = $n_prenota_in_app_sett2;
$val = $appartamento_vett[($app_richiesti_vett['id'] + 1)];
$appartamento_vett[($app_richiesti_vett['id'] + 1)] = $appartamento_vett[$num1];
$appartamento_vett[$num1] = $val;
break;
} # fine if ($fatto == "SI")
} # fine if ((string) $n_app_richiesti_vett[$num1] != "")
} # fine if ($provato[$idinizio_vett[$num1]][$idfine_vett[$num1]][$app_richiesti_vett[$num1]] != "SI")
} # fine for $num1
if ($fatto != "SI") $riprova_senza_app_liberato = $appartamento;
} # fine if ($app_richiesti_vett[',vicini,'] == "SI")

else {
if ($app_richiesti_vett[$app_richiesti_vett['id']] == ",tutti,") $app_assegnabili_id[$id_prenota_lib] = "v";
else if (str_replace(",","",$app_richiesti_vett[$app_richiesti_vett['id']]) != $app_richiesti_vett[$app_richiesti_vett['id']]) $app_assegnabili_id[$id_prenota_lib] = $app_richiesti_vett[$app_richiesti_vett['id']];
liberasettimane($idinizio_vett,$idfine_vett,$limiti_var,$anno,$fatto,$appartamento_vett,$nuova_profondita,$app_richiesti_vett,$n_app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$n_prenota_in_app_sett,$dati_app,$nome_tab_prenota);
} # fine elseif ($app_richiesti[',vicini,'] == "SI")

if ($fatto == "SI") {
$app_prenota_id = $n_app_prenota_id;
$prenota_in_app_sett = $n_prenota_in_app_sett;
for ($num1 = $idinizio ; $num1 <= $idfine ; $num1++) {
$prenota_in_app_sett[$app_prenota_id[$id_prenota_lib]][$num1] = "";
} # fine for $num1
$appartamento_vett[$app_richiesti_vett['id']] = $app_prenota_id[$id_prenota_lib];
$app_prenota_id[$id_prenota_lib] = "";
} # fine if ($fatto == "SI")
else {
$appartamento_vett[$app_richiesti_vett['id']] = "";
aggiorna_app_aggiunti($limiti_var,$limiti_var_orig,$app_orig_prenota_id,$app_prenota_id,$inizio_prenota_id,$fine_prenota_id,$prenota_in_app_sett);
} # fine else if ($fatto == "SI")
$inizio_prenota_id[$id_prenota_lib] = "";
$fine_prenota_id[$id_prenota_lib] = "";
$app_assegnabili_id[$id_prenota_lib] = "";
} # fine if ($app_richiesti_vett[',numero,'] > $app_richiesti_vett['id'])
else $appartamento_vett[$app_richiesti_vett['id']] = $appartamento;
$appartamento = $appartamento_vett;
} # fine if ($fatto == "SI" and $app_richiesti_vett[',numero,'])


# Se si era liberato un appartamento ma non se ne sono trovati altri vicini riprovo
if ($riprova_senza_app_liberato) {
$n_lista_app_ric = "";
for ($num1 = 0 ; $num1 < $dati_app['totapp'] ; $num1++) {
$numapp = $dati_app['posizione'][$num1];
if ($numapp != $riprova_senza_app_liberato and $riprova_app[$numapp] != "NO") $n_lista_app_ric .= $numapp.",";
} # fine for $num1
$n_lista_app_ric = substr($n_lista_app_ric,0,-1);
$app_richiesti_vett[$app_richiesti_vett['id']] = incrocia_app_richiesti($app_richiesti_vett[$app_richiesti_vett['id']],$n_lista_app_ric);
if ((string) $app_richiesti_vett[$app_richiesti_vett['id']] != "") {
$nuova_profondita = $profondita;
$nuova_profondita['attuale']++;
$nuova_profondita['controllato_tutti_occupati'] = "NO";
$n_app_prenota_id = $app_prenota_id;
$n_prenota_in_app_sett = $prenota_in_app_sett;
if ($debug == "on") {
global $passo;
echo $passo;
for ($i = 0 ; $i < $profondita['attuale'] ; $i++) echo "&nbsp;&nbsp;";
echo "<b>".$profondita['attuale']."</b> <em>".date("H:i:s")."</em> riprova ".$app_richiesti_vett['id']." negli app ".$app_richiesti_vett[$app_richiesti_vett['id']]."<br>";
} # fine if ($debug == "on")
$app_richiesti_vett['id'] = $app_richiesti_vett['id'] - 1;
liberasettimane($idinizio_vett,$idfine_vett,$limiti_var,$anno,$fatto,$appartamento_vett,$nuova_profondita,$app_richiesti_vett,$n_app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$n_prenota_in_app_sett,$dati_app,$nome_tab_prenota);
if ($fatto == "SI") {
$app_prenota_id = $n_app_prenota_id;
$prenota_in_app_sett = $n_prenota_in_app_sett;
$appartamento = $appartamento_vett;
} # fine if ($fatto == "SI")
else aggiorna_app_aggiunti($limiti_var,$limiti_var_orig,$app_orig_prenota_id,$app_prenota_id,$inizio_prenota_id,$fine_prenota_id,$prenota_in_app_sett);
} # fine if ((string) $app_richiesti_vett[$app_richiesti_vett['id']] != "")
} # fine if ($riprova_senza_app_liberato)


if ($primo_ciclo == "SI" and $fatto == "SI") {
$risul_agg = aggiorna_tableprenota($app_prenota_id,$app_orig_prenota_id,$tableprenota);
if (!$risul_agg) $fatto = "NO";
} # fine if ($primo_ciclo == "SI" and $fatto == "SI")

} # fine function liberasettimane





###########################################
###  FINE ./includes/liberasettimane.php 
###########################################

###########################################
###  INIZIO ./includes/funzioni_tariffe.php 
###########################################

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2011 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################




function dati_tariffe ($tablenometariffe,$tariffa_sel="",$tablepersonalizza="",$tableregole="") {

$righe_tariffe = esegui_query("select * from $tablenometariffe where idntariffe < '11' order by idntariffe");
$dati_tariffe['num'] = risul_query($righe_tariffe,0,'nomecostoagg');

for ($num1 = 1 ; $num1 <= $dati_tariffe['num'] ; $num1++) {
if (!$tariffa_sel or $tariffa_sel == $num1) {
$dati_tariffe['tariffa'.$num1]['nome'] = risul_query($righe_tariffe,0,'tariffa'.$num1);
$dati_tariffe['tariffa'.$num1]['caparra_percent'] = risul_query($righe_tariffe,1,'tariffa'.$num1);
$dati_tariffe['tariffa'.$num1]['caparra_arrotond'] = risul_query($righe_tariffe,2,'tariffa'.$num1);
$dati_tariffe['tariffa'.$num1]['moltiplica'] = risul_query($righe_tariffe,3,'tariffa'.$num1);
$dati_tariffe['tariffa'.$num1]['tasse_percent'] = risul_query($righe_tariffe,4,'tariffa'.$num1);
$importa_prezzi = risul_query($righe_tariffe,5,'tariffa'.$num1);
if ($importa_prezzi) {
$importa_prezzi = explode(";",$importa_prezzi);
$dati_tariffe['tariffa'.$num1]['importa_prezzi'] = $importa_prezzi[0];
$dati_tariffe['tariffa'.$num1]['parte_prezzo'] = $importa_prezzi[1];
$dati_tariffe['tariffa'.$num1]['tipo_importa'] = $importa_prezzi[2];
$dati_tariffe['tariffa'.$num1]['val_importa'] = $importa_prezzi[3];
if ($importa_prezzi[2] == "p") $dati_tariffe['tariffa'.$num1]['arrotond_importa'] = $importa_prezzi[4];
$dati_tariffe['tariffa'.$importa_prezzi[0]]['esporta_prezzi'] .= "$num1,";
} # fine if ($importa_prezzi)
} # fine if (!$tariffa_sel or $tariffa_sel == $num1)
} # fine for $num1

if ($tableregole) {
$regole = esegui_query("select * from $tableregole where (tariffa_commissioni is not NULL) or (tariffa_chiusa != '' and tariffa_chiusa is not NULL) order by iddatainizio ");
$num_regole = numlin_query($regole);
for ($num1 = 0 ; $num1 < $num_regole ; $num1++) {
$tariffa_commissioni = risul_query($regole,$num1,'tariffa_commissioni');
if (strcmp($tariffa_commissioni,"") and (!$tariffa_sel or $tariffa_sel == $tariffa_commissioni)) {
$comm_percent = risul_query($regole,$num1,'motivazione');
$comm_base = "t";
if (substr($comm_percent,0,1) == "s" or substr($comm_percent,0,1) == "c") {
$comm_base = substr($comm_percent,0,1);
$comm_percent = substr($comm_percent,1);
} # fine if (substr($comm_percent,0,1) == "s" or substr($comm_percent,0,1) == "c")
$iddataini = risul_query($regole,$num1,'iddatainizio');
if (!$iddataini) {
$dati_tariffe['tariffa'.$tariffa_commissioni]['commissioni_percent']['def'] = $comm_percent;
$dati_tariffe['tariffa'.$tariffa_commissioni]['commissioni_base']['def'] = $comm_base;
$dati_tariffe['tariffa'.$tariffa_commissioni]['commissioni_arrotond']['def'] = risul_query($regole,$num1,'motivazione2');
} # fine if (!$iddataini)
else {
$iddatafin = risul_query($regole,$num1,'iddatafine');
$dati_tariffe['tariffa'.$tariffa_commissioni]['commissioni_percent']["$iddataini-$iddatafin"] = $comm_percent;
$dati_tariffe['tariffa'.$tariffa_commissioni]['commissioni_base']["$iddataini-$iddatafin"] = $comm_base;
$dati_tariffe['tariffa'.$tariffa_commissioni]['commissioni_arrotond']["$iddataini-$iddatafin"] = risul_query($regole,$num1,'motivazione2');
} # fine else if (!$iddataini)
} # fine if (strcmp($tariffa_commissioni,"") and (!$tariffa_sel or...
$tariffa_chiusa = risul_query($regole,$num1,'tariffa_chiusa');
if ($tariffa_chiusa and (!$tariffa_sel or $tariffa_sel == substr($tariffa_chiusa,7))) {
$iddataini = risul_query($regole,$num1,'iddatainizio');
$iddatafine = risul_query($regole,$num1,'iddatafine');
for ($num2 = $iddataini ; $num2 <= $iddatafine ; $num2++) $dati_tariffe[$tariffa_chiusa]['chiusa'][$num2] = 1;
} # fine if ($tariffa_chiusa and (!$tariffa_sel or...
} # fine for $num1
} # fine if ($tableregole)

if ($tablepersonalizza) {
global $id_utente;
if ($id_utente) $id_utente_pers = $id_utente;
else $id_utente_pers = 1;
$arrotond_tasse = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'arrotond_tasse' and idutente = '$id_utente_pers'");
$dati_tariffe['tasse_arrotond'] = (double) risul_query($arrotond_tasse,0,'valpersonalizza');
} # fine if ($tablepersonalizza)

return $dati_tariffe;

} # fine function dati_tariffe




function trova_app_regola2 ($tipotariffa,&$regole2,&$num_regole2,&$app_regola2_predef,&$id_periodo_corrente,$idinizioperiodo,$idfineperiodo,$tipo_periodi,$anno,$tableregole) {

$app_regola2_predef = "";
if (!$regole2) {
$regole2 = esegui_query("select * from $tableregole where tariffa_per_app != ''");
$num_regole2 = numlin_query($regole2);
} # fine if (!$regole2)

for ($num1 = 0 ; $num1 < $num_regole2 ; $num1 = $num1 + 1) {
$tariffa_regola2 = risul_query($regole2,$num1,'tariffa_per_app');
if ($tipotariffa == $tariffa_regola2) {
$lista_app = risul_query($regole2,$num1,'motivazione');
$lista_appb = risul_query($regole2,$num1,'motivazione2');
if (strcmp($lista_appb,"")) {
if (!$id_periodo_corrente) $id_periodo_corrente = calcola_id_periodo_corrente($anno);
$ngiorni_reg2b = risul_query($regole2,$num1,'iddatainizio');
if ($ngiorni_reg2b) $diff_giorni = $idinizioperiodo - $id_periodo_corrente + 1;
else {
$ngiorni_reg2b = risul_query($regole2,$num1,'iddatafine');
$diff_giorni = $idfineperiodo - $id_periodo_corrente + 1;
} # fine else if ($ngiorni_reg2b)
if ($tipo_periodi == "s") $diff_giorni = $diff_giorni * 7;
if ($diff_giorni < $ngiorni_reg2b) {
$app_regola2_predef = $lista_app;
$lista_app = $lista_appb;
} # fine if ($diff_giorni < $ngiorni_reg2b)
} # fine if (strcmp($lista_appb,""))
break;
} # fine if ($tipotariffa == $tariffa_regola2)
} # fine for $num1

return $lista_app;

} # fine function trova_app_regola2




function calcola_commissioni ($dati_tariffe,$tipotariffa,$iddataini,$iddatafine,$tariffesettimanali,$sconto,$prezzo_costi_tot) {

$commissioni = (double) 0;
if (@is_array($dati_tariffe[$tipotariffa]['commissioni_percent'])) {
$costo_tariffa_corr = (double) 0;
$num_sett = 0;
$numsett = 0;
$tariffesettimanali = explode(";",$tariffesettimanali);
$tariffesettimanali = explode(",",$tariffesettimanali[0]);
$agg_sett_sconto = round((((double) $sconto * -1) / ($iddatafine - $iddataini + 1)),2);
$agg_sett_costi = round(((((double) $sconto * -1) + (double) $prezzo_costi_tot) / ($iddatafine - $iddataini + 1)),2);
for ($num1 = $iddataini ; $num1 <= $iddatafine ; $num1++) {

$costo_tariffa_sett = (double) $tariffesettimanali[$numsett];
$commissioni_percent = $dati_tariffe[$tipotariffa]['commissioni_percent']['def'];
$commissioni_arrotond = $dati_tariffe[$tipotariffa]['commissioni_arrotond']['def'];
$commissioni_base = $dati_tariffe[$tipotariffa]['commissioni_base']['def'];
reset($dati_tariffe[$tipotariffa]['commissioni_percent']);
while (list($per_comm,$val_comm) = each($dati_tariffe[$tipotariffa]['commissioni_percent'])) {
if ($per_comm != "def") {
$ini_comm = explode("-",$per_comm);
$fine_comm = $ini_comm[1];
$ini_comm = $ini_comm[0];
if ($num1 >= $ini_comm and $num1 <= $fine_comm) {
$commissioni_percent = $val_comm;
$commissioni_arrotond = $dati_tariffe[$tipotariffa]['commissioni_arrotond'][$per_comm];
$commissioni_base = $dati_tariffe[$tipotariffa]['commissioni_base'][$per_comm];
break;
} # fine if ($num1 >= $ini_comm and $num1 <= $fine_comm)
} # fine if ($per_comm != "def")
} # fine while (list($per_comm,$val_comm) = each($dati_tariffe[$tariffa]['commissioni_percent']))

if ($num1 != $iddataini and ($ultime_comm_perc != $commissioni_percent or $ultime_comm_arr != $commissioni_arrotond or $ultime_comm_base != $commissioni_base)) {
if ($ultime_comm_perc) {
if ($ultime_comm_arr == "val") $commissioni_corr = $ultime_comm_perc * $num_sett;
else {
$costo_base = (double) $costo_tariffa_corr;
if ($ultime_comm_base == "s") $costo_base = $costo_base + ((double) $agg_sett_sconto * $num_sett);
if ($ultime_comm_base == "c") $costo_base = $costo_base + ((double) $agg_sett_costi * $num_sett);
$commissioni_corr = ($costo_base * (double) $ultime_comm_perc) / 100;
$commissioni_corr = $commissioni_corr / $ultime_comm_arr;
$commissioni_corr = floor(round($commissioni_corr));
$commissioni_corr = $commissioni_corr * $ultime_comm_arr;
} # fine else if ($commissioni_arrotond == "val")
$commissioni += (double) $commissioni_corr;
} # fine if ($ultime_comm_perc)
$costo_tariffa_corr = (double) 0;
$num_sett = 0;
} # fine if ($num1 != $iddataini and ($ultime_comm_perc != $commissioni_percent or...

$num_sett++;
$ultime_comm_perc = $commissioni_percent;
$ultime_comm_arr = $commissioni_arrotond;
$ultime_comm_base = $commissioni_base;
$costo_tariffa_corr += (double) $tariffesettimanali[$numsett];
$numsett++;
} # fine for $num1

if ($ultime_comm_perc) {
if ($ultime_comm_arr == "val") $commissioni_corr = $ultime_comm_perc * $num_sett;
else {
$costo_base = (double) $costo_tariffa_corr;
if ($ultime_comm_base == "s") $costo_base = $costo_base + ((double) $agg_sett_sconto * $num_sett);
if ($ultime_comm_base == "c") $costo_base = $costo_base + ((double) $agg_sett_costi * $num_sett);
$commissioni_corr = ($costo_base * (double) $ultime_comm_perc) / 100;
$commissioni_corr = $commissioni_corr / $ultime_comm_arr;
$commissioni_corr = floor(round($commissioni_corr));
$commissioni_corr = $commissioni_corr * $ultime_comm_arr;
} # fine else if ($commissioni_arrotond == "val")
$commissioni += (double) $commissioni_corr;
} # fine if ($ultime_comm_perc)
} # fine if (@is_array($dati_tariffe[$tipotariffa]['commissioni_percent']))

return $commissioni;

} # fine function calcola_commissioni




function calcola_caparra ($dati_tariffe,$tipotariffa,$iddataini,$iddatafine,$costo_tariffa,$tariffesettimanali) {

$caparra = (double) 0;

$caparra_percent = $dati_tariffe[$tipotariffa]['caparra_percent'];
if ($caparra_percent) {
$caparra_arrotond = $dati_tariffe[$tipotariffa]['caparra_arrotond'];
if ($caparra_arrotond == "val") $caparra = $caparra_percent;
if ($caparra_arrotond == "gio") {
$lunghezza_periodo = ($iddatafine - $iddataini + 1);
if ($lunghezza_periodo <= $caparra_percent) $caparra = $costo_tariffa;
else {
$tariffesettimanali = explode(";",$tariffesettimanali);
$tariffesettimanali = explode(",",$tariffesettimanali[0]);
for ($num1 = 0 ; $num1 < $caparra_percent ; $num1++) $caparra += (double) $tariffesettimanali[$num1];
} # fine else if ($lunghezza_periodo >= $caparra_percent)
} # fine if ($caparra_arrotond == "gio")
if ($caparra_arrotond != "val" and $caparra_arrotond != "gio") {
$caparra = ($costo_tariffa * (double) $caparra_percent) / 100;
$caparra = $caparra / $caparra_arrotond;
$caparra = floor($caparra);
$caparra = $caparra * $caparra_arrotond;
if (!$caparra) {
$caparra = $caparra_arrotond;
if ($caparra > $costo_tariffa) $caparra = $costo_tariffa;
} # fine (!$caparra)
} # fine else if ($caparra_arrotond != "val" and $caparra_arrotond != "gio")
} # fine if ($caparra_percent)

return $caparra;

} # fine function calcola_caparra




function aggiorna_tariffe_esporta ($dati_tariffe,$tariffa_da,$idperiodo,$prezzoperiodo,$prezzoperiodop,$tableperiodi,&$agg_vett,&$num_agg) {
if ($dati_tariffe[$tariffa_da]['esporta_prezzi']) {

if (str_replace("-","",$idperiodo) != $idperiodo) {
$fine_per = explode("-",$idperiodo);
$ini_per = $fine_per[0];
$fine_per = $fine_per[1];
} # fine if (str_replace("-","",$idperiodo) != $idperiodo)
else {
$ini_per = $idperiodo;
$fine_per = $idperiodo;
} # fine else if (str_replace("-","",$idperiodo) != $idperiodo)

$tar_esporta = explode(",",$dati_tariffe[$tariffa_da]['esporta_prezzi']);
for ($num_tar = 0 ; $num_tar < (count($tar_esporta) - 1) ; $num_tar++) {
$tariffa = "tariffa".$tar_esporta[$num_tar];

if ($idperiodo == "opztariffa") {
$tablenometariffe = $prezzoperiodop;
$opztariffa = esegui_query("select * from $tableperiodi where $tariffa"."p is not NULL and $tariffa"."p != '' and $tariffa"."p != '0' ");
if (numlin_query($opztariffa)) $opztariffa = "p";
else $opztariffa = "s";
esegui_query("update $tablenometariffe set $tariffa = '$opztariffa' where idntariffe = '4' ");
} # fine if ($idperiodo == "opztariffa")
else {

$importa_percent = (double) $dati_tariffe[$tariffa]['val_importa'];
$importa_arrotond = (double) $dati_tariffe[$tariffa]['arrotond_importa'];
$tipo_percent = $dati_tariffe[$tariffa]['tipo_importa'];
if ($tipo_percent == "s" and !$agg_vett[$tariffa]) {
$agg_int = floor($importa_percent);
$resto_int = $importa_percent - (double) $agg_int;
$agg_gio = floor($agg_int / 7);
for ($num1 = 1 ; $num1 <= 7 ; $num1++) $agg_vett[$tariffa][$num1] = $agg_gio;
$resto = $agg_int - ($agg_gio * 7);
if ($resto >= 1) {
$agg_vett[$tariffa][1]++;
$resto--;
} # fine if ($resto >= 1)
for ($num1 = 7 ; $num1 > (7 - $resto) ; $num1--) $agg_vett[$tariffa][$num1]++;
$agg_vett[$tariffa][1] += $resto_int;
$num_agg[$tariffa]['s'] = 0;
$num_agg[$tariffa]['p'] = 0;
} # fine if ($tipo_percent == "s" and !$agg_vett[$tariffa])
if ($tipo_percent == "g") $perc = $importa_percent;

for ($num1 = $ini_per ; $num1 <= $fine_per ; $num1++) {

if ((string) $prezzoperiodo != "NO") {
if ($tipo_percent == "s") {
$num_agg[$tariffa]['s']++;
$perc = $agg_vett[$tariffa][$num_agg[$tariffa]['s']];
if ($num_agg[$tariffa]['s'] == 7) $num_agg[$tariffa]['s'] = 0;
} # fine if ($tipo_percent == "s")

$prezzo_a = (double) $prezzoperiodo;
if ($dati_tariffe[$tariffa]['parte_prezzo'] != "p") {
if ($tipo_percent == "p") $perc = (double) (($prezzo_a / 100.0) * $importa_percent);
if ($perc) {
if ($tipo_percent == "p") $perc = (round(($perc / $importa_arrotond),0) * $importa_arrotond);
$prezzo_a = $prezzo_a + $perc;
} # fine if ($perc)
} # fine if ($dati_tariffe[$tariffa]['parte_prezzo'] != "p")
if ($prezzo_a) esegui_query("update $tableperiodi set $tariffa = '$prezzo_a' where idperiodi = '$num1'");
else esegui_query("update $tableperiodi set $tariffa = NULL where idperiodi = '$num1'");
} # fine if ((string) $prezzoperiodo != "NO")

if ((string) $prezzoperiodop != "NO") {
if ($tipo_percent == "s") {
$num_agg[$tariffa]['p']++;
$perc = $agg_vett[$tariffa][$num_agg[$tariffa]['p']];
if ($num_agg[$tariffa]['p'] == 7) $num_agg[$tariffa]['p'] = 0;
} # fine if ($tipo_percent == "s")

$prezzo_a_p = (double) $prezzoperiodop;
if ($dati_tariffe[$tariffa]['parte_prezzo'] != "f") {
if ($tipo_percent == "p") $perc = (double) (($prezzo_a_p / 100.0) * $importa_percent);
if ($perc) {
if ($tipo_percent == "p") $perc = (round(($perc / $importa_arrotond),0) * $importa_arrotond);
$prezzo_a_p = $prezzo_a_p + $perc;
} # fine if ($perc)
} # fine if ($dati_tariffe[$tariffa]['parte_prezzo'] != "f")
if ($prezzo_a_p) esegui_query("update $tableperiodi set $tariffa"."p = '$prezzo_a_p' where idperiodi = '$num1'");
else esegui_query("update $tableperiodi set $tariffa"."p = NULL where idperiodi = '$num1'");
} # fine if ((string) $prezzoperiodop != "NO")

} # fine for $num1
} # fine else if ($idperiodo == "opztariffa")
} # fine for $num_tar
} # fine if ($dati_tariffe[$tipotariffa]['esporta_prezzi'])
} # fine function aggiorna_tariffe_esporta





###########################################
###  FINE ./includes/funzioni_tariffe.php 
###########################################

###########################################
###  INIZIO ./includes/funzioni_quadro_disp.php 
###########################################

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2013 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################


function crea_quadro_disp ($id_data_inizio_tab_disp,$num_colonne_tab_disp,$mostra_quadro_disp,$mostra_num_liberi,$app_consentito,$app_consentito_sett,$app_regola2_orig,$tipo_periodi,$numero_tariffe,$nome_tariffa,$dati_app,$prenota_in_app_sett,$app_orig_prenota_id,$tableperiodi,$allinea_disp="",$dati_tariffe="") {
global $c_sfondo_tab_disp,$c_inisett_tab_disp,$c_libero_tab_disp,$c_occupato_tab_disp,$aper_font_tab_disp,$chiu_font_tab_disp,$fr_persone,$fr_persona,$nome_mese,$colonna_destra_tab_disp,$tablepersonalizza,$id_utente,$anno;

if ($tipo_periodi == "s") $colspan = 14;
else $colspan = 2;
$num_raggr = 0;
unset($nome_raggr);
unset($app_ric_raggr);
unset($tipotariffa);
unset($num_app_ric_raggr);

if ($mostra_quadro_disp == "app") {
$mostra_num_liberi = "NO";
ksort ($dati_app['maxocc']);
reset ($dati_app['maxocc']);
while (list($key, $val) = each($dati_app['maxocc'])) {
if ($app_consentito[$key] == "SI") {
$app_ric_raggr[$num_raggr] = $key;
$nome_raggr[$num_raggr] = $key;
$num_raggr++;
} # fine if ($app_consentito[$numapp] == "SI")
} # fine while (list($key, $val) = each($dati_app['maxocc']))
} # fine if ($mostra_quadro_disp == "app")

if ($mostra_quadro_disp == "reg2") {
for ($numtariffa = 1 ; $numtariffa <= $numero_tariffe ; $numtariffa++) {
if ($app_regola2_orig[$numtariffa]) {
$app_regola2 = explode(",",$app_regola2_orig[$numtariffa]);
for ($num1 = 0 ; $num1 < count($app_regola2) ; $num1++) if ($app_consentito[$app_regola2[$num1]] == "SI") $app_ric_raggr[$num_raggr] .= "$app_regola2[$num1],";
if ($app_ric_raggr[$num_raggr]) {
$app_ric_raggr[$num_raggr] = substr($app_ric_raggr[$num_raggr],0,-1);
$nome_raggr[$num_raggr] = str_replace(" ","&nbsp;",$nome_tariffa[$numtariffa]);
$tipotariffa[$num_raggr] = "tariffa$numtariffa";
$num_raggr++;
} # fine if ($app_ric_raggr[$num_raggr])
} # fine if ($app_regola2_orig[$numtariffa])
} # fine for $numtariffa
} # fine if ($mostra_quadro_disp == "reg2")

if ($mostra_quadro_disp == "pers") {
asort ($dati_app['maxocc']);
reset ($dati_app['maxocc']);
$ultime_persone_casa = "vuoto";
while (list($key, $val) = each($dati_app['maxocc'])) {
$persone_casa = $val;
if ($persone_casa != $ultime_persone_casa) {
if ($app_ric_raggr[$num_raggr]) {
$app_ric_raggr[$num_raggr] = substr($app_ric_raggr[$num_raggr],0,-1);
if ($ultime_persone_casa) {
if ($ultime_persone_casa == 1) $nome_raggr[$num_raggr] = $ultime_persone_casa."&nbsp;".$fr_persona;
else $nome_raggr[$num_raggr] = $ultime_persone_casa."&nbsp;".$fr_persone;
} # fine if ($ultime_persone_casa)
else $nome_raggr[$num_raggr] = "?&nbsp;$fr_persone";
$num_raggr++;
} # fine if ($app_ric_raggr[$num_raggr])
$ultime_persone_casa = $persone_casa;
} # fine if ($persone_casa != $ultimepersone_casa)
if ($app_consentito[$key] == "SI") $app_ric_raggr[$num_raggr] .= "$key,";
} # fine while (list($key, $val) = each($dati_app[maxocc]))
if ($app_ric_raggr[$num_raggr]) {
$app_ric_raggr[$num_raggr] = substr($app_ric_raggr[$num_raggr],0,-1);
if ($ultime_persone_casa) {
if ($ultime_persone_casa == 1) $nome_raggr[$num_raggr] = $ultime_persone_casa."&nbsp;".$fr_persona;
else $nome_raggr[$num_raggr] = $ultime_persone_casa."&nbsp;".$fr_persone;
} # fine if ($ultime_persone_casa)
else $nome_raggr[$num_raggr] = "?&nbsp;$fr_persone";
$num_raggr++;
} # fine if ($app_ric_raggr[$num_raggr])
} # fine if ($mostra_quadro_disp == "pers")

$righe_tab_disp = "";
for ($num1 = 0 ; $num1 < $num_raggr ; $num1++) {
if ($app_ric_raggr[$num1]) {
$righe_tab_disp .= "<tr><td style=\"text-align: right;\">$aper_font_tab_disp".$nome_raggr[$num1]."$chiu_font_tab_disp</td>";
$max_app_liberi = explode(",",$app_ric_raggr[$num1]);
$max_app_liberi = count($max_app_liberi);
$app_ric_colonna = ",".$app_ric_raggr[$num1].",";
for ($num2 = 0 ; $num2 < $num_colonne_tab_disp ; $num2++) {
$id_periodo = $id_data_inizio_tab_disp + $num2;
$num_app_liberi = $max_app_liberi;
if ($app_consentito_sett[",attivo,"] == "SI") {
if ($num2 == 0) {
$app_ric_col_vett = explode(",",$app_ric_raggr[$num1]);
$num_app_ric_col = count($app_ric_col_vett);
} # fine if ($num2 == 0)
$app_ric_colonna = ",".$app_ric_raggr[$num1].",";
for ($num3 = 0 ; $num3 < $num_app_ric_col ; $num3++) {
if ($app_consentito_sett[$app_ric_col_vett[$num3]][$id_periodo] != "SI") {
$app_ric_colonna = str_replace(",".$app_ric_col_vett[$num3].",",",",$app_ric_colonna);
$num_app_liberi--;
} # fine if ($app_consentito_sett[$app_ric_col_vett[$num3]][$id_periodo] != "SI")
} # fine for $num3
} # fine if ($app_consentito_sett[",attivo,"] == "SI")
$pren_pres_in_lista = "";
$lista_prenota_periodo = "";
$num_lista_pren_per = 0;
lista_prenota_periodo($id_periodo,$id_periodo,$dati_app,$prenota_in_app_sett,$pren_pres_in_lista,$lista_prenota_periodo,$num_lista_pren_per);
for ($num3 = 0 ; $num3 < $num_lista_pren_per ; $num3++) {
if (str_replace(",".$app_orig_prenota_id[$lista_prenota_periodo[$num3]].",","",$app_ric_colonna) != $app_ric_colonna) $num_app_liberi--;
} # fine for $num3
if ($mostra_quadro_disp == "reg2" and $dati_tariffe and $dati_tariffe[$tipotariffa[$num1]]['chiusa'][$id_periodo]) $num_app_liberi = 0;
if ($num_app_liberi > 0) $color = $c_libero_tab_disp;
else $color = $c_occupato_tab_disp;
if ($num_app_liberi > 0 and $mostra_num_liberi == "SI") $val_liberi = $num_app_liberi;
else $val_liberi = "&nbsp;";
if ($num2 == 0 and $allinea_disp == "SI") $colspan_v = $colspan / 2;
else $colspan_v = $colspan;
$righe_tab_disp .= "<td style=\"background-color: $color;\" colspan=\"$colspan_v\">$aper_font_tab_disp$val_liberi$chiu_font_tab_disp</td>";
} # fine for $num2

if ($colonna_destra_tab_disp != "NO") $righe_tab_disp .= "<td>$aper_font_tab_disp".$nome_raggr[$num1]."$chiu_font_tab_disp</td></tr>";
else $righe_tab_disp .= "</tr>";
} # fine if ($app_ric_raggr[$num1])
} # fine for $num1

if ($righe_tab_disp) {

if ($tipo_periodi == "s") $ripeti_giorni = 7;
else {
$ripeti_giorni = 1;
if (!$id_utente) $id_utente_gio = 1;
else $id_utente_gio = $id_utente;
$giorno_vedi_ini_sett = esegui_query("select valpersonalizza_num from $tablepersonalizza where idpersonalizza = 'giorno_vedi_ini_sett$anno' and idutente = '$id_utente_gio'");
if (numlin_query($giorno_vedi_ini_sett) == 1) $giorno_vedi_ini_sett = risul_query($giorno_vedi_ini_sett,0,'valpersonalizza_num');
else $giorno_vedi_ini_sett = 0;
} # fine else if ($tipo_periodi == "s")
$ultimo_mese = "";
$num_col_mese = 0;
$riga_mese = "<tr><td rowspan=\"2\">$aper_font_tab_disp&nbsp;$chiu_font_tab_disp</td>";
$riga_giorni = "<tr>";
for ($num1 = 0 ; $num1 < ($num_colonne_tab_disp + 1) ; $num1++) {
if ($allinea_disp != "SI" or $num1 != $num_colonne_tab_disp) {
if ($num1 != $num_colonne_tab_disp) $id_periodo = $id_data_inizio_tab_disp + $num1;
else $id_periodo = $id_data_inizio_tab_disp + $num1 - 1;
$riga_periodo = esegui_query("select * from $tableperiodi where idperiodi = '$id_periodo'");
if ($num1 != $num_colonne_tab_disp) $inizio_periodo = risul_query($riga_periodo,0,'datainizio');
else $inizio_periodo = risul_query($riga_periodo,0,'datafine');
$inizio_periodo = explode("-",$inizio_periodo);
$g_inizio_periodo = $inizio_periodo[2];
$m_inizio_periodo = $inizio_periodo[1];
$a_inizio_periodo = $inizio_periodo[0];
if ($num1 == $num_colonne_tab_disp) $ripeti_giorni = 1;
for ($num2 = 0 ; $num2 < $ripeti_giorni ; $num2++) {
$timestamp_periodo = mktime(0,0,0,$m_inizio_periodo,($g_inizio_periodo + $num2),$a_inizio_periodo);
$g_mostra = date("d",$timestamp_periodo);
$m_mostra = date("m",$timestamp_periodo);
if ($ultimo_mese != $m_mostra) {
if ($ultimo_mese) {
$a_mostra = date("Y",mktime(0,0,0,$m_inizio_periodo,($g_inizio_periodo + $num2 -1),$a_inizio_periodo));
$riga_mese .= "<td colspan=\"$num_col_mese\">$aper_font_tab_disp";
if ($num_col_mese > 7) $riga_mese .= $nome_mese[$ultimo_mese]."&nbsp;$a_mostra";
else $riga_mese .= "&nbsp;";
$riga_mese .= "$chiu_font_tab_disp</td>";
$num_col_mese = 0;
} # fine if ($ultimo_mese)
$ultimo_mese = $m_mostra;
} # fine if ($ultimo_mese != $m_mostra)
if (($num1 != 0 or $num2 != 0) and $num1 != $num_colonne_tab_disp) $num_col_mese = $num_col_mese + 2;
else $num_col_mese++;
$bgcolor = "";
if ($tipo_periodi != "s") {
$giorno_sett_corr = date("w",$timestamp_periodo);
if ($giorno_sett_corr == $giorno_vedi_ini_sett) $bgcolor = "$c_inisett_tab_disp";
} # fine ($tipo_periodi != "s")
else if ($num2 == 0) $bgcolor = "$c_inisett_tab_disp";
$riga_giorni .= "<td";
if ($bgcolor) $riga_giorni .= " style=\"background-color: $bgcolor;\"";
if (($num1 != 0 or $num2 != 0) and $num1 != $num_colonne_tab_disp) $riga_giorni .= " colspan=2";
$riga_giorni .= ">$aper_font_tab_disp$g_mostra$chiu_font_tab_disp</td>";
} # fine for $num2
} # fine if ($allinea_disp != "SI" or $num1 != $num_colonne_tab_disp)
} # fine for $num1
$a_mostra = date("Y",mktime(0,0,0,$m_inizio_periodo,($g_inizio_periodo + $num2 -1),$a_inizio_periodo));
$riga_mese .= "<td colspan=\"$num_col_mese\">$aper_font_tab_disp";
if ($num_col_mese > 6) $riga_mese .= $nome_mese[$ultimo_mese]."&nbsp;$a_mostra";
else $riga_mese .= "&nbsp;";
if ($colonna_destra_tab_disp != "NO") $riga_mese .= "$chiu_font_tab_disp</td><td rowspan=\"2\">$aper_font_tab_disp&nbsp;$chiu_font_tab_disp</td></tr>";
else $riga_mese .= "$chiu_font_tab_disp</td></tr>";
$riga_giorni .= "</tr>";

$righe_tab_disp = "$riga_mese
$riga_giorni
$righe_tab_disp";

} # fine if ($righe_tab_disp)

return $righe_tab_disp;

} # fine function crea_quadro_disp






###########################################
###  FINE ./includes/funzioni_quadro_disp.php 
###########################################

###########################################
###  INIZIO ./includes/templates/cal/template.php 
###########################################

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2013 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################




$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tablenometariffe = $PHPR_TAB_PRE."ntariffe".$anno;
$tableregole = $PHPR_TAB_PRE."regole".$anno;
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tableclienti = $PHPR_TAB_PRE."clienti";
$tabletransazioniweb = $PHPR_TAB_PRE."transazioniweb";
$tablesoldi = $PHPR_TAB_PRE."soldi".$anno;
$tableanni = $PHPR_TAB_PRE."anni";


if ($framed) {
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"
        \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" >
<title>$pag</title>
";
if ($file_css_frame) echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$file_css_frame\" media=\"all\">
";
elseif ($extra_head_frame) echo "$extra_head_frame
";
echo "</head>
<body>
";
} # fine if ($framed)



if ($estendi_ultima_data == "SI") {
$ultima_data_menu_periodi = explode("<option value=\"",$menu_periodi);
$penultima_data_menu_periodi = substr($ultima_data_menu_periodi[(count($ultima_data_menu_periodi) - 2)],0,10);
$ultima_data_menu_periodi = substr($ultima_data_menu_periodi[(count($ultima_data_menu_periodi) - 1)],0,10);
$date_mancanti = esegui_query("select datafine from  $tableperiodi where datafine > '$ultima_data_menu_periodi' order by idperiodi");
$num_date_mancanti = numlin_query($date_mancanti);
if ($num_date_mancanti > 0) {
$id_ultima_data = esegui_query("select idperiodi from  $tableperiodi where datafine = '$ultima_data_menu_periodi'");
$id_ultima_data = risul_query($id_ultima_data,0,'idperiodi');
$id_penultima_data = esegui_query("select idperiodi from  $tableperiodi where datafine = '$penultima_data_menu_periodi'");
$id_penultima_data = risul_query($id_penultima_data,0,'idperiodi');
$intervalloperiodo = $id_ultima_data - $id_penultima_data;
if ($intervalloperiodo == 1) $num_intervallo = 1;
else $num_intervallo = 2;
for ($num1 = 0 ; $num1 < $num_date_mancanti ; $num1++) {
if ($num_intervallo == 1) {
$data_option = risul_query($date_mancanti,$num1,"datafine");
$menu_periodi .= "<option value=\"$data_option\">$data_option</option>
";
} # fine if ($num_intervallo == 1)
if ($num_intervallo == $intervalloperiodo) $num_intervallo = 1;
else $num_intervallo++;
} # fine for $num1
} # fine if ($num_date_mancanti > 0)
} # fine if ($estendi_ultima_data == "SI")

unset($inizioperiodi);
unset($fineperiodi);
unset($inizioperiodi_id);
unset($fineperiodi_id);
unset($intervalloperiodi);
$menu_periodi_vett = explode("<option value=\"",$menu_periodi);
$num_menu_periodi_vett = count($menu_periodi_vett);
$inizioperiodi[0] = substr($menu_periodi_vett[1],0,10);
if ($tipo_periodi == "s") $intervallo_base = 604800;
else $intervallo_base = 86400;
$data_prec = explode("-",$inizioperiodi[0]);
$data_corr = explode("-",substr($menu_periodi_vett[2],0,10));
$intervallo_prec = round(((mktime(0,0,0,$data_corr[1],$data_corr[2],$data_corr[0]) - mktime(0,0,0,$data_prec[1],$data_prec[2],$data_prec[0])) / $intervallo_base),0);
$intervalloperiodi[0] = $intervallo_prec;
$num_periodi_date = 0;
for ($num1 = 2 ; $num1 < $num_menu_periodi_vett ; $num1++) {
$data_corr = explode("-",substr($menu_periodi_vett[$num1],0,10));
$intervallo_corr = round(((mktime(0,0,0,$data_corr[1],$data_corr[2],$data_corr[0]) - mktime(0,0,0,$data_prec[1],$data_prec[2],$data_prec[0])) / $intervallo_base),0);
if ($intervallo_corr != $intervallo_prec) {
$data_succ = explode("-",substr($menu_periodi_vett[($num1 + 1)],0,10));
$intervallo_succ = round(((mktime(0,0,0,$data_succ[1],$data_succ[2],$data_succ[0]) - mktime(0,0,0,$data_corr[1],$data_corr[2],$data_corr[0])) / $intervallo_base),0);
$fineperiodi[$num_periodi_date] = $data_prec[0]."-".$data_prec[1]."-".$data_prec[2];
$num_periodi_date++;
$inizioperiodi[$num_periodi_date] = $data_corr[0]."-".$data_corr[1]."-".$data_corr[2];
$intervalloperiodi[$num_periodi_date] = $intervallo_succ;
$intervallo_prec = $intervallo_succ;
} # fine if ($intervallo_corr != $intervallo_prec)
$data_prec = $data_corr;
} # fine for $num1
$fineperiodi[$num_periodi_date] = substr($menu_periodi_vett[($num1 - 1)],0,10);
$num_periodi_date++;







unset($limiti_var);
unset($profondita);
unset($dati_app);
unset($app_prenota_id);
unset($app_orig_prenota_id);
unset($inizio_prenota_id);
unset($fine_prenota_id);
unset($app_assegnabili_id);
unset($prenota_in_app_sett);


$tabelle_lock = "";
$altre_tab_lock = array($tableprenota,$tablenometariffe,$tableperiodi,$tableappartamenti,$tableregole,$tablepersonalizza);
$tabelle_lock = lock_tabelle($tabelle_lock,$altre_tab_lock);

$min_periodo = esegui_query("select idperiodi from $tableperiodi where datainizio = '".aggslashdb($inizioperiodi[0])."'");
$min_periodo = risul_query($min_periodo,0,'idperiodi');
$max_periodo = esegui_query("select idperiodi from $tableperiodi where datafine = '".aggslashdb($fineperiodi[0])."'");
$max_periodo = risul_query($max_periodo,0,'idperiodi');

$num_colonne_tab_disp = $numero_giorni;
$limiti_var['idperiodocorrente'] = calcola_id_periodo_corrente($anno);

if ((string) $id_data_inizio_tab_disp == "") {
if (!$data_preselezionata) $id_data_inizio_tab_disp = $limiti_var['idperiodocorrente'];
else {
$id_data_inizio_tab_disp = esegui_query("select idperiodi from $tableperiodi where datainizio = '".aggslashdb($data_preselezionata)."'");
if (numlin_query($id_data_inizio_tab_disp) == 1) $id_data_inizio_tab_disp = risul_query($id_data_inizio_tab_disp,0,'idperiodi');
else $id_data_inizio_tab_disp = $limiti_var['idperiodocorrente'];
} # fine else if (!$data_preselezionata)
} # fine if ((string) $id_data_inizio_tab_disp == "")
if (controlla_num_pos($id_data_inizio_tab_disp) != "SI") $id_data_inizio_tab_disp = "0";
if (($id_data_inizio_tab_disp + $num_colonne_tab_disp - 1) > $max_periodo) $id_data_inizio_tab_disp = ($max_periodo - $num_colonne_tab_disp + 1);
if ($id_data_inizio_tab_disp < $min_periodo) $id_data_inizio_tab_disp = $min_periodo;
if ($num_colonne_tab_disp > ($max_periodo - $min_periodo)) $num_colonne_tab_disp = ($max_periodo - $min_periodo);
$limiti_var['n_ini'] = $id_data_inizio_tab_disp;
$limiti_var['n_fine'] = ($id_data_inizio_tab_disp + $num_colonne_tab_disp - 1);

$profondita['iniziale'] = "";
$profondita['attuale'] = 1;
$max_prenota = esegui_query("select max(idprenota) from $tableprenota");
$tot_prenota = risul_query($max_prenota,0,0);
$profondita['tot_prenota_ini'] = $tot_prenota;
$profondita['tot_prenota_attuale'] = $tot_prenota;
tab_a_var ($limiti_var,$app_prenota_id,$app_orig_prenota_id,$inizio_prenota_id,$fine_prenota_id,$app_assegnabili_id,$prenota_in_app_sett,$anno,$dati_app,$profondita,$PHPR_TAB_PRE."prenota");
unset($info_periodi_ag);
$app_agenzia_c = esegui_query("select * from $tableregole where app_agenzia != '' and motivazione2 = 'x' ");
$info_periodi_ag['numero'] = numlin_query($app_agenzia_c);
if ($info_periodi_ag['numero']) {
for ($num1 = 0 ; $num1 < $info_periodi_ag['numero'] ; $num1++) {
$info_periodi_ag['app'][$num1] = risul_query($app_agenzia_c,$num1,'app_agenzia');
$info_periodi_ag['ini'][$num1] = risul_query($app_agenzia_c,$num1,'iddatainizio');
$info_periodi_ag['fine'][$num1] = risul_query($app_agenzia_c,$num1,'iddatafine');
} # fine for $num1
inserisci_prenota_fittizie($info_periodi_ag,$profondita,$app_prenota_id,$inizio_prenota_id,$fine_prenota_id,$prenota_in_app_sett,$app_assegnabili_id);
$app_orig_prenota_id = $app_prenota_id;
} # fine if ($info_periodi_ag['numero'])

$app_agenzia = esegui_query("select * from $tableregole where app_agenzia != '' and (motivazione2 != 'x' or motivazione2 is NULL) ");
$regole2 = esegui_query("select * from $tableregole where tariffa_per_app != ''");
$dati_tariffe = dati_tariffe($tablenometariffe,"","",$tableregole);

unlock_tabelle($tabelle_lock);


$num_regole2 = numlin_query($regole2);
unset($app_regola2_orig);
for ($num1 = 0 ; $num1 < $num_regole2 ; $num1++) {
$numtariffa_regola2 = str_replace("tariffa","",risul_query($regole2,$num1,'tariffa_per_app'));
if ($tariffe_mostra[$numtariffa_regola2] == "SI") $app_regola2_orig[$numtariffa_regola2] = risul_query($regole2,$num1,'motivazione');
} # fine for $num1

$colonna_destra_tab_disp = "NO";
$nome_mese["01"] = $fr_Gennaio;
$nome_mese["02"] = $fr_Febbraio;
$nome_mese["03"] = $fr_Marzo;
$nome_mese["04"] = $fr_Aprile;
$nome_mese["05"] = $fr_Maggio;
$nome_mese["06"] = $fr_Giugno;
$nome_mese["07"] = $fr_Luglio;
$nome_mese["08"] = $fr_Agosto;
$nome_mese["09"] = $fr_Settembre;
$nome_mese["10"] = $fr_Ottobre;
$nome_mese["11"] = $fr_Novembre;
$nome_mese["12"] = $fr_Dicembre;
unset($app_consentito);
unset($app_consentito_sett);

# Calcolo gli appartamenti consentiti dalla regola 2 e i nomi delle tariffe
$tutti_consentiti = "NO";
for ($numtariffa = 1 ; $numtariffa <= $dati_tariffe['num'] ; $numtariffa++) {
if ($tariffe_mostra[$numtariffa] == "SI") {
if ($mostra_quadro_disp == "reg2") {
if ($n_tariffe_imposte[$numtariffa]) $nome_tariffa[$numtariffa] = $n_tariffe_imposte[$numtariffa];
else {
$nome_tariffa[$numtariffa] = $dati_tariffe["tariffa$numtariffa"]['nome'];
if ($nome_tariffa[$numtariffa] == "") $nome_tariffa[$numtariffa] = $fr_tariffa.$numtariffa;
} # fine else if ($n_tariffe_imposte[$numtariffa])
} # fine if ($mostra_quadro_disp == "reg2")
if (!$app_regola2_orig[$numtariffa]) $tutti_consentiti = "SI";
if ($tutti_consentiti != "SI") {
$appartamenti_regola2 = explode(",",$app_regola2_orig[$numtariffa]);
for ($num1 = 0 ; $num1 < count($appartamenti_regola2) ; $num1++) $app_consentito[$appartamenti_regola2[$num1]] = "SI";
} # fine if ($tutti_consentiti != "SI")
} # fine if ($tariffe_mostra[$numtariffa] == "SI")
} # fine for $numtariffa
if ($tutti_consentiti == "SI") for ($num1 = 0 ; $num1 < $dati_app['totapp'] ; $num1++) $app_consentito[$dati_app['posizione'][$num1]] = "SI";

# Calcolo gli appartamenti consentiti dalla regola 1
$num_app_agenzia = numlin_query($app_agenzia);
if ($num_app_agenzia != 0 and is_array($motivazioni_regola1)) {
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1 = $num1 + 1) {
$id_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'app_agenzia');
$idinizio_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'iddatainizio');
$idfine_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'iddatafine');
$motivazione_app_agenzia[$num1] = risul_query($app_agenzia,$num1,'motivazione');
if ($motivazione_app_agenzia[$num1] == "") $motivazione_app_agenzia[$num1] = " ";
} # fine for $num1
$app_consentito_sett[",attivo,"] = "SI";
for ($num1 = 0 ; $num1 < $dati_app['totapp'] ; $num1++) {
for ($num2 = $id_data_inizio_tab_disp ; $num2 <= ($id_data_inizio_tab_disp + $num_colonne_tab_disp - 1) ; $num2++) {
$app_consentito_sett[$dati_app['posizione'][$num1]][$num2] = "SI";
} # fine for $num2
} # fine for $num1
for ($num1 = 0 ; $num1 < $num_app_agenzia ; $num1++) {
if ($motivazioni_regola1[$motivazione_app_agenzia[$num1]] == "SI") {
for ($num2 = $idinizio_app_agenzia[$num1] ; $num2 <= $idfine_app_agenzia[$num1] ; $num2++) {
$app_consentito_sett[$id_app_agenzia[$num1]][$num2] = "NO";
} # fine for $num2
} # fine if ($motivazioni_regola1[$motivazione_app_agenzia[$num1]] == "SI")
} # fine for $num1
} # fine if ($num_app_agenzia != 0 and is_array($motivazioni_regola1))

$righe_tab_disp = crea_quadro_disp($id_data_inizio_tab_disp,$num_colonne_tab_disp,$mostra_quadro_disp,$mostra_num_liberi,$app_consentito,$app_consentito_sett,$app_regola2_orig,$tipo_periodi,$dati_tariffe['num'],$nome_tariffa,$dati_app,$prenota_in_app_sett,$app_orig_prenota_id,$tableperiodi,$allinea_disponibilita_con_arrivo,$dati_tariffe);

if ($righe_tab_disp) {
echo "<div class=\"cal_title\">$apertura_tag_font
<a href=\"./$pag?id_data_inizio_tab_disp=".($id_data_inizio_tab_disp - $num_colonne_tab_disp)."\">".str_replace("<-",htmlspecialchars("<-"),$fr_freccia_sinistra)."</a>
$fr_Quadro_indicativo_disponibilita
<a href=\"./$pag?id_data_inizio_tab_disp=".($id_data_inizio_tab_disp + $num_colonne_tab_disp)."\">".str_replace("->",htmlspecialchars("->"),$fr_freccia_destra)."</a>
$chiusura_tag_font</div>
<table class=\"tab_disp\" $stile_tabella_cal>
$righe_tab_disp
</table>";
} # fine if ($righe_tab_disp)


if ($framed) {
echo "
</body>
</html>
";
} # fine if ($framed)





###########################################
###  FINE ./includes/templates/cal/template.php 
###########################################

if (!$framed) {
?>


<!-- BEGINNING OF THE SECOND PART OF CUSTOM HTML  -->





<small><small>Powered by 
<a href="http://www.hoteldruid.com" style="color: #000000;">
HotelDruid management software</a></small></small></div>

</body>
</html>
<!-- END OF THE SECOND PART OF CUSTOM HTML  --><?php } # fine if (!$framed) ?>