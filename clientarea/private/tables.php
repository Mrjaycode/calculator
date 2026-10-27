<?php
   include 'shadow.php';
   
   
   
   /////////////////ADD CLIENT/////////////////
   $client_tbl = "
     CREATE TABLE IF NOT EXISTS `client_tbl` (
       id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
       auser_id VARCHAR(255) NULL,
       user_image VARCHAR(230) NULL,
       user_name VARCHAR(100) NULL,
       mobile VARCHAR(20) NULL,
       email VARCHAR(255) NULL,
       role VARCHAR(230) NULL,
       dashboard TINYINT(1) DEFAULT 1,
      blogs TINYINT(1) DEFAULT 0,
      contacts TINYINT(1) DEFAULT 0,
      city_seo TINYINT(1) DEFAULT 0,
      pages_seo TINYINT(1) DEFAULT 0,
      manage_users TINYINT(1) DEFAULT 0,
       password TEXT NULL,
       status VARCHAR(10) NULL,
       added_by VARCHAR(30) NULL,
       added_date VARCHAR(30) NULL,
       added_time VARCHAR(30) NULL
     )
   ";
   $anjan->exec($client_tbl);
   /////////////////ADD CLIENT/////////////////

  

    $blog_tbl="
     CREATE TABLE IF NOT EXISTS `blog_tbl`(
       id int(10) not null primary key auto_increment,
       auser_id varchar(255) null,
       blog_id varchar(30) null,
       blog_category text null,
       title varchar(250) null,
       blog_heading text null,
       meta_description varchar(250) null,
       meta_title varchar(255) null,
       meta_script text null,
       keywords varchar(240) null,
       slug VARCHAR(255) NOT NULL,
       blog_image varchar(300) null,
      blog_description LONGTEXT NULL,
      quick_takeaway TEXT NULL,
    quotation TEXT NULL,
    formula_text    TEXT NULL,
       status varchar(10) null default 1,
       added_by varchar(30) null,
       added_date varchar(30) null,
       added_time varchar(30) null
     )
   ";
   $anjan->exec($blog_tbl);
   /////////////////BLOG/////////////////
   

   $contact_us="
CREATE TABLE IF NOT EXISTS contact_us(
    id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    contact_id VARCHAR(30) NOT NULL,

    first_name VARCHAR(100) NULL,
    last_name VARCHAR(100) NULL,

    business_name VARCHAR(255) NULL,
    business_type VARCHAR(255) NULL,
    weburl VARCHAR(255) NULL,

    mobile VARCHAR(30) NULL,
    email VARCHAR(255) NULL,

    inquiry_type VARCHAR(100) NULL,

    message TEXT NULL,

    added_date VARCHAR(30) NULL,
    added_time VARCHAR(30) NULL
)";
$anjan->exec($contact_us);
   /////////////////CONTACT INFOMATION/////////////////

$newsletter_tbl="
CREATE TABLE IF NOT EXISTS `newsletter_tbl`(
    id INT AUTO_INCREMENT PRIMARY KEY,
    sub_id varchar(230) null,
    email VARCHAR(255) NOT NULL UNIQUE,
    added_date varchar(30) null,
       added_time varchar(30) null
)";
   $anjan->exec($newsletter_tbl);
   
//////////////////// Advertizing Management /////////////////
$ads_management_tbl = "
  CREATE TABLE IF NOT EXISTS ads_management_tbl (
    id INT AUTO_INCREMENT PRIMARY KEY,
    advertising_id VARCHAR(30) NOT NULL,
    user_id VARCHAR(30) NULL,
    ads_title VARCHAR(30) NOT NULL,
    ads_link VARCHAR(100) NOT NULL,
    ads_file VARCHAR(250) NOT NULL,
    ads_description VARCHAR(250) NOT NULL,
    status VARCHAR(100) NOT NULL,
    `clicks` INT UNSIGNED NOT NULL DEFAULT 0,
  `impressions` INT UNSIGNED NOT NULL DEFAULT 0,
    start_date DATE DEFAULT NULL,
    end_date DATE DEFAULT NULL,
    added_date VARCHAR(30) DEFAULT NULL,
    added_time VARCHAR(30) DEFAULT NULL
  )";
$anjan->exec($ads_management_tbl);
//////////////////Advertizing Management/////////////////
/////////////////Business/////////////////
$cities_tbl="
  CREATE TABLE IF NOT EXISTS `cities_tbl`(
    id int(10) not null primary key auto_increment,
    cities_id VARCHAR(20) NOT NULL,
    slug VARCHAR(255) null,
    meta_title VARCHAR(255) null,
    meta_description TEXT null,
    meta_script TEXT null,
    keywords TEXT null,
    city VARCHAR(100) not null,
    added_date varchar(30) null,
    added_time varchar(30) null
  )
";
$anjan->exec($cities_tbl);
/////////////////Business/////////////////

$pages_seo_tbl = "
CREATE TABLE IF NOT EXISTS `pages_seo_tbl` (
    id int(10) not null primary key auto_increment,
    insta_id VARCHAR(20) NOT NULL,
    slug VARCHAR(255) not null,
    meta_title VARCHAR(255) NOT NULL,
    meta_description TEXT null,
    meta_script TEXT null,
    keywords TEXT null,
    title VARCHAR(255) NOT NULL,
    added_date varchar(30) null,
    added_time varchar(30) null
)";
$anjan->exec($pages_seo_tbl);

  ?>