TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER sprememba_postnine BEFORE INSERT ON posiljka\nFOR EACH ROW\nBEGIN\n	IF (NEW.Postnina <= 0)\n    THEN\n    	SET NEW.Postnina = 4.99;\n    END IF;\nEND'
sql_modes=1073741824
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci'
