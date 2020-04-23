TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER pogoj_pokoj BEFORE UPDATE ON postar\nFOR EACH ROW\nBEGIN\n	IF (NEW.Starost >= 65 AND NEW.delovnaDoba >= 40)\n    THEN\n    	SET NEW.pogojPokoj = 1;\n    END IF;\nEND'
sql_modes=1073741824
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci'
