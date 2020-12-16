CREATE TABLE `ABUSEDATA` (
 `rollno` int(11) NOT NULL,
 `firstname` varchar(100) NOT NULL,
 `middlename` varchar(100) NOT NULL, 
 `lastname` varchar(100) NOT NULL,
 `branch` varchar(100) NOT NULL,
 `mental` varchar(100) NOT NULL,
 `physical` varchar(100) NOT NULL,
` others` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
`gmail` varchar(100) NOT NULL,
 `social` varchar(100) NOT NULL,
`country` varchar(100) NOT NULL,
`year` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
 `gender` varchar(100) NOT NULL
 );




CREATE TABLE `COLLEGEISSUEDATA` (
`rollno` int(11) NOT NULL,
`firstname` varchar(100) NOT NULL,
`middlename` varchar(100) NOT NULL, 
`lastname` varchar(100) NOT NULL,
`branch` varchar(100) NOT NULL,
`teacher` varchar(100) NOT NULL,
`mentor` varchar(100) NOT NULL,
`others` varchar(100) NOT NULL,
`address` varchar(100) NOT NULL,
`gmail` varchar(100) NOT NULL,
`library` varchar(100) NOT NULL,
`country` varchar(100) NOT NULL,
`year` varchar(100) NOT NULL,
`nationality` varchar(100) NOT NULL,
` gender` varchar(100) NOT NULL
 );


CREATE TABLE `HOSTELISSUEDATA` (
`rollno` int(11) NOT NULL,
`firstname` varchar(100) NOT NULL,
`middlename` varchar(100) NOT NULL, 
`lastname` varchar(100) NOT NULL,
`branch` varchar(100) NOT NULL,
`warden` varchar(100) NOT NULL,
`roomate` varchar(100) NOT NULL,
`mess` varchar(100) NOT NULL,
`others` varchar(100) NOT NULL,
`address` varchar(100) NOT NULL,
`gmail` varchar(100) NOT NULL,
`year` varchar(100) NOT NULL,
`gender` varchar(100) NOT NULL

 );
 




CREATE TABLE `OTHERDATA` (
`rollno` int(11) NOT NULL,
`firstname` varchar(100) NOT NULL,
`middlename` varchar(100) NOT NULL, 
`lastname` varchar(100) NOT NULL,
`branch` varchar(100) NOT NULL,
`feedback` varchar(100) NOT NULL,
`problem` varchar(100) NOT NULL,
`address` varchar(100) NOT NULL,
`gmail` varchar(100) NOT NULL,
`country` varchar(100) NOT NULL,
`nationality` varchar(100) NOT NULL,
`year` varchar(100) NOT NULL,
`gender` varchar(100) NOT NULL

 );




CREATE TABLE `SUPPLYFORMS` (
`rollno` int(11) NOT NULL,
`firstname` varchar(100) NOT NULL,
`middlename` varchar(100) NOT NULL, 
`lastname` varchar(100) NOT NULL,
`branch` varchar(100) NOT NULL,
`batch` varchar(100) NOT NULL,
`subject` varchar(100) NOT NULL,
`appeared` varchar(100) NOT NULL,
`schedule` varchar(100) NOT NULL,
`tutor` varchar(100) NOT NULL,
`gender` varchar(100) NOT NULL

 );
 CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 