CREATE FUNCTION GetRandomNumber()
RETURNS INT NO SQL
BEGIN
    DECLARE randomNumber INT;

    SET randomNumber = (SELECT FLOOR(RAND() * (300 - 50 + 1)) + 50);

    RETURN randomNumber;
END