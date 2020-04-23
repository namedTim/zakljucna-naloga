TYPE=VIEW
query=select `ucenci`.`profesor`.`Ime` AS `Ime`,`ucenci`.`profesor`.`Priimek` AS `Priimek`,`ucenci`.`predmet`.`Ime` AS `predmet` from (`ucenci`.`profesor` left join `ucenci`.`predmet` on((`ucenci`.`profesor`.`idprofesor` = `ucenci`.`predmet`.`profesor_idprofesor`)))
md5=8b076a27411e243397b0991fd1193466
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2019-12-18 08:22:58
create-version=1
source=SELECT profesor.Ime, profesor.Priimek, predmet.Ime AS predmet FROM profesor LEFT JOIN predmet ON(profesor.idprofesor=predmet.profesor_idprofesor)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `ucenci`.`profesor`.`Ime` AS `Ime`,`ucenci`.`profesor`.`Priimek` AS `Priimek`,`ucenci`.`predmet`.`Ime` AS `predmet` from (`ucenci`.`profesor` left join `ucenci`.`predmet` on((`ucenci`.`profesor`.`idprofesor` = `ucenci`.`predmet`.`profesor_idprofesor`)))
