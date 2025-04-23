CREATE TABLE admin_login (
	sr_no serial primary key,
  	admin_name varchar(50) NOT NULL,
  	admin_pass varchar(50) NOT NULL
);

INSERT INTO admin_login(admin_name, admin_pass) VALUES('root', 'root');

CREATE TABLE grievance_type(
	g_id serial primary key,
  	gr_type varchar(30) NOT NULL
);


CREATE TABLE grr_type (
  g_id serial primary key,
  gr_type varchar(100) NOT NULL
);

INSERT INTO grr_type (gr_type) VALUES
('Grievance regarding college transportation'),
('Grievance related to Victimization'),
('Grievance related to charging of fees'),
('Grievance regarding non-transparent or unfair evaluation process'),
('Non-observation of AICTE norms and standards'),
('Grievance related to harassment by students or teachers'),
('Grievance related to provision of student amenities and quality education as promised or required to'),
('Non-payment or Delay in payment of scholarships'),
('Grievance on discrimination by students from SC/ST/Minority/Women/Disabled Categories '),
('College timing'),
('Grievance related to transportation'),
('Grievance related to infra');

CREATE table member_list (
  id serial primary key,
  mem_name varchar(30) NOT NULL,
  mem_mobile varchar(30) DEFAULT NULL,
  mem_desg varchar(30) DEFAULT NULL,
  mem_email varchar(40) DEFAULT NULL,
  mem_user varchar(30) NOT NULL,
  mem_pass varchar(30) NOT NULL
);

INSERT INTO member_list(mem_name, mem_mobile, mem_desg, mem_email, mem_user, mem_pass) VALUES
('Poonam D Dede', '9075044780', 'Professor', 'p@gmail.com', 'poonamd', 'p'),
('Nagare P H', '9921767953', 'Professor', 'popatnagare@gmail.com', 'nagare', 'n');

CREATE TABLE post_grievance (
  gr_id serial primary key,
  gr_type varchar(10) NOT NULL,
  gr_subject varchar(100) NOT NULL,
  gr_details varchar(300) NOT NULL,
  std_user varchar(30) NOT NULL,
  status varchar(20) NOT NULL,
  g_date varchar(15) NOT NULL,
  gr_mem_details varchar(300) NOT NULL
);

INSERT INTO post_grievance (gr_type, gr_subject, gr_details, std_user, status, g_date, gr_mem_details) VALUES
('2', 'df dfh fgfj ghj gh ghk', 'hjk hjk jljk jk jk; ljkl, ghmghk yh ghm ghk  ', 'tohif', 'Pending', '0', ''),
('2', 'df dfh fgfj ghj gh ghk', 'hjk hjk jljk jk jk; ljkl, ghmghk yh ghm ghk  ', 'tohif', 'Pending', '0', ''),
('2', 'df dfh fgfj ghj gh ghk', 'hjk hjk jljk jk jk; ljkl, ghmghk yh ghm ghk  ', 'tohif', 'Pending', '0', ''),
('5', 'xdfs ', 'dfhg df hfg', 'tohif', 'Pending', '0', ''),
('10', 'dfsg gfj ghj ', 'dtrh gfh gfh gfj', 'tohif', 'Success', '31/05/2018', '                 hjkhjkhjk  '),
('13', 'Please change college timing ', 'We are cumming from Khed, ', 'tohif', 'Success', '31/05/2018', '                   dsgfsdg'),
('3', 'dd', 'das', 'vijay', 'Pending', '01/06/2018', ''),
('5', 'Return of my college fee', 'I am paid 25000 of my college fee, but as per college decision our cast fees is 22000. so please return me the remaining fee.', 'vijay', 'Success', '01/06/2018', 'collect fee from account section on date 9-6-2018 ');

CREATE TABLE std_registration (
  id serial primary key,
  std_name varchar(30) NOT NULL,
  std_course varchar(50) NOT NULL,
  std_year varchar(4) NOT NULL,
  std_roll_no varchar(10) NOT NULL,
  std_email varchar(50) NOT NULL,
  std_username varchar(30) NOT NULL,
  std_pass varchar(30) NOT NULL,
  std_mobile varchar(15) NOT NULL
);

INSERT INTO std_registration(std_name, std_course, std_year, std_roll_no, std_email, std_username, std_pass, std_mobile) VALUES
('Nagare', 'Computer Engg', 'TY', '15', 'a@b.com', 'nagare', 'n', '9075044780'),
('Nagare', 'Computer Engg', 'TY', '15', 'a@b.com', 'nagare', 'n', '9075044780'),
('Shaikh Tohif', 'Computer', 'TY', '12', 'tohif@gmail.com', 'tohif', 't', '7030751938'),
('Shaikh Tohif', 'Computer', 'FY', '12', 'tohif@gmail.com', 'tohif_shaikh', 't', '7030751938'),
('saie  surahj vke', 'Computer', 'TY', '501', 'saiev@gmail', 'saie', 's', '9685645865'),
('Vijay Chopade', 'Computer', 'SY', '134', 'vj@gmail.com', 'vijay', 'v', '9454564545');

CREATE TABLE stud_reg (
  id serial primary key,
  name varchar(30) NOT NULL,
  course varchar(30) NOT NULL,
  branch varchar(30) NOT NULL,
  roll_no numeric(30) NOT NULL,
  email varchar(30) NOT NULL,
  user_name varchar(30) NOT NULL,
  password varchar(30) NOT NULL
);

INSERT INTO stud_reg(name, course, branch, roll_no, email, user_name, password) VALUES
('tohif', 'tyco', 'computer', 10, 'tohifs', 'tohif', 'n'),
('tohif', 'tyco', 'computer', 10, 'tohifs', 'tohif', 'n'),
('tohif', 'tyco', 'computer', 10, 'tohifs', 'tohif', 'n');

CREATE TABLE tj(
  user_name varchar(30) DEFAULT NULL,
  name varchar(30) DEFAULT NULL,
  course varchar(30) DEFAULT NULL,
  branch varchar(30) DEFAULT NULL,
  roll_no numeric(30) DEFAULT NULL,
  password varchar(30) DEFAULT NULL,
  email varchar(30) DEFAULT NULL
);
