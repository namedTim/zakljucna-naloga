TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER vnos_ucenca BEFORE INSERT ON kraj_bivanja FOR EACH ROW SET NEW.kraj = CONCAT(NEW.kraj," TRIGGERED")' 'CREATE DEFINER=`root`@`localhost` TRIGGER transfer_in_case_of_delete BEFORE DELETE ON kraj_bivanja FOR EACH ROW INSERT INTO backup_on_delete\nVALUES (OLD.idKraj,OLD.Kraj,OLD.Postna_stevilka)'
sql_modes=1073741824 1073741824
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci' 'latin1_swedish_ci'
