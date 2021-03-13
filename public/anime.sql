DROP TABLE IF EXISTS Anime;

CREATE TABLE Anime(
  AnimeNr   INT AUTO_INCREMENT,
  AnimeName VARCHAR(100),
  Episodes  INT(5),
  Score     INT(2),
  PRIMARY KEY AnimeNr (AnimeNr)
);