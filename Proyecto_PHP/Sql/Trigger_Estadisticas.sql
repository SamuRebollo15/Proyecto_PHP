CREATE TRIGGER insertar_estadisticas
AFTER INSERT ON pokemon
FOR EACH ROW
BEGIN
    INSERT INTO estadisticas_base (numero_pokedex, ps, ataque, defensa, especial, velocidad)
    VALUES (NEW.numero_pokedex, GetRandomNumber(), GetRandomNumber(), GetRandomNumber(), GetRandomNumber(), GetRandomNumber());
END