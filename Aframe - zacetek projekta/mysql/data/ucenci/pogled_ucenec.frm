TYPE=VIEW
query=select `ucenci`.`ucenec`.`idUcenec` AS `idUcenec`,`ucenci`.`ucenec`.`Ime` AS `Ime`,`ucenci`.`ucenec`.`Priimek` AS `Priimek`,`ucenci`.`ucenec`.`Letnik` AS `Letnik`,`ucenci`.`ucenec`.`Starost` AS `Starost`,`ucenci`.`ucenec`.`Naslov_idNaslov` AS `Naslov_idNaslov`,`ucenci`.`ucenec`.`zacetnica` AS `zacetnica` from `ucenci`.`ucenec` where (`ucenci`.`ucenec`.`Starost` > (select avg(`ucenci`.`ucenec`.`Starost`) from `ucenci`.`ucenec`))
md5=b35f66009b9ea54ed297d6885cb4e97d
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2019-12-18 08:06:55
create-version=1
source=SELECT * FROM ucenec WHERE Starost > (SELECT AVG(Starost) FROM ucenec)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `ucenci`.`ucenec`.`idUcenec` AS `idUcenec`,`ucenci`.`ucenec`.`Ime` AS `Ime`,`ucenci`.`ucenec`.`Priimek` AS `Priimek`,`ucenci`.`ucenec`.`Letnik` AS `Letnik`,`ucenci`.`ucenec`.`Starost` AS `Starost`,`ucenci`.`ucenec`.`Naslov_idNaslov` AS `Naslov_idNaslov`,`ucenci`.`ucenec`.`zacetnica` AS `zacetnica` from `ucenci`.`ucenec` where (`ucenci`.`ucenec`.`Starost` > (select avg(`ucenci`.`ucenec`.`Starost`) from `ucenci`.`ucenec`))
