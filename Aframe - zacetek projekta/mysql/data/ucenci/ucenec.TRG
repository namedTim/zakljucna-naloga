TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER izracun_starosti_ucenca BEFORE INSERT ON ucenec FOR EACH ROW SET NEW.starost = YEAR(CURDATE())-NEW.letnik'
sql_modes=1073741824
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci'
