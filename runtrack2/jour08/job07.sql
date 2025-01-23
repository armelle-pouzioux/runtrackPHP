SELECT * 
FROM etudiants 
WHERE YEAR(CURDATE()) - YEAR(naissance) > 18 
  OR (YEAR(CURDATE()) - YEAR(naissance) = 18 AND 
      (MONTH(CURDATE()) > MONTH(naissance) OR 
       (MONTH(CURDATE()) = MONTH(naissance) AND 
       DAY(CURDATE()) >= DAY(naissance)));